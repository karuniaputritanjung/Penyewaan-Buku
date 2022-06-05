<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<link rel="stylesheet" href="footer.css">
<!DOCTYPE html>
<html>
<head>
	<title>SEBU</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
   <!--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="bootstrap\bootstrap-4.5.3-dist\css\bootstrap.min.css">

    <style type="text/css">
    	body{
			/*background-image: url(gambar/background/spikes.png);*/
			/*background-image: url(gambar/background/geometric-leaves.png);*/
    		/*background-image: url(gambar/background/oriental-tiles.png);*/
			background-image: url(gambar/background/prism.png);
			
		}
		footer{
			height: 50px;
		}
		.logo{
			width: 150px;
			height: 60px;
		}
    </style>
</head>
<body>

	<?php session_start(); ?>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
			<div class="container justify-content-between">
				<div class="col-8">
					<div class="collapse navbar-collapse mr-3" id="navbarNav">
						<img class="logo mr-4" src="gambar\logo\LOGO WEB 1.png">
					<!-- <a class="mr-3" href="https://fontmeme.com/comic-fonts/"><img src="https://fontmeme.com/permalink/201221/47f07361d181f195a7fe8868dafbea43.png" alt="comic-fonts" border="0"></a> -->
						<?php if(isset($_SESSION['username'])): ?>
							<?php if($_SESSION['level'] == 'admin'): ?>
								<ul class="navbar-nav">
							    	<li class="nav-item <?php echo $_GET['target'] == 'home' ? 'font-weight-bold' : ' '; ?>">
							    		<a class="nav-link text-white" href="index.php?target=home">Home <span class="sr-only">(current)</span></a>
							    	</li>
							    	<li class="nav-item <?php echo $_GET['target'] == 'katalog' ? 'font-weight-bold' : ' '; ?>">
							    		<a class="nav-link text-white" href="index.php?target=katalog">Katalog</a>
							    	</li>
							    	<li class="nav-item <?php echo $_GET['target'] == 'daftar_anggota' ? 'font-weight-bold' : ' '; ?>">
							    		<a class="nav-link text-white" href="index.php?target=daftar_anggota">Daftar Anggota</a>
							    	</li>
							    	<li class="nav-item <?php echo $_GET['target'] == 'transaksi' ? 'font-weight-bold' : ' '; ?>">
							    		<a class="nav-link text-white" href="index.php?target=transaksi">Transaksi</a>
							    	</li>
							    	<li class="nav-item <?php echo $_GET['target'] == 'info' ? 'font-weight-bold' : ' '; ?>">
							    		<a class="nav-link text-white" href="index.php?target=info">Info</a>
							    	</li>
							    </ul>
							<?php else: ?>
								<ul class="navbar-nav">
							    	<li class="nav-item <?php echo $_GET['target'] == 'home' ? 'font-weight-bold' : ' '; ?>">
							    		<a class="nav-link text-white" href="index.php?target=home">Home <span class="sr-only">(current)</span></a>
							    	</li>
							    	<li class="nav-item <?php echo $_GET['target'] == 'loker' ? 'font-weight-bold' : ' '; ?>">
							    		<a class="nav-link text-white" href="index.php?target=loker">Loker</a>
							    	</li>
							    	<li class="nav-item <?php echo $_GET['target'] == 'info' ? 'font-weight-bold' : ' '; ?>">
							    		<a class="nav-link text-white" href="index.php?target=info">Info</a>
							    	</li>
								</ul>
								<form class="form-inline d-flex ml-5 my-2 my-lg-0">
					      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="keyword_user">
					      <!-- <button class="btn btn-outline-light my-2 my-sm-0" type="submit" id="tombol_user">Search</button> -->
					    </form>
							<?php endif ?>
						<?php else: ?>
						<?php endif ?>
					</div>
				</div>
			</div>

			<div class="col-1">
				<div class="container justify-content-end">
					<?php if(isset($_SESSION['username'])): ?>
							<div class="btn-group">
							  <button type="button" class="btn btn-dark text-light font-weight-bold btn-md dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    <?php 
							    	echo ucwords($_SESSION['username']); 
							    ?>
							  </button>
							  <div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="index.php?target=profil">Profil</a>
								<a class="dropdown-item tombol-keluar" href="index.php?target=logout">Logout</a>
							  </div>
							  
							</div>
					<?php endif ?>
				</div>
			</div>
		</nav>
	</header>
	<!-- <div class="container mt-5 mb-5">AAAAA</div> -->
	
	<div class="">
		<?php 
		// echo $SESSION['username'];
			if(isset($_GET['target'])){
				switch ($_GET['target']) {
					case 'logout':
						require('logout.php');
						break;
					case 'home':
						if($_SESSION['level'] == 'admin'){
							require('home.php');
						} 
						else{
							require('home_user.php');
						}
						// require('coba.php');
						break;
					case 'katalog':
						require('katalog.php');
						break;
					case 'katalog_user':
						require('katalog_user.php');
						break;
					case 'daftar_anggota':
						require('daftar_anggota.php');
						break;
					case 'transaksi':
						require('transaksi.php');
						break;
					case 'info':
						require('info.php');
						break;
					case 'loker':
						require('loker.php');
						break;
					case 'tambah_buku':
						require('tambah_buku.php');
						break;
					case 'accept_register':
						require('accept_register.php');
						break;
					case 'accept_tambah':
						require('accept_tambah.php');
						break;
					case 'edit':
						require('edit.php');
						break;
					case 'accept_edit':
						require('accept_edit.php');
						break;
					case 'hapus':
						require('hapus.php');
						break;
					case 'tambah_anggota':
						require('tambah_anggota.php');
						break;
					case 'accept_tambahanggota':
						require('accept_tambahanggota.php');
						break;
					case 'peminjaman':
						require('peminjaman.php');
						break;
					case 'pengembalian':
						require('pengembalian.php');
						break;
					case 'register':
						require('register.php');
						break;
					case 'logout':
						require('logout.php');
						break;
					case 'detail':
						require('detail.php');
						break;
					case 'sewa':
						require('sewa.php');
						break;
					case 'sewa':
						require('sewa.php');
						break;
					case 'profil':
						require('profil.php');
						break;
					case 'tambahgenre':
						require('tambahgenre.php');
						break;
					case 'accgenre':
						require('accgenre.php');
						break;
					case 'searchgenre':
						require('searchgenre.php');
						break;
					case 'export':
						require('export.php');
						break;
					case 'prosessewa':
						require('prosessewa.php');
						break;
					case 'prosesbeli':
						require('prosesbeli.php');
						break;
					default:
						echo "Halaman tidak ditemukan !!";
						// echo $_GET['target'];
						break;
				}
			}
			else{
				require('login.php');
			}
		?>
	</div>

	 
