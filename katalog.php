<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<?php 
	// require('cek_session.php');
	// halamanAdmin();
	require('database.php');
	$queryselect = "SELECT * FROM katalog,genre WHERE katalog.id_genre = genre.id_genre";
	$hasilselect = mysqli_query($koneksi1, $queryselect);
	$jumlah = mysqli_num_rows($hasilselect);
	// echo "Jumlah Buku $jumlah";
?>
<!-- <div class="container bg-white"> -->
<div class="container" style="margin: 0 0 30px 153px">
	<form class="form-inline my-2 my-lg-0">
	  <input class="form-control mr-sm-2 bg-white" type="search" placeholder="Search" aria-label="Search" id="keyword">
	  <!-- <button class="btn btn-secondary font-weight-bold my-2 my-sm-0" type="submit" id="tombol_cari">Search</button> -->
	</form>
</div>

<?php if($jumlah): ?>
	<div id="container">
	<div class="table-responsive d-flex justify-content-center">
		<table class="table w-75 px-3">
		  <thead class="thead-dark px-3 mb-0">
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
		  		<tr class="table-light">
		  			<th scope="row"><?php echo $i++ ?></td>
			  		<td><?php echo $row['judul'] ?></td>
			  		<td><?php echo $row['pengarang'] ?></td>
			  		<td><?php echo $row['penerbit'] ?></td>
			  		<td><?php echo $row['genre'] ?></td>
			  		<td>
			  			<img src="data/gambar/buku/<?php echo $row['cover'] ?>" alt="<?php echo $row['cover'] ?>" width = "100">
			  		</td>
			  		<td style="width: 10%">
			  			<a href="index.php?target=edit&id_buku= <?php echo $row['id_buku'] ?>">Edit</a>
			  			<a class="tombol-hapus" href="index.php?target=hapus&id_buku= <?php echo $row['id_buku'] ?>&cover=<?php echo $row['cover'] ?>">Hapus</a>
			  		</td>
			  		
		  		</tr>			
		  	<?php endwhile ?>
		  </tbody>
		</table>
	</div>
	</div>

<?php endif ?>
<div style="margin-bottom: 100px;">

</div>
<!-- </div> -->
<script >
	
var keyword = document.getElementById('keyword');
var tombol_cari = document.getElementById('tombol_cari');
var container = document.getElementById('container');

// menambahkan event ketika keyword ditulis
keyword.addEventListener('keyup',function () {
	
	// buat objek baru
	var xhr = new XMLHttpRequest();

	// mengecek kesiapan ajax
	xhr.onreadystatechange = function() {
		if (xhr.readyState==4 && xhr.status==200) {
			// console.log(xhr.responseText);
			container.innerHTML = xhr.responseText;
		}
	}

	//esekusi ajax
	xhr.open('GET','ajax/searchBuku.php?keyword='+keyword.value, true);
	xhr.send();

});

$('.tombol-hapus').on('click', function (e) {

e.preventDefault();
const href = $(this).attr('href');

Swal.fire({
title: 'Apakah anda yakin?',
text: "Buku akan dihapus!",
type: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Delete'
}).then((result) => {
if (result.value) {
	document.location.href = href;
}
})
});
</script>