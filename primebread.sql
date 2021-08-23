-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2021 pada 04.42
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `primebread`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `costumer_service`
--

CREATE TABLE `costumer_service` (
  `id` int(11) NOT NULL,
  `nama` varchar(17) NOT NULL,
  `nomer` int(12) NOT NULL,
  `instansi` varchar(20) NOT NULL,
  `komentar` varchar(120) NOT NULL,
  `file` varchar(100) NOT NULL,
  `pesan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sekolah` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(15) NOT NULL,
  `kabupaten` varchar(15) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `sekolah`, `alamat`, `kota`, `kabupaten`, `tanggal`) VALUES
(5, 'nama', 'email', 'sekolah', 'alamat', 'kota', 'kabupaten', '0000-00-00 00:00:00'),
(12, 'ariarian', 'diamond@gmail.com', 'Universitas Indraprasta P', 'jl raya simatupang jakarta selatan no 34', 'Universitas Ind', 'Jakarta Selatan', '0000-00-00 00:00:00'),
(13, 'ari', 'prime@gmail.com', 'Universitas Indraprasta P', 'jl raya simatupang jakarta selatan no 34', 'Universitas Ind', 'Bogor Kota', '0000-00-00 00:00:00'),
(14, 'ariarian', 'diamond@gmail.com', 'Universitas Indraprasta P', 'jl raya simatupang jakarta selatan no 34', 'Universitas Ind', 'Jakarta Selatan', '0000-00-00 00:00:00'),
(15, 'jajang', 'jajang_23@gmail.com', 'smkn 01 bogor', 'jl raya bogor no 22 citeureup', 'smkn 01 bogor', 'Kabupaten Bogor', '0000-00-00 00:00:00'),
(16, 'atang', 'atang@gmail.com', 'smp berkah 23 bogor', 'cimahpar no 01 rt 05/11', 'smp berkah 23 b', 'Kabupaten Bogor', '0000-00-00 00:00:00'),
(19, 'ananta', 'fatimah_ayu@gmail.com', 'tk merpati', 'jl karanggan puspasari rt 20 rw 01', 'tk merpati', 'Kabupaten Bogor', '2021-06-25 00:00:00'),
(20, 'Ari', 'mencoba@gmail.com', 'sdn puspasari 07', 'jl karanggan citeureup', 'sdn puspasari 0', 'Kabupaten Bogor', '2021-06-29 00:00:00'),
(22, 'axa', 'bersatu@gmail.com', 'sd bojong gede', 'jl bambu kuning cibinong', 'sd bojong gede', 'Kabupaten Bogor', '2021-06-29 00:00:00'),
(23, 'Arsy', 'diamondka@gmail.com', 'smpn1negeri', 'kp sawah rt 02/01 no 09', 'depok', 'Depok', '2021-07-06 00:00:00'),
(27, 'Ari', 'traning@gmail.com', 'sdmksadfksa', 'dcsl]', 'sdmksadfksa', 'Jakarta Pusat', '2021-07-22 00:00:00'),
(28, 'Ari', 'traning@gmail.com', 'sdmksadfksa', 'dcsl]', 'sdmksadfksa', 'Jakarta Pusat', '2021-07-22 00:00:00'),
(34, 'Sawada', 'primebread@gmail.com', 'smkn1negeri 08', 'jln kranggan ds puspasari', 'smkn1negeri 08', 'Kabupaten Bogor', '2021-07-07 00:00:00'),
(43, 'Jihan Putri', 'Jihanputri@gmail.com', 'universitas Han Bandung t', 'jl cisoka nyengseret kecamatan dago', 'universitas Han', 'Choose...', '2021-06-29 00:00:00'),
(44, 'Putri Krisnawati', 'hanz@gmail.com', 'smpn1citeureup', 'jl puspanegara 09', 'smpn1citeureup', 'Kabupaten Bogor', '2021-07-20 00:00:00'),
(45, 'Gilda Pangesti', 'gildapangesti@gmail.com', 'sman 1 cibinong ', 'jl raya gunung putri post 3 rt 08/02 no 12 ', 'sman 1 cibinong', 'Kabupaten Bogor', '2021-07-17 00:00:00'),
(46, 'Nurhalizah ', 'nur_halizah@yahoo.com', 'universitas setiadi bogor', 'jl raya lebak pasar rt 01 rw 12 no 011', 'universitas set', 'Kabupaten Bogor', '2021-07-16 00:00:00'),
(47, 'SDSADS', 'SADSADSA@GMAIL.COM', 'ASDSAFCSA', 'CDSVCSDVDSV', 'ASDSAFCSA', 'Kabupaten Bogor', '2021-07-24 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(13, 'primebread', '$2y$10$Px9JA.usGmrbn3hbAZwiE.c6XyKPHLJXMOsgMIK6l4QjA7tXlKzX6'),
(14, 'gardenia', '$2y$10$I8Iz802RPXwTqUeVRjrzvOniECkc8VeiQXjTN8J/jKnnKBaXE6ere');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_produk`
--

CREATE TABLE `menu_produk` (
  `id` int(11) NOT NULL,
  `jenis_produk` varchar(100) DEFAULT NULL,
  `varian_produk` varchar(100) DEFAULT NULL,
  `berat` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_produk`
--

INSERT INTO `menu_produk` (`id`, `jenis_produk`, `varian_produk`, `berat`, `gambar`) VALUES
(1, 'creamroll', 'vanila', '50g', 'vanila.jpg'),
(3, 'creamroll', 'keju', '50g', 'keju.jpg'),
(4, 'creamroll', 'moca', '50g', 'moca.jpg'),
(9, 'creamroll', 'jagung', '50g', 'jagung.jpg'),
(14, 'creamroll', 'taro', '50g', 'taro.jpg'),
(15, 'creamroll', 'taro', '50g', 'taro.jpg'),
(16, 'duo', 'duo piscok', '55g', 'pisang.jpg'),
(26, 'duo', 'pisang coklat', '55gram', '6098e50fc2b79'),
(27, 'creamroll', 'vanila', '2021-05-22', '60a5bd3dbade1'),
(28, 'asd', 'asdas', '2021-06-17', '60caa5964d543'),
(29, 'afdsa', 'sadfsaf', '2021-06-18', '60caa5c13aa42'),
(30, 'afdsa', 'sadfsaf', '2021-06-18', '60caa5e59636a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_promosi`
--

CREATE TABLE `menu_promosi` (
  `id` int(11) NOT NULL,
  `promo` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `costumer_service`
--
ALTER TABLE `costumer_service`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu_produk`
--
ALTER TABLE `menu_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu_promosi`
--
ALTER TABLE `menu_promosi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `costumer_service`
--
ALTER TABLE `costumer_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `menu_produk`
--
ALTER TABLE `menu_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `menu_promosi`
--
ALTER TABLE `menu_promosi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
