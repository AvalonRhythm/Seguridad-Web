<?php
// Incluir archivo de conexion a la base de datos
include_once "php/BDConnection.php";

// Definir variable e inicializar con valores vacio
$username = "";
$email = "";
$password = "";
$dni = "";
$name = "";
$fechaNac = "";
$telefono = "";


$username_err = "";
$email_err = "";
$password_err = "";
$dni_err = "";

function dniValido($dni)
{
    $dni = str_replace('-', '', $dni);
    $letter = substr($dni, -1);
    $numbers = substr($dni, 0, -1);

    if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numbers % 23, 1) == $letter && strlen($letter) == 1 && strlen($numbers) == 8) {
        return true;
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // VALIDANDO INPUT DE NOMBRE DE USUARIO
    if (empty(trim($_POST["username"]))) {
        $username_err = "Por favor, ingrese un nombre de usuario";
    } else {
        //prepara una declaracion de seleccion
        $sql = "SELECT usuario FROM usuarios WHERE usuario = ?";

        if ($stmt = mysqli_prepare($conexion, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            $param_username = trim($_POST["username"]);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "Este nombre de usuario ya está en uso";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Ups! Algo salió mal, inténtalo mas tarde";
            }
        }
    }


    // VALIDANDO INPUT DE EMAIL
    if (empty(trim($_POST["email"]))) {
        $email_err = "Por favor, ingrese un correo";
    } else {
        //prepara una declaracion de seleccion
        $sql = "SELECT usuario FROM usuarios WHERE email = ?";

        if ($stmt = mysqli_prepare($conexion, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            $param_email = trim($_POST["email"]);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $email_err = "Este correo ya está en uso";
                } else {
                    $email = trim($_POST["email"]);
                }
            } else {
                echo "Ups! Algo salió mal, inténtalo mas tarde";
            }
        }
    }

    // VALIDANDO INPUT DE DNI
    if (empty(trim($_POST["dni"]))) {
        $dni_err = "Por favor, ingrese su DNI";
    } else {
        //prepara una declaracion de seleccion
        $sql = "SELECT usuario FROM usuarios WHERE DNI = ?";

        if ($stmt = mysqli_prepare($conexion, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_dni);

            $param_dni = trim($_POST["dni"]);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $dni_err = "Este DNI ya está registrado";
                } elseif (dniValido($_POST["dni"])) {
                    $dni = trim($_POST["dni"]);
                } else {
                    $dni_err = "El DNI es incorrecto";
                }
            } else {
                echo "Ups! Algo salió mal, inténtalo mas tarde";
            }
        }
    }

    // Given password


    // VALIDANDO CONTRASEÑA

    $uppercase = preg_match('@[A-Z]@', $_POST["password"]);
    $lowercase = preg_match('@[a-z]@', $_POST["password"]);
    $number    = preg_match('@[0-9]@', $_POST["password"]);
    $specialChars = preg_match('@[^\w]@', $password);


    if (empty($_POST["password"])) {
        $password_err = "Por favor, ingrese una contraseña";
    } elseif (!$uppercase || !$lowercase || !$number || $specialChars || strlen($_POST["password"]) < 8) {
        $password_err = "Por favor, ingrese una contraseña válida.";
    } else {
        $password = $_POST["password"];
    }


    // COMPROBANDO LOS ERRORES DE ENTRADA ANTES DE INSERTAR LOS DATOS EN LA BASE DE DATOS
    if (empty($username_err) && empty($email_err) && empty($password_err) && empty($dni_err)) {

        $sql = "INSERT INTO usuarios (usuario, contrasenia, nombreapellidos, DNI, telefono, fechanacimiento, email) VALUES (?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($conexion, $sql)) {
            mysqli_stmt_bind_param($stmt, "sssssss", $param_username, $param_password, $param_name, $param_DNI, $param_telefono, $param_fechaNac, $param_email);


            // ESTABLECIENDO PARAMETRO
            $param_username = $username;
            #$param_password = $password;
            $param_name = trim($_POST["name"]);
            $param_DNI = $dni;
            $param_telefono = intval(trim($_POST["phone"]));
            $param_fechaNac = date("Y-m-d", strtotime(trim($_POST["date"])));
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // ENCRIPTANDO CONTRASEÑA


            if (mysqli_stmt_execute($stmt)) {
                header("location: http://localhost:81/index.php");
            } else {
                echo "Algo Salio mal, intentalo despues";
            }
        }
    }

    mysqli_close($conexion);
}
