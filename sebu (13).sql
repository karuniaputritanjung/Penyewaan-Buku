-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 03:35 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sebu`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
`id_anggota` int(11) NOT NULL,
  `nama_dpn` varchar(50) NOT NULL,
  `nama_blk` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_dpn`, `nama_blk`, `alamat`, `email`, `foto`) VALUES
(1, 'Musyaffa', 'Choirun Man', 'Karang, Menuran, Baki, Sukoharjo', 'musyaffacho@gmail.com', 0x356664333836303530316166352e6a706567),
(2, 's', '', '', '', 0x356664336330346437303133642e);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id_genre` varchar(3) CHARACTER SET latin1 DEFAULT NULL,
  `genre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `logo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `genre`, `logo`) VALUES
('FIK', 'Fiksi', 0x356665316366393133616639302e66696b73692e706e67),
('BIO', 'Biografi', 0x356665316366613430396364612e62696f67726166692e706e67),
('MIS', 'Misteri', 0x356665316366623039346465332e6d6973746572692e706e67),
('ENS', 'Ensiklopedia', 0x356665316366623962333763392e656e73692e706e67),
('PEN', 'Pendidikan', 0x356665316366633434303731342e646f776e6c6f61642e706e67),
('HRR', 'Horror', 0x356665316366636539653935632e686f726f722e706e67),
('KIS', 'Kisah Inspiratif', 0x356665316366653237636234622e696e73706972617469662e706e67),
('KMK', 'Komik', 0x356665316366656262653037362e6b6f6d696b2e706e67),
('RMC', 'Romance', 0x356665316366663435313731642e726f6d616e73612e706e67),
('SAS', 'Sastra', 0x356665316430313231643937352e7361737472612e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE IF NOT EXISTS `katalog` (
`id_buku` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tahun terbit` varchar(10) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `id_genre` varchar(3) DEFAULT NULL,
  `cover` blob NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id_buku`, `judul`, `tahun terbit`, `pengarang`, `penerbit`, `id_genre`, `cover`, `deskripsi`, `harga`) VALUES
(18, 'Negeri Para Bedebah', '2012', 'Tere Liye', 'Gramedia Pustaka Utama', 'KMK', 0x356665306361313433623162612e6a706567, 'Thomas, seorang konsultan keuangan profesional sekaligus founder perusahaan konsultasi keuangan terkemuka berlabel Thomas & Co. yang serba misterius. Kemampuaanya dalam bidang ekonomi tidak diragukan lagi, ia sering diundang sebagai pembicara pertemuan-pertemuan besar di dunia. Namun ketika ditelusuri latar belakangnya, semua gelap.', 60000),
(19, 'Bumi', '2014', 'Tere Liye', 'Gramedia Pustaka Utama', 'FIK', 0x356665306361396361663832632e6a706567, 'Raib, seorang gadis berumur 15 tahun. Ia sama seperti remaja lainya. Kecuali satu hal, Sesuatu yang ia simpan sendiri sejak kecil. Sesuatu yang menakjubkan. Raib bisa menghilang. Cukup dengan menutup wajah dengan kedua tangan tubuhnya pun menghilang. Kekuatan aneh itu telah ada sejak ia masih kecil, bahkan sejak umur 2 tahun Raib suka sekali bermain petak umpat bersama orangtuanya. ', 80000),
(20, 'Bintang', '2017', 'Tere Liye', 'Gramedia Pustaka Utama', 'FIK', 0x356665306361653939343837372e6a706567, 'Raib, Seli dan Ali meneruskan petualangan mereka. Mereka harus menemukan pasak bumi yang akan di runtuh kan oleh sekretaris Dewan kota. Oleh karna itu, Raib, Seli dan Ali melibatkan orang-orang yang berasal dari klan Bulan dan Matahari. Petualangan kali ini dibantu oleh Miss Selena sebagai pemimpin rombongan, juga 10 anggota pasukan bayangan dan pasukan matahari.', 85000),
(21, 'Selena', '2020', 'Tere Liye', 'Gramedia Pustaka Utama', 'FIK', 0x356665306362346336326230352e6a706567, 'Buku Selena berlatar di Klan Bulan, menceritakan sosok Selena guru matematika Raib, Seli, dan Ali di Klan Bumi. Kisahnya dimulai saat Selena berusia 15 tahun, menjadi anak yatim piatu karena Ayahnya meninggal, dan kemudian menyusul ibunya, hidup miskin dan tinggal di Distrik Sabit Enam.', 90000),
(28, 'Harry Potter', '1978', 'J.K Rowling', 'Gramedia', 'HRR', 0x356665313738646530656564332e6a706567, 'Harry Potter and the Deathly Hallows adalah buku ketujuh dan terakhir dari seri novel Harry Potter oleh J. K. Rowling.', 100000),
(29, 'Hafalan Shalat Delisa', '2005', 'Tere Liye', 'Republika', 'FIK', 0x356665316138636336383464612e6a706567, 'Kisah ini menceritakan gadis cilik bernama Delisa. Ia merupakan anak bungsu di dalam keluarganya. Adapun kakak-kakak dari Delisa adalah Cut Fatimah, Cut Zahra dan juga Cut Aisyah. Keluarga Delisa berdomisili di Lhok Nga. Delisa dan saudara-saudaranya hanya tinggal bersama Ummi, sebab sang Abi bekerja sebagai mekanik kapal yang berbulan-bulan ikut di kapal yang berlayar.', 50000),
(30, 'Pulang', '2015', 'Tere Liye', 'Republika', 'FIK', 0x356665316162643630666665362e6a706567, 'Sebuah kisah tentang perjalanan pulang, melalui pertarungan demi pertarungan, untuk memeluk erat semua kebencian dan rasa sakit."', 100000),
(31, 'Pergi', '2018', 'Tere Liye', 'Republika', 'FIK', 0x356665316163333138323061312e6a706567, 'Sebuah kisah tentang menemukan tujuan, ke mana hendak pergi, melalui kenangan demi kenangan masa lalu, pertarungan hidup-mati, untuk memutuskan ke mana langkah kaki akan dibawa.', 90000),
(32, 'Chairil', '2016', 'Hasan Aspahani', 'GagasMedia', 'BIO', 0x356665316532343165653238622e6a706567, 'Ini adalah kisah penyair kenamaan Indonesia yang telah menjadi milik semua orang. Sebuah biografi tentang kisah di balik puisi serta renjana hatinya. Chairil mungkin mati muda, dalam usia 27 tahun, tapi nyala dan tenaga hidup sajak-sajaknya, akan terus hidup 1000 tahun lamanya.', 100000),
(33, 'Ensiklopedia Sains', '2015', 'Usborne', 'Gramedia', 'ENS', 0x356665316532633665343761382e6a706567, 'Buku ini memperkenalkan seluruh bidang ilmu pengetahuan, mulai dari fisika, kimia, biologi, teknologi informasi, ilmu bumi, astronomi, hingga ilmu-ilmu baru, ', 50000),
(34, 'Fisika Dasar 1', '2017', 'Astuti Salim dan Suryani Taib', 'Gramedia', 'PEN', 0x356665316533363861653066342e6a706567, 'Fisika merupakan cabang utama sains karena prinsip-prinsipnya dijadikan dasar bagi cabang-cabang sains yang lain. Selain itu, fisika juga merupakan salah satu ilmu yang paling dasar dari ilmu pengetahuan. Buku ajar fisika dasar ini mencoba membantu memahami sistem fisika dasar yang diulas lebih sederhana, karena menambahkan aplikasi yang ada dalam setiap bab agar lebih mudah dipahami.', 100000),
(35, 'Critical Eleven', '2015', 'Ika Natassa', 'Gramedia', 'RMC', 0x356665316533663139336332662e6a706567, 'Critical Eleven adalah sebuah novel karya Ika Natassa yang diterbitkan oleh Gramedia Pustaka Utama tahun 2015. Buku ini bercerita tentang pertemuan antara Ale dan Anya yang begitu istimewa. Keduanya bertemu dalam waktu 11 menit saat di pesawat di mana 3 menit bersifat kritis dan 8 menit sebelum berpisah.', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`kode_transaksi` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tanggal_transaksi` varchar(20) NOT NULL,
  `jam_transaksi` varchar(10) NOT NULL,
  `hari_transaksi` varchar(10) NOT NULL,
  `durasi_sewa` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kode_transaksi`, `username`, `id_buku`, `status`, `tanggal_transaksi`, `jam_transaksi`, `hari_transaksi`, `durasi_sewa`) VALUES
(48, 'safa', 30, 'sewa', '24/12/2020', '13:18:04', '4', 30),
(50, 'safa', 28, 'sewa', '24/12/2020', '20:51:01', '4', 30),
(51, 'musyaffa', 29, 'sewa', '24/12/2020', '21:53:05', '4', 30),
(52, 'safa', 19, 'sewa', '25/12/2020', '08:33:27', '5', 30),
(64, 'taufikh', 19, 'sewa', '25/12/2020', '09:35:36', '5', 30),
(79, 'taufikh', 18, 'sewa', '25/12/2020', '11:45:36', '5', 30),
(83, 'taufikh', 34, 'sewa', '25/12/2020', '15:32:20', '5', 30),
(84, 'taufikh', 35, 'beli', '25/12/2020', '15:32:31', '5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nm_dpn` varchar(15) NOT NULL,
  `nm_blk` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nm_dpn`, `nm_blk`, `email`, `level`) VALUES
('admin', '$2y$10$2Pu4gMKqkReWny8hHfr4X.lUkteX.K7HhL5rqIXZeyjw1VU/wZ5au', '', '', '', 'admin'),
('Ani', '$2y$10$zdQXvC3wL1Py4Re2l9ao0eBpOX.L1Bu7AWYBqay2Wejv95pl7MhF6', '', '', '', 'pengunjung'),
('hata', '$2y$10$CB6.hqH582Ef3vLRceH10eQspb9jl5htrznl22RnRR5nM0ccmEPsK', '', '', '', 'admin'),
('jojo', '$2y$10$ES7HBLmzoWq1/QUUr.H8P.GDZbySMkppfgffvSlGn/d/mvO1ZHKI.', '', '', '', 'admin'),
('musyaffa', '$2y$10$Xe.HtFWPnwE7w22tj.KPIu/F2e0J0DvqQnW4is1DFUf9v/3qFZh9.', 'Musyaffa', 'Choirun Man', 'musyaffacho@gmail.com', 'pengunjung'),
('safa', '$2y$10$yLxG9G0PyCvKruOEOripIeI24oyauDWbvFhBz5waJL.62luUG7N2W', 'Safa', 'Khairunnisa', 'safakhairunnisa@gmail.com', 'pengunjung'),
('taufikh', '$2y$10$jdoleemVdEnr7iaY4ylOg.iZq2I0fMcAZyfmgbs0h/5lzZu2JYD1q', 'Muhammad Taufik', 'Hidayanto', 'taufik12@gmail.com', 'pengunjung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
 ADD KEY `id_genre` (`id_genre`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
 ADD PRIMARY KEY (`id_buku`), ADD KEY `keyidgenre` (`id_genre`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `kode_transaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
