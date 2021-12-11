<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lista de los productos</h1>
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
                <h3 class="card-title">Lista de los productos del sitio web</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover display nowrap">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Creado por</th>
                    <th>acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($products as $product): ?>
                      <tr>
                        <td><?= $product->id; ?></td>
                        <td><?= $product->title; ?></td>
                        <td><?= $product->description; ?></td>
                        <td><?= $product->price; ?></td>
                        <td><img src="/productsImages/<?= $product->image; ?>" alt="Imagen de producto" class="productImage"></td>
                        <td><?= $product->createdBy; ?></td>
                        <td>
                          <a href="/admin/edit-product?id=<?= $product->id; ?>" class="btn bg-blue">Editar</a>
                          <form method="POST" class="w-100" action="/admin/delete-product">
                            <input type="hidden" name="id" value="<?php echo $product->id; ?>">
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
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Precio</th>
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

