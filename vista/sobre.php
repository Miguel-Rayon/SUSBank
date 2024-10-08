
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/333b9b8f44.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo.png">
    <link rel="stylesheet" href="../configuracion/css/estilos_sobre.css">
    <link rel="stylesheet" href="../configuracion/css/estilos.css">
    <title>Sobre Nosotros</title>
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
   
   
     <!-- Portada -->
     <div class="container__all" id="container_all">
        <div class="cover">
            <div class="container__cover">
                <div class="container__info">
                    <h1>Sobre</h1>
                    <H2>Nosotros</H2>
                    <p>La seguridad de tu dinero siempre será lo mas importante para nosotros. 
                        Por eso  nuestro equipo de desarrolladores trabajó duro para cumplir sus espectativas.</p>
                    <input type="button" value="Get Started" onclick="get()">
                </div>
                <div class="container__vector">
                    <img src="../img/team-page-animate.svg" alt="portada" type="img/svg"  style="width:530px;">
                </div>
            </div>
        </div>
    <!-- Fin Portada -->
    
    <main>
         <!-- cards -->
        <div class="body__page">

            <div class="container__card">

                <div class="card c1">
                    <div class="icon">
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                    <div class="info__description">
                        <p>Alentar a las personas a manejar su vida de finanzas de una forma rápida y segura atreves el mundo digital.</p>
                    </div>
                </div>

                <div class="card c2">
                    <div class="icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <div class="info__description">
                        <p>Los integrantes somos:</p>
                        <p>Luis Adrian Gamez Ramos</p>
                        <p>Eduardo Alberto Camargo Rodriguez</p>
                        <p>José Miguel Hernández Rayón</p>
                        <p>Sebastian Lopez Avila</p>
                    </div>
                </div>

                <div class="card c3">
                    <div class="icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <div class="info__description">
                        <p>Ser una compañía reconocida por ofrecer la mejor  y más memorable de las experiencias en servicios financieros de forma digital.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- cards -->
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
                <a href="https://github.com/Miguel-Rayon/SUSBank">Repositorio</a>
                <a href="#">Blog</a>
            </div>
            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="https://www.facebook.com/SUS-Bank-107577585325919/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square"></i> Facebook</a>
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
    <script src="../configuracion/js/app_sobre.js"></script>
    <script src="../configuracion/js/app_soluciones.js"></script>
    <script src="../configuracion/js/app_privacidad.js"></script>
    <script src="../configuracion/js/app_get.js"></script>
</body>
</html>