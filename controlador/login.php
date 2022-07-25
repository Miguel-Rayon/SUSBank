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
        $id = $r['id_user']; 
        $clabe = $r['clabe'];
    }
    $_SESSION['login'] = "ok";
    $_SESSION['nombre'] =  $nombre;
    $_SESSION['id_user'] = $id;
    $_SESSION['clabe'] = $clabe; 
    $url = "home.php";
    exit(json_encode([
        "status" => "1",
        "nombre" => $nombre,
        "url" => "$url"
    ]));
}
?>