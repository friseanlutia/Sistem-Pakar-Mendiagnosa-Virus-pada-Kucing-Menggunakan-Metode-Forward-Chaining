<?php

//Memanggil File 
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/fungsi.php';

//Inisialisasi Session
session_start();
if(isset($_SESSION['admin'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Sistem Pakar Virus Kucing</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="../assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

  <!-- Sweet Alert-->
  <link rel="stylesheet" href="../assets/plugins//sweetalert2/sweetalert2.min.css">
  
  <!-- Sweet Alert-->
  <script src="../assets/plugins/sweetalert2/sweetalert2.min.js"></script>

  <!-- jQuery -->
  <script src="../assets/plugins/jquery/jquery.min.js"></script>

  <!-- summernote -->
  <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.css">

  <!-- jquery-validation -->
  <script src="../assets/plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="../assets/plugins/jquery-validation/additional-methods.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand elevation-2 navbar-light">

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i>
            <span class="badge badge-warning navbar-badge"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="logout.php" class="dropdown-item">
              <i class="fas fa-lock mr-2"></i> Log Out
              <span class="float-right text-muted text-sm"></span>
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.Navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand -->
      <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">ChyCat</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel-->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../gambar/g2.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <?php include('_menu.php'); ?>
         </ul>
       </nav>
      </div>
    </aside>

    <!--  -->
    <div class="content-wrapper">

    <?php
    //Memuat halaman yang diminta
    $hal = @$_GET['hal'];
    $modul = "";
    $default = $modul."beranda.php";
    if(!$hal){
      require_once "$default";
    }else{
      switch($hal){
        case $hal:
        if(is_file($modul.$hal.".php"))
        {
          require_once $modul.$hal.".php";
        }
        else
        {
          require_once "$default";
        }
        break;
        default:
        require_once "$default";
      }
    }
    ?>

  </div>

  <!-- Footer -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
      Sistem Pakar - Kucing
    </div>
    <strong>Copyright &copy; 2024 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>

<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>

<!-- DataTables -->
<script src="../assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- Select2 -->
<script src="../assets/plugins/select2/js/select2.full.min.js"></script>

<!-- bootstrap color picker -->
<script src="../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

<script src="../assets/plugins/summernote/summernote-bs4.min.js"></script>

</body>
</html>

<script>
  $(function () {
    //Untuk Data Table
    $('#example2').DataTable();

    //Untuk Select2
    $('.select2').select2({
      theme: 'bootstrap4'
    });

    $('.textarea').summernote();

    //color picker with addon
    $('.my-colorpicker2').colorpicker();

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

  });


  //Konfirmasi Delete
  document.querySelector('#form1').addEventListener('submit', function(e) {
    var form = this;

  e.preventDefault(); // <--- prevent form from submitting
  Swal.fire({
    title: "Peringatan",
    text: "Apakah anda yakin akan menghapus data ?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Ya, hapus!",
    cancelButtonText: "Tidak, batalkan!",
    closeOnConfirm: false,
    closeOnCancel: false

  }).then((result) => {
    if (result.value) {
      form.submit();
    }
  })
});
</script>

<!--Menampilkan pesan informasi jika ada cookie bernama 'info' yang telah diset-->
<?php if(isset($_COOKIE['info'])){ ?>
  <script type="text/javascript">
    let content = "<?php echo $_COOKIE['info']; ?>";
    console.log(content);
    Swal.fire(
      'Berhasil!',
      content,
      'info'
      )
    </script>
  <?php } ?>

  <?php 
}else{
  echo "<script>window.location='../index.php';</script>";
}
?>