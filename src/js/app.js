// Selector estilo JQuery
const $ = $ => {return document.querySelector($)}

if($('.header')){

  // efecto de la barra de navegación al hacer scroll
  const header = $('.header');
  window.addEventListener('scroll', function(){
    header.classList.toggle('down', window.scrollY > 0);
  })

  // Evento para hacer le menu de navegación responsive con un boton
  const menuButton = $('.menu-icon');
  const navBar = $('.navbar');
  
  menuButton.addEventListener('click', function(){

    navBar.classList.toggle('active');
    menuButton.classList.toggle('buttonActive');
    // if(header.className.match('down')){
    //   menuButton.style.color = '#000000';
    // }

  })

}