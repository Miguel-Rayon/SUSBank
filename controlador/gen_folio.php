<?php
$caracteres='0123456789';
$longf=5;
for($folio = '', $n=strlen($caracteres)-1;strlen($folio)< $longf;){
    $x = rand(0,$n);
    $folio.=$caracteres[$x];
}
?>