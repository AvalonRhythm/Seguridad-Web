<?php

    session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: http://localhost:81/login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>NuevaVida - Adopta a un animal</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Adopcion de animales NuevaVida" name="keywords">
        <meta content="Adopcion de animales NuevaVida" name="description">

        <!-- Favicon (icono de PESTAÑA)-->
        <link href="img/icono.png" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
        
        <!-- Librerías CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p>+34 123 45 56 78</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p>adopciones@nuevavida.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="text">
                                <a href="php/logoutCode.php"><body> Cerrar Sesión </body></i></a>
                            </div>
                            <div>
                                <a href="signUp.php"><body> Registrate </body></i></a>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">NuevaVida</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link active">Página Principal</a>
                        <a href="listaAdopcion.php" class="nav-item nav-link">Lista de Adopción</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-1.jpg" alt="Imagen superadorable de perritos">
                        </div>
                        <div class="carousel-text">
                            <h1>Da una nueva vida a los animales</h1>
                            <p>
                                Ellos jamás te abandonarían. No lo hagas tú.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-2.jpg" alt="Imagen superadorable de perritos para que te sientas culpable">
                        </div>
                        <div class="carousel-text">
                            <h1>Tu gesto marca la diferencia. Involúcrate</h1>
                            <p>
                                Es muy poco lo que cuesta hacerlos felices.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-3.jpg" alt="Imagen superadorable de perritos que te derrite el corazón">
                        </div>
                        <div class="carousel-text">
                            <h1>Para tí son sólo parte de tu vida. Para ellos, tú eres su vida entera.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="img/about.jpg"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>Sobre nosotros</p>
                            <h2>Organización sin ánimo de lucro</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">Sobre nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Nuestra misión</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                    Somos una humilde protectora de animales situada en Bilbao y nos encargamos de acoger perros y gatos que necesitan nuestra ayuda. Nuestros recursos son limitados, pero nuestro amor por los animales es inmenso ¿Nos Ayudas?
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                    Nos encargamos del tratamiento y recuperación de los animales que recogemos ya que muchos nos llegan en condiciones deplorables. Los alimentamos y cuidamos hasta que encuentren su familia definitiva. Necesitamos donaciones permanentemente para mantenerlos. Buscamos y seleccionamos familias para que puedan tener una vida mejor porque nuestros peludos quieren ¡DAROS TODO SU CARIÑO!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">289</h3>
                                <p>Perros adoptados</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">195</h3>
                                <p>Gatos adoptados</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">10325</h3>
                                <p>€ recaudado</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">50000</h3>
                                <p>Meta 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        
        
        <!-- Causes Start -->
        <div class="causes">
            <div class="container">
                <div class="section-header text-center">
                    <p>Cuidado de los animales</p>
                    <h2>Cómo cuidar de tus mascotas</h2>
                </div>
                <div class="owl-carousel causes-carousel">
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-1.jpg" alt="Image">
                        </div>
                        <div class="causes-text">
                            <h3>La alimentación</h3>
                            <p>Todo sobre la comida que puedes y debes darles.</p>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-2.jpg" alt="Image">
                        </div>
                        <div class="causes-text">
                            <h3>Estado de ánimo</h3>
                            <p>Aprende a entender cómo se siente tu mascota, y a leer su lenguaje corporal.</p>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-3.jpg" alt="Image">
                        </div>
                        <div class="causes-text">
                            <h3>Antiparásitos</h3>
                            <p>¿Cuáles son las principales enfermedades que atacan a nuestros perros?</p>
                        </div>
                    </div>
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="img/causes-4.jpg" alt="Image">
                        </div>
                        <div class="causes-text">
                            <h3>Otros problemas comunes</h3>
                            <p>Aprende sobre los problemas más habituales de nuestros animales, y cómo tratarlos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Causes End -->



        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Nuestro equipo</p>
                    <h2>Personas increíbles tras una labor imprescindible</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Hugo Robles</h2>
                                <p>Fundador</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Andreea Vasilica</h2>
                                <p>Administración y redes</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Gorka Lombardero</h2>
                                <p>Tesorero</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
        <!-- Adoptar Start -->
        <div class="volunteer" data-parallax="scroll" data-image-src="img/volunteer.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p>Hazte Voluntario</p>
                                <h2>Marca la diferencia en la vida de otros</h2>
                            </div>
                            <div class="volunteer-text">
                                <p>
                                    Explora y descubre todos los peros y gatos que puedes adoptar en nuestra protectora. Están en Málaga pero pueden viajar a cualquier parte de España, si tienes un hogar para darles. Usa los filtros para descubrirlos a todos.
                                </p>
                            </div>
                        </div>
                    <div class="col-lg-5">
                        <div>
                            <form action="listaAdopcion.php">
                                <button class="btn btn-custom" href="listaAdopcion.php">Adopta ahora</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Adoptar End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Nuestra perrera</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Artxanda, Bilbao</p>
                            <p><i class="fa fa-phone-alt"></i>+34 123 45 67 89</p>
                            <p><i class="fa fa-envelope"></i>adopciones@nuevavida.com</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">nuevavida.com</a>, All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        <!-- Security Javascript -->
        <script src = "js/inactivityCheck.js"></script> 
    </body>
</html>
