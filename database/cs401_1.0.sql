-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 06:19 AM
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
-- Database: `cs401`
--

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `permit` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `identification` int(20) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `houseNo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `villageNo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `alley` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `road` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `subdistrict` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `postalcode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `faxnumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `qualification` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `operator_doctor`
--

CREATE TABLE `operator_doctor` (
  `identification` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `hospital` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `artlicense` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `artlicenseDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `operator_experience`
--

CREATE TABLE `operator_experience` (
  `identification` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `syllabus` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `syllabusHour` int(8) NOT NULL,
  `note` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `operator_safetyofficer`
--

CREATE TABLE `operator_safetyofficer` (
  `identification` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `registrationNumber` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`permit`,`identification`);

--
-- Indexes for table `operator_doctor`
--
ALTER TABLE `operator_doctor`
  ADD PRIMARY KEY (`identification`);

--
-- Indexes for table `operator_experience`
--
ALTER TABLE `operator_experience`
  ADD PRIMARY KEY (`identification`);

--
-- Indexes for table `operator_safetyofficer`
--
ALTER TABLE `operator_safetyofficer`
  ADD PRIMARY KEY (`identification`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
