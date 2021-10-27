-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 03:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlyhocsinh`
--

-- --------------------------------------------------------

--
-- Table structure for table `hocsinh`
--

CREATE TABLE `hocsinh` (
  `mahs` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenhs` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `malop` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `dantoc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `socmnd` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khoahoc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD PRIMARY KEY (`mahs`,`malop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
