<?php 
	require('cek_session.php');
	halamanAdmin();
?>
<div class="container d-flex justify-content-center mb-5">
	<div class="card text-white bg-primary mb-3 " style="width: 45rem;">

		<div class="card-header text-center">
			<h3>
				Tambah Anggota
	  		</h3> 
	 	</div>


	  	<div class="card-body">
	  		<div class="container d-flex justify-content-center">

				<form class="bg-primary" style="width: 35rem;" action="index.php?target=accept_tambahanggota" method="post" enctype="multipart/form-data">
					<div class="row mb-3 mt-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">Nama Depan</span>
							</div>
							<input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="nama_depan" required>
						</div>
					</div>

					<div class="row mb-3">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">Nama Belakang</span>
							</div>
							<input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="nama_belakang" required>
						</div>
					</div>

					<div class="row mb-3">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">Email</span>
							</div>
							<input type="email" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="email" required>
						</div>
					</div>

					<div class="row mb-3">
						<div class="input-group">
							<div class="input-group-prepend">
						    	<span class="input-group-text" style="width: 9rem;">Alamat</span>
							</div>
							<textarea class="form-control" aria-label="With textarea" name="alamat" required></textarea>
						</div>
					</div>

					<div class="row mb-3">
						<div class="input-group mb-3">
						  <div class="input-group-prepend">
						    <span class="input-group-text" id="inputGroupFileAddon01" style="width: 9rem;">Upload</span>
						  </div>
						  <div class="custom-file">
						    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="foto" required>
						    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
						  </div>
						</div>
					</div>
					<button type="submit" class="btn btn-light btn-block text-primary mb-3" name="submit">
						Submit
					</button>
				</form>
			</div>

		</div>

	</div>
</div>
<div style="margin-bottom: 200px;">

</div>