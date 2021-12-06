<div class="card-body">
  <div class="form-group">
    <label for="title">Título:</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Escribe el título" value="<?= s($image->title); ?>">
  </div>
  <div class="form-group">
    <label for="image">Imagen:</label>
    <input type="file" class="form-control" id="image" accept="image/*" name="image">
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