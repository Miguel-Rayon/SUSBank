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
    <link rel="stylesheet" href="../configuracion/css/css_modal.css">
    <title>Blog</title>
</head>
<body>
        <!-- Barra de navegacion -->
        <header id="header">
        <div class="container_header">
            <div class="logo">
                <img src="../img/logo.jpeg" style="height:90%; width:95%;" alt="logo">
            </div>
            <div class="container__nav">
                <nav id="nav">
                    <ul>
                        <li><a style="text-decoration: none; color: white;" href="index.php" class="select">Inicio</a></li>
                        <li><a style="text-decoration: none; color: black;" href="login.php">Acceso</a></li>
                        <li><a style="text-decoration: none; color: black;" href="sobre.php">Sobre Nosotros</a></li>
                        <li><a style="text-decoration: none; color: black;" href="blog.php">Blog</a></li>
                    </ul>
                </nav>
                <div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>
            </div>
        </div>
        <?php include('ayuda.php') ?>
    </header>
   <!-- Fin Barra de navegacion -->
   <!-- Cards del blog-->
   <div class="container__cards">
   <?php foreach ($resulta as $row) { ?>
        
        <div class="card">
            <div class="cover">
                <img src="<?php echo $row["imagen"] ?>" alt="img<?php echo $row["_id"] ?>" style="border-radius:20%;">
                <div class="img__back"></div>
            </div>
            <div class="description" style="background-color:#dadcdd; min-height:400px; height:100%;">
                <h2 style="font-size:20px;"><?php echo $row["title"] ?></h2>
                <p> <?php echo $row["subtittle"] ?> </p>
                <input type="hidden" id="id<?php echo $row["_id"] ?>" value="<?php echo $row["_id"] ?>">
                <?php $_SESSION["id_blog"] = $row["_id"] ?>
                <li style="cursor: pointer; list-style: none;"><a style="text-decoration: none; color: black;" href="#openModal<?php echo $row["_id"] ?>">Ver más</a></li>
            </div>
            <!-- Modal del blog-->
            <div id="openModal<?php echo $row["_id"] ?>" class="modalDialog">
                <div style="width:1000px;">
                    <a href="#close" title="Close" class="close">X</a>
                    <div style="width: 100%; text-align:center;" ><h2><?php echo $row["title"] ?></h2></div>
                    <div style="width:100%; text-align:end;"><p id="fecha<?php echo $row["_id"]; ?>">
                    <?php echo  DateTime::createFromFormat('Y-m-d\TH:i:sP', $row["date"]) ?></p></div>
                    <p>Puedes hacer un montón de cosas aquí, como alertas o incluso crear un formulario de registro aquí mismo.</p>
                </div>
            </div>
            <!-- FIN Modal del blog-->
        </div>
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