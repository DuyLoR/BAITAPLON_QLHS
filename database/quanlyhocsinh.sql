-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 12:23 PM
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
-- Table structure for table `dangnhap`
--

CREATE TABLE `dangnhap` (
  `id` int(11) NOT NULL,
  `tendangnhap` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capdo` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dangnhap`
--

INSERT INTO `dangnhap` (`id`, `tendangnhap`, `matkhau`, `capdo`) VALUES
(1, 'admin', 'admin', 1),
(2, 'giaovien', 'giaovien', 2),
(3, 'hocsinh', 'hocsinh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `diem`
--

CREATE TABLE `diem` (
  `mahs` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mamh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diemm` float NOT NULL,
  `diemgk` float NOT NULL,
  `diemck` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diem`
--

INSERT INTO `diem` (`mahs`, `mamh`, `diemm`, `diemgk`, `diemck`) VALUES
('HS00', 'MH00', 10, 10, 10),
('HS00', 'MH01', 8, 8, 8),
('HS00', 'MH02', 5, 5, 5),
('HS00', 'MH00', 1, 1, 1),
('HS00', 'MH00', 2, 2, 2),
('HS00', 'MH00', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `giaovien`
--

CREATE TABLE `giaovien` (
  `magv` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tengv` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `chucvu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giaovien`
--

INSERT INTO `giaovien` (`magv`, `tengv`, `gioitinh`, `chucvu`, `sodt`, `email`, `diachi`) VALUES
('GV00', 'Nguyễn Văn A', 1, 'Phó hiệu trưởng', '1234567891', 'anv@gmail.com', 'Hà Nội'),
('GV01', 'Nguyễn Văn B', 1, 'Giáo Viên', '1234567892', 'bnv@gmail.com', 'Hà Nội');

-- --------------------------------------------------------

--
-- Table structure for table `hocsinh`
--

CREATE TABLE `hocsinh` (
  `mahs` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenhs` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `malop` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khoahoc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenph` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hocsinh`
--

INSERT INTO `hocsinh` (`mahs`, `tenhs`, `malop`, `gioitinh`, `diachi`, `khoahoc`, `tenph`, `email`, `sdt`) VALUES
('HS00', 'Nguyễn Văn P', 'LOP00', 1, 'Hà Nội', '2020-2023', 'Phụ Huynh A', 'aph@gmail.com', '1234567881'),
('HS01', 'Nguyễn Thị H', 'LOP00', 0, 'Hà Nội', '2020-2023', 'Phụ Huynh B', 'bph@gmail.com', '1234567882'),
('HS02', 'Nguyễn Văn K', 'LOP01', 1, 'Hà Nội', '2020-2023', 'Phụ Huynh C', 'cph@gmail.com', '1234567883');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `malop` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenlop` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `magvcn` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`malop`, `tenlop`, `magvcn`) VALUES
('LOP00', '10A1', 'GV00'),
('LOP01', '10A2', 'GV01');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `mamh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenmh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `magv` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotiet` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`mamh`, `tenmh`, `magv`, `sotiet`) VALUES
('MH00', 'Toán', 'GV00', 45),
('MH01', 'Lý', 'GV00', 45),
('MH02', 'Hóa', 'GV00', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diem`
--
ALTER TABLE `diem`
  ADD KEY `mahs` (`mahs`),
  ADD KEY `mamh` (`mamh`);

--
-- Indexes for table `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`magv`);

--
-- Indexes for table `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD PRIMARY KEY (`mahs`),
  ADD KEY `malop` (`malop`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`malop`),
  ADD KEY `magvcn` (`magvcn`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`mamh`),
  ADD KEY `magv` (`magv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dangnhap`
--
ALTER TABLE `dangnhap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`mahs`) REFERENCES `hocsinh` (`mahs`),
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`);

--
-- Constraints for table `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD CONSTRAINT `hocsinh_ibfk_1` FOREIGN KEY (`malop`) REFERENCES `lop` (`malop`);

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`magvcn`) REFERENCES `giaovien` (`magv`);

--
-- Constraints for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `monhoc_ibfk_1` FOREIGN KEY (`magv`) REFERENCES `giaovien` (`magv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
