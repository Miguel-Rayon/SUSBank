<?php session_start();
include ("../modelo/mongoconexion.php");
include ("../modelo/registro.php");
include ("gen_card_y_sald.php"); 

$agregar = new agregar();
 

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $curp = $_POST['curp'];
    $cel = $_POST['cel'];
    $num_tarjeta= $valueCard;
    $saldo= 0;
    $clabe= $c;

    $datos = array(
        "nombre" => $nombre,
        "correo" => $correo,
        "pass" => $pass,
        "curp" => $curp,
        "cel" => $cel,
        "num_tarjeta" => $num_tarjeta,
        "saldo" => $saldo,
        "clabe" => $clabe
    );

if ($_POST['nombre']!=null AND $_POST['correo'] != null AND $_POST['pass'] != null AND $_POST['curp'] != null AND $_POST['cel'] != null){

$resultado = $agregar -> agregar_usuario($datos);

if($resultado->getInsertedId() > 0){
    $url = "login.php";
    
    header("location: ../vista/login.php"); 
} else {
    echo 'Error!';
        echo '<script>
            Swal.fire({
             icon: "error",
             title: "Oops...",
             text: "Ha ocurrido un problema con la base de datos",
             showConfirmButton: true,
             confirmButtonText: "Cerrar"
             }).then(function(result){
                if(result.value){                   
                 window.location = "../vista/login.php";
                }
             });
            </script>';
   
}
}else {
    echo 'Error!';
        echo '<script>
            Swal.fire({
             icon: "error",
             title: "Oops...",
             text: "No ingresar Datos vacios",
             showConfirmButton: true,
             confirmButtonText: "Cerrar"
             }).then(function(result){
                if(result.value){                   
                 window.location = "../vista/login.php";
                }
             });
            </script>';
}


?>
