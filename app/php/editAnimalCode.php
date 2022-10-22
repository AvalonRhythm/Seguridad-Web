<?php
require_once("php/BDConnection.php");
require_once("php/addAnimalCode.php");
extract($_POST);
#$e=$editar.''.$sn;
if(isset($editar1)){
    echo $data['nombre']??'';
$inputData = [
'nombre' => validate($nombre) ?? "",
'especie'   => validate($especie) ?? "",
'raza'    => validate($raza) ?? "",
'edad'   => validate($edad) ?? "",
'sexo'  => validate($sexo) ?? "",
'descripcion'     => validate($descripcion) ?? "",
###'subidopor'    => validate($useradd)?? ""
];
$tableName= "animales";
echo $sn;
$db = $conexion;
$result= edit_data($db, $tableName, $inputData);
}
function edit_data($db, $tableName, $inputData){
 $data = implode(" ",$inputData);
if(empty($db)){
 $msg= "Database connection error";
}elseif(empty($tableName)){
  $msg= "Table Name is empty";
#}elseif(trim( $data ) == ""){
 # $msg= "Empty Data not allowed to insert";
}else{
    $query="UPDATE ".$tableName." SET nombre='".validate($nombre1)??""."' where id='".$data['id']??''."';";
    echo $query;
    $execute= $db->query($query);
   if($execute=== true){
  $msg= "Data was inserted successfully";
 }else{
  $msg= mysqli_error($db);
 }
}
 return $msg;
}
 ?>