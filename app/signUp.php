<?php    
    require_once('php/signUpCode.php');
?>

<!DOCTYPE html>
<html lang="en">

    <style>
    /* Style all input fields */


    /* Style the container for inputs */
    .container {
    background-color: #f1f1f1;
    padding: 20px;
    }

    /* The message box is shown when the user clicks on the password field */
    #message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
    }

    /* Add a green text color and a checkmark when the requirements are right */
    .valid {
    color: green;
    }

    .valid:before {
    position: relative;
    left: -35px;
    content: "✔";
    }

    /* Add a red text color and an "x" when the requirements are wrong */
    .invalid {
    color: red;
    }

    .invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
    }
    </style>

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

    <body>

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
                <input class= "field_class" type="password" id="password" name="password" placeholder="Introduzca su contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">

                <div id="message">
                <h6>La contraseña debe contener los siguientes elementos:</h6>
                <p id="letter" class="invalid">Una letra <b>minúscula</b></p>
                <p id="capital" class="invalid">Una letra <b>mayúscula</b></p>
                <p id="number" class="invalid">Un <b>número</b> (0-9)</p>
                <p id="length" class="invalid">Mínimo <b>8 caracteres</b></p>
                <p id="special" class="invalid">Un <b>caracter</b> especial</p>
                </div>

                <script>
                var myInput = document.getElementById("password");
                var letter = document.getElementById("letter");
                var capital = document.getElementById("capital");
                var number = document.getElementById("number");
                var special= document.getElementById("special");
                var length = document.getElementById("length");

                // When the user clicks on the password field, show the message box
                myInput.onfocus = function() {
                document.getElementById("message").style.display = "block";
                }

                // When the user starts to type something inside the password field
                myInput.onkeyup = function() {
                // Validate lowercase letters
                var lowerCaseLetters = /[a-z]/g;
                if(myInput.value.match(lowerCaseLetters)) {  
                    letter.classList.remove("invalid");
                    letter.classList.add("valid");
                } else {
                    letter.classList.remove("valid");
                    letter.classList.add("invalid");
                }
                
                // Validate capital letters
                var upperCaseLetters = /[A-Z]/g;
                if(myInput.value.match(upperCaseLetters)) {  
                    capital.classList.remove("invalid");
                    capital.classList.add("valid");
                } else {
                    capital.classList.remove("valid");
                    capital.classList.add("invalid");
                }

                // Validate numbers
                var numbers = /[0-9]/g;
                if(myInput.value.match(numbers)) {  
                    number.classList.remove("invalid");
                    number.classList.add("valid");
                } else {
                    number.classList.remove("valid");
                    number.classList.add("invalid");
                }
                
                
                // Validate special chars
                var specialCharacters = /[^\w]/g;
                if(myInput.value.match(specialCharacters)) {  
                    special.classList.remove("invalid");
                    special.classList.add("valid");
                } else {
                    special.classList.remove("valid");
                    special.classList.add("invalid");
                }


                // Validate length
                if(myInput.value.length >= 8) {
                    length.classList.remove("invalid");
                    length.classList.add("valid");
                } else {
                    length.classList.remove("valid");
                    length.classList.add("invalid");
                }
                }
                </script>
                <span class="msg-error"><?php echo $password_err; ?></span>

                <div></div>
                <input type="submit" value="Registrarse">
            </div>
            <div class="info_div">
                <p>¿Ya te has registrado? <a href="login.php">Iniciar Sesión</a></p>
            </div>
        </form>
    </main>
    </html>
</body>