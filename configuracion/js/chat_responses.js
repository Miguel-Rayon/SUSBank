
   
function getBotResponse(input) {
   
  

    // Simple responses
    if (input == "0") {
        return `Comunicate al siguiente numero lo antes posibile: 812408 `;
    } else if (input == "1") {
        return `Los pasos para registrarse a SUSBank son: <br><br> -Presionar en "Acceso" en la barra de navegacion <br> -Dar click en el boton "Registrarse" <br> -Llenar los datos que se le solicitaran <br> -Una vez  llenados dar click en el boton "REGISTRESE"<br></b>  `; 
    }else if (input == "2") {
        return  `Los pasos para iniciar sesion son: <br><br> -Presionar en "Acceso" en la barra de navegacion <br> -Ingresar usario y contraseña <br> -Presionar el boton "INICIE SESION" <br> `;
    }else if(input=="3") {
      return ` Los pasos para consultar tus movimientos son: <br><br> -Inicia sesion <br> -Presione historial de movimientos<br><br>En caso de tener anomalias en su cuenta llamar a: 812408</b> `;
    } 
    else {
        return '¡No entiendo eso! <br> Escribe el numero de tu problema: <br><br> <b>0</b>: Robo, extravío, o cancelamiento de la tarjeta <br> <b>1</b>: ¿Como registrarme a SUSBank? <br> <b>2</b>: ¿Como iniciarsesión?<br> <b>3</b>: Aclaración de saldo'
    }
}




