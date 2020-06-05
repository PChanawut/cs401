-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 08:21 AM
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
  `company_address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `company_phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `company_fax` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `company_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `enroll_start` date NOT NULL,
  `enroll_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `company_status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `company_file` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_type`, `company_name`, `company_address`, `company_phone`, `company_fax`, `company_email`, `enroll_start`, `enroll_no`, `company_status`, `company_file`) VALUES
(1, 'company', 'บริษัท ปตท. จำกัด (มหาชน)', '555 ถนนวิภาวดีรังสิต,จตุจักร,จตุจักร,กรุงเทพมหานคร,10900', '0864562591', '0123456789', 'superhipee@hotmail.com', '2020-06-01', '0107544000108', 'success', '1b46ebb28f4483b47ca0122727ee082d2931bb8d736266fd6b53fc1d66fed101797711ea2cba9f1b1d6a3cd05377c1f834601e03231d21bdc2c1def8b1ddf8d6.pdf'),
(2, 'company', 'บริษัท ปตท. จำกัด (มหาชน)2', '555 ถนนวิภาวดีรังสิต,บ้านเกาะ,เมืองนครราชสีมา,นครราชสีมา,30000', '0864562591', '0864562511', 'superhipee@hotmail.com', '2020-06-01', '59096502626', 'wait', 'b27acff6aa19049a9d870d756bafcd7cdb2fa7481e6614bdba51d6013fad902c8b22439856370ab3a930da5052aa56ddc9f9a73fff65a79be339b8721b20ec68.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `companystaff`
--

CREATE TABLE `companystaff` (
  `staff_id` int(11) NOT NULL,
  `license_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `type_authorities` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `staff_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `staff_idcard` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `staff_position` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `staff_age` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `staff_nationality` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `staff_phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `staff_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `staff_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `staff_qualification` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `staff_no_regis` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `staff_work_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `staff_art_license` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `staff_start_work` date DEFAULT NULL,
  `fav_staff` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `companystaff`
--

INSERT INTO `companystaff` (`staff_id`, `license_id`, `company_id`, `type_authorities`, `staff_name`, `staff_idcard`, `staff_position`, `staff_age`, `staff_nationality`, `staff_phone`, `staff_email`, `staff_address`, `staff_qualification`, `staff_no_regis`, `staff_work_name`, `staff_art_license`, `staff_start_work`, `fav_staff`) VALUES
(1, 1, 1, 'เจ้าหน้าที่ความปลอดภัยทางรังสี', 'สมชาย ทรัพย์ภูมิ', '1209700576651', 'วิศวกรความปลอดภัยทางรังสี', '45', 'ไทย', '0873550826', 'smell-sjr@hotmail.com', '38/2,6,-,-,กกกุง,เมืองสรวง,ร้อยเอ็ด,45220', 'วิศวกรรมศาสตร์ สาขารังสี', 'SD56862145', NULL, NULL, NULL, 'select'),
(2, 1, 1, 'ผู้ปฏิบัติงานทางรังสี', 'รุ่งอรุณ จันทรกุล', '3200700576651', 'เจ้าหน้าที่ตรวจสอบความปลอดภัยท', '49', 'ไทย', '0864512215', 'rungarun@hotmail.com', '77/9,2,-,-,ดงกลาง,จตุรพักตรพิมาน,ร้อยเอ็ด,45180', 'วิทยาศาสตร์บัณฑิต สาขาฟิสิกส์', 'DF7862225415', NULL, NULL, NULL, 'select'),
(3, 1, 1, 'แพทย์ผู้รับผิดชอบ', 'ปวิณ ปทุมวัน', '1204500547895', 'แพทย์ดูแลเจ้าหน้าทางรังสี', '43', 'ไทย', '0817613267', 'prawin@yahoo.com', '115/89,3,-,-,ยม,ท่าวังผา,น่าน,55140', NULL, NULL, 'ปตท. ปิโตรเลียม ระยอง', 'GF8464646', '0000-00-00', 'select'),
(4, 2, 1, 'เจ้าหน้าที่ความปลอดภัยทางรังสี', 'สมชาย ทรัพย์ภูมิ', '1209700576651', 'วิศวกรความปลอดภัยทางรังสี', '45', 'ไทย', '0873550826', 'smell-sjr@hotmail.com', '38/2,6,-,-,กกกุง,เมืองสรวง,ร้อยเอ็ด,45220', 'วิศวกรรมศาสตร์ สาขารังสี', 'SD56862145', NULL, NULL, NULL, 'not'),
(5, 2, 1, 'ผู้ปฏิบัติงานทางรังสี', 'รุ่งอรุณ จันทรกุล', '3200700576651', 'เจ้าหน้าที่ตรวจสอบความปลอดภัยท', '49', 'ไทย', '0864512215', 'rungarun@hotmail.com', '77/9,2,-,-,ดงกลาง,จตุรพักตรพิมาน,ร้อยเอ็ด,45180', 'วิทยาศาสตร์บัณฑิต สาขาฟิสิกส์', 'DF7862225415', NULL, NULL, NULL, 'not'),
(6, 2, 1, 'แพทย์ผู้รับผิดชอบ', 'ปวิณ ปทุมวัน', '1204500547895', 'แพทย์ดูแลเจ้าหน้าทางรังสี', '43', 'ไทย', '0817613267', 'prawin@yahoo.com', '115/89,3,-,-,ยม,ท่าวังผา,น่าน,55140', NULL, NULL, 'ปตท. ปิโตรเลียม ระยอง', 'GF8464646', '0000-00-00', 'not'),
(7, 3, 1, 'เจ้าหน้าที่ความปลอดภัยทางรังสี', 'สมชาย ทรัยพ์ภูมิ', '1120970057665', 'วิศวกรความปอดภัยทางรังสี', '45', 'ไทย', '0873550826', 'somchai@hotmail.com', '78/2,9,-,-,หนองกบ,หนองแซง,สระบุรี,18170', 'วิศวกรรมศาสตร์ สาขาฟิสิกส์', 'GF789546', NULL, NULL, NULL, 'select'),
(8, 3, 1, 'ผู้ปฏิบัติงานทางรังสี', 'รุ่งอรุณ จันทรกุล', '3200700576651', 'เจ้าหน้าที่ตรวจสอบความปลอดภัยท', '49', 'ไทย', '0864512215', 'rungarun@hotmail.com', '77/9,2,-,-,ดงกลาง,จตุรพักตรพิมาน,ร้อยเอ็ด,45180', 'วิทยาศาสตร์บัณฑิต สาขาฟิสิกส์', 'DF7862225415', NULL, NULL, NULL, 'not'),
(9, 3, 1, 'แพทย์ผู้รับผิดชอบ', 'ปวิณ ปทุมวัน', '1204500547895', 'แพทย์ดูแลเจ้าหน้าทางรังสี', '43', 'ไทย', '0817613267', 'prawin@yahoo.com', '115/89,3,-,-,ยม,ท่าวังผา,น่าน,55140', NULL, NULL, 'ปตท. ปิโตรเลียม ระยอง', 'GF8464646', '0000-00-00', 'not'),
(10, 4, 1, 'เจ้าหน้าที่ความปลอดภัยทางรังสี', 'สมชาย ทรัพย์ภูมิ', '1209700576651', 'วิศวกรความปลอดภัยทางรังสี', '45', 'ไทย', '0873550826', 'smell-sjr@hotmail.com', '38/2,6,-,-,กกกุง,เมืองสรวง,ร้อยเอ็ด,45220', 'วิศวกรรมศาสตร์ สาขารังสี', 'SD56862145', NULL, NULL, NULL, 'not'),
(11, 4, 1, 'ผู้ปฏิบัติงานทางรังสี', 'รุ่งอรุณ จันทรกุล', '3200700576651', 'เจ้าหน้าที่ตรวจสอบความปลอดภัยท', '49', 'ไทย', '0864512215', 'rungarun@hotmail.com', '77/9,2,-,-,ดงกลาง,จตุรพักตรพิมาน,ร้อยเอ็ด,45180', 'วิทยาศาสตร์บัณฑิต สาขาฟิสิกส์', 'DF7862225415', NULL, NULL, NULL, 'not'),
(12, 4, 1, 'แพทย์ผู้รับผิดชอบ', 'ปวิณ ปทุมวัน', '1204500547895', 'แพทย์ดูแลเจ้าหน้าทางรังสี', '43', 'ไทย', '0817613267', 'prawin@yahoo.com', '115/89,3,-,-,ยม,ท่าวังผา,น่าน,55140', NULL, NULL, 'ปตท. ปิโตรเลียม ระยอง', 'GF8464646', '0000-00-00', 'not');

-- --------------------------------------------------------

--
-- Table structure for table `document_relate`
--

CREATE TABLE `document_relate` (
  `document_id` int(11) NOT NULL,
  `license_id` int(11) NOT NULL,
  `type_document` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `no_license` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `end_license` date DEFAULT NULL,
  `start_request` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inspectionreport`
--

CREATE TABLE `inspectionreport` (
  `inspect_id` int(30) NOT NULL,
  `license_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `inspect1_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `inspect2_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `inspect3_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `inspect_date` date NOT NULL,
  `inspect_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `inspect_pdf` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `license`
--

CREATE TABLE `license` (
  `license_id` int(11) NOT NULL,
  `license_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `license_number` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `place_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `license_approve_person` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `license_status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date DEFAULT NULL,
  `expire_date` date DEFAULT NULL,
  `latest_inspect_date` date DEFAULT NULL,
  `next_inspect_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `license`
--

INSERT INTO `license` (`license_id`, `license_type`, `license_number`, `place_id`, `sid`, `license_approve_person`, `license_status`, `start_date`, `expire_date`, `latest_inspect_date`, `next_inspect_date`) VALUES
(1, 'ขออนุญาตฯ วัสดุพลอยได้', 'RE', '1', '1', 'สมชาย อินทานินท์', 'ใบอนุญาตถูกยกเลิก', '2020-06-04', '2020-06-12', NULL, NULL),
(2, 'ขออนุญาตฯ วัสดุพลอยได้', 'RE', '2', '1', 'สมชาย อินทานินท์', 'สำเร็จ', '2020-06-04', '2020-06-17', NULL, NULL),
(3, 'ขออนุญาตฯ วัสดุพลอยได้', 'RE', '3', '1', NULL, 'รอตรวจสอบคำขอ', '2020-06-04', NULL, NULL, NULL),
(4, 'ขออนุญาตฯ วัสดุพลอยได้', 'RE', '4', '1', NULL, 'รอตรวจสอบคำขอ', '2020-06-04', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `materialchemical`
--

CREATE TABLE `materialchemical` (
  `material_id` int(11) NOT NULL,
  `license_id` int(11) NOT NULL,
  `type_special` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `code_work` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `work_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nuclear_benefit` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nuclear_special` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `weight_kg` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `no_material` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `work_age` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address_produce` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address_sale` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materiallocation`
--

CREATE TABLE `materiallocation` (
  `material_id` int(11) NOT NULL,
  `license_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `material_address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `material_phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `material_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `type_benefit` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_request` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_vehicle` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_location_material` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fav_location` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `materiallocation`
--

INSERT INTO `materiallocation` (`material_id`, `license_id`, `company_id`, `material_address`, `material_phone`, `material_email`, `type_benefit`, `type_request`, `type_vehicle`, `type_location_material`, `fav_location`) VALUES
(1, 1, 1, '38/2 ม.6,หนองปลาไหล,บางละมุง,ชลบุรี,20150', '0984593954', 'smell-sjr@hotmail.com', 'ศึกษาวิจัย', 'มีไว้ในครอบครอง', NULL, NULL, 'select'),
(2, 2, 1, '38/2 ม.6,หนองปลาไหล,บางละมุง,ชลบุรี,20150', '0984593954', 'smell-sjr@hotmail.com', 'การแพทย์', 'ผลิต', NULL, NULL, 'not'),
(3, 3, 1, '38/2 ม.6,ปลวกแดง,ปลวกแดง,ระยอง,21140', '0873550826', 'ptt_rayong@hotmail.com', 'อุตสาหกรรม', 'มีไว้ในครอบครอง', NULL, NULL, 'select'),
(4, 4, 1, '38/2 ม.6,หนองปลาไหล,ปลวกแดง,ระยอง,21140', '0873550826', 'ptt_rayong@hotmail.com', 'การแพทย์', 'ผลิต', NULL, NULL, 'not');

-- --------------------------------------------------------

--
-- Table structure for table `materialnatural`
--

CREATE TABLE `materialnatural` (
  `material_id` int(11) NOT NULL,
  `license_id` int(11) NOT NULL,
  `type_benefit` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `material_special` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `material_num` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `unit` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `changeto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `changeto_num` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `unit_changeto` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materialnuclear`
--

CREATE TABLE `materialnuclear` (
  `material_id` int(11) NOT NULL,
  `license_id` int(11) NOT NULL,
  `type_special` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nuclear_purpose` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_check` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name_work` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type_nuclear_special` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `nuclear_vehicle` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_location` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `number_batch` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `model_number` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `detail_material` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `type_material` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `weight_material` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `unit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `weight_nuclear` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `code_isotope` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materialpack`
--

CREATE TABLE `materialpack` (
  `material_id` int(11) NOT NULL,
  `license_id` int(11) NOT NULL,
  `pack_style` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pack_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `un_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materialrequest`
--

CREATE TABLE `materialrequest` (
  `material_request_id` int(11) NOT NULL,
  `license_id` int(11) NOT NULL,
  `material_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `no_reference` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `operation_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `element` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `product_model` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `material_status` varchar(20) CHARACTER SET utf8 NOT NULL,
  `manufacturer_material` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `material_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight_material` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `unit_weight` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `manufacturer_container` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `material_number_container` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `container_number` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `weight_container` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_container` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locationname_material` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `company_sale` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `materialrequest`
--

INSERT INTO `materialrequest` (`material_request_id`, `license_id`, `material_type`, `no_reference`, `operation_type`, `element`, `product_model`, `material_status`, `manufacturer_material`, `material_number`, `weight_material`, `unit_weight`, `manufacturer_container`, `material_number_container`, `container_number`, `weight_container`, `unit_container`, `locationname_material`, `company_sale`) VALUES
(1, 1, 'ไม่ปิดผนึก', 'FD55468', 'Leakage Testing', 'LI50', 'TY3465', 'ยกเลิกการใช้', 'RADIAN  INDUSTY', NULL, '25000', 'lb', 'ของเหลว', NULL, NULL, NULL, NULL, 'PTT RAYONG', 'RADIAN INDUSTY IN THAILAND'),
(2, 2, 'ไม่ปิดผนึก', 'FD55468', 'Research', 'LI50', 'TY3465', 'ใช้งานปกติ', 'RADIAN  INDUSTY', NULL, '25000', 'Bq', 'ของแข็ง', NULL, NULL, NULL, NULL, 'PTT RAYONG', 'RADIAN INDUSTY IN THAILAND'),
(3, 3, 'ไม่ปิดผนึก', 'DE7896', 'รังสีวินิจฉัย', 'CO-60', 'RT58889', 'เก็บสำรอง', 'RADIAN RAYONG', NULL, '25000', 'lb', 'ของเหลว', NULL, NULL, NULL, NULL, 'PTT RAYONG', 'RADIAN RAYONG THAILAND'),
(4, 4, 'ไม่ปิดผนึก', 'FD55468', 'Research', 'LI50', 'TY3465', 'ใช้งานปกติ', 'RADIAN  INDUSTY', NULL, '25000', 'Bq', 'ของแข็ง', NULL, NULL, NULL, NULL, 'PTT RAYONG', 'RADIAN INDUSTY IN THAILAND');

-- --------------------------------------------------------

--
-- Table structure for table `materialspecial`
--

CREATE TABLE `materialspecial` (
  `material_id` int(11) NOT NULL,
  `license_id` int(11) NOT NULL,
  `type_atomic` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `power_heat` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `type_atomic_reactor` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `producename_atomic` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country_produce_atomic` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materialxray`
--

CREATE TABLE `materialxray` (
  `material_id` int(11) NOT NULL,
  `license_id` int(11) NOT NULL,
  `no_reference` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `operation_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `manufacturer_material` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `material_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `number_xray` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `style_work` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `power_kgv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `power_mgv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `power_mma` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locationname_material` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `company_sale` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_id` int(30) NOT NULL,
  `department_name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `department_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `place_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `department_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `zone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `risk_group` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `department_name`, `department_id`, `address`, `tel`, `fax`, `email`, `place_type`, `department_type`, `zone`, `risk_group`) VALUES
(1, 'บริษัท ปตท. จำกัด (มหาชน)', '1', '38/2 ม.6,หนองปลาไหล,บางละมุง,ชลบุรี,20150', '0984593954', 'NULL', 'smell-sjr@hotmail.com', '01', 'NULL', 'NULL', 'NULL'),
(2, 'บริษัท ปตท. จำกัด (มหาชน)', '1', '38/2 ม.6,หนองปลาไหล,บางละมุง,ชลบุรี,20150', '0984593954', 'NULL', 'smell-sjr@hotmail.com', '01', 'NULL', 'NULL', 'NULL'),
(3, 'บริษัท ปตท. จำกัด (มหาชน)', '1', '38/2 ม.6,ปลวกแดง,ปลวกแดง,ระยอง,21140', '0873550826', 'NULL', 'ptt_rayong@hotmail.com', '01', 'NULL', 'NULL', 'NULL'),
(4, 'บริษัท ปตท. จำกัด (มหาชน)', '1', '38/2 ม.6,หนองปลาไหล,ปลวกแดง,ระยอง,21140', '0873550826', 'NULL', 'ptt_rayong@hotmail.com', '01', 'NULL', 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `usercompany`
--

CREATE TABLE `usercompany` (
  `usercompany_id` int(8) NOT NULL,
  `company_id` int(8) DEFAULT NULL,
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
(1, NULL, 'admin', '25f9e794323b453885f5181f1b624d0b', 'Power Admin', 'admin', 'admin', 'ativate', '11111'),
(2, 1, 'admin_ptt', '25f9e794323b453885f5181f1b624d0b', 'บริษัท ปตท. จำกัด (มหาชน)', 'admin', 'company', 'ativate', '11111'),
(3, 0, 'officer', '25f9e794323b453885f5181f1b624d0b', 'สมชาย อินทานินท์', 'เจ้าหน้าที่ขอใบอนุญาต', 'officer', 'ativate', '11110'),
(4, 0, 'commit', '25f9e794323b453885f5181f1b624d0b', 'อมรรัตน์ สิงห์หราช', 'หัวหน้าฝ่ายออกใบอนุญาต', 'subcommittee', 'ativate', '11000'),
(5, 1, 'kavin', '25f9e794323b453885f5181f1b624d0b', 'กวิน ศรีประทุม', 'เจ้าหน้าที่บัญชี', 'usercompany', 'ativate', '11110'),
(6, 2, 'admin_ptt123', '25f9e794323b453885f5181f1b624d0b', 'บริษัท ปตท. จำกัด (มหาชน)2', 'admin', 'company', 'deativate', '11111'),
(7, 1, 'chanawut', 'd41d8cd98f00b204e9800998ecf8427e', 'ชนะวุฒิ มหัทธนาคุณ', 'ฝ่ายคำร้อง', 'usercompany', 'deativate', '11110');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`),
  ADD UNIQUE KEY `enroll_no` (`enroll_no`);

--
-- Indexes for table `companystaff`
--
ALTER TABLE `companystaff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `document_relate`
--
ALTER TABLE `document_relate`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `inspectionreport`
--
ALTER TABLE `inspectionreport`
  ADD PRIMARY KEY (`inspect_id`);

--
-- Indexes for table `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`license_id`);

--
-- Indexes for table `materialchemical`
--
ALTER TABLE `materialchemical`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `materiallocation`
--
ALTER TABLE `materiallocation`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `materialnatural`
--
ALTER TABLE `materialnatural`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `materialnuclear`
--
ALTER TABLE `materialnuclear`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `materialpack`
--
ALTER TABLE `materialpack`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `materialrequest`
--
ALTER TABLE `materialrequest`
  ADD PRIMARY KEY (`material_request_id`);

--
-- Indexes for table `materialspecial`
--
ALTER TABLE `materialspecial`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `materialxray`
--
ALTER TABLE `materialxray`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `usercompany`
--
ALTER TABLE `usercompany`
  ADD PRIMARY KEY (`usercompany_id`),
  ADD UNIQUE KEY `usercompany_username_3` (`usercompany_username`),
  ADD KEY `usercompany_username` (`usercompany_username`),
  ADD KEY `usercompany_username_2` (`usercompany_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companystaff`
--
ALTER TABLE `companystaff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `document_relate`
--
ALTER TABLE `document_relate`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspectionreport`
--
ALTER TABLE `inspectionreport`
  MODIFY `inspect_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `license`
--
ALTER TABLE `license`
  MODIFY `license_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materialchemical`
--
ALTER TABLE `materialchemical`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materiallocation`
--
ALTER TABLE `materiallocation`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materialnatural`
--
ALTER TABLE `materialnatural`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materialnuclear`
--
ALTER TABLE `materialnuclear`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materialpack`
--
ALTER TABLE `materialpack`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materialrequest`
--
ALTER TABLE `materialrequest`
  MODIFY `material_request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materialspecial`
--
ALTER TABLE `materialspecial`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materialxray`
--
ALTER TABLE `materialxray`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usercompany`
--
ALTER TABLE `usercompany`
  MODIFY `usercompany_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
