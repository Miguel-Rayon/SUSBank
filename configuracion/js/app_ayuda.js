var messages_content = $('.messages-content');
var greeting_intro = 0;
var response;

$(window).load(function() {
    messages_content.mCustomScrollbar();
    setTimeout(function() {
        output_message();
    }, 100);
});

function updateScrollbar() {
    messages_content.mCustomScrollbar("update").mCustomScrollbar('scrollTo', 'bottom', {
        scrollInertia: 10,
        timeout: 0
    });
}

function insert_my_message() {
    msg = $('.message-input').val();
    if ($.trim(msg) == '') {
        return false;
    }
    $('<div class="message message-me">' + msg + '</div>').appendTo($('.mCSB_container')).addClass('new');
    updateScrollbar();
    setTimeout(function() {
        output_message();
    }, 1000 + (Math.random() * 20) * 100);
}

// On submit message
$('.message-submit').click(function() {
    insert_my_message();
});
$(window).on('keydown', function(e) {
    if (e.which == 13) {
        insert_my_message();
        return false;
    }
});

function output_message() {
    $('<div class="message loading new"><div class="avatar"><img src="data:image/jpeg;base64,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" /></div><span></span></div>').appendTo($('.mCSB_container'));
    updateScrollbar();

    response = null;
    message_react_value = null;
    message_react_value = $('.message-input').val();
    $('.message-input').val(null);

    if (greeting_intro == 0) {

        response = '<b>Hola mi nombre es SUS,  soy tu asistente virtual, proporcioname tu nombre para ayudarte</b>';
    }

    if (greeting_intro == 1) {

        response = '<b>Encantado de conocerte <br>Selecciona cual es tu problema <br> <b>0</b>: Robo, extravío, o cancelamiento de la tarjeta <br> <b>1</b>: ¿Como registrarme a SUSBank? <br> <b>2</b>: ¿Como iniciarsesión?<br> <b>3</b>: Aclaración de saldo</b>';
    }

    if (greeting_intro > 1) {

        if (message_react_value == "0" || message_react_value == "1" || message_react_value == "2" || message_react_value == "3") {

            if (message_react_value == "0") {

                response = `<b> Comunicate al siguiente numero lo antes posibile: 812408 </b>`;
            }

            if (message_react_value == "1") {

                response = ` <b>Los pasos para registrarse a SUSBank son: <br><br> -Presionar en "Acceso" en la barra de navegacion <br> -Dar click en el boton "Registrarse" <br> -Llenar los datos que se le solicitaran <br> -Una vez  llenados dar click en el boton "REGISTRESE"<br></b>  `;

            }

            if (message_react_value == "2") {

                response = ` <b>Los pasos para iniciar sesion son: <br><br> -Presionar en "Acceso" en la barra de navegacion <br> -Ingresar usario y contraseña <br> -Presionar el boton "INICIE SESION" <br> </b> `;
            }

            if (message_react_value == "3") {

                response = ` <b>Los pasos para consultar tus movimientos son: <br><br> -Inicia sesion <br> -Presione historial de movimientos<br><br>En caso de tener anomalias en su cuenta llamar a: 812408</b> </b>`;
            }

        } else {

            response = '<b>¡No entiendo eso! <br> Escribe el numero de tu problema <br>0: Robo, extravío, o cancelamiento de la tarjeta <br> 1: ¿Como registrarme a SUSBank? <br> 2: ¿Como iniciar sesión?<br> <b>3</b>: Aclaración de saldo </b>';
        }
    }


    if (response == null) {

        response = '<b>Encantado de conocerte <br>Selecciona cual es tu problema <br> 0: Robo, extravío, o cancelamiento de la tarjeta <br> <b>1</b>: ¿Como registrarme a SUSBank? <br> <b>2</b>: ¿Como iniciar sesión?<br> <b>3</b>: Aclaración de saldo</b>';

    }

    greeting_intro++;

    setTimeout(function() {
        $('.message.loading').remove();
        $('<div class="message new"><div class="avatar"><img src="data:image/jpeg;base64,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" /></div>' + response + '</div>').appendTo($('.mCSB_container')).addClass('new');
        updateScrollbar();
    }, 1000 + (Math.random() * 20) * 100);

}
/**
 * Animacion del scroll para que se vea chingon xd
 */
 window.onscroll = function(){
    scroll = document.documentElement.scrollTop;
    header = document.getElementById("header");

    if (scroll > 20){
        header.classList.add('nav_mod');
    }else if(scroll < 20){
        header.classList.remove('nav_mod');
    }
}
/**
 * Fin de la animacion del scroll
 */
/**
 * Mover la barra de navegacion
 */
document.getElementById("btn_menu").addEventListener("click", mostrar_menu);

menu = document.getElementById("header");
body = document.getElementById("container_all");
nav = document.getElementById("nav");

    function mostrar_menu(){
        
        menu.classList.toggle('move_content');
        nav.classList.toggle('move_nav');
    }


window.addEventListener("resize", function(){

    if(window.innerWidth > 760){
    menu.classList.remove('move_content');
    nav.classList.remove('move_nav');
    }

})
/**
 * Fin de mover la barra de navegacion 
 */
