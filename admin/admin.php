<!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Admin</h1>
        </div><!-- /.col -->
        <div class="col-sm-5">
        </div>
        <div class="col-sm-1">
          <a href="?hal=admin_olah"  style=" float: right; background-color: #a184a8; color: white" class="btn btn-block btn-sm">Tambah</a>
        </div><!-- /.col -->
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
          <h3 class="card-title">Tabel Data Admin</h3>

          <div class="card-tools">
          </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama </th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query="SELECT * from tb_admin";
              $result=$mysqli->query($query);
              $num_result=$result->num_rows;
              if ($num_result > 0 ) { 
                $no=0;
                while ($data=mysqli_fetch_assoc($result)) {
                  extract($data);
                  ?>
                  <tr>
                    <td width="5%"><?php echo $no+=1; ?></td>
                    <td><?php echo $nm_admin; ?></td>
                    <td><?php echo $username; ?></td>
                    <td><?php echo $password; ?></td>

                    <td width="20%">
                    <a href="?hal=admin_olah&id=<?php echo $id_admin; ?>" 
                      class="btn btn-icon btn-primary" title="Edit Data"><i class="fa fa-edit"></i> </a>

                      <a class="btn btn-danger" title="Hapus Data" href="admin_proses.php?hapus=<?php echo $id_admin;?>" 
                        onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"> <i class="fa fa-trash"></i></a>

                      </td>
                    </tr>
                  <?php }} ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
