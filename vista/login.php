<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/333b9b8f44.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo.png">
    <link rel="stylesheet" href="../configuracion/css/estilos_login.css">
    <title>Acceso</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
          <div class="signin-signup">
               <!-- Inicio de Sesion -->
            <form action="return false" onsubmit="return false" id="form-login" class="sign-in-form">
              <h2 class="title">Inicie Sesion</h2>
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Correo" id="correo_login" autofocus />
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Contraseña" id="pass_login" />
              </div>
              <input type="submit" value="Inicie Sesion" id="envio-login" onclick="login()" class="btn solid" />
            </form>
            <!-- Registro -->
            <form action="return false" onsubmit="return false" id="form-registro" class="sign-up-form">
              <h2 class="title">Registro</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Nombre Completo" id="nombre" autofocus />
              </div>
              <div class="input-field">
                <i class="fa-solid fa-address-card"></i>
                <input type="text" placeholder="CURP" id="curp" />
              </div>
              <li style="list-style: none;"><a style="  color: #373737; font-size: 15px; text-decoration: none;" href="https://www.gob.mx/curp/">Click para consultar tu CURP</a></li>
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Correo" id="correo" />
              </div>
              <div class="input-field">
                <i class="fa-solid fa-phone"></i>
                <input type="text" placeholder="Celular" id="cel"/>
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Contraseña" id="pass" />
              </div>
              <input type="submit" class="btn" id="envio-registro" onclick="registro()" value="Registrese" />
            </form>
          </div>
        </div>
        <!-- Cambio de acceso -->
        <div class="panels-container">
          <div class="panel left-panel">
            <div class="content">
              <h3>Nuevo Aqui?</h3>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                ex ratione. Aliquid!
              </p>
              <button class="btn transparent" id="sign-up-btn">
                Registrese
              </button>
            </div>
            <img src="../img/login.svg" class="image" alt="" />
          </div>
          <div class="panel right-panel">
            <div class="content">
              <h3>Ya tiene cuenta?</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                laboriosam ad deleniti.
              </p>
              <button class="btn transparent" id="sign-in-btn">
                Inicie Sesion
              </button>
            </div>
            <img src="../img/register.svg" class="image" alt="" />
          </div>
        </div>
      </div>
      <!-- fin de la pagina -->
      <script src="../configuracion/js/app_login.js"></script>
      <script src="../configuracion/js/login.js"></script>
      <script src="../configuracion/js/registro.js"></script>
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