-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220423.6d54ac471a
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 06:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webp`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `deskripsi_pembelian` varchar(255) NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `status_pembelian` varchar(100) NOT NULL DEFAULT 'pending',
  `no_pengiriman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_user`, `tanggal_pembelian`, `deskripsi_pembelian`, `total_pembelian`, `status_pembelian`, `no_pengiriman`) VALUES
(1, 1, '2022-04-30', 'ga pake sayur', 200000, 'Selesai', 'ADB001'),
(2, 3, '2022-05-01', '', 100000, 'Selesai', ''),
(3, 1, '2022-05-12', '', 100300, 'Lunas', '0'),
(4, 1, '2022-05-12', '', 100300, 'Lunas', '0'),
(5, 1, '2022-05-12', '', 100300, 'pending', '0'),
(6, 1, '2022-05-12', '', 78300, 'pending', '0'),
(7, 1, '2022-05-12', '', 78300, 'pending', '0'),
(8, 1, '2022-05-16', '', 64000, 'pending', '0'),
(9, 1, '2022-05-16', '', 119000, 'pending', '0'),
(10, 1, '2022-05-16', 'gak pedes', 64000, 'pending', '0'),
(11, 1, '2022-05-22', 'ga pake daging', 64000, 'Selesai', ''),
(12, 1, '2022-05-25', 'ga pake daging', 64000, 'pending', ''),
(13, 1, '2022-05-25', '', 64000, 'pending', ''),
(14, 1, '2022-05-28', '', 97000, 'pending', ''),
(15, 1, '2022-05-28', '', 174000, 'pending', ''),
(16, 1, '2022-06-17', '', 64000, 'pending', ''),
(17, 1, '2022-06-17', '', 78300, 'pending', ''),
(18, 1, '2022-06-20', '', 64000, 'pending', ''),
(19, 1, '2022-06-20', '', 64000, 'pending', ''),
(20, 1, '2022-06-20', '', 64000, 'pending', ''),
(21, 1, '2022-06-20', '', 64000, 'pending', ''),
(22, 1, '2022-06-20', '', 64000, 'Lunas', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



