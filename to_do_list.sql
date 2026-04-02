-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2026 at 06:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `to_do_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `detyrat`
--

CREATE TABLE `detyrat` (
  `id` int(11) NOT NULL,
  `titulli_detyres` varchar(100) NOT NULL,
  `pershkrimi_detyres` varchar(300) NOT NULL,
  `statusi` enum('paperfunduar','perfunduar','','') NOT NULL DEFAULT 'paperfunduar',
  `data_fillimit` date NOT NULL,
  `data_perfundimit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detyrat`
--

INSERT INTO `detyrat` (`id`, `titulli_detyres`, `pershkrimi_detyres`, `statusi`, `data_fillimit`, `data_perfundimit`) VALUES
(1, 'adsd', 'gagagagagaga', 'paperfunduar', '2026-03-19', '2026-04-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detyrat`
--
ALTER TABLE `detyrat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `titulli_detyres` (`titulli_detyres`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detyrat`
--
ALTER TABLE `detyrat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
