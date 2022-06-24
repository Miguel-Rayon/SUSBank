<<<<<<< HEAD
<?php
$caracteres='0123456789';
$longcard=16;
$longsald=4;
$longc=18;
for($card='', $n=strlen($caracteres)-1; strlen($card) < $longcard ; ) {
  $x = rand(0,$n);
  $card.= $caracteres[$x];
}

for($sald='', $n=strlen($caracteres)-1; strlen($sald) < $longsald ; ) {
    $x = rand(0,$n);
    $sald.= $caracteres[$x];
  }
for($c='', $n=strlen($caracteres)-1; strlen($c) < $longc ; ) {
    $x = rand(0,$n);
    $c.= $caracteres[$x];
}
=======
<?php
$caracteres='0123456789';
$longcard=16;
$longsald=4;
$longc=18;
for($card='', $n=strlen($caracteres)-1; strlen($card) < $longcard ; ) {
  $x = rand(0,$n);
  $card.= $caracteres[$x];
}

for($sald='', $n=strlen($caracteres)-1; strlen($sald) < $longsald ; ) {
    $x = rand(0,$n);
    $sald.= $caracteres[$x];
  }
for($c='', $n=strlen($caracteres)-1; strlen($c) < $longc ; ) {
    $x = rand(0,$n);
    $c.= $caracteres[$x];
}
>>>>>>> 808b9d5444bc9176c6ff9f99d86211fe06e31d21
?>