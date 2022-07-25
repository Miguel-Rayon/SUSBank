<?php
session_start();
$servicios=$_POST['servicios'];
$referencia=$_POST['referencia'];
$cantidad_servicio=$_POST['cantidad_servicio'];
if($_POST['servicios']!= null AND $_POST['referencia']!= null AND $_POST['cantidad_servicio']!= null){
include("../modelo/servicio.php");
 $obj = new servicios();
 $resultado= $obj -> servicio($servicios,$cantidad_servicio,$referencia);

$url="home.php";
exit(json_encode([
    
    "status" => "1",
    "url" => "$url"
]));}else{
    exit(json_encode([
    
        "status" => "2"
    ]));
}
?>