<?php
session_start();
include("../modelo/mostrar_tranfer.php");
$objt = new transferencias();
$result = $objt -> transferencia();
include("../modelo/mostrar_saldo.php");
$obj = new datos();
$resultado = $obj -> dato();
include("../modelo/mostrar_servicio.php");
$ob = new servicios();
$resulto = $ob -> servicio();
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
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
                        <li><a href="transferencia.php">Transferir</a></li>
                        <li><a href="perfil.php?<?php echo $_SESSION['id_user']; ?>">Mi Perfil</a></li>
                        <li><a href="ayuda.php">Ayuda</a></li>
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
                    <button><li><a href="transferencia.php">Transferir y pago de servicios</a></li></button>
                </div>
                <div class="container__vector">
                    <div class="tables">
                        <div class="table1">
                         <?php foreach($resultado as $row){ ?>
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
                                        <td> <?php echo $row['saldo'] ?> MX</td>
                                        <td>ㅤㅤ</td>
                                        <td>ㅤㅤ</td>
                                    </tr>
                                </tbody>
                            </table>
                            <?php } ?>
                        </div>
                        <div class="table2">
                        
                            <table class="tb_historial" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Folio/Servicio</th>
                                        <th>Clabe</th>
                                        <th>Concepto</th>
                                        <th>Cantidad</th>
                                        <th>PDF</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if ($result != null) {?>
                                <?php foreach($result as $r){ ?>
                                    <tr>
                                        <td><?php echo $r['folio'] ?></td>
                                        <td><?php echo $r['clabe'] ?></td>
                                        <td><?php echo $r['concepto'] ?></td>
                                        <td>$<?php echo $r['monto'] ?> MX</td>
                                        <td><li><a href="reporte.php">Ver más</a></li></td>
                                    </tr>
                                    <?php } ?>
                                    <?php } else{ ?>
                                        <tr>Por el momento no hay tranferencias </tr>
                                    <?php } ?>
                                    <?php if ($resulto != null) {?>
                                    <?php foreach($resulto as $rs){ ?>
                                    <tr>
                                        <td><?php echo $rs['servicio'] ?></td>
                                        <td><?php echo $rs['referencia'] ?></td>
                                        <td>Pago de: <?php echo $rs['servicio'] ?></td>
                                        <td>$<?php echo $rs['cantidad'] ?> MX</td>
                                        <td><li><a href="#">Ver más</a></li></td>
                                    </tr>
                                    <?php } ?>
                                    <?php } else{ ?>
                                        <tr>Por el momento no sean pagado servicios </tr>
                                    <?php } ?>
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