<?php
include 'conexion.php';

class transferencias{

    private $db; //database
    private $lista;

    public function __construct(){
        $this->db = conexion::conn();
        $this->arraydb = array();
     }


     public function transferencia(){
         $result = $this->db->query("SELECT * FROM transferencia where id_user='".$_SESSION['id_user']."'");
         while($filas = $result->fetch_assoc()){
            $this->lista[] = $filas;
     }
     return $this->lista;
     }


}

?>