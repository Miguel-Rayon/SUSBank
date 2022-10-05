<?php

class transferencias{

  


     public function transferencia(){
        try {
            $db = Conexion::conectar();
                $coleccion = $db -> transferencia;
                $resultado = $coleccion->find(array("id_user"=>$_SESSION['id_user']));
                return $resultado;
         } catch (\Throwable $th) {
            return $th -> getMessage();
         }
     }

 
}

?>