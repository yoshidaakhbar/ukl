-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2024 at 08:44 AM
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
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_game`
--

CREATE TABLE `daftar_game` (
  `id` int(11) NOT NULL,
  `nama_game` varchar(200) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `link` varchar(250) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_game`
--

INSERT INTO `daftar_game` (`id`, `nama_game`, `genre`, `link`, `foto`) VALUES
(1, 'abc kids', 'anak anak', 'https://play.google.com/store/apps/details?id=com.rvappstudios.abc_kids_toddler_tracing_phonics&hl=id&gl=US', ''),
(2, 'yoshi', 'dewasa', 'uuu', ''),
(3, 'jj', 'dewasa', 'jj', ''),
(4, 'abc game', 'anak anak ', 'abc.com', ''),
(5, 'thomas ', 'anak anak ', 'thomas', ''),
(6, 'thomas', 'anak anak ', 'thomas', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Admin game', 'admin', 'admin', 'admin'),
(2, 'User', 'user', 'user', 'user'),
(3, 'User', 'yoshi', 'yoshi', 'user'),
(4, 'naruto uzumaki', 'naruto', 'naruto', 'user'),
(5, 'anu', 'anu', 'anu', 'user'),
(6, 'user', 'user', 'user', 'user'),
(7, 'nolan', 'nolan', 'nolan', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_game`
--
ALTER TABLE `daftar_game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_game`
--
ALTER TABLE `daftar_game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
