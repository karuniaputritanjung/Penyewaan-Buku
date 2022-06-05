<?php 
	require('database.php');

	$id_buku = $_POST['id_buku'];
	// var_dump($id_buku);
	$judul = $_POST['judul'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$genre = $_POST['genre'];
	$tipe = $_FILES['cover']['type'];
	$tmpFiles = $_FILES['cover']['tmp_name'];

	$queryselectcover = "SELECT cover FROM katalog WHERE id_buku = $id_buku";
	$hasilcover = mysqli_query($koneksi1, $queryselectcover);
	$cover = mysqli_fetch_array($hasilcover);

	$tipe = explode('/', $tipe);
	$tipe = end($tipe);
	// var_dump($cover);
	// $cover = uniqid().'.'.$tipe;//nama gambar

	// move_uploaded_file($tmpFiles, 'data/gambar/'.$cover);

	$queryupdate= "UPDATE `katalog` SET `judul` = '$judul', `pengarang` = '$pengarang', `penerbit` = '$penerbit', `id_genre` = '$genre' WHERE `katalog`.`id_buku` = $id_buku; ";
	$hasilqueryupdate = mysqli_query($koneksi1, $queryupdate);
	echo $hasilqueryupdate;
	var_dump($hasilqueryupdate);
	echo "Kode eroorr".mysqli_errno($koneksi1);
	echo "</br>";
	echo "Penyebab ".mysqli_error($koneksi1);
	if($hasilqueryupdate == 1): ?>
		<script>
					Swal.fire({
					type: 'success',
					title: 'Data berhasil di ubah',
					showConfirmButton: false,
					timer: 1300
					}).then((result) => {
						if (
							result.dismiss === Swal.DismissReason.timer
						) {
							document.location.href = 'index.php?target=katalog';
						}
						})
					</script>
	<?php else : ?>
					<script>
						Swal.fire({
						type: 'error',
						title: 'Oops...',
						title: 'Data gagal di ubah',
						showConfirmButton: false,
						timer: 1300
						}).then((result) => {
							if (
								result.dismiss === Swal.DismissReason.timer
							) {
								document.location.href = 'index.php?target=katalog';
							}
						})
					</script>
	<?php endif ?>