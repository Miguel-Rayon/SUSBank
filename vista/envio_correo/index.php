<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>envio de correos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="shortcut icon" type="image/x-icon" href="../../img/logo.png">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <div class="contacto">
        <form method="post">
        <h2 class="title">Envianos un correo</h2>
              <div class="input-field">
                <i class="fa fa-user"></i>
                <input id="nombre" type="text" placeholder="Introduce tu nombre" />
              </div>
              <div class="input-field">
                <i class="fa fa-envelope-o"></i>
                <input id="correo" type="email" placeholder="Ingresa tu correo" />
              </div>
              <div class="input-fielt">
                <i class="fa fa-pencil-square-o"></i>
                <textarea name="mensaje" id="mensaje" placeholder="coloca tu mensaje" rows="3"></textarea>
              </div>
              <button type="button" class="boton" onclick="enviar_correo()">Enviar Correo</button>
              <button type="reset" class="boton" style="margin-top: 10px;">Limpiar</button>
              <button class="boton" style="margin-top: 10px;"><a style="color: #fff; text-transform: uppercase; font-weight: 600; text-decoration: none;" href="javascript: history.go(-1)">Volver</a></button>
        </form>
    </div>
</div>
<script src="enviar_correo.js"></script>
</body>
</html>