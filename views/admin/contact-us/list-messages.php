  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lista de los mensajes recibidos</h1>
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
                <h3 class="card-title">Lista de los mensajes del formulario de contacto</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Asunto</th>
                    <th>Mensaje</th>
                    <th>Atendido?</th>
                    <th>Eliminar</th>
                  </tr>
                  </thead>
                  <tbody class="listMessages">
                    <?php foreach($messages as $msg): ?>
                      <tr id="<?= $msg->id; ?>">
                        <td><?= $msg->id; ?></td>
                        <td><?= $msg->name; ?></td>
                        <td><?= $msg->email; ?></td>
                        <td><?= $msg->affair; ?></td>
                        <td><?= $msg->msg; ?></td>
                        <td style="text-align:center;"><i class="fas fa-check-circle <?= $msg->status === '1' ? 'complet' : ''; ?>" style="font-size: 1.5rem;"></i></td>
                        <td>
                          <form method="POST" class="w-100" action="/admin/delete-message">
                            <input type="hidden" name="id" value="<?php echo $msg->id; ?>">
                            <input type="submit" class="btn bg-red" value="Eliminar">
                          </form>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Asunto</th>
                    <th>Mensaje</th>
                    <th>Atendido?</th>
                    <th>Eliminar</th>
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

