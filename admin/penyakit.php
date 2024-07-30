<!-- Content Header -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">  <!-- Bagian judul halaman -->
        <h1 class="m-0 text-dark">Data Penyakit</h1>
      </div>
      <div class="col-sm-5"></div>  <!-- Bagian tombol tambah -->
      <div class="col-sm-1">
        <a href="?hal=penyakit_olah" style=" float: right; background-color: #a184a8; color: white" class="btn btn-block btn-sm">Tambah</a>
      </div>
    </div>
  </div>
</div>
<!-- /.Content-Header -->

<!-- Bagian utama konten -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-purple">
        <!-- Card-Header -->
        <div class="card-header" style="background-color: #a184a8;">
          <h3 class="card-title primary">Tabel Data Penyakit</h3>
          <div class="card-tools"></div>
        </div>
        <!-- /.Card-Header -->

        <!-- Card-Body -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Penyakit</th>
                <th>Nama Penyakit</th>
                <th>Definisi</th>
                <th>Pengobatan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              // Melakukan koneksi ke database 
              $query="SELECT * from tb_penyakit";
              $result=$mysqli->query($query);
              $num_result=$result->num_rows;
              if ($num_result > 0 ) { 
                $no=0;
                while ($data=mysqli_fetch_assoc($result)) {
                  extract($data);
                  ?>
                  <tr>
                    <td width="5%"><?php echo $no+=1; ?></td>
                    <td><?php echo $id_penyakit; ?></td>
                    <td><?php echo $nama_penyakit; ?></td>
                    <td><?php echo $definisi; ?></td>
                    <td><?php echo $pengobatan; ?></td>
                    <td width="20%">
                      <!-- Tombol Edit -->
                      <a href="?hal=penyakit_olah&id=<?php echo $id_penyakit; ?>" 
                        class="btn btn-icon btn-primary" title="Edit Data"><i class="fa fa-edit"></i></a>
                      <!-- Tombol Hapus -->
                      <a class="btn btn-danger" title="Hapus Data" href="penyakit_proses.php?hapus=<?php echo $id_penyakit;?>" 
                        onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"> <i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                <?php }} ?>
            </tbody>
          </table>
        </div>
        <!-- /.Card-Body -->
      </div>
    </div>
  </div>
</section>

