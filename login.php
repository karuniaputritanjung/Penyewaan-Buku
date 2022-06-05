<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<?php 
	if(isset($_SESSION['username'])){
		header("Location: index.php?target=home");
		exit;
	}
	if(isset($_POST['login'])){
		require('database.php');
		$mb_nav = "";
		$username = $_POST['nama'];
		$password = $_POST['password'];
		$queryselect = "SELECT * FROM user WHERE username = '$username'";
		$hasilselect = mysqli_query($koneksi1, $queryselect);
		if (mysqli_num_rows($hasilselect) === 1) {
			$data = mysqli_fetch_array($hasilselect);
			if(password_verify($password, $data['password'])){
				$_SESSION['username'] = $username;
				// $_SESSION['password'] = $password;
				$_SESSION['nm_dpn'] = $data['nm_dpn'];
				$_SESSION['nm_blk'] = $data['nm_blk'];
				$_SESSION['email'] = $data['email'];
				$_SESSION['level'] = $data['level'];
				$_SESSION['username'] = $data['username'];
				?>
				<script>
					const Toast = Swal.mixin({
					toast: true,
					position: 'top-end',
					showConfirmButton: false,
					timer: 1300
					});
					
					Toast.fire({
					type: 'success',
					title: 'Signed in successfully'
					}).then((result) => {
						if (
							result.dismiss === Swal.DismissReason.timer
						) {
							document.location.href = 'index.php?target=home';
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
						title: 'Password Salah',
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
			}
		}else{
		?>
					<script>
						Swal.fire({
						type: 'error',
						title: 'Oops...',
						title: 'Username Salah',
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
		}
	}else{
		$mb_nav= "mb-3";
	}
?>

<div class="container mt-20">
	 	<div class="d-flex justify-content-center">
	 		<div class="card text-white bg-dark mb-3" style="max-width: 40rem;">
			  	<div class="card-header text-center">
			  		<h3>
			  			WELCOME !
			  		</h3> 
			 	</div>
			  	<div class="card-body">
			    	<!-- <h5 class="card-title">Primary card title</h5> -->
			    <form class="bg-dark" style="width: 30rem;" action="" method="POST">
			 		<div class="row mb-3">
			 			<div class="col-4">
			 				<label>Username</label>
			 			</div>
			 			<input class="col-7" type="text" name="nama">
			 		</div>
			 		<div class="row mb-3" id="form">
			 			<div class="col-4">
			 				<label>Password</label>
			 			</div>
			 			<input class="col-7" type="password" name="password" id="password">
					 </div>
					 <div>
						<input type="checkbox" id="show-hide" name="show-hide" value="" />
						<label for="show-hide" style="color: white;">Show password</label>
					</div>
			 		<!-- <div class="row mb-3">
			 			<div class="col-4">
			 				<label>Sebagai</label>
			 			</div>
			 			<input class="col-7" type="text" name="sebagai">
			 		</div> -->
			 		<button type="submit" class="btn btn-light btn-lg btn-block" name="login">Login</button>
			 		<div class="register mt-3">
			 			Belum daftar?
			 			<a href="index.php?target=register" class="text-warning font-weight-bold">Register</a>
			 		</div>
			 	</form>
			  </div>
			</div>
	 	</div>
	 </div>
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