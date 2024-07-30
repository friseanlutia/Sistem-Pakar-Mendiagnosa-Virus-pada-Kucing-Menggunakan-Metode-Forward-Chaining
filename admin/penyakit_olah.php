<?php
// Memeriksa apakah parameter 'id' telah diberikan dalam URL
if (isset($_GET['id'])){
  $kode=$_GET['id'];
  extract(ArrayData($mysqli,"tb_penyakit","id_penyakit='$kode'"));

}else{
  $id_penyakit=KodeOtomatis($mysqli,"tb_penyakit","id_penyakit","P","1","2");
  $nama_penyakit="";
  $definisi="";
  $pengobatan="";
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
            <h3 class="card-title">Form Data Penyakit</h3>
          </div>

          <!-- Form Start -->
          <form role="form" id="quickForm" action="penyakit_proses.php" method="POST">
            <div class="card-body">
              <div class="form-group row">
                <label for="nama" class="col-sm-3">Kode Penyakit</label>
                <input type="text" name="id_penyakit" class="form-control col-sm-7" value="<?=$id_penyakit?>" placeholder="Inputkan Kode Penyakit" readonly="">
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-3">Nama Penyakit</label>
                <input type="text" name="nama_penyakit" class="form-control col-sm-7" value="<?=$nama_penyakit?>" placeholder="Inputkan Penyakit" required="">
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-3">Definisi</label>
                <textarea class="form-control col-sm-7" rows="3" name="definisi" placeholder="Inputkan Definisi" required=""><?=$definisi?></textarea>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-3">Pengobatan</label>
                <textarea class="form-control col-sm-7" rows="3" name="pengobatan" placeholder="Inputkan Pengobatan" required=""><?=$pengobatan?></textarea>
              </div>
            </div>
            <div class="card-footer">
              <!-- Tombol Simpan -->
              <input type="submit" name="<?=isset($_GET['id'])?'ubah':'tambah';?>" class="btn" style="background-color: #a184a8; border-radius: 6px; color: white;" value="Simpan">
              <!-- Tombol Batal -->
              <a href="?hal=penyakit" style="border: 2px solid #a184a8" class="btn btn-default">Batal</a>
            </div>
          </form>
          <!-- /.Form Start -->
        </div>
      </div>
    </div>
  </div>
</section>
