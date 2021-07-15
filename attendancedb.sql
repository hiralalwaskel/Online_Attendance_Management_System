-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 06:59 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendancedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_table`
--

CREATE TABLE `attendance_table` (
  `rollno` varchar(30) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `semester` int(20) NOT NULL,
  `attendance` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `teacher` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `prasent` varchar(30) NOT NULL,
  `l_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_table`
--

INSERT INTO `attendance_table` (`rollno`, `student_name`, `branch`, `semester`, `attendance`, `subject`, `teacher`, `date`, `prasent`, `l_no`) VALUES
('8', 'ayush ', 'cs ', 6, 'p', 'dm', 'pg', '2018-04-24', 'p', 5);

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `username` varchar(30) NOT NULL,
  `branch` char(30) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`username`, `branch`, `userid`, `password`) VALUES
('Abha Shriwasatwa', 'cs', '231', '626367'),
('rashmi jain', 'it', 'r1', '123');

-- --------------------------------------------------------

--
-- Table structure for table `lecture_table`
--

CREATE TABLE `lecture_table` (
  `subject` varchar(20) NOT NULL,
  `teacher` varchar(20) NOT NULL,
  `day` varchar(10) NOT NULL,
  `lecture` int(10) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `semester` int(10) NOT NULL,
  `user_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=REDUNDANT;

--
-- Dumping data for table `lecture_table`
--

INSERT INTO `lecture_table` (`subject`, `teacher`, `day`, `lecture`, `branch`, `semester`, `user_id`) VALUES
('dm', 'pg', 'mo', 1, 'cs', 6, '1'),
('.net', 'am', 'mo', 2, 'cs', 6, '2'),
('cgma', 'am', 'mo', 3, 'cs', 6, '3'),
('.net', 'am', 'mo', 4, 'cs', 6, '2'),
('cgma', 'am', 'mo', 5, 'cs', 6, '3'),
('cgma', 'am', 'mo', 6, 'cs', 6, '3'),
('dm', 'pg', 'tu', 1, 'cs', 6, '1'),
('dm', 'pg', 'tu', 2, 'cs', 6, '1'),
('cgma', 'am', 'tu', 3, 'cs', 6, '3'),
('project', 'ag', 'tu', 4, 'cs', 6, '4'),
('project', 'ag', 'tu', 5, 'cs', 6, '4'),
('project', 'as', 'tu', 6, 'cs', 6, '5'),
('project', 'as', 'we', 6, 'cs', 6, '5'),
('project', 'ag', 'we', 5, 'cs', 6, '4'),
('project', 'ag', 'we', 4, 'cs', 6, '4'),
('dm', 'pg', 'we', 1, 'cs', 6, '1'),
('.net', 'am', 'we', 2, 'cs', 6, '2'),
('cgma', 'am', 'we', 3, 'cs', 6, '3'),
('dm', 'pg', 'th', 1, 'cs', 6, '1'),
('.net', 'am', 'th', 2, 'cs', 6, '2'),
('cgma', 'am', 'th', 3, 'cs', 6, '3'),
('.net', 'am', 'th', 4, 'cs', 6, '2'),
('.net', 'am', 'th', 5, 'cs', 6, '2'),
('.net', 'am', 'fr', 4, 'cs', 6, '2'),
('dm', 'pg', 'fr', 1, 'cs', 6, '1'),
('cgma', 'am', 'fr', 2, 'cs', 6, '1'),
('cgma', 'am', 'fr', 2, 'cs', 6, '3'),
('cgma', 'am', 'fr', 3, 'cs', 6, '3'),
('dm', 'pg', 'fr', 5, 'cs', 6, '1'),
('dm', 'pg', 'fr', 6, 'cs', 6, '1'),
('cgma', 'am', 'sa', 1, 'cs', 6, '3'),
('.net', 'am', 'sa', 2, 'cs', 6, '2'),
('.net', 'am', 'sa', 3, 'cs', 6, '2'),
('.net', 'am', 'sa', 4, 'cs', 6, '2'),
('pa', '0', 'sa', 5, 'cs', 6, '0'),
('pa', '0', 'sa', 6, 'cs', 6, '0'),
('.net', 'am', 'th', 4, 'cs', 6, '2'),
('dot net', 'am', 'th', 4, 'cs', 6, '2'),
('.net', 'am', 'th', 5, 'cs', 6, '2'),
('net', 'am', 'th', 5, 'cs', 6, '2'),
('dm', 'pg', 'th', 5, 'cs', 6, '1'),
('.net', 'am', 'th', 5, 'cs', 6, '2'),
('dbms', 't1', 'we', 1, 'it', 1, 't1'),
('cn', 'r1', 'mo', 2, 'it', 1, 'r1'),
('bm', 'h', 'tu', 1, 'cs', 1, 't1'),
('bm', 't1', 'tu', 1, 'cs', 1, 't1'),
('bm', 't1', 'tu', 1, 'it', 1, 't1'),
('.net', 'am', 'mo', 2, 'cs', 6, '2');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `rollno` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`rollno`, `name`, `branch`, `semester`, `password`) VALUES
('15', 'hiralal', 'cs', '6', '123456'),
('33', 'sunil', 'cs', '6', '123'),
('59', 'sunil', 'cs', '6', '123'),
('7', 'alok', 'cs', '6', '123'),
('8', 'ayush', 'cs', '6', '123456'),
('s1', 's', 'it', '1', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_table`
--

CREATE TABLE `teacher_table` (
  `name` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_table`
--

INSERT INTO `teacher_table` (`name`, `user_id`, `password`) VALUES
('pg', '1', '123'),
('am', '2', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`branch`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `teacher_table`
--
ALTER TABLE `teacher_table`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
