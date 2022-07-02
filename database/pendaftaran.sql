-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 02 Jul 2022 pada 12.35
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `T_Login`
--

CREATE TABLE `T_Login` (
  `id` int(5) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `jabatan` varchar(255) DEFAULT NULL COMMENT '1 admin 2 mahasiswa',
  `id_pendaftar` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '1 pending 2 accept'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `T_Login`
--

INSERT INTO `T_Login` (`id`, `username`, `password`, `jabatan`, `id_pendaftar`, `status`) VALUES
(2, 'jali', '66bab6414f27e1849265139ca5bba711', '2', 2, 2),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 1, 2),
(4, 'iii', '36347412c7d30ae6fde3742bbc4f21b9', '2', 7, 1),
(5, 'kjk', 'b4b27c9132d1fca14442ceae495a224a', '2', 8, 2),
(6, 'as', 'f970e2767d0cfe75876ea857f92e319b', '2', 9, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `T_Pendaftaran`
--

CREATE TABLE `T_Pendaftaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `asalsekolah` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `noHp` varchar(14) NOT NULL,
  `jurusanygdipilih` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `T_Pendaftaran`
--

INSERT INTO `T_Pendaftaran` (`id`, `nama`, `asalsekolah`, `alamat`, `noHp`, `jurusanygdipilih`, `username`, `password`) VALUES
(2, 'aa', 'aaa', 'aa', '99', '221', 'as', 'f970e2767d0cfe75876ea857f92e319b'),
(4, 'jali', 'jali', 'hkhk', '89798789798', 'IPA', 'jalo', 'b8906acb6cd240f6481a5cb27df50e1b'),
(5, 'jali', 'jali', 'hkhk', '89798789798', 'IPA', 'jalo', 'b8906acb6cd240f6481a5cb27df50e1b'),
(6, 'jali', 'jali', 'hkhk', '89798789798', 'IPA', 'll', '5b54c0a045f179bcbbbc9abcb8b5cd4c'),
(7, 'iii', 'iii', 'iii', '9999', 'IPA', 'iii', '36347412c7d30ae6fde3742bbc4f21b9'),
(8, 'jk', 'jk', 'jk', 'jk', 'jk', 'kjk', 'b4b27c9132d1fca14442ceae495a224a');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `T_Login`
--
ALTER TABLE `T_Login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `T_Pendaftaran`
--
ALTER TABLE `T_Pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `T_Login`
--
ALTER TABLE `T_Login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `T_Pendaftaran`
--
ALTER TABLE `T_Pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
