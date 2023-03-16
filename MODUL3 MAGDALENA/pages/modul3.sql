-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2021 pada 16.04
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `showroom_magdalena_table`
--

CREATE TABLE `showroom_magdalena_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `showroom_magdalena_table`
--

INSERT INTO `showroom_magdalena_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`,`merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(1, 'Lamborghini Aventador', 'Magdalena_1202200064', 'Lamborghini',11/12/2022, 'Mobil Tercepat Mengalahkan Kura-Kura', 'mobil1.png', 'lunas' ),
(2, 'Ferrari J50', 'Magdalena_1202200064','ferrari', 03/09/2002, 'Mobil Merah Membara Mengalahkan Api', 'mobil2.png', 'belum lunas'),
(3,'Bugatti Vegron','Magdalena_1202200064','Bugatti', 04/01/2013,'Mobil hitam Si Paling Mamba','mobil3.png','lunas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `showroom_magdalena_table`
--
ALTER TABLE `showroom_magdalena_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `showroom_magdalena_table`
--
ALTER TABLE `showroom_magdalena_table`
  MODIFY `id_mobil` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
