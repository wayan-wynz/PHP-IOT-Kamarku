<?php 
	// $koneksi = mysqli_connect("localhost", "root", "", "db-sensor-native");

	include "koneksi.php";
	include "GetHariAngka.php";
	include "device.php";

	$hariAngka  = hariIndo($hariInggris);
	$bulan		= date('m');

	// echo "Bahasa Inggris: {$hariBahasaInggris} <br>";
	// echo "Bahasa Indonesia: {$hariBahasaIndonesia} <br>";	

	$suhu 		= $_GET['suhu'];
	$kelembaban = $_GET['kelembaban'];
	$tanggal    = date('Y-m-d');
	$jam		= date('H:i:s');

	$ip = get_client_ip_2();
	$browser = get_client_browser();
	$os = $_SERVER['HTTP_USER_AGENT'];

	// Simpan ke tabel tb_sensor
	//Auto increment = start dari 1
	mysqli_query($koneksi, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");
	mysqli_query($koneksi, "UPDATE perangkat SET ip='$ip', browser='$browser',  os='$os' WHERE id_perangkat=1");
	// simpan data sensor ke tabel
	$simpan = mysqli_query($koneksi, "INSERT INTO tb_sensor(suhu,kelembaban,tanggal,jam,id_hari,id_bulan)VALUES('$suhu', '$kelembaban', '$tanggal', '$jam', '$hariAngka', '$bulan')");
	$sql1 = mysqli_query($koneksi, "SELECT COUNT(id) AS jumlah FROM tb_sensor");
	$total = mysqli_fetch_array($sql1);
	$jumlah = $total['jumlah'];
	//mmbrikan respon jika berhasil dikirim
	if ($simpan)
		echo "Berhasil Terkirim ($jam)#$jumlah";
	// penambahan # untuk trim (pemisah)
	else
		echo "Gagal Terkirim ($jam)#$jumlah";
?>