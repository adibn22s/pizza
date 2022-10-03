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
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `deskripsi_pembelian` varchar(255) NOT NULL,
  `total_harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `deskripsi_pembelian`, `total_harga`) VALUES
(1, 1, 1, 1, '', 100000),
(2, 1, 2, 2, '', 0),
(3, 4, 4, 1, '', 0),
(4, 4, 2, 1, '', 0),
(5, 5, 4, 1, '', 0),
(6, 5, 2, 1, '', 0),
(7, 6, 6, 1, '', 0),
(8, 7, 6, 1, '', 78300),
(9, 8, 1, 1, '', 64000),
(10, 9, 1, 2, '', 119000),
(11, 10, 1, 1, 'ga pedes', 64000),
(12, 11, 5, 1, 'ga pake daging', 64000),
(13, 12, 1, 1, 'ga pake daging', 64000),
(14, 13, 1, 1, '', 64000),
(15, 14, 27, 1, '', 97000),
(16, 15, 1, 1, '', 174000),
(17, 15, 3, 2, '', 174000),
(18, 16, 5, 1, '', 64000),
(19, 17, 26, 1, '', 78300),
(20, 18, 1, 1, '', 64000),
(21, 19, 4, 1, '', 64000),
(22, 20, 1, 1, '', 64000),
(23, 21, 1, 1, '', 64000),
(24, 22, 3, 1, '', 64000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



