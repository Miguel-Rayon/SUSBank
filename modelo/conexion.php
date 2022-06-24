<<<<<<< HEAD
<?php
class conexion{

public function conn(){
            $enlace = mysqli_connect("localhost", "root", "root", "susbank");
            $enlace -> set_charset("utf8");
            return $enlace;
}   
}
=======
<?php
class conexion{

public function conn(){
            $enlace = mysqli_connect("localhost", "root", "root", "susbank");
            $enlace -> set_charset("utf8");
            return $enlace;
}   
}
>>>>>>> 808b9d5444bc9176c6ff9f99d86211fe06e31d21
?>