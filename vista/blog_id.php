<?php session_start(); 
include("../modelo/mongoconexion.php");
include("../modelo/blog_id.php");
$obj= new datos();
$resultado = $obj -> dato();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <?php foreach($resultado as $r) {?>
        <div><h2><?php echo $r["title"]?></h2></div>




    <?php } ?>
</body>
</html>