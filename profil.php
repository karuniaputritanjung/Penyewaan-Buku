<?php 
	$username = $_SESSION['username'];
	$nm_dpn = $_SESSION['nm_dpn'];
	$nm_blk = $_SESSION['nm_blk'];
	$email = $_SESSION['email'];
?>

<div class="container d-flex justify-content-center mb-5">

	<div class="card text-white bg-primary mb-3 " style="width: 45rem;">

		<div class="card-header text-center">
			<h3>
				Profil
	  		</h3> 
	 	</div>


	  	<div class="card-body">
	  		<div class="container d-flex justify-content-center">

				<form class="bg-primary" style="width: 35rem;" action="" method="post" enctype="multipart/form-data">
					<div class="row mb-3 mt-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">Username</span>
							</div>
							<input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="username" value="<?php echo $username ?>" disabled>
						</div>
					</div>
					<div class="row mb-3 mt-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">Nama</span>
							</div>
							<input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="nm_dpn" value="<?php echo $nm_dpn.' '.$nm_blk ?>" disabled>
						</div>
					</div>
					<div class="row mb-3 mt-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">Email</span>
							</div>
							<input type="email" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="email" value="<?php echo $email ?>" disabled>
						</div>
					</div>


					<!-- <div class="row mb-3">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label class="input-group-text" for="inputGroupSelect01" style="width: 9rem;">Sebagai</label>
						</div>
						<select class="custom-select" id="inputGroupSelect01" name="level">
							<option selected>Pilih...</option>
							<option value="admin">Admin</option>
							<option value="pengunjung">Pengunjung</option>
						</select>
					</div>
					</div> -->
					
					<a href="index.php?target=home" class="btn btn-light text-primary mb-3" name="submit">Back</a>
				</form>
			</div>

		</div>

	</div>
</div>