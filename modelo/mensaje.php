<?php 
    class mensaje{
        public function mensajesCrud($mensaje) {
            $msg = '';

            if ($mensaje == 'insert_login') {
                $msg = "Swal.fire({
                    title: 'Atención!',
                    text:   'su usuario ha sido añadido correctamente, favor de iniciar sesion para verificar datos.',
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#373737',
                    confirmButtonText: 'Continuar',
                }).then((result) => {
                    window.location.replace('login.php')
                })";
            } else if ($mensaje == 'update') { 
                $msg = 'swal.fire("Excelente!", "Actualizado con exito!", "info")';
            } else if ($mensaje == 'delete') {
                $msg = 'swal.fire("Excelente!", "Eliminado con exito!", "warning")';
            } else if($mensaje == 'error_login'){
                $msg = 'swal.fire("Error!", "Credenciales incorrectas!", "warning")';
            } else if($mensaje == 'data_null'){
                $msg = 'swal.fire("Error!", "No dejes ningun campo vacio!", "warning")';
            }else if($mensaje == 'register'){
                $msg = 'swal.fire("Excelente!", "Se ha registrado el usuario ya puede iniciar sesion", "success")';
            }

            return $msg;
        }
    }
?>