<?php session_start();
include("../modelo/mongoconexion.php");
include("../modelo/servicio.php");
$servicios=$_POST['servicios'];
$referencia=$_POST['referencia'];
$cantidad_servicio=$_POST['cantidad_servicio'];
if($_POST['servicios']!= null AND $_POST['referencia']!= null AND $_POST['cantidad_servicio']!= null){
 $obj = new servicios();
 $resultado= $obj -> servicio($servicios,$cantidad_servicio,$referencia);
 if(!empty($resultado)){
    header("location: ../vista/home.php");
}else{
    echo "No se pudo efectuar el pago";
}
}else{
    echo "no colocar datos vacios";
}
?>