<?php
    require_once $_SERVER['DOCUMENT_ROOT']. "/SUSBank/vendor/autoload.php";
    class Conexion{
        public function conectar(){
            try {
                $servidor="127.0.0.1";
                $usuario="mongoadmin";
                $password="123456";
                $db="susbank";
                $puerto="27017";
                //$cadenaConexion="mongodb://". $servidor . ":" . $puerto . "/" . $db;
                $cadenaConexion="aqui va la url de mongo :v";

                $cliente = new MongoDB\Client($cadenaConexion);
                return $cliente -> selectDatabase($db);
            } catch (\Throwable $th) {
                return $th -> getMessage();
            }
        }
    }
    $objeto = new Conexion();
    

?>
