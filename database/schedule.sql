-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2022 at 06:00 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `block_`
--

CREATE TABLE `announcement_` (
  `announcement_id` int(255) NOT NULL,
  `announcement_name` varchar(255) NOT NULL,
  `announcement_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement_`
--

INSERT INTO `block_` (`block_id`, `block_name`, `block_desc`) VALUES
(1, 'BCA Block', 'BCA Block'),
(2, 'BBA Block', 'BBA Block'),
(3, 'Main Block', 'Main Block');

-- --------------------------------------------------------

--
-- Table structure for table `department_`
--

CREATE TABLE `department_` (
  `department_id` int(255) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `department_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_`
--

INSERT INTO `department_` (`department_id`, `department_name`, `department_desc`) VALUES
(1, 'BCA', 'BCA Department'),
(2, 'BBA', 'BBA Department'),
(3, 'MSC CS', 'MSC CS Department'),
(4, 'BCOM CA', 'BCOM CA Department'),
(5, 'BCOM TAX', 'BCOM TAX Department');

-- --------------------------------------------------------

--
-- Table structure for table `floor_`
--

CREATE TABLE `floor_` (
  `floor_id` int(255) NOT NULL,
  `block_id` int(255) NOT NULL,
  `floor_name` varchar(255) NOT NULL,
  `floor_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floor_`
--

INSERT INTO `floor_` (`floor_id`, `block_id`, `floor_name`, `floor_desc`) VALUES
(1, 1, 'First', 'BCA Block First Floor'),
(2, 1, 'Second', 'BCA Block Second Floor'),
(3, 2, 'First', 'BBA Block First Floor'),
(4, 2, 'Second', 'BBA Block Second Floor'),
(5, 3, 'First', 'Main Block First Floor'),
(6, 3, 'Second', 'Main Block Second Floor'),
(7, 3, 'Third', 'Main Block Third Floor');

-- --------------------------------------------------------

--
-- Table structure for table `progress_`
--

CREATE TABLE `progress_` (
  `progress_id` int(11) NOT NULL,
  `subject_code` int(11) NOT NULL,
  `semester_no` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room_`
--

CREATE TABLE `room_` (
  `block_id` int(255) NOT NULL,
  `floor_id` int(255) NOT NULL,
  `room_no` int(255) NOT NULL,
  `rows_` int(255) NOT NULL,
  `cols_` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_`
--

INSERT INTO `room_` (`block_id`, `floor_id`, `room_no`, `rows_`, `cols_`) VALUES
(3, 5, 101, 6, 5),
(3, 5, 102, 6, 5),
(3, 6, 201, 6, 5),
(3, 6, 202, 6, 5),
(3, 6, 203, 6, 5),
(3, 7, 301, 6, 5),
(2, 3, 401, 6, 5),
(2, 3, 402, 6, 5),
(2, 3, 403, 6, 5),
(2, 4, 501, 6, 5),
(2, 4, 502, 6, 5),
(1, 1, 701, 6, 5),
(1, 1, 702, 6, 5),
(1, 1, 703, 6, 5),
(1, 1, 704, 6, 5),
(1, 1, 705, 6, 5),
(1, 2, 801, 6, 5),
(1, 2, 802, 6, 5),
(1, 2, 803, 6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `semester_`
--

CREATE TABLE `semester_` (
  `semester_id` int(255) NOT NULL,
  `department_id` int(255) NOT NULL,
  `semester_no` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester_`
--

INSERT INTO `semester_` (`semester_id`, `department_id`, `semester_no`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 2, 1),
(8, 2, 2),
(9, 3, 1),
(10, 3, 2),
(11, 4, 1),
(12, 4, 2),
(13, 5, 1),
(14, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student_`
--

CREATE TABLE `student_` (
  `stud_id` int(255) NOT NULL,
  `stud_name` varchar(255) NOT NULL,
  `stud_dep` varchar(255) NOT NULL,
  `stud_sem` varchar(255) NOT NULL,
  `stud_phone` varchar(255) NOT NULL,
  `stud_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_`
--

INSERT INTO `student_` (`stud_id`, `stud_name`, `stud_dep`, `stud_sem`, `stud_phone`, `stud_email`) VALUES
(200144, 'Naseef', '1', '1', '9846363656', 'naseef@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `subject_`
--

CREATE TABLE `subject_` (
  `subject_code` varchar(255) NOT NULL,
  `department_id` int(255) NOT NULL,
  `semester_no` int(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_`
--

INSERT INTO `subject_` (`subject_code`, `department_id`, `semester_no`, `subject_name`) VALUES
('BCA0101', 1, 1, 'Programming in C'),
('Mathematics', 1, 1, 'Maths');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `user_no` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`, `user_no`) VALUES
(1, 'steffy', 'steffysenson@gmail.com', '1111', 'admin', 0),
(2, 'Joseph Deril', 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609', 'admin', 0),
(3, 'steffy', 'steffysenson@gmail.com', '222', 'user', 0),
(4, 'Naseef', 'naseef@gmail.com', '4178374196ab75881f1c8d87722df220', 'user', 200144),
(5, 'mmmmm', 'mmm@gmail.com', '9de37a0627c25684fdd519ca84073e34', 'user', 34544);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block_`
--
ALTER TABLE `block_`
  ADD PRIMARY KEY (`block_id`);

--
-- Indexes for table `department_`
--
ALTER TABLE `department_`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `floor_`
--
ALTER TABLE `floor_`
  ADD PRIMARY KEY (`floor_id`);

--
-- Indexes for table `progress_`
--
ALTER TABLE `progress_`
  ADD PRIMARY KEY (`progress_id`);

--
-- Indexes for table `room_`
--
ALTER TABLE `room_`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `semester_`
--
ALTER TABLE `semester_`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `student_`
--
ALTER TABLE `student_`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `subject_`
--
ALTER TABLE `subject_`
  ADD PRIMARY KEY (`subject_code`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `block_`
--
ALTER TABLE `block_`
  MODIFY `block_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department_`
--
ALTER TABLE `department_`
  MODIFY `department_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `floor_`
--
ALTER TABLE `floor_`
  MODIFY `floor_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `progress_`
--
ALTER TABLE `progress_`
  MODIFY `progress_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `semester_`
--
ALTER TABLE `semester_`
  MODIFY `semester_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
