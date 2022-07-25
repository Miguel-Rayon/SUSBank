<?php


class datos{

    private $db; //database
    private $lista;

    public function __construct(){
        $this->db = conexion::conn();
        $this->arraydb = array();
     }


     public function dato(){
         $resultado = $this->db->query("SELECT * FROM usuarios where id_user='".$_SESSION['id_user']."'");
         while($filas = $resultado->fetch_assoc()){
            $this->lista[] = $filas;
     }
     return $this->lista;
     }

}

?>