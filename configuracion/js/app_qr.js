const contenedorQR = document.getElementById('contenedorQR');
const formulario = document.getElementById('formulario');

const QR = new QRCode(contenedorQR);

formulario.addEventListener('submit', (e) => {
	
	e.preventDefault();
	QR.makeCode(formulario.link.value);
});
function qr(){
    Swal.fire({
      title: 'Tu codigo QR',
      html:`<div style="display: flex; flex-wrap:wrap; align-items:center;"><div id="contenedorQR" class="contenedorQR" style="display: flex; flex-Direction: column; align-items:center; width:100%"><h6>Listo! puedes ir a uno de nuestros cajeros y empezar a retirar dinero :)</h6><br></div></div>`,
      confirmButtonColor: '#343a40',
      confirmButtonText: 'Continuar',
      width:'90%'
    })
  }

