-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2024 pada 07.41
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfutsal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_212279`
--

CREATE TABLE `admin_212279` (
  `212279_id_user` int(3) NOT NULL,
  `212279_username` varchar(20) NOT NULL,
  `212279_password` varchar(20) NOT NULL,
  `212279_nama` varchar(50) NOT NULL,
  `212279_no_handphone` varchar(15) NOT NULL,
  `212279_email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin_212279`
--

INSERT INTO `admin_212279` (`212279_id_user`, `212279_username`, `212279_password`, `212279_nama`, `212279_no_handphone`, `212279_email`) VALUES
(8, 'kelompok', '12345', 'Kelompok ', '08122187586', 'kelompok@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayar_212279`
--

CREATE TABLE `bayar_212279` (
  `212279_id_bayar` int(11) NOT NULL,
  `212279_id_sewa` int(11) NOT NULL,
  `212279_bukti` text NOT NULL,
  `212279_tanggal_upload` date NOT NULL DEFAULT current_timestamp(),
  `212279_konfirmasi` varchar(50) NOT NULL DEFAULT 'Belum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `bayar_212279`
--

INSERT INTO `bayar_212279` (`212279_id_bayar`, `212279_id_sewa`, `212279_bukti`, `212279_tanggal_upload`, `212279_konfirmasi`) VALUES
(55, 123, '64522a4de1d9a.png', '2023-05-03', 'Terkonfirmasi'),
(56, 127, '652df538ee439.png', '2023-10-17', 'Terkonfirmasi'),
(57, 128, '652df606de5e8.png', '2023-10-17', 'Terkonfirmasi'),
(58, 131, '665526dbb935a.jpg', '2024-05-28', 'Terkonfirmasi'),
(59, 130, '665526fc4326b.jpg', '2024-05-28', 'Sudah Bayar'),
(60, 132, '66552725ca039.jpg', '2024-05-28', 'Terkonfirmasi'),
(61, 133, '6655d31101829.jpg', '2024-05-28', 'Terkonfirmasi'),
(62, 134, '6655eec568f3d.jpg', '2024-05-28', 'Terkonfirmasi'),
(63, 136, '6666a34940404.png', '2024-06-10', 'Sudah Bayar'),
(64, 138, '6666be12e794a.jpg', '2024-06-10', 'Terkonfirmasi'),
(65, 140, '6673ec5eeb053.jpg', '2024-06-20', 'Terkonfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapangan_212279`
--

CREATE TABLE `lapangan_212279` (
  `212279_id_lapangan` int(11) NOT NULL,
  `212279_nama` varchar(35) NOT NULL,
  `212279_keterangan` text NOT NULL,
  `212279_harga` int(11) NOT NULL,
  `212279_foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `lapangan_212279`
--

INSERT INTO `lapangan_212279` (`212279_id_lapangan`, `212279_nama`, `212279_keterangan`, `212279_harga`, `212279_foto`) VALUES
(23, 'STARBOY NPC', 'LAPANGAN FUTSAL INDOOR - Panjang : 38-42 meter - Lebar : 18-25 meter - Permukaan : Vinyl, Parquet - Keterangan Lanjut : Lapangan indoor biasanya terletak di dalam gedung atau fasilitas tertutup, sehingga tidak terpengaruh oleh cuaca. Permukaan yang digunakan bisa bervariasi, namun yang paling umum adalah vinyl karena memberikan permukaan yang halus dan cepat. Lapangan indoor sering digunakan untuk pertandingan resmi, latihan, dan turnamen lokal.', 200000, '6656085d1625d.jpg'),
(24, 'STARBUY NPC', 'LAPANGAN FUTSAL OUTDOOR - Panjang : 38-42 meter (bisa lebih fleksibel) - Lebar : 18-25 meter (bisa lebih fleksibel) - Permukaann : Karet - Lapangan outdoor terletak di luar ruangan dan biasanya memiliki permukaan rumput sintetis atau karet. Meskipun rentan terhadap kondisi cuaca seperti hujan dan panas, lapangan outdoor menawarkan ruang yang lebih luas dan fleksibilitas dalam ukuran. Keterangan Lanjut : Lapangan ini cocok untuk permainan rekreasi dan kegiatan komunitas.', 150000, '665608c559d8e.jpg'),
(25, 'STARLINK NPC', 'LAPANGAN FUTSAL DENGAN TRIBUN PENONTON - Panjang : 38-42 meter - Lebar : 18-25 meter - Permukaann : Vinyl, Parquet - Fasilitas Tribun : Dapat menampung 100-500 penonton, tergantung pada kapasitas - Keterangan Lanjut : Lapangan dengan tribun penonton sering digunakan untuk pertandingan profesional atau turnamen besar. Selain ukuran standar, lapangan ini dilengkapi dengan fasilitas tempat duduk untuk penonton, yang membuatnya ideal untuk acara yang menarik banyak penonton. Fasilitas tambahan seperti kamar ganti, toilet, dan area parkir juga biasanya disediakan.', 360000, '665608fcd3cd2.jpg'),
(26, 'STARTUNG NPC', 'LAPANGAN FUTSAL STANDAR - Panjang : 38-42 meter - Lebar : 18-25 meter - Permukaan : Rumput Sintetis, Vinyl, atau Parquest - Keterangan Lanjut : Lapangan standar merujuk pada ukuran yang sesuai dengan regulasi resmi futsal internasional. Ukuran ini memastikan permainan yang adil dan kompetitif. Permukaan bisa bervariasi, namun sering kali menggunakan rumput sintetis atau vinyl. Lapangan ini cocok untuk pertandingan resmi, latihan tim, dan turnamen.', 75000, '6656093c012d1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa_212279`
--

CREATE TABLE `sewa_212279` (
  `212279_id_sewa` int(11) NOT NULL,
  `212279_id_user` int(11) NOT NULL,
  `212279_id_lapangan` int(11) NOT NULL,
  `212279_tanggal_pesan` date NOT NULL DEFAULT current_timestamp(),
  `212279_lama_sewa` int(11) NOT NULL,
  `212279_jam_mulai` datetime NOT NULL,
  `212279_jam_habis` datetime NOT NULL,
  `212279_harga` int(11) NOT NULL,
  `212279_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `sewa_212279`
--

INSERT INTO `sewa_212279` (`212279_id_sewa`, `212279_id_user`, `212279_id_lapangan`, `212279_tanggal_pesan`, `212279_lama_sewa`, `212279_jam_mulai`, `212279_jam_habis`, `212279_harga`, `212279_total`) VALUES
(123, 98, 23, '2023-05-03', 2, '2023-05-03 16:23:00', '2023-05-03 18:23:00', 30000, 60000),
(124, 0, 0, '2023-10-17', 0, '0000-00-00 00:00:00', '1970-01-01 01:00:00', 0, 0),
(125, 0, 0, '2023-10-17', 0, '0000-00-00 00:00:00', '1970-01-01 01:00:00', 0, 0),
(126, 98, 0, '2023-10-17', 0, '0000-00-00 00:00:00', '1970-01-01 01:00:00', 30000, 30000),
(127, 98, 24, '2023-10-17', 2, '2023-10-17 09:43:00', '2023-10-17 11:43:00', 20000, 40000),
(128, 98, 25, '2023-10-17', 2, '2023-10-17 09:48:00', '2023-10-17 11:48:00', 30000, 60000),
(131, 100, 24, '2024-05-28', 2, '2024-05-28 20:30:00', '2024-05-28 22:30:00', 20000, 40000),
(132, 101, 24, '2024-05-28', 1, '2024-05-28 20:30:00', '2024-05-28 21:30:00', 20000, 20000),
(133, 100, 24, '2024-05-28', 22, '2024-05-28 20:49:00', '2024-05-29 18:49:00', 20000, 440000),
(134, 100, 25, '2024-05-28', 23, '2024-05-28 22:00:00', '2024-05-29 21:00:00', 30000, 690000),
(136, 100, 25, '2024-06-10', 17, '2024-06-10 15:00:00', '2024-06-11 08:00:00', 360000, 6120000),
(138, 103, 26, '2024-06-10', 1, '2024-06-10 15:50:00', '2024-06-10 16:50:00', 75000, 75000),
(140, 105, 23, '2024-06-20', 1, '2024-06-20 16:00:00', '2024-06-20 17:00:00', 200000, 200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_212279`
--

CREATE TABLE `user_212279` (
  `212279_id_user` int(11) NOT NULL,
  `212279_email` varchar(50) NOT NULL,
  `212279_password` varchar(32) NOT NULL,
  `212279_no_handphone` varchar(20) NOT NULL,
  `212279_jenis_kelamin` varchar(10) NOT NULL,
  `212279_nama_lengkap` varchar(60) NOT NULL,
  `212279_alamat` text NOT NULL,
  `212279_foto` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user_212279`
--

INSERT INTO `user_212279` (`212279_id_user`, `212279_email`, `212279_password`, `212279_no_handphone`, `212279_jenis_kelamin`, `212279_nama_lengkap`, `212279_alamat`, `212279_foto`) VALUES
(105, 'leorestu@gmail.com', 'D12345', '081222187666', 'Laki-Laki', 'Leo Restu', 'jalan peta', '6673eb6d497c1.jpg'),
(103, 'destyanfadilahakbar@gmail.com', '12345', '081222187586', 'Laki-Laki', 'Destyan Fadilah Akbar', 'Jalan Kebon Gedang 3', '665bff166c652.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_212279`
--
ALTER TABLE `admin_212279`
  ADD PRIMARY KEY (`212279_id_user`);

--
-- Indeks untuk tabel `bayar_212279`
--
ALTER TABLE `bayar_212279`
  ADD PRIMARY KEY (`212279_id_bayar`);

--
-- Indeks untuk tabel `lapangan_212279`
--
ALTER TABLE `lapangan_212279`
  ADD PRIMARY KEY (`212279_id_lapangan`);

--
-- Indeks untuk tabel `sewa_212279`
--
ALTER TABLE `sewa_212279`
  ADD PRIMARY KEY (`212279_id_sewa`);

--
-- Indeks untuk tabel `user_212279`
--
ALTER TABLE `user_212279`
  ADD PRIMARY KEY (`212279_id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_212279`
--
ALTER TABLE `admin_212279`
  MODIFY `212279_id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `bayar_212279`
--
ALTER TABLE `bayar_212279`
  MODIFY `212279_id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `lapangan_212279`
--
ALTER TABLE `lapangan_212279`
  MODIFY `212279_id_lapangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `sewa_212279`
--
ALTER TABLE `sewa_212279`
  MODIFY `212279_id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT untuk tabel `user_212279`
--
ALTER TABLE `user_212279`
  MODIFY `212279_id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
