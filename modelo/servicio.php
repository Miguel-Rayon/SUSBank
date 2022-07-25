<?php 
include 'conexion.php';
class servicios{
    private $db; //database
    private $lista;

    public function __construct(){
        $this->db = conexion::conn();
        $this->arraydb = array();
     }

     public function servicio($servicios,$cantidad_servicio,$referencia){
        $resultado = $this->db->query("INSERT INTO servicio (servicio,cantidad,referencia,id_user) VALUES ('$servicios','$cantidad_servicio','$referencia', '".$_SESSION['id_user']."')");
        
        $result= $this->db->query("SELECT * FROM usuarios where id_user='".$_SESSION['id_user']."'");
        foreach($result as $row){
        $r =  $row['saldo'] - $cantidad_servicio;}
        $modificar = $this->db->query("UPDATE usuarios SET saldo = $r WHERE id_user='".$_SESSION['id_user']."'");
      }
}


?>