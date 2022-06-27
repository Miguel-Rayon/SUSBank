<?php
session_start();
$correo = $_POST['correo'];
$pass = $_POST['pass'];

include("../modelo/login.php");
$obj = new Login();
$resultado = $obj -> inicio_sesion($correo,$pass);

if(empty($resultado)){
    exit(json_encode([
        "status" => "2"
    ]));
}else{
    foreach($resultado as $r){
        $nombre = $r['nombre'];
    }
    $_SESSION['login'] = "ok";
    $_SESSION['nombre'] =  $nombre;
    $_SESSION['clabe'] = $clabe;
    $_SESSION['num_tarjeta'] = $num_tarjeta;
    $url = "home";
    exit(json_encode([
        "status" => "1",
        "nombre" => $nombre,
        "clabe" => $clabe,
        "num_tarjeta" => $num_tarjeta,
        "url" => "$url"
    ]));
}
?>