-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2020 pada 18.56
-- Versi server: 10.4.6-MariaDB-log
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topsis_final`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `talternatif`
--

CREATE TABLE `talternatif` (
  `kd_alter` varchar(4) NOT NULL,
  `nm_alter` varchar(16) NOT NULL,
  `k1` int(11) NOT NULL,
  `k2` int(11) NOT NULL,
  `k3` int(11) NOT NULL,
  `k4` int(11) NOT NULL,
  `k5` int(11) NOT NULL,
  `k6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `talternatif`
--

INSERT INTO `talternatif` (`kd_alter`, `nm_alter`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`) VALUES
('A01', 'Drs. Budi', 80, 90, 75, 80, 93, 80),
('A02', 'Drs. Sutomo', 75, 89, 80, 93, 80, 90),
('A03', 'Indahsari, S.Pd', 89, 90, 80, 87, 80, 88),
('A04', 'Mukti, S.Ag', 88, 78, 70, 90, 95, 85),
('A05', 'Samiyati, S.Pd', 85, 86, 95, 80, 78, 80),
('A06', 'Endang, S.Pd., M', 80, 94, 96, 80, 79, 81);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkriteria`
--

CREATE TABLE `tkriteria` (
  `kd_kriteria` varchar(4) NOT NULL,
  `nm_kriteria` varchar(64) NOT NULL,
  `atribut` varchar(10) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tkriteria`
--

INSERT INTO `tkriteria` (`kd_kriteria`, `nm_kriteria`, `atribut`, `bobot`) VALUES
('K1', 'Kesetiaan', 'Benefit', 10),
('K2', 'Prestasi Kerja', 'Benefit', 10),
('K3', 'Tanggung Jawab', 'Benefit', 20),
('K4', 'Kejujuran', 'Benefit', 20),
('K5', 'Kerjasama', 'Benefit', 15),
('K6', 'Kepemimpinan', 'Benefit', 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tuser`
--

CREATE TABLE `tuser` (
  `id` int(11) NOT NULL,
  `uname` varchar(8) NOT NULL,
  `upass` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tuser`
--

INSERT INTO `tuser` (`id`, `uname`, `upass`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
