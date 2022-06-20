-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2016 at 05:29 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `datacopier`
--

-- --------------------------------------------------------

--
-- Table structure for table `webstate`
--

CREATE TABLE IF NOT EXISTS `webstate` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `State_name` varchar(50) DEFAULT NULL,
  `Date_added` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `webstate`
--

INSERT INTO `webstate` (`Id`, `State_name`, `Date_added`) VALUES
(1, 'Andhra Pradesh', '1462572000'),
(2, 'Arunachal Pradesh', '1462572000'),
(3, 'Assam', '1462572000'),
(4, 'Bihar', '1462572000'),
(5, 'Chhattisgarh', '1462572000'),
(6, 'Goa', '1462572000'),
(7, 'Gujarat', '1462572000'),
(8, 'Haryana', '1462572000'),
(9, 'Himachal Pradesh', '1462572000'),
(10, 'Jammu and Kashmir', '1462572000'),
(11, 'Jharkhand', '1462572000'),
(12, 'Karnataka', '1462572000'),
(13, 'Kerala', '1462572000'),
(14, 'Madhya Pradesh', '1462572000'),
(15, 'Maharashtra', '1462572000'),
(16, 'Manipur', '1462572000'),
(17, 'Meghalaya', '1462572000'),
(18, 'Mizoram', '1462572000'),
(19, 'Nagaland', '1462572000'),
(20, 'Odisha', '1462572000'),
(21, 'Punjab', '1462572000'),
(22, 'Rajasthan', '1462572000'),
(23, 'Sikkim', '1462572000'),
(24, 'Tamil Nadu', '1462572000'),
(25, 'Telangana', '1462572000'),
(26, 'Tripura', '1462572000'),
(27, 'Uttar Pradesh', '1462572000'),
(28, 'Uttarakhand', '1462572000'),
(29, 'West Bengal', '1462572000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
