-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2024 at 05:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbabsensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbabsensi`
--

CREATE TABLE `tbabsensi` (
  `idabsensi` int(15) NOT NULL,
  `idjadwal` int(15) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `namamahasiswa` varchar(20) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jammasuk` varchar(8) NOT NULL,
  `jamkeluar` varchar(8) NOT NULL,
  `matakuliah` varchar(50) NOT NULL,
  `namadosen` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbabsensi`
--

INSERT INTO `tbabsensi` (`idabsensi`, `idjadwal`, `nim`, `namamahasiswa`, `hari`, `kelas`, `jammasuk`, `jamkeluar`, `matakuliah`, `namadosen`, `status`) VALUES
(1, 2, 'MI0123240040', 'Yessica', 'Senin', 'Z2 Reguler', '09:00:00', '10:00:00', 'Animasi Dan Multimedia', 'Iyus Rusmansyah', 'Hadir'),
(2, 3, 'MI0123240090', 'Saha We', 'Senin', 'Z3 Reguler', '10:00:00', '11:00:00', 'Pemrograman Web', 'Pak Ridwan', 'Hadir'),
(3, 1, 'MI0123240048', 'Shani', 'Senin', 'Z1 Reguler', '-', '-', 'Perilaku Dalam Organisasi', 'Sri Nurhayati', 'Tidak Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `tbjadwal`
--

CREATE TABLE `tbjadwal` (
  `idjadwal` int(15) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `matakuliah` varchar(50) NOT NULL,
  `namadosen` varchar(30) NOT NULL,
  `jammasuk` time NOT NULL,
  `jamkeluar` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbjadwal`
--

INSERT INTO `tbjadwal` (`idjadwal`, `hari`, `kelas`, `matakuliah`, `namadosen`, `jammasuk`, `jamkeluar`) VALUES
(1, 'Senin', 'Z1 Reguler', 'Perilaku Dalam Organisasi', 'Sri Nurhayati', '08:00:00', '09:00:00'),
(2, 'Senin', 'Z2 Reguler', 'Animasi Dan Multimedia', 'Iyus Rusmansyah', '09:00:00', '10:00:00'),
(3, 'Senin', 'Z3 Reguler', 'Pemrograman Web', 'Pak Ridwan', '10:00:00', '11:00:00'),
(4, 'Senin', 'Z4 Reguler', 'Bahasa Inggris', 'Merda Budi Haryono', '13:00:00', '14:00:00'),
(5, 'Kamis', 'Z6 Reguler', 'Desain', 'Indra Cahaya Tresna', '09:00:00', '10:00:00'),
(7, 'Kamis', 'Z7 Reguler', 'Arkom', 'Iyus Rusmansyah', '13:00:00', '14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbmahasiswa`
--

CREATE TABLE `tbmahasiswa` (
  `nim` varchar(20) NOT NULL,
  `namamahasiswa` varchar(20) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `gambarmahasiswa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbmahasiswa`
--

INSERT INTO `tbmahasiswa` (`nim`, `namamahasiswa`, `kelas`, `jurusan`, `gambarmahasiswa`) VALUES
('MI0123240040', 'Yessica', 'Z2 Reguler', 'Perhotelan', 'C2.jpg'),
('MI0123240048', 'Shani', 'Z1 Reguler', 'Manajemen Informatika', 'C1.jpg'),
('MI0123240090', 'Saha We', 'Z3 Reguler', 'Kompterisasi Akuntasi', '6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbabsensi`
--
ALTER TABLE `tbabsensi`
  ADD PRIMARY KEY (`idabsensi`),
  ADD KEY `tbabsensi_ibfk_2` (`idjadwal`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `tbjadwal`
--
ALTER TABLE `tbjadwal`
  ADD PRIMARY KEY (`idjadwal`);

--
-- Indexes for table `tbmahasiswa`
--
ALTER TABLE `tbmahasiswa`
  ADD PRIMARY KEY (`nim`) USING BTREE;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbabsensi`
--
ALTER TABLE `tbabsensi`
  ADD CONSTRAINT `tbabsensi_ibfk_2` FOREIGN KEY (`idjadwal`) REFERENCES `tbjadwal` (`idjadwal`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbabsensi_ibfk_3` FOREIGN KEY (`nim`) REFERENCES `tbmahasiswa` (`nim`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
