<?php

include 'conexion.php';



class agregar{

    private $db; //database
    private $lista;

    public function __construct(){
        $this->db = conexion::conn();
        $this->arraydb = array();
     }

    


     public function agregar_usuario($nombre,$correo,$pass,$curp,$cel,$num_tarjeta,$saldo,$clabe){
         $resultado = $this->db->query("INSERT INTO usuarios (nombre,correo,pass,curp,cel,num_tarjeta,saldo,clabe) VALUES ('$nombre','$correo','$pass','$curp','$cel','$num_tarjeta','$saldo','$clabe')");
     }
}

?>