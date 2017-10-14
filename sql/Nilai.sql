-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2017 at 07:45 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TugasPWL`
--

-- --------------------------------------------------------

--
-- Table structure for table `Nilai`
--

CREATE TABLE `Nilai` (
  `id` int(15) NOT NULL,
  `kode_mk` varchar(20) NOT NULL,
  `nama_mk` varchar(50) NOT NULL,
  `sks` smallint(10) NOT NULL,
  `nrp` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `semester` smallint(10) NOT NULL,
  `tugas` double NOT NULL,
  `uts` double NOT NULL,
  `uas` double NOT NULL,
  `nilaiakhir` double NOT NULL,
  `indeks` varchar(5) NOT NULL,
  `nxk` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Nilai`
--
ALTER TABLE `Nilai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Nilai`
--
ALTER TABLE `Nilai`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
