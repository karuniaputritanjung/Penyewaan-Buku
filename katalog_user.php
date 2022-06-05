<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<link rel="stylesheet" href="berjuangtenan.css">
<div id="penampung2">
<?php 
	// require('../cek_session.php');
	// halamanAdmin();
	require('database.php');
	$queryselect = "select * from katalog";
	$hasilselect = mysqli_query($koneksi1,$queryselect);
	$jumlah = mysqli_num_rows($hasilselect);
?>

<?php if($jumlah): ?>
	<div class="container d-flex flex-wrap">
	<?php $x = 0?>	
	<?php while ($row = mysqli_fetch_array($hasilselect)): ?>
		<!-- no urut -->
		<?php $x++ ?> 
		
		<div class="card mb-3 ml-3" style="width: 16rem;">
	  			<img src="data/gambar/buku/<?php echo $row['cover'] ?>" alt="<?php echo $row['cover'] ?>" width ="100px" height="150px" class="mt-3 mx-auto">
		      <div class="card-body">
		        <h5 class="card-title"><?php echo $row['judul'] ?></h5>
				<p class="card-text" style="height: 65%;"><?php echo substr($row['deskripsi'], 0, 100) ?>
				<?php echo ". . . . <br><a href=index.php?target=detail&id_buku=". $row['id_buku'].">Selengkapnya</a>";?>
				</p>
				<p class="card-text"><small class="text-muted"><?php echo "Rp ".number_format($row['harga']) ?></small></p>
		      </div>
		    </div>	
	<?php endwhile ?>
	</div>
	<div style="margin-bottom: 100px;">

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
