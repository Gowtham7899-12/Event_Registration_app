-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2025 at 08:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samarpan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dancing`
--

CREATE TABLE `dancing` (
  `dance_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `semester` int(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `phonenumber` bigint(20) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dancing`
--

INSERT INTO `dancing` (`dance_id`, `name`, `email`, `usn`, `semester`, `branch`, `section`, `type`, `phonenumber`, `datetime`) VALUES
(1, 'Ravi', 'ravi@ravi.com', '1CK21CS065', 5, '', 'B', 'Duo', 6899345726, '2024-05-10 13:19:38'),
(2, 'Raghu', 'raghu@gmail.com', '1CK21CS067', 5, 'EC', 'B', 'Squad', 7898987425, '2024-05-11 16:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `drawing`
--

CREATE TABLE `drawing` (
  `drawing_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usn` varchar(50) NOT NULL,
  `semester` int(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `phonenumber` bigint(20) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drawing`
--

INSERT INTO `drawing` (`drawing_id`, `name`, `email`, `usn`, `semester`, `branch`, `section`, `phonenumber`, `datetime`) VALUES
(1, 'Raju', 'raju@gmail.com', '1CK21CS034', 3, '', 'C', 4567890234, '2024-05-10 12:53:25'),
(2, 'Dharma', 'dharma@dh.com', '1CK21CS007', 4, '', 'D', 2345678901, '2024-05-10 12:55:40'),
(3, 'ROCK', 'rock@rock.com', '1CK21CS043', 5, 'CIVIL', 'C', 34625673573, '2024-05-11 16:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(10) NOT NULL,
  `event_title` varchar(100) NOT NULL,
  `event_coordinator` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_coordinator`, `datetime`) VALUES
(1, 'Quiz', 'Ramesh L', '2024-05-09 15:45:36'),
(2, 'Drawing', 'Ranjith T', '2024-05-09 15:46:11'),
(3, 'singing', 'Latha K L', '2024-05-09 15:47:00'),
(4, 'Sports', 'Chandan S N', '2024-05-09 15:47:47'),
(5, 'Dancing', 'Varsha L R', '2024-05-09 16:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usn` varchar(50) NOT NULL,
  `semester` int(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `phonenumber` bigint(20) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `name`, `email`, `usn`, `semester`, `branch`, `section`, `phonenumber`, `datetime`) VALUES
(1, 'Ram', 'ram@ram.com', '1CK21CS001', 4, '', 'A', 3456790231, '2024-05-10 12:36:56'),
(2, 'Vinod', 'vinod@vinod.com', '1CK21CS023', 8, '', 'B', 3562946202, '2024-05-10 12:48:47'),
(3, 'Rock', 'rock@rock.com', '1CK21CS043', 4, 'AIML', 'A', 23452462456, '2024-05-11 16:37:21');

-- --------------------------------------------------------

--
-- Table structure for table `singing`
--

CREATE TABLE `singing` (
  `sing_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `semester` int(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `phonenumber` bigint(20) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `singing`
--

INSERT INTO `singing` (`sing_id`, `name`, `email`, `usn`, `semester`, `branch`, `section`, `type`, `phonenumber`, `datetime`) VALUES
(1, 'Dinesh', 'dinesh@gmail.com', '1AI21CS012', 5, '', 'C', 'Solo', 3456789032, '2024-05-10 13:08:19'),
(2, 'Tilak', 'tilak@tilak.com', '1CK21CS012', 5, 'CIVIL', 'A', 'Solo', 35768569, '2024-05-11 16:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `sport_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `semester` int(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `sport_name` varchar(50) NOT NULL,
  `phonenumber` bigint(20) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sport_id`, `name`, `email`, `usn`, `semester`, `branch`, `section`, `sport_name`, `phonenumber`, `datetime`) VALUES
(1, 'Gowtham', 'gwtham@gmail.com', '1CK21CS032', 5, '', 'A', 'Cricket', 7899341638, '2024-05-10 13:14:45'),
(2, 'Rohit', 'rohit@gmail.com', '1CK21CS023', 5, 'CSE', 'B', 'Throw ball', 674683573, '2024-05-11 16:40:14');

-- --------------------------------------------------------

--
-- Table structure for table `winners`
--

CREATE TABLE `winners` (
  `winner_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `semester` int(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `event` varchar(50) NOT NULL,
  `position` varchar(10) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winners`
--

INSERT INTO `winners` (`winner_id`, `name`, `usn`, `semester`, `branch`, `event`, `position`, `datetime`) VALUES
(1, 'Raju', '1CK21CS012', 5, 'CSE', 'Drawing', '2nd', '2024-05-12 13:57:04'),
(4, 'Gagan', '1CK21CS045', 5, 'CIVIL', 'Sports', '1st', '2024-05-12 14:03:57'),
(5, 'Rohit', '1CK21CS002', 5, 'CSE', 'Sports', '1st', '2024-05-12 14:29:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dancing`
--
ALTER TABLE `dancing`
  ADD PRIMARY KEY (`dance_id`);

--
-- Indexes for table `drawing`
--
ALTER TABLE `drawing`
  ADD PRIMARY KEY (`drawing_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `singing`
--
ALTER TABLE `singing`
  ADD PRIMARY KEY (`sing_id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`sport_id`);

--
-- Indexes for table `winners`
--
ALTER TABLE `winners`
  ADD PRIMARY KEY (`winner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dancing`
--
ALTER TABLE `dancing`
  MODIFY `dance_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drawing`
--
ALTER TABLE `drawing`
  MODIFY `drawing_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `singing`
--
ALTER TABLE `singing`
  MODIFY `sing_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `sport_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `winners`
--
ALTER TABLE `winners`
  MODIFY `winner_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
