<?php session_start();
include("../modelo/mongoconexion.php");
include("../modelo/servicio.php");
date_default_timezone_set('America/Monterrey');
$DateAndTime = date('m-d-Y h:i:s a', time()); 
$servicios=$_POST['servicios'];
$referencia=$_POST['referencia'];
$cantidad_servicio=$_POST['cantidad_servicio'];
$fecha = $DateAndTime;
if($_POST['servicios']!= null AND $_POST['referencia']!= null AND $_POST['cantidad_servicio']!= null){
 $obj = new servicios();
 $resultado= $obj -> servicio($servicios,$cantidad_servicio,$referencia,$fecha);
 if(!empty($resultado)){
    header("location: ../vista/home.php");
}else{
    echo "No se pudo efectuar el pago";
}
}else{
    echo "no colocar datos vacios";
}
?>