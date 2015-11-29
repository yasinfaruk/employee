-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2015 at 06:11 AM
-- Server version: 5.6.27-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_employee`
--

CREATE TABLE IF NOT EXISTS `add_employee` (
`id` int(11) NOT NULL,
  `role_employee` varchar(20) NOT NULL,
  `e_id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` varchar(3) NOT NULL,
  `department` varchar(10) NOT NULL,
  `salary` varchar(5) NOT NULL,
  `image` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_employee`
--

INSERT INTO `add_employee` (`id`, `role_employee`, `e_id`, `name`, `age`, `department`, `salary`, `image`, `email`, `password`) VALUES
(1, 'Admin', 'CT001', 'Rajesh Ghosh', '0', 'IT', '99999', '', 'rajesh@mail.com', '12345'),
(2, 'Employee', 'CT002', 'Karim', '25', 'IT', '2000', '', 'karim@mail.com', '1234'),
(3, 'Employee', 'CT003', 'FARUK', '0', 'IT', '99999', '', 'faruk@mail.com', '1234'),
(4, 'Employee', 'CT004', 'mohammad faruk', '22', 'IT', '99999', '', 'mfaruk@mail.com', '1234'),
(5, 'Employee', 'CT005', 'Rahim', '30', 'Student', '2000', '', 'rahim@mail.com', '12345'),
(6, 'Employee', 'CT006', 'Rakib', '29', 'Mentor', '200', '394839.jpg', 'rakib@mail.com', '1234'),
(7, 'Employee', 'CT007', 'Robi', '22', 'IT', '100', '', 'robi@mail.com', '12345'),
(8, 'Employee', 'CT008', 'Sayema', '22', 'IT', '20', '', 'sayema@mail.com', '11111'),
(9, 'Employee', 'CT009', 'Sabina', '29', 'IT', '200', '', 'sabina@mail.com', '22222'),
(10, 'Employee', 'CT0010', 'Salma', '33', 'IT', '200', '', 'salma@mail.com', '33333');

-- --------------------------------------------------------

--
-- Table structure for table `employee_time_in`
--

CREATE TABLE IF NOT EXISTS `employee_time_in` (
`id` int(11) NOT NULL,
  `e_id` varchar(10) NOT NULL,
  `date_value` varchar(15) NOT NULL,
  `time_in` varchar(15) NOT NULL,
  `time_out` varchar(15) NOT NULL,
  `role_time` varchar(10) NOT NULL,
  `reason` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_time_in`
--

INSERT INTO `employee_time_in` (`id`, `e_id`, `date_value`, `time_in`, `time_out`, `role_time`, `reason`) VALUES
(1, 'CT001', '2015-10-15', '13:49', '', 'timeIn', 'Sorry for today.'),
(2, 'CT002', '2015-10-18', '9.00', '4.00', 'timeOut', 'Sorry'),
(3, 'CT001', '2015-10-17', '14:1', '', 'timeIn', 'Sick'),
(4, 'CT001', '2015-10-15', '14:2', '', 'timeOut', 'Today I am sick'),
(5, 'CT002', '2015-10-17', '9.00', '3.00', 'timeIn', 'Sick for 3 days'),
(6, 'CT002', '2015-10-16', '9.00', '2.50', 'timeIn', 'sick for 3 days'),
(7, 'CT001', '2015-10-16', '14:17', '', 'timeIn', 'busy with something'),
(8, 'CT003', '2015-10-15', '19:4', '', 'Time In', ''),
(9, 'CT003', '2015-10-16', '19:6', '', 'Time In', ''),
(10, 'CT003', '2015-10-17', '19:14', '', 'Time In', ''),
(11, '', '2015-10-28', '6:57', '6:57', 'Time In', 'sorry for today'),
(12, '5', '2015-10-28', '7:12', '7:12', 'Time In', 'sick'),
(13, 'CT0010', '2015-10-23', '8:35', '8:38', 'Time In', 'Official work'),
(14, 'CT0010', '2015-10-21', '8:35', '8:38', 'Time In', 'Official work'),
(15, 'CT0010', '2015-10-20', '8:36', '8:38', 'Time In', 'Official work'),
(16, 'CT0010', '2015-10-22', '8:36', '8:38', 'Time In', 'Official work'),
(17, 'CT0010', '2015-10-30', '8:36', '8:38', 'Time In', 'Official work'),
(18, 'CT0010', '2015-10-24', '8:36', '8:38', 'Time In', 'Official work'),
(19, 'CT0010', '2015-10-25', '8:36', '8:38', 'Time In', 'Official work'),
(20, 'CT0010', '2015-10-27', '8:37', '8:38', 'Time In', 'Official work'),
(21, 'CT0010', '2015-10-28', '8:37', '8:38', 'Time In', 'Official work'),
(22, 'CT0010', '2015-10-29', '8:37', '8:38', 'Time In', 'Official work'),
(23, 'CT0010', '2015-10-26', '8:38', '8:38', 'Time In', 'Official work');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE IF NOT EXISTS `time_table` (
`id` int(11) NOT NULL,
  `e-id` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `t-in` varchar(10) NOT NULL,
  `t-out` varchar(10) NOT NULL,
  `late` varchar(10) NOT NULL,
  `early-leave` varchar(10) NOT NULL,
  `explanation` varchar(50) NOT NULL,
  `present` varchar(5) NOT NULL,
  `absent` varchar(5) NOT NULL,
  `leave` varchar(5) NOT NULL,
  `vacation` varchar(5) NOT NULL,
  `t-time` varchar(5) NOT NULL,
  `overtime` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `working_hour`
--

CREATE TABLE IF NOT EXISTS `working_hour` (
`id` int(11) NOT NULL,
  `e-id` varchar(10) NOT NULL,
  `t-present` varchar(5) NOT NULL,
  `t-absent` varchar(5) NOT NULL,
  `t-leave` varchar(5) NOT NULL,
  `t-hour` varchar(5) NOT NULL,
  `t-overtime` varchar(5) NOT NULL,
  `salary` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_employee`
--
ALTER TABLE `add_employee`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_time_in`
--
ALTER TABLE `employee_time_in`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `working_hour`
--
ALTER TABLE `working_hour`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_employee`
--
ALTER TABLE `add_employee`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `employee_time_in`
--
ALTER TABLE `employee_time_in`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `working_hour`
--
ALTER TABLE `working_hour`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
