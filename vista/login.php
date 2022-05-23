<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/333b9b8f44.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../configuracion/css/estilos.css">
    <title>Iniciar Sesion</title>
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
                        <li><a href="#">Acceso</a></li>
                        <li><a href="#">Sobre Nosotros</a></li>
                        <li><a href="#">Ayuda</a></li>
                    </ul>
                </nav>
                <div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>
            </div>
        </div>
    </header>
    <!-- Fin Barra de navegacion -->
    <div class="container__all" id="container_all">
    <main>
        <div class="login">
            <div class="container__login">
                <div class="container__data">
                    <h1>Iniciar Sesion</h1>
                    <input type="text" name="user" id="user" placeholder="Usuario">
                    <input type="password" name="pass" id="pass" placeholder="Contraseña">
                    <p>Olvido su Contraseña <a href="#">Da Click aqui</a></p>
                    <input type="button" value="Iniciar Sesion">
                    <p>No tiene Cuenta <a href="registro.php">Registrese!</a></p>
                </div>
                <div class="container_img">
                        <img src="../img/Content creation_Monochromatic.svg" alt="">
                </div>
            </div>
        </div>
        
    </main>
    


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
                <a href="#">Prestamos</a>
                <a href="#">Seguro de Vida</a>
                <a href="#">Inversiones</a>
                <a href="#">Credito</a>
            </div>
            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="#">Acerca de </a>
                <a href="#">Trabajos</a>
                <a href="#">Repositorio</a>
                <a href="#">Ayuda</a>
            </div>
            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
                <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
            </div>
        </div>
        <div class="box__copyright">
            <hr>
            <p>Todos los derechos reservados © 2022 <b>SUS BANK</b></p>
        </div>
    </footer>
    <!-- Fin Pie de Pagina -->
    </div>

    <script src="../configuracion/js/app_login.js"></script>
</body>
</html>