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
				<form class="bg-primary" style="width: 35rem;" action="index.php?target=accgenre" method="post" enctype="multipart/form-data">
					<div class="row mb-3 mt-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">id_genre</span>
							</div>
							<input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="id">
						</div>
					</div>
					<div class="row mb-3 mt-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">genre</span>
							</div>
							<input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="genre">
						</div>
					</div>
					<div class="row mb-3 mt-2">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroupFileAddon01" style="width: 9rem;">logo</span>
							</div>
						<div class="custom-file">
					    	<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="logo">
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