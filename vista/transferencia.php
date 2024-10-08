<?php
session_start();
$_SESSION['id_user'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/333b9b8f44.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo.png">
    <link rel="stylesheet" href="../configuracion/css/estilos.css">
    <link rel="stylesheet" href="../configuracion/css/estilos_pagos.css">
    <title>Tranferir</title>
</head>
<body>
<img src="../img/verificacion.png" style="position:fixed; z-index:500; bottom:0; left:0; width:12%;">
    <div class="container">
        <div class="forms-container">
          <div class="signin-signup">
               <!-- Tranferencia -->
            <form action="../controlador/transferir.php" method="post" class="sign-in-form">
              <h2 class="title">Tranferencia</h2>
              <div class="input-field">
                <i class="fa-solid fa-clipboard-user"></i>
                <input type="text" placeholder="Clabe a transferir" name="clabe_rec" id="clabe_rec" />
              </div>
              <div class="input-field">
                <i class="fa-brands fa-bitcoin"></i>
                <input type="number" placeholder="Cantidad" name="cantidad" id="cantidad" />
              </div>
              <div class="input-field">
                <i class="fa-solid fa-receipt"></i>
                <input type="text" placeholder="Concepto" name="concepto" id="concepto" />
              </div>
              <input type="submit" value="Tranferir" class="btn solid" />
              <input type="submit" value="Cancelar"  class="btn solid" />
            </form>
            <!-- Pago de Servicio -->
            <form action="../controlador/servicio.php" method="post" class="sign-up-form">
              <h2 class="title">Pagar Servicios</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input list="servicio" placeholder="Servicio a pagar" name="servicios" id="servicios" />
                <datalist name="servicio" id="servicio" >
                    <option value="CFE">
                    <option value="Agua y Drenaje">
                    <option value="TELMEX">
                    <option value="IZZI">
                </datalist>
              </div>
              <div class="input-field">
                <i class="fa-solid fa-receipt"></i>
                <input type="text" placeholder="referencia" name="referencia" id="referencia"/>
              </div>
              <li style="list-style: none;"><a style="color: #373737; font-size: 15px; text-decoration: none; cursor: pointer;" onclick="referencia()">Que es la referencia?</a></li>
              <div class="input-field">
                <i class="fa-brands fa-bitcoin"></i>
                <input type="number" placeholder="Cantidad" name="cantidad_servicio" id="cantidad_servicio" />
              </div>
              <input type="submit" value="Pagar" class="btn solid" />
              <input type="reset" value="Cancelar" class="btn solid" />
              <input type="button" value="Volver" onclick="location.href='home.php'" class="btn solid" />
            </form>
          </div>
        </div>
        <!-- Cambio de acceso -->
        <div class="panels-container">
          <div class="panel left-panel">
            <div class="content">
              <h3>Quieres pagar un servicio?</h3>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                ex ratione. Aliquid!
              </p>
              <button class="btn transparent" id="sign-up-btn">
                Click aqui!
              </button>
            </div>
            <img src="../img/e-wallet-animate.svg" class="image" alt="" />
          </div>
          <div class="panel right-panel">
            <div class="content">
              <h3>Quieres Transferir?</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                laboriosam ad deleniti.
              </p>
              <button class="btn transparent" id="sign-in-btn">
                Click aqui!
              </button>
            </div>
            <img src="../img/online-transactions-animate.svg" class="image" alt="" />
          </div>
        </div>
      </div>
      <script src="../configuracion/js/app_pagos.js"></script>
      <script src="../configuracion/js/app_transfer.js"></script>
      <script src="../configuracion//js/app_servicio.js"></script>
</body>
</html>