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

>>>>>>> d461e94edbdfd34cad44e9068bbf1c569f0a5524
?>