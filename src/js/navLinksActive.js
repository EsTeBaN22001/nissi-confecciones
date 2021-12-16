// Este código marca el enlace de la navegación como active si esta en dicha página
// Ej: Se encuentra en la página nosotros, entonces, marca el enlace de nosotros como active

if(document.querySelector('.navbar')){

  const body = document.querySelector('body');

  // Página del index
  if(body.classList.contains('index')){
    const linkIndexFooter = document.querySelector('.navFooter a[href="/"]');
    linkIndexFooter.classList.add('activeLink');
  }

  // Página de productos
  if(body.classList.contains('products')){
    const linkProducts = document.querySelector('.navbar a[href="/products"]');
    const linkProductsFooter = document.querySelector('.navFooter a[href="/products"]');
    linkProducts.classList.add('activeLink');
    linkProductsFooter.classList.add('activeLink');
  }
  
  // Página de nosotros
  if(body.classList.contains('about-us')){
    const linkAbout = document.querySelector('.navbar a[href="/about-us"]');
    const linkAboutFooter = document.querySelector('.navFooter a[href="/about-us"]');
    linkAbout.classList.add('activeLink');
    linkAboutFooter.classList.add('activeLink');
  }
  
  // Página de galería
  if(body.classList.contains('galery')){
    const linkGalery = document.querySelector('.navbar a[href="/galery"]');
    const linkGaleryFooter = document.querySelector('.navFooter a[href="/galery"]');
    linkGalery.classList.add('activeLink');
    linkGaleryFooter.classList.add('activeLink');
  }
  
  // Página de galería
  if(body.classList.contains('contact-us')){
    const linkContact = document.querySelector('.navbar a[href="/contact-us"]');
    const linkContactFooter = document.querySelector('.navFooter a[href="/contact-us"]');
    linkContact.classList.add('activeLink');
    linkContactFooter.classList.add('activeLink');
  }

}