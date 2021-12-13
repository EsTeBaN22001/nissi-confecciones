<section class="hero">
  <div class="hero-content container">
    <h3 class="welcome">Productos</h3>
    <h2><a href="/" class="logo"><span>Carlos-</span>Guerra</a></h2>
    <p>Conoce los trabajos que realizamos.</p>
  </div>
</section>

<div class="cards section container">
  <h2 class="titleSeparator">Productos</h2>

  <div class="categories">
    <h3 style="font-size: 2.7rem;margin-bottom: .5rem;" >Categoría de productos</h3>
    <div class="categories-container container">
      <a href="#" category="all" class="category button-darkGray-inline-widthAuto">Todos</a>
      <?php foreach($categories as $category): ?>
        <a href="#" category="<?= $category->category; ?>" class="category button-darkGray-inline-widthAuto"><?= $category->category; ?></a>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="cards-container">
    <?php include(__DIR__ . "./../templates/products.php"); ?>
  </div>

</div>