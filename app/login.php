<?php
    include_once "php/loginCode.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NuevaVida - Pagina de login</title>
        
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

    <h1>Iniciar Sesión</h1>
    
    <main>
        <form id="login_form" class="form_class" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="for_div">
                <label>Usuario</label>
                <input class="field_class" type="text" name="user" placeholder="Introduzca su usuario" autofocus>
                <span class="msg-error"><?php echo $email_err; ?></span>
                <label>Contraseña</label>
                <input class="field_class "type="password" name="password" placeholder="Introduzca su contraseña">
                <span class="msg-error"><?php echo $password_err; ?></span>
                <input class="submit_class" type="submit" value="Iniciar">
            </div>
            <div class="info_div">
                <p>¿Aún no te has registrado? <a href="signUp.php">Regístrate aquí</a></p>
            </div>
        </form>
    </main>
</body>