<?php
session_start();
include ("../modelo/mostrar_datos.php");
$obj = new datos();
$resultado = $obj -> dato();
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
            <?php foreach($resultado as $row){ ?>
              <h2 class="title">Mi perfil</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" id="nombre" value="<?php echo $row['nombre'] ?>" readonly="readonly"  /> 
               
              </div>
              <div class="input-field">
                <i class="fa-solid fa-landmark"></i>
                <input type="text" id="clabe" value="<?php echo $row['clabe'] ?>" readonly="readonly"  />
                
              </div>
              <div class="input-field">
                <i class="fa-solid fa-wallet"></i>
                <input type="text" id="num_tarjeta" value="<?php echo $row['num_tarjeta'] ?>" readonly="readonly"  />
                
              </div>
              <input type="submit" class="btn" value="Volver" />
              <?php } ?>
            </form>
          </div>
        </div>
        <!-- Cambio de acceso -->
        <div class="panels-container">
          <div class="panel left-panel">
            <div class="content">
              <h3>Hola <?php echo $row['nombre'] ?>!</h3>
              <p>
                Proximamente agregaremos mas opciones en un futuro, agradecemos tu preferencia en SUS Bank
              </p>
            </div>
            <img src="../img/Piggy bank_Monochromatic.svg" class="image" alt="" />
          </div>
        </div>
        <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.4/firebase-app.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyC6RyZQJGTYUIOYdJ5iHW3aDASRJuLgXks",
    authDomain: "bancosus-a12fc.firebaseapp.com",
    projectId: "bancosus-a12fc",
    storageBucket: "bancosus-a12fc.appspot.com",
    messagingSenderId: "806049636171",
    appId: "1:806049636171:web:e89637e645a36cb6ea52ce"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
</script>
</body>
</html>