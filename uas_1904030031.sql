-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Feb 2022 pada 16.40
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_1904030031`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `mata_pelajaran` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `foto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `tempat`, `mata_pelajaran`, `alamat`, `jenis_kelamin`, `agama`, `foto`) VALUES
('1234', 'Saepul. Spd', 'tangerang, 11 april 1998', 'kimia', 'mauk, Tangerang', 'Laki-laki', 'Islam', '1'),
('13456', 'Moeryanto S.pd', 'Tangerang, 12 Maret 1993', 'Sosiologi', 'Kosambi Tangerang', 'Laki-laki', 'Islam', '4'),
('145', 'mahesa .Spd', 'tangerang, 15 juli 1999', 'kimia', 'kedaung tangerang', 'Laki-laki', 'Islam', '2'),
('22', 'Nur aji. Spd', 'tangerang, 21 Juni 1990', 'fisika', 'cilegon, Tangerang', 'laki-laki', 'islam', '3'),
('234', 'Fajar. S.kom', 'Tangerang, 25 Februari 1999', 'TIK', 'Kelor Tangerang', 'Laki-laki', 'Islam', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pel`
--

CREATE TABLE `mata_pel` (
  `id` varchar(10) NOT NULL,
  `mapel` varchar(20) NOT NULL,
  `jurusan` varchar(15) NOT NULL,
  `guru` varchar(15) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mata_pel`
--

INSERT INTO `mata_pel` (`id`, `mapel`, `jurusan`, `guru`, `kelas`) VALUES
('001', 'kimia', 'Ipa', 'saepul.spd', '11 B'),
('022', 'fisika', 'Ips', 'm0eryanto', '11 A'),
('2', 'Bahasa Indonesia', 'bahasa', 'Sri Isna.spd', '10 A'),
('3', 'kimia', 'ipa', 'moeryanti', '11 b'),
('7', 'Matematika', 'ipa', 'nur aji. Spd', '12 A');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mata_pel`
--
ALTER TABLE `mata_pel`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
