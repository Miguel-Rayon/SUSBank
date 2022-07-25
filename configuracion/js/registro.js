function registro() {
    var nombre = document.getElementById('nombre').value;
    var correo = document.getElementById('correo').value;
    var curp = document.getElementById('curp').value;
    var cel = document.getElementById('cel').value;
    var pass = document.getElementById('pass').value;
    var datos = new FormData();
    datos.append("nombre", nombre)
    datos.append("correo",correo)
    datos.append("curp",curp)
    datos.append("cel",cel)
    datos.append("pass",pass)

    Swal.fire({
        title: 'Atención!',
        text: "Desea terminar su registro?, asegurese de que sus datos sean correctos.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#373737',
        confirmButtonText: 'Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../controlador/registro.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: datos,
                success: function(resp) {
                    var respuesta = JSON.parse(resp);
                    if (respuesta.status == "1") {
                        Swal.fire({
                            title: 'Atención!',
                            text:  nombre+ " su usuario ha sido añadido correctamente, favor de iniciar sesion para verificar datos.",
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#373737',
                            confirmButtonText: 'Continuar',
                        }).then((result) => {
                            window.location.replace(respuesta.url)
                        })
                    }else{
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'No colocar datos vacios',
                            confirmButtonColor: '#373737',
                            confirmButtonText: 'Ok'
                          })
                    }
                }
            })
        }
    })

}