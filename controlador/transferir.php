<?php session_start();
include ("../modelo/mongoconexion.php");
include("../modelo/transferir.php");
include("gen_folio.php");
date_default_timezone_set('America/Monterrey');
$DateAndTime = date('m-d-Y h:i:s a', time());  
$num_f = $folio; 
$clabe_rec = $_POST['clabe_rec'];
$clabe_env = $_SESSION['clabe'];
$cantidad = $_POST['cantidad'];
$concepto = $_POST['concepto'];
$fecha = $DateAndTime;



if($_POST['clabe_rec']!= null AND $_POST['cantidad']!= null AND $_POST['concepto']!= null){

$obj = new transferir();
$resultado = $obj -> transferencia($num_f,$clabe_rec,$clabe_env,$cantidad,$concepto, $fecha);
if(!empty($resultado)){
    header("location: ../vista/home.php");
}else{
    echo "No se pudo efectuar la trasferencia";
}

}else{
    echo "no colocar datos vacios";
}

?>