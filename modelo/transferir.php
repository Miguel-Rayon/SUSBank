<?php 
class transferir{
    public function transferencia ($num_f,$clabe_rec,$clabe_env,$cantidad,$concepto){
        try {
            $db = Conexion::conectar();
            $coleccion = $db -> transferencia;
            $con = $db -> user;
            $cant = (int)$cantidad;
            $res = $coleccion -> insertOne(array("num_f"=>$num_f,"clabe_rec"=>$clabe_rec,"clabe_env"=>$clabe_env,"cantidad"=>$cant,"concepto"=>$concepto,"id_user"=>$_SESSION['id_user']));
            $result = $con->findOne(array("clabe" => $clabe_rec));
            $resulto = $con->findOne(array("clabe"=>$clabe_env));
            if(!empty($result)){
                foreach($result as $aum){
                    $actID = $aum["_id"];
                    $aumInt = (int)$aum["saldo"];
                    $newsaldo = $aumInt + $cant;
                }
                $suma = $con -> update(["_id" => $actID], ["saldo"=>$newsaldo]);
                
                foreach($resulto as $rest){
                    $restInt = (int)$rest["saldo"];
                    $restSaldo = $restInt - $cant;
                }
                $resta = $con -> update(["_id"=>$_SESSION['id_user']],["saldo"=>$restSaldo]);
            }else{
                foreach($resulto as $rest){
                    $restInt = (int)$rest["saldo"];
                    $restSaldo = $restInt - $cant;
                }
                $resta = $con -> update(["_id"=>$_SESSION['id_user']],["saldo"=>$restSaldo]);
            }
            return $res;
         } catch (\Throwable $th) {
            return $th -> getMessage();
         }
    
} }
?>