<?php  

	$sqlBulan   = mysqli_query($koneksi, "SELECT * FROM tb_bulan WHERE id_bulan=MONTH(NOW())");
	$bulan      = mysqli_fetch_array($sqlBulan);
	$bulanNama  = $bulan['nm_bulan'];

?>