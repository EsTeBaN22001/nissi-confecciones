<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/build/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/build/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/build/admin/css/adminlte.min.css">
  
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="/build/admin/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="/build/admin/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Carlos Guerra Web</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['name'] . " " . $_SESSION['surname']; ?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                Administradores
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/list-admins" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>Ver todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/create-admin" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Crear administrador</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-box-open"></i>
              <p>
                Productos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/list-products" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>Ver todos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/create-product" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Crear producto</p>
                </a>
              </li>
            </ul>
          </li>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="far fa-image"></i>
              <p>
                Galería de imágenes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/list-photos" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p>Ver todas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/create-photo" class="nav-link">
                  <i class="fas fa-plus-circle"></i>
                  <p>Añadir imágenes</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <?php echo $contenido; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="/">CarlosGuerraWeb</a>.</strong>
    All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="/build/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/build/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<!-- <script src="/build/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
<!-- AdminLTE App -->
<script src="/build/admin/js/adminlte.min.js"></script>
<script src="/build/admin/js/demo.js"></script>

<?php 


if($_SERVER['PATH_INFO'] == '/admin/list-admins'): ?>

  <!-- DataTables  & Plugins -->
  <script src="/build/admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/build/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="/build/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="/build/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="/build/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="/build/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="/build/admin/plugins/jszip/jszip.min.js"></script>
  <script src="/build/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="/build/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="/build/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

<?php endif; ?>

<?php if($_SERVER['PATH_INFO'] == '/admin/list-admins'): ?>
  <!-- bs-custom-file-input -->
  <script src="/build/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      bsCustomFileInput.init();
    });
  </script>
<?php endif; ?>



</body>
</html>