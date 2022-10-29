<?php session_start(); 
 $imagen = $_POST['imagen'];
 $title = $_POST['title'];
 $body = $_POST['body'];
 $date = $_POST['date'];
 $cover = $_POST['imagencover'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/333b9b8f44.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../img/sus.png">
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
                        <li><a href="index.php" class="select">Inicio</a></li>
                        <li><a href="login.php">Acceso</a></li>
                        <li><a href="sobre.php">Acerca de</a></li>
                        <li><a href="blog.php">Blog</a></li>
                    </ul>
                </nav>
                <div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>
            </div>
        </div>
        <?php include('ayuda.php') ?>
    </header>
   <!-- Fin Barra de navegacion -->
    <div class="container" style="width:100%; display:flex; flex-direction:column;">
            <div class="containerimg" style="width:100%; align-items:center; display:flex; justify-content:center; padding:10px; margin-top:80px; margin-bottom:18px;" >
                <img src="<?php echo $cover; ?>" alt="BancoImagen" style="width:95%; display:block; border-radius:5px;">
            </div>
        <h2 style="font-size: 40px;font-weight: 900;color: #373737; text-align:center;"><?php echo $title;?></h2> <br/>
        <div class="texto" style="width:80%; display:flex; flex-direction:column; margin:auto;">
            <p><?php echo $body ?></p>
        </div>
        
        
        
    </div>
    <button class="boton" style="margin: 20px 0px 15px 10px;"><a style="color: #fff; text-transform: uppercase; font-weight: 600; text-decoration: none;" href="javascript: history.go(-1)">Volver</a></button>

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

    
    <script src="../configuracion/js/app_home.js"></script>
   <script src="../configuracion/js/app_soluciones.js"></script>
   <script src="../configuracion/js/app_privacidad.js"></script>
   <script src="../configuracion/js/app_get.js"></script>
</body>
</html>