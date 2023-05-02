<?php  
	// $koneksi = mysqli_connect("localhost", "root", "", "db-sensor-native");
	
	include "../config/koneksi.php";
	//baca data dari tabel tb_sensor
	$sql = mysqli_query($koneksi, "SELECT * FROM perangkat WHERE id_perangkat=1");
	//Ini query yang akan menampilkan data paling terakhir saja
	$data = mysqli_fetch_array($sql);
	$device_ip = $data['ip'];
	$device_os = $data['os'];

	//uji apabila nilai suhu belum ada, maka anggap suhunya = 0
	if($device_os == "ESP8266HTTPClient") $device_os = "ESP8266 v3";

	//cetak nilai suhu
	echo $device_os, ' (',$device_ip,')';
?>