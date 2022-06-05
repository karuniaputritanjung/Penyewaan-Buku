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
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">ID Peminjam</span>
							</div>
							<input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
							<div class="input-group-append">
								<button class="btn btn-outline-light" type="button" id="button-addon2">
									Cek
								</button>
							</div>
						</div>
					</div>

					<div class="row mb-3 mt-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">ID Buku</span>
							</div>
							<input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
							<div class="input-group-append">
								<button class="btn btn-outline-light" type="button" id="button-addon2">
									Cek
								</button>
							</div>
						</div>
					</div>

					<div class="row mb-3 mt-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">ID Buku</span>
							</div>
							<input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
							<div class="input-group-append">
								<button class="btn btn-outline-light" type="button" id="button-addon2">
									Cek
								</button>
							</div>
						</div>
					</div>

					<div class="row mb-3 mt-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">ID Buku</span>
							</div>
							<input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
							<div class="input-group-append">
								<button class="btn btn-outline-light" type="button" id="button-addon2">
									Cek
								</button>
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
	<div style="margin-bottom: 100px;">

</div>
</div>