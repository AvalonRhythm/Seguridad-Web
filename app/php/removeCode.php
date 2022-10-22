<?php
    require_once("php/BDConnection.php");
    // Connect to database
     
  
    // Get all the categories from category table
    $sql = "SELECT nombre FROM animales";
    $all_categories = mysqli_query($conexion,$sql);
  
    // The following code checks if the submit button is clicked
    // and inserts the data in the database accordingly
    if(isset($adoptar))
    {
        // Store the Product name in a "name" variable
        echo "sale algo?";
        echo $_POST['Animal'];
        // Store the Category ID in a "id" variable
        $id = mysqli_real_escape_string($conexion,$_POST['Animal']);
        
        // Creating an insert query using SQL syntax and
        // storing it in a variable.
        $sql_insert ="DELETE FROM animales WHERE id='$id'";
          
          // The following code attempts to execute the SQL query
          // if the query executes with no errors
          // a javascript alert message is displayed
          // which says the data is inserted successfully
    }
?>