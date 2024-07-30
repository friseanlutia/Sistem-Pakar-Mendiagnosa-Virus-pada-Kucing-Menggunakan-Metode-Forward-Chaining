<?php
// Memeriksa apakah parameter 'id' telah diberikan dalam URL
if (isset($_GET['id'])){
  $kode=$_GET['id'];
  extract(ArrayData($mysqli,"tb_gejala","id_gejala='$kode'"));

}else{
  $id_gejala=KodeOtomatis($mysqli,"tb_gejala","id_gejala","G","1","2");
  $nm_gejala="";
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
            <h3 class="card-title">Form Data gejala</h3>
          </div>
    
          <!-- Form Start -->
          <form role="form" id="quickForm" action="gejala_proses.php" method="post">
            <div class="card-body">
              <div class="form-group row">
                <label for="nama" class="col-sm-3">Kode Gejala</label>
                <input type="text" name="id_gejala" class="form-control col-sm-7" value="<?=$id_gejala?>" placeholder="Inputkan Kode Gejala" readonly="">
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-3">Nama Gejala</label>
                <input type="text" name="nm_gejala" class="form-control col-sm-7" value="<?=$nm_gejala?>" placeholder="Inputkan gejala" required="">
              </div>
            </div>
            <div class="card-footer">
              <!-- Tombol Simpan -->
              <input type="submit" name="<?=isset($_GET['id'])?'ubah':'tambah';?>" class="btn" style="background-color: #a184a8; border-radius: 6px; color: white;" value="Simpan">
              <!-- Tombol Batal -->
              <a href="?hal=gejala" style="border: 2px solid #a184a8" class="btn btn-default">Batal</a>
            </div>
          </form>
          <!-- /.Form Start -->
        </div>
      </div>
    </div>
  </div>
</section>