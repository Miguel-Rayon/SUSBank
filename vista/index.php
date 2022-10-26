<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/333b9b8f44.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo.png">
    <link rel="stylesheet" href="../configuracion/css/estilos.css">
    <title>SUS Bank</title>
</head>
<body>
    
    <!-- Barra de navegacion -->
    <header id="header">
        <div class="container_header">
            <div class="logo">
                <img src="../img/logo.png"  alt="logo">
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
                    <h1>SUS</h1>
                    <H2>Bank</H2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, nam fuga delectus 
                    laudantium tenetur eligendi magnam neque ullam? Id laborum, in dolore debitis nisi delectus 
                    ipsum voluptate quae est libero?</p>
                    <input type="button" value="Get Started" onclick="get()">
                </div>
                <div class="container__vector">
                    <img src="../img/business-competition-animate.svg" alt="portada" type="img/svg" style="width:530px;">
                </div>
            </div>
        </div>
    <!-- Fin Portada -->
    <!-- Box de cards -->
    <main>
        <h1>Ofrecemos...</h1>
        <div class="container__box">
            <div class="box">
                <i class="fa-solid fa-shop"></i>
                <h5>Crédito de negocios</h5>
                <h4>Crédito de negocios</h4>
            </div>
            <div class="box">
                <i class="fa-solid fa-address-card"></i>
                <h5>Cuenta</h5>
                <h4>Cuenta</h4>
            </div>
            <div class="box">
                <i class="fa-solid fa-wallet"></i>
                <h5>Tarjeta de Credito</h5>
                <h4>Tarjeta de Credito</h4>
            </div>
            <div class="box">
                <i class="fa-solid fa-chart-pie"></i>
                <h5>Prestamos</h5>
                <h4>Prestamos</h4>
            </div>
            <div class="box">
                <i class="fa-solid fa-chart-line"></i>
                <h5>Inversiones</h5>
                <h4>Inversiones</h4>
            </div>
            <div class="box">
                <i class="fa-solid fa-stethoscope"></i>
                <h5>Seguro de Vida</h5>
                <h4>Seguro de Vida</h4>
            </div>
        </div><br>
        <!-- Fin Box de cards -->
        <!-- Banner -->
        <div class="container__banner">
            <div class="banner">
                <div class="icon">
                    <img src="../img/8712738_lock_iso_premium_icon.png"  id="icon" alt="">
                </div>
                <div class="img__icon_dollar">
                    <img src="../img/8712511_dollar_money_currency_coin_payment_icon.png" id="icon_dollar" alt="">
                </div>
                <div class="text">
                    <h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident eaque et id verigatis aliquam nesciunt quasi..</h2>
                </div>
            </div>
        </div>
        <!-- Fin Banner -->
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
                <a target="_blank" rel="noopener noreferrer" href="https://github.com/Miguel-Rayon/SUSBank">Repositorio</a>
                <a href="#">Blog</a>
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
   <script src="../configuracion/js/app.js"></script>
   <script src="../configuracion/js/app_soluciones.js"></script>
   <script src="../configuracion/js/app_privacidad.js"></script>
   <script src="../configuracion/js/app_get.js"></script>
</body>
</html> 