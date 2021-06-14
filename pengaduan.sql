-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2021 pada 09.00
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
(1, '0', 'rachmaailsya@gmail.com', '$2y$10$/kXuAAlMFUM4p6PyiMcrhO7zbJysLaXQJnBBdy', 'Rachma Ailsya', '085325221893'),
(2, '0', 'RachmaAilsya', '$2y$10$WEWHOSs9EMGQbl9Z13LbnOBlv5bqG667bIhvj/', 'Rachma Ailsya', '085325221893'),
(3, '0', '$2y$10$e/IFeuTPXWwXqTPuWoWBuOmVxIcllHbAHgryPHvuGSIcf9d2oSQLy', 'Rachma', '085325221893', 'Human Resource Director'),
(4, '0', '$2y$10$LX5rENrN7bQ2nj7gCHX24u.Mn4y0MnNeGbnkXuyDsiXdX/kf3mFFK', 'Rachma', '085325221893', 'Human Resource Director'),
(5, 'rachma@yahoo.com', '$2y$10$HU39.iS09TwJYGu8sGGHAuZlTI1LAjcXqDRbv0MizDSoOk4ZWU1qi', 'Rachma', '085325221893', 'Human Resource Director'),
(6, 'ailsyar@yahoo.com', '$2y$10$/mASld5I4bTgKwvBcWXm5erunWv2OTT683LT7KljbrHmUyo6beRc.', 'Rachma Ailsya', '085325221893', 'Manajer Operation'),
(7, 'azril@gmail.com', '$2y$10$KXpRdsc8TGkLGe6QNax9JOXEc/XtgBHsMJ4dRzqB17yJDGnhxtBkG', 'Azril Ihza Rahman', '085325221893', 'Manajer Operation'),
(8, 'BaiduriZahra123', '$2y$10$LugFaxzm9VvGodcD645YEeAKbCy5DcwlX5RlGvPY7MuIe4dC2Ha2W', '', '', ''),
(9, 'ailsyar@yahoo.com', '$2y$10$ixIj3eYQBTtNL8yRFs9Ciua3J407k.X7QVvnJpRABzHmHwTasSnGK', 'Rachma Ailsya', '085325221893', 'Human Resource Director'),
(10, 'aaa', '$2y$10$Tt/KqrEyMYIXrM/JyAMn8uEZUjcaugviPgWpOKUmuneq5AjN15.fO', 'Rachma', '085325221893', 'Human Resource Director'),
(11, 'ailsyar@yahoo.com', '$2y$10$Tm62e1czo8uWI4q5LCEcc.mhjqfwOKBi/mxjq5F6kkIlI.JWE8whW', 'Rachma', '085325221893', 'Human Resource Director'),
(12, 'Icha', '$2y$10$F5soQJJcuxtlCqzpPnoedu/4UM.TRgLaMksbgxE0DzbRPWKJ.yYji', 'Icha', '085325221893', 'Human Resource Director');

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
(1, 'q', 'q', 'q', 'q', 'q', 'q', 'Pemerkosaan', ''),
(2, 'Icha', 'Clarissa@gmail.com', 'Jember', 'edewfre', '093', 'Perempuan', 'Pemerkosaan', ''),
(3, 'Indah', 'nurindahfidiawati22@gmail.com', 'Jember', 'ww', '0897', 'Perempuan', 'Pelecehan, KDR', ''),
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
(28, 'we', 'werwe', 'ewfew', 'fwsdfw', 'fsdfws', 'fdsfs', 'Pemerkosaan', 'BG ZOOM ITEC.png');

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
(2, 'Adinda@gmail.com', '$2y$10$PKtaGjrp0TbfQS516mrYsOkgsctr/HEDOoNezQmZEfIkIqn00D/4q', 'Adinda'),
(3, 'vivi', '$2y$10$OSogu1D/HURm3aH8YZeLPexsgJ.NtpDmGTzkBUgsnh8iZSEsuM.r.', 'Ichaa');

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `aduan`
--
ALTER TABLE `aduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
