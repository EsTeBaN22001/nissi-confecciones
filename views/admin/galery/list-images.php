<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lista de las imágenes</h1>
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
                <h3 class="card-title">Lista de las imágenes del sitio web</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Imagen</th>
                    <th>Creado por</th>
                    <th>acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($images as $image): ?>
                      <tr>
                        <td><?= $image->id; ?></td>
                        <td><?= $image->title; ?></td>
                        <td><img src="/galeryImages/<?= $image->image; ?>" alt="Imagen de la galeria" class="productImage"></td>
                        <td><?= $image->createdBy; ?></td>
                        <td>
                          <a href="/admin/edit-image?id=<?= $image->id; ?>" class="btn bg-blue">Editar</a>
                          <form method="POST" class="w-100" action="/admin/delete-product">
                            <input type="hidden" name="id" value="<?php echo $image->id; ?>">
                            <input type="submit" class="btn bg-red" value="Eliminar">
                          </form>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Imagen</th>
                    <th>Creado por</th>
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

