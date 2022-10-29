<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
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
            echo '<script language="javascript">alert("Has Iniciado sesion, Benvenido!");</script>';
            header("location: ../vista/home.php");
        }else{
            echo '<script>
            Swal.fire({
             icon: "error",
             title: "Oops...",
             text: "¡La contraseña y/o correo no coincide!",
             showConfirmButton: true,
             confirmButtonText: "Cerrar"
             }).then(function(result){
                if(result.value){                   
                 window.location = "../vista/login.php";
                }
             });
            </script>';

        }
         
    }
    else{
        echo '<script language="javascript">alert("Ha ocurrido un error con la base de datos :(");</script>';
        header("location: ../vista/login.php");
    }
}else{
    echo '<script language="javascript">alert("No colocar datos vacios");</script>';
    header("location: ../vista/login.php");
}


?>