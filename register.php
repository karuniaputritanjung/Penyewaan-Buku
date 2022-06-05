<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="mbuhlah.css">
<?php 
	if(isset($_POST['submit'])){
		require('database.php');
		$username = $_POST['username'];
		$nm_dpn = $_POST['nm_dpn'];
		$nm_blk = $_POST['nm_blk'];
		$email = $_POST['email'];
		$password = $_POST['password'];	
		$password2 = $_POST['password2'];
		$level = $_POST['level'];

		$queryselect = "SELECT username FROM user WHERE username = '$username'";
		$hasilselect = mysqli_query($koneksi1, $queryselect);
		if(mysqli_num_rows($hasilselect) != 1){
			if($password == $password2){
				$password = password_hash($password, PASSWORD_DEFAULT);
				$queryinput = "INSERT INTO user VALUES ('$username', 
														'$password',
														'$nm_dpn',
														'$nm_blk',
														'$email', 
														'$level')";
				$hasilinput = mysqli_query($koneksi1, $queryinput);
					?>
					<script>
					Swal.fire({
					type: 'success',
					title: 'Register Berhasil',
					showConfirmButton: false,
					timer: 1300
					}).then((result) => {
						if (
							result.dismiss === Swal.DismissReason.timer
						) {
							document.location.href = 'index.php';
						}
						})
					</script>
 				<?php
			}else{
				?>
					<script>
					Swal.fire({
						type: 'error',
						title: 'Oops...',
						text: 'Konfirmasi Password Salah!',
						confirmButtonColor: '#3085d6',
						confirmButtonText: 'OK'
					  }).then((result) => {
						if (result.value) {
							location.href = "index.php?target=register";
						}
						})
					  </script>
				<?php
			}
		}else{
			?>
					<script>
					Swal.fire({
						type: 'error',
						title: 'Oops...',
						text: 'Username Sudah Pernah di Gunakan!',
						confirmButtonColor: '#3085d6',
						confirmButtonText: 'OK'
					  }).then((result) => {
						if (result.value) {
							location.href = "index.php?target=register";
						}
						})
					  </script>
				<?php
		}
	}
?>
<div class="container mt-20" style="width: 80%;">
	<div class="full">
		<h3 style="color: white; float: left;">Buat Akun Rental</h3>
		<br>
		<form action="" method="POST" style="margin-top: 30px;" enctype="multipart/form-data">
			<div class="row">
			<div class="col-8">
				<div class="row">
					<div class="col-6">
						<div class="input">
							<input type="text" name="nm_dpn" required>
							<span class="text">Nama Depan</span>
						</div>
					</div>
					<div class="col-6">
						<div class="input">
							<input type="text" name="nm_blk" required>
							<span class="text">Nama Belakang</span>
						</div>
					</div>
				</div>      
				<br>
					<div class="input">
						<input type="text" name="username" required>
						<span class="text">Username</span>
					</div>
					<br>
					<div class="input">
						<input type="text" name="email" required>
						<span class="text">Email</span>
					</div>
					<br>
					<div class="input" id="form">
						<input type="password" name="password" id="password" required>
						<span class="text">Password</span>
					</div>
					<br>
					<div class="input" id="form">
						<input type="password" name="password2" id="password" required>
						<span class="text">Konfirmasi Password</span>
					</div>
					<br>
					<div class="input">
						<select name="level" required>
							<option value="admin">Admin</option>
							<option value="pengunjung">User</option>
						</select>
						<span class="text">Panel</span>
					</div>
					<div>
						<input type="checkbox" id="show-hide" name="show-hide" value="" />
						<label for="show-hide" style="color: white;">Show password</label>
					</div>
			<button type="submit" class="btn btn-primary btn-block text-light mb-3" name="submit">
						Register
					</button>
					<a href="index.php" class="text-light">Already have Account?</a>
			</div>
			<div class="col-4">
				<img style="margin-bottom: 200px;" src="account.svg" alt="">
			</div>
			</div>
        </form>
	</div>
</div>
<!-- <div class="container d-flex justify-content-center mb-5">

	<div class="card text-white bg-primary mb-3 " style="width: 45rem;">

		<div class="card-header text-center">
			<h3>
				Register
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
							<input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="username" required>
						</div>
					</div>
					<div class="row mb-3 mt-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">Nama Depan</span>
							</div>
							<input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="nm_dpn" required>
						</div>
					</div>
					<div class="row mb-3 mt-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">Nama Belakang</span>
							</div>
							<input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="nm_blk" required>
						</div>
					</div>
					<div class="row mb-3 mt-2">
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
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">Password</span>
							</div>
							<input type="password" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="password" required>
						</div>
					</div>

					<div class="row mb-3">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">Konf Password</span>
							</div>
							<input type="password" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="password2" required>
						</div>
					</div>

					<div class="row mb-3">
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

					<!-- <div class="row mb-3">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" style="width: 9rem;">Email</span>
							</div>
							<input type="email" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="email" required>
						</div>
					</div> -->

					<!-- <button type="submit" class="btn btn-light btn-block text-primary mb-3" name="submit">
						Submit
					</button>
				</form>
			</div>

		</div>

	</div>
</div> -->
<script>
    (function() {
    
        var showHide = function( element, field ) {
            this.element = element;
            this.field = field;
            
            this.toggle();    
        };
        
        showHide.prototype = {
            toggle: function() {
                var self = this;
                self.element.addEventListener( "change", function() {
                    if(self.element.checked) {self.field.setAttribute( "type", "text" );}
                    else {self.field.setAttribute( "type", "password" );}
                }, false);
            }
        };
        
        document.addEventListener( "DOMContentLoaded", function() {
            var checkbox = document.querySelector( "#show-hide" ),
                password = document.querySelector( "#password" ),
                form = document.querySelector( "#form" );
                
                form.addEventListener( "submit", function( e ) {
                    e.preventDefault();
                }, false);
                
                var toggler = new showHide( checkbox, password );
        });
        
    })();
</script>