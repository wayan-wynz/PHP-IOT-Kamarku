<?php  
function hariIndo ($hariInggris) {
		switch ($hariInggris) {
			case 'Sunday':
			return '7'; //Minggu
			case 'Monday':
			return '1'; //Senin
			case 'Tuesday':
			return '2'; //Selasa
			case 'Wednesday':
			return '3'; //Rabu
			case 'Thursday':
			return '4'; //Kamis
			case 'Friday':
			return '5'; //Jumat
			case 'Saturday':
			return '6'; //Sabtu
			default:
			return 'Hari Tidak Valid';
		}
	}

	$hariInggris= date('l');	
?>