<?php session_start(); 
 $imagen = $_POST['imagen'];
 $title = $_POST['title'];
 $body = $_POST['body'];
 $date = $_POST['date'];
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
    <title>Document</title>
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
                        <li><a href="sobre.php">Sobre Nosotros</a></li>
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
            <div class="containerimg" style="width:100%; align-items:center; display:flex; justify-content:center; padding:10px; margin-top:80px;" >
                <img src="<?php echo $imagen; ?>" alt="BancoImagen" style="width:95%; display:block; border-radius:5px;">
            </div>

    </div>

    <?php 
        echo $title;
    ?>
        
</body>
</html>