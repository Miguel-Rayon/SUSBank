<?php 
class servicios{

     public function servicio($servicios,$cantidad_servicio,$referencia,$fecha){
      try {
        $db = Conexion::conectar();
        $coleccion = $db -> servicio;
        $con=$db -> user;
        $cantidad = (int)$cantidad_servicio;
        $resultado=$coleccion -> insertOne(array("servicio"=>$servicios,"cantidad"=>$cantidad,"referencia"=>$referencia,"id_user"=>$_SESSION['id_user'],"fecha"=>$fecha));
        $resulta = $con -> find(array("_id"=>$_SESSION['id_user']));
        
        if(!empty($resulta)){
          foreach ($resulta as $rest) {
            $saldo = (int)$rest["saldo"];
            $nuevaCantidad = (int)$saldo - (int)$cantidad;
          }
          $result = $con ->updateMany(array("_id"=>$_SESSION['id_user']), array('$set'=>array("saldo"=>$nuevaCantidad)));
        }
        
        return $result;
        return $resulta;
        return $resultado;
      } catch (\Throwable $th) {
        return $th -> getMessage();
      }
      }
}


?>