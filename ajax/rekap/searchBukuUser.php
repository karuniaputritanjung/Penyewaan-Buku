<?php 
	// require('../cek_session.php');
	// halamanAdmin();
	require('../database.php');
	
	$keyword = $_GET['keyword'];
	$queryselect = "SELECT * FROM katalog,genre WHERE katalog.id_genre = genre.id_genre 
	AND
					(judul LIKE '%$keyword%' OR
					pengarang LIKE '%$keyword%' OR
					penerbit LIKE '%$keyword%' OR
					genre LIKE '%$keyword%'
					)";
	$hasilselect = mysqli_query($koneksi1, $queryselect);
	echo $jumlah = mysqli_num_rows($hasilselect);
	// echo "Jumlah Buku $jumlah";
?>

<?php if($jumlah): ?>
	<div class="container d-flex flex-wrap">
	<?php $x = 0?>	
	<?php while ($row = mysqli_fetch_array($hasilselect)): ?>
		<!-- no urut -->
		<?php $x++ ?> 

		<div class="card mb-3" style="max-width: 540px;">
		  <div class="row no-gutters">
		    <div class="col-md-4">
	  			<img src="data/gambar/buku/<?php echo $row['cover'] ?>" alt="<?php echo $row['cover'] ?>" width ="100 px" class="card-img">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">
		        <h5 class="card-title"><?php echo $row['judul'] ?></h5>
		        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
		        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

		        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo "detail".$x ?>">
				  Detail
				</button>

				<!-- Modal -->
				<div class="modal fade" id="<?php echo "detail".$x ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content bg-primary text-white">
				      <div class="modal-header">
				        <h5 class="modal-title text-center" id="exampleModalLabel">Detail</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	<div class="container">
				      		<div class="row">
					      		<div class="col"></div>
					      		<div class="col">
							       	<img src="data/gambar/buku/<?php echo $row['cover'] ?>" alt="<?php echo $row['cover'] ?>" width ="50%" class="card-img">
					      		</div>
						       	<div class="col"></div>
				      		</div>
				      	</div>
				       	<div class="container justify-content-center">
				       		<div class="row justify-content-center my-2">
				       			<div class="col-3">
				       				Judul
				       			</div>
				       			<div class="col-7 justify-content-center">
				       				<?php echo $row['judul']; ?>
				       			</div>
				       		</div>
				       		<div class="row my-2 justify-content-center">
				       			<div class="col-3">
				       				Pengarang
				       			</div>
				       			<div class="col-7">
				       				<?php echo $row['pengarang']; ?>
				       			</div>
				       		</div>
				       		<div class="row my-2 justify-content-center">
				       			<div class="col-3">
				       				Penerbit
				       			</div>
				       			<div class="col-7">
				       				<?php echo $row['penerbit']; ?>
				       			</div>
				       		</div>
				       		<div class="row my-2 justify-content-center">
				       			<div class="col-3">
				       				Deskripsi
				       			</div>
				       			<div class="col-7">
				       				<?php
				       					// echo $row['deskripsi']; 
				       				?>
				       				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				       				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				       				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				       				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				       				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				       				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				       			</div>
				       		</div>
				       	</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <a class="btn btn btn-success" href="index.php?target=sewa" role="button">Sewa</a>
				      </div>
				    </div>
				  </div>
				</div>

		      </div>
		    </div>
		  </div>
		</div>		
	<?php endwhile ?>
	</div>
<?php else: ?>
	<div class="alert alert-warning text-center" role="alert">
	  Buku tidak ditemukan.
	</div>
<?php endif ?>