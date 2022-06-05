<?php 
	require('cek_session.php'); 
	require('database.php');
	// $hasilselect = query("SELECT * FROM user INNER JOIN transaksi ON user.username=transaksi.username INNER JOIN katalog ON katalog.id_buku=transaksi.id_buku");

	$hasilselect = query("SELECT * FROM transaksi INNER JOIN user ON transaksi.username = user.username INNER JOIN katalog WHERE transaksi.id_buku = katalog.id_buku");
	$jumlah = mysqli_num_rows($hasilselect);
?>
<?php if($jumlah): ?>
	<div id="container">
	<a href="export.php" class="btn btn-danger" style="margin: 0 0 20px 13%" role="button">
		Export ke Excel
	</a>
	<div class="table-responsive d-flex justify-content-center">
		<table class="table w-75 px-3">
		  <thead class="thead-dark px-3 mb-0">
		    <tr>
		      <th scope="col">Tanggal Sewa</th>
		      <th scope="col">Kode Transaksi</th>
		      <th scope="col">Nama Pengguna</th>
              <th scope="col">Buku</th>
              <th scope="col">Status</th>
		      <th scope="col">Durasi Sewa</th>
		      <th scope="col">Sisa Waktu</th>
		    </tr>
		  </thead>
		  <tbody class="px-3 mt-0">
		  	<?php $i = 1; ?>
		  	<?php while ($row = mysqli_fetch_array($hasilselect)): ?>
		  		<tr class="table-light">
			  		<td><?php echo $row['tanggal_transaksi'] ?></td>
			  		<td><?php echo $row['kode_transaksi'] ?></td>
			  		<td><?php echo $row['nm_dpn'].' '.$row['nm_blk'] ?></td>
                      <td><?php echo $row['judul'] ?></td>
                      <td><?php echo $row['status'] ?></td>
			  		<td><?php echo $row['durasi_sewa'] ?></td>
			  		<td><?php echo sisa_waktu($row['tanggal_transaksi'],$row['durasi_sewa']) ?></td>
			  		<!-- <td style="width: 10%">
			  			<a href="index.php?target=edit&id_buku= <?php echo $row['id_buku'] ?>">Edit</a>
			  			<a href="index.php?target=hapus&id_buku= <?php echo $row['id_buku'] ?>&cover=<?php echo $row['cover'] ?>">Hapus</a>
			  		</td> -->
			  		
		  		</tr>			
		  	<?php endwhile ?>
		  </tbody>
		</table>
	</div>
	</div>

<?php endif ?>