<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<link rel="stylesheet" href="berjuangtenan.css">



<div class="row">
	<div class="col-md-12">
		<h2 class="garis">Rekomendasi <b>Buku</b></h2>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<a class="lain" href="index.php?target=katalog_user">Lainnya</a>
		<!-- Carousel indicators -->
		<ol class="carousel-indicators">
			<?php
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
				// require 'database.php';
			?>
			<?php for ($i=0; $i<$jml_item_carousel ; $i++):?>
				<?php 
					$oy = query("SELECT * FROM katalog LIMIT $indeks_buku, $jml_buku");
					
					$indeks_buku += $jml_buku;
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