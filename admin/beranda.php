<?php
if (isset($_SESSION['dojang'])){
  $kode=$_SESSION['dojang'];
  extract(ArrayData($mysqli,"tb_dojang","iddojang='$kode'"));
}

?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">

    <div class="col-lg-3 col-6">
      <div class="small-box bg-info">
        <div class="inner">
          <h3><?=caridata($mysqli,"SELECT count(*) FROM tb_admin")?><sup style="font-size: 20px"></sup></h3>
          <p>Data Admin</p>
        </div>
        <div class="icon">
          <i class="fa fa-address-card"></i>
        </div>
        <a href="?hal=admin" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <div class="small-box bg-blue">
        <div class="inner">
          <h3><?=caridata($mysqli,"SELECT count(*) FROM tb_penyakit")?><sup style="font-size: 20px"></sup></h3>
          <p>Data Penyakit</p>
        </div>
        <div class="icon">
          <i class="fa fa-stethoscope"></i>
        </div>
        <a href="?hal=penyakit" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <div class="small-box bg-success">
        <div class="inner">
          <h3><?=caridata($mysqli,"SELECT count(*) FROM tb_gejala")?><sup style="font-size: 20px"></sup></h3>
          <p>Data Gejala</p>
        </div>
        <div class="icon">
          <i class="fa fa-heartbeat"></i>
        </div>
        <a href="?hal=gejala" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <?php $tanggal=date('Y-m-d');?>
          <h3><?=caridata($mysqli,"select count(*) from tb_pasien")?><sup style="font-size: 20px"></sup></h3>

          <p>Data Pasien</p>
        </div>
        <div class="icon">
          <i class="fa fa-id-badge"></i>
        </div>
        <a href="?hal=pasien" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->

    <!-- ./col -->
    <!-- ./col -->
  </div>


</section>