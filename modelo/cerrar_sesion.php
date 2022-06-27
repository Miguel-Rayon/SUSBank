<?php
session_start();

unset($_SESSION['login']);
unset($_SESSION['nombre']);


exit(json_encode([
    "status" => "1"
]));


?>