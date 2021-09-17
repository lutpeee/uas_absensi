-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2021 pada 05.44
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas_absensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen_keluar`
--

CREATE TABLE `absen_keluar` (
  `id_absen` int(11) NOT NULL,
  `NIK` int(11) NOT NULL,
  `kode_absen` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absen_keluar`
--

INSERT INTO `absen_keluar` (`id_absen`, `NIK`, `kode_absen`, `tanggal`, `jam`) VALUES
(1, 2020081003, 'keluar', '2021-05-03', '10:52:05'),
(11, 2020081003, 'Keluar', '2021-05-03', '23:06:14'),
(12, 2020081003, 'Keluar', '2021-05-04', '00:23:41'),
(13, 2020081003, 'Keluar', '2021-05-04', '00:47:56'),
(14, 2020081003, 'Keluar', '2021-05-20', '08:03:33'),
(15, 2020081013, 'Keluar', '2021-05-25', '09:57:09'),
(16, 2020081003, 'Keluar', '2021-05-26', '18:22:32'),
(17, 2020081003, 'Keluar', '2021-05-27', '09:38:36'),
(18, 2020081003, 'Keluar', '2021-05-27', '09:39:29'),
(19, 2020081013, 'Keluar', '2021-05-27', '19:40:12'),
(20, 2020081003, 'Keluar', '2021-05-28', '09:23:48'),
(21, 2020081013, 'Keluar', '2021-06-05', '16:28:07'),
(22, 2020081013, 'Keluar', '2021-06-10', '09:22:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen_masuk`
--

CREATE TABLE `absen_masuk` (
  `id_absen` int(11) NOT NULL,
  `NIK` int(11) NOT NULL,
  `kode_absen` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absen_masuk`
--

INSERT INTO `absen_masuk` (`id_absen`, `NIK`, `kode_absen`, `tanggal`, `jam`) VALUES
(7, 2020081003, 'Masuk', '2021-05-27', '10:56:24'),
(8, 2020081003, 'Masuk', '2021-05-28', '09:21:46'),
(9, 2020081013, 'Masuk', '2021-05-28', '13:59:28'),
(10, 2020081013, 'Masuk', '2021-06-05', '16:28:00'),
(11, 2020081013, 'Masuk', '2021-06-10', '09:22:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `NIK` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `jk` varchar(225) NOT NULL,
  `tgl_lahir` varchar(225) NOT NULL,
  `telpon` varchar(225) NOT NULL,
  `tahun_masuk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`NIK`, `nama`, `password`, `jk`, `tgl_lahir`, `telpon`, `tahun_masuk`) VALUES
(2020081003, 'Luthfi Abdul Aziz', 'admin', 'Laki-Laki', '23-02-2002', '081585787821', '2020'),
(2020081013, 'Kayla Ashati', 'admin', 'Perempuan', '01-01-2000', '0813838383838', '2018'),
(2020081033, 'Reynaldi Wicak', 'admin', 'Laki-Laki', '01-01-2000', '08158585858', '2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `NIK` int(11) NOT NULL,
  `level` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `NIK`, `level`) VALUES
(1, 'luthfi', 'admin', 2020081003, '1'),
(2, 'kayla', 'admin', 2020081013, '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen_keluar`
--
ALTER TABLE `absen_keluar`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `NIK` (`NIK`);

--
-- Indeks untuk tabel `absen_masuk`
--
ALTER TABLE `absen_masuk`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `NIK` (`NIK`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`NIK`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `NIK` (`NIK`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen_keluar`
--
ALTER TABLE `absen_keluar`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `absen_masuk`
--
ALTER TABLE `absen_masuk`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absen_keluar`
--
ALTER TABLE `absen_keluar`
  ADD CONSTRAINT `absen_keluar_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `karyawan` (`NIK`);

--
-- Ketidakleluasaan untuk tabel `absen_masuk`
--
ALTER TABLE `absen_masuk`
  ADD CONSTRAINT `absen_masuk_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `karyawan` (`NIK`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `karyawan` (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
