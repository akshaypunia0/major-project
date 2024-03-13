-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2019 at 03:12 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini`
--

-- --------------------------------------------------------

--
-- Table structure for table `exid`
--

DROP TABLE IF EXISTS `exid`;
CREATE TABLE IF NOT EXISTS `exid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exid`
--

INSERT INTO `exid` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `img_path`) VALUES
(1, 'satyamimage/1.png'),
(2, 'satyamimage/domestic.jpg'),
(3, 'satyamimage/sattu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `postjob`
--

DROP TABLE IF EXISTS `postjob`;
CREATE TABLE IF NOT EXISTS `postjob` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `Company_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Vacancy` int(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Exp_min` int(255) NOT NULL,
  `Exp_max` int(255) NOT NULL,
  `Sal_min` int(255) NOT NULL,
  `Sal_max` int(255) NOT NULL,
  `Job_type` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `Mobile_no` int(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Desc_file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postjob`
--

INSERT INTO `postjob` (`id`, `Title`, `Company_name`, `Email`, `Vacancy`, `Qualification`, `Country`, `State`, `Exp_min`, `Exp_max`, `Sal_min`, `Sal_max`, `Job_type`, `Role`, `Mobile_no`, `City`, `Description`, `Desc_file`) VALUES
(1, 'developer', 'sattu.pvt.ltd', 'vshkr@gmail.com', 10, 'graduate', 'Algeria', 'maharastra', 13, 15, 2, 3, 'internship', 'developer', 2147483647, 'kandivali', ' vbvbxZXcfagf', 'postjob/02.net.docx'),
(2, 'marketing', 'sattu.pvt.ltd', 'vshkr@gmail.com', 10, 'graduate', 'Afghanistan', 'maharastra', 6, 12, 2, 3, 'full time', 'developer', 2147483647, 'kandivali', 'hello ', 'postjob/01.net.docx'),
(3, 'engineer', 'sattu.pvt.ltd', 'vshkr@gmail.com', 10, 'graduate', 'Angola', 'maharastra', 1, 10, 2, 3, 'part time', 'developer', 2147483647, 'kandivali', 'bcscshc', 'postjob/04.net.docx'),
(4, 'marketing', 'sattu.pvt.ltd', 'vshkr@gmail.com', 10, 'graduate', 'Austria', 'maharastra', 6, 11, 2, 3, 'work from home', 'developer', 2147483647, 'kandivali', 'bnmvbh', 'postjob/0shreeproduct.docx');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

DROP TABLE IF EXISTS `resume`;
CREATE TABLE IF NOT EXISTS `resume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Email-id` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Mobile_no` int(10) NOT NULL,
  `Edu_basic` varchar(255) NOT NULL,
  `Work_exp_y` varchar(255) NOT NULL,
  `Work_exp_m` varchar(255) NOT NULL,
  `sal_lakhs` int(20) NOT NULL,
  `sal_thousand` int(20) NOT NULL,
  `Keyskills` varchar(255) NOT NULL,
  `Resume` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `Title`, `Name`, `Gender`, `Email-id`, `Country`, `State`, `City`, `Mobile_no`, `Edu_basic`, `Work_exp_y`, `Work_exp_m`, `sal_lakhs`, `sal_thousand`, `Keyskills`, `Resume`, `Photo`) VALUES
(1, '', 'HKR', 'Male', 'vshkr@gmail.com', 'Azerbaijan', 'maharastra', 'kandivali', 2147483647, 'msc fail', '2 Years', '2 Months', 2, 5, 'dvffbvvfbb', 'resume/2insertupdatedelete.docx', 'photo/21.png'),
(4, '', 'XsploIT', 'Male', 'vshkr@gmail.com', 'Algeria', 'maharastra', 'mumbai', 2147483647, 'msc fail', '3 Years', '3 Months', 8, 35, 'gghggsg', 'resume/54.net.docx', 'photo/51.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
