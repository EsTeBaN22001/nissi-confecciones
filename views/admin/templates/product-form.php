<div class="card-body">
  <div class="form-group">
    <label for="title">Título:</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Escribe el título" value="<?= s($product->title); ?>">
  </div>
  <div class="form-group">
    <label for="image">Imagen:</label>
    <input type="file" class="form-control" id="image" accept="image/*" name="image">
  </div>
  <div class="form-group">
    <label for="description">Descripción:</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Escribe una descripción" value="<?= s($product->description); ?>">
  </div>
  <div class="form-group">
    <label for="category">Categoría del producto:</label>
    <select name="category" id="category" class="form-control">
      <option selected disabled>--Seleccione--</option>
      <?php foreach($categories as $category): ?>
        <option value="<?= $category->id; ?>"><?= $category->category; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <label for="price">Precio:</label>
    <input type="number" min="0" class="form-control" id="price" name="price" placeholder="Escribe el precio del producto" value="<?= s($product->price); ?>">
  </div>
  <div class="form-group">
    <label for="createdBy">Creado por el administrador:</label>
    <select name="createdBy" id="createdBy" class="form-control">
      <option selected disabled>--Seleccione--</option>
      <?php foreach($admins as $admin): ?>
        <option value="<?= $admin->id; ?>"><?= $admin->name . " " . $admin->surname; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
</div>

<div class="card-footer">
  <input type="hidden" name="id" value="<?= $product->id ?? null; ?>">
  <button type="submit" class="btn btn-primary">Guardar</button>
</div>