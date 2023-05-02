<?php  
	// $koneksi = mysqli_connect("localhost", "root", "", "db-sensor-native");
	include "../config/koneksi.php";

	//baca data dari tabel tb_sensor
	$sql = mysqli_query($koneksi, "SELECT * FROM tb_sensor ORDER BY id DESC");
	//Ini query yang akan menampilkan data paling terakhir saja
	$data = mysqli_fetch_array($sql);
	$suhu = $data['suhu'];
	$tanggal = date("d F Y", strtotime($data['tanggal']));
	$jam  = $data['jam'];
	// $jam = date('H:i', strtotime($data['jam']));
	$datanya="$tanggal, $jam";

	//uji apabila nilai suhu belum ada, maka anggap tidak ada data
	if($suhu == "") $datanya = "Tidak Ada Data";

	echo $datanya; 

?>