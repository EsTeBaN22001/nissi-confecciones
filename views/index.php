<section class="hero hero-home">
  <div class="hero-content container">
    <h3 class="welcome">Bienvenido@ a</h3>
    <h2><a href="/" class="logo"><span>Nissi</span> Confecciones</a></h2>
    <p>En esta página te ofrecemos los mejores productos <br> grabados de madera o metal. Ofrecemos productos de alta calidad.</p>
  </div>
</section>

<section class="about section">
  <div class="about-container container">
    <div class="about-info">
      <h2 class="titleSeparator">Acerca de nosotros</h2>
      <p>Buscamos hacer productos de mayor cálidad al mejor precio posible. Contamos con grabados en distintos materiales (madera, acero inoxidable, etc...). las dimensiones máximas por pieza que podemos realizar son de 35x45x4.
      los precios del producto hecho a pedido puede variar dependiendo de las dimenciones, material y complejidad del mismo.</p>
      <h3>Nuestros objetivos</h3>
      <ul class="about-list">
        <li class="list-item">Ofrecemos trabajos de alta calidad</li>
        <li class="list-item">Trabajos en el menor tiempo posible</li>
        <li class="list-item">Hacer realidad las ideas de los clientes</li>
        <li class="list-item">Lograr precios accesibles para los clientes</li>
      </ul>

    </div>
    <div class="about-image">
      <img src="build/img/about.webp" alt="Imagen acerca de nosotros">
    </div>
  </div>
</section>

<section class="typeJobs section">
  <div class="typeJobs-container container">
    <h2 class="titleSeparator">Tipos de trabajo</h2>
    <p>Estos son los distintos tipos de trabajos que se pueden llegar ofrecer. Ante cualquier duda, consultar.</p>
    <div class="jobs-container section">
      <div class="job">
        <div class="img-container">
          <img src="build/img/metalJob.webp" alt="Imagen de trabajos en metal">
          <h3>Grabados</h3>
        </div>
      </div>
      <div class="job">
        <div class="img-container">
          <img src="/build/img/dinosaurio desarmado.webp" alt="Grabados">
          <h3>Cortes</h3>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="cards section container">
  <h2 class="titleSeparator">Últimos productos</h2>

  <div class="cards-container">
    <?php include_once('templates/products.php'); ?>
    <a href="/products" class="button-darkGray-inline-widthAuto" style="width: 30rem;">Ver todas las publicaciones</a>
  </div>

</div>