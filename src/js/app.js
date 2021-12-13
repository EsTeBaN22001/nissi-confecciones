// Selector estilo JQuery

if(document.querySelector('.header')){

  // efecto de la barra de navegación al hacer scroll
  const header = document.querySelector('.header');
  window.addEventListener('scroll', function(){
    header.classList.toggle('down', window.scrollY > 0);
  })

  // Evento para hacer le menu de navegación responsive con un boton
  const menuButton = document.querySelector('.menu-icon');
  const navBar = document.querySelector('.navbar');
  
  menuButton.addEventListener('click', function(){

    navBar.classList.toggle('active');
    menuButton.classList.toggle('buttonActive');
    // if(header.className.match('down')){
    //   menuButton.style.color = '#000000';
    // }

  })

}