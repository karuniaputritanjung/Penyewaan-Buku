<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<link rel="stylesheet" href="berjuangtenan.css">
<?php 
	require('cek_session.php');
?>
<div id="penampung2">
	<div class="col-sm-10 mx-auto">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
								<img class="img-fluid rounded d-block w-100" src="promo1.png" alt="First slide">
								</div>
								<div class="carousel-item">
								<img class="img-fluid rounded d-block w-100" src="promo2.png" alt="Second slide">
								</div>
								<div class="carousel-item">
								<img class="img-fluid rounded d-block w-100" src="promo 3.png" alt="Third slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
						<br>
						<div class="container-xl">
		<div class="row">
			<div class="col-md-12">
				<h2 class="garis">Rekomendasi <b>Buku</b></h2>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<a class="lain" href="index.php?target=katalog_user">Lainnya</a>
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
				<?php
					require 'database.php';
					$queryselect = "SELECT * FROM katalog LIMIT 0, 12";
					$hasilselect = mysqli_query($koneksi1, $queryselect);
					$row = mysqli_fetch_array($hasilselect);
					$jumlah = mysqli_num_rows($hasilselect);
					$jmltampil = $jumlah%4;
					if($jmltampil==0){
						$jml_item_carousel=$jumlah/4;
					}else{
						$jml_item_carousel=floor($jumlah/4);
					}

					for ($i=0; $i<$jml_item_carousel ; $i++):
						if($i==0){
							$actives = "active";
						}else{
							$actives = "";
						}	
					?>
					<li data-target="#myCarousel" data-slide-to="<?php $i ?>" class="<?php $actives ?>"></li>
					<?php endfor ?> 
				</ol>  
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner carousel1">
					<?php 
						$jml_buku = 4;
						$indeks_buku = 0;
						// $jml_item_carousel = 3;
					?>
					<?php for ($i=0; $i<$jml_item_carousel ; $i++):?>
						<?php 
							$oy = query("SELECT * FROM katalog LIMIT $indeks_buku, $jml_buku");
							
							$indeks_buku += $jml_buku;
							// echo"
							// 	<div class='alert alert-danger text-center' role='alert'>
							// 		$indeks_buku $indeks_buku
							// 	</div>
							// ";
							// echo "$indeks_buku";
						?>
						<div class="item carousel-item <?php echo $i == 0 ? 'active' : ' '; ?>">
							<div class="row">
								<?php while ($baris=mysqli_fetch_array($oy)): ?>
									
									<div class="col-sm-3">
										<div class="thumb-wrapper">
											<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
											<div class="img-box">
												<img src="data/gambar/buku/<?php echo $baris['cover'] ?>" class="img-fluid" alt="">									
											</div>
											<div class="thumb-content">
												<h4><?php echo $baris['judul'] ?></h4>									
												<!-- <div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div> -->
												<?php
												$diskon = $baris['harga']-($baris['harga']*60/100);
												?>
												<p class="item-price"><strike><?php echo "Rp ".number_format($baris['harga']) ?></strike> <b><?php echo "Rp ".number_format($diskon) ?></b></p>
												<!-- <a href="#" class="btn btn-primary">Add to Cart</a> -->
												<a class="btn btn-primary" href="index.php?target=detail&id_buku= <?php echo $baris['id_buku'] ?>">Detail</a>
											</div>						
										</div>
									</div>
								<?php endwhile ?>
							</div>
						</div>
					<?php endfor ?>
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control-prev prev1" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control-next next1" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
			</div>
		</div>
		<br>
						</div>
						</div>
						<div class="col-lg-10 mx-auto">
		<?php
		$jml_genre = 10;
		$indeks_genre = 0;
		for ($i=0; $i<$jml_genre ; $i++):?>
			<?php 
				$woy = query("SELECT * FROM genre LIMIT $indeks_genre, $jml_genre");
				
				$indeks_genre =+ $jml_genre;
			?>
							<div class="box-wrap">
							<div class="row mx-auto">
							<?php while ($data=mysqli_fetch_array($woy)): ?>
											<div class="col-sm-3">
												<button class="genre mt-1">
												<a class="p-0 d-flex align-items-center" href="index.php?target=searchgenre&kodetarget=<?php echo $data['id_genre'] ?>">
												<div align="left" style="width: 150px;"><?php echo $data['genre'] ?></div>
												<img class="ggenre" src="data/gambar/genre/<?php echo $data['logo'] ?>" >
												</a>
												</button>
											</div>
									<?php endwhile ?>
								</div>
							</div>
							<?php endfor ?>
	</div>
		<!-- Button trigger modal -->
</div>
<div style="margin-bottom: 100px;"></div>
<script >	
	var keyword = document.getElementById('keyword_user');
	var tombol_cari = document.getElementById('tombol_cari');
	var container = document.getElementById('penampung2');

	// menambahkan event ketika keyword ditulis
	keyword.addEventListener('keyup',function () {
		
		// buat objek baru
		var xhr = new XMLHttpRequest();

		// mengecek kesiapan ajax
		xhr.onreadystatechange = function() {
			if (xhr.readyState==4 && xhr.status==200) {
				// console.log(xhr.responseText);
				// console.log('ajax ok!');
				container.innerHTML = xhr.responseText;
			}
		}

		//esekusi ajax
		xhr.open('GET','ajax/searchBukuUser.php?keyword='+keyword.value, true);
		xhr.send();

	});
</script>