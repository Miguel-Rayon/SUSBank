<?php
class conexion{

public function conn(){
            $enlace = mysqli_connect("localhost", "root", "root", "susbank");
            $enlace -> set_charset("utf8");
            return $enlace;
}   
}
?>