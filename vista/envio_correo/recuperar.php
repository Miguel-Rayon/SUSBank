<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../configuracion/css/estilos_login.php">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="shortcut icon" type="image/x-icon" href="../../img/logo.png">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <div class="contacto">
        <form method="post" action="https://formcarry.com/s/nI5dwAwkC" accept-charset="UTF-8">
        <h2 class="title">Recupera tu contraseña</h2>
              <div class="input-field">
                <i class="fa fa-user"></i>
                <input id="nombre" type="text" placeholder="Introduce tu nombre" name="nombre" />
              </div>
              <div class="input-field">
                <i class="fa fa-envelope-o"></i>
                <input id="correo" type="email" placeholder="Ingresa tu correo" name="email" />
              </div>
              <div class="input-fielt">
                <i class="fa fa-pencil-square-o"></i>
                <textarea name="mensaje" id="mensaje" placeholder="Coloca el como recuerdas tu contraseña" rows="3" name="mensaje"></textarea>
              </div>
              <input type="hidden" name="_gotcha">
              <button type="submit" class="boton">Enviar Correo</button>
              <button type="reset" class="boton" style="margin-top: 10px;">Limpiar</button>
              <button class="boton" style="margin-top: 10px;"><a style="color: #fff; text-transform: uppercase; font-weight: 600; text-decoration: none;" href="javascript: history.go(-1)">Volver</a></button>

            </form>
    </div>
</div>
</body>
</html>