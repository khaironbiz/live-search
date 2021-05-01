<?php 
require_once('../config/koneksi.php');
$keyword        = $_GET['keyword'];
$sql_anggota    = "SELECT * FROM nira WHERE blokir='N' and nama LIKE '%$keyword%' ORDER BY nama ASC";
$query_anggota  = mysqli_query($host, $sql_anggota);
?>

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