-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 05:01 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

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
-- Table structure for table `tbl_jadwal`
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
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `id_kereta`, `jam_berangkat`, `jam_tiba`, `harga`, `dari`, `tujuan`) VALUES
('J001', 'K001', '09.00', '14.00', 100000, 'Purwosari', 'Gambir'),
('J002', 'K002', '17.30', '02.54', 275000, 'Solo Balapan', 'Pasar Senen'),
('J003', 'K003', '06.00', '10.08', 200000, 'Solo Balapan', 'Purwokerto'),
('J004', 'K006', '20.00', '04.37', 285000, 'Solo Balapan', 'Gambir'),
('J005', 'K008', '07.10', '15.48', 140000, 'Solo Balapan', 'Bandung'),
('J006', 'K007', '17.30', '02.54', 235000, 'Solo Balapan', 'Pasar Senen');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kereta`
--

CREATE TABLE `tbl_kereta` (
  `id_kereta` varchar(5) NOT NULL,
  `nama_kereta` varchar(255) NOT NULL,
  `kelas` enum('ekonomi','bisnis','eksekutif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kereta`
--

INSERT INTO `tbl_kereta` (`id_kereta`, `nama_kereta`, `kelas`) VALUES
('K001', 'Argo Lawu', 'eksekutif'),
('K002', 'Senja Utama Solo', 'bisnis'),
('K003', 'Joglokerto Ekspres', 'eksekutif'),
('K004', 'Gajayana	', 'ekonomi'),
('K005', 'Turangga', 'eksekutif'),
('K006', 'Argo Dwipangga', 'eksekutif'),
('K007', 'Senja Utama Solo', 'bisnis'),
('K008', 'Lodaya', 'bisnis');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penumpang`
--

CREATE TABLE `tbl_penumpang` (
  `id_penumpang` varchar(5) NOT NULL,
  `nama_penumpang` varchar(255) NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `ttl` date NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penumpang`
--

INSERT INTO `tbl_penumpang` (`id_penumpang`, `nama_penumpang`, `jk`, `ttl`, `no_hp`, `alamat`) VALUES
('IP001', 'Rike Aqila Lala', 'perempuan', '2000-06-04', '0821734364225', 'Boyolali'),
('IP002', 'Deddy Petir', 'laki-laki', '1998-09-12', '0812345678932', 'Solo'),
('IP003', 'Tulus Noor Muhammad', 'laki-laki', '2000-10-11', '0892123267438', 'Sukoharjo'),
('IP004', 'Thufeil Aditya', 'laki-laki', '1999-10-12', '0814237485930', 'Medan'),
('IP005', 'Yako Prihantono', 'laki-laki', '2000-02-16', '0812342764894', 'Jogja'),
('IP006', 'Sekar Indah', 'perempuan', '1999-10-10', '0812312546273', 'Solo'),
('IP007', 'Syintia Nur Azizah', 'perempuan', '2000-05-31', '082431726321', 'Magelang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservasi`
--

CREATE TABLE `tbl_reservasi` (
  `id_reservasi` varchar(5) NOT NULL,
  `id_jadwal` varchar(5) NOT NULL,
  `id_penumpang` varchar(5) NOT NULL,
  `tanggal_berangkat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reservasi`
--

INSERT INTO `tbl_reservasi` (`id_reservasi`, `id_jadwal`, `id_penumpang`, `tanggal_berangkat`) VALUES
('R001', 'J001', 'IP001', '2020-04-16'),
('R002', 'J002', 'IP002', '2020-04-17'),
('R003', 'J003', 'IP003', '2020-04-18'),
('R004', 'J004', 'IP005', '2020-04-19'),
('R005', 'J005', 'IP005', '2020-04-20'),
('R006', 'J006', 'IP004', '2020-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `level` enum('admin','pengunjung') NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `level`, `email`, `password`) VALUES
('1', 'rendi', 'admin', 'rendijaka@student.uns.ac.id', '1234'),
('2', 'uga', 'admin', 'uga@gmail.com', '1234'),
('IP001', 'Lala', 'pengunjung', 'lala@gmail.com', '1234'),
('IP002', 'Deddy', 'pengunjung', 'deddy@gmail.com', '1234'),
('IP003', 'Tulus', 'pengunjung', 'tulus@gmail.com', '4321'),
('IP004', 'Thufeil', 'pengunjung', 'thufeil@gmail.com', '1234'),
('IP005', 'Yako', 'pengunjung', 'yako@gmail.com', '4321'),
('IP006', 'Sekar', 'pengunjung', 'sekar@gmail.com', '12345'),
('IP007', 'Syintia', 'pengunjung', 'syintia@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_kereta` (`id_kereta`);

--
-- Indexes for table `tbl_kereta`
--
ALTER TABLE `tbl_kereta`
  ADD PRIMARY KEY (`id_kereta`);

--
-- Indexes for table `tbl_penumpang`
--
ALTER TABLE `tbl_penumpang`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- Indexes for table `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_penumpang` (`id_penumpang`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD CONSTRAINT `tbl_jadwal_ibfk_1` FOREIGN KEY (`id_kereta`) REFERENCES `tbl_kereta` (`id_kereta`);

--
-- Constraints for table `tbl_reservasi`
--
ALTER TABLE `tbl_reservasi`
  ADD CONSTRAINT `tbl_reservasi_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `tbl_jadwal` (`id_jadwal`),
  ADD CONSTRAINT `tbl_reservasi_ibfk_2` FOREIGN KEY (`id_penumpang`) REFERENCES `tbl_penumpang` (`id_penumpang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