<?php if(isset($_SESSION['username'])): ?>
	<?php if($_SESSION['level'] == 'admin'): ?>
		<footer class="navbar navbar-dark fixed-bottom bg-dark text-center">
	  <!-- <a class="navbar-brand" href="#"></a> -->
	<!--   <div class="text-center">
	  	created by musyaffa choirun man
	  </div> -->
		</footer>
	<?php else: ?>
		<div class="mt-5 pt-5 footer bg-dark">
		<div class="container">
		<div class="row">
			<div class="col-lg-4 col-xs-12 about-company">
			<h2>Kelompok 1</h2>
			<p class="pr-5 text-white-50">Web ini adalah sebuah project kelompok yang digunakan untuk UAS</p>
			<!-- <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p> -->
			</div>
			<div class="col-lg-4 col-xs-12 links">
			<h4 class="mt-lg-0 mt-sm-3">Anggota</h4>
				<ul class="m-0 p-0">
				<li>- <a href="https://www.instagram.com/kanrijung_">Karunia Putri Tanjung / M3119052</a></li>
				<li>- <a href="https://www.instagram.com/echsanputra">Muhammad Echsan Putra / M3119054</a></li>
				<li>- <a href="https://www.instagram.com/taufikhidayanto_">Muhammad Taufik Hidayanto / M3119061</a></li>
				<li>- <a href="https://www.instagram.com/musyaffa44">Musyaffa Choirun Man / M3119063</a></li>
				<li>- <a href="https://www.instagram.com/nenii_nn">Noor Aini / M3119067</a></li>
				</ul>
			</div>
			<div class="col-lg-4 col-xs-12 location">
			<h4 class="mt-lg-0 mt-sm-4">Lokasi</h4>
			<p>TI C / D-3 Teknik Informatika Universitas Sebelas Maret</p>
			<!-- <p class="mb-0"><i class="fa fa-phone mr-3"></i>(541) 754-3010</p>
			<p><i class="fa fa-envelope-o mr-3"></i>info@hsdf.com</p> -->
			</div>
		</div>
		<div class="row mt-5">
			<div class="col copyright">
			<p class=""><small class="text-white-50">© 2020. All Rights Reserved.</small></p>
			</div>
		</div>
		</div>
		</div>
<?php endif ?>
<?php else: ?>
	<footer class="navbar navbar-dark text-light fixed-bottom bg-dark text-center"><small class="text-white-50">
	© 2020. Copyright Kelompok 1 / TI C / D-3 Teknik Informatika / Universitas Sebelas Maret.
	</small></footer>
<?php endif ?>
	 
</body>
<script>
$(document).ready(function(){
	$(".wish-icon i").click(function(){
		$(this).toggleClass("fa-heart fa-heart-o");
	});
});	

$('.tombol-keluar').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
	title: 'Apakah anda yakin?',
	text: "Anda akan logout!",
	type: 'warning',
	showCancelButton: true,
	confirmButtonColor: '#3085d6',
	cancelButtonColor: '#d33',
	confirmButtonText: 'Logout'
	}).then((result) => {
	if (result.value) {
		document.location.href = href;
	}
	})
});
</script>

</html>