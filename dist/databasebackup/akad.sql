-- phpMyAdmin SQL Dump
-- version 5.2.1deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2023 at 09:11 AM
-- Server version: 10.11.2-MariaDB-1
-- PHP Version: 8.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `akad`
--

CREATE TABLE `akad` (
  `id` int(10) NOT NULL,
  `nama` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `merek` varchar(100) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `avatar` varchar(250) NOT NULL,
  `komen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akad`
--

INSERT INTO `akad` (`id`, `nama`, `tanggal`, `merek`, `gambar`, `avatar`, `komen`) VALUES
(1, 25, '2023-06-15', 'VARIO 125 CC', 'cover.jpg', '', ''),
(2, 16, '2023-06-16', 'vario', 'akad25.jpg', '', ''),
(58, 16, '2023-06-16', 'merek', 'akad15.jpg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akad`
--
ALTER TABLE `akad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akad`
--
ALTER TABLE `akad`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akad`
--
ALTER TABLE `akad`
  ADD CONSTRAINT `akad_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `tamu` (`id_tamu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
