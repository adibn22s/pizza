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
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga_produk` int(100) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `stok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `kategori`, `harga_produk`, `foto_produk`, `deskripsi`, `stok`) VALUES
(1, 'Pepperoni Pizza', 'Pizza', 50000, '1.png', 'pizza isi daging dan keju', '2'),
(2, 'chicken wings', 'Appetizer', 33000, '13.png', 'sayap ayam goreng ', '5'),
(3, 'White Muhsroom Pizza', 'Pizza', 50000, '2.png', 'Pizza dengan jamur', '2'),
(4, 'Meat Monsta Pizza', 'Pizza', 50000, '6.png', 'Pizza Dengan Daging Yang Berlimpah ', '4'),
(13, 'Peace Juice', 'Minuman', 29000, '14.png', 'minuman segar', '0'),
(15, 'Rice Chicken Bowl', 'Nasi', 25000, '34.png', 'nasi dan ayam', '0'),
(26, 'Beef Lasagna', 'Pasta', 63000, '42.png', 'pasta dengan saus bolognese asal italia', '4'),
(27, 'Beli 2 Dapat 3', 'Promo', 80000, '12.jpg', 'Beli 2 dapat 3 pizza', '2'),
(28, 'Seafood Pizza', '', 50000, '3.png', 'pizza dengan toping seafood', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



