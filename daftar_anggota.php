<?php
	require('cek_session.php');
	halamanAdmin();
	require('database.php');
	$queryselect = "SELECT * FROM user ";
	$hasilselect = mysqli_query($koneksi1, $queryselect);
	$jumlah = mysqli_num_rows($hasilselect);
	// echo "Jumlah Buku $jumlah";
?>
<?php if($jumlah): ?>
	<div class="table-responsive d-flex justify-content-center">
		<table class="table w-75 px-3">
		  <thead class="thead-dark px-3">
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Username</th>
		      <th scope="col">Nama Depan</th>
		      <th scope="col">Nama Belakang</th>
		      <th scope="col">Email</th>
		      <th scope="col">Aksi</th>
		    </tr>
		  </thead>
		  <tbody class="px-3">
		  	<?php $i = 1; ?>
		  	<?php while ($row = mysqli_fetch_array($hasilselect)): ?>

		  		<tr class="table-light">
		  			<th scope="row"><?php echo $i++ ?></td>
			  		<td><?php echo $row['username'] ?></td>
			  		<td><?php echo $row['nm_dpn'] ?></td>
			  		<td><?php echo $row['nm_blk'] ?></td>
			  		<td><?php echo $row['email'] ?></td>
			  		<td style="width: 10%">
			  			<a href="index.php?target=edit&id_buku= <?php echo $row['id_buku'] ?>">Edit</a>
			  			<a href="index.php?target=hapus&id_buku= <?php echo $row['id_buku'] ?>">Hapus</a>
			  		</td>
			  		
		  		</tr>			
		  	<?php endwhile ?>
		  </tbody>
		</table>
<?php endif ?>
<div style="margin-bottom: 100px;">

</div>