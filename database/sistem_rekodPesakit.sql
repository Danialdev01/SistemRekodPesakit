-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2023 at 04:07 AM
-- Server version: 10.9.4-MariaDB
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_rekodPesakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesakit`
--

CREATE TABLE `pesakit` (
  `id_pesakit` int(11) NOT NULL,
  `nama_pesakit` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `suhu` int(100) NOT NULL,
  `tarikh` date NOT NULL,
  `catatan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesakit`
--

INSERT INTO `pesakit` (`id_pesakit`, `nama_pesakit`, `alamat`, `suhu`, `tarikh`, `catatan`) VALUES
(383, 'some', 'something', 39, '2023-02-23', 'someting f'),
(393, 'danial', 'putrajaya', 83, '2023-02-23', 'nothingthingsome');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesakit`
--
ALTER TABLE `pesakit`
  ADD PRIMARY KEY (`id_pesakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesakit`
--
ALTER TABLE `pesakit`
  MODIFY `id_pesakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1783;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
