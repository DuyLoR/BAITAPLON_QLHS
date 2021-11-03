-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2021 lúc 03:57 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlyhocsinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `tendangnhap` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capdo` tinyint(2) NOT NULL DEFAULT 0,
  `mahs` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `magv` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`tendangnhap`, `matkhau`, `capdo`, `mahs`, `magv`) VALUES
('admin', '$2y$10$uzMp1V1Yc7XJ3ISLZoCGhudqnCHAvbaArW7J9Zb8X43oXoGAt0CTq', 1, NULL, NULL),
('giaovien', 'giaovien', 2, NULL, 'GV00'),
('hocsinh', 'hocsinh', 0, 'HS00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `mahs` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mamh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diemm` float NOT NULL,
  `diemgk` float NOT NULL,
  `diemck` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`mahs`, `mamh`, `diemm`, `diemgk`, `diemck`) VALUES
('HS00', 'MH01', 3, 2, 1),
('HS00', 'MH02', 5, 5, 5),
('HS01', 'MH00', 1, 1, 1),
('HS00', 'MH01', 3, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
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
-- Đang đổ dữ liệu cho bảng `giaovien`
--

INSERT INTO `giaovien` (`magv`, `tengv`, `gioitinh`, `chucvu`, `sodt`, `email`, `diachi`) VALUES
('ac', 'ac', 1, 'ac', 'ac', 'ac', 'ac'),
('GV00', 'Nguyễn Văn A', 1, 'Phó hiệu trưởng', '1234567891', 'anv@gmail.com', 'Hà Nội'),
('GV01', 'Nguyễn Văn B', 0, 'Giáo Viên', '1234567892', 'bnv@gmail.com', 'Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocsinh`
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
-- Đang đổ dữ liệu cho bảng `hocsinh`
--

INSERT INTO `hocsinh` (`mahs`, `tenhs`, `malop`, `gioitinh`, `diachi`, `khoahoc`, `tenph`, `email`, `sdt`) VALUES
('a', 'b', 'LOP00', 1, 'a', 'a', 'a', 'b', 'a'),
('HS00', 'Nguyễn Văn P', 'LOP00', 1, 'Hà Nội', '2020-2023', 'Phụ Huynh A', 'aph@gmail.com', '1234567881'),
('HS01', 'Nguyễn Thị H', 'LOP00', 0, 'Hà Nội', '2020-2023', 'Phụ Huynh B', 'bph@gmail.com', '1234567882'),
('HS02', 'Nguyễn Văn K', 'LOP01', 0, 'Hà Nội', '2020-2023', 'Phụ Huynh C', 'cph@gmail.com', '1234567883');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `malop` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenlop` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `magvcn` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`malop`, `tenlop`, `magvcn`) VALUES
('LOP00', '10A1', 'GV01'),
('LOP01', '10A2', 'GV01'),
('phu', 'phu', 'GV00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `mamh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenmh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `magv` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotiet` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`mamh`, `tenmh`, `magv`, `sotiet`) VALUES
('MH00', 'Toán', 'GV00', 45),
('MH01', 'Lý', 'GV00', 45),
('MH02', 'Hóa', 'GV01', 45);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`tendangnhap`),
  ADD KEY `mahs` (`mahs`),
  ADD KEY `magv` (`magv`);

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD KEY `mahs` (`mahs`),
  ADD KEY `mamh` (`mamh`);

--
-- Chỉ mục cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`magv`);

--
-- Chỉ mục cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD PRIMARY KEY (`mahs`),
  ADD KEY `malop` (`malop`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`malop`),
  ADD KEY `magvcn` (`magvcn`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`mamh`),
  ADD KEY `magv` (`magv`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD CONSTRAINT `dangnhap_ibfk_1` FOREIGN KEY (`mahs`) REFERENCES `hocsinh` (`mahs`),
  ADD CONSTRAINT `dangnhap_ibfk_2` FOREIGN KEY (`magv`) REFERENCES `giaovien` (`magv`);

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`mahs`) REFERENCES `hocsinh` (`mahs`),
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`);

--
-- Các ràng buộc cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD CONSTRAINT `hocsinh_ibfk_1` FOREIGN KEY (`malop`) REFERENCES `lop` (`malop`);

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`magvcn`) REFERENCES `giaovien` (`magv`);

--
-- Các ràng buộc cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `monhoc_ibfk_1` FOREIGN KEY (`magv`) REFERENCES `giaovien` (`magv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
