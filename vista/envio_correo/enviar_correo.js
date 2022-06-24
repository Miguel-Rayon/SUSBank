<<<<<<< HEAD
function enviar_correo() {
    var correo = document.getElementById('correo').value;
    var nombre = document.getElementById('nombre').value;
    var mensaje = document.getElementById('mensaje').value;
    $.ajax({
        url: "enviar_correo.php",
        type: "POST",
        data: "correo=" + correo + "&nombre=" + nombre + "&mensaje=" + mensaje,
        success: function(resp) {
            var respuesta = JSON.parse(resp);
            if (respuesta.status == "1") {
                Swal.fire({
                    icon: 'success',
                    title: 'Exito!',
                    text: 'El correo se ha enviado exitosamente!',
                    showCancelButton: false,
                    confirmButtonColor: '#343a40',
                    confirmButtonText: 'Continuar'
                    
                  }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = window.location.href;
                    }
                })
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Correo no enviado!'
                  })
            }

        }

    });
=======
function enviar_correo() {
    var correo = document.getElementById('correo').value;
    var nombre = document.getElementById('nombre').value;
    var mensaje = document.getElementById('mensaje').value;
    $.ajax({
        url: "enviar_correo.php",
        type: "POST",
        data: "correo=" + correo + "&nombre=" + nombre + "&mensaje=" + mensaje,
        success: function(resp) {
            var respuesta = JSON.parse(resp);
            if (respuesta.status == "1") {
                Swal.fire({
                    icon: 'success',
                    title: 'Exito!',
                    text: 'El correo se ha enviado exitosamente!',
                    showCancelButton: false,
                    confirmButtonColor: '#343a40',
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
                    text: 'Correo no enviado!'
                  })
            }

        }

    });
>>>>>>> 808b9d5444bc9176c6ff9f99d86211fe06e31d21
}