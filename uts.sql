-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Apr 2020 pada 15.33
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` varchar(5) NOT NULL,
  `id_kereta` varchar(5) NOT NULL,
  `jam_berangkat` varchar(5) NOT NULL,
  `jam_tiba` varchar(5) NOT NULL,
  `harga` int(255) NOT NULL,
  `dari` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `id_kereta`, `jam_berangkat`, `jam_tiba`, `harga`, `dari`, `tujuan`) VALUES
('J001', 'K001', '09.00', '14.00', 100, 'Solo', 'Gambir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kereta`
--

CREATE TABLE `tbl_kereta` (
  `id_kereta` varchar(5) NOT NULL,
  `nama_kereta` varchar(255) NOT NULL,
  `kelas` enum('ekonomi','bisnis','eksekutif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kereta`
--

INSERT INTO `tbl_kereta` (`id_kereta`, `nama_kereta`, `kelas`) VALUES
('K001', 'Argo Lawu', 'eksekutif'),
('K002', 'Senja Utama Solo', 'bisnis'),
('K003', 'Joglokerto Ekspres', 'eksekutif'),
('K004', 'Gajayana	', 'ekonomi'),
('K005', 'Turangga', 'eksekutif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penumpang`
--

CREATE TABLE `tbl_penumpang` (
  `id_penumpang` varchar(5) NOT NULL,
  `nama_penumpang` varchar(255) NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `ttl` date NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_reservasi`
--

CREATE TABLE `tbl_reservasi` (
  `id_reservasi` varchar(5) NOT NULL,
  `id_jadwal` varchar(5) NOT NULL,
  `id_penumpang` varchar(5) NOT NULL,
  `tanggal_berangkat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `level` enum('admin','pengunjung') NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `level`, `email`, `password`) VALUES
('1', 'rendi', 'admin', 'rendijaka@student.uns.ac.id', '1234');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_kereta` (`id_kereta`);

--
-- Indeks untuk tabel `tbl_kereta`
--
ALTER TABLE `tbl_kereta`
  ADD PRIMARY KEY (`id_kereta`);

--
-- Indeks untuk tabel `tbl_penumpang`
--
ALTER TABLE `tbl_penumpang`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- Indeks untuk tabel `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_penumpang` (`id_penumpang`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD CONSTRAINT `tbl_jadwal_ibfk_1` FOREIGN KEY (`id_kereta`) REFERENCES `tbl_kereta` (`id_kereta`);

--
-- Ketidakleluasaan untuk tabel `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  ADD CONSTRAINT `tbl_reservasi_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `tbl_jadwal` (`id_jadwal`),
  ADD CONSTRAINT `tbl_reservasi_ibfk_2` FOREIGN KEY (`id_penumpang`) REFERENCES `tbl_penumpang` (`id_penumpang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
