<section class="hero">
  <div class="hero-content container">
    <h3 class="welcome">Producto: <?= $product->title; ?></h3>
    <h2><a href="/" class="logo"><span>Nissi</span> Confecciones</a></h2>
    <p>Contactate con nosotros ante cualquier duda.</p>
  </div>
</section>

<section class="section">
  <div class="product-container container">
    <div class="product-description-container">
      <a style="margin-bottom: 1rem;" href="/products"> <i class="fas fa-chevron-left"></i> Volver</a>
      <h1 class="titleSeparator"><?= $product->title; ?></h1>
      <h3>Descripción del producto:</h3>
      <p class="product-description"><?= $product->description; ?></p>
      <h3>Precio del producto:</h3>
      <p class="product-price">$<?= $product->price; ?></p>
    </div>
    <div class="product-image">
      <img src="/productsImages/<?= $product->image; ?>" alt="<?= $product->title; ?>">
    </div>
  </div>
</section>