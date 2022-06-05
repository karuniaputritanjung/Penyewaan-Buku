<?php 
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$file="data/data.txt";
	$openfile=fopen($file, 'a');
	fwrite($openfile, $nama);
	fwrite($openfile, "\n");
	fwrite($openfile, $alamat);
	fwrite($openfile, "\n");
	fwrite($openfile, $email);
	fwrite($openfile, "\n");
	fwrite($openfile, $password);
	fwrite($openfile, "\n");
	fclose($openfile);
?>
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Anda Sudah Terdaftar</h5>
  </div>
</div>
<?php 
	$openfile=fopen($file, 'r');
	while (true) {
		$kata = fgets($openfile);
		if($kata==null){
			break;
		}
		echo $kata;
		echo "</br>";
	}
?>