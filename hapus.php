<?php 
	require('cek_session.php');
	halamanAdmin();
	$id_buku = $_GET['id_buku'];
	$cover = $_GET['cover'];

	require('database.php');
	$querydelete = "DELETE FROM katalog WHERE id_buku = $id_buku";
	$hasildelete = mysqli_query($koneksi1, $querydelete);
	// var_dump($hasildelete);
	
	//hapus cover di dalam folder
	$targethapus = "data/gambar/buku/$cover";
	// echo $targethapus;
	if(file_exists($targethapus)){
		unlink($targethapus);
	}

	// if(file_exists($targethapus)){
	// 	echo "Terjadi kesalahan penghapusan file";
	// }else{
	// 	echo "Target sudah dihapus";
	// }

	if($hasildelete == 1 && !file_exists($targethapus)){?>
		<script>
			Swal.fire({
			type: 'success',
			title: 'Buku berhasil di hapus',
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
	<?php
	}
	else{?>
		<script>
			Swal.fire({
			type: 'error',
			title: 'Oops...',
			title: 'Buku gagal di hapus',
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
	<?php
	}

?>

