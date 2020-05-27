-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 07:13 PM
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
(1, 'company', 'บริษัท ปตท. จำกัด (มหาชน)', '555 ถนนวิภาวดีรังสิต,จตุจักร,จตุจักร,กรุงเทพมหานคร,10900', '025372000', '0253734989', '-', '2001-10-01', '0107544000108', 'success', '9bc302a7784e837a553c6dbde4831bfdc720192307c90433e1ea3e0ba68e4347de245543eb7f8f5a8a7ff0464b2ea74e70ebd01da394fa97855a1d97992e436e.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `companystaff`
--

CREATE TABLE `companystaff` (
  `staff_id` int(11) NOT NULL,
  `license_id` int(11) NOT NULL,
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
(1, 'ขออนุญาตพลังงานปรมาณูจากเครื่องปฏิกรณ์ปรมาณู', 'RE', '1', '4', 'NULL', 'รอตรวจสอบคำขอ', '2020-05-26', '0000-00-00', '0000-00-00', '0000-00-00');

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

INSERT INTO `materiallocation` (`material_id`, `license_id`, `material_address`, `material_phone`, `material_email`, `type_benefit`, `type_request`, `type_vehicle`, `type_location_material`, `fav_location`) VALUES
(1, 1, '555 ถนนวิภาวดีรังสิต จตุจักร จตุจักร กรุงเทพมหานคร 10900', '025372000', '-', 'NULL', 'ผลิต', 'NULL', 'NULL', '');

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

--
-- Dumping data for table `materialspecial`
--

INSERT INTO `materialspecial` (`material_id`, `license_id`, `type_atomic`, `power_heat`, `type_atomic_reactor`, `producename_atomic`, `country_produce_atomic`) VALUES
(1, 1, 'เป่าลูกโป่ง', '1000', 'เครื่องปฏิกรณ์ปรมาณูกำลัง', 'ชนา เอนเตอร์ไพรส์', 'เยอรมัน');

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
(2, 0, 'officer', '25f9e794323b453885f5181f1b624d0b', 'พนักงาน นามสกุล', 'ชงชา', 'officer', 'ativate', '11110'),
(3, 0, 'commit', '25f9e794323b453885f5181f1b624d0b', 'อนุกรรมการ นามสกุล', 'คนสวน', 'subcommittee', 'ativate', '11000'),
(4, 1, 'admin_ptt', '25f9e794323b453885f5181f1b624d0b', 'บริษัท ปตท. จำกัด (มหาชน)', 'admin', 'company', 'ativate', '11111');

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
  MODIFY `company_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `companystaff`
--
ALTER TABLE `companystaff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `license_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `materialchemical`
--
ALTER TABLE `materialchemical`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materiallocation`
--
ALTER TABLE `materiallocation`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `material_request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materialspecial`
--
ALTER TABLE `materialspecial`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `materialxray`
--
ALTER TABLE `materialxray`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usercompany`
--
ALTER TABLE `usercompany`
  MODIFY `usercompany_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
