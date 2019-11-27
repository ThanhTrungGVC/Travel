-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 27, 2019 lúc 03:17 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

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
-- Cấu trúc bảng cho bảng `child_detail`
--

DROP TABLE IF EXISTS `child_detail`;
CREATE TABLE IF NOT EXISTS `child_detail` (
  `child_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `child_id` int(11) NOT NULL,
  `name` text COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`child_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `child_detail`
--

INSERT INTO `child_detail` (`child_detail_id`, `child_id`, `name`) VALUES
(1, 1, 'Trẻ em dưới 2 tuổi: 30% tổng giá trị tour và ngủ cùng bố mẹ'),
(2, 1, 'Trẻ em từ 2 đến 11 tuổi: 85% tổng giá trị tour và ngủ cùng bố mẹ'),
(3, 1, 'Trẻ em từ 2 đến 11 tuổi: 95% tổng giá trị tour và ngủ giường riêng'),
(4, 1, 'Trẻ em từ 12 tuổi trở lên: 100% tổng giá trị tour và ngủ giường riêng'),
(5, 1, 'Tổng số cháu được hưởng chính sách cho trẻ em không quá 3 cháu / đoàn. Các gia đình ký hợp đồng và đặt cọc trước được ưu tiên chính sách giảm giá cho trẻ em'),
(6, 1, 'Các gia đình đăng ký sau khi đoàn đã có đủ 3 trẻ em được giảm giá, thì các cháu đăng ký sau sẽ được tính như người lớn'),
(7, 1, 'Chính sách giảm giá cho trẻ em chỉ áp dụng khi 1 trẻ em đi cùng 02 người lớn và ngủ cùng phòng với 02 người lớn');

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_cost_detail`
--

DROP TABLE IF EXISTS `tour_cost_detail`;
CREATE TABLE IF NOT EXISTS `tour_cost_detail` (
  `tour_cost_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `tour_cost_id` int(11) NOT NULL,
  `name` text COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`tour_cost_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tour_cost_detail`
--

INSERT INTO `tour_cost_detail` (`tour_cost_detail_id`, `tour_cost_id`, `name`) VALUES
(1, 1, 'Phí tư vấn, hoàn thiện hồ sơ, khai form, đặt lịch hẹn xin visa'),
(2, 1, 'Phí dịch thuật, công chứng và hoàn tất hồ sơ nộp visa'),
(3, 1, 'Phí dịch thuật, công chứng và hoàn tất hồ sơ nộp visa'),
(4, 1, 'Vé máy bay khứ hồi quốc tế của hàng không cao cấp 5 sao Qatar Airlines, một trong những hãng hàng không lớn nhất thế giới.'),
(5, 1, 'Xe đón và tiễn sân bay cho đoàn tại Việt Nam.'),
(6, 1, 'Xe thăm quan tại Châu Âu chất lượng cao, lái xe kinh nghiệm theo chương trình (xe phục vụ tối đa 11 tiếng / ngày).'),
(7, 1, 'Khách sạn từ 4* sao tiêu chuẩn Châu Âu (02 khách ngủ 1 phòng)'),
(8, 1, 'Ăn các bữa theo chương trình'),
(9, 1, 'Vé thăm quan theo chương trình'),
(10, 1, 'Thuế, phí dành cho khách du lịch tại các thành phố theo chương trình'),
(11, 1, 'Bảo hiểm du lịch toàn cầu, mức bồi thường tối đa 1 tỉ VND'),
(12, 1, 'Hỗ trợ 24/7 trong suốt thời gian thăm quan Châu Âu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_detail`
--

DROP TABLE IF EXISTS `tour_detail`;
CREATE TABLE IF NOT EXISTS `tour_detail` (
  `tour_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `tour_id` int(11) NOT NULL,
  `post` text COLLATE utf8_vietnamese_ci NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `tour_cost_id` int(11) NOT NULL,
  `tour_not_cost_id` int(11) NOT NULL,
  `child_id` int(11) NOT NULL,
  PRIMARY KEY (`tour_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tour_detail`
--

INSERT INTO `tour_detail` (`tour_detail_id`, `tour_id`, `post`, `schedule_id`, `tour_cost_id`, `tour_not_cost_id`, `child_id`) VALUES
(1, 2, 'Tour du lịch Paris giá rẻ khám phá kinh đô ánh sáng của thế giới\r\n\r\nDu lịch Paris – kinh đô của sự xa hoa lộng lẫy của ánh sáng, hấp dẫn bởi những lâu đài cổ kính, bãi biển quyến rũ, núi non và miền đồng quê xanh tươi. Không biết phải dùng bao nhiêu mỹ từ để miêu tả hết nét đẹp của thành phố Paris. Một thành phố có nền văn minh rực rỡ lâu đời nhất lục địa già, là ngôi sao về văn hóa và thời trang trên bầu trời thế giới và là mảnh đất lãng mạn của tình yêu.\r\n\r\nParis luôn là điểm dừng chân đầu tiên của du khách trong tour du lịch Châu Âu của mình. Vậy hãy cùng DeViet.vn tìm hiểu vẻ đẹp hào hoa lãng mạn của Paris khiến hàng triệu người say đắm này nha.\r\nThời điểm du lịch Paris đẹp nhất\r\n\r\nThời điểm du lịch đẹp nhất khi bạn đi du lịch Paris khoảng tháng 5 đến tháng 6. Khoảng thời gian này bạn có thể tha hồ lang thang khắp mọi nơi trên mảnh đất này và tham gia vô vàn những hoạt động ngoài trời.\r\n\r\nNếu bạn yêu mùa thu ngắm nhìn vẻ đẹp những lá vàng mùa thu, ngắm nhìn vử đẹp của Paris khoác thêm màu áo mới thì thời điểm tháng 8 đến tháng 9 là lý tưởng nhất cho bạn đó.\r\n Phương tiện đi lại\r\n\r\nPhương tiện đi lại chủ yếu của thành phố Paris chủ yếu là xe bus, tàu điện ngầm, bạn có thể mua vé bằng tiền mặt, thẻ visa hoặc mua trực tiếp tại quầy hướng dẫn.\r\n\r\nNếu bạn chọn sân bay Quốc tế Charles de Gaulle khi tới Paris thi bạn có thể đi tàu điện RER hoặc xe bus để tới khách sạn hoặc trung tâm của thành phố. Ngoài ra bạn có thể mua vé xe lửa để đi đến các thành phố khác như  Lyon , ruxelle, Strasbourg, Lille,…\r\n\r\nNếu bạn tới sân bay Orly:  Bạn hãy bắt xe bus về trung tâm của thành phố Paris, điểm cuối của xe bus là  bến Denfert-Rochereau để bắt đầu những chuyến khám phá vùng đất này.\r\n Ẩm thực tại Paris\r\n\r\nẨm thực ở nơi đây được Unessco công nhận là di sản văn hóa thế giới, nôi ẩm thực văn hóa thế giới. Đến Pháp bạn sẽ được khám phá nền ẩm thực độc đáo với những món ăn được chế biến lạ mắt theo phong cách riêng của từng vùng, từng nơi bạn đến. Đặc biệt, người Pháp rất coi trọng về mặt hình thức món ăn của họ làm ra không chỉ đẹp về hình thức mà cũng còn phải đẹp mắt, nghệ thuật\r\n\r\nBánh tart hành tây món mà không một du khách nào có thể cưỡng lại được được ăn cùng với món salad hoặc được chọn làm món khai vị. Đế của bánh được làm từ chiếc đế pizza giòn giòn và phần trên của bánh thơm lừng mùi hành đặc trưng.\r\n\r\nGà hầm món ngon thứ hai bạn cũng không thể bỏ qua, đây là đặc sản của  vùng Provence  miền Nam nước Pháp. Nguyên liệu chủ yếu để tạo được vị đặc trưng của món gà hầm này chính là quả ô liu, tỏi, cà chua và một số loại rau thơm làm cho miếng thịt gà vừa đẹp mắt lại vô cùng ngon miệng.\r\n\r\nBánh Crepe là món ăn hoàn hảo cho mọi hoàn cảnh. Loại bánh Crepe truyền thống được làm từ đường và cốt chanh nhưng loại bánh Crepe nổi tiếng nhất chính là bánh Crepe với kem Sô cô la và chuối.\r\n\r\nTham khảo bài viết hay : Kinh nghiệm du lịch Pháp giá rẻ\r\nĐịa điểm du lịch tại Paris\r\n\r\nTháp Eiffel : Đến Paris, bạn không thể nào không đến Tháp Eiffel. Ngoài ý nghĩa cách mạng khoa học, kỹ thuật nó còn là biểu tượng cách mạng, là niềm tự hào của người dân Pháp và Paris.\r\n\r\nVào dịp năm mới và ngày quốc khách, người dân nơi đây sẽ tập trung trước tòa tháp này để chờ xem bắn pháo hoa và nghe buổi hòa nhạc miễn phí.Đây là thời điểm, điểm đến tuyệt vời mà du khách không nên bỏ qua\r\n\r\nCông viên Villette : Một trong những lá phổi xanh lớn nhất Paris và cũng là nơi diễn ra các hoạt động văn hóa quan trọng của thủ đô.\r\n\r\nKhông chỉ du khách nước ngoài mà cả người dân Paris thường chọn cho  mình một chỗ để xem chiếu phim ngoài trời vào mùa hè. Ở đây bạn sẽ được xem phim hoàn toàn miễn phí ở ngoài trời nha\r\n\r\nBảo tàng Louvre : Louvre là một trong những viện bảo tàng nghệ thuật và lịch sử nổi tiếng nhất thế giới, ở đây trưng bày những hiện vật về nền văn minh cổ, Hồi giáo và những tác phẩm nghệ thuật Châu Âu từ thế kỷ XIII đến giữa thế kỷ XIX.\r\n\r\nTrong số đó bạn  không thể không kể đến những tác phẩm nổi tiếng bậc nhất của lịch sử nghệ, những hiện vật có giá trị về những nền văn minh cổ như tấm bia Mesha , phiến đá ghi bộ luật Hammurabi…\r\n\r\nHi vọng với những kinh nghiệm du lịch Paris chi tiết mà DeViet.vn chia sẻ chúc bạn sẽ có chuyến đi đầy ý nghĩa, có trải nghiệm thú vị khi đến với đất nước vô cùng xinh đẹp này!\r\n\r\nNếu bạn muốn du lịch Pháp thì hãy tìm hiểu những tour du lịch châu Âu giá rẻ của Deviet.vn chắc chắn bạn sẽ có những trải nghiệm tuyệt vời hơn bao giờ hết.', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_not_cost_detail`
--

DROP TABLE IF EXISTS `tour_not_cost_detail`;
CREATE TABLE IF NOT EXISTS `tour_not_cost_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tour_not_cost_id` int(11) NOT NULL,
  `name` text COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tour_not_cost_detail`
--

INSERT INTO `tour_not_cost_detail` (`id`, `tour_not_cost_id`, `name`) VALUES
(1, 1, 'Tip cho trưởng đoàn, hướng dẫn viên và lái xe : 7 Euro / khách / ngày'),
(2, 1, 'Chi phí cá nhân : giặt là, điện thoại, đồ uống, hành lý quá cước, các chi phí cá nhân phát sinh không có trong phần bao gồm …'),
(3, 1, 'Phụ thu ở khách sạn phòng đơn.'),
(4, 1, 'Chi phí cho HDV và lái xe phục vụ (nếu có yêu cầu ngoài giờ)..'),
(5, 1, 'Phương tiện vận chuyển ngoài giờ của chương trình (nếu có yêu cầu).'),
(6, 1, 'Các chi phí khác không đề cập trong mục dịch vụ đã bao gồm..');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_schedule`
--

DROP TABLE IF EXISTS `tour_schedule`;
CREATE TABLE IF NOT EXISTS `tour_schedule` (
  `tour_schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `schedule_id` int(11) NOT NULL,
  `title` text COLLATE utf8_vietnamese_ci NOT NULL,
  `content` text COLLATE utf8_vietnamese_ci NOT NULL,
  PRIMARY KEY (`tour_schedule_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tour_schedule`
--

INSERT INTO `tour_schedule` (`tour_schedule_id`, `schedule_id`, `title`, `content`) VALUES
(1, 1, 'Ngày 01: Hà Nội – Paris (ăn trên máy bay)', '15h Xe và hướng dẫn viên (HDV) đón Quý khách tại Nhà hát Lớn, Hà Nội khởi hành ra sân bay quốc tế Nội Bài làm thủ tục đáp chuyến bay đi Paris – Cộng hòa Pháp, quá cảnh và nối chuyến tại Doha.\r\n\r\nĂn tối và nghỉ đêm trên máy bay.\r\n\r\nChuyến bay 1: QR 977 G HANDOH HK21         1830 2305  \r\n\r\nChuyến bay 2: QR 041 G DOHCDG HK21         0100 0655  '),
(2, 1, 'Ngày 02: Paris (ăn trưa, tối)', 'Đến Paris, đoàn thăm quan : thăm quan Nhà thờ Đức Bà Paris, Đại Lộ Champs Elysees đại lộ đẹp nhất thế giới, và là một biểu tượng cho sự xa hoa và lộng lẫy của Kinh  Đô Ánh Sáng, Khải Hoàn Môn Paris – Arc De, Quảng trường Place de la Concorde quảng trường lớn nhất Paris và là nơi tập trung nhiều tác phẩm nghệ thuật là món quà từ các quốc gia khác gửi tới Pháp như tượng nữ thần Ai Cập, hay các bức tượng mang hơi hướng Địa Trung Hải , Tháp Eiffel là biểu tượng trường tồn của nước Pháp và là một trong những thắng cảnh dễ nhận biết nhất trên thế giới (chụp hình phía ngoài), Tháp Montparnasse, Du thuyền trên sông Seine chiêm ngưỡng trọn vẹn những gì tinh túy nhất của Paris, quần thể kiến trúc đã được UNESCO công nhận là kì quan thế giới\r\n\r\nĐoàn nghỉ đêm tại Paris.'),
(3, 1, 'Ngày 03: Paris (ăn sáng, trưa, tối)', 'Đoàn thăm quan kinh đô ánh sáng Paris :\r\n\r\nCung điện Versailles là biểu tượng của quyền lực tối thượng của các triều đại phong kiến Pháp với một diện tích và các công trình kiến trúc cực kì đồ sộ và lộng lẫy. Với một cung điện rộng 67.000 mét vuông gồm trên 2000 phòng, một công viên có diện tích 815 héc ta, Versailles là một trong các lâu đài đẹp nhất và lớn nhất châu Âu cũng như trên thế giới.\r\n\r\nBảo tàng Louvre nổi tiếng với kiến trúc kim tự tháp độc đáo, Trung tâm thương mại Benlux\r\n\r\nĐoàn nghỉ đêm tại Paris.'),
(4, 1, 'Ngày 04: Paris –Geneve 500km (ăn sáng, trưa, tối)', 'Sau khi ăn sáng tại khách sạn, Quý khách rời Pari đi đến Geneva thành phố hòa bình, nhỏ xinh với vẻn vẹn 15 km2 nằm soi bóng bên bờ hồ Geneva. Với khí hậu ôn hòa, phong cảnh tuyệt đẹp và con người thân thiện, Geneva (Thụy Sĩ) là viên ngọc sáng trong lòng Châu Âu thu hút hàng triệu lượt khách du lịch quanh năm, bất kể nắng hay mưa. Geneva cũng là nơi có trụ sở của hơn 200 tổ chức quốc tế thuộc chính phủ và phi chính phủ trên toàn thế giới.\r\n\r\nQuý khách thăm quan Hồ Leman với hình ảnh vòi rồng cao nhất thế giới, Đồng hồ hoa Flower Clock, Tòa nhà hội đồng bảo an Liên Hiệp Quốc.\r\n\r\nĐoàn nghỉ đêm tại Geneve hoặc khu vực lân cận'),
(5, 1, 'Ngày 05: Rome - Doha', 'Sau khi ăn sáng, quý khách làm thủ tục trả phòng khách sạn và tiếp tục khám phá thành phố Rome: Đoàn ghé thăm bên ngoài đấu trường La Mã Coliseum – một trong những biểu tượng quen thuộc nhất của thành phố vĩnh hằng Rome, Cầu Sant’Angelo – Cầu Thiên Thần, Đài phun nước “ước nguyện” Trevi phong cách baroque lớn nhất tại Rome\r\n\r\nSauk hi ăn trưa, quý khách ra sân bay làm thủ tục về Việt Nam. Nghỉ đêm trên máy bay.\r\n\r\nChuyến bay 1: QR 132 G  5 FCODOH HK21       1640 2310 \r\n\r\nChuyến bay 2: QR 976 G  6 DOHHAN HK21       0155 1330  '),
(6, 1, 'Ngày 06: Doha - Hà Nội', 'Đoàn chia tay và kết thúc hành trình thăm quan Châu Âu.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
