// Código para listar los productos por categorías en la página de products
if(document.querySelector('.categories')){

  // Agregando la clase de active a la primer categoría
  $('.categories-container .category[category="all"]').addClass('category-active');

  // Fitrando productos
  $('.category').click(function(){

    // Seleccionando el atributo de category
    const catProduct = $(this).attr('category');
    
    // Removiendo la clase active a todas las categorías y luego se le agrega al elemento seleccionado
    $('.category').removeClass('category-active');
    $(this).addClass('category-active');

    // Ocultar todos los productos
    $('.card').css('opacity', '0');

    function hideProduct(){
      $('.card').hide();
    }setTimeout(hideProduct, 300);

    // Mostrando los productos
    function showProduct(){
      $(`.card[category="${catProduct}"]`).show();
      $(`.card[category="${catProduct}"]`).css('opacity', '1');
    }setTimeout(showProduct, 300);

    // Return false para evitar saltos en la página
    return false;
  })

  // Muestra todos los productos al darle en all de las categorías
  $('.category[category="all"]').click(function () { 
    
    function showAll(){
      $('.card').show();
      $('.card').css('opacity', '1');
      if($('.card').length == 0){
        document.write('No hay productos');
      }
    }setTimeout(showAll, 300);
    
  });

}