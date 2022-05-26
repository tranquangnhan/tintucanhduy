-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 26, 2022 lúc 02:01 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tintucanhduy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendm` varchar(50) NOT NULL COMMENT 'Tên danh mục',
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendm`, `slug`) VALUES
(45, 'nhan', 'nhan'),
(47, 'Appo', 'appo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL COMMENT 'Tên điện thoại',
  `slug` varchar(255) NOT NULL,
  `content` longtext DEFAULT NULL,
  `views` int(8) NOT NULL,
  `date` date NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL COMMENT 'Mã user',
  `Username` varchar(30) NOT NULL COMMENT 'Tên đăng nhập',
  `Password` varchar(100) NOT NULL COMMENT 'Mật khẩu mã hóa bcrypt',
  `HoTen` varchar(50) NOT NULL COMMENT 'Họ và tên',
  `KichHoat` tinyint(1) DEFAULT NULL COMMENT 'Kích hoạt chưa, true =1 đã kích hoạt',
  `urlHinh` varchar(200) DEFAULT NULL COMMENT 'url hình',
  `Email` varchar(200) NOT NULL COMMENT 'địa chỉ email',
  `randomkey` varchar(255) NOT NULL,
  `VaiTro` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'vai trò, 0 là sinh vien, 1 là admin',
  `AnHien` tinyint(1) DEFAULT 1 COMMENT 'ẩn hiện'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`idUser`, `Username`, `Password`, `HoTen`, `KichHoat`, `urlHinh`, `Email`, `randomkey`, `VaiTro`, `AnHien`) VALUES
(1, 'admin', 'Tranquangnhan@1606', 'nhân', NULL, NULL, 'nhan@gmail.com', '', 1, 1),
(9, 'nhan111', '123456', '', 0, NULL, 'nhantqps11719@fpt.vn', '6c14da109e294d1e8155be8aa4b1ce8e', 0, 0),
(11, 'nhan1111', 'Tranquangnhan@1606', '', 1, NULL, 'nhantqps11719@fpt.edu.vn', 'd2804bda02d05ee5868227fb24f13c98', 0, 0),
(12, 'hang123', 'Hang@123', '', 0, NULL, 'hangdep123@gmail.com', 'bcad7b839e99d2542617d19206b9540a', 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã user', AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
