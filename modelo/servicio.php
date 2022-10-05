<?php 
class servicios{

     public function servicio($servicios,$cantidad_servicio,$referencia){
      try {
        $db = Conexion::conectar();
        $coleccion = $db -> servicio;
        $conn=$db ->user;
        $cantidad = (int)$cantidad_servicio;
        $resultado=$coleccion -> insertOne(array("servicio"=>$servicios,"cantidad"=>$cantidad,"referencia"=>$referencia,"id_user"=>$_SESSION['id_user']));
        return $resultado;
        $resulta = $conn -> find(array($_SESSION['id_user']));
        if(!$resulta){
          foreach ($resulta as $rest) {
            $total = (int)$rest["saldo"];
            $nuevaCantidad = (int)$total - (int)$cantidad;
          }
          $res = $conn ->update(["id"=>$_SESSION['id_user']],["saldo"=>$nuevaCantidad]);
        }
      } catch (\Throwable $th) {
        return $th -> getMessage();
      }
      }
}


?>