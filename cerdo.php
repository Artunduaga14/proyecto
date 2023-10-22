<?php

require 'config/config.php';
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, precio FROM cerdo WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchall(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Fonda Los Arrieros</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/imagenes/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap-prue.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style-4.css" rel="stylesheet">
</head>

<body>



    <!-- barra de navegacion-->

    <!-- titulo y logo -->
    <div class="container-fluid bg-white sticky-top" src="imagenes/madera.JPG">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
                <a href="index.html" class="navbar-brand navbar-new">
                    <img class="img-fluid" src="img/imagenes/logo 2.png" alt="Logo">
                    <div class="titulo titulo-new">Fondo Los Arrieros</div>
                </a>
                <!-- fin titulo y logo -->


                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link">Inicio</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Cerdo </a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <li><a href="categoria.html" class="dropdown-item">Categorias</a></li>
                                <li><a href="desayunos.php" class="dropdown-item">Desayunos</a></li>
                                <li><a href="entrada.php" class="dropdown-item">Entradas</a></li>
                                <li><a href="pechuga.php" class="dropdown-item">Pechuga </a></li>
                                <li><a href="carne de res.php" class="dropdown-item">Carne de Res</a></li>
                                <li><a href="pescado y marisco.php" class="dropdown-item">Pescados y Mariscos</a></li>
                                <li><a href="platos Arrieros.php" class="dropdown-item">Platos Arriero</a></li>
                                <li><a href="picadas.php" class="dropdown-item">Picadas</a></li>
                                <li><a href="rapi arriero.php" class="dropdown-item">Rapi Arrieros</a></li>
                                <li><a href="bebidas.php" class="dropdown-item">Bebidas</a></li>
                                <li><a href="cocteles.php" class="dropdown-item">Cócteles</a></li>
                            </div>
                        </div>
                        <a href="base de datos/formulario.php" class="nav-item nav-link">Registrarse</a>
                    </div>
                    <div class="border-start ps-4 d-none d-lg-block">
                        <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
                    </div>

                </div>
            </nav>
        </div>
    </div>

    <!-- Inicio Platos -->
    <div class="container py-5">
        <div class="row">

            <!--Contenido-->
            <div class="row">
                <?php foreach ($resultado as $row) { ?>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <?php
                                $id = $row['id'];
                                $imagen = "images/platos/cerdo arriero/" . $id . "/cerdo.png";
                                if (!file_exists($imagen)) {
                                    $imagen = "img/arrieros.jpg";
                                }
                                ?>
                                <img src="<?php echo $imagen; ?>" alt="">

                            </div>
                            <div class="card-body">
                                <a  class="">
                                    <?php echo $row['nombre']; ?>
                                </a>
                                
                                <p class="text-center mb-0">$
                                    <?php echo number_format($row['precio'], 2, '.', ','); ?>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="./descripcion/cerdo.php?id=<?php echo $row['id']; ?>&token=<?php echo 
                                         hash_hmac('sha1',$row['id'], KEY_TOKEN); ?>"class="btn btn-primary">detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php  } ?>
            </div>
        </div>
    </div>
    <!--Fin de Contenido-->
    <!-- Fin  Platos -->

    <!-- contacto -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Contacto</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Cra 5 #14-36</p>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.5935599993163!2d-75.29094593064002!3d2.932524586702864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b7463c5e9729d%3A0x3f40b918401ea930!2sCra%205%20%2314-36%2C%20Neiva%2C%20Huila!5e0!3m2!1ses-419!2sco!4v1690210123715!5m2!1ses-419!2sco" style="height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>


                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="https://www.instagram.com/fondalosarrieros.h/?hl=es"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="https://www.facebook.com/fondalosarrieroshuila/?locale=es_LA"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="https://wa.me/573222516135"><i class="fab fa-whatsapp"></i></a>



                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Horario de atención</h4>
                    <p class="mb-1">Lunes - Viernes</p>
                    <h6 class="text-light">9:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sábado</p>
                    <h6 class="text-light">9:00 am - 2:00 am</h6>
                    <p class="mb-1">Domingo</p>
                    <h6 class="text-light">9:00 am - 2:00 am</h6>

                </div>

            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium" href="#">Fonda Los Arrieros</a>,todos los derechos reservados.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Diseñado por Juan Artunduaga y Esteban Palomar<a class="fw-medium"></a> </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>