<?php foreach($products as $product): ?>
  <div class="card">
    <div class="card__image-holder">
      <img class="card__image" src="/productsImages/<?= $product->image; ?>" alt="wave" />
    </div>
    <div class="card-title">
      <h2 class="titleSeparator">
          <?= $product->title; ?>
      </h2>
    </div>
    <div class="card-flap flap1">
      <div class="card-description">
        <?= $product->description; ?>
      </div>
    </div>
    <div class="card-flap flap2">
      <div class="card-actions">
        <a href="/view-product?id=<?= $product->id; ?>" class="btn">Ver producto</a>
      </div>
    </div>
  </div>
<?php endforeach; ?>