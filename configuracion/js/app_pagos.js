const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

function referencia(){
  Swal.fire({
    title: 'Que es la referencia?',
    text: 'Es el codigo de barras de tu recibo de pago, en este caso colocas los numeros de este.',
    imageUrl: 'https://www.consumoteca.com/wp-content/uploads/codigo-de-barras.png',
    imageWidth: 400,
    imageHeight: 200,
    confirmButtonColor: '#343a40',
    confirmButtonText: 'OK'
  })
}