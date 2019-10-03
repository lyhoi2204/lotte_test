-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 03, 2019 lúc 08:07 AM
-- Phiên bản máy phục vụ: 5.7.23
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vueform`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `inventories`
--

DROP TABLE IF EXISTS `inventories`;
CREATE TABLE IF NOT EXISTS `inventories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `inventories`
--

INSERT INTO `inventories` (`id`, `product_id`, `quantity`, `type`, `updated_date`) VALUES
(1, 1, 3, 1, '2019-09-27 08:01:26'),
(2, 2, 4, 1, '2019-09-27 08:01:26'),
(3, 3, 4, 1, '2019-09-27 08:01:37'),
(4, 4, 3, 1, '2019-09-27 08:01:37'),
(5, 5, 5, 1, '2019-09-27 08:01:55'),
(6, 6, 4, 1, '2019-09-28 08:01:55'),
(7, 1, 3, 2, '2019-09-28 08:02:07'),
(8, 2, 3, 2, '2019-09-28 08:02:07'),
(9, 1, 4, 1, '2019-09-28 08:02:47'),
(10, 2, 4, 1, '2019-09-29 08:02:47'),
(11, 1, 4, 1, '2019-09-29 08:04:04'),
(12, 2, 4, 1, '2019-09-29 08:04:04'),
(13, 3, 4, 2, '2019-09-29 08:04:04'),
(14, 4, 4, 1, '2019-09-29 08:04:04'),
(15, 5, 4, 2, '2019-09-30 08:04:04'),
(16, 4, 4, 2, '2019-09-30 08:04:04'),
(17, 5, 4, 1, '2019-09-30 08:04:04'),
(18, 6, 4, 2, '2019-09-30 08:04:04'),
(19, 1, 4, 1, '2019-09-30 08:04:04'),
(20, 4, 4, 1, '2019-09-30 08:04:04'),
(21, 3, 4, 2, '2019-10-01 08:04:04'),
(22, 4, 4, 1, '2019-09-30 17:00:00'),
(23, 3, 4, 1, '2019-10-01 08:04:04'),
(24, 4, 4, 2, '2019-09-30 17:00:00'),
(25, 4, 4, 1, '2019-10-01 08:04:04'),
(26, 1, 4, 2, '2019-10-03 08:04:04'),
(27, 4, 4, 1, '2019-10-02 08:04:04'),
(28, 5, 4, 2, '2019-10-02 08:04:04'),
(29, 2, 4, 1, '2019-10-02 08:04:04'),
(30, 6, 4, 1, '2019-10-02 08:04:04'),
(31, 5, 4, 2, '2019-10-03 08:04:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
