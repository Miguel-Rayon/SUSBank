<?php
session_start();
$correo = $_POST['correo_login'];
$pass = $_POST['pass_login'];

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
    $url = "home.html";
    exit(json_encode([
        "status" => "1",
        "nombre" => $nombre,
        "url" => "$url"
    ]));
}
?>