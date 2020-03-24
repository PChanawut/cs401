-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 12:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs402`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(8) NOT NULL,
  `company_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `office_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `company_address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `company_phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `company_fax` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `company_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `enroll_start` date NOT NULL,
  `enroll_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_type`, `company_name`, `office_name`, `company_address`, `company_phone`, `company_fax`, `company_email`, `enroll_start`, `enroll_no`) VALUES
(1, '', 'Chana enterprise', 'Chana enterprise บางนา', '64 หมู่ที่ 8 , ตำบลคลองหนึ่ง อำเภอคลองหลวง , กรุงเทพและปริมณฑล , ปทุมธานี , 12120 , ประเทศไทย', '0123456789', '012345678', 'chana_enterprise@hotmail.com', '2019-03-09', '0135560026742'),
(2, '', 'mail enterprise', 'Mail enterprise ชลบุรี', '64 หมู่ที่ 8 , ตำบลคลองหนึ่ง อำเภอคลองหลวง , กรุงเทพและปริมณฑล , ปทุมธานี , 12120 , ประเทศไทย', '0123456789', '012345678', 'mail_enterprise@hotmail.com', '2019-03-01', '0135560026742');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `company_id` int(11) NOT NULL,
  `type` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `idnumber` varchar(13) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `enroll_start` date NOT NULL,
  `enroll_no` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `company_phone` int(20) NOT NULL,
  `company_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `office_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usercompany`
--

CREATE TABLE `usercompany` (
  `usercompany_id` int(8) NOT NULL,
  `company_id` int(8) NOT NULL,
  `usercompany_username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `usercompany_password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `usercompany_fname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `usercompany_lname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `usercompany_status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `usercompany_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `usercompany_ativate` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `usercompany_permission` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usercompany`
--

INSERT INTO `usercompany` (`usercompany_id`, `company_id`, `usercompany_username`, `usercompany_password`, `usercompany_fname`, `usercompany_lname`, `usercompany_status`, `usercompany_type`, `usercompany_ativate`, `usercompany_permission`) VALUES
(1, 1, 'pchana', '25f9e794323b453885f5181f1b624d0b', 'ชนะวุฒิ', 'มหัทธนาคุณ', 'บริษัท', 'company', 'ativate', '11111'),
(2, 1, 'user_mail', '25f9e794323b453885f5181f1b624d0b', 'สุจารี', 'ไทยรัตน์', 'แม่บ้าน', 'usercompany', 'ativate', '11110'),
(3, 1, 'rangsan', '25f9e794323b453885f5181f1b624d0b', 'รังสรรค์', 'ประเสริฐนรสาร', 'พ่อบ้าน', 'usercompany', 'deativate', '11110'),
(4, 1, 'wanida', '25f9e794323b453885f5181f1b624d0b', 'วนิดา', 'สงวนเผ่า', 'ชงกาแฟ', 'usercompany', 'ativate', '01100'),
(5, 1, 'domepakorn', '25f9e794323b453885f5181f1b624d0b', 'ปกรณ์', 'จิรักษา', 'นักดนตรี', 'usercompany', 'ativate', '11000'),
(6, 1, 'putha', '25f9e794323b453885f5181f1b624d0b', 'ภูธา', 'ลิ่มถิรสกุล', 'หัวหน้าภาคสนาม', 'usercompany', 'deativate', '11100'),
(7, 1, 'ratchani', '25f9e794323b453885f5181f1b624d0b', 'รัชนีกร', 'เหลืองธนูศิลป์', 'นักเต้น', 'usercompany', 'ativate', '10000'),
(8, 1, 'jadet', '25f9e794323b453885f5181f1b624d0b', 'ประสงค์ ', 'ทัศศิริ', 'ผู้กำกับ', 'usercompany', 'ativate', '11110'),
(9, 1, 'teewin', '25f9e794323b453885f5181f1b624d0b', 'ธีวินท์', 'เตสมัตถ์เลอมาน', 'พ่อบ้าน', 'usercompany', 'ativate', '00010');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `usercompany`
--
ALTER TABLE `usercompany`
  ADD PRIMARY KEY (`usercompany_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usercompany`
--
ALTER TABLE `usercompany`
  MODIFY `usercompany_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
