<?php
    #Nos conectamos a la base de datos
    $conexion = mysqli_connect("db", "sudo", "seguridad", "database");

    if($conexion == false){
        die("ERROR EN LA CONEXIÓN" . mysqli_connect_error());
    }   
?>
