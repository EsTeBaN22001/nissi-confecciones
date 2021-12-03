<div class="card-body">
  <div class="form-group">
    <label for="name">Nombre:</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Escribe tu nombre" value="<?= s($admin->name); ?>">
  </div>
  <div class="form-group">
    <label for="surname">Apellido:</label>
    <input type="text" class="form-control" id="surname" name="surname" placeholder="Escribe tu apellido" value="<?= s($admin->surname); ?>">
  </div>
  <div class="form-group">
    <label for="email">Correo electrónico:</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Escribe tu correo electrónico" value="<?= s($admin->email); ?>">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Escribe tu contraseña">
  </div>
  <div class="form-group">
    <label for="level">Nivel de administrador:</label>
    <select name="level" id="level" class="form-control">
      <option selected disabled>--Seleccione--</option>
      <option value="1">Nivel 1</option>
      <option value="2">Nivel 2</option>
    </select>
  </div>
</div>

<div class="card-footer">
  <input type="hidden" name="id" value="<?= $admin->id; ?>">
  <button type="submit" class="btn btn-primary">Guardar</button>
</div>