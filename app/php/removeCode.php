<?php
require_once("php/BDConnection.php");
    // Get all the categories from category table
    $sql = "SELECT * FROM animales";
    $all_categories = mysqli_query($conexion,$sql);
  
    // The following code checks if the submit button is clicked
    // and inserts the data in the database accordingly
    if(isset($_POST['adoptar']))
    {
        // echo $_POST['Animal'];
        // Store the Category ID in a "id" variable
        #$animal = mysqli_real_escape_string($conexion,$_POST['Animal']);
        
        // Creating an insert query using SQL syntax and
        // storing it in a variable.
        $sql_delete = "DELETE FROM animales WHERE id='".$_POST['Animal']."'";
        mysqli_query($conexion,$sql_delete);

        header("location: http://localhost:81/listaAdopcion.php");
        // The following code attempts to execute the SQL query
          // if the query executes with no errors
          // a javascript alert message is displayed
          // which says the data is inserted successfully
    }
?>