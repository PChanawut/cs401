-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 04:18 PM
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
  `company_address_storage` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `company_phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `company_fax` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `company_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `enroll_start` date NOT NULL,
  `enroll_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `company_status` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_type`, `company_name`, `office_name`, `company_address`, `company_address_storage`, `company_phone`, `company_fax`, `company_email`, `enroll_start`, `enroll_no`, `company_status`) VALUES
(1, 'personality', 'นายชนะวุฒิ มหัทธนาคุณ', 'Chana office', '64 หมู่ที่ 8 , ตำบลคลองหนึ่ง อำเภอคลองหลวง , กรุงเทพและปริมณฑล , ปทุมธานี , 12120 , ประเทศไทย', '64 หมู่ที่ 8 , ตำบลคลองหนึ่ง อำเภอคลองหลวง , กรุงเทพและปริมณฑล , ปทุมธานี , 12120 , ประเทศไทย', '0123456789', '012345678', 'chana_enterprise@hotmail.com', '2019-03-09', '1309902511738', 'success'),
(2, 'company', 'mail enterprise', 'Mail enterprise ชลบุรี', '64 หมู่ที่ 8 , ตำบลคลองหนึ่ง อำเภอคลองหลวง , กรุงเทพและปริมณฑล , ปทุมธานี , 12120 , ประเทศไทย', '64 หมู่ที่ 8 , ตำบลคลองหนึ่ง อำเภอคลองหลวง , กรุงเทพและปริมณฑล , ปทุมธานี , 12120 , ประเทศไทย', '0123456789', '012345678', 'mail_enterprise@hotmail.com', '2019-03-01', '0135560026742', 'success'),
(60, 'personality', 'comsci company', 'บร.2', '123456789', '123456789', '0123456789', '0123456789', 'chana@hotmail.com', '2010-02-03', '5909650000', 'wait');

-- --------------------------------------------------------

--
-- Table structure for table `usercompany`
--

CREATE TABLE `usercompany` (
  `usercompany_id` int(8) NOT NULL,
  `company_id` int(8) NOT NULL,
  `usercompany_username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `usercompany_password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `usercompany_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `usercompany_status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `usercompany_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `usercompany_ativate` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `usercompany_permission` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usercompany`
--

INSERT INTO `usercompany` (`usercompany_id`, `company_id`, `usercompany_username`, `usercompany_password`, `usercompany_name`, `usercompany_status`, `usercompany_type`, `usercompany_ativate`, `usercompany_permission`) VALUES
(1, 1, 'pchana', '25f9e794323b453885f5181f1b624d0b', 'ชนะวุฒิ มหัทธนาคุณ', 'บริษัท', 'company', 'ativate', '11111'),
(2, 1, 'user_mail', '25f9e794323b453885f5181f1b624d0b', 'สุจารี ไทยรัตน์', 'แม่บ้าน', 'usercompany', 'ativate', '00000'),
(4, 1, 'wanida', '25f9e794323b453885f5181f1b624d0b', 'วนิดา สงวนเผ่า', 'ชงกาแฟ', 'usercompany', 'ativate', '10100'),
(5, 1, 'domepakorn', '25f9e794323b453885f5181f1b624d0b', 'ปกรณ์ จิรักษา', 'นักดนตรี', 'usercompany', 'ativate', '11100'),
(76, 60, 'chanawut', '25f9e794323b453885f5181f1b624d0b', 'comsci company', 'root', 'company', 'ativate', '11111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
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
  MODIFY `company_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `usercompany`
--
ALTER TABLE `usercompany`
  MODIFY `usercompany_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
