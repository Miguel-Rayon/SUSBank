<?php
class datos{
     public function dato(){
         try {
            $db = Conexion::conectar();
                $coleccion = $db -> user;
                $resultado = $coleccion->find(array("_id"=>$_SESSION['id_user']));
                return $resultado;
         } catch (\Throwable $th) {
            return $th -> getMessage();
         }
     }

}

?>