<!-- Content Header -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Gejala</h1>
      </div>
      <div class="col-sm-5"></div>
      <div class="col-sm-1" >
        <a href="?hal=gejala_olah" style=" float: right; background-color: #a184a8; color: white" class="btn btn-block btn-sm">Tambah</a>
      </div>
    </div>
  </div>
</div>

<!-- Bagian utama konten -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-purple">
        
        <!-- Card-Header -->
        <div class="card-header" style="background-color: #a184a8;">
          <h3 class="card-title purple">Tabel Data Gejala</h3>
          <div class="card-tools"></div>
        </div>

        <!-- Card-Body -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Gejala</th>
                <th>Nama Gejala</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              // Melakukan koneksi ke database 
              $query="SELECT * from tb_gejala";
              $result=$mysqli->query($query);
              $num_result=$result->num_rows;
              if ($num_result > 0 ) { 
                $no=0;
                while ($data=mysqli_fetch_assoc($result)) {
                  extract($data);
                  ?>
                  <tr>
                    <td width="5%"><?php echo $no+=1; ?></td>
                    <td><?php echo $id_gejala; ?></td>
                    <td><?php echo $nm_gejala; ?></td>
                    <td width="20%">
                      <!-- Tombol Edit -->
                      <a href="?hal=gejala_olah&id=<?php echo $id_gejala; ?>" 
                        class="btn btn-icon btn-primary" title="Edit Data"><i class="fa fa-edit"></i> </a>
                        <!-- Tombol Hapus -->
                      <a class="btn btn-danger" title="Hapus Data" href="gejala_proses.php?hapus=<?php echo $id_gejala;?>" 
                          onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"> <i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                <?php }} ?>
            </tbody>
          </table>
        </div> 
      </div>
    </div>
  </div>
</section>

