<?php 


    class login{

         public function inicio_sesion($correo, $pass){
            try {
                $db = Conexion::conectar();
                $coleccion = $db -> user;
                $resultado = $coleccion->find(array("correo"=>$correo,"pass"=>$pass));
                return $resultado;
            } catch (\Throwable $th) {
                return $th -> getMessage();
            }
        }
    }


?>