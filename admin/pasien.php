<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Pasien</h1>
        </div><!-- /.col -->
        <div class="col-sm-5">
        </div>
      </div><!-- /.row -->
    </di=v><!-- /.container-fluid -->
  </div>
</div>
<!-- /.content-header -->

<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-purple">
                <div class="card-header" style="background-color: #a184a8;">
                    <h3 class="card-title">Tabel Data Pasien</h3>
                    <div class="card-tools"></div>
                </div>

                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Kucing </th>
                            <th>Usia Kucing</th>
                            <th>Jenis Kucing</th>
                            <th>Gejala-gejala</th>
                            <th>Penyakit</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query="SELECT * FROM tb_pasien";
                            $result=$mysqli->query($query);
                            $num_result=$result->num_rows;
                            if ($num_result > 0 ) { 
                                $no=0;
                                while ($data=mysqli_fetch_assoc($result)) {
                                    extract($data);
                                    ?>
                                    <tr>
                                        <td width="5%"><?php echo $no+=1; ?></td>
                                        <td><?php echo $tanggal; ?></td>
                                        <td><?php echo $nm_pasien; ?></td>
                                        <td><?php echo $usia; ?></td>
                                        <td><?php echo $jenis; ?></td>
                                        <td><?php echo $gejala; ?></td>
                                        <td><?php echo $penyakit; ?></td>

                                        <td width="20%">
                                        <a class="btn btn-danger" title="Hapus Data" href="pasien_proses.php?hapus=<?php echo $id_pasien;?>" 
                                            onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"> <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
