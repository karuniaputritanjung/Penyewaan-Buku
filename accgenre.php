<?php 
	$id = $_POST['id'];
	$genre = $_POST['genre'];
	$tipe = $_FILES['logo']['name'];
	$tmpFiles = $_FILES['logo']['tmp_name'];

	$tipe = explode('/', $tipe);
	$tipe = end($tipe);
	$logo = uniqid().'.'.$tipe;//nama gambar
	move_uploaded_file($tmpFiles, 'data/gambar/genre/'.$logo);

	require('database.php');
	$queryinput="INSERT INTO genre
			(`id_genre`, 
			`genre`,`logo`)
	VALUES('$id',
			'$genre','$logo'
		)";			
	$hasilqueryinput = mysqli_query($koneksi1, $queryinput);
	if($hasilqueryinput == 1): ?>
		<div class="container d-flex justify-content-center">
			<div class="card text-white bg-primary mb-3" style="max-width: 40rem;">
			  <div class="card-body">
			    <h5 class="card-title">Buku Sudah Terdaftar</h5>
			    <div class="container">
			    	<div class="row">
			    		<div class="col">
			    			id
			    		</div>
			    		<div class="col">
			    			<?php echo $id ?>
			    		</div>
			    	</div>
			    	<div class="row">
			    		<div class="col">
			    			genre
			    		</div>
			    		<div class="col">
			    			<?php echo $genre ?>
			    		</div>
			    	</div>
			    	<div class="row">
			    		<div class="col">
			    			Cover
			    		</div>
			    		<div class="col">
			    			<img src="<?php echo 'data/gambar/genre/'.$logo ?>" width = "100">
			    		</div>
			    	</div>
			    </div>
			    <!-- <?php 
			    	echo $id;
			    	echo "</br>";
			    	echo $genre;
				?> -->
			  </div>
			</div>
		</div>
	<?php else : ?>
		<div class="container d-flex justify-content-center">
			<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title">Buku Tidak terdaftar</h5>
			    <?php echo mysqli_error($koneksi1); ?>
			  </div>
			</div>
		</div>
	<?php endif ?>