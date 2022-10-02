<?php 
  
    class Crud extends Conexion{
        public function mostrar_datos(){
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion -> user;
                $datos=$coleccion -> find();
                return $datos;
            } catch (\Throwable $th) {
                //throw $th;
            }
        }

    }
?>