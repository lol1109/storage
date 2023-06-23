-- phpMyAdmin SQL Dump
-- version 5.2.1deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2023 at 02:27 AM
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
(58, 16, '2023-06-16', 'merek', 'akad15.jpg', '', ''),
(59, 16, '2023-06-21', 'vario 123', 'cover5.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` int(10) NOT NULL,
  `nama_cabang` varchar(50) NOT NULL,
  `kontak` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`id_cabang`, `nama_cabang`, `kontak`) VALUES
(1, 'Elang Motor Padang ', '081122334453'),
(9, 'Elang motor pekanbaru', '0813293761278'),
(12, 'Elang motor medan', '0813293761278');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(10) NOT NULL,
  `judul_besar` varchar(1000) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  `action` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `judul_besar`, `desc`, `action`, `image`) VALUES
(1, 'Jual Beli Tanpa Riba', 'tanpa riba', 'see more', 'cover12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `persyaratan`
--

CREATE TABLE `persyaratan` (
  `id` int(10) NOT NULL,
  `judul_besar` varchar(1000) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `persyaratan`
--

INSERT INTO `persyaratan` (`id`, `judul_besar`, `desc`, `image`) VALUES
(1, 'Mudah & Cepat', 'Bagi Karyawan dan Pengusaha', 'Syarat4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(10) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_cabang` int(10) NOT NULL,
  `akses` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `id_cabang`, `akses`) VALUES
(1, 'afandy', 'admin', '$2y$10$7AV696HKzcfylGoyoSf3NOTqBIohaUcsD19xxD3GjOevUXG0eb8LW', 1, 'admin'),
(2, 'afandy', 'fandy', '$2y$10$ESGtH2rvhh3CpSD05gQuCevOZinRrcivQ3mkhhURZDR3UV4VMfjgy', 9, 'petugas'),
(5, 'ihsan', 'ihsan', '$2y$10$kIVSxGrnnW9jJE3x9C/1Au8hmpHR9zDL7dpXorWtlG0ZFyAV8sTlW', 1, 'petugas'),
(13, 'jhon', 'jhon12', '$2y$10$rzqr7ZjO6W3DvCvq0jRc/.vDItOBXkfBH8klDsvW/Fymyo.j7mUwe', 12, 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Kontak` varchar(15) NOT NULL,
  `noWa` varchar(15) NOT NULL,
  `Bidang` varchar(30) NOT NULL,
  `Tujuan` varchar(30) NOT NULL,
  `JenisInformasi` varchar(250) NOT NULL,
  `Informasi` varchar(40) NOT NULL,
  `Kesimpulan` varchar(250) NOT NULL,
  `tanggal` date NOT NULL,
  `cabang` int(10) NOT NULL,
  `petugas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `Nama`, `Kontak`, `noWa`, `Bidang`, `Tujuan`, `JenisInformasi`, `Informasi`, `Kesimpulan`, `tanggal`, `cabang`, `petugas`) VALUES
(16, 'ihsan', '0813293761278', '09276837162332', 'Elang Motor', 'Konsultasi', 'data', 'Youtube', '', '2023-05-17', 1, 5),
(19, 'budi', '081329376213', '08123456780', 'Elang Property', 'Pengajuan', 'data', 'Website', '', '2023-05-19', 1, 2),
(20, 'budi', '08132937612', '09276837162', 'Elang Property', 'Konsultasi', 'data', 'Postingan Instargam', 'mkjbhvhgv', '2023-05-24', 1, 2),
(22, 'budi', '08123456780', '08123456780', 'Elang Motor', 'Konsultasi', 'dDaAd', 'Postingan Instargam', '', '2023-05-25', 9, 5),
(25, 'fandy', '08123456789', '08123456789', 'Elang Property', 'Konsultasi', 'data', 'iklan Instargam', '', '2023-04-21', 1, 2),
(27, 'budianto', '0813293761279', '0927683716233', 'Elang Motor', 'Pengajuan', 'data', 'Postingan Instargam', '', '2023-05-24', 1, 2),
(29, 'marwan', '0856125362323', '0856125362323', 'Elang Property', 'Konsultasi', 'data', 'iklan google', '', '2023-06-12', 12, 5),
(30, 'ihsan', '0813293761275', '092768371623325', 'Elang Property', 'Konsultasi', 'sdasda', 'Postingan Instargam', '', '2023-06-21', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `gmail`, `username`, `password`) VALUES
(1, 'fandy@gmail.com', 'fandy', '$2y$10$pcqNDwLpHTRP6sr8uGoiT.32djhiFwW4qpdFJcjUYLC4p0RA.GSTC'),
(2, 'jhon@gmail.com', 'jhon', '$2y$10$g8mYPct9OvCSd10aWykju.i/hZLAZYABzLSWwKS3wUWIVJ2m8DhuC'),
(3, 'fandy@gmail.com', 'fandy12', '$2y$10$Yu2DTIUZP3TRLaX87YO2T.eTyPkENyfB.mZEYCb0yrzHLtasydKn2');

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
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persyaratan`
--
ALTER TABLE `persyaratan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_cabang` (`id_cabang`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`),
  ADD UNIQUE KEY `Kontak` (`Kontak`,`noWa`),
  ADD KEY `id_cabang` (`cabang`),
  ADD KEY `petugas` (`petugas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akad`
--
ALTER TABLE `akad`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `persyaratan`
--
ALTER TABLE `persyaratan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akad`
--
ALTER TABLE `akad`
  ADD CONSTRAINT `akad_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `tamu` (`id_tamu`);

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_ibfk_1` FOREIGN KEY (`id_cabang`) REFERENCES `cabang` (`id_cabang`);

--
-- Constraints for table `tamu`
--
ALTER TABLE `tamu`
  ADD CONSTRAINT `tamu_ibfk_1` FOREIGN KEY (`cabang`) REFERENCES `cabang` (`id_cabang`),
  ADD CONSTRAINT `tamu_ibfk_2` FOREIGN KEY (`petugas`) REFERENCES `petugas` (`id_petugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
