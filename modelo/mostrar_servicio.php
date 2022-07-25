<?php


class servicios{

    private $db; //database
    private $lista;

    public function __construct(){
        $this->db = conexion::conn();
        $this->arraydb = array();
     }


     public function servicio(){
         $resulto = $this->db->query("SELECT * FROM servicio where id_user='".$_SESSION['id_user']."'");
         while($filas = $resulto->fetch_assoc()){
            $this->lista[] = $filas;
     }
     return $this->lista;
     }

}

?>