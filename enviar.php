

<?php
$destino= "ventas@basperindustrial.com";
$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$telefono= $_POST["telefono"];
$mensaje= $_POST["mensaje"];


$contenido= "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " .$telefono . "\nMensaje: " . $mensaje;

$asunto= "Contacto desde nuestro Sitio Web";

mail($destino, $asunto, $contenido);

header("Location:contactos.html");



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basper Industrial SAC – Balanzas y Sistemas de Pesaje</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/ed-grid.css">
    <link rel="stylesheet" href="css/estilos.css">




    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,700,700i" rel="stylesheet">


    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="fonts.css">



</head>

<body>

    <!-- INICIO DE MENÚ -->

    <header>
        <div class="container-header">
            <div class="container-logo-title">
                <a href="index.html">
                    <img src="img/logo2.png" alt="">
                </a>
            </div>

            <div class="container-menu">
                <span class="icon-menu"></span>
                <nav class="menu">
                    <ul>


                        <li>
                            <i class=" fa fa-home " aria-hidden="true "></i>
                            <a href="index.html" class="enlace-menus">Inicio</a>
                        </li>

                        <li>
                            <i class="fa fa-users " aria-hidden="true "></i><a href="nosotros.html " class="enlace-menus "> Nosotros</a></li>
                        <li>
                            <i class="fa fa-balance-scale "></i> <a href="productos.html" class="enlace-menus ">Productos</a>
                            <span class="icon-triangle-down triangulo "></span>
                            <ul>
                                <li>
                                    <span class="icon-chevron-small-right sub "></span><a href="camioneras.html " class="enlace-menus "> Básculas Camioneras</a>
                                </li>
                                <li>
                                    <span class="icon-chevron-small-right "></span> <a href="ganaderas.html " class="enlace-menus "> Básculas Ganaderas</a></li>
                                <li>
                                    <span class="icon-chevron-small-right "></span> <a href="industriales.html " class="enlace-menus ">Básculas Industriales</a></li>
                                <li>
                                    <span class="icon-chevron-small-right "></span> <a href="pesas.html " class="enlace-menus ">Pesas Patrón</a></li>
                                <li>
                                    <span class="icon-chevron-small-right "></span> <a href="soporte.html " class="enlace-menus ">Soporte Técnico</a></li>

                            </ul>


                        </li>
                        <li>
                            <i class="fa fa-envelope-o " aria-hidden="true "></i> <a href="contactos.html " class="enlace-menus ">Contactos </a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- FIN DE MENÚ -->

    <!-- INICIO DE BANNER -->

    <div class="main-banner">

        <img src="img/fondo-header-contactos-4.jpg" class="main-banner-img" alt="">


        <div class="container">
            <div class="row to-center">

                <div class="main-banner-data">
                    <h1 class="data-productos">Contáctenos</h1>

                </div>
            </div>
        </div>

    </div>

    <!-- FIN DE BANNER -->

    <br>
    <br>
    <!-- INICIO DE CUERPO -->
    <section class="container">

        <form action="enviar.php" method="post">
            <section class="row">

                <section class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

                    <label>
                    Nombre:
                    <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
                </label>

                    <label>
                        Correo:
                    <input type="email" name="correo" placeholder="Ingrese su correo" required>
                </label>

                    <label>
                        Teléfono/Celular:
                    <input type="tel" name="telefono" placeholder="Ingrese su teléfono y/o celular" required>
                </label>

                    <textarea name="mensaje" placeholder="Escriba aquí su mensaje" required></textarea>



                    <input type="submit" value="Enviar" id="boton">



                </section>


                <!-- <section class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1">


                </section> -->

                <aside class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

                    <ul>
                        <!-- <li class="default open"> -->
                        <h2 class="t2">CONTACTO</h2>
                        <li>
                            <div class="link"><i class="fa fa-phone icono sidebar"></i> +51 (1) 604-9006 / 945 577 268 / 952 112 969 </div>

                        </li>

                        <li>
                            <div class="link"><i class="fa fa-envelope icono sidebar"></i> ventas@basperindustrial.com</div>

                        </li>

                        <li>
                            <div class="link"><i class="fa fa-globe icono sidebar"></i> http://www.basperindustrial.com/</div>

                        </li>

                        <li>
                            <div class="link"><i class="fa fa-location-arrow icono sidebar"></i> Av. Próceres de la Independencia 3304 Of.403 - SJL</div>

                        </li>
                    </ul>


                    <img src="img/contactos2.jpg" class="img-fluid" alt="">
                </aside>


            </section>
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3642.208473417611!2d-77.00691716674902!3d-11.97785130437923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c56408d276b7%3A0x1bce8ad87caee2eb!2sAv.+Proceres+de+la+Independencia+3304%2C+Cercado+de+Lima!5e0!3m2!1ses!2spe!4v1522442596503"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


        </form>
    </section>

    <!-- FIN DE CUERPO -->

    <br>
    <br>
    <!-- INICIO DE FOOTER -->

    <footer>
        <img src="img/slider-2.jpg" class="img-fluid fondo-img" alt="">

        <section class="container">
            <section class="row">
                <section class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                    <h5 class="titulo-pie">Nuestra Empresa</h5>

                    <a href="nosotros.html" class="enlaces-pie"> Quienes Somos </a>
                    <a href="nosotros.html" class="enlaces-pie"> Misión </a>
                    <a href="nosotros.html" class="enlaces-pie"> Visión </a>
                    <a href="nosotros.html" class="enlaces-pie"> Valores</a>
                    <a href="nosotros.html" class="enlaces-pie"> Nuestros Recursos </a>



                </section>

                <section class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 ">

                    <h5 class="titulo-pie">Productos</h5>

                    <a href="camioneras.html" class="enlaces-pie"> Básculas Camioneras </a>
                    <a href="ganaderas.html" class="enlaces-pie"> Básculas Ganaderas </a>
                    <a href="industriales.html" class="enlaces-pie"> Básculas Industriales </a>
                    <a href="patrones.html" class="enlaces-pie"> Pesas Patrones </a>
                    <a href="soporte.html" class="enlaces-pie"> Soporte Técnico </a>

                </section>

                <section class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 ">

                    <h5 class="titulo-pie">Contáctenos</h5>

                    <span class="t1-color">Teléfono</span>
                    <br> +51 (1) 604-9006 / 945 577 268 / 952 112 969
                    <br>
                    <span class="t1-color"> Correo</span>
                    <br> ventas@basperindustrial.com
                    <br><span class="t1-color"> Dirección</span>
                    <br> Av. Próceres de la Independencia 3304 Of.403 - SJL

                </section>

            </section>
        </section>

    </footer>

    <!-- FIN DE FOOTER -->

    <script src="js/jquery.js "></script>
    <script src="js/acordeon-sidebar.js"></script>
    <script src="js/submenu.js"></script>


</body>

</html>