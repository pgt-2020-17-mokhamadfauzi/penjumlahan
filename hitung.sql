-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2020 pada 08.18
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hitung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hitung`
--

CREATE TABLE `tb_hitung` (
  `id` int(20) NOT NULL,
  `a` double NOT NULL,
  `b` double NOT NULL,
  `c` double NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hitung`
--

INSERT INTO `tb_hitung` (`id`, `a`, `b`, `c`, `ket`) VALUES
(1, 2, 3, 5, ''),
(2, 2, 2, 4, 'A'),
(3, 10, 10, 20, 'B'),
(4, 30, 10, 40, 'D'),
(5, 1, 1, 2, 'A'),
(6, 2, 2, 4, 'A'),
(7, 2, 2, 4, 'A'),
(8, 2, 3, 5, 'A'),
(9, 1, 1, 2, 'A'),
(10, 3, 4, 7, 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hitungruntun`
--

CREATE TABLE `tb_hitungruntun` (
  `id` int(11) NOT NULL,
  `a` double NOT NULL,
  `b` double NOT NULL,
  `c` double NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hitungruntun`
--

INSERT INTO `tb_hitungruntun` (`id`, `a`, `b`, `c`, `ket`) VALUES
(201, 1, 1, 2, 'A'),
(202, 1, 2, 3, 'A'),
(203, 2, 3, 5, 'A'),
(204, 3, 5, 8, 'A'),
(205, 5, 8, 13, 'B'),
(206, 8, 13, 21, 'C'),
(207, 13, 21, 34, 'D'),
(208, 21, 34, 55, 'D'),
(209, 34, 55, 89, 'D'),
(210, 55, 89, 144, 'D');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_hitung`
--
ALTER TABLE `tb_hitung`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_hitungruntun`
--
ALTER TABLE `tb_hitungruntun`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_hitung`
--
ALTER TABLE `tb_hitung`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_hitungruntun`
--
ALTER TABLE `tb_hitungruntun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
