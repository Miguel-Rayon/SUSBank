<?php
class servicios{
 
     public function servicio(){
        try {
            $db = Conexion::conectar();
                $coleccion = $db -> servicio;
                $resultado = $coleccion->find(array("id_user"=>$_SESSION['id_user']));
                return $resultado;
         } catch (\Throwable $th) {
            return $th -> getMessage();
         }
     }

}

?>