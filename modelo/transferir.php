<?php 
class transferir{
    public function transferencia ($num_f,$clabe_rec,$clabe_env,$cantidad,$concepto,$fecha){
        try {
            $db = Conexion::conectar();
            $coleccion = $db -> transferencia;
            $con = $db -> user;
            $cant = (int)$cantidad;
            $res = $coleccion -> insertOne(array("num_f"=>$num_f,"clabe_rec"=>$clabe_rec,"clabe_env"=>$clabe_env,"cantidad"=>$cant,"concepto"=>$concepto,"id_user"=>$_SESSION['id_user'],"fecha"=>$fecha));
            $result = $con->find(array("clabe" => $clabe_rec));
            $resulto = $con->find(array("clabe"=>$clabe_env));
            {/*if(!empty($result)){
                foreach($result as $aum){
                    echo $aum["_id"];
                    $actID = $aum["_id"];
                    $aumInt = (int)$aum["saldo"];
                    $newsaldo = (int)$aumInt + (int)$cant;
                   
                }
                $suma = $con -> updateMany(array("_id" => $actID), array('$set'=>array("saldo"=>$newsaldo)));
                
                foreach($resulto as $rest){
                    $restInt = (int)$rest["saldo"];
                    $restSaldo = (int)$restInt - (int)$cant;
                    
                }
                $resta = $con -> updateMany(array("_id"=>$_SESSION['id_user']), array("saldo"=>(int)$restSaldo));
                
            }else{
                foreach($resulto as $rest){
                    $restInt = (int)$rest["saldo"];
                    $restSaldo = (int)$restInt - (int)$cant;
                    
                }
                $resta = $con -> updateMany(array("_id"=>$_SESSION['id_user']), array("saldo"=>(int)$restSaldo));
                
            }
            return $suma;
        return $resta;*/}
            return $result;
            return $resulto;
            return $res;
         } catch (\Throwable $th) {
            return $th -> getMessage();
         }
    
} }
?>