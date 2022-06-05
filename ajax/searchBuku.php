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
	<!-- <div id="container"> -->
	<div class="table-responsive d-flex justify-content-center">
		<table class="table w-75 px-3">
		  <thead class="text-light bg-primary px-3 mb-0">
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Judul</th>
		      <th scope="col">Pengarang</th>
		      <th scope="col">Penerbit</th>
		      <th scope="col">Genre</th>
		      <th scope="col">Cover</th>
		      <th scope="col">Aksi</th>
		    </tr>
		  </thead>
		  <tbody class="px-3 mt-0">
		  	<?php $i = 1; ?>
		  	<?php while ($row = mysqli_fetch_array($hasilselect)): ?>
		  		<tr class="table-primary">
		  			<th scope="row"><?php echo $i++ ?></td>
			  		<td><?php echo $row['judul'] ?></td>
			  		<td><?php echo $row['pengarang'] ?></td>
			  		<td><?php echo $row['penerbit'] ?></td>
			  		<td><?php echo $row['genre'] ?></td>
			  		<td>
			  			<img src="data/gambar/buku/<?php echo $row['cover'] ?>" alt="<?php echo $row['cover'] ?>" width = "100">
			  		</td>
			  		<td style="width: 10%">
			  			<a href="../index.php?target=edit&id_buku= <?php echo $row['id_buku'] ?>">Edit</a>
			  			<a href="../index.php?target=hapus&id_buku= <?php echo $row['id_buku'] ?>">Hapus</a>
			  		</td>
			  		
		  		</tr>			
		  	<?php endwhile ?>
		  </tbody>
		</table>
	</div>
	<!-- </div> -->
<?php else: ?>
	<div class="alert alert-warning text-center" role="alert">
	  Buku tidak ditemukan.
	</div>
<?php endif ?>