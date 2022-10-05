
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