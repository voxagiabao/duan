-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2018 at 05:13 AM
-- Server version: 5.6.25
-- PHP Version: 5.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhadat`
--

-- --------------------------------------------------------

--
-- Table structure for table `duan`
--

CREATE TABLE IF NOT EXISTS `duan` (
  `id` int(11) NOT NULL,
  `ten_duan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_duan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loai_duan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dientich` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vitri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mieuta` text COLLATE utf8_unicode_ci NOT NULL,
  `anhavatar` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `duan`
--

INSERT INTO `duan` (`id`, `ten_duan`, `url_duan`, `loai_duan`, `dientich`, `gia`, `vitri`, `mieuta`, `anhavatar`) VALUES
(12, 'Roman Plaza Hải Phát', 'romanplaza', 'CHUNG CƯ', '2100 m2', '1 TỶ', 'Đường Tố Hữu, Làng Lụa Vạn Phúc, Hà Đông', 'Chung cư cao cấp Roman Plaza nằm trong tổ hợp thương mại dịch vụ và căn hộ cao cấp "Roman Plaza" của chủ đầu tư Hải Phát. Chung cư Roman Plaza được thiết kế với cảm hứng từ các công trình kiến trúc sang trọng nhẹ nhàng cuốn hút của nước Ý.', 'http://127.0.0.1:4001/duan/Fileupload/romanplaza.jpg'),
(10, 'Moonlight Boulevard ', 'moonlight', 'CHƯNG CƯ', '250 m2', '2 TỶ', 'Hố Nai - Tp.Biên Hòa - Đồng Nai.', 'Moonlight Boulevard là dự án thứ 3 nằm trong dòng sản phẩm Moonlight được phát triển bởi Hưng Thịnh Corp. Sở hữu thiết kế hiện đại, tận dụng tối đa mọi công năng sử dụng.', 'http://127.0.0.1:4001/duan/Fileupload/caooc.jpg'),
(11, 'Lux Garden Quận 7', 'luxgarden', 'NHÀ PHỐ', '9121 m2', '3 TỶ', 'gần ngay khu vực mũi đèn đỏ, Quận 7', 'Với Lux Garden, nhà không chỉ là nơi để ở mà còn là nơi để tận hưởng cuộc sống. Tất cả căn hộ của Lux Garden đều sở hữu tầm nhìn hướng sông, thông thoáng, cùng thiết kế độc đáo giúp đón nhận tối đa ánh sáng tự nhiên, mang thiên nhiên trong lành vào từng không gian trong căn hộ.\n\n', 'http://127.0.0.1:4001/duan/Fileupload/gelexia.png'),
(9, 'Dự án Cần thơ Risidence', 'cantho', 'NHÀ PHỐ', '320 m2', '4 TỶ', 'Trung tâm thị trấn Vĩnh Thạnh - Tp. Cần Thơ', 'Cần Thơ Residence là dự án đầu tiên và duy nhất tại Vĩnh Thạnh triển khai mô hình nhà phố kinh doanh, được đầu tư xây dựng bởi Công ty CP Đầu tư Xây dựng Thương mại Cơ Hội Mới.', 'http://127.0.0.1:4001/duan/Fileupload/cantho.jpg'),
(13, 'Gem Riverside', 'gem', 'CHUNG CƯ', '380 m2', '4 TỶ', 'Khu đô thị Nam Rạch Chiếc, P. An Phú, Q. 2, Tp.HCM', 'Dự án Gem Riverside với hệ thống tiện ích đa dạng khép kín hứa hẹn đáp ứng mọi nhu cầu về tiện ích của cư dân như: công viên ven sông, hồ sơ, trung tâm thương mại, siêu thị, phòng gym, spa, nhà trẻ, nhà hàng, coffee shop, v…v…\n', 'http://127.0.0.1:4001/duan/Fileupload/gem.jpg'),
(14, 'Vạn Xuân Villa TX38 Quận 12', 'vanxuan', 'BIỆT THỰ', '400 m2', '3 TỶ', 'Đường TX38, phường Thạnh Xuân, quận 12, Tp. HCM', 'Dự án biệt thự cao cấp Vạn Xuân Villa TX38 được đầu tư xây dựng bởi Tập đoàn Địa ốc Vạn Xuân, có diện tích đất 124m2 cùng với quy mô 10 căn biệt thự liền kề nhau.', 'http://127.0.0.1:4001/duan/Fileupload/vanxuan.jpg'),
(15, 'Nhà 2 mặt tiền 780 Nguyễn Đình Chiểu , p.1, Quận 3', 'nha2mattien', 'NHÀ PHỐ', '58 m2', '1,2 TỶ', '780 Nguyễn Đình Chiểu, Phường 01, Quận 3, TP.Hồ Chí Minh', '- Số tầng: 4 tầng (Trệt, lửng, lầu 1, lầu 2) \r\n- Thời gian: 3 - 5 năm \r\n- Giá thuê: 65.000.000 đ/ tháng\r\n- Mua luôn: 1,2 TỶ \r\n- Đặt cọc: 3 tháng \r\n- Thanh toán: 3 tháng \r\n- Huê hồng: 1 tháng', 'http://127.0.0.1:4001/duan/Fileupload/nhapho1.jpg'),
(16, 'a', '', 'a', 'a', 'a', 'a', 'a', 'http://127.0.0.1:4001/duan/Fileupload/La-Cosmo-Residences.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homepageattr`
--

CREATE TABLE IF NOT EXISTS `homepageattr` (
  `id` int(11) NOT NULL,
  `tenthuoctinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giatrithuoctinh` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lay_pass`
--

CREATE TABLE IF NOT EXISTS `lay_pass` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'giabaobl2015@gmail.com', 'Admin'),
(2, 'bao', 'b4e1c6620073acda217d807627a78dae', 'giabaobl2016@gmail.com', 'Member'),
(3, 'vinh', '4107eaebd361f3477b630f4ed7452418', 'vuvinh@gmail.com', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `id` int(11) NOT NULL,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `giaca` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `giaca`, `hinhanh`, `noidung`, `ngaydang`) VALUES
(1, 'Chính thức nhận Giữ chỗ Căn Hộ Raemian Đông Thuận , P. Tân Hưng Thuận, Quận 12', '1,2 TỶ', 'http://127.0.0.1:4001/duan/Fileupload/chungcu2.jpg', 'Chính thức nhận giữ chỗ dự án Raemian Đông Thuận giá chỉ 22 triệu/ mét vuông \n\nTổng số căn hộ: 200 căn hộ 2-3 phòng ngủ Gồm: 2 block \nSố tầng: 1 tầng hầm+16 tầng \nBố trí căn hộ /tầng: 1 tầng 7-8 căn hộ, 2 thang máy \nHình thức sở hữu: Sở hữu vĩnh viện,pháp lý rõ ràng \nTiện ích: Các tiện ích cơ bản như hồ bơi, sân vườn, khu chơi trẻ em, phòng cộng đồng, v.v.... \n\nHình thức bàn giao căn hộ: Căn hộ hoàn thiện cơ bản, có tủ bếp dưới, đi sẵn ống đồng . Phòng khách lót gạch bóng kính 60 x 60, phòng ngủ lót gỗ \n\nChủ đầu tư: HDTC / GS Holdings. \nĐơn vị thi công&thiết kế: Cty TNHH Tư vấn và thiết kế ĐTXD-Bộ Quốc Phòng \nTổng thầu xây dựng: Cty cổ phần DIC 04 \nVị Trí: Ngay cầu Tham Lương, Quận 12 và chợ Cầu Gò Vấp (Khu dân cư hiện hữu, thuận tiện cho mọi sinh hoạt và di chuyển đến những quận khác nhau) Địa điểm: Đường Nguyễn Văn Quá - DN10, phường Đông Hưng Thuận, Quận 12, TP. Hồ Chí Minh. \nQuy Cách Căn Hộ: \n2 căn 54m2 ( 2 PN -1 WC); 2 căn 77m2 ( 2 PN -2 WC) \n2 căn 104m2 ( 3 PN -2 WC); 1 căn 81m2 ( 2PN – 2WC ). \nDự kiến mở bán: Tháng 11/2018. \nDự kiến bàn giao nhà: Quý II/2019. \nNhận giữ chỗ để lấy số thứ tự book căn đẹp trong ngày mở bán.giữ chỗ 50 triệu/ Căn( giữ chỗ có hoàn lại tiền, khi đến ngày mởi bán khách hàng không muốn mua) \nLiên hệ để được tư vấn: 0988715847 ', '2018-09-06'),
(2, 'Thanh Lý 3 Lô Đất Giá 699tr/nền. Tại Quận 2-SHR-gần TTHC&TTTM', '1,3 TỶ', 'http://127.0.0.1:4001/duan/Fileupload/datnen1.jpg', 'Đất Nền– Ven Sông Sài Gòn, Quận 2 \n\n1. Thông Tin - Địa Điểm - Dự Án \n- Cách Khu Đô Thị Sala Trên Đại Lộ Mai Chí Thọ 10 Phút. \n- Nối Liền Các Cụm Kcn Rộng 3,000 Hecta, Phù Hợp Cho Nhu Cầu Đầu Tư – Ở - Kinh Doanh. \n- Nằm Liền Kề Trung Tâm Hành Chính, Phù Hợp Ở, Kinh Doanh – Đầu Tư Sinh Lời. Tâm Điểm Đầu Tư Mới Hiệ Nay. - Diện Tích Đa Dạng Trên Dưới 100m2.., Hỗ Trợ Giấy Phép Xây Dựng \n\n2. Cơ Sở - Hạ Tầng \n- Hạ Tầng Đầy Đủ Theo Tiêu Chuẩn Singapore, Điện Âm, Nước Máy, Lộ Giới 12-30m, Đường Nhựa Hoàn Thiện 100% Có Thể Xây Dựng Và Ở Ngay. \n- Đầy Đủ - Tất Cả Tiện Ích Xã Hội Như: Công Viên, Trường Học, Chợ - Đã Hiện Hữu. \n\n3. Thông Tin Pháp Lý Dự Án \n- Dân Cư Đông Đúc, Phù Hợp Kinh Doanh Đa Ngành Nghề, Cũng Như Đầu Tư. \n\n4. Pháp Lý \n- Đã Có Sổ Riêng Từng Nền. \n- Đất Quy Hoạch Dự Án, Thổ Cư 100%. \n\n5. Hình Thức Thanh Toán \n- Tuần Đầu Tiên Mở Bán Dự Án, Ưu Đãi Cho Những Khách Hàng Thiện Chí Sẽ Được Ck Từ 5-10 Chỉ Vàng.... \n- 10 Khách Hàng Đầu Tiên Đặt Cọc Tại Dự Án Sẽ Được Ck 30 Chỉ Vàng... Nhân Dịp Tuần Lễ Vàng Với Phương Châm " Mua Đất Tặng Vàng"... \n\n- Phương Thức Thanh Toán Mở, Giúp Khách Hàng Yên Tâm Về Mặt Tài Chính ( Thanh Toán 50%-phần Còn Lại Cty Hỗ Trợ Trả Chậm 12 Tháng Với Lãi Suất 0% )... \n- Các Chương Trình Bốc Thăm Trúng Thưởng Hấp Dẫn : Xe Mer, Sh 150, Ab, Iphone 7, Tivi 51"...tỷ Lệ Trúng Là 100%!!! Tư Vấn Thông Tin Dự Án Chủ Nhật, 7h15. \n\nMọi Chi Tiết Xin Liên Hệ Trưởng Phòng Kinh Doanh : Thế Hào \n- 0902 641365', '2018-11-01'),
(3, 'Đất nền Q2 giá bao rẻ, nằm ngay TT Q2, thổ cư 100%, sổ riêng, đường lớn 20m.Chỉ có 499tr/nền.', '499 TRIỆU', 'http://127.0.0.1:4001/duan/Fileupload/datnen2.jpg', 'Đón đầu cầu Cát Lái - cơ hội sở hữu đất nền ngay TTHC Q2, MT 20m, thổ cư 100%, SHR - chỉ với 499tr/nền! \n\n- Chính thức mở bán nềnđất ngay TT Q2 - Hỗ trợ trả góp lên đến 8 tháng 0% lãi suất! \n- 5 phút: Kết nối về cầu Cát Lái theo trục đường Nguyễn Thị Định. \n- 1 phút: Kết nối về khu đô thị triệu đô Sala của Đại Quang Minh. \n- 10 phút: Kết nối về trung tâm Q. 1. \n- Trung tâm hành chính Quận 2 là trung tâm tài chính lớn nhất khu vực: Gia tăng giá trị bất động sản - Đảm bảo sinh lợi 30%/6 tháng. \n\n- Pháp lý rõ ràng: Sổ riêng từng nền - hỗ trợ giấy phép xây dựng! \n- Phương thức thanh toán linh hoạt: Góp 8 tháng 0% lãi suất. \n\nLiên hệ chủ đầu tư : Trưởng phòng kinh doanh : Thế Hào \n-----0902 641365 = 0971 891090 ------', '2018-11-07'),
(4, 'Cho Thuê Căn Hộ Ở Chung Cư Bộ Công An, Quận 2', '900 TRIỆU', 'http://127.0.0.1:4001/duan/Fileupload/nhaban1.jpg', '- Chung cư Bộ Công An, Quận 2. \r\n- Cách Trần Não trung tâm quận 2 500m. Ngay Bình Thạnh cây cầu Sài Gòn hệ thống đường đang được nối mở rộng, tương lại giá trị tiếp tục tăng cao. \r\n- Khu vực chợ cách 15m. \r\n- Siêu thị, gym, bể bơi, cafe, nhà hàng, quán ăn.,... Ngay dưới chung cư. \r\n- Đông dân ở sinh sống. \r\n\r\nCăn hộ trống cho thuê. \r\n- Nội thất bao gồm thiết bị vệ sinh, tủ bếp dưới, máy nước nóng, tủ lạnh, máy giặt, máy lạnh, tivi, giường nệm \r\n- Nhà dọn sạch sẽ trước khi vào ở. \r\n- Đặt cọc 2 tháng + 1 tháng tiền nhà. \r\n- Có thể dọn vào luôn. ', '2018-10-11'),
(5, 'a', 'a', 'http://127.0.0.1:4001/duan/Fileupload/nhaganbca.jpg', 'aaa', '2018-11-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepageattr`
--
ALTER TABLE `homepageattr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lay_pass`
--
ALTER TABLE `lay_pass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `duan`
--
ALTER TABLE `duan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `homepageattr`
--
ALTER TABLE `homepageattr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lay_pass`
--
ALTER TABLE `lay_pass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
