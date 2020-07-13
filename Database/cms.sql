-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2020 at 09:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `bg` varchar(5) NOT NULL,
  `dept` varchar(15) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `city` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `profile_id`, `name`, `sex`, `bg`, `dept`, `phno`, `city`, `address`) VALUES
(1, 2, 'deepa', 'female', 'B+ve', 'Csc', '6987987', 'cbe', 'singanallur');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `designation` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `designation`, `username`, `password`) VALUES
(1, 'student', '16mss001', 'ram'),
(2, 'faculty', 'deepa', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `bg` varchar(5) NOT NULL,
  `fn` varchar(10) NOT NULL,
  `dept` varchar(15) NOT NULL,
  `course` varchar(10) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `city` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `profile_id`, `name`, `sex`, `dob`, `bg`, `fn`, `dept`, `course`, `phno`, `city`, `address`) VALUES
(1, 1, 'ram', 'male', '24/05/1999', 'B+ve', 'manickam', 'csc', 'SS', '801928122', 'cbe', 'singanallur');

-- --------------------------------------------------------

--
-- Table structure for table `stu_attendance`
--

CREATE TABLE `stu_attendance` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `totw` float NOT NULL,
  `absent` float NOT NULL,
  `percent` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu_attendance`
--

INSERT INTO `stu_attendance` (`id`, `student_id`, `totw`, `absent`, `percent`) VALUES
(1, 1, 97, 3, 96.9072);

-- --------------------------------------------------------

--
-- Table structure for table `stu_marksheet`
--

CREATE TABLE `stu_marksheet` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `m1` float NOT NULL,
  `m2` float NOT NULL,
  `m3` float NOT NULL,
  `m4` float NOT NULL,
  `m5` float NOT NULL,
  `total` float NOT NULL,
  `avg` float NOT NULL,
  `grade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu_marksheet`
--

INSERT INTO `stu_marksheet` (`id`, `student_id`, `m1`, `m2`, `m3`, `m4`, `m5`, `total`, `avg`, `grade`) VALUES
(1, 1, 85, 96, 96, 96, 96, 469, 93.8, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu_attendance`
--
ALTER TABLE `stu_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu_marksheet`
--
ALTER TABLE `stu_marksheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stu_attendance`
--
ALTER TABLE `stu_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stu_marksheet`
--
ALTER TABLE `stu_marksheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
