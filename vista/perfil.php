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
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo.png">
    <link rel="stylesheet" href="../configuracion/css/estilos.css">
    <link rel="stylesheet" href="../configuracion/css/estilos_login.css">
    <title>Mi perfil</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
          <div class="signin-signup">
            <!-- Mi perfil -->
            <form action="home.php" class="sign-in-form">
            
              <h2 class="title">Mi perfil</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" id="nombre" value="<?php echo $_SESSION['nombre'] ?>" readonly="readonly"  /> 
               
              </div>
              <div class="input-field">
                <i class="fa-solid fa-landmark"></i>
                <input type="text" id="clabe" value="<?php echo $_SESSION['clabe'] ?>" readonly="readonly"  />
                
              </div>
              <div class="input-field">
                <i class="fa-solid fa-wallet"></i>
                <input type="text" id="num_tarjeta" value="<?php echo $_SESSION['num_tarjeta']?>" readonly="readonly"  />
                
              </div>
              <input type="submit" class="btn" value="Volver" />
            
            </form>
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
</body>
</html>