<?php  
	// $koneksi = mysqli_connect("localhost", "root", "", "db-sensor-native");
	
	include "../config/koneksi.php";
	//baca data dari tabel tb_sensor
	$sql = mysqli_query($koneksi, "SELECT * FROM tb_sensor ORDER BY id DESC");
	//Ini query yang akan menampilkan data paling terakhir saja
	$data = mysqli_fetch_array($sql);
	$kelembaban = $data['kelembaban'];

	//uji apabila nilai suhu belum ada, maka anggap suhunya = 0
	if($kelembaban == "") $kelembaban = 0;

	//cetak nilai suhu
	echo $kelembaban, ' %';
?>