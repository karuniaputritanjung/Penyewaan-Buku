<?php 
	require('cek_session.php');
	halamanAdmin();
?>
<div class="container d-flex justify-content-center mb-5">
	<div class="card text-white bg-primary mb-3 " style="width: 45rem;">
		<div class="card-header text-center">
			<h3>
				Tambah Buku
	  		</h3> 
	 	</div>
	  	<div class="card-body">
		  	<div class="container d-flex justify-content-center">
				<!-- <h5 class="card-title">Primary card title</h5> -->
				<form class="bg-primary" style="width: 35rem;" action="index.php?target=accept_tambah" method="post" enctype="multipart/form-data">
					<div class="row mb-3 mt-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">Judul</span>
							</div>
							<input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="judul">
						</div>
					</div>
					<div class="row mb-3 mt-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">Pengarang</span>
							</div>
							<input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="pengarang">
						</div>
					</div>
					<div class="row mb-3 mt-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">Penerbit</span>
							</div>
							<input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="penerbit">
						</div>
					</div>
					<div class="row mb-3 mt-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">Tahun terbit</span>
							</div>
							<input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="tahun_terbit">
						</div>
					</div>
					<div class="row mb-3 mt-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">Harga</span>
							</div>
							<input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="harga">
						</div>
					</div>

					<div class="row">
						<div class="input-group mb-3">
						  <div class="input-group-prepend">
						    <label class="input-group-text" for="inputGroupSelect01"  style="width: 9rem;">Genre</label>
						  </div>
						  <select class="custom-select" id="inputGroupSelect01" name="genre">
						    <option selected>Pilih...</option>
						    <?php 
							require('database.php');
							$queryselect = "SELECT * FROM genre";
							$hasilselect = mysqli_query($koneksi1, $queryselect);
							while ($row = mysqli_fetch_array($hasilselect)):
								echo $row['id_genre'];
								echo $row['genre'];


								?>
								<option value="<?php echo $row['id_genre'] ?>"> 
									<?php echo $row['genre']; ?>
								</option>
							<?php endwhile; ?>
						  </select>
						</div>
					</div>
					<div class="row mb-3 mt-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">Deskripsi</span>
							</div>
							 <textarea class="form-control" aria-label="With textarea" name="deskripsi"></textarea>
						</div>
					</div>
					<div class="row mb-3 mt-2">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroupFileAddon01" style="width: 9rem;">Cover</span>
							</div>
						<div class="custom-file">
					    	<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="cover">
					    	<label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
						</div>
						</div>
					</div>
					
					<!-- <div class="row mb-3">
						<div class="col-4">
						 	<label>Cover</label>
						</div>
						<div class="input-group mb-3 col-7">
							<div class="custom-file">
						    	<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="cover">
						    	<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
							</div>
						</div>
					</div> -->
					<button type="submit" class="btn btn-light btn-block text-primary mb-3" name="submit">
						Submit
					</button>
				</form>
			</div>
		</div>
		
	</div>
	
</div>
<div style="margin-bottom: 100px;">

</div>