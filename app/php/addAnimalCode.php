<?php
require_once("php/BDConnection.php");
extract($_POST);
if(isset($save)){
$inputData = [
'nombre' => validate($nombre) ?? "",
'especie'   => validate($especie) ?? "",
'raza'    => validate($raza) ?? "",
'edad'   => validate($edad) ?? "",
'sexo'  => validate($sexo) ?? "",
'descripcion'     => validate($descripcion) ?? "",
#'subidopor'    => validate($user)?? ""
];
$tableName= "animales";
$db = $conexion;
$result= insert_data($db, $tableName, $inputData);
}
function insert_data($db, $tableName, $inputData){
 $data = implode(" ",$inputData);
if(empty($db)){
 $msg= "Database connection error";
}elseif(empty($tableName)){
  $msg= "Table Name is empty";
}elseif(trim( $data ) == ""){
  $msg= "Empty Data not allowed to insert";
}else{
    $query  = "INSERT INTO ".$tableName." (";
    $query .= implode(",", array_keys($inputData)) . ') VALUES (';
    $query .= "'" . implode("','", array_values($inputData)) . "')";
    $execute= $db->query($query);
   if($execute=== true){
  $msg= "Data was inserted successfully";
 }else{
  $msg= mysqli_error($db);
 }
}
 return $msg;
}
function validate($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>