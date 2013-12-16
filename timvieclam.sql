-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2013 at 02:04 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `timvieclam`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('0e9339febcaf8c3c3aabe19b5b74ed43', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1386875946, 0x613a363a7b733a393a22757365725f64617461223b733a303a22223b733a343a22755f6964223b733a323a223132223b733a31303a22755f757365726e616d65223b733a31383a22636869706368697040676d61696c2e636f6d223b733a31303a22755f66756c6c6e616d65223b733a31393a22c490c3a06f20c490e1bba963205469e1babf6e223b733a383a22755f737461747573223b733a313a2231223b733a363a22755f726f6c65223b733a313a2232223b7d),
('d57022cb884f4fb6f373aabfd52bc5b1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1386896341, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ten` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenthat` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `capdo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `solanvao` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ql_ungvien` int(11) NOT NULL,
  `ql_tintuc` int(11) NOT NULL,
  `ql_nhatuyendung` int(11) NOT NULL,
  `ql_email` int(11) NOT NULL,
  `ql_quancao` int(11) NOT NULL,
  `ql_lienhe` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `ten`, `matkhau`, `tenthat`, `email`, `capdo`, `solanvao`, `ql_ungvien`, `ql_tintuc`, `ql_nhatuyendung`, `ql_email`, `ql_quancao`, `ql_lienhe`) VALUES
(1, 'admin', '123456', 'Đoàn Quang Thắng', 'quangthang12891@gmail.com', '1', '22', 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_age`
--

CREATE TABLE IF NOT EXISTS `tbl_age` (
  `age_id` int(11) NOT NULL AUTO_INCREMENT,
  `age_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`age_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_age`
--

INSERT INTO `tbl_age` (`age_id`, `age_name`) VALUES
(1, 'Dưới 18 tuổi'),
(2, '18 - 24 tuổi'),
(3, '25 - 29 tuổi'),
(4, '30 - 34 tuổi'),
(5, '35 - 39 tuổi'),
(6, '40 - 44 tuổi'),
(7, 'Trên 45 tuổi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bangcap`
--

CREATE TABLE IF NOT EXISTS `tbl_bangcap` (
  `bang_id` int(11) NOT NULL AUTO_INCREMENT,
  `bang_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`bang_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_bangcap`
--

INSERT INTO `tbl_bangcap` (`bang_id`, `bang_name`) VALUES
(1, 'Trên đại học'),
(2, 'Đại học'),
(3, 'Cao đẳng'),
(4, 'Trung cấp'),
(5, 'Trung học'),
(6, 'Không yêu cầu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_capbac`
--

CREATE TABLE IF NOT EXISTS `tbl_capbac` (
  `cb_id` int(11) NOT NULL AUTO_INCREMENT,
  `cb_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_capbac`
--

INSERT INTO `tbl_capbac` (`cb_id`, `cb_name`) VALUES
(3, 'Quản trị cấp cao'),
(4, 'Trưởng/Phó phòng'),
(5, 'Tư vấn/Trợ lý'),
(6, 'Chuyên gia'),
(7, 'Nhân viên'),
(8, 'Khác'),
(9, 'Trưởng nhóm/Giám sát'),
(10, 'Kỹ thuật viên/Kỹ sư'),
(11, 'Chuyên viên');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE IF NOT EXISTS `tbl_city` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `n_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`n_id`, `n_name`) VALUES
(1, 'TP.Hồ Chí Minh'),
(2, 'Hà Nội'),
(3, 'An Giang'),
(4, 'Bạc Liêu'),
(5, 'Bà Rịa-Vũng Tàu'),
(6, 'Bắc Cạn'),
(7, 'Bắc Giang'),
(8, 'Bắc Ninh'),
(9, 'Bến Tre'),
(10, 'Bình Dương'),
(11, 'Bình Định'),
(12, 'Bình Phước'),
(13, 'Bình Thuận'),
(14, 'Cao Bằng'),
(15, 'Cà Mau'),
(16, 'Cần Thơ'),
(17, 'Đà Nẵng'),
(18, 'Đắk Lắk'),
(19, 'Đắk Nông'),
(20, 'Điện Biên'),
(21, 'Đồng Nai'),
(22, 'Đồng Tháp'),
(23, 'Gia Lai'),
(24, 'Hà Giang'),
(25, 'Hà Nam'),
(26, 'Hà Tây'),
(27, 'Hà Tĩnh'),
(28, 'Hải Dương'),
(29, 'Hải Phòng'),
(30, 'Hậu Giang'),
(31, 'Hòa Bình'),
(32, 'Hưng Yên'),
(33, 'Khánh Hòa'),
(34, 'Kiên Giang'),
(35, 'Kon Tum'),
(36, 'Lai Châu'),
(37, 'Lạng Sơn'),
(38, 'Lào Cai'),
(39, 'Lâm Đồng'),
(40, 'Long An'),
(41, 'Nam Định'),
(42, 'Nghệ An'),
(43, 'Ninh Bình'),
(44, 'Ninh Thuận'),
(45, 'Phú Thọ'),
(46, 'Phú Yên'),
(47, 'Quảng Bình'),
(48, 'Quảng Nam'),
(49, 'Quảng Ngãi'),
(50, 'Quảng Ninh'),
(51, 'Quảng Trị'),
(52, 'Sóc Trăng'),
(53, 'Sơn La'),
(54, 'Tây Ninh'),
(55, 'Thái Bình'),
(56, 'Thái Nguyên'),
(57, 'Thanh Hóa'),
(58, 'Thừa Thiên-Huế'),
(59, 'Tiền Giang'),
(60, 'Trà Vinh'),
(61, 'Tuyên Quang'),
(62, 'Vĩnh Long'),
(63, 'Vĩnh Phúc'),
(64, 'Yên Bái'),
(65, 'Toàn Quốc'),
(66, 'Nước Ngoài');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employers_post`
--

CREATE TABLE IF NOT EXISTS `tbl_employers_post` (
  `j_id` int(20) NOT NULL AUTO_INCREMENT,
  `u_id` int(20) NOT NULL,
  `m_id` int(11) NOT NULL,
  `j_nghe1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_nghe2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_nghe3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_countryID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_cityID` int(11) NOT NULL,
  `j_cityID1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_cityID2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_cityID3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_copy` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_year` int(11) NOT NULL,
  `j_perID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_degID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_muctieunn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_kynang` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_dalam` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_luongdaco` int(11) NOT NULL,
  `j_chucmm` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_luongmm` int(11) NOT NULL,
  `j_timeID` int(11) NOT NULL,
  `j_goto` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_date` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_update` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_lastdate` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_visits` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_active` int(11) NOT NULL,
  `j_hot` int(11) NOT NULL,
  `j_activeSearch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_hienthi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_trinhdo` int(11) NOT NULL,
  `j_nganhhoc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_namtotnghiep` int(11) NOT NULL,
  `j_loaitotnghiep` int(11) NOT NULL,
  `j_truongdahoc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_ngoaingu` int(11) NOT NULL,
  `j_trinhdonn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_tinhoc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_bangcapkhac` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_kinhnghiem` int(11) NOT NULL,
  `j_infokinhnghiem` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_datestart` int(11) NOT NULL,
  `j_thamkhao` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_sanggia` int(11) NOT NULL DEFAULT '0',
  `j_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`j_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_employers_post`
--

INSERT INTO `tbl_employers_post` (`j_id`, `u_id`, `m_id`, `j_nghe1`, `j_nghe2`, `j_nghe3`, `j_countryID`, `j_cityID`, `j_cityID1`, `j_cityID2`, `j_cityID3`, `j_title`, `j_copy`, `j_year`, `j_perID`, `j_degID`, `j_muctieunn`, `j_kynang`, `j_dalam`, `j_luongdaco`, `j_chucmm`, `j_luongmm`, `j_timeID`, `j_goto`, `j_date`, `j_update`, `j_lastdate`, `j_visits`, `j_active`, `j_hot`, `j_activeSearch`, `j_hienthi`, `j_trinhdo`, `j_nganhhoc`, `j_namtotnghiep`, `j_loaitotnghiep`, `j_truongdahoc`, `j_ngoaingu`, `j_trinhdonn`, `j_tinhoc`, `j_bangcapkhac`, `j_kinhnghiem`, `j_infokinhnghiem`, `j_datestart`, `j_thamkhao`, `j_sanggia`, `j_status`) VALUES
(3, 11, 10, 'coder', 'IT phần cứng', 'Ăn chơi nhảy múa', '1', 1, '2', '3', '4', 'Nhân viên công nghệ thông tin', 'dán demo vào đây', 1, '1', '1', 'mục tiêu nn', 'nhiều', 'teera Sorfware', 4000000, '3', 3, 2, '1', '12032013', '30042013', '30052013', '33', 1, 1, '0', '1', 2, 'Công nghệ thông tin', 2013, 3, 'Đại học công nghiệp Hà Nội', 4, '2', 'cao thủ', 'đéo có', 2, 'chém đấy chưa có kinh nghiệm', 0, 'ko có ai', 1, 0),
(5, 11, 13, 'phổ thông', 'đánh nhau', 'chém nhau', '1', 1, '3', '5', '8', 'Nhân viên công nghệ thông tin', 'demo vào đây', 2, '1', '1', '2', 'bao la', 'rất nhiều', 6000000, '2', 1, 1, '1', '1', '1', '0', '14', 1, 0, '0', '1', 0, '', 0, 3, '', 0, '1', '', '', 0, '', 0, '', 0, 1),
(6, 12, 10, '', '', '', '', 5, '', '', '', 'Nhân viên IT webDevoloper', '', 0, '', '', '', '', '', 0, '2', 0, 0, '', '12081991', '23122121', '12312341', '', 0, 0, '', '', 0, '', 0, 2, '', 0, '2', '', '', 0, '', 0, '', 0, 0),
(7, 11, 10, '', '', '', '', 2, '', '', '', 'Nhân viên siêu siêu sao', '', 0, '', '', '3', 'ko có kỹ năng nổi bật ji', '', 0, '4', 6, 1, '', '0', '0', '0', '', 0, 0, '', '', 2, 'Đánh nhau vô tội vạ', 2013, 1, 'Đại học bôn ba', 0, '3', 'trình độ tin học', 'ko có bằng cấp ji khác nhé', 2, 'Tên công ty:\r\nVị trí công việc:\r\nNgành nghề:\r\nThời gian bắt đầu:\r\nThời gian kết thúc:\r\nMô tả công việc:\r\nLý do thôi việc:\r\nThành tích đạt được:\r\nMức lương:\r\n                            ', 0, 'Họ và tên:\r\nĐịa chỉ:\r\nĐiện thoại:\r\nNghề nghiệp:\r\nQuan hệ:\r\nThời gian quen biết:\r\n                            ', 0, 1),
(8, 12, 10, '', '', '', '', 1, '', '', '', 'Nhân viên siêu siêu sao online', '', 0, '', '', 'asdasdasdqweqwsdc', 'asdwqwesdc', '', 0, '4', 1, 1, '', '0', '0', '0', '', 0, 0, '', '', 2, 'Đánh nhau vô tội vạ', 2013, 1, 'asdasdasqweqwsad', 3, '3', 'dasdqwxcasdasd', 'asdqwesdcsadq', 8, 'Tên công ty:\r\nVị trí công việc:\r\nNgành nghề:\r\nThời gian bắt đầu:\r\nThời gian kết thúc:\r\nMô tả công việc:\r\nLý do thôi việc:\r\nThành tích đạt được:\r\nMức lương:\r\n                            ', 0, 'Họ và tên:\r\nĐịa chỉ:\r\nĐiện thoại:\r\nNghề nghiệp:\r\nQuan hệ:\r\nThời gian quen biết:\r\n                            ', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hoso`
--

CREATE TABLE IF NOT EXISTS `tbl_hoso` (
  `hoso_id` int(11) NOT NULL AUTO_INCREMENT,
  `hoso_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`hoso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_hoso`
--

INSERT INTO `tbl_hoso` (`hoso_id`, `hoso_name`) VALUES
(1, 'Trực tiếp'),
(2, 'Trực tuyến'),
(3, 'Qua Email');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_intuc`
--

CREATE TABLE IF NOT EXISTS `tbl_intuc` (
  `cat_id` int(20) NOT NULL AUTO_INCREMENT,
  `cat_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cat_info` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cat_active` int(11) NOT NULL,
  `cat_order` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cat_show` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_intuc`
--

INSERT INTO `tbl_intuc` (`cat_id`, `cat_name`, `cat_info`, `cat_active`, `cat_order`, `cat_show`) VALUES
(1, 'Tin này xem', 'abcxyz', 1, 'ko hiểu là cái ji', '0'),
(2, 'Tin này xem', 'abcxyz', 1, 'ko hiểu là cái ji', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_post`
--

CREATE TABLE IF NOT EXISTS `tbl_job_post` (
  `e_id` int(20) NOT NULL AUTO_INCREMENT,
  `u_id` int(20) NOT NULL,
  `e_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_mem` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_luong` int(11) NOT NULL,
  `e_luonga` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_luongb` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_trinhdo` int(11) NOT NULL,
  `e_capbacID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_timeID` int(11) NOT NULL,
  `e_cityID` int(11) NOT NULL,
  `e_cityID1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_cityID2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_cityID3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_nghe` int(11) NOT NULL,
  `e_nghe1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_nghe2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_nghe3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_descript` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_request` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_hoso` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_phucLoi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_kinhnghiem` int(11) NOT NULL,
  `e_date` int(11) NOT NULL,
  `e_dateActive` int(11) NOT NULL,
  `e_lastDate` int(11) NOT NULL,
  `e_visits` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_hienthi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_indam` int(11) NOT NULL,
  `e_hot` int(11) NOT NULL,
  `e_sanggia` int(11) NOT NULL,
  `e_active` int(11) NOT NULL,
  `e_active_home` int(11) NOT NULL,
  `e_sex` int(11) NOT NULL,
  `e_skill` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_timetest` int(11) NOT NULL,
  `e_datesave` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `e_lienhe` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_dotuoi` int(11) NOT NULL,
  `e_daluu1` int(11) NOT NULL,
  `e_daungtuyen1` int(11) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_job_post`
--

INSERT INTO `tbl_job_post` (`e_id`, `u_id`, `e_title`, `e_mem`, `e_luong`, `e_luonga`, `e_luongb`, `e_trinhdo`, `e_capbacID`, `e_timeID`, `e_cityID`, `e_cityID1`, `e_cityID2`, `e_cityID3`, `e_nghe`, `e_nghe1`, `e_nghe2`, `e_nghe3`, `e_descript`, `e_request`, `e_hoso`, `e_phucLoi`, `e_kinhnghiem`, `e_date`, `e_dateActive`, `e_lastDate`, `e_visits`, `e_hienthi`, `e_indam`, `e_hot`, `e_sanggia`, `e_active`, `e_active_home`, `e_sex`, `e_skill`, `e_timetest`, `e_datesave`, `m_id`, `e_lienhe`, `e_dotuoi`, `e_daluu1`, `e_daungtuyen1`) VALUES
(1, 11, 'Tuyển nhân viên Bán hàng', '5', 2, '5000000', '7000000', 2, '1', 1, 1, '0', '0', '0', 4, '2', '0', '0', 'Mô tả công việc vào đây', 'yêu cầu thêm', 'hồ sơ cần ji viết vào đây', 'phúc lợi ra sao', 2, 28112013, 29112013, 12122012, '56', '1', 1, 1, 1, 1, 1, 0, 'kỹ năng thì ghi vào đây', 12, 12122013, 10, '', 0, 11, 12),
(2, 5, 'Tuyển nhân viên văn phòng', '5', 3, '900$', '800$', 2, '3', 1, 1, '1', '1', '1', 1, '1', '1', '1', 'skhkjdahsidiuwhiuh', 'thông tin hả', 'ji cũng đc', 'như nhà nước quy định', 1, 12052013, 13052013, 12062013, '32', '1', 1, 1, 1, 1, 1, 1, '1', 0, 0, 13, '', 0, 12, 11),
(3, 4, 'Tuyển cửu vạn bê vác', '1', 1, '1', '1', 3, '1', 1, 1, '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, '1', '1', 0, 0, 0, 0, 0, 0, 'ừ thì kỹ năng', 0, 0, 10, '', 0, 0, 0),
(4, 6, 'Nhân viên kinh doanh', '3', 4, '', '', 1, '3', 3, 15, '', '', '', 0, '', '', '', 'mô tả công việc', 'yêu cầu khác', 'hồ sơ bao gồm', 'quyền lợi được hưởng', 5, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 1, '', 0, 0, 24, '3', 2, 0, 0),
(5, 10, 'Nhân viên IT phần mêm', '5', 1, '', '', 2, '7', 1, 1, '', '', '', 0, '', '', '', 'mô tả công việc', 'yêu cầu khác', 'yêu cầu của hồ sơ', 'quyền lợi được hưởng của nhân viên', 5, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 1, '', 0, 0, 10, '3', 2, 0, 0),
(6, 11, 'Tuyển nhân viên bán hàng toàn quốc', '5', 1, '', '', 1, '4', 1, 2, '', '', '', 0, '', '', '', 'công việc dạng háng ăn hàng', 'yêu cầu khác của nhà tuyển dụng', 'hồ sơ cần những ji', 'hưởng đầy đủ quyền lợi', 2, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 0, 0, 10, '1', 1, 11, 11),
(7, 12, 'Giám đốc chém gió', '3', 4, '', '', 1, '3', 2, 2, '', '', '', 0, '', '', '', 'công việc thì chỉ ngồi và chém gió thôi', 'yêu cầu đẹp trai co to đen hôi', 'hồ sơ như bình thường', 'quyền của giám đốc thì đừng có hỏi', 1, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 1, '', 0, 0, 11, '3', 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_user`
--

CREATE TABLE IF NOT EXISTS `tbl_job_user` (
  `u_id` int(20) NOT NULL AUTO_INCREMENT,
  `u_username` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_password` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_salt` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_companyName` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_companyadress` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_companyTypeID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_companyIntro` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_companyRun` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_companyMem` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_img` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_home` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_companyphone` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_companyMobi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_fax` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_contactName` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_contactPosition` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_contactPhone` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_status` int(11) NOT NULL,
  `u_contactMobi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_contactEmail` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_lienhe` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_countryID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_cityID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_urban` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_adress` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_redate` int(11) NOT NULL,
  `u_lasttime` int(11) NOT NULL,
  `u_now` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_sotin` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_visits` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_active` int(11) NOT NULL,
  `u_contactAdress` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_role` int(11) NOT NULL DEFAULT '1',
  `u_fullname` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_sex` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_birthday` int(11) NOT NULL,
  `u_age` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_marry` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_menh` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_mobi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_national` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_ip` text NOT NULL,
  `last_login` text NOT NULL,
  `u_daluu1` int(11) NOT NULL,
  `u_daluu2` int(11) NOT NULL,
  `u_daluu3` int(11) NOT NULL,
  `u_daungtuyen1` int(11) NOT NULL,
  `u_daungtuyen2` int(11) NOT NULL,
  `u_daungtuyen3` int(11) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_job_user`
--

INSERT INTO `tbl_job_user` (`u_id`, `u_username`, `u_password`, `u_salt`, `u_companyName`, `u_companyadress`, `u_companyTypeID`, `u_companyIntro`, `u_companyRun`, `u_companyMem`, `u_img`, `u_home`, `u_companyphone`, `u_companyMobi`, `u_fax`, `u_email`, `u_contactName`, `u_contactPosition`, `u_contactPhone`, `u_status`, `u_contactMobi`, `u_contactEmail`, `u_lienhe`, `u_countryID`, `u_cityID`, `u_urban`, `u_adress`, `u_redate`, `u_lasttime`, `u_now`, `u_sotin`, `u_visits`, `u_active`, `u_contactAdress`, `u_role`, `u_fullname`, `u_sex`, `u_birthday`, `u_age`, `u_marry`, `u_menh`, `u_mobi`, `u_national`, `last_ip`, `last_login`, `u_daluu1`, `u_daluu2`, `u_daluu3`, `u_daungtuyen1`, `u_daungtuyen2`, `u_daungtuyen3`) VALUES
(3, 'quangthang12891@gmail.com', '$2a$08$c0woLMpEHdsLSzr4MVN01uojIDzrKoGj9XGcB5AOSvUYvZYFX8Vla', 'CHGD5', 'CP DV An Tâm', '', '2', 'sơ lược về công ty', 'lĩnh vực hoạt động', 'quy mô công ty 13', 'đường link ảnh logo', 'baoveantam.net', '09348374748', '', '37438468237', 'kinhdoanh@baoveantam.net', 'Tên ng liên hệ', 'chức vụ người liên hệ', 'điện thoại ng liên hệ', 1, 'điện thoại di động', 'emailnguoilienhe@gmail.com', '', '1', '2', 'quận nào', 'địa chỉ - của người - tuyển dụng', 12052013, 22052013, 'cái này bỏ được ko', '2', '43', 1, 'địa chỉ ng liên hệ', 1, 'Đoàn Quang Thắng12', '1', 12, '23', '0', 'Thổ', '0962925599', 'Việt Nam', '127.0.0.1', '2013-12-07 09:50:15', 0, 0, 0, 0, 0, 0),
(4, 'chipshock12891@gmail.com', '', '', 'Công ty Phát Tài', 'địa chỉ cty', '', '       ssssssssssss', '', '1', '', 'baoveantam.net', '03675236212', '', '2323364', 'kinhdoanh@baoveantam.net', 'Mr.Thắng', '', '0962925599', 0, '0931273626', 'quangthang12891@gmail.com', '0', '', '2', '', 'địa chỉ - của người - tuyển dụng', 0, 0, '', '', '', 0, '', 2, 'Đoàn Quang Thắng 3', '1', 12, '', '0', '', '0962925599', '', '', '', 0, 0, 0, 0, 0, 0),
(5, 'quangthang12891', '$2a$08$gupiwL9MdnyZ.I/tjRQ37uuIHo5Gz.Ze0XrnXsnW/v4oM.Y6A0uOG', '', '', '', '', '', '', '', '', '', '', '', '', 'quangthang12891@gmail.com', '', '', '', 1, '', '', '', '', '1', '', 'quangthang12891', 2013, 0, '', '', '', 0, '', 2, 'quangthang12891', 'Y', 9, '', '', '', '11111', '', '::1', '', 0, 0, 0, 0, 0, 0),
(6, 'beobeboi91@gmail.com', '$2a$08$SiY/2UH4qcaM3bitriDSUu35z7Q7FMczaXKybjSHAiQ1kAPLpeIwW', '', '', '', '', '', '', '', '', '', '', '', '', 'beobeboi91@gmail.com', '', '', '', 1, '', '', '', '', '1', '', 'beobeboi91', 2013, 0, '', '', '', 0, '', 2, 'beobeboi91', 'Y', 9, '', '', '', '01667039939', '', '::1', '', 0, 0, 0, 0, 0, 0),
(10, 'giangbeoit232222@gmail.com', '$2a$08$Uk32CZFKI5sh1OyP5AaIG.UpcoKThGa9wj2ZXaAurWQ57Qm.uxu4i', '', 'giangbeoit', 'giangbeoit', '', '                                  giangbeoit  ', '', '0', '3eb50c9e6fa88056081daac283b832cf.jpg', 'giangbeoit', 'giangbeoit', '', 'giangbeoitgiangbeoitgiangbeoit', 'giangbeoit232222@gmail.com', 'giangbeoit', '', 'giangbeoit', 1, 'giangbeoit', 'giangbeoit@gmail.com', '', '', '1', '', 'giangbeoit', 2013, 0, '', '', '', 0, '', 3, '', '', 0, '', '', '', '', '', '::1', '', 0, 0, 0, 0, 0, 0),
(11, 'chipshock@gmail.com', '$2a$08$ZzCyE4QOPjvv.9yNvqvSQ.vi60SlAvC.K2ya7mYUnsgnS7CDH19pi', '', '', '', '', '', '', '', '', '', '', '', '', 'chipshock@gmail.com', '', '', '', 1, '', '', '', '', '1', '', 'Hải Dương', 1386641621, 0, '', '', '', 0, '', 3, 'Đoàn Quang Thắng', 'Y', 12, '', '', '', '0962925599', '', '127.0.0.1', '2013-12-12 20:18:24', 0, 0, 0, 0, 0, 0),
(12, 'chipchip@gmail.com', '$2a$08$Rh4/wQor6gfS04DS5.KWy.n/ZsRIbN.NGWjs1szogUIYab1TN/EkW', '', '', '', '', '', '', '', '', '', '', '', '', 'chipchip@gmail.com', '', '', '', 1, '', '', '', '', '1', '', 'Hải Dương', 1386815781, 0, '', '', '', 0, '', 2, 'Đào Đức Tiến', 'Y', 12, '', '', '', '0962925599', '', '127.0.0.1', '2013-12-12 20:21:54', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loaitn`
--

CREATE TABLE IF NOT EXISTS `tbl_loaitn` (
  `tn_id` int(11) NOT NULL AUTO_INCREMENT,
  `tn_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tn_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_loaitn`
--

INSERT INTO `tbl_loaitn` (`tn_id`, `tn_name`) VALUES
(1, 'Xuất sắc'),
(2, 'Giỏi'),
(3, 'Khá'),
(4, 'Trung bình khá'),
(5, 'Trung bình');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_luong`
--

CREATE TABLE IF NOT EXISTS `tbl_luong` (
  `luong_id` int(11) NOT NULL AUTO_INCREMENT,
  `luong_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`luong_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_luong`
--

INSERT INTO `tbl_luong` (`luong_id`, `luong_name`) VALUES
(1, 'Thỏa thuận'),
(2, '1 - 3 triệu'),
(3, '3 - 5 triệu'),
(4, '5 - 7 triệu'),
(5, '7 - 10 triệu'),
(6, '10 - 15 triệu'),
(7, '15 - 20 triệu'),
(8, '20 - 30 triệu'),
(9, 'Trên 30 triệu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mucvieclam`
--

CREATE TABLE IF NOT EXISTS `tbl_mucvieclam` (
  `m_id` int(20) NOT NULL AUTO_INCREMENT,
  `m_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_id` int(11) NOT NULL,
  `e_nghe` int(11) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `tbl_mucvieclam`
--

INSERT INTO `tbl_mucvieclam` (`m_id`, `m_name`, `u_id`, `e_nghe`) VALUES
(10, 'Bán hàng', 0, 10),
(11, 'Tư vấn bảo hiểm', 0, 11),
(12, 'Báo chí/Biên tập viên', 0, 12),
(13, 'Bất động sản', 0, 13),
(14, 'Biên dịch/Phiên dịch', 0, 14),
(15, 'Bưu chính viễn thông', 0, 15),
(16, 'Cơ khí/Kỹ thuật ứng dụng', 0, 16),
(17, 'Công nghệ thông tin', 0, 17),
(18, 'Dầu khí/Địa chất', 0, 18),
(19, 'Dệt may', 0, 19),
(20, 'Bảo vệ/Vệ sĩ/An ninh', 0, 20),
(21, 'Chăm sóc khách hàng', 0, 21),
(22, 'Điện/Điện tử/Điện lạnh', 0, 22),
(23, 'Du lịch/Nhà hàng/Khách sạn', 0, 23),
(24, 'Dược/Hóa chất/Sinh hóa', 0, 24),
(25, 'Giải trí/Vui chơi', 0, 25),
(26, 'Giáo dục/Đào tạo/Thư viện', 0, 26),
(27, 'Giao thông/Vận tải/Thủy lợi/Cầu đường', 0, 27),
(28, 'Giày da/Thuộc da', 0, 28),
(29, 'Hành chính/Thư ký', 0, 29),
(30, 'Kho vận/Vật tư', 0, 30),
(31, 'Kiến trúc/Nội thất', 0, 31),
(32, 'Kinh doanh', 0, 32),
(33, 'Lao động phổ thông', 0, 33),
(34, 'Luật/Pháp lý', 0, 34),
(35, 'Sinh viên/Mới tốt nghiệp/Thực tập', 0, 35),
(36, 'Môi trường/Xử lý chất thải', 0, 36),
(37, 'Mỹ phẩm', 0, 37),
(38, 'Ngân hàng/Chứng khoán/Đầu tư', 0, 38),
(39, 'Nghệ thuật/Điện ảnh', 0, 39),
(40, 'Nhân sự', 0, 40),
(41, 'Nông/Lâm/Ngư nghiệp', 0, 41),
(42, 'Quan hệ đối ngoại', 0, 42),
(43, 'Thẩm định/Giám định/Quản lý chất lượng', 0, 43),
(44, 'Quản lý điều hành', 0, 44),
(45, 'Quảng cáo/Marketing/PR', 0, 45),
(46, 'Sản xuất/Vận hành sản xuất', 0, 46),
(47, 'Tài chính/Kế toán/Kiểm toán', 0, 47),
(48, 'Thể dục/Thể thao', 0, 48),
(49, 'Thiết kế/Mỹ thuật', 0, 49),
(50, 'Thời vụ/Bán thời gian', 0, 50),
(51, 'Thực phẩn/Dịch vụ ăn uống', 0, 51),
(52, 'Xây dựng', 0, 52),
(53, 'Xuất-Nhập khẩu/Ngoại thương', 0, 53),
(54, 'Y tế', 0, 54),
(55, 'Khác', 0, 55),
(56, 'Ngoại ngữ', 0, 56),
(57, 'Khu chế xuất/Khu công nghiệp', 0, 57),
(58, 'Làm đẹp/Thể lực/Spa', 0, 58),
(59, 'Tài xế/Lái xe/Giao nhận', 0, 59),
(60, 'Trang thiết bị công nghiệp', 0, 60),
(61, 'Trang thiết bị gia dụng', 0, 61),
(62, 'Trang thiết bị văn phòng', 0, 62),
(63, 'Phục vụ/Tạp vụ/Giúp việc', 0, 63);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_namexp`
--

CREATE TABLE IF NOT EXISTS `tbl_namexp` (
  `exp_id` int(11) NOT NULL AUTO_INCREMENT,
  `exp_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`exp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_namexp`
--

INSERT INTO `tbl_namexp` (`exp_id`, `exp_name`) VALUES
(1, 'Dưới 1 năm'),
(2, '1 Năm'),
(3, '2 năm'),
(4, '3 năm'),
(5, '4 năm'),
(6, '5 năm'),
(7, 'Hơn 5 năm'),
(8, 'Chưa có kinh nghiệm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ngoaingu`
--

CREATE TABLE IF NOT EXISTS `tbl_ngoaingu` (
  `nn_id` int(11) NOT NULL AUTO_INCREMENT,
  `nn_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`nn_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tbl_ngoaingu`
--

INSERT INTO `tbl_ngoaingu` (`nn_id`, `nn_name`) VALUES
(1, 'Tiếng Anh - Tiếng Đức'),
(2, 'Tiếng Anh - Tiếng Nha'),
(3, 'Tiếng Anh - Tiếng Ý'),
(4, 'Tiếng Anh - Tiếng Tây Ban Nha'),
(5, 'English - Tiếng Anh'),
(6, 'French - Tiếng Pháp'),
(7, 'United States - Tiếng Anh Mỹ'),
(8, 'Russian - Tiếng Nga'),
(9, 'Chinese - Tiếng Trung'),
(10, 'Korean - Tiếng Hàn'),
(11, 'Japanese - Tiếng Nhật'),
(12, 'German - Tiếng Đức'),
(13, 'Arabic - Tiếng Ả Rập'),
(14, 'Bengalic - Tiếng Bengal'),
(15, 'Bulgarian - Tiếng Bungary'),
(16, 'Burmese - Tiếng Miến điện'),
(17, 'Cambodian - Tiếng Campuchia'),
(18, 'Czech  - Tiếng Séc'),
(19, 'Danmark - Tiếng Đan mạch'),
(20, 'Dutch - Tiếng Hà Lan'),
(21, 'Finnish - Tiếng phần Lan'),
(22, 'Greek - Tiếng Hy Lạp'),
(23, 'Hindi - Tiếng Hinđi'),
(24, 'Hungarian - Tiếng Hungary'),
(25, 'Indonesian - Tiếng Inđônesia'),
(26, 'Italian - Tiếng Ý'),
(27, 'Laotian - Tiếng Lào'),
(28, 'Malay - Tiếng Mã Lai'),
(29, 'Norwegian - Tiếng Nauy'),
(30, 'Polish - Tiếng Ba Lan'),
(31, 'Portuguese - Tiếng Bồ Đào Nha'),
(32, 'Romanian  - Tiếng Ru ma ni'),
(33, 'Spanish - Tiếng Tây Ban Nha'),
(34, 'Taiwanese - Tiếng Đài Loan'),
(35, 'Turkish - Tiếng Thổ Nhĩ Kỳ'),
(36, 'Thai - Tiếng Thái'),
(37, 'Ukrainian - Tiếng Ucraina'),
(38, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quancao`
--

CREATE TABLE IF NOT EXISTS `tbl_quancao` (
  `l_id` int(20) NOT NULL AUTO_INCREMENT,
  `l_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_url` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_img` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_border` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_width` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_height` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_position` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_order` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_click` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_active` int(11) NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_quancao`
--

INSERT INTO `tbl_quancao` (`l_id`, `l_name`, `l_url`, `l_img`, `l_border`, `l_width`, `l_height`, `l_position`, `l_comment`, `l_order`, `l_click`, `l_active`) VALUES
(1, 'Tên công ty muốn quản cáo', 'link website công ty đó', 'logo công ty', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', '12', 1),
(2, 'Tên công ty muốn quản cáo', 'link website công ty đó', 'logo công ty', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', '12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sex`
--

CREATE TABLE IF NOT EXISTS `tbl_sex` (
  `sex_id` int(11) NOT NULL AUTO_INCREMENT,
  `sex_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sex_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_sex`
--

INSERT INTO `tbl_sex` (`sex_id`, `sex_name`) VALUES
(1, 'Nam'),
(2, 'Nữ'),
(3, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thoigian`
--

CREATE TABLE IF NOT EXISTS `tbl_thoigian` (
  `t_id` int(20) NOT NULL AUTO_INCREMENT,
  `t_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_id` int(11) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_thoigian`
--

INSERT INTO `tbl_thoigian` (`t_id`, `t_name`, `u_id`) VALUES
(1, 'Toàn thời gian cố định', 0),
(2, 'Toàn thời gian tạm thời', 0),
(3, 'Bán thời gian cố định', 0),
(4, 'Bán thời gian tạm thời', 0),
(5, 'Theo hợp đồng tư vấn', 0),
(6, 'Thực tập', 0),
(7, 'Khác', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tinchitiet`
--

CREATE TABLE IF NOT EXISTS `tbl_tinchitiet` (
  `k_id` int(20) NOT NULL AUTO_INCREMENT,
  `cat_id` int(20) NOT NULL,
  `k_tieude` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_trichdan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_ngaythang` int(11) NOT NULL,
  `k_img` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_border` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_align` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_alt` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_width` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_height` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_tacgia` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_hot` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_showleft` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_active` int(11) NOT NULL,
  PRIMARY KEY (`k_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_tinchitiet`
--

INSERT INTO `tbl_tinchitiet` (`k_id`, `cat_id`, `k_tieude`, `k_trichdan`, `k_noidung`, `k_ngaythang`, `k_img`, `k_border`, `k_align`, `k_alt`, `k_width`, `k_height`, `k_tacgia`, `k_hot`, `k_showleft`, `k_active`) VALUES
(1, 1, 'tiêu đề tin tức', 'chèm link demo', 'nội dung là ji', 12042013, 'logo or ảnh ji cũng đc', 'kích thước', 'kích thước', 'kích thước', 'kích thước', 'kích thước', 'tác giả', '1', 'showleft', 1),
(2, 1, 'tiêu đề tin tức', 'chèm link demo', 'nội dung là ji', 12042013, 'logo or ảnh ji cũng đc', 'kích thước', 'kích thước', 'kích thước', 'kích thước', 'kích thước', 'tác giả', '1', 'showleft', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trinhdonn`
--

CREATE TABLE IF NOT EXISTS `tbl_trinhdonn` (
  `td_id` int(11) NOT NULL AUTO_INCREMENT,
  `td_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`td_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_trinhdonn`
--

INSERT INTO `tbl_trinhdonn` (`td_id`, `td_name`) VALUES
(1, 'Sơ cấp'),
(2, 'Trung cấp'),
(3, 'Cao cấp');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
