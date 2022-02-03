if(document.querySelector('.glide')){

  const config = {
    type: 'carousel',
    startAt: 0,
    perView: 1,
    gap: 0,
    autoplay: 5000,
    animationDuration: 2000,
    hoverpause: false
  }
  
  new Glide('.glide', config).mount()

}