<?php

    //INICIALIZAR LA SESION
    session_start();

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: index.php");
        exit;
    }

require_once("php/BDConnection.php");

$user = "";
$password = "";

$user_err = "";
$password_err = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    if(empty(trim($_POST["user"]))){
        $user_err = "Por favor, ingrese el nombre de usuario";
    }else{
        $user = trim($_POST["user"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor, ingrese una contraseña";
    }else{
        $password = trim($_POST["password"]);
    }
    
    
    

    //VALIDAR CREDENCIALES
    if(empty($user_err) && empty($password_err)){
        
        $sql = "SELECT contrasenia FROM usuarios WHERE usuario = ?";
        
        if($stmt = mysqli_prepare($conexion, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_user);
            
            $param_user = $user;
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
            }
            
            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt, $contrasenia);
                if(mysqli_stmt_fetch($stmt)){
                    //if(password_verify($password, $hashed_password)){
                    if($password == $contrasenia){
                        session_start();
                        
                        // ALMACENAR DATOS EN VARABLES DE SESION
                        $_SESSION["loggedin"] = true;
                        $_SESSION["user"] = $user;
                        
                        header("location: http://localhost:81/index.php");
                    }else{
                        $password_err = "La contraseña que has introducido no es valida";
                    }
                    
                } 
            }else{
                    $user_err = "No se ha encontrado ninguna cuenta con ese usuario";
                }
            
        }else{
                    echo "UPS! algo salio mal, intentalo mas tarde";
                }
    }
    
    mysqli_close($conexion);
    
}

?>