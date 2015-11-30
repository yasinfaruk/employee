-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2015 at 08:59 PM
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
  `total_leave` int(3) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_employee`
--

INSERT INTO `add_employee` (`id`, `role_employee`, `e_id`, `name`, `age`, `department`, `salary`, `image`, `total_leave`, `email`, `password`) VALUES
(1, 'Admin', 'CT001', 'Rajesh Ghosh', '20', 'IT', '99999', 'beautiful_Wallpaper_', 11, 'rajesh@mail.com', '12345'),
(2, 'Employee', 'CT002', 'Karim', '25', 'IT', '2000', '', 30, 'karim@mail.com', '1234'),
(3, 'Admin', 'CT003', 'FARUK', '0', 'Student', '99999', '', 30, 'faruk@mail.com', '1234'),
(4, 'Admin', 'CT004', 'mohammad faruk', '22', 'Student', '99999', '', 0, 'mfaruk@mail.com', '1234'),
(5, 'Employee', 'CT005', 'Rahim', '30', 'Student', '2000', '', 0, 'rahim@mail.com', '12345'),
(6, 'Employee', 'CT006', 'Rakib', '29', 'Mentor', '200', '394839.jpg', 29, 'rakib@mail.com', '1234'),
(7, 'Admin', 'CT007', 'Robi', '22', 'Mentor', '100', '', 0, 'robi@mail.com', '12345'),
(8, 'Admin', 'CT008', 'Sayema', '22', 'Mentor', '20', '', 0, 'sayema@mail.com', '11111'),
(9, 'Employee', 'CT009', 'Sabina', '29', 'IT', '200', '', 0, 'sabina@mail.com', '22222'),
(10, 'Employee', 'CT0010', 'Salma', '33', 'IT', '200', '', 0, 'salma@mail.com', '33333'),
(11, 'Employee', 'CT0011', 'Sajal', '22', 'Student', '400', 'beautiful-boy-2.jpg', 30, 'sajal@mail.com', '1234'),
(12, 'Employee', 'CT0012', 'Sajal', '22', 'Student', '400', 'beautiful-boy-2.jpg', 30, 'sajal@mail.com', '1234'),
(13, 'Employee', 'CT0013', 'Sajal', '22', 'Student', '400', 'beautiful-boy-2.jpg', 30, 'sajal@mail.com', '1234'),
(14, 'Employee', 'CT0014', 'Amin', '22', 'Student', '400', 'beautiful-boy-2.jpg', 28, 'sajal@mail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `employee_time_in`
--

CREATE TABLE IF NOT EXISTS `employee_time_in` (
`id` int(11) NOT NULL,
  `e_id` varchar(10) NOT NULL,
  `date_value` date NOT NULL,
  `time_in` varchar(15) NOT NULL,
  `time_out` varchar(15) NOT NULL,
  `late_coming` varchar(200) NOT NULL,
  `early_going` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_time_in`
--

INSERT INTO `employee_time_in` (`id`, `e_id`, `date_value`, `time_in`, `time_out`, `late_coming`, `early_going`) VALUES
(1, '', '2015-11-29', '20:52', '', 'this is night', '0'),
(2, '', '2015-11-29', '20:54', '', 'Fever', '0'),
(3, 'CT002', '2015-11-30', '7:23', '9:17', '  official leave', '0'),
(4, 'CT006', '2015-11-30', '7:48', '7:48', 'busy\r\n                        ', '0'),
(5, 'CT006', '2015-11-30', '7:48', '7:48', 'busy\r\n                        ', '0'),
(6, 'CT004', '2015-11-30', '9:4', '9:12', 'official work\r\n                        ', '0'),
(7, 'CT004', '2015-11-30', '9:4', '9:12', 'official work\r\n                        ', '0'),
(8, 'CT004', '2015-11-30', '9:4', '9:12', 'official work\r\n                        ', '0'),
(9, 'CT004', '2015-11-30', '9:4', '9:12', 'official work\r\n                        ', '0'),
(10, 'CT004', '2015-11-30', '9:4', '9:12', 'official work\r\n                        ', '0'),
(11, 'CT004', '2015-11-30', '9:4', '9:12', 'official work\r\n                        ', '0'),
(12, 'CT002', '2015-11-30', '9:16', '9:17', '  official leave', '0'),
(13, 'CT0017', '2015-11-26', '10:25', '15:27', '            outside of office            ', ' family function '),
(14, 'CT0017', '2015-11-25', '9:31', '15:32', '                        official leave', '                   official work     '),
(15, 'CT0011', '2015-11-30', '15:31', '15:32', '                        official leave', '                   official work     '),
(16, 'CT009', '2015-11-30', '15:34', '', '                        fever ', ''),
(17, 'CT009', '2015-11-30', '15:34', '', '                        fever ', ''),
(18, 'CT008', '2015-11-30', '10:36', '15:37', '                        sick', '            office leave            '),
(19, 'CT007', '2015-11-30', '10:45', '15:45', '                        Meeting', '                        official meeting'),
(20, 'CT005', '2015-11-30', '10.00', '15:47', '                        official seeting', '                        official work'),
(21, 'CT003', '2015-11-30', '9.00', '15:51', '                    aaaaaaaaaaaaaaaa    ', '                        aaaaa'),
(22, 'CT001', '2015-11-30', '19:13', '19:59', '                        busy', '                        '),
(23, 'CT001', '2015-11-30', '19:13', '19:59', '                        busy', '                        '),
(24, 'CT001', '2015-11-30', '19:13', '19:59', '                        busy', '                        '),
(25, 'CT005', '2015-11-30', '20:5', '', '                        sick', '');

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
  `e_id` varchar(10) NOT NULL,
  `date_value` date NOT NULL,
  `total_hour` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `working_hour`
--

INSERT INTO `working_hour` (`id`, `e_id`, `date_value`, `total_hour`) VALUES
(1, 'CT004', '2015-11-25', 0),
(2, 'CT002', '2015-11-30', 0),
(3, 'CT0017', '2015-11-26', 5),
(4, 'CT0011', '2015-11-30', 0),
(5, 'CT008', '2015-11-30', 5),
(6, 'CT007', '2015-11-30', 15),
(7, 'CT005', '2015-11-30', 0),
(8, 'CT003', '2015-11-30', 15),
(9, 'CT003', '2015-11-30', 6),
(10, 'CT001', '2015-11-30', 0);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `employee_time_in`
--
ALTER TABLE `employee_time_in`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `working_hour`
--
ALTER TABLE `working_hour`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
