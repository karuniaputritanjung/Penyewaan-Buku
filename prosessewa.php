                <?php 
                require('database.php');
                $id_buku = $_GET['id_buku'];
                $queryselect = "SELECT * FROM katalog INNER JOIN genre ON katalog.id_genre=genre.id_genre WHERE id_buku = $id_buku";
                $hasilselect = mysqli_query($koneksi1, $queryselect);
                $row = mysqli_fetch_array($hasilselect);
                
                    $username = $_SESSION['username'];
                    $waktu_lengkap = now();
                    $pisah_waktu = explode(" ",$waktu_lengkap);
                    $hari = $pisah_waktu[0];
                    $tanggal = $pisah_waktu[1];
                    $jam = $pisah_waktu[2];

                    $durasi = 30;
                    $inputSewa = query("INSERT INTO transaksi VALUES ('', '$username','$id_buku', 'sewa', '$tanggal', '$jam', '$hari', $durasi)");

                    if ($inputSewa) :?>
                    <script>
                    Swal.fire({
					type: 'success',
					title: 'Sewa Berhasil',
					showConfirmButton: false,
					timer: 1300
					}).then((result) => {
						if (
							result.dismiss === Swal.DismissReason.timer
						) {
							document.location.href = 'index.php?target=loker';
						}
                        })
                    </script>
                <?php endif ?>