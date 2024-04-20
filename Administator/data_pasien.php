<?php

require_once './db_koneksi.php'; 

$sql = 'SELECT * FROM pasien';
$getPasien =$dbh -> query ($sql);

include_once './layouts/top.php';
include_once './layouts/navbar.php';
include_once './layouts/sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pasien</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Pasien</h3>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table class="table">
                    <thead>
                       <tr>
                           <th>no</th>
                           <th>kode</th>
                           <th>nama</th>
                           <th>tmp lahir</th>
                           <th>tgl lahir</th>
                           <th>jenis kelamin</th>
                           <th>kelurahan</th>
                           <th>alamat</th>
                           <th>email</th>                           
                           <th>Action</th>                      
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($getPasien as $key =>$pasien) : ?>
                        <tr>
                            <td><?= ++$key?></td>
                            <td><?= $pasien['kode']?></td>
                            <td><?= $pasien['nama']?></td>
                            <td><?= $pasien['tmp_lahir']?></td>
                            <td><?= $pasien['tgl_lahir']?></td>
                            <td><?= $pasien['gender']?></td>
                            <td><?= $pasien['kelurahan_id']?></td>
                            <td><?= $pasien['alamat']?></td>
                            <td><?= $pasien['email']?></td>
                            <td>
                              <a href="form_pasien.php?id=<?= $pasien ['id']?>" class="btn btn-sm btn-warning">Ubah</a>
                              <a href="proses_pasien.php?id=<?= $pasien ['id']?> &proses=hapus" class="btn btn-sm btn-danger">hapus</a>

                            </td>
                        <?php endforeach ?>
                        </tr>
                    </tbody> 
                </table>
            </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

<?php
  include_once './layouts/bottom.php';
?>