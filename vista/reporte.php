<?php 
session_start();
include("../modelo/mongoconexion.php");
include("../modelo/mostrar_tranfer.php");
$objt = new transferencias();
$result = $objt -> transferencia();
include("../modelo/mostrar_servicio.php");
$ob = new servicios();
$resulto = $ob -> servicio();
include("../modelo/mostrar_datos_r.php");
$obj= new datos();
$resulta = $obj -> dato();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/333b9b8f44.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../configuracion/js/crearPDF.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo.png">
    <link rel="stylesheet" href="../configuracion/css/estilos.css">
    <link rel="stylesheet" href="../configuracion/css/estilos_dashboard.css">
    <title>Reporte</title>
</head>
<body>
<header id="header">
        <div class="container_header">
            <div class="logo">
                <img src="../img/logo.jpeg" style="height:90%; width:95%;" alt="logo">
            </div>
            <div class="container__nav">
                <nav id="nav">
                    <ul> 
                        <li><a id="btnCrearPdf" style="cursor: pointer;" class="select">Generar PDF</a></li>
                        <li><a href="home.php" class="select">Volver</a></li>
                    </ul>
                </nav>
                <div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>
            </div>
        </div>
    </header>
      <!-- Portada -->
      <div class="container__all" id="container_all">
        <div class="cover">
            <div class="container__cover">
                <div class="container__info">
                    <h1>Estado de</h1>
                    <H2>Cuenta</H2>
                    <p>Estado de Cuenta de <?php echo $_SESSION['nombre']; ?></p>
                    <?php foreach($resulta as $a){ ?>
                        <p>numero de cuenta: <?php echo $a["num_tarjeta"] ?></p>
                        <p>clabe interbancaria: <?php echo $a["clabe"] ?></p>
                        <p>CURP: <?php echo $a["curp"] ?></p>
                    <?php } ?>
                    <button><li><a><?php
                    date_default_timezone_set('America/Monterrey');
                    $DateAndTime = date('m-d-Y h:i:s a', time());   
                    echo "Fecha y Hora de consulta de estado de cuenta $DateAndTime.";
                    ?></a></li></button>
                </div>
                <div class="container__vector">
                    <img src="../img/Revenue _Monochromatic.svg" alt="portada" type="img/svg">
                </div>
                
            </div>
        </div>
        <div class="tables">
                        <div class="table2">
                        
                            <table class="tb_historial">
                                <thead>
                                    <tr>
                                        <th>Folio/Servicio</th>
                                        <th>Clabe</th>
                                        <th>Concepto</th>
                                        <th>Cantidad</th>
                                      
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if ($result != null) {?>
                                <?php foreach($result as $r){ ?>
                                    <tr>
                                        <td id="folio<?php echo $r["_id"];?>"><?php echo $r["num_f"] ?></td>
                                        <td id="clabe<?php echo $r["_id"];?>"><?php echo $r["clabe_rec"] ?></td>
                                        <td id="concepto<?php echo $r["_id"];?>"><?php echo $r["concepto"] ?></td>
                                        <td id="monto<?php echo $r["_id"];?>">$<?php echo $r["cantidad"] ?> MX</td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php } else{ ?>
                                        <tr>Por el momento no hay tranferencias </tr>
                                    <?php } ?>
                                    <?php if ($resulto != null) {?>
                                    <?php foreach($resulto as $rs){ ?>
                                    <tr>
                                        <td><?php echo $rs["servicio"] ?></td>
                                        <td><?php echo $rs["referencia"] ?></td>
                                        <td>Pago de: <?php echo $rs["servicio"] ?></td>
                                        <td>$<?php echo $rs["cantidad"] ?> MX</td>
                                        
                                    </tr>
                                    <?php } ?>
                                    <?php } else{ ?>
                                        <tr>Por el momento no sean pagado servicios </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                           
                        </div>
                </div>
    <!-- Fin Portada -->
   
    
                   
    
    <script src="../configuracion/js/app_home.js"></script>        
</body>
</html>