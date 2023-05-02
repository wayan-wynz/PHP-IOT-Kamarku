<?php 
	// $koneksi = mysqli_connect("localhost", "root", "", "db-sensor-native");

	include "../config/koneksi.php";

	$hapus = mysqli_query($koneksi, "TRUNCATE tb_sensor");
	//mmbrikan respon jika berhasil
	if ($hapus)
		echo '<script>alert("Semua Data Berhasil Dihapus !");window.location="../tabel.php"</script>';
	else
		echo '<script>alert("Gagal Dihapus !");window.location="../tabel.php"</script>';
?>