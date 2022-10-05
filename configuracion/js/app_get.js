function get(){
    Swal.fire({
        icon: 'question',
        title: 'Bienvenido',
        text: 'Desea ir al login?',
        showCancelButton: false,
        confirmButtonColor: '#373737',
        confirmButtonText: 'Continuar'
        
      }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace("login.php")
        }
    })
}