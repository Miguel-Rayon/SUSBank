function tranferir(){
     var clabe_rec = document.getElementById('clabe_rec').value;
     var cantidad = document.getElementById('cantidad').value;
     var concepto = document.getElementById('concepto').value;
     var datos = new FormData();
     datos.append("clabe_rec",clabe_rec)
     datos.append("cantidad",cantidad)
     datos.append("concepto",concepto)
     
    Swal.fire({
        title: 'Atención!',
        text: "Desea terminar la transferencia?, asegurese de que sus datos sean correctos.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#373737',
        confirmButtonText: 'Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../controlador/transferir.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: datos,
                success: function(resp) {
                    var respuesta = JSON.parse(resp);
                    if (respuesta.status == "1") {
                        Swal.fire({
                            title: 'Atención!',
                            text: "Se hizo la transferencia a la clabe: " +clabe_rec+ " En unos momentos se vera reflejado el movimiento",
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