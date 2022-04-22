-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2022 pada 02.20
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subbid_tekkom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cctv`
--

CREATE TABLE `cctv` (
  `lokasi` varchar(50) NOT NULL,
  `vpn` varchar(50) NOT NULL,
  `ip_cctv` varchar(50) DEFAULT NULL,
  `bw` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `logn`
--

CREATE TABLE `logn` (
  `id` varchar(18) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `logn`
--

INSERT INTO `logn` (`id`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wifi`
--

CREATE TABLE `wifi` (
  `lokasi` varchar(30) NOT NULL,
  `nama_provider` varchar(30) NOT NULL,
  `kecepatan` varchar(10) DEFAULT NULL,
  `nowifi` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wifi`
--

INSERT INTO `wifi` (`lokasi`, `nama_provider`, `kecepatan`, `nowifi`) VALUES
('ASTINet Ruang LPSE Polda Sumse', 'ASTINet', '5 Mbps', 0),
('ASTINet Ruang Tahanan Polda Su', 'ASTINet', '5 Mbps', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cctv`
--
ALTER TABLE `cctv`
  ADD PRIMARY KEY (`lokasi`);

--
-- Indeks untuk tabel `logn`
--
ALTER TABLE `logn`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wifi`
--
ALTER TABLE `wifi`
  ADD PRIMARY KEY (`lokasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
