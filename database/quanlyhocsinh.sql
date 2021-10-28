-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 05:22 PM
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
  `hoten` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tendangnhap` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantrivien` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dangnhap`
--

INSERT INTO `dangnhap` (`id`, `hoten`, `tendangnhap`, `matkhau`, `quantrivien`) VALUES
(1, 'Nguyễn Khương Duy', 'admin', 'admin', 1),
(2, 'Nguyễn Văn phú', 'admin1', 'admin1', 1),
(3, 'Bùi Thị Khánh Linh', 'admin2', 'admin2', 1),
(4, 'Nguyễn Văn A', 'abc', 'abc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `diem`
--

CREATE TABLE `diem` (
  `mahs` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mamh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hocky` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diemgk` float NOT NULL,
  `diemthi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diem`
--

INSERT INTO `diem` (`mahs`, `mamh`, `hocky`, `diemgk`, `diemthi`) VALUES
('HS00', 'MH00', 'Học kỳ 1', 10, 10),
('HS01', 'MH00', 'Học kỳ 1', 9, 9),
('HS02', 'MH00', 'Học kỳ 1', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `giaovien`
--

CREATE TABLE `giaovien` (
  `magv` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tengv` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `chucvu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodt` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giaovien`
--

INSERT INTO `giaovien` (`magv`, `tengv`, `gioitinh`, `chucvu`, `sodt`, `email`, `diachi`) VALUES
('GV00', 'Nguyễn Văn A', 1, 'Giáo Viên', '1234567891', 'anv@gmail.com', 'Hà Nội'),
('GV01', 'Nguyễn Văn B', 1, 'Giáo Viên', '1234567892', 'bnv@gmail.com', 'Hà Nam'),
('GV02', 'Nguyễn Văn C', 1, 'Phó hiệu trưởng', '1234567893', 'cnv@gmail.com', 'Hà Nội');

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
  `khoahoc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hocsinh`
--

INSERT INTO `hocsinh` (`mahs`, `tenhs`, `malop`, `gioitinh`, `diachi`, `khoahoc`) VALUES
('HS00', 'Nguyễn Văn P', '10A1', 1, 'Hà Nội', '2020-2023'),
('HS01', 'Nguyễn Văn H', '10A1', 1, 'Hà Nội', '2020-2023'),
('HS02', 'Nguyễn Văn K', '10A1', 1, 'Hà Nội', '2020-2023');

-- --------------------------------------------------------

--
-- Table structure for table `khenthuong`
--

CREATE TABLE `khenthuong` (
  `makt` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mahs` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hocky` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaykt` date NOT NULL,
  `ghichu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khenthuong`
--

INSERT INTO `khenthuong` (`makt`, `mahs`, `hocky`, `ngaykt`, `ghichu`) VALUES
('KT00', 'HS00', 'Học kỳ 1', '2021-10-28', 'Học giỏi ');

-- --------------------------------------------------------

--
-- Table structure for table `kiluat`
--

CREATE TABLE `kiluat` (
  `makl` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mahs` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hocki` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaykl` date NOT NULL,
  `ghichu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kiluat`
--

INSERT INTO `kiluat` (`makl`, `mahs`, `hocki`, `ngaykl`, `ghichu`) VALUES
('KL00', 'HS02', 'Học kỳ 1', '2021-10-28', 'Bỏ thi');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `malop` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenlop` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `magvcn` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`malop`, `tenlop`, `magvcn`) VALUES
('10A1', '10A1', 'GV01'),
('10A2', '10A2', 'GV00');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `mamh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenmh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotiet` int(225) NOT NULL,
  `magv` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`mamh`, `tenmh`, `sotiet`, `magv`) VALUES
('MH00', 'Toán', 45, 'GV00'),
('MH00', 'Toán', 45, 'GV01'),
('MH01', 'Lý', 45, 'GV00'),
('MH02', 'Hóa', 45, 'GV00');

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
  ADD PRIMARY KEY (`mahs`,`malop`),
  ADD KEY `malop` (`malop`);

--
-- Indexes for table `khenthuong`
--
ALTER TABLE `khenthuong`
  ADD PRIMARY KEY (`makt`,`mahs`),
  ADD KEY `mahs` (`mahs`);

--
-- Indexes for table `kiluat`
--
ALTER TABLE `kiluat`
  ADD PRIMARY KEY (`makl`,`mahs`),
  ADD KEY `mahs` (`mahs`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`malop`,`magvcn`),
  ADD KEY `magvcn` (`magvcn`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`mamh`,`magv`),
  ADD KEY `magv` (`magv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dangnhap`
--
ALTER TABLE `dangnhap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Constraints for table `khenthuong`
--
ALTER TABLE `khenthuong`
  ADD CONSTRAINT `khenthuong_ibfk_1` FOREIGN KEY (`mahs`) REFERENCES `hocsinh` (`mahs`);

--
-- Constraints for table `kiluat`
--
ALTER TABLE `kiluat`
  ADD CONSTRAINT `kiluat_ibfk_1` FOREIGN KEY (`mahs`) REFERENCES `hocsinh` (`mahs`);

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
