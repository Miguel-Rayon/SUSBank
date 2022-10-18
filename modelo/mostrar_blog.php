<?php 
class datos{

     public function dato(){
        try {
            $db = Conexion::conectar();
                $coleccion = $db -> blog;
                $resultado = $coleccion->find();
                return $resultado;
         } catch (\Throwable $th) {
            return $th -> getMessage();
         }
     }
}

?>