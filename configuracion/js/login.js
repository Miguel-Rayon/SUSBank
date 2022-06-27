function login() {
    var correo = document.getElementById('correo_login').value;
    var pass = document.getElementById('pass_login').value;
    var datos = new FormData();
    datos.append("correo", correo);
    datos.append("pass", pass);
    $.ajax({
        url: "../controlador/login.php",
        type: "POST",
        processData: false,
        contentType: false,
        data: datos,
        success: function(resp) {
            var respuesta = JSON.parse(resp);
            if (respuesta.status == "1") {
                Swal.fire({
                    icon: 'success',
                    title: 'Datos Correctos',
                    text: 'Bienvenido ' + respuesta.nombre,
                    showCancelButton: false,
                    confirmButtonColor: '#373737',
                    confirmButtonText: 'Continuar'
                    
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.replace(respuesta.url)
                    }
                })
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Correo y/o contraseña incorrecta!',
                    confirmButtonColor: '#373737',
                    confirmButtonText: 'Ok'
                  })
            }
        }

    })
}