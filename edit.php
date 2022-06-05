<?php 
	require('cek_session.php');
	halamanAdmin();
	require('database.php');
	$id_buku = $_GET['id_buku'];
	$queryselect = "SELECT * FROM katalog WHERE id_buku = $id_buku";
	// var_dump($id_buku);
	$hasilselect = mysqli_query($koneksi1, $queryselect);
	// var_dump($hasilselect);
	$row = mysqli_fetch_array($hasilselect);

 ?>

<div class="container d-flex justify-content-center">
<div class="card text-white bg-primary mb-3" style="max-width: 40rem;">
	<div class="card-header text-center">
		<h3>
			Tambah Buku
  		</h3> 
 	</div>
  	<div class="card-body">
		<!-- <h5 class="card-title">Primary card title</h5> -->
	<form class="bg-primary" style="width: 30rem;" action="index.php?target=accept_edit" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id_buku" value="<?php echo $id_buku ?>">
		<div class="row mb-3">
			 <div class="col-4">
			 	<label>Judul Buku</label>
			</div>
			<input class="col-7" type="text" name="judul" value="<?php echo $row['judul'] ?>">
		</div>
		<div class="row mb-3">
			<div class="col-4">
			 	<label>Pengarang</label>
			</div>
			<input class="col-7" type="text" name="pengarang" value="<?php echo $row['pengarang'] ?>">
		</div>
		<div class="row mb-3">
			<div class="col-4">
			 	<label>Penerbit</label>
			</div>
			<input class="col-7" type="text" name="penerbit" value="<?php echo $row['penerbit'] ?>">
		</div>
		<div class="row mb-3">
			<div class="col-4">
			 	<label>Genre</label>
			</div>
			<select class="col-7" name="genre">
				<?php 
				$queryselect = "SELECT * FROM genre";
				$hasilselect = mysqli_query($koneksi1, $queryselect);
				while ($row2 = mysqli_fetch_array($hasilselect)):
					if($row2['id_genre']==$row['id_genre'])
                                {
                                    $cetak="selected";
                                }else
                                {
                                    $cetak="";
                                }
					echo $row['id_genre'];
					echo $row['genre'];
					echo "<option value='".$row2['id_genre']."' $cetak>".$row2['genre']."</option>";
					?>
				<?php endwhile; ?>
			</select>
			
			<!-- <input class="col-7" type="text" name="genre"> -->
		</div>
		<div class="row mb-3">
			<div class="col-4">
			 	<label>Cover</label>
			 </div>
			 <!-- <input type="hidden" name="MAX_FILE-SIZE" value="40000000"> -->
			 <!-- <input class="col-7 btn btn-success" type="file" name="cover"> -->
			 <div class="input-group mb-3 col-7">
			  <!-- <div class="input-group-prepend">
			    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
			  </div> -->
			  <div class="custom-file">
			    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="cover">
			    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
			  </div>
			</div>
		</div>
			<button type="submit" class="btn btn-success btn-block" name="submit">Submit</button>
	</form>
	</div>
</div>
</div>