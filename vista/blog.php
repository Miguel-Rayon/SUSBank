<?php session_start();
include("../modelo/mongoconexion.php");
include("../modelo/mostrar_blog.php");
$obj= new datos();
$resulta = $obj -> dato();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/333b9b8f44.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo.png">
    <link rel="stylesheet" href="../configuracion/css/estilos.css">
    <link rel="stylesheet" href="../configuracion/css/estilos_blog.css">
    <title>Blog</title>
</head>
<body>
        <!-- Barra de navegacion -->
        <header id="header">
        <div class="container_header">
            <div class="logo">
                <img src="../img/logo.png" alt="logo">
            </div>
            <div class="container__nav">
                <nav id="nav">
                    <ul>
                        <li><a style="text-decoration: none; color: white;" href="index.php" class="select">Inicio</a></li>
                        <li><a style="text-decoration: none; color: black;" href="login.php">Acceso</a></li>
                        <li><a style="text-decoration: none; color: black;" href="sobre.php">Acerca de</a></li>
                        <li><a style="text-decoration: none; color: black;" href="blog.php">Blog</a></li>
                    </ul>
                </nav>
                <div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>
            </div>
        </div>
        <?php include('ayuda.php') ?>
    </header>
   <!-- Fin Barra de navegacion -->
    <!-- Portada -->
    <div class="container__all" id="container_all">
        <div class="cover">
            <div class="container__cover">
                <div class="container__info">
                    <h1>Bienvenido</h1>
                    <H2>al blog</H2>
                    <p>Aqui podras encontrar informacion util que hemos hecho exclusivamente para ti, desde informacion para tus gastos hasta otros datos de interes de tu cuenta. En SUS BANK pensamos en lo mejor para ti</p>
                    <input type="button" value="Volver al Inicio">
                </div>
                <div class="container__vector">
                    <img src="../img/posts-animate.svg" alt="portada" type="img/svg">
                </div>
            </div>
        </div>
    <!-- Fin Portada -->
   <!-- Cards del blog-->
   <div class="container__cards">
   <?php foreach ($resulta as $row) { ?>
        
        <form class="card" action="blog_id.php?<?php echo $row["_id"] ?>" method="post">
            <div class="cover">
                <img src="<?php echo $row["imagen"] ?>" alt="img<?php echo $row["_id"] ?>" style="border-radius:20%;">
                <div class="img__back"></div>
            </div>
            <div class="description" style="background-color:#dadcdd; min-height:400px; height:100%;">
                <h2 style="font-size:20px;"><?php echo $row["title"] ?></h2>
                <p> <?php echo $row["subtittle"] ?> </p>
                <input type="hidden" id="id<?php echo $row["_id"] ?>" value="<?php echo $row["_id"] ?>">
                <input type="hidden" id="imagen<?php echo $row["_id"] ?>" value="<?php echo $row["imagen"] ?>" name="imagen">
                <input type="hidden" id="title<?php echo $row["_id"] ?>" value="<?php echo $row["title"] ?>" name="title">
                <input type="hidden" id="body<?php echo $row["_id"] ?>" value="<?php echo $row["body"]?>" name="body">
                <input type="hidden" id="date<?php echo $row["_id"] ?>" value="<?php echo $row["date"]?>" name="date">
                <input type="submit" value="Ver mas" id="enviar<?php echo $row["_id"] ?>">
            </div>
           
   </form>
    <?php } ?>
   </div>
   <!-- Fin Cards blog -->
   <!-- Pie de Pagina -->
   <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="../img/logo.png" alt="">
                </div>
                <div class="terms">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perferendis veniam maiores, voluptatem molestiae repellendus 
                    sunt consequuntur iste laboriosam iusto recusandae, doloribus ipsa, cumque natus placeat provident similique. Cum, itaque?</p>
                </div>
            </div>
            <div class="box__footer">
                <h2>Soluciones</h2>
                <a onclick="prestamos()">Prestamos</a>
                <a onclick="seguro()">Seguro de Vida</a>
                <a onclick="inversion()">Inversiones</a>
                <a onclick="credito()">Credito</a>
                <a onclick="privacidad()">Privacidad</a>
            </div>
            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="sobre.php">Acerca de </a>
                <a href="envio_correo/index.php">Contactanos</a>
                <a target="_blank" rel="noopener noreferrer" href="https://github.com/Miguel-Rayon/SUSBank">Repositorio</a>
                <a href="blog.php">Blog</a>
            </div>
            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="https://www.facebook.com/SUS-Bank-107577585325919/" target="_blank" rel="noopener noreferrer"> <i class="fab fa-facebook-square"></i> Facebook</a>
                <a href="https://twitter.com/sus_bank?t=qoXU6ca4PXuHk_pl1j2JKg&s=09" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter-square"></i> Twitter</a>
                <a href="https://www.linkedin.com/in/sus-bank-785273253/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i> Linkedin</a>
                <a href="https://www.instagram.com/susbank_mx/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram-square"></i> Instagram</a>
            </div>
        </div>
        <div class="box__copyright">
            <hr>
            <p>Todos los derechos reservados © 2022 <b>SUS BANK</b></p>
        </div>
    </footer>
    <!-- Fin Pie de Pagina -->
    </div>
    <script src="../configuracion/js/app_home.js"></script>
   <script src="../configuracion/js/app_soluciones.js"></script>
   <script src="../configuracion/js/app_privacidad.js"></script>
   <script src="../configuracion/js/app_get.js"></script>
</body>
</html>