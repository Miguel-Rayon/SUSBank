<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sistema de ayuda</title>
    <meta name="title" content="Sistema de ayuda">
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css">
    <script src="https://kit.fontawesome.com/333b9b8f44.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../configuracion/css/estilos_ayuda.css">
    <link rel="stylesheet" href="../configuracion/css/estilos.css">
</head>

<body>
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
                        <li><a href="ayuda.php">Ayuda</a></li> 
                    </ul>
                </nav>
                <div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>
            </div>
        </div>
    </header>
    <!-- Fin Barra de navegacion -->
   
        <div class="chat">
            <div class="chat-title">
                <h1>SUS</h1>
                <h2>Active</h2>
                <div class="avatar">
                    <img src="../img/me.png" />
                </div>
            </div>
            <div class="messages">
                <div class="messages-content"></div>
            </div>
            <div class="message-box">
                <textarea type="text" class="message-input" placeholder="Escribe un mensaje..."></textarea>
                <button type="submit" class="message-submit">Send</button>
            </div>
    
        </div>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="../configuracion/js/app_ayuda.js"></script>
    <script src="../configuracion/js/app.js"></script>
</body>

</html>