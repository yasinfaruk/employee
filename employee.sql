-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2015 at 06:45 AM
-- Server version: 5.6.25-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.3

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_employee`
--

INSERT INTO `add_employee` (`id`, `role_employee`, `e_id`, `name`, `age`, `department`, `salary`, `image`, `email`, `password`) VALUES
(1, 'admin', 'ct001', 'yasinfaruk', '28', 'IT', '543', 'jpg.jpg', 'rahim@mail.com', '1234'),
(2, 'employee', 'ct002', 'faruk', '29', 'Student', '343', 'faruk.JPG', 'yasin.faruk8585@gmai', '1234'),
(3, 'admin', 'ct101', 'sujan', '22', 'IT', '124', 'happy.png', 'sujan@mail.com', '1234'),
(4, 'Admin', 'CT004', 'mohammad faruk', '28', 'HR', '1313', '11401054_10340712532', 'yasinomarfaruk@gmail', '1234'),
(5, 'Employee', 'CT005', 'faruk', '44', 'Mentor', '1313', '2072-665335-Category', 'rahim@mail.com', '2');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_time_in`
--

INSERT INTO `employee_time_in` (`id`, `e_id`, `date_value`, `time_in`, `time_out`, `role_time`, `reason`) VALUES
(1, 'ct001', '2015-10-18', '13:49', '', 'timeIn', 'Sorry for today.'),
(2, 'ct001', '2015-10-18', '13:49', '', 'timeOut', 'Sorry'),
(3, 'ct002', '2015-10-18', '14:1', '', 'timeIn', 'Sick'),
(4, 'ct002', '2015-10-18', '14:2', '', 'timeOut', 'Today I am sick'),
(5, 'ct002', '2015-10-18', '14:14', '', 'timeIn', 'Sick for 3 days'),
(6, 'ct002', '2015-10-18', '14:16', '', 'timeIn', 'sick for 3 days'),
(7, 'ct002', '2015-10-18', '14:17', '', 'timeIn', 'busy with something'),
(8, 'ct101', '2015-10-18', '19:4', '', 'Time In', ''),
(9, 'ct101', '2015-10-18', '19:6', '', 'Time In', ''),
(10, 'ct101', '2015-10-18', '19:14', '', 'Time In', '');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employee_time_in`
--
ALTER TABLE `employee_time_in`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
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
