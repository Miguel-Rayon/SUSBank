<?php 
class servicios{

     public function servicio($servicios,$cantidad_servicio,$referencia){
      try {
        $db = Conexion::conectar();
        $coleccion = $db -> servicio;
        $cantidad = (int)$cantidad_servicio;
        $resultado=$coleccion -> insertOne(array("servicio"=>$servicios,"cantidad"=>$cantidad,"referencia"=>$referencia,"id_user"=>$_SESSION['id_user']));
        return $resultado;
      } catch (\Throwable $th) {
        return $th -> getMessage();
      }
      }
}


?>