<?php 
	require 'database.php';
	$username = $_SESSION['username'];
	$buku = query("SELECT * FROM user INNER JOIN transaksi ON user.username=transaksi.username INNER JOIN katalog ON katalog.id_buku=transaksi.id_buku WHERE user.username = '$username'");
	$jumlah = mysqli_num_rows($buku);

	// $queryselect = "select * from tambahsewa LEFT JOIN tambahmember ON tambahmember.nim=tambahsewa.nim LEFT JOIN tambahbuku ON tambahbuku.kodebuku=tambahsewa.kodebuku";
?>

<div id="penampung2">
	<?php if($jumlah): ?>
		<!-- <div class='alert alert-success' role='alert'> -->
		  <!-- <?php echo $jumlah ?> -->
		  <div class="container d-flex flex-wrap">
			  <?php while($rows=mysqli_fetch_assoc($buku)): 
				$status = $rows['status'];
				if($status=='sewa'):?>
			  	<div class="card mb-3 ml-3" style="width: 16rem;">
		  			<img src="data/gambar/buku/<?php echo $rows['cover'] ?>" alt="<?php echo $rows['cover'] ?>" width ="100px" height="150px" class="mt-3 mx-auto">
			      <div class="card-body">
			        <h5 class="card-title">
			        	<?php echo $rows['judul'] ?>
		        	</h5>
					<p class="card-text" style="height: 65%;">
						<?php echo substr($rows['deskripsi'], 0, 100) ?>
						<?php echo ". . . . <br><a href='#'>Baca</a>";?>
					</p>
					<p class="card-text">
						<small class="text-muted">
							<?php echo "Sisa waktu sewa ".sisa_waktu($rows['tanggal_transaksi'], $rows['durasi_sewa']) ?>
						</small>
					</p>
			      </div>
				</div>	
				<?php else: ?>
					<div class="card mb-3 ml-3" style="width: 16rem;">
		  			<img src="data/gambar/buku/<?php echo $rows['cover'] ?>" alt="<?php echo $rows['cover'] ?>" width ="100px" height="150px" class="mt-3 mx-auto">
			      <div class="card-body">
			        <h5 class="card-title">
			        	<?php echo $rows['judul'] ?>
		        	</h5>
					<p class="card-text" style="height: 65%;">
						<?php echo substr($rows['deskripsi'], 0, 100) ?>
						<?php echo ". . . . <br><a href='#'>Baca</a>";?>
					</p>
					<p class="card-text">
						<small class="text-muted">
							<?php echo "Akses selamanya "?>
						</small>
					</p>
			      </div>
				</div>
				<?php endif ?>
			<?php endwhile ?>
		</div>
		<!-- </div> -->
	<?php else: ?>
		<div class='alert alert-warning text-center' role='alert'>
		  <!-- <?php echo mysqli_error($koneksi1) ?> -->
		  Tidak ada buku yang disewa
		</div>
	<?php endif ?>
</div>
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