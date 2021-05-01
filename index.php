<?php 
require_once('config/koneksi.php');
if(!isset($_POST['cari'])){
    $sql_anggota    ="SELECT * FROM nira WHERE blokir='N' ORDER BY nama ASC";
    
}else{
    
    $keyword        = $_POST['keyword'];
    $sql_anggota    ="SELECT * FROM nira WHERE blokir='N' and nama LIKE '%$keyword%' ORDER BY nama ASC";
}

$query_anggota  = mysqli_query($host, $sql_anggota);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Anggota</title>
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <h3>Daftar Anggota</h3>
            <form action="" method="POST">
                <div class="col-md-4"> 
                    <input type="text" class="form-control" 
                        name="keyword" id="keyword" placeholder="KeyWord" autofocus autocomplete="off">
                </div>
            </form>
        <div>
        <div class="row">
            <did clas="col-md-12" id="container">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIRA</th>
                            <th>Email</th>
                            <th>Pendidikan</th>
                            <th>Ruangan</th>
                        </tr>
                        <?php
                        $count  = mysqli_num_rows($query_anggota);
                        $no=1;
                        if($count >0){
                        while($data_anggota =mysqli_fetch_array($query_anggota)){
                        ?>
                        <tr>
                            <td><?=$no?></td>
                            <td><?=$data_anggota['nama']?></td>
                            <td><?=$data_anggota['nira']?></td>
                            <td><?=$data_anggota['email']?></td>
                            <td><?=$data_anggota['pendidikan']?></td>
                            <td><?=$data_anggota['ruangan']?></td>
                        </tr>
                        <?php
                        $no++;
                            }
                        }else{
                        ?>
                            <tr>
                            <td colspan="6"> DATA TIDAK DITEMUKAN</td>
                        </tr>
                        <?php
                        }
                        ?>
                    <thead>
                </table>
            </div>
            <script src="js/script.js"></script>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>