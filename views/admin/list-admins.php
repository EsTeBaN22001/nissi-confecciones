  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lista de los administradores</h1>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lista de los administradores del sitio web</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nombre y apellido</th>
                    <th>email</th>
                    <th>Nivel</th>
                    <th>acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($admins as $admin): ?>
                      <tr>
                        <td><?= $admin->name . " " . $admin->surname; ?></td>
                        <td><?= $admin->email; ?></td>
                        <td><?= $admin->level; ?></td>
                        <td>
                          <a href="/admin/edit-admin?id=<?= $admin->id; ?>" class="btn bg-blue">Editar</a>
                          <form method="POST" class="w-100" action="/admin/delete-admin">
                            <input type="hidden" name="id" value="<?php echo $admin->id; ?>">
                            <input type="submit" class="btn bg-red" value="Eliminar">
                          </form>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nombre y apellido</th>
                    <th>email</th>
                    <th>Nivel</th>
                    <th>acciones</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
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

