<?php 
	require('database.php');
	$id_buku = $_GET['id_buku'];
	$queryselect = "SELECT * FROM katalog INNER JOIN genre ON katalog.id_genre=genre.id_genre WHERE id_buku = $id_buku";
	$hasilselect = mysqli_query($koneksi1, $queryselect);
	$row = mysqli_fetch_array($hasilselect);

    $beli = $row['harga']*2;
    $disc = $beli-($beli*40/100);
?>   
<style>
    h3{
        color: #fff;
    }
    .btn.ml-3.btn-light.btn-lg{
        border-radius: 0;
        width: 50%;
        height: 85px;
    }
    .col-3.ml-4{
        margin-left: 10%;
    }
</style>

<div id="penampung"></div>

<div class="col-lg-12 mx-auto">
  <div class="row">
    <div class="col-2 ml-5 mr-3">
    <img src="data/gambar/buku/<?php echo $row['cover'] ?>" width="200px">
    </div>
    <div class="col-5">
        <h3><?php echo $row['judul'] ?></h3>
            <br>
                <div class="row">
                    <div class="col-3" style="color: #fff;">
                        Pengarang
                    </div>
                    <div class="col mr-5" style="color: #fff;">
                        <?php echo $row['pengarang'] ?>
                    </div>
                </div>
            <br>
        <div class="row">
            <div class="col-3" style="color: #fff;">
                Tahun Terbit
            </div>
            <div class="col mr-5" style="color: #fff;">
                <?php echo $row['tahun terbit'] ?>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3" style="color: #fff;">
                Penerbit
            </div>
            <div class="col mr-5" style="color: #fff;">
                <?php echo $row['penerbit'] ?>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3" style="color: #fff;">
                Genre
            </div>
            <div class="col mr-5" style="color: #fff;">
                <?php echo $row['genre'] ?>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3" style="color: #fff;">
                Harga
            </div>
            <div class="col mr-5" style="color: #fff;">
                <?php echo "Rp ".number_format($row['harga']) ?>
            </div>
        </div>
    </div>
    <?php
	$diskon = $row['harga']-($row['harga']*60/100);
	?>
    <div class="col" style="color: #fff;">
      <h3>Sewa / Beli</h3>
      <br>
      <div class="row">
      <a class="btn ml-3 btn-light btn-lg text-dark tombol-sewa" href="index.php?target=prosessewa&id_buku= <?php echo $row['id_buku'] ?>" >
            Sewa <br>
            <strike><?php echo "Rp ".number_format($row['harga']) ?></strike> <b><?php echo "Rp ".number_format($diskon) ?></b>
      </a> 
    </div>
      <br>
      <div class="row">
      <a class="btn ml-3 btn-light btn-lg text-dark tombol-beli" href="index.php?target=prosesbeli&id_buku= <?php echo $row['id_buku'] ?>" >
            Beli <br>
            <strike><?php echo "Rp ".number_format($beli) ?></strike> <b><?php echo "Rp ".number_format($disc) ?></b>
      </a>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-11 ml-2">
    <br>
        <div class="col-3 ml-md-4" style="color: #fff;">
            <h4>Deskripsi</h4>
        </div>
        <div class="col ml-md-4" style="color: #fff; text-align:justify;">
            <?php echo $row['deskripsi'] ?>
        </div>
</div>

<div class="container-xl">
    <?php require('rekomendasi_buku.php') ?>
</div>
<div style="margin-bottom: 100px;">

</div>

<script>
    $('.tombol-sewa').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
    title: 'Apakah anda yakin?',
    text: "Anda akan menyewa buku ini!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Sewa'
    }).then((result) => {
    if (result.value) {
        document.location.href = href;
    }
    })
    });

    $('.tombol-beli').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
    title: 'Apakah anda yakin?',
    text: "Anda akan membeli buku ini!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Beli'
    }).then((result) => {
    if (result.value) {
        document.location.href = href;
    }
    })
    });
</script>

