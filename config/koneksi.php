<?php
$host = mysqli_connect("localhost", "root", "", "ppni");

 if(!$host){
  echo "Koneksi gagal!" . mysqli_connect_error();
  die();
 } 