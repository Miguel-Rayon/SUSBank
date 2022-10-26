<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/333b9b8f44.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo.png">
    <link rel="stylesheet" href="../configuracion/css/estilos.css">
    <link rel="stylesheet" href="../configuracion/css/estilos_login.css">
    <link rel="stylesheet" href="../configuracion/css/estilo_tarjeta.css">
    <title>Mi perfil</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
        
          <div class="signin-signup">
          <div class="contenedor">
            <!-- Tarjeta -->
                <section class="tarjeta" id="tarjeta">
                  <div class="delantera">
                    <div class="logo-marca" id="logo-marca">
                      <img src="../img/visa.png" alt=""> 
                    </div>
                    <img src="../img/chip-tarjeta.png" class="chip" alt="">
                    <div class="datos">
                      <div class="grupo" id="numero">
                        <p class="label">Número Tarjeta</p>
                        <p class="numero"><?php echo $_SESSION['num_tarjeta']?></p>
                      </div>
                      <div class="flexbox">
                        <div class="grupo" id="nombre">
                          <p class="label">Nombre Tarjeta</p>
                          <p class="nombre"><?php echo $_SESSION['nombre'] ?></p>
                        </div>

                        <div class="grupo" id="expiracion">
                          <p class="label">Expiracion</p>
                          <p class="expiracion"><span class="mes">02</span> / <span class="year">28</span></p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="trasera">
                    <div class="barra-magnetica"></div>
                    <div class="datos">
                      <div class="grupo" id="firma">
                        <p class="label">Firma</p>
                        <div class="firma"><p><?php echo $_SESSION['nombre'] ?></p></div>
                      </div>
                      <div class="grupo" id="ccv">
                        <p class="label">CCV</p>
                        <p class="ccv">111</p>
                      </div>
                    </div>
                    <p class="leyenda">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus exercitationem, voluptates illo.</p>
                    <a href="index.php" class="link-banco">SUS BANK</a>
                  </div>
                </section>
                <!-- Mi perfil -->
            <form action="home.php" class="sign-in-form">
              <input type="submit" class="btn" value="Volver" />
            </form>
            </div>
            
          </div>
        </div>
        <!-- Cambio de acceso -->
        <div class="panels-container">
          <div class="panel left-panel">
            <div class="content">
              <h3>Hola <?php echo $_SESSION['nombre'] ?>!</h3>
              <p>
                Proximamente agregaremos mas opciones en un futuro, agradecemos tu preferencia en SUS Bank
              </p>
            </div>
            <img src="../img/Piggy bank_Monochromatic.svg" class="image" alt="" />
          </div>
        </div>
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <script src="../configuracion/js/app_tarjeta.js"></script>

</body>
</html>