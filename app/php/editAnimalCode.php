<?php
require_once("php/BDConnection.php");
require_once("php/addAnimalCode.php");
extract($_POST);

$sql = "SELECT * FROM animales";
$all_categorias = mysqli_query($conexion,$sql);


if(isset($editar)){
$inputData = [
'nombre' => validate($nombre2) ?? "",
'especie'   => validate($especie2) ?? "",
'raza'    => validate($raza2) ?? "",
'edad'   => validate($edad2) ?? "",
'sexo'  => validate($sexo2) ?? "",
'descripcion'     => validate($descripcion2) ?? "",
###'subidopor'    => validate($useradd)?? ""
];
$tableName= "animales";
$db = $conexion;
$result= edit_data($db, $tableName, $inputData);
}
function edit_data($db, $tableName, $inputData){
  $data = implode(" ",$inputData);
if(empty($db)){
 $msg= "Database connection error";
}elseif(empty($tableName)){
  $msg= "Table Name is empty";
}elseif(trim( $data ) == ""){
  $msg= "Empty Data not allowed to insert";
}else{
    $query="UPDATE animales SET nombre='".$nombre2."' where id='".$_POST['eleccion']."'";
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