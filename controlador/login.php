<?php session_start();
include ("../modelo/mongoconexion.php");
include("../modelo/mongo_login.php");

$correo = $_POST['correo_login'];
$pass = $_POST['pass_login'];

$login = new login();



if($_POST['correo_login'] != null AND $_POST['pass_login'] != null){
    $result = $login -> inicio_sesion($correo,$pass);
    if(!empty($result)){ 
        foreach($result as $obj){
            $_SESSION['id_user'] = $obj["_id"];
            $_SESSION['nombre'] = $obj["nombre"];
            $_SESSION['clabe'] = $obj["clabe"];
            $_SESSION['num_tarjeta'] = $obj["num_tarjeta"];
        }
        if($correo == $obj["correo"] AND $pass == $obj["pass"]){
            header("location: ../vista/home.php");
        }else{
            echo "Contraseña y/o correo incorrecto";
        }
         
    }
    else{
        echo "Wrong combination of username and password";
    }
}else{
    echo "no ingresar datos vacios";
}


?>