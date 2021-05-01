<?php
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);


?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $uri_segments[3];?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Anggota</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>NIRA</th>
                    <th>Pendidikan</th>
                    <th>Ruangan</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    
                    $no             = 1;
                    $sql_anggota    = "SELECT * FROM nira WHERE blokir='N'";
                    $query_anggota  = mysqli_query($host, $sql_anggota);
                    while($data_anggota = mysqli_fetch_array($query_anggota)){
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data_anggota['nama'] ?></td>
                        <td><?= $data_anggota['nira'] ?></td>
                        <td><?= $data_anggota['pendidikan'] ?></td>
                        <td><?= $data_anggota['ruangan'] ?></td>
                    </tr>
                    <?php
                    $no++;
                      }
                    ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>NIRA</th>
                    <th>Pendidikan</th>
                    <th>Ruangan</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>