/**
 * Animacion del scroll 
 */
window.onscroll = function(){
    scroll = document.documentElement.scrollTop;
    var posicion = window.pageYOffset || document.documentElement.scrollTop;

    var elemento1 = document.getElementById("icon");
    var elemento2 = document.getElementById("icon_dollar");

    elemento1.style.bottom = posicion * 0.1 + "px";
    elemento2.style.top = posicion * 0.1 + "px";

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
        body.classList.toggle('move_content');
        nav.classList.toggle('move_nav');
    }


window.addEventListener("resize", function(){

    if(window.innerWidth > 760){
    menu.classList.remove('move_content');
    body.classList.remove('move_content');
    nav.classList.remove('move_nav');
    }

})
/**
 * Fin de mover la barra de navegacion 
 */

/**
 * instacion service Worker
 */
window.addEventListener('load',() => {
    registerSW();
});

async function registerSW(){
    if('serviceWorker' in navigator){
        try {
            await navigator.serviceWorker.register('../../sw.js');
        } catch (e) {
            console.log(`SW registration failed`);
        }
    }
}
/**
 * FIN instacion service Worker
 */