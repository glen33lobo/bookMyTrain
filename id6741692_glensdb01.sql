-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2019 at 09:03 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6741692_glensdb01`
--

-- --------------------------------------------------------

--
-- Table structure for table `platform_details`
--

CREATE TABLE `platform_details` (
  `platform_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `destination` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `platform_details`
--

INSERT INTO `platform_details` (`platform_id`, `source`, `destination`) VALUES
('P01', 'mangalore', 'mysore'),
('P02', 'mysore', 'bangalore'),
('P03', 'bangalore', 'shivamogga'),
('P04', 'shivamogga', 'mangalore');

-- --------------------------------------------------------

--
-- Table structure for table `seat_details`
--

CREATE TABLE `seat_details` (
  `transaction_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gen` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `seat_no` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seat_details`
--

INSERT INTO `seat_details` (`transaction_id`, `name`, `age`, `gen`, `seat_no`) VALUES
(3, 'hbjh', 12, 'bdfe', 's_05'),
(10, 'glen', 23, 'M', 's_04'),
(11, 'guru', 23, 'M', 's_23'),
(11, 'guru', 23, 'M', 's_22'),
(11, 'guru', 23, 'M', 's_21'),
(36, 'njjnj', 23, 'F', 's_01'),
(38, 'njj', 12, 'M', 's_12'),
(38, 'njj', 12, 'M', 's_11'),
(38, 'njj', 12, 'M', 's_23'),
(39, 'Archana', 16, 'F', 's_04'),
(40, 'archana', 20, 'F', 's_10'),
(41, 'archana', 20, 'F', 's_10'),
(42, 'guru', 21, 'M', 's_01'),
(42, 'glen', 21, 'M', 's_02'),
(43, 'glen', 21, 'M', 's_01'),
(43, 'glen', 21, 'M', 's_02');

-- --------------------------------------------------------

--
-- Table structure for table `time_details`
--

CREATE TABLE `time_details` (
  `time_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `train_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `platform_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `source_time` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `destination_time` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `direction` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `time_details`
--

INSERT INTO `time_details` (`time_id`, `train_id`, `platform_id`, `source_time`, `destination_time`, `direction`) VALUES
('TM01', 'T01', 'P01', '06:00', '07:00', 1),
('TM02', 'T01', 'P02', '08:00', '09:00', 1),
('TM03', 'T01', 'P03', '10:00', '11:00', 1),
('TM04', 'T01', 'P04', '12:00', '13:00', 1),
('TM05', 'T01', 'P04', '14:00', '15:00', -1),
('TM06', 'T01', 'P03', '16:00', '17:00', -1),
('TM07', 'T01', 'P02', '18:00', '19:00', -1),
('TM08', 'T01', 'P01', '20:00', '21:00', -1),
('TM09', 'T02', 'P02', '06:00', '07:00', -1),
('TM10', 'T04', 'P03', '08:00', '09:00', -1),
('TM11', 'T02', 'P04', '10:00', '11:00', -1),
('TM12', 'T04', 'P01', '12:00', '13:00', -1),
('TM13', 'T04', 'P01', '14:00', '15:00', 1),
('TM14', 'T02', 'P04', '16:00', '17:00', 1),
('TM15', 'T04', 'P03', '18:00', '19:00', 1),
('TM16', 'T02', 'P02', '20:00', '21:00', 1),
('TM17', 'T03', 'P03', '06:00', '07:00', 1),
('TM18', 'T03', 'P04', '08:00', '09:00', 1),
('TM19', 'T03', 'P01', '10:00', '11:00', 1),
('TM20', 'T03', 'P02', '12:00', '13:00', 1),
('TM21', 'T03', 'P02', '14:00', '15:00', -1),
('TM22', 'T03', 'P01', '16:00', '17:00', -1),
('TM23', 'T03', 'P04', '18:00', '19:00', -1),
('TM24', 'T03', 'P03', '20:00', '21:00', -1),
('TM25', 'T04', 'P04', '06:00', '07:00', -1),
('TM26', 'T02', 'P01', '08:00', '09:00', -1),
('TM27', 'T04', 'P02', '10:00', '11:00', -1),
('TM28', 'T02', 'P03', '12:00', '13:00', -1),
('TM29', 'T02', 'P03', '14:00', '15:00', 1),
('TM30', 'T04', 'P02', '16:00', '17:00', 1),
('TM31', 'T02', 'P01', '18:00', '19:00', 1),
('TM32', 'T04', 'P04', '20:00', '21:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `train_details`
--

CREATE TABLE `train_details` (
  `train_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `train_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `train_details`
--

INSERT INTO `train_details` (`train_id`, `train_name`) VALUES
('T01', 'mangalore express'),
('T02', 'mysore express'),
('T03', 'bangalore express'),
('T04', 'shivamogga express');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `transaction_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `seat_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `travel_insurance` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`transaction_id`, `user_id`, `time_id`, `date`, `seat_type`, `travel_insurance`) VALUES
(1, 1, 'TM01', '2019-11-12', 'sl', 'yes'),
(2, 1, 'TM01', '2019-11-12', 'ac', 'yes'),
(3, 1, 'TM01', '2019-11-30', 'SL', 'yes'),
(4, 1, 'TM01', '2019-12-15', 'SL', 'yes'),
(5, 1, 'TM01', '2019-12-15', 'SL', 'yes'),
(6, 1, 'TM01', '2019-12-15', 'SL', 'yes'),
(7, 1, 'TM01', '2019-12-15', 'SL', 'yes'),
(8, 1, 'TM01', '2019-12-15', 'SL', 'yes'),
(9, 1, 'TM01', '2019-11-30', 'SL', 'yes'),
(10, 1, 'TM01', '2019-11-30', 'SL', 'yes'),
(11, 1, 'TM01', '2019-11-30', 'SL', 'yes'),
(12, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(13, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(14, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(15, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(16, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(17, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(18, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(19, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(20, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(21, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(22, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(23, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(24, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(25, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(26, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(27, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(28, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(29, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(30, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(31, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(32, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(33, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(34, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(35, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(36, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(37, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(38, 1, 'TM17', '2019-11-29', 'SL', 'yes'),
(39, 8, 'TM12', '2019-11-30', 'SL', 'yes'),
(40, 8, 'TM22', '2019-11-29', 'SL', 'yes'),
(41, 8, 'TM22', '2019-11-29', 'SL', 'yes'),
(42, 1, 'TM25', '2019-11-30', 'SL', 'yes'),
(43, 1, 'TM05', '2019-11-29', 'SL', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `User_Details`
--

CREATE TABLE `User_Details` (
  `u_id` int(11) NOT NULL,
  `user_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'English',
  `nationality` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `security_question` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `security_answer` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `User_Details`
--

INSERT INTO `User_Details` (`u_id`, `user_name`, `password`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `gender`, `language`, `nationality`, `security_question`, `security_answer`) VALUES
(1, 'user1', 'user1', 'user', 'name', '1', '1998-01-01', 'male', 'English', 'indian', 'how are u', 'im fine'),
(2, 'user2', 'user2', 'tyu', 'tyu', 'yuu', '2005-01-01', 'male', 'user2', 'India', 'What is your petname?', 'dunno'),
(3, 'user3', 'user3', 'user', 'name ', '3', '1997-10-27', 'male', 'english', 'India', 'What is your petname?', 'qwerty'),
(4, 'user4', 'user4', 'user', 'name ', '4', '1993-04-21', 'male', 'english', 'India', 'What is your petname?', 'uytre'),
(5, 'usern', 'user', 'yh', 'y', 'hy', '2019-12-26', 'female', 'english', 'India', 'What is your petname?', 'hhy'),
(6, 'user22``', 'uuu', 'ygy', 'gyg', 'yg', '2018-10-29', 'female', 'english', 'India', 'What is your petname?', 'ygygy'),
(7, 'wer', 'qwe', 'rtty', 'yt', 't5', '2018-12-30', 'male', 'english', 'India', 'What is your petname?', 'qwer'),
(8, 'archana', '1234', 'Archana', 'none', 'K L', '2019-10-11', 'female', 'english', 'India', 'What is your petname?', 'glen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `platform_details`
--
ALTER TABLE `platform_details`
  ADD PRIMARY KEY (`platform_id`);

--
-- Indexes for table `seat_details`
--
ALTER TABLE `seat_details`
  ADD KEY `seat_details_ibfk_1` (`transaction_id`);

--
-- Indexes for table `time_details`
--
ALTER TABLE `time_details`
  ADD PRIMARY KEY (`time_id`),
  ADD KEY `train_id` (`train_id`),
  ADD KEY `platform_id` (`platform_id`);

--
-- Indexes for table `train_details`
--
ALTER TABLE `train_details`
  ADD PRIMARY KEY (`train_id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `transaction_details_ibfk_1` (`user_id`),
  ADD KEY `transaction_details_ibfk_2` (`time_id`);

--
-- Indexes for table `User_Details`
--
ALTER TABLE `User_Details`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `User_Details`
--
ALTER TABLE `User_Details`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `seat_details`
--
ALTER TABLE `seat_details`
  ADD CONSTRAINT `seat_details_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transaction_details` (`transaction_id`);

--
-- Constraints for table `time_details`
--
ALTER TABLE `time_details`
  ADD CONSTRAINT `time_details_ibfk_1` FOREIGN KEY (`train_id`) REFERENCES `train_details` (`train_id`),
  ADD CONSTRAINT `time_details_ibfk_2` FOREIGN KEY (`platform_id`) REFERENCES `platform_details` (`platform_id`);

--
-- Constraints for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `transaction_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User_Details` (`u_id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `transaction_details_ibfk_2` FOREIGN KEY (`time_id`) REFERENCES `time_details` (`time_id`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
