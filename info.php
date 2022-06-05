<?php require('cek_session.php'); ?>
<div id="penampung2">
	<div class="container d-flex justify-content-center">
		<div class="card text-white bg-primary mb-3" style="width: 18rem;">
		  <div class="card-header">Tentang Website</div>
		  <div class="card-body">
		    <!-- <h5 class="card-title">Primary card title</h5> -->
			<p class="card-text">Website ini dibuat oleh: </p> 
			<p> Kelompok 1 / TI C</p>
			<p class="card-text">D3-Teknik Informatika</p>
			<p class="card-text">Universitas Sebelas Maret</p>
		  </div>
		</div>
	</div>
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