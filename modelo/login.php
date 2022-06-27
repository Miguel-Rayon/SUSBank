
<?php

include 'conexion.php';

class login{

    private $db; //database
    private $lista;

    public function __construct(){
        $this->db = conexion::conn();
        $this->arraydb = array();
     }


     public function inicio_sesion($correo,$pass){
         $resultado = $this->db->query("SELECT * FROM usuarios WHERE correo='$correo' AND pass='$pass'");
         while($filas = $resultado->fetch_assoc()){
                $this->lista[] = $filas;
         }
         return $this->lista;
     }
}

?>