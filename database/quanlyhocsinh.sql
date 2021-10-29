-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 04:28 PM
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
  `id` int(225) NOT NULL,
  `tendangnhap` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capdo` tinyint(2) DEFAULT 0
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
  `hocky` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diemm` float NOT NULL,
  `diemgk` float NOT NULL,
  `diemck` float NOT NULL,
  `diemtb` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diem`
--

INSERT INTO `diem` (`mahs`, `mamh`, `hocky`, `diemm`, `diemgk`, `diemck`, `diemtb`) VALUES
('HS00', 'MH00', 'Học kỳ 1 2021-2022', 10, 10, 10, 10),
('HS01', 'MH00', 'Học kỳ 1 2021-2022', 9, 9, 9, 9),
('HS02', 'MH00', 'Học kỳ 1 2021-2022', 9, 9, 9, 9);

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
('GV00', 'Nguyễn Văn A', 1, 'Giáo Viên', '1234567891', 'anv@gmail.com', 'Hà Nội'),
('GV01', 'Nguyễn Văn B', 1, 'Phó hiệu trưởng', '1234567892', 'bnv@gmail.com', 'Hà Nội');

-- --------------------------------------------------------

--
-- Table structure for table `hocsinh`
--

CREATE TABLE `hocsinh` (
  `mahs` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `malop` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `maph` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khoahoc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hocsinh`
--

INSERT INTO `hocsinh` (`mahs`, `malop`, `hoten`, `gioitinh`, `maph`, `diachi`, `khoahoc`) VALUES
('HS00', 'LOP0', 'Nguyễn Khương Duy', 1, 'PH00', 'Hà Nội', '2020-2023'),
('HS01', 'LOP0', 'Nguyễn Văn phú', 1, 'PH01', 'Hà Nội', '2020-2023'),
('HS02', 'LOP0', 'Bùi Thị Khánh Linh', 0, 'PH02', 'Hà Nội', '2020-2023');

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
('LOP0', '10A1', 'GV00'),
('LOP1', '10A2', 'GV01');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `mamh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `magv` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenmh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotiet` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`mamh`, `magv`, `tenmh`, `sotiet`) VALUES
('MH00', 'GV00', 'Toán', 45),
('MH01', 'GV00', 'Lý', 45),
('MH02', 'GV00', 'Hóa', 45);

-- --------------------------------------------------------

--
-- Table structure for table `phuhuynh`
--

CREATE TABLE `phuhuynh` (
  `maph` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenph` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phuhuynh`
--

INSERT INTO `phuhuynh` (`maph`, `tenph`, `sodt`, `email`) VALUES
('PH00', 'Phụ Huynh A', '1234567881', 'aph@gmail.com'),
('PH01', 'Phụ Huynh B', '1234567882', 'bph@gmail.com'),
('PH02', 'Phụ Huynh C', '1234567883', 'cph@gmail.com');

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
  ADD PRIMARY KEY (`mahs`,`mamh`),
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
  ADD KEY `malop` (`malop`),
  ADD KEY `maph` (`maph`);

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
-- Indexes for table `phuhuynh`
--
ALTER TABLE `phuhuynh`
  ADD PRIMARY KEY (`maph`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dangnhap`
--
ALTER TABLE `dangnhap`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`),
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`mahs`) REFERENCES `hocsinh` (`mahs`);

--
-- Constraints for table `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD CONSTRAINT `hocsinh_ibfk_1` FOREIGN KEY (`malop`) REFERENCES `lop` (`malop`),
  ADD CONSTRAINT `hocsinh_ibfk_2` FOREIGN KEY (`maph`) REFERENCES `phuhuynh` (`maph`);

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
