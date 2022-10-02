<?php session_start();
include ("../modelo/mongoconexion.php");
include("../modelo/mongo_login.php");

$correo = $_POST['correo_login'];
$pass = $_POST['pass_login'];

$login = new login();



if($_POST['correo_login'] != null AND $_POST['pass_login'] != null){
    $result = $login -> inicio_sesion($correo,$pass);
    if(!empty($resultado)){ 
        foreach($resultado as $obj){
            $_SESSION['id_user'] = $obj['_id'];
            $_SESSION['nombre'] = $obj['nombre'];
        }
        header("location: ../vista/home.php"); 
    }
    else{
        echo "Wrong combination of username and password";
    }
}else{
    echo "no ingresar datos vacios";
}


?>