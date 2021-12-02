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
                          <a href="edit-admin.php?id=<?= $admin->id; ?>" class="btn bg-blue"><i class="fas fa-edit"></i></a>
                          <a href="#" data-id="<?= $admin->id; ?>" data-type="admin" class="btn  bg-red"><i class="fa fa-trash"></i></a>
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

