<?php


class datos{

    private $db; //database
    private $lista;

    public function __construct(){
        $this->db = conexion::conn();
        $this->arraydb = array();
     }


     public function dato(){
         $resulta = $this->db->query("SELECT * FROM usuarios where id_user='".$_SESSION['id_user']."'");
         while($filas = $resulta->fetch_assoc()){
            $this->lista[] = $filas;
     }
     return $this->lista;
     }
}

?>