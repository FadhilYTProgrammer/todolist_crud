-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2022 at 01:28 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `todo` varchar(255) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `statuss` enum('Selesai','Belum Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `todo`, `keterangan`, `statuss`) VALUES
(1, 'Bikin To Do List', 'hari ini', 'Selesai'),
(2, 'Buat List', 'Sekarang', 'Belum Selesai'),
(5, 'Nampar Zirjy', '2 menit lagi', 'Selesai'),
(13, 'Nampar maul', 'besok', 'Belum Selesai'),
(14, 'Beli Iphone', 'Yang Varian 256Gb', 'Selesai'),
(18, 'Nampar maul', '3 kali', 'Belum Selesai'),
(20, 'Jajanin Faqiy', 'Beliin takjil', 'Selesai'),
(22, 'Nampar maul', '3 kali', 'Belum Selesai'),
(23, 'gfgf', 'gfgf', 'Selesai'),
(24, 'Jajanin Faqiy', 'Minimal 20.000', 'Belum Selesai'),
(25, 'gfgf', 'Beliin takjil', 'Belum Selesai'),
(26, 'ajsabdfkj', 'askjbdfkjasdi', 'Belum Selesai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
