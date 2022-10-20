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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
   <div class="container__cards" style="margin-top:10%;">
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
                <li style="cursor: pointer;"><a data-toggle="modal" data-target="#modal<?php echo $row["_id"] ?>">Ver más</a></li>
            </div>
        </div>
        <!-- The Modal -->
        <div class="modal fade" id="modal<?php echo $row["_id"] ?>" style="width:100%;">
                                                <div class="modal-dialog" style="width:90%;">
                                                    <div class="modal-content">
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Servicio</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <div style="width: 100%; height:160px; display:flex; justify-content:center; align-items:center; margin:0px 0px 15px 0px;">
                                                                    <img src="<?php echo $row["imagen"]?>" style="width:90%; height:100%;">
                                                                </div>
                                                                <h2><?php echo $row["title"]?></h2>
                                                                <div style="width:100%; text-align:end;"><p><?php echo $row["date"]?></p></div>
                                                                <div><p><?php echo $row["body"]?></p></div>
                                                                
                                                                <input type="hidden" id="id<?php echo $row["_id"] ?>" value="<?php echo $row["_id"] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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