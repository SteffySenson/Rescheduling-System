-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 11:35 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `announcement_`
--

CREATE TABLE `announcement_` (
  `announcement_id` int(255) NOT NULL,
  `announcement_name` varchar(255) NOT NULL,
  `announcement_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement_`
--

INSERT INTO `announcement_` (`announcement_id`, `announcement_name`, `announcement_desc`) VALUES
(1, 'Maths - Test', 'Dear Student, Coming Monday, 12/12/2022, you will be having a maths test of module 1 and 2.'),
(2, 'Mini Project - Demo', 'Good evening dear students\r\n\r\nDemo your mini project in the lab system (in your allotted system) tomorrow without fail.'),
(3, 'Seminar Topic Submit', 'Select topic for your 5th sem seminar before 15th December 2022. '),
(4, 'Home Work - English', 'Complete excersice 2.3 of module 4 on december 12th 2022 '),
(5, 'Exam Instructions', ' Dont forget to bring your ID Card, Full Uniform, Hall Ticket for the exams');

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
-- Table structure for table `progress_`
--

CREATE TABLE `progress_` (
  `progress_id` int(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `progress_percent` varchar(255) NOT NULL,
  `progress_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress_`
--

INSERT INTO `progress_` (`progress_id`, `subject_code`, `progress_percent`, `progress_desc`) VALUES
(1, '', '40%', 'Module 1 completed. Assigment Submitted'),
(2, '', '50%', 'Module 2 completed.'),
(3, '', '70%', 'Module 4 completed. Assigment Submitted'),
(4, '', '30%', 'Module 1 completed.'),
(5, '', '60%', 'Module 3 completed. Assigment Submitted');

-- --------------------------------------------------------

--
-- Table structure for table `room_`
--
/*
CREATE TABLE `room_` (
  `block_id` int(255) NOT NULL,
  `progress_id` int(255) NOT NULL,
  `room_no` int(255) NOT NULL,
  `rows_` int(255) NOT NULL,
  `cols_` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_`
--

INSERT INTO `room_` (`block_id`, `progress_id`, `room_no`, `rows_`, `cols_`) VALUES
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
(1, 2, 803, 6, 5); */

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
-- Dumping data for table `semester_`
--


CREATE TABLE `timetable_` (
  `time_id` int(255) NOT NULL,
  `department_id` INT(255) NOT NULL, 
  `semester_no` INT(255) NOT NULL, 
  `day_` VARCHAR(255) NOT NULL, 
  `subject1` VARCHAR(255) NOT NULL, 
  `subject2` VARCHAR(255) NOT NULL, 
  `subject3` VARCHAR(255) NOT NULL, 
  `subject4` VARCHAR(255) NOT NULL, 
  `subject5` VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable_`
--

-- --------------------------------------------------------

INSERT INTO `timetable_` (`time_id`, `department_id`, `semester_no`, `day_`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`) VALUES
(1, 1, 2, 'MONDAY', 'C++ LAB', 'C++ LAB', 'C++ LAB', 'ENG', 'MATHS'),
(2, 1, 2, 'TUESDAY', 'DBMS', 'COA', 'ENG', 'MATHS', 'CPP'),
(3, 1, 2, 'WEDNESDAY', 'ENG', 'COA', 'CPP', 'MATHS', 'DBMS'),
(4, 1, 2, 'THURSDAY', 'CPP', 'ENG', 'COA', 'DBMS', 'MATHS'),
(5, 1, 2, 'FRIDAY', 'COA', 'DBMS', 'ENG', 'DBMS LAB', 'DBMS LAB');

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
(200140, 'Mahin', 'BCA', '1', '9999999999', 'mahin@gmail.com'),
(200141, 'Mirsana', 'BCA', '1', '9999999999', 'mirsana@gmail.com'),
(200142, 'Sameem', 'BCA', '1', '9999999999', 'sameem@gmail.com'),
(200143, 'Monisha', 'BCOM', '1', '9999999999', 'monisha@gmail.com'),
(200144, 'Muhammed', 'BCOM', '1', '9999999999', 'muhammed@gmail.com'),
(200145, 'Hafiz', 'BCOM', '1', '9999999999', 'hafiz@gmail.com'),
(300101, 'Abdullah', 'BVOC', '7', '9999999999', 'abdullah@gmail.com'),
(300102, 'Abhishek', 'BVOC', '7', '9999999999', 'abhishek@gmail.com'),
(300103, 'Adhila', 'BVOC', '7', '9999999999', 'adhila@gmail.com'),
(300104, 'Ansila', 'BCA', '7', '9999999999', 'ansila@gmail.com'),
(300105, 'Anugraha', 'BCA', '7', '9999999999', 'anugraha@gmail.com');

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
('BCA0102', 1, 2, 'COA'),
('BCA0103', 1, 2, 'DBMS'),
('BCA0104', 1, 2, 'LAB'),
('BCA0105', 1, 2, 'Statistics'),
('BCA0106', 1, 2, 'CPP'),
('BCA0107', 1, 2, 'English'),
('BCA0108', 1, 1, 'Maths');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_`
--

CREATE TABLE `teacher_` (
  `tea_id` int(255) NOT NULL,
  `tea_name` varchar(255) NOT NULL,
  `tea_dep` varchar(255) NOT NULL,
  `tea_phone` varchar(255) NOT NULL,
  `tea_email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_`
--

INSERT INTO `teacher_` (`tea_id`, `tea_name`, `tea_dep`, `tea_phone`, `tea_email`, `user_type`) VALUES
(101, 'Jaseena', '1', '9999999999', 'jaseena@gmail.com', 'teacher'),
(102, 'Leena', '1', '9999999999', 'leena@gmail.com', 'teacher'),
(103, 'Jasir', '1', '9999999999', 'jasir@gmail.com', 'teacher'),
(201, 'Sopna', '2', '9999999999', 'sopna@gmail.com', 'teacher'),
(202, 'Rafeeqa', '2', '9999999999', 'rafeeqa@gmail.com', 'teacher'),
(203, 'Razeena', '2', '9999999999', 'razeena@gmail.com', 'teacher');

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
(2, 'Joseph Deril', 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609', 'admin', 0),
(18, 'Mahin', 'mahin@gmail.com', '14485d6eff7907e7d634105291aa3353', 'user', 200140),
(19, 'Mirsana', 'mirsana@gmail.com', '70dfb4024456686fe71de97e9ce461fc', 'user', 200141),
(20, 'Sameem', 'sameem@gmail.com', 'd19d8e86f4b9385d9ca94957cbd8a11e', 'user', 200142),
(21, 'Monisha', 'monisha@gmail.com', 'a8e428e177c87bab649c49be08496a35', 'user', 200143),
(22, 'Muhammed', 'muhammed@gmail.com', 'ed405bb756337097a01d20cc307949fe', 'user', 200144),
(23, 'Hafiz', 'hafiz@gmail.com', '74e4ceb95969f51f989c326239021269', 'user', 200145),
(24, 'Abdullah', 'abdullah@gmail.com', '82721219beca92ac3998937d8b8bb837', 'user', 300101),
(25, 'Abhishek', 'abhishek@gmail.com', 'bc7234677f4b384298bbd6dd7991fbeb', 'user', 300102),
(26, 'Adhila', 'adhila@gmail.com', '02fc1cddbf20743a64497ef6a7e727c5', 'user', 300103),
(27, 'Ansila', 'ansila@gmail.com', '44e10abd1be21c95f8b0fe372dc0ab00', 'user', 300104),
(28, 'Anugraha', 'anugraha@gmail.com', '8a56b09d2b5fee50c74286ab9142be8e', 'user', 300105),
(29, 'Jaseena', 'jaseena@gmail.com', 'be971d5fe274da24da8a44ed83740602', 'teacher', 101),
(30, 'Leena', 'leena@gmail.com', '8914482b88897299046fdb90b937687a', 'teacher', 102),
(31, 'Jasir', 'jasir@gmail.com', '6f7ddb324a0bfd1a1aab0ed47a454b4f', 'teacher', 103),
(32, 'Sopna', 'sopna@gmail.com', '9707c9cf4e06f825bbb9af47780dd78e', 'teacher', 201),
(33, 'Rafeeqa', 'rafeeqa@gmail.com', '203339ef1a1ae519dd58727d7ddc5108', 'teacher', 202),
(34, 'Razeena', 'razeena@gmail.com', 'eeeab839cfe735194f5a0c7bd0f77d32', 'teacher', 203);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement_`
--
ALTER TABLE `announcement_`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `department_`
--
ALTER TABLE `department_`
  ADD PRIMARY KEY (`department_id`);

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
-- AUTO_INCREMENT for table `announcement_`
--
ALTER TABLE `announcement_`
  MODIFY `announcement_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department_`
--
ALTER TABLE `department_`
  MODIFY `department_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `progress_`
--
ALTER TABLE `progress_`
  MODIFY `progress_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `semester_`
--
ALTER TABLE `semester_`
  MODIFY `semester_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
