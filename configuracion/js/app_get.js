function get(){
    Swal.fire({
        icon: 'question',
        title: 'Datos Correctos',
        text: 'Desea ir al login?',
        showCancelButton: false,
        confirmButtonColor: '#373737',
        confirmButtonText: 'Continuar'
        
      }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace("login")
        }
    })
}