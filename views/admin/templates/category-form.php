<div class="card-body">
  <div class="form-group">
    <label for="category">Nombre de la categoría:</label>
    <input type="text" class="form-control" id="category" name="category" placeholder="Escribe el nombre de la categoría" value="<?= s($category->category); ?>">
  </div>
</div>

<div class="card-footer">
  <input type="hidden" name="id" value="<?= $category->id; ?>">
  <button type="submit" class="btn btn-primary">Guardar</button>
</div>