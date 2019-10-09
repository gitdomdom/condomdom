-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 22, 2019 lúc 11:11 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cbteam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `name`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tensp` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(15) DEFAULT NULL,
  `chitiet` text COLLATE utf8_unicode_ci NOT NULL,
  `loaisp` text COLLATE utf8_unicode_ci NOT NULL,
  `hangsx` text COLLATE utf8_unicode_ci NOT NULL,
  `sldaban` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `image`, `gia`, `chitiet`, `loaisp`, `hangsx`, `sldaban`) VALUES
(1, 'laptop 1', 'laptop-1.jpg', 13000000, '<p>Đ&acirc;y l&agrave; laptop&nbsp;</p>\r\n', 'laptop', 'Asus', 2),
(2, 'laptop 2', 'laptop-2.jpg', 14000000, '<p>Đ&acirc;y l&agrave; một chiếc laptop</p>\r\n', 'laptop', 'Dell', 2),
(3, 'laptop 3', 'laptop-3.jpg', 13000000, '<p>Đ&acirc;y l&agrave; laptop</p>\r\n', 'laptop', 'Acer', 2),
(4, 'laptop 4', 'laptop-4.jpg', 13000000, '<p>đ&acirc;y l&agrave; laptop</p>\r\n', 'laptop', 'MSI', 2),
(5, 'laptop 5', 'laptop-5.jpg', 15000000, '<p>Đ&acirc;y l&agrave; laptop gaming</p>\r\n', 'laptop', 'Hp', 2),
(6, 'Smartphone 1', 'dienthoai-1.jpg', 14000000, '<p>Đ&acirc;y l&agrave; Smartphone</p>\r\n', 'smartphone', 'Samsung', 2),
(7, 'Smartphone 2', 'dienthoai-2.jpg', 14000000, '<p>Đ&acirc;y l&agrave; Smartphone</p>\r\n', 'smartphone', 'Samsung', 2),
(8, 'Smartphone 3', 'dienthoai-3.jpg', 14000000, '<p>Đ&acirc;y l&agrave; Smartphone</p>\r\n', 'smartphone', 'Samsung', 2),
(9, 'Smartphone 4', 'dienthoai-4.jpg', 14000000, '<p>Đ&acirc;y l&agrave; Smartphone</p>\r\n', 'smartphone', 'Samsung', 2),
(10, 'Smartphone 5', 'dienthoai-5.jpg', 14000000, '<p>Đ&acirc;y l&agrave; Smartphone</p>\r\n', 'smartphone', 'Samsung', 2),
(11, 'Smartphone 6', 'dienthoai-6.jpg', 14000000, '<p>Đ&acirc;y l&agrave; Smartphone</p>\r\n', 'smartphone', 'Samsung', 2),
(12, 'Smartphone 7', 'dienthoai-7.jpg', 14000000, '<p>Đ&acirc;y l&agrave; Smartphone</p>\r\n', 'smartphone', 'Samsung', 2),
(13, 'Smartphone 8', 'dienthoai-8.jpg', 14000000, '<p>Đ&acirc;y l&agrave; Smartphone</p>\r\n', 'smartphone', 'Samsung', 2),
(14, 'Smartphone 9', 'dienthoai-9.jpg', 14000000, '<p>Đ&acirc;y l&agrave; Smartphone</p>\r\n', 'smartphone', 'Samsung', 2),
(15, 'Smartphone 10', 'dienthoai-10.jpg', 14000000, '<p>Đ&acirc;y l&agrave; Smartphone</p>\r\n', 'smartphone', 'Samsung', 2),
(19, 'camera 1', 'camera-1.jpg', 18000000, '<p>Đ&acirc;y l&agrave; camera</p>\r\n', 'camera', 'Nikon', 2),
(20, 'camera 2', 'camera-2.jpg', 18000000, '<p>Đ&acirc;y l&agrave; camera</p>\r\n', 'camera', 'Nikon', 2),
(21, 'camera 3', 'camera-3.jpg', 18000000, '<p>Đ&acirc;y l&agrave; camera</p>\r\n', 'camera', 'Nikon', 2),
(22, 'camera 4', 'camera-4.jpg', 18000000, '<p>Đ&acirc;y l&agrave; camera</p>\r\n', 'camera', 'Nikon', 2),
(23, 'camera 5', 'camera-5.jpg', 18000000, '<p>Đ&acirc;y l&agrave; camera</p>\r\n', 'camera', 'Nikon', 2),
(24, 'Moto 1', 'moto-1.jpg', 200000000, '<p>đ&acirc;y l&agrave; xe moto</p>\r\n', 'moto', 'ducati', 2),
(25, 'Moto 2', 'moto-2.jpg', 200000000, '<p>đ&acirc;y l&agrave; xe moto</p>\r\n', 'moto', 'ducati', 2),
(26, 'Moto 3', 'moto-3.jpg', 200000000, '<p>đ&acirc;y l&agrave; xe moto</p>\r\n', 'moto', 'ducati', 2),
(27, 'Moto 4', 'moto-4.jpg', 200000000, '<p>đ&acirc;y l&agrave; xe moto</p>\r\n', 'moto', 'ducati', 2),
(28, 'Moto 5', 'moto-5.jpg', 200000000, '<p>đ&acirc;y l&agrave; xe moto</p>\r\n', 'moto', 'ducati', 2),
(29, 'oto 1', 'oto-1.jpg', 2000000, '<p>Đ&acirc;y l&agrave; oto</p>\r\n', 'oto', 'audi', 2),
(30, 'oto 2', 'oto-2.jpg', 2000000, '<p>Đ&acirc;y l&agrave; oto</p>\r\n', 'oto', 'audi', 2),
(31, 'oto 3', 'oto-3.jpg', 2000000, '<p>Đ&acirc;y l&agrave; oto</p>\r\n', 'oto', 'audi', 2),
(32, 'oto 4', 'oto-4.jpg', 2000000, '<p>Đ&acirc;y l&agrave; oto</p>\r\n', 'oto', 'audi', 2),
(33, 'oto 5', 'oto-5.jpg', 2000000, '<p>Đ&acirc;y l&agrave; oto</p>\r\n', 'oto', 'audi', 2),
(39, 'đồng hồ 1', 'dongho-1.jpg', 2000000, '<p>Đ&acirc;y l&agrave; đồng hồ</p>\r\n', 'watch', 'rolex', 2),
(40, 'đồng hồ 2', 'dongho-2.jpg', 2000000, '<p>Đ&acirc;y l&agrave; đồng hồ</p>\r\n', 'watch', 'rolex', 2),
(41, 'đồng hồ 3', 'dongho-3.jpg', 2000000, '<p>Đ&acirc;y l&agrave; đồng hồ</p>\r\n', 'watch', 'rolex', 2),
(42, 'đồng hồ 4', 'dongho-4.jpg', 2000000, '<p>Đ&acirc;y l&agrave; đồng hồ</p>\r\n', 'watch', 'rolex', 2),
(44, 'máy tính bảng 1', 'maytinhbang-1.jpg', 2000000, '<p>Đ&acirc;y l&agrave; m&aacute;y t&iacute;nh bảng</p>\r\n', 'tablet', 'microsoft', 2),
(45, 'máy tính bảng 2', 'maytinhbang-2.jpg', 2000000, '<p>Đ&acirc;y l&agrave; m&aacute;y t&iacute;nh bảng</p>\r\n', 'tablet', 'microsoft', 2),
(46, 'usb 1', 'usb-1.jpg', 2000000, '<p>Đ&acirc;y l&agrave; usb</p>\r\n', 'usb', 'abc', 2),
(48, 'tivi 1', 'tv-1.jpg', 200000000, '<p>Đ&acirc;y l&agrave; tivi</p>\r\n', 'tv', 'abc', 2),
(49, 'tivi 2', 'tv-2.jpg', 25000000, '<p>Đ&acirc;y l&agrave; tivi</p>\r\n', 'tv', 'abc', 2),
(50, 'Tai nghe 1', 'tainghe-1.jpg', 200000000, '<p>Đ&acirc;y l&agrave; tai nghe</p>\r\n', 'tainghe', 'abc', 2),
(51, 'Tai nghe 2', 'tainghe-2.jpg', 250000, '<p>Đ&acirc;y l&agrave; tai nghe</p>\r\n', 'tainghe', 'abc', 2),
(52, 'Chuột máy tính 1', 'chuot-1.jpg', 200000, '<p>Đ&acirc;y l&agrave; chuột m&aacute;y t&iacute;nh</p>\r\n', 'chuot', 'abc', 2),
(53, 'Chuột máy tính 2', 'chuot-2.jpg', 200000, '<p>Đ&acirc;y l&agrave; chuột m&aacute;y t&iacute;nh</p>\r\n', 'chuot', 'abc', 2),
(55, 'Tv 3', 'tv-3.jpg', 14000000, '<p>Đ&acirc;y l&agrave; tv si&ecirc;u to khổng lồ&nbsp;</p>\r\n', 'tv', 'Samsung', 0),
(56, 'camera 6', 'camera-6.jpg', 19500000, '<p>Đ&acirc;y l&agrave; camera</p>\r\n', 'camera', 'nikon', 0),
(57, 'camera 7', 'camera-7.jpg', 14000000, '<p>Đ&acirc;y l&agrave; camera</p>\r\n', 'camera', 'Canon', 0),
(58, 'camera 8', 'camera-8.jpg', 14000000, '<p>Đ&acirc;y l&agrave; camera</p>\r\n', 'camera', 'nikon', 0),
(59, 'camera 9', 'camera-9.jpg', 14000000, '<p>Đ&acirc;y l&agrave; camera</p>\r\n', 'camera', 'Canon', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
