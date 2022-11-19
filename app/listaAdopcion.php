<?php
include("php/showDatabase.php");
include("php/addAnimalCode.php");
include("php/removeCode.php");
include("php/editAnimalCode.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HELPZ - Free Charity Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

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
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p>+123 456 7890</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="text">
                                <a href="php/logoutCode.php"><body> Cerrar Sesión </body></i></a>
                            </div>
                            <div>
                                <a href="signUp.php"><body> Registrarse </body></i></a>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">Helpz</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link">Página Principal</a>
                        <a href="listaAdopcion.php" class="nav-item nav-link active">Lista de adopcion</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Lista de adopciones</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Página Principal</a>
                        <a href="">Lista de adopciones</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
    
        <!-- Animal List Start-->
        <header class="header">
            <ul>
                <div class= "header">
                    <em><h1>LISTA DE ADOPCIÓN</h1></em>
                </div>  
            </ul>
        </header>

        <body>
            <p><?php echo !empty($result)? $result:''; ?></p>
            <div class="container">
            <div class="for_div">
            <div class="col-sm-20">
                <div class="table-responsive">
                <table class="table table-bordered">
                <thead><tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Especie</th>
                    <th>Raza</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Descripción</th>
                </thead>
                <tbody>
            <?php
                if(is_array($fetchData)){   
                foreach($fetchData as $data){
                ?>
                <td><?php echo $data['id']??''; ?></td>
                <td><?php echo $data['nombre']??''; ?></td>
                <td><?php echo $data['especie']??''; ?></td>
                <td><?php echo $data['raza']??''; ?></td>
                <td><?php echo $data['edad']??''; ?></td>
                <td><?php echo $data['sexo']??''; ?></td>
                <td><?php echo $data['descripcion']??''; ?></td>
                </tr>
                <?php
                }}else{ ?>
                <tr>
                    <td colspan="7">
                <?php echo $fetchData; ?>
            </td>
                <tr>
                <?php
                }?>
                </tbody>
                </table>
            </div>
            </div>
            </div>
            </div>
        </body>

        <header class="header">
            <ul>
                <div class= "header">
                    <em><h1>AÑADIR UN ANIMAL</h1></em>
                </div>  
            </ul>
        </header>
        
        <body>
            <div class="for_div">
            <div class="info_div">
            <div class="col-sm-4">
                <p><?php echo !empty($result)? $result:''; ?></p>
                <!--=================HTML Form=======================-->
                <form method="post" >
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Especie" name="especie">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Raza" name="raza">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Edad" name="edad">
                </div>
                
                <div class="form-group">
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" name="sexo" value="M">Macho
                </div>
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" name="sexo" value="F">Hembra
                </div> 
                </div>
                
                <div class="form-group">
                <textarea class="form-control" name="descripcion" placeholder="Descripción"></textarea>
                </div>
            
            <button type="submit"  name="aniadir" class="btn btn-custom">Añadir</button>
            <p><?php echo !empty($result)? $result:''; ?></p>
            </form>
                <!--======================== HTML Form============================ -->
            </div>
            <div class="col-sm-8">
            
            </div>
            </div>
            </div>
        </body>


        <header class="header">
            <ul>
                <div class= "header">
                    <em><h1>EDITAR UN ANIMAL</h1></em>
                </div>  
            </ul>
        </header>

        <body class="info_div">
            <div class="for_div">
            <div class="info_div">
            <div class="col-sm-4">
                <p><?php echo !empty($result)? $result:''; ?></p>
                <!--=================HTML Form=======================-->
                <form method="post">
                <div class="form-group">
                    <select name="eleccion">
                        <?php
                            // use a while loop to fetch data
                            // from the $all_categories variable
                            // and individually display as an option
                            while ($categoria = mysqli_fetch_array(
                                    $all_categorias,MYSQLI_ASSOC)):;
                        ?>
                            <option value="<?php echo $categoria['id'];
                                // The value we usually set is the primary key
                            ?>">
                                <?php echo $categoria['id']; echo " - "; echo $categoria['nombre'];
                                    // To show the category name to the user
                                ?>
                            </option>
                        <?php
                            endwhile;
                            // While loop must be terminated
                        ?>
                    </select>

                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre2" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Especie" name="especie2" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Raza" name="raza2" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Edad" name="edad2" required>
                </div>
                
                <div class="form-group">
                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" name="sexo2" value="M" required>Macho
                    </div>
                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" name="sexo2" value="F" required>Hembra
                    </div> 
                </div>
                
                <div class="form-group">
                    <textarea class="form-control" name="descripcion2" placeholder="Descripción" required></textarea>
                </div>

            <button type="submit"  name="editar" class="btn btn-custom">Editar</button>
            <p><?php echo !empty($result)? $result:''; ?></p>
            </form>
                <!--======================== HTML Form============================ -->
            </div>
            <div class="col-sm-8">
            
            </div>
            </div>
            </div>
        </body>

        <header class="header">
            <ul>
                <div class= "header">
                    <em><h1>ELIMINAR UN ANIMAL</h1></em>
                </div>  
            </ul>
        </header>


        <body class="info_div">
            <form method="POST">
            <p><?php echo !empty($result)? $result:''; ?></p>
                <h2>Elige un animal</h2>
                <form method="post" >
                <div class="info_div">
                    <select name="Animal">
                        <?php
                            // use a while loop to fetch data
                            // from the $all_categories variable
                            // and individually display as an option
                            while ($category = mysqli_fetch_array(
                                    $all_categories,MYSQLI_ASSOC)):;
                        ?>
                            <option value="<?php echo $category['id'];
                                // The value we usually set is the primary key
                            ?>">
                                <?php echo $category['id']; echo " - "; echo $category['nombre']
                                    // To show the category name to the user
                                ?>
                            </option>
                        <?php
                            endwhile;
                            // While loop must be terminated
                        ?>
                    </select>
                </div>
                <br>
                <input type="submit" value="Adoptar" class="btn btn-custom" name="adoptar">
            </form>
            <br>
        
            <!-- Security Javascript -->
            <script src = "js/inactivityCheck.js"></script>
        </body>
</html>