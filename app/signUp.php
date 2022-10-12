<?php    
    require_once('php/signUpCode.php');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>NuevaVida - Pagina de Registro</title>
        
		<!-- Favicon -->
        <link href="img/icono.png" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    
        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    
    </head>

</html><body>

    <h1>Registrarse</h1>
    
    <main>
        <form id="login_form" class="form_class" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="info_div">
                <label>Nombre de Usuario</label>
                <input class="field_class" type="text" name="username" placeholder="Introduzca su usuario" autofocus>
                <span class="msg-error"><?php echo $username_err; ?></span>
                <label>Email</label>
                <input class="field_class" type="text" name="email" placeholder="ejemplo@servidor.extension">
                <span class="msg-error"> <?php echo $email_err; ?></span>
                <label>Nombre y Apellidos</label>
                <input class="field_class" type="text" name="name" placeholder="Introduzca su nombre y apellidos">
                <span class="msg-error"><?php echo $name_err; ?></span>
                <label>DNI</label>
                <input class="field_class" type="text" name="dni" placeholder="11111111-Z">
                <span class="msg-error"><?php echo $dni_err; ?></span>
                <label>Fecha de nacimiento</label>
                <input class="field_class" type="text" name="date" placeholder="aaaa-mm-dd">
                <span class="msg-error"><?php echo $username_err; ?></span>
                <label>Teléfono</label>
                <input class="field_class" type="text" name="phone" placeholder="123456789">
                <span class="msg-error"><?php echo $phone_err; ?></span>
                <label>Contraseña</label>
                <input class="field_class" type="password" name="password" placeholder="Introduzca su contraseña">
                <span class="msg-error"> <?php echo $password_err; ?></span>
                <input type="submit" value="Registrarse">
            </div>
            <div class="info_div">
                <p>¿Ya te has registrado? <a href="login.php">Iniciar Sesión</a></p>
            </div>
        </form>
    </main>
</body>