<?php
session_start();

include_once("php/BDConnection.php");


function user_exist($usuario, $contrasena){
    global $conexion;

    $select_psw = "SELECT contrasenia FROM USUARIOS WHERE usuario= '$usuario'";
    $psw = mysqli_query($conexion, $select_psw);

    if($psw == $contrasena){
        return true;
    }
    else {
        return false;
    }
}


if(isset($_POST[""] && !empty($_POST["login_txt"]) && !empty($_POST["password_txt"] {
    
    $usuario_introducido = mysqli_real_escape_string($conexion, $_POST["login_txt"]);
    $contrasena_introducida = mysqli_real_escape_string($conexion, $_POST["password_txt"]);
    
    
    //Comprobamos que exista el usuario con esa contrasena
    if(!existe_Usuario($usuario_introducido, $contrasena_introducida))
    {

        echo "El usuario no existe";
    }
    //Si el usuario existe
    else
    {
        if(isset($usuario_introducido))
        {
            $_SESSION['usuario'] = $usuario_introducido;
            header("location: index.php");
        }
        
    }    

}
?>