<?php 
	$judul = $_POST['judul'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$genre = $_POST['genre'];
	$tahun_terbit = $_POST['tahun_terbit'];
	$deskripsi = $_POST['deskripsi'];
	$harga = $_POST['harga'];
	$tipe = $_FILES['cover']['type'];
	$tmpFiles = $_FILES['cover']['tmp_name'];

	$tipe = explode('/', $tipe);
	$tipe = end($tipe);
	$cover = uniqid().'.'.$tipe;//nama gambar
	move_uploaded_file($tmpFiles, 'data/gambar/buku/'.$cover);

	require('database.php');
	$queryinput="INSERT INTO katalog
			(`id_buku`, 
			`judul`, 
			`tahun terbit`, 
			`pengarang`, 
			`penerbit`, 
			`id_genre`, 
			`cover`, 
			`deskripsi`, 
			`harga`)
	VALUES('', 
			'$judul',
			'$tahun_terbit', 
			'$pengarang', 
			'$penerbit', 
			'$genre', 
			'$cover',
			'$deskripsi',
			'$harga'
		)";			
	
	$hasilqueryinput = mysqli_query($koneksi1, $queryinput);
	if($hasilqueryinput == 1): ?>
					<script>
					Swal.fire({
					type: 'success',
					title: 'Buku berhasil di tambahkan',
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
						title: 'Buku gagal di tambahkan',
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
	<div style="margin-bottom: 100px;">

</div>