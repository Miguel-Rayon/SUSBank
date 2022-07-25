<?php
session_start();
include("gen_folio.php");
$num_f = $folio; 
$clabe_rec = $_POST['clabe_rec'];
$cantidad = $_POST['cantidad'];
$concepto = $_POST['concepto'];

if($_POST['clabe_rec']!= null AND $_POST['cantidad']!= null AND $_POST['concepto']!= null){

include("../modelo/transferir.php");
$obj = new transferir();
$resultado = $obj -> transferencia($num_f,$clabe_rec,$cantidad,$concepto);

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