<?php
date_default_timezone_set('Asia/Jakarta');
$koneksi = mysqli_connect("localhost","root","","db_sensor_native");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Gagal koneksi ke mySql: " . mysqli_connect_error();
  }

// Versi Websitenya
  $nm = mysqli_query($koneksi, "SELECT * FROM versi WHERE id_versi=1;");
  $ver = mysqli_fetch_array($nm);
  $nama_apps = $ver['nama_apps'];
  $nama_versi= $ver['versi_apps']; 
?>