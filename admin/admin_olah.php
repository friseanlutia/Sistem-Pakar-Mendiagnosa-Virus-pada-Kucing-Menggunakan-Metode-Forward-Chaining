<?php
if (isset($_GET['id'])){
  $kode=$_GET['id'];
  extract(ArrayData($mysqli,"tb_admin","id_admin='$kode'"));
}
?>

<!-- Main content -->
<section class="content" style="margin-top: 10px;">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-purple">
          <div class="card-header" style="background-color: #a184a8;">
            <h3 class="card-title">Form Data Admin</h3>
          </div>

          <!-- form start -->
          <form role="form" id="quickForm" action="admin_proses.php" method="post">
            <div class="card-body">
              <input type="hidden" name="kode" value="<?=@$id_admin?>">

              <div class="form-group row">
                <label for="nama"  class="form-label col-sm-3">Nama Admin</label>
                <input type="text" name="nm_admin" class="form-control col-sm-8" value="<?=@$nm_admin?>" placeholder="Inputkan Nama Admin" required="">
              </div>

              <div class="form-group row">
                <label for="nama" class="form-label col-sm-3">Username</label>
                <input type="text" name="username" class="form-control col-sm-8" value="<?=@$username?>" placeholder="Inputkan Username" required="">
              </div>

              <div class="form-group row">
                <label for="nama" class="form-label col-sm-3">Password</label>
                <input type="text" name="password" class="form-control col-sm-8" value="<?=@$password?>" placeholder="Inputkan Password" required="">
              </div>
            </div>

            <!-- /.card-body -->
            <div class="card-footer">
              <input type="submit" name="<?=isset($_GET['id'])?'ubah':'tambah';?>" 
              class="btn" style="background-color: #a184a8; border-radius: 6px; color: white;" value="Simpan">
              <a href="?hal=admin" style="border: 2px solid #a184a8" class="btn btn-default">
                Batal
              </a>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (left) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->