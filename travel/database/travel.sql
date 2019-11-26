-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2019 lúc 04:58 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB-log
-- Phiên bản PHP: 7.3.9

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `travel`
--
CREATE DATABASE IF NOT EXISTS `travel` DEFAULT CHARACTER SET utf8 COLLATE utf8_vietnamese_ci;
USE `travel`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `cmt_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `content` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `assess` int(11) NOT NULL,
  PRIMARY KEY (`cmt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`cmt_id`, `username`, `content`, `assess`) VALUES
(1, 'Nguyễn Văn Thành', 'Chất lượng dịch vụ khá tốt. Thông tin trung thực, rõ ràng. Thuận tiện theo lõi lịch trình', 3),
(2, 'Nguyễn Thành Trung', 'Chất lượng dịch vụ khá tốt. Thông tin trung thực, rõ ràng. Thuận tiện theo lõi lịch trình', 3),
(3, 'Vũ Đức Tiến', 'Chất lượng dịch vụ khá tốt. Thông tin trung thực, rõ ràng. Thuận tiện theo lõi lịch trình', 3),
(4, 'Trần Văn Thanh', 'Chất lượng dịch vụ khá tốt. Thông tin trung thực, rõ ràng. Thuận tiện theo lõi lịch trình', 3),
(5, 'Trần Thanh Quý', 'Chất lượng dịch vụ khá tốt. Thông tin trung thực, rõ ràng. Thuận tiện theo lõi lịch trình', 3),
(6, 'Thanh Lê Trần', 'Chất lượng dịch vụ khá tốt. Thông tin trung thực, rõ ràng. Thuận tiện theo lõi lịch trình', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cost_detail`
--

DROP TABLE IF EXISTS `cost_detail`;
CREATE TABLE IF NOT EXISTS `cost_detail` (
  `cost_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_cost_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  PRIMARY KEY (`cost_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `cost_detail`
--

INSERT INTO `cost_detail` (`cost_id`, `package_cost_id`, `place_id`, `cost`) VALUES
(1, 1, 1, 10000000),
(2, 1, 2, 12000000),
(3, 1, 3, 7700000),
(4, 1, 4, 5980000),
(5, 1, 5, 3600000),
(6, 1, 6, 4500000),
(7, 2, 1, 15000000),
(8, 2, 2, 18000000),
(9, 2, 3, 9990000),
(10, 2, 4, 7800000),
(11, 2, 5, 5200000),
(12, 2, 6, 6500000),
(13, 3, 1, 18000000),
(14, 3, 2, 20000000),
(15, 3, 3, 15000000),
(16, 3, 4, 9000000),
(17, 3, 5, 7000000),
(18, 3, 6, 8500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `hotel_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `assess` varchar(15) COLLATE utf8_vietnamese_ci NOT NULL,
  `place` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `cost` int(11) NOT NULL,
  `img` varchar(15) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`hotel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `title`, `assess`, `place`, `cost`, `img`) VALUES
(1, 'Marriott International', '89k', 'Maryland, Mỹ', 3000000, 'd1.jpg'),
(2, 'Hilton Worldwide', '65k', 'Virginia, Mỹ', 2800000, 'd2.jpg'),
(3, 'InterContinental Hotel', '64k', 'Denham, Vương quốc Anh', 2500000, 'd3.jpg'),
(4, 'Accor Hotels', '34k', 'Paris, Pháp', 2000000, 'd4.jpg'),
(5, 'Plateno Hotels', '37k', 'Quảng Châu, Trung Quốc', 2300000, 'd5.jpg'),
(6, 'Shanghai Jin Jiang', '31k', 'Thượng Hải, Trung Quốc', 1600000, 'd6.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotplaces`
--

DROP TABLE IF EXISTS `hotplaces`;
CREATE TABLE IF NOT EXISTS `hotplaces` (
  `hotplaces_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `place` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `cost` int(15) NOT NULL,
  `img` varchar(15) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`hotplaces_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hotplaces`
--

INSERT INTO `hotplaces` (`hotplaces_id`, `title`, `place`, `cost`, `img`) VALUES
(1, 'Dòng sông thơ mộng', 'Paraguay', 5000000, 'd1.jpg'),
(3, 'Thành phố ước mơ', 'Paris', 9800000, 'd2.jpg'),
(4, 'Núi trên mây', 'Sri Lanka', 7650000, 'd3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `package_cost`
--

DROP TABLE IF EXISTS `package_cost`;
CREATE TABLE IF NOT EXISTS `package_cost` (
  `package_cost_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`package_cost_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `package_cost`
--

INSERT INTO `package_cost` (`package_cost_id`, `title`) VALUES
(1, 'Gói giá rẻ'),
(2, 'Gói cao cấp'),
(3, 'Gói thương gia');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `place`
--

DROP TABLE IF EXISTS `place`;
CREATE TABLE IF NOT EXISTS `place` (
  `place_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`place_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `place`
--

INSERT INTO `place` (`place_id`, `name`) VALUES
(1, 'New York'),
(2, 'Trung Quốc'),
(3, 'Sri Lanka'),
(4, 'Nepal'),
(5, 'Thái Lan'),
(6, 'Singapore');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

DROP TABLE IF EXISTS `tour`;
CREATE TABLE IF NOT EXISTS `tour` (
  `tour_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `place` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `limits` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `times` date NOT NULL,
  `airport` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `outher` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `cost` int(15) NOT NULL,
  `img` varchar(15) COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`tour_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`tour_id`, `title`, `place`, `limits`, `times`, `airport`, `outher`, `cost`, `img`) VALUES
(1, 'Bắc Kinh - Trung Quốc', 'Beijing - China', '3 ngày và 4 đêm', '2019-04-18', 'Nội Bài', 'Bao trọn gói', 2500000, 'd1.jpg'),
(2, 'Paris - Pháp', 'Paris - France', '6 ngày và 7 đêm', '2019-05-15', 'Nội Bài', 'Bao trọn gói', 6700000, 'd2.jpg'),
(3, 'Vịnh Hạ Long - Việt Nam', 'HaLongBay - VietNam', '2 ngày và 3 đêm', '2019-07-14', 'Không', 'Bao trọn gói', 1500000, 'd3.jpg'),
(4, 'London - Vương Quốc Anh', 'London - United Kingdom', '3 ngày và 4 đêm', '2019-08-30', 'Tân Sơn Nhất', 'Bao trọn gói', 5500000, 'd4.jpg'),
(5, 'Hoa Kỳ', 'United staes of America', '2 ngày và 3 đêm', '2019-11-05', 'Tân Sơn Nhất', 'Bao trọn gói', 4500000, 'd5.jpg'),
(6, 'Seoul - Hàn Quốc', 'Seoul - Korea', '2 ngày và 3 đêm', '2019-07-10', 'Nội Bài', 'Bao trọn gói', 6700000, 'd6.jpg');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
