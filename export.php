<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel</title>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		table{
			margin: 20px auto;
			border-collapse: collapse;
		}
		table th,
		table td{
			border: 1px solid #3c3c3c;
			padding: 3px 8px;

		}
		a{
			background: blue;
			color: #fff;
			padding: 8px 10px;
			text-decoration: none;
			border-radius: 2px;
		}
	</style>
</head>
<body>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Transaksi.xls");
	?>

	<!-- <center>
		<h1>Export Data Ke Excel</h1>
	</center> -->
	<?php 
		require('database.php');
		$hasilselect = query("SELECT * FROM transaksi INNER JOIN user ON transaksi.username = user.username INNER JOIN katalog WHERE transaksi.id_buku = katalog.id_buku");
		$jumlah = mysqli_num_rows($hasilselect);
	?>

	<!-- <table border="1">
		<tr>
			<th>Kode Aduan</th>
			<th>Judul</th>
			<th>Pengirim</th>
			<th>Deskripsi</th>
			<th>Status Aduan</th>
		</tr>
		<?php while($rows = mysqli_fetch_array($hasil)): ?>
			<tr>
				<th><?php echo $rows['kode_aduan'] ?></th>
				<th><?php echo $rows['judul'] ?></th>
				<th><?php echo $rows['email'] ?></th>
				<th><?php echo $rows['deskripsi'] ?></th>
				<th><?php echo $rows['status_aduan'] ?></th>
			</tr>
		<?php endwhile ?>
		
	</table> -->
	<div id="container">
		<div class="table-responsive d-flex justify-content-center">
			<table class="table w-75 px-3">
			  <thead class="text-light bg-primary px-3 mb-0">
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
			  		<tr class="table-primary">
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
</body>
</html>