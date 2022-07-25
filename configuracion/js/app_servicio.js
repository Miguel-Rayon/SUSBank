function servicio(){
    var servicios = document.getElementById('servicios').value;
    var referencia = document.getElementById('referencia').value;
    var cantidad_servicio = document.getElementById('cantidad_servicio').value;

    var datos = new FormData();
    datos.append("servicios",servicios)
    datos.append("referencia",referencia)
    datos.append("cantidad_servicio",cantidad_servicio)
    Swal.fire({
        title: 'Atención!',
        text: "Desea terminar el pago del servicio?, asegurese de que sus datos sean correctos.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#373737',
        confirmButtonText: 'Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../controlador/servicio.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: datos,
                success: function(resp) {
                    var respuesta = JSON.parse(resp);
                    if (respuesta.status == "1") {
                        Swal.fire({
                            title: 'Atención!',
                            text: "Se hizo el pago del servicio de: " +servicios+ " En unos momentos se vera reflejado el movimiento",
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
                            text: 'No se pueden enviar datos vacios!',
                            confirmButtonColor: '#373737',
                            confirmButtonText: 'Ok'
                          })
                    }
                }
            })
        }
    })
}