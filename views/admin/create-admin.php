  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Crear un nuevo administrador</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?php include_once __DIR__ . './../templates/alerts.php'; ?>
          <form class="form" action="/admin/create-admin" method="POST">
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
              <button type="submit" class="btn btn-primary">Crear</button>
            </div>
          </form>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

