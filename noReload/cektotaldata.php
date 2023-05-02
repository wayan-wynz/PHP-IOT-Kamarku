<?php  
	// $koneksi = mysqli_connect("localhost", "root", "", "db-sensor-native");
	include "../config/koneksi.php";

	$sql1 = mysqli_query($koneksi, "SELECT COUNT(id) AS jumlah FROM tb_sensor");
	$total = mysqli_fetch_array($sql1);
	$jumlah = $total['jumlah'];

	echo $jumlah;
?>