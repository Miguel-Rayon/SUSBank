<?php session_start();
include("../modelo/mongoconexion.php");
include("../modelo/mostrar_tranfer.php");
$objt = new transferencias();
$result = $objt->transferencia();
include("../modelo/mostrar_saldo.php");
$obj = new datos();
$resultado = $obj->dato();
include("../modelo/mostrar_servicio.php");
$ob = new servicios();
$resulto = $ob->servicio();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/333b9b8f44.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script defer src="../configuracion/js/app_qr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
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
                <img src="../img/logo.jpeg" style="height:90%; width:95%;" alt="logo">
            </div>
            <div class="container__nav">
                <nav id="nav">
                    <ul>
                        <li style=" list-style: none;"><a style="text-decoration: none; color: black;" href="transferencia.php">Transferir</a></li>
                        <li style=" list-style: none;"><a style="text-decoration: none; color: black;" href="perfil.php?<?php echo $_SESSION['id_user']; ?>">Mi Perfil</a></li>

                        <li style=" list-style: none;" onclick="cerrar()" style="cursor: pointer; "><a style="cursor: pointer; text-decoration: none; color: white;" class="select">Cerrar</a></li>
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
                    <button>
                        <li style="list-style: none;"><a style="text-decoration: none; color: white; cursor: pointer;" href="reporte.php">Estado de cuenta</a></li>
                    </button>

                    <form action="" id="formulario" class="formulario">
                        <input type="hidden" value="https://www.google.com/" id="link" placeholder="Escribe el monto de dinero" />
                        <button data-toggle="modal" data-target="#exampleModal">Depositar/Retirar sin tarjeta</button>
                    </form>
                </div>

                <div class="container__vector">




                </div>
            </div>
        </div>
        <!-- Fin Portada -->
        <div class="body" style="display:flex; height:100%; width:100%; justify-content:space-around; flex-wrap:wrap; margin:auto;">
            <div class="botones" style="display:flex; height:100%; width:50%; justify-content:flex-start; ">
                <div class="contenedor" style="flex-direction:column; width:100%;">
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="display: flex; flex-Direction: column; align-items:center;">
                                    <h5 class="modal-title" id="exampleModalLabel" style="text-align:center;">Tu codigo QR</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body" style="display: flex; flex-Direction: column; align-items:center;">
                                    <div id="contenedorQR" class="contenedorQR" style="display: flex; flex-Direction: column; align-items:center;">
                                        <h6>Listo! puedes ir a uno de nuestros cajeros y empezar a retirar dinero :)</h6>
                                        <br>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tablesinfo" style="display: flex; flex-direction:column; height:100%; width:100%">
                    <div class="tables">
                        <div class="table1">
                            <?php foreach ($resultado as $row) { ?>
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
                                            <td> <?php echo $row["saldo"] ?> MX</td>
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
                                        <th>ㅤㅤ</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($result != null) { ?>
                                        <?php foreach ($result as $r) { ?>
                                            <tr>
                                                <td id="folio<?php echo $r["_id"]; ?>"><?php echo  $r["num_f"] ?></td>
                                                <td id="clabe<?php echo $r["_id"]; ?>"><?php echo "***" . substr($r["clabe_rec"], -4) ?></td>
                                                <td id="concepto<?php echo $r["_id"]; ?>"><?php echo $r["concepto"] ?></td>
                                                <td id="monto<?php echo $r["_id"]; ?>">$<?php echo $r["cantidad"] ?> MX</td>
                                                <td>
                                                    <li style="cursor: pointer;"><a data-toggle="modal" data-target="#modal<?php echo $r["_id"] ?>">Ver más</a></li>
                                                </td>
                                            </tr>
                                            <!-- The Modal -->
                                            <div class="modal fade" id="modal<?php echo $r["_id"] ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Transferencia</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label>Folio:</label>
                                                                <input type="text" class="form-control" value="<?php echo $r["num_f"] ?>" id="folio<?php echo $r["_id"]; ?>" readonly="readonly">
                                                                <label>clabe:</label>
                                                                <input type="text" class="form-control" value="<?php echo "***" . substr($r["clabe_rec"], -4) ?>" id="clabe<?php echo $r["_id"]; ?>" readonly="readonly">
                                                                <label>concepto:</label>
                                                                <input type="text" class="form-control" value="<?php echo $r["concepto"] ?>" id="concepto<?php echo $r["_id"]; ?>" readonly="readonly">
                                                                <label>monto (MX):</label>
                                                                <input type="number" class="form-control" value="<?php echo $r["cantidad"] ?>" id="monto<?php echo $r["_id"]; ?>" readonly="readonly">
                                                                <label>Fecha de tranferencia: </label>
                                                                <input type="text" class="form-control" value="<?php echo $r["fecha"] ?>" id="fecha<?php echo $r["_id"]; ?>" readonly="readonly">
                                                                <input type="hidden" id="id<?php echo $r["_id"] ?>" value="<?php echo $r["id"] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <tr>Por el momento no hay tranferencias, </tr>
                                    <?php } ?>
                                    <?php if ($resulto != null) { ?>
                                        <?php foreach ($resulto as $rs) { ?>
                                            <tr>
                                                <td id="servicios<?php echo $rs["_id"]; ?>"><?php echo $rs["servicio"] ?></td>
                                                <td id="referencia<?php echo $rs["_id"]; ?>"><?php echo $rs["referencia"] ?></td>
                                                <td id="servicio<?php echo $rs["_id"]; ?>">Pago de: <?php echo $rs["servicio"] ?></td>
                                                <td id="cantidad<?php echo $rs["_id"]; ?>">$<?php echo $rs["cantidad"] ?> MX</td>
                                                <td>
                                                    <li style="cursor: pointer;"><a data-toggle="modal" data-target="#modal<?php echo $rs["_id"] ?>">Ver más</a></li>
                                                </td>
                                            </tr>
                                            <!-- The Modal -->
                                            <div class="modal fade" id="modal<?php echo $rs["_id"] ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Servicio</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <div style="width: 100%; height:160px; display:flex; justify-content:center; align-items:center;">
                                                                    <img src="../img/<?php echo $rs["servicio"] ?>.png" style="width:90%; height:100%;">
                                                                </div>
                                                                <label>Servicio:</label>
                                                                <input type="text" class="form-control" value="<?php echo $rs["servicio"] ?>" id="folio<?php echo $rs["_id"]; ?>" readonly="readonly">
                                                                <label>Referencia:</label>
                                                                <input type="text" class="form-control" value="<?php echo $rs["referencia"] ?>" id="referencia<?php echo $rs["_id"]; ?>" readonly="readonly">
                                                                <label>Cantidad (MX):</label>
                                                                <input type="text" class="form-control" value="<?php echo $rs["cantidad"] ?>" id="cantidad<?php echo $rs["_id"]; ?>" readonly="readonly">
                                                                <label>Fecha y hora de Pago:</label>
                                                                <input type="text" class="form-control" value="<?php echo $rs["fecha"] ?>" id="fecha<?php echo $rs["_id"]; ?>" readonly="readonly">
                                                                <input type="hidden" id="id<?php echo $rs["_id"] ?>" value="<?php echo $rs["_id"] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <tr>Por el momento no sean pagado servicios </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>



            <script src="../configuracion/js/app_home.js"></script>
            <script src="../configuracion/js/cerrar.js"></script>
            <script src="../configuracion/js/reporte.js"></script>
</body>

</html>