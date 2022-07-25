<?php 
include 'conexion.php';

class transferir{
    private $db; //database
    private $lista;

    public function __construct(){
        $this->db = conexion::conn();
        $this->arraydb = array();
     }
    public function transferencia ($num_f,$clabe_rec,$cantidad,$concepto){
        $resultado = $this->db->query("INSERT INTO transferencia (folio,clabe,monto,concepto,id_user) VALUES ('$num_f', '$clabe_rec','$cantidad','$concepto', '".$_SESSION['id_user']."')");
        $validar = $this->db->query("SELECT EXISTS(SELECT * FROM usuarios WHERE clabe = $clabe_rec)");
        $v = mysqli_fetch_row($validar);
        if ($v[0]=="1") {                 
            $result= $this->db->query("SELECT * FROM usuarios where id_user='".$_SESSION['id_user']."'");
            foreach($result as $row){
            $r =  $row['saldo'] - $cantidad;}
            $modificar = $this->db->query("UPDATE usuarios SET saldo = $r WHERE id_user='".$_SESSION['id_user']."'");
            $aumento= $this->db->query("SELECT * FROM usuarios where clabe = $clabe_rec ");
            foreach($aumento as $au){
            $s = $au['saldo'] + $cantidad;}
            $aum = $this->db->query("UPDATE usuarios SET saldo = $s WHERE clabe = $clabe_rec");
        }else{
            $result= $this->db->query("SELECT * FROM usuarios where id_user='".$_SESSION['id_user']."'");
            foreach($result as $row){
            $r =  $row['saldo'] - $cantidad;}
            $modificar = $this->db->query("UPDATE usuarios SET saldo = $r WHERE id_user='".$_SESSION['id_user']."'");
        }
        
    }
} 
?>