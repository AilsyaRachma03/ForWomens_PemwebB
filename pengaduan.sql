-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2021 pada 04.52
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `bidang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `nama`, `no_telp`, `bidang`) VALUES
(5, 'rachma@yahoo.com', '$2y$10$HU39.iS09TwJYGu8sGGHAuZlTI1LAjcXqDRbv0MizDSoOk4ZWU1qi', 'Rachma', '085325221893', 'Human Resource Director'),
(6, 'ailsyar@yahoo.com', '$2y$10$/mASld5I4bTgKwvBcWXm5erunWv2OTT683LT7KljbrHmUyo6beRc.', 'Rachma Ailsya', '085325221893', 'Manajer Operation'),
(7, 'azril@gmail.com', '$2y$10$KXpRdsc8TGkLGe6QNax9JOXEc/XtgBHsMJ4dRzqB17yJDGnhxtBkG', 'Azril Ihza Rahman', '085325221893', 'Manajer Operation'),
(9, 'ailsyar@yahoo.com', '$2y$10$ixIj3eYQBTtNL8yRFs9Ciua3J407k.X7QVvnJpRABzHmHwTasSnGK', 'Rachma Ailsya', '085325221893', 'Human Resource Director'),
(12, 'Icha', '$2y$10$F5soQJJcuxtlCqzpPnoedu/4UM.TRgLaMksbgxE0DzbRPWKJ.yYji', 'Icha', '085325221893', 'Human Resource Director'),
(13, 'aku', '$2y$10$mCNoJp3SJuaOEGStFmeYcO6o60tkoFL/4oN4L2mSSdCaBxgHlr/zq', 'Rachma', '085325221893', 'Human Resource Director');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aduan`
--

CREATE TABLE `aduan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `kelamin` varchar(150) NOT NULL,
  `jenis` varchar(14) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `aduan`
--

INSERT INTO `aduan` (`id`, `nama`, `email`, `alamat`, `keluhan`, `telp`, `kelamin`, `jenis`, `file`) VALUES
(2, 'Nyai Icha', 'Clarissa@gmail.com', 'Jember', 'saya dijambret', '085', 'Perempuan', 'Pemerkosaan', ''),
(3, 'Nur Indah Fidia Wati', 'nurindahfidiawati22@gmail.com', 'Jember', 'ww', '0897', 'Perempuan', 'Pelecehan, KDR', ''),
(4, 'Indah', 'nurindahfidiawati22@gmail.com', 'Jember', 'ww', '0897', 'Perempuan', 'Pelecehan, KDR', ''),
(5, 'Rachma Ailsya', 'nurindahfidiawati22@gmail.com', 'q', 'www', '2', 'Perempuan', 'Kekerasan', ''),
(6, 'Rachma', 'nurindahfidiawati22@gmail.com', 'ww', 'edewfre', '2', 'Perempuan', 'Pemerkosaan', ''),
(7, 's', 's', 's', 'sda', 'sad', 'sa', 'Kekerasan', ''),
(8, 'Rachma', 'rachmaailsya9@gmail.com', 'Bojonegoro', 'qwswed', '087', 'Perempuan', 'Pelecehan', 'erd_projek (1).png'),
(9, 'dce', 'ewwq', 'ewdweq', 'ewqc', 'weewq', 'weqc', 'Pelecehan', 'Cool Doody thesis _ by Slidesgo-1.jpg'),
(10, 'r', 'w', 'q', 'eq', 'eq', 'eq', 'Pemerkosaan', 'Screenshot (31).png'),
(11, 'Azril Ihza Rahman', 'azril@gmail.com', 'Jember', 'edewfre', '2', 'Perempuan', 'Pemerkosaan, P', 'Screenshot (30) (1).png'),
(12, 'Azril Ihza Rahman', 'azril@gmail.com', 'Jember', 'edewfre', '2', 'Perempuan', 'Pemerkosaan, P', 'Screenshot (30) (1).png'),
(13, 'Azril Ihza Rahman', 'maman@gmail.com', '1', 'q', 'ww', 'Perempuan', 'KDRT', 'Screenshot (34) (1).png'),
(14, 'wd', 'ewd', 'ewd', 'wqd', 'wqd', 'qwd', 'Pemerkosaan, P', 'Screenshot (31).png'),
(15, 'wqd', 'qwd', 'wedqw', 'qwdq', 'wdd', 'qwd', 'KDRT', 'Screenshot (32).png'),
(16, 'qwdq', 'wqd', 'd', 'qwqdq', 'dwqdwq', 'dwqdqw', 'Pemerkosaan, P', 'Screenshot (33).png'),
(17, 'qwd', 'dqq', 'dqd', 'qdwqd', 'wqdwdwqdwqwq', 'wqdqdqd', 'Pemerkosaan, P', ''),
(18, 'wdqd', 'qdq', 'dqdqd', 'qdqdwqdwqd', 'qwdq', 'dqdq', 'Pemerkosaan, K', ''),
(19, 'qwddqwd', 'wqdqd', 'wqdqwd', 'qwdq', 'qwdq', 'wqdqd', 'KDRT, Kekerasa', ''),
(20, 'qwdqwd', 'qwdqw', 'wqdqw', 'wqdq', 'qwdq', 'qwdq', 'Pemerkosaan, P', ''),
(21, 'wqdwd', 'wqdq', 'qwdq', 'qwdwq', 'wqdqw', 'qwdwq', 'Pemerkosaan, P', ''),
(22, 'qwdq', 'qdwdqw', 'dwqdwqd', 'qdqwdwqd', 'dwqqd', 'qwdqwdwqdqwdq', 'Pemerkosaan, P', ''),
(23, 'dwqdqw', 'dwqdwqd', 'wqdwqdqw', 'dqwdwqd', 'wqdqwdqwdwqdqwd', 'wqdwqdwqdwqd', 'Pemerkosaan', ''),
(24, 'dwqdqw', 'dwqdwqd', 'wqdwqdqw', 'dqwdwqd', 'wqdqwdqwdwqdqwd', 'wqdwqdwqdwqd', 'Pemerkosaan', ''),
(25, 'dwqdqw', 'dwqdwqd', 'wqdwqdqw', 'dqwdwqd', 'wqdqwdqwdwqdqwd', 'wqdwqdwqdwqd', 'Pemerkosaan', ''),
(26, 'dwqdqw', 'dwqdwqd', 'wqdwqdqw', 'dqwdwqd', 'wqdqwdqwdwqdqwd', 'wqdwqdwqdwqd', 'Pemerkosaan', ''),
(27, 'Adinda', 'nurindahfidiawati22@gmail.com', 'Jember', 'ww', '2', '2', 'KDRT', 'BG ZOOM ITEC.png'),
(29, '5g', 'tgrh', 'yth', 'yh', '5yh', 'yh', 'Pemerkosaan, P', 'Philosoppy.png'),
(30, 'dg', 'erg', 'rt', 'ert', 'ert', 'ret', 'Pemerkosaan, P', 'Screenshot (33).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `email`, `password`, `nama`) VALUES
(1, 'azril@gmail.com', '$2y$10$yyblG/BLS2VBJ3xUvXuO1eVvNpe/lM9XC4DMdO5HtmIkHSTF0P2ZC', 'Azril Ihza Rachman'),
(4, 'ailsyar@yahoo.com', '$2y$10$MavqaRZRC4NpeaonE5lSMeKkUIIz85cd2zYgRX.n2HWHZAW74Iv5a', 'Rachma Ailsya'),
(6, 'vivi@gmail.com', '$2y$10$fUorl3AFyL9AdFOSinmhn.DFeS7FgY5efhVaYVEAMhy02vyeq4xS6', 'vivi'),
(7, 'maman', '$2y$10$7utGB7tWbSkY9fAQqXjXx.osMslCU.aPezx40CKgXgAL9zuft4Bhq', 'maman'),
(8, 'vivisayangihaq', '$2y$10$ftIW7TkUAOq8jMFbwEFWNucFJ6Sl0BDid9x73xVUGHPFOgvJ2sZRO', 'viviihaq'),
(11, 'Indah', '$2y$10$GLgRSICx73lBEmv/02gKO.k8LfZatXRI0hss3nqfRToepkXGyQTG2', 'Indah'),
(12, 'Dwijannah', '$2y$10$SzxWvDrd.PN7FqZocIwc.OSgqs/SW6vWXmtnc4gdr6sluHkD2Ga0a', 'Dwi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isipesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `isipesan`) VALUES
(1, 'Rachma Ailsya', 'azril@gmail.com', ''),
(5, 'Azril Ihza Rahman', 'ailsyar@yahoo.com', ''),
(6, 'Rachma Ailsya', 'rachmaailsya9@gmail.com', ''),
(7, 'Rachma Ailsya', 'rachmaailsya9@gmail.com', ''),
(8, 'Rachma', 'azril@gmail.com', 't'),
(9, 'Rachma Ailsya', 'azril@gmail.com', 't'),
(10, 'Azril Ihza Rahman', 'rachmaailsya9@gmail.com', 'k');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `aduan`
--
ALTER TABLE `aduan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `aduan`
--
ALTER TABLE `aduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
