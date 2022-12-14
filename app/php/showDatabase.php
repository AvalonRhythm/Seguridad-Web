<?php
include("php/BDConnection.php");

$db= $conexion;
$tableName="animales";
$columns= ['id', 'nombre', 'especie','raza','edad','sexo', 'descripcion'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
   if(empty($db)){
     $msg= "Database connection error";
   }elseif (empty($columns) || !is_array($columns)) {
     $msg="columns Name must be defined in an indexed array";
   }elseif(empty($tableName)){
      $msg= "Table Name is empty";
   }else{
      $columnName = implode(", ", $columns);
      $query = "SELECT * FROM $tableName"." ORDER BY id ASC";
      #$query = "SELECT ".$columnName." FROM $tableName"." ORDER BY id ASC";
      $result = $db->query($query);
      if($result== true){ 
         if ($result->num_rows > 0) {
            $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
            $msg= $row;
         }else{
            $msg= "No Data Found"; 
         }
      }else{
        $msg= mysqli_error($db);
      }
   }
   return $msg;
}
?>