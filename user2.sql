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
-- Table structure for table `user2`
--

CREATE TABLE `user2` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `No_telp` int(13) NOT NULL,
  `Alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user2`
--

INSERT INTO `user2` (`id_user`, `nama`, `email`, `password`, `No_telp`, `Alamat`) VALUES
(1, 'test', 'test@gmail.com', '$2y$10$a6BYSSJ9eGwsYStiIxmJTe9ifW1TCVmHiUd2CE/xA8UZWRsEN6U92', 2134556, 'ny'),
(3, 'a', 'admin@gmail.com', '$2y$10$54w9a.tlUuaDZn6kgxZa6.UnZe..uPAQLutEUOBcIlJoUVhUqAShW', 1234567, 'washington'),
(4, 'adib', 'admin2@gmail.com', '$2y$10$v1hi/dkf.kwoIUeOU4.7Juvj9QZgAjWwrFu4Vv.R3JLRmVxFQ.Z26', 1234567, 'ny'),
(5, 'adib', 'admin3@gmail.com', '$2y$10$JNt.3sj6HCWTVHQJ2VnyEu.9CgqxMdvnp6vvGCdW1x2Qdgm3FyLG.', 1234567, 'ny');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user2`
--
ALTER TABLE `user2`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user2`
--
ALTER TABLE `user2`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



