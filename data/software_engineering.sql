-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2021 at 03:44 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `software_engineering`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_email`, `admin_password`) VALUES
(1, 'george@admin.com', '0000'),
(4, 'fady@gl.com', '9999');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `attendence_id` int(100) NOT NULL,
  `student_id` int(100) NOT NULL,
  `teacher_id` int(100) NOT NULL,
  `course_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `semster` enum('1','2','3','4') NOT NULL,
  `status` enum('presence','absence','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`attendence_id`, `student_id`, `teacher_id`, `course_id`, `date`, `semster`, `status`) VALUES
(1, 1, 1, 1, '2021-11-01', '1', 'absence'),
(4, 1, 1, 1, '2021-12-17', '1', 'presence'),
(5, 2, 1, 1, '2021-12-17', '1', 'absence');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_description` varchar(150) NOT NULL,
  `semster` enum('1','2','3','4') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_description`, `semster`) VALUES
(1, 'software engineering 1', '11', '1'),
(2, 'software engineering 2', '12', '1'),
(3, 'tt', 'tt', '2'),
(5, 'try up', 'ttt', '4');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(100) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_address` varchar(50) NOT NULL,
  `student_dob` date NOT NULL,
  `student_phone` varchar(50) NOT NULL,
  `student_image` text NOT NULL,
  `semester` enum('1','2','3','4','graduate') NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `student_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_address`, `student_dob`, `student_phone`, `student_image`, `semester`, `student_email`, `student_password`) VALUES
(1, 'george1', '1', '0000-00-00', '01000', 'upload.jpg', '1', 'george@student1.com', '0000'),
(2, 'george2', '2', '2021-11-01', '0100', 'upload2.jpg', '1', 'george@student2.com', '0000'),
(5, 'george', '3', '2021-12-01', '0100000', 'upload.jpg', '4', 'george@student4.com', '0000'),
(8, 'try1', '9', '2021-12-13', '010000', '61bba7f6e53da0.40768246.jpg', '1', 'try1@student1.com', '0000'),
(9, 'sure1', '9', '2021-12-16', '010000', '61bba955546406.36791737.jpg', '4', 'sure1@student3.com', '0000'),
(10, 'sure2 sure', '000', '2021-12-17', '0000', '61bcf050877e73.03919727.jpg', '3', 'fadyupdate@g00l.com', '0000'),
(13, 'sure3', 'hhhh', '2021-12-21', '444', '61bbac9c1989e7.78859868.jpg', '4', 'g.m000@gmail.com', '0000'),
(16, 'tt fff5f', '00000', '2021-12-06', '00000', '61c8a2eb368964.88986262.jpg', '4', 'tt@studentf.com', '00000');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `teacher_address` varchar(50) NOT NULL,
  `teacher_phone` varchar(50) NOT NULL,
  `teacher_email` varchar(50) NOT NULL,
  `teacher_dob` date NOT NULL,
  `teacher_image` text NOT NULL,
  `teacher_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `teacher_address`, `teacher_phone`, `teacher_email`, `teacher_dob`, `teacher_image`, `teacher_password`) VALUES
(1, 'george', '1', '00000000000', 'george@teacher.com', '2021-11-01', 'upload.jpg', '0000'),
(3, 'try', 'hhhh', '000', 'g.m001@gmail.com', '2021-12-16', '61c504646180b7.93646093.jpg', '000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`attendence_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `attendence_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendence`
--
ALTER TABLE `attendence`
  ADD CONSTRAINT `course_id` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `teacher_id` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
