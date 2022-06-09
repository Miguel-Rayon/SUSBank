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