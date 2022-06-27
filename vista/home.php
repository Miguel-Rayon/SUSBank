<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/333b9b8f44.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo.png">
    <link rel="stylesheet" href="../configuracion/css/estilos.css">
    <link rel="stylesheet" href="../configuracion/css/estilos_dashboard.css">
    <title>Bienvenido</title>
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
                        <li><a href="transferencia">Transferir</a></li>
                        <li><a href="perfil">Mi Perfil</a></li>
                        <li><a href="ayuda">Ayuda</a></li>
                        <li onclick="cerrar()" style="cursor: pointer;"><a class="select">Cerrar</a></li>
                    </ul>
                </nav>
                <div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>
            </div>
        </div>
    </header>
    <!-- Fin Barra de navegacion -->
    <!-- Portada -->
    <div class="container__all" id="container_all">
        <div class="cover">
            <div class="container__cover">
                <div class="container__info">
                    <h1>Bienvenido</h1>
                    <H2>Usuario</H2>
                    <p>Que tal <?php echo $_SESSION['nombre']; ?> que es la realizaras hoy? SUS BANK esta a tu servicio, si necesitas ayuda acude al apartado de ayuda</p>
                    <button><li><a href="transferencia.html">Transferir y pago de servicios</a></li></button>
                </div>
                <div class="container__vector">
                    <div class="tables">
                        <div class="table1">
                            <table class="tb_saldo">
                                <thead>
                                    <tr>
                                        <th>ㅤㅤ</th>
                                        <th>ㅤㅤ</th>
                                        <th scope="col-1">Su saldo es de:</th>
                                        <th>ㅤㅤ</th>
                                        <th>ㅤㅤ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ㅤㅤ</td>
                                        <td>ㅤㅤ</td>
                                        <td> $ 10,000 MX</td>
                                        <td>ㅤㅤ</td>
                                        <td>ㅤㅤ</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table2">
                            <table class="tb_historial">
                                <thead>
                                    <tr>
                                        <th>ㅤㅤ</th>
                                        <th scope="col-1">Folio</th>
                                        <th scope="col-1">Clabe</th>
                                        <th scope="col-1">Cantidad</th>
                                        <th scope="col-1">Fecha</th>
                                        <th scope="col-1">PDF</th>
                                        <th>ㅤㅤ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ㅤㅤ</td>
                                        <td>***45</td>
                                        <td>**************6543</td>
                                        <td>$200 MX</td>
                                        <td>12/04/2022</td>
                                        <td><li><a href="#">Ver más</a></li></td>
                                        <td>ㅤㅤ</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Fin Portada -->
    <script src="../configuracion/js/app_home.js"></script>
    <script src="../configuracion/js/cerrar.js"></script>
</body>
</html>