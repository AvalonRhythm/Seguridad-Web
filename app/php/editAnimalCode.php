<?php
require_once("php/BDConnection.php");
require_once("php/addAnimalCode.php");
extract($_POST);

$sql = "SELECT * FROM animales";
$all_categorias = mysqli_query($conexion,$sql);


if(isset($editar)){

  /*
  if(strcmp($nombre2, NULL) !== 0){
  if(){
    $inputData['nombre'] = validate($nombre2);
  }
  if(strcmp($especie2, NULL) !== 0){
    $inputData['especie'] = validate($especie2);
   }
  if(strcmp($raza2, NULL) !== 0){
    $inputData['raza'] = validate($raza2);
  }
  if(strcmp($edad2, NULL) !== 0){
    $inputData['edad'] = validate($edad2);
  }
  if(strcmp($sexo2, NULL) !== 0){
    $inputData['sexo'] = validate($sexo2);
  }
  if(strcmp($descripcion2, NULL) !== 0){
    $inputData['descripcion'] = validate($descripcion2);
  }
  */
  #/*
  $inputData = [
  'nombre' => validate($nombre2) ?? "",
  'especie'   => validate($especie2) ?? "",
  'raza'    => validate($raza2) ?? "",
  'edad'   => validate($edad2) ?? "",
  'sexo'  => validate($sexo2) ?? "",
  'descripcion'     => validate($descripcion2) ?? "",
  #'subidopor'    => validate($useradd)?? ""
  ];
  #*/
  $tableName= "animales";
  $db = $conexion;
  $result= edit_data($db, $tableName, $inputData);
  header("location: http://localhost:81/listaAdopcion.php");
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
      $sql_update = "UPDATE animales SET nombre='".$inputData['nombre']."', especie='".$inputData['especie']."', raza='".$inputData['raza']."', edad='".$inputData['edad']."', sexo='".$inputData['sexo']."', descripcion='".$inputData['descripcion']."' WHERE id ='".$_POST['eleccion']."'";
      $execute= $db->query($sql_update);
      if($execute=== true){
        $msg= "Data was inserted successfully";
      }else{
        $msg= mysqli_error($db);
      }
  }
  return $msg;
}
?>