<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <script src="https://kit.fontawesome.com/333b9b8f44.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../configuracion/css/estilos_login.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../img/logo.png">
</head>
<body>
<div class="container">
        <div class="forms-container">
          <div class="signin-signup">
               <!-- Recuperar Cuenta -->
            <form action="https://formcarry.com/s/nI5dwAwkC" accept-charset="UTF-8" method="post" class="sign-in-form">
              <h2 class="title">Enviar Correo</h2>
              <div class="input-field">
                <i class="fa fa-user"></i>
                <input id="nombre" type="text" placeholder="Introduce tu nombre" name="nombre" />
              </div>
              <div class="input-field">
                <i class="fa fa-envelope-o"></i>
                <input id="correo" type="email" placeholder="Ingresa tu correo" name="email" />
              </div>
              <div class="input-field">
                <i class="fa fa-pencil-square-o"></i>
                <input id="mensaje" type="text" placeholder="Ingresa tu mensaje" name="mensaje" />
              </div>
              <input type="hidden" name="_gotcha">
              <button type="submit" class="btn">Enviar Correo</button>
              <button type="reset" class="btn" style="margin-top: 10px;">Limpiar</button>
              
            </form>
              <!-- cosa toda innecesaria pero si se borra falla el sistema :v -->
              <form action="../controlador/registro.php" method="post" id="form-registro" class="sign-up-form">
              <h2 class="title">Registro</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Nombre Completo" id="nombre" name="nombre" autofocus required/>
              </div>
              <div class="input-field">
                <i class="fa-solid fa-address-card"></i>
                <input type="text" placeholder="CURP" id="curp" name="curp" required/>
              </div>
              <li style="list-style: none;"><a style="color: #373737; font-size: 15px; text-decoration: none;" target="_blank" rel="noopener noreferrer" href="https://www.gob.mx/curp/">Click para consultar tu CURP</a></li>
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Correo" id="correo" name="correo" required/>
              </div>
              <div class="input-field">
                <i class="fa-solid fa-phone"></i>
                <input type="text" placeholder="Celular" id="cel" name="cel" required/>
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Contraseña" id="pass" name="pass"  required/>
              </div>
              <input type="submit" class="btn" id="envio-registro" value="Registrese"/>
            </form>
          </div>
        </div>
        <!-- Cambio de acceso -->
        <div class="panels-container">
          <div class="panel left-panel">
            <div class="content">
              <h3>Contactanos</h3>
              <p>
                Si presentas algun problema no dudes en ponerte en contacto
              </p>
              <button class="btn transparent">
                <li style="list-style: none;"><a style="color: #ffffff; font-size: 15px; text-decoration: none;" href="javascript: history.go(-1)">Volver</a></li>
              </button>
            </div>
            <img src="../../img/email-campaign-animate.svg" class="image" alt="" />
          </div>
          <div class="panel right-panel">
            <div class="content">
              <h3>---</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                laboriosam ad deleniti.
              </p>
              <button class="btn transparent" id="sign-in-btn">
                - - -
              </button>
            </div>
            <img src="../../img/register.svg" class="image" alt="" />
          </div>
        </div>
      </div>
      <!-- fin de la pagina -->
      <script src="../../configuracion/js/app_login.js"></script>
      <script src="../../configuracion/js/login.js"></script>
      <script src="../../configuracion/js/registro.js"></script>
</body>
</html>