<?php
session_start();
include ("gen_card_y_sald.php"); 
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];
$curp = $_POST['curp'];
$cel = $_POST['cel'];
$num_tarjeta=$card;
$saldo= $sald;
$clabe=$c;


include("../modelo/registro.php");
$obj = new agregar();
$resultado = $obj -> agregar_usuario($nombre,$correo,$pass,$curp,$cel,$num_tarjeta,$saldo,$clabe);


$_SESSION['nombre'] =  $nombre;
$url = "home.html";
exit(json_encode([
    "status" => "1",
    "nombre" => $nombre,
    "url" => "$url"
]));


?>