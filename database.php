<?php 
	$koneksi1 = mysqli_connect('localhost', 'root', '', 'sebu');

	function query($query){
		global $koneksi1;

		$result = mysqli_query($koneksi1, $query);
		// $rows = [];

		// while($row = mysqli_fetch_array($result)){
		// 	$rows[] = $row;
		// }

		return $result;
	}

	function now(){
		return date('N j/n/Y H:i:s');
	}

	function tanggal_indonesia($waktu_lengkap){
		$nama_hari = array(1=> 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
		$nama_bulan = array(1=> 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

		$pisah_waktu = explode(" ",$waktu_lengkap);
		$hari = $pisah_waktu[0];
		$tanggal = $pisah_waktu[1];
		$jam = $pisah_waktu[2];

		$hari_baru = $nama_hari[$hari];
		$pisah_tanggal = explode("/",$tanggal);
		$tanggal_baru = $pisah_tanggal[0]." ".$nama_bulan[$pisah_tanggal[1]]." ".$pisah_tanggal[2];

		return $hari_baru.", ".$tanggal_baru;
	}

	function sisa_waktu($tanggal,$durasi){
		//waktu pinjam
		$pisah_tanggal = explode("/",$tanggal);
		$hari = $pisah_tanggal['0'];
		$bulan = $pisah_tanggal['1'];

		//waktu sekarang
		$pisah_waktu = explode(" ",now());
		$tanggal_sekarang = $pisah_waktu[1];
		$pisah_tanggal_sekarang = explode("/",$tanggal_sekarang);
		$hari_sekarang = $pisah_tanggal['0'];
		$bulan_sekarang = $pisah_tanggal['1'];

		// echo "____".$hari."____".$hari_sekarang;

		$sisa= $durasi - abs($hari_sekarang-$hari);

		return $sisa." hari";
	}
?>