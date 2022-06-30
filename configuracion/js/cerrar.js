function cerrar() {

    Swal.fire({
        title: 'Atención!',
        text: 'Desea Cerrar La Sesión Actual?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#373737',
        confirmButtonText: 'Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../controlador/cerrar_sesion.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: "ok=" + "ok",
                success: function(resp) {
                    var respuesta = JSON.parse(resp);
                    if (respuesta.status == "1") {
                        window.location.replace("index.php")
                    }
                }
            })
        }
    })

}