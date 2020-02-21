-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 07:24 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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

INSERT INTO `company` (`company_id`, `company_name`, `office_name`, `company_address`, `company_phone`, `company_fax`, `company_email`, `enroll_start`, `enroll_no`) VALUES
(1, 'Chana enterprise', 'Chana enterprise บางนา', '64 หมู่ที่ 8 , ตำบลคลองหนึ่ง อำเภอคลองหลวง , กรุงเทพและปริมณฑล , ปทุมธานี , 12120 , ประเทศไทย', '0123456789', '012345678', 'chana_enterprise@hotmail.com', '2019-03-09', '0135560026742'),
(2, 'mail enterprise', 'Mail enterprise ชลบุรี', '64 หมู่ที่ 8 , ตำบลคลองหนึ่ง อำเภอคลองหลวง , กรุงเทพและปริมณฑล , ปทุมธานี , 12120 , ประเทศไทย', '0123456789', '012345678', 'mail_enterprise@hotmail.com', '2019-03-01', '0135560026742');

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
  `usercompany_ativate` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `usercompany_permission` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usercompany`
--

INSERT INTO `usercompany` (`usercompany_id`, `company_id`, `usercompany_username`, `usercompany_password`, `usercompany_fname`, `usercompany_lname`, `usercompany_status`, `usercompany_ativate`, `usercompany_permission`) VALUES
(1, 1, 'pchana', '25f9e794323b453885f5181f1b624d0b', 'ชนะวุฒิ', 'มหัทธนาคุณ', 'ผู้จัดการ', 'ativate', '11111'),
(2, 1, 'user_mail', '25f9e794323b453885f5181f1b624d0b', 'สุจารี', 'ไทยรัตน์', 'แม่บ้าน', 'ativate', '11110');

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
  MODIFY `company_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usercompany`
--
ALTER TABLE `usercompany`
  MODIFY `usercompany_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
