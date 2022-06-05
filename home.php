<?php 
	require('cek_session.php');
?>
<?php if($_SESSION['level'] == 'admin'): ?>
	<div class="container mt-20">
	 	<div class="container">
	 		<div class="row">
	 			<a class="btn btn-primary btn-lg btn-block mb-3" href="index.php?target=tambah_buku">
	 			<!-- <button type="button" class="btn btn-primary btn-lg btn-block"> -->
	 				Tambah Buku
	 			<!-- </button> -->
	 			</a>
	 		</div>
	 		<div class="row">
	 			<a class="btn btn-primary btn-lg btn-block mb-3" href="index.php?target=tambah_anggota">
	 				Tambah Anggota
	 			</a>
	 		</div>
	 		<div class="row">
	 			<a class="btn btn-primary btn-lg btn-block mb-3" href="index.php?target=peminjaman">
	 				Peminjaman
	 			</a>
	 		</div>
	 		<div class="row">
	 			<a class="btn btn-primary btn-lg btn-block mb-3" href="index.php?target=pengembalian">
	 				Pengembalian
	 			</a>
	 		</div>
	 	</div>
	 </div>
<?php endif ?>

<?php if(isset($_SESION['username'])): ?>
	<button type="button" class="btn btn-success"><?php echo $_SESSION['username'] ?></button>
<?php endif ?>