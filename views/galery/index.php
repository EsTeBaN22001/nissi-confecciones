<section class="hero">
  <div class="hero-content container">
    <h3 class="welcome">Galeria de imagenes</h3>
    <h2><a href="/" class="logo"><span>Carlos-</span>Guerra</a></h2>
    <p>Conoce algunas imágenes de nuestro trabajo.</p>
  </div>
</section>

<section class="section">
  <div class="galery-container container">
    <h1 class="titleSeparator">Galería de imágenes</h1>

    <div class="images-container">
      <?php $i = 1; ?>
      <?php foreach($images as $image): ?>
        <?php $i == 3 || $i == 5 || $i = 7 || $i == 9 ? $span = 'spanY2' : $span = ''; ?>
        <a class="<?= $span; ?>" href="/galeryImages/<?= $image->image; ?>" data-lightbox="roadtrip" data-title="<?= $image->title; ?>">
          <img src="/galeryImages/<?= $image->image; ?>" alt="" srcset="">
        </a>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>