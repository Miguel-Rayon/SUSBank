function registro() {
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
                            window.location.replace("login.php")
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