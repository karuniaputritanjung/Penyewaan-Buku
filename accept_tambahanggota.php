<?php 
	$nama_dpn = $_POST['nama_depan'];
	$nama_blk = $_POST['nama_belakang'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$tipe = $_FILES['foto']['type'];
	$tmpFiles = $_FILES['foto']['tmp_name'];

	$tipe = explode('/', $tipe);
	$tipe = end($tipe);
	$foto = uniqid().'.'.$tipe;//nama gambar

	move_uploaded_file($tmpFiles, 'data/gambar/anggota/'.$foto);
	require('database.php');
	$queryinput="INSERT INTO anggota
	VALUES('', '$nama_dpn', '$nama_blk', '$alamat', '$email', '$foto')";
	$hasilqueryinput = mysqli_query($koneksi1, $queryinput);
	if($hasilqueryinput == 1): ?>
		<div class="container d-flex justify-content-center">
			<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title">Anggota Sudah Terdaftar</h5>
			    <?php 
			    	echo $nama_dpn;
			    	echo "</br>";
			    	echo $nama_blk;
			    	echo "</br>";
			    	echo $alamat;
			    	echo "</br>";
			    	echo $email;
			    	echo "</br>";
				?>
			  </div>
			</div>
		</div>
	<?php else : ?>
		<div class="container d-flex justify-content-center">
			<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title">Anggota Tidak Terdaftar</h5>
			  </div>
			</div>
		</div>
	<?php endif ?>