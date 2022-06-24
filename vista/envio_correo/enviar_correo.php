<<<<<<< HEAD
<?php
include("gen_contra.php");
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];
include("enviar.php");
$obj = new enviar();
$resultado = $obj -> enviar_correo($correo,$nombre,$mensaje,$pass);
$url = "../home.html";
exit(json_encode(
    ["status"=>"1", "url" => "$url" ]
    
));
=======
<?php
include("gen_contra.php");
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];
include("enviar.php");
$obj = new enviar();
$resultado = $obj -> enviar_correo($correo,$nombre,$mensaje,$pass);
$url = "../home.html";
exit(json_encode(
    ["status"=>"1", "url" => "$url" ]
    
));
>>>>>>> 808b9d5444bc9176c6ff9f99d86211fe06e31d21
?>