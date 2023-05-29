-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221222.e5e070c814
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 03:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telpon` varchar(25) NOT NULL,
  `status_akun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `email`, `password`, `no_telpon`, `status_akun`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '089529307135', 'admin'),
(2, 'jack', 'jackson@gmail.com', '321', '', ''),
(3, 'ada', 'ada@gmail.com', '123', '089231239231', 'user'),
(4, 'adaasd', 'asdas@gmail.com', '123', '082932131123', 'user'),
(5, 'bangtoyip', 'toyip@gmail.com', '123', '082391231923', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laundry`
--

CREATE TABLE `tb_laundry` (
  `id` int(11) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `berat` float NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_laundry`
--

INSERT INTO `tb_laundry` (`id`, `customer`, `jumlah`, `berat`, `tanggal`, `status`, `jenis`) VALUES
(1, 'rio', 2, 2, '01/05/2023 02:49:40 am', 'selesai', 'celana'),
(6, 'FIF', 5, 3, '01/05/2023 08:24:43 pm', 'proses', 'kemeja'),
(7, 'ada', 5, 3, '01/05/2023 02:49:40 am', 'proses', 'kemeja'),
(8, 'ada', 4, 2, '01/05/2023 08:54:40 pm', 'selesai', 'baju'),
(11, 'surryan', 5, 3, '01/05/2023 06:53:34 pm', 'proses', 'baju batik'),
(12, 'bangtoyip', 2, 1, '01/05/2023 09:11:44 pm', 'proses', 'sweeter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_laundry`
--
ALTER TABLE `tb_laundry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_laundry`
--
ALTER TABLE `tb_laundry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
