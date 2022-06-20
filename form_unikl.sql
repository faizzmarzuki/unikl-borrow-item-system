-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2019 at 05:44 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form_unikl`
--

-- --------------------------------------------------------

--
-- Table structure for table `formv2`
--

CREATE TABLE `formv2` (
  `id` int(11) NOT NULL,
  `IDN` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `to` varchar(250) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Other` varchar(50) NOT NULL,
  `Model1` varchar(50) NOT NULL,
  `Serial_num1` varchar(50) NOT NULL,
  `Model2` varchar(50) NOT NULL,
  `Serial_num2` varchar(50) NOT NULL,
  `Model3` varchar(50) NOT NULL,
  `Serial_num3` varchar(50) NOT NULL,
  `Model4` varchar(50) NOT NULL,
  `Serial_num4` varchar(50) NOT NULL,
  `Justify` varchar(50) NOT NULL,
  `Date_Start` date NOT NULL,
  `Date_End` date NOT NULL,
  `Review` varchar(30) NOT NULL,
  `sName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formv2`
--

INSERT INTO `formv2` (`id`, `IDN`, `Date`, `Name`, `Position`, `tel`, `to`, `Type`, `Other`, `Model1`, `Serial_num1`, `Model2`, `Serial_num2`, `Model3`, `Serial_num3`, `Model4`, `Serial_num4`, `Justify`, `Date_Start`, `Date_End`, `Review`, `sName`) VALUES
(1, 345, '2019-10-05', 'Aina Najwa', 'TEST', '019-3456778', '', 'Projector,', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 'Approved', 'AINA'),
(3, 345, '2019-09-21', 'Lily', 'TEST', '019-3456778', '', 'Dekstop,', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `form_id`
--

CREATE TABLE `form_id` (
  `id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `IC` varchar(50) NOT NULL,
  `Contact_no` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Other` varchar(250) NOT NULL,
  `Justify` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form_service`
--

CREATE TABLE `form_service` (
  `Call_date` date NOT NULL,
  `Call_time` time NOT NULL,
  `Response_date` date NOT NULL,
  `Response_time` time NOT NULL,
  `JobC_date` date NOT NULL,
  `JobC_time` time NOT NULL,
  `Name` varchar(50) NOT NULL,
  `ID` int(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `Equipm_machineT` varchar(50) NOT NULL,
  `Serial_no` varchar(50) NOT NULL,
  `ProblemT` varchar(50) NOT NULL,
  `Problem_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_service`
--

INSERT INTO `form_service` (`Call_date`, `Call_time`, `Response_date`, `Response_time`, `JobC_date`, `JobC_time`, `Name`, `ID`, `Department`, `Tel`, `Equipm_machineT`, `Serial_no`, `ProblemT`, `Problem_desc`) VALUES
('2019-08-17', '00:20:19', '2019-08-27', '00:20:19', '2019-08-23', '00:20:19', 'Aina Najwa', 0, 'IT Unit', '018-9138405', 'PC', '123', 'Network,Email,', 'Nothing'),
('2019-08-22', '00:20:19', '2019-08-21', '00:20:19', '2019-08-23', '00:20:19', 'fahmi', 2017263347, 'hr unit', '013-7488211', 'microphone', '123', 'Network,Email,Others,', 'Nothing'),
('2019-08-22', '00:20:19', '2019-08-22', '00:20:19', '2019-08-22', '00:20:19', 'Sakina', 2017243378, 'HR unit', '019-7572557', 'microphone', '123', 'Software,Network,', 'NOTHING');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1234, 'admin', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formv2`
--
ALTER TABLE `formv2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formv2`
--
ALTER TABLE `formv2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
