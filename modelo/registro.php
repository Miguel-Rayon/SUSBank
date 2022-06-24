<<<<<<< HEAD
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

=======
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

>>>>>>> 808b9d5444bc9176c6ff9f99d86211fe06e31d21
?>