<?php
class agregar{

     public function agregar_usuario($datos){
         try {
            $db = Conexion::conectar();
            $coleccion = $db -> user;
            $res = $coleccion -> insertOne($datos);
            return $res;
         } catch (\Throwable $th) {
            return $th -> getMessage();
         }
         
     }
     public function mensajesCrud($mensaje) {
      $msg = '';

      if ($mensaje == 'insert_login') {
          $msg = 'swal("Excelente!", "Usuario registrado exitosamente inicie sesion para empezar a usar SUS Bank", "success")';
      } else if($mensaje == 'error_login'){
          $msg = 'swal("Error!", "Credenciales incorrectas!", "warning")';
      } else if($mensaje == 'data_null'){
          $msg = 'swal("Error!", "No dejes ningun campo vacio!", "warning")';
      }

      return $msg;
  }
}

?>