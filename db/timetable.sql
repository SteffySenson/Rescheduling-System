-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 11:31 PM
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
-- Database: `timetable`
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
(5, 'Exam Instructions', ' Dont forget to bring your ID Card, Full Uniform, Hall Ticket for the exams'),
(6, 'Reminder', 'Exam Tomorrow');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_Id` int(5) NOT NULL,
  `C_Name` varchar(50) NOT NULL,
  `Department_Id` int(5) NOT NULL,
  `Semesters` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_Id`, `C_Name`, `Department_Id`, `Semesters`) VALUES
(1, 'BCA', 1, 6),
(2, 'MCA', 1, 4),
(3, 'MSC COMPUTER SCIENCE', 1, 4),
(4, 'BA ENGLISH', 2, 6),
(5, 'BVOC ANIMATION', 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department_Id` int(5) NOT NULL,
  `D_Name` varchar(50) NOT NULL,
  `HOD` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_Id`, `D_Name`, `HOD`) VALUES
(1, 'BA ENGLISH', 'Dr. Bindhu'),
(2, 'COMPUTER APPLICATIONS', 'Dr. Leena C S'),
(3, 'BVOC ANIMATION', 'Mr. Ajimsha');

-- --------------------------------------------------------

--
-- Table structure for table `progress_`
--

CREATE TABLE `progress_` (
  `progress_id` int(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `progress_percent` varchar(255) NOT NULL,
  `progress_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress_`
--

INSERT INTO `progress_` (`progress_id`, `subject_name`, `progress_percent`, `progress_desc`) VALUES
(1, 'CPP', '40%', 'Module 1 completed. Assigment Submitted'),
(2, 'DBMS', '50%', 'Module 2 completed.'),
(3, 'Statistics', '70%', 'Module 4 completed. Assigment Submitted'),
(4, 'Maths', '30%', 'Module 1 completed.'),
(5, 'COA', '60%', 'Module 3 completed. Assigment Submitted');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Schedule_Id` int(5) NOT NULL,
  `Course_Id` int(5) NOT NULL,
  `Semester` int(2) NOT NULL,
  `Day` varchar(50) NOT NULL,
  `P1` int(10) NOT NULL,
  `P2` int(10) NOT NULL,
  `P3` int(10) NOT NULL,
  `P4` int(10) NOT NULL,
  `P5` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Schedule_Id`, `Course_Id`, `Semester`, `Day`, `P1`, `P2`, `P3`, `P4`, `P5`) VALUES
(2, 8, 1, 'MONDAY', 3, 0, 0, 0, 0),
(3, 8, 1, 'TUESDAY', 0, 0, 0, 0, 0),
(4, 8, 1, 'WEDNESDAY', 0, 0, 0, 0, 0),
(5, 8, 1, 'THURSDAY', 0, 0, 0, 0, 0),
(6, 8, 1, 'FRIDAY', 0, 0, 0, 0, 0),
(7, 8, 2, 'MONDAY', 0, 0, 0, 0, 0),
(8, 8, 2, 'TUESDAY', 0, 0, 0, 0, 0),
(9, 8, 2, 'WEDNESDAY', 0, 0, 0, 0, 0),
(10, 8, 2, 'THURSDAY', 0, 0, 0, 0, 0),
(11, 8, 2, 'FRIDAY', 0, 0, 0, 0, 0),
(12, 8, 3, 'MONDAY', 0, 0, 0, 0, 0),
(13, 8, 3, 'TUESDAY', 0, 0, 0, 0, 0),
(14, 8, 3, 'WEDNESDAY', 0, 0, 0, 0, 0),
(15, 8, 3, 'THURSDAY', 0, 0, 0, 0, 0),
(16, 8, 3, 'FRIDAY', 3, 5, 5, 3, 5),
(17, 8, 4, 'MONDAY', 0, 0, 0, 0, 0),
(18, 8, 4, 'TUESDAY', 0, 0, 0, 0, 0),
(19, 8, 4, 'WEDNESDAY', 0, 0, 0, 0, 0),
(20, 8, 4, 'THURSDAY', 0, 0, 0, 0, 0),
(21, 8, 4, 'FRIDAY', 0, 0, 0, 0, 0),
(22, 8, 5, 'MONDAY', 0, 0, 0, 0, 0),
(23, 8, 5, 'TUESDAY', 0, 0, 0, 0, 0),
(24, 8, 5, 'WEDNESDAY', 0, 0, 0, 0, 0),
(25, 8, 5, 'THURSDAY', 0, 0, 0, 0, 0),
(26, 8, 5, 'FRIDAY', 0, 0, 0, 0, 0),
(27, 8, 6, 'MONDAY', 0, 0, 0, 0, 0),
(28, 8, 6, 'TUESDAY', 0, 0, 0, 0, 0),
(29, 8, 6, 'WEDNESDAY', 0, 0, 0, 0, 0),
(30, 8, 6, 'THURSDAY', 0, 0, 0, 0, 0),
(31, 8, 6, 'FRIDAY', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Subject_Id` int(5) NOT NULL,
  `sub_code` varchar(20) NOT NULL,
  `S_Name` varchar(50) NOT NULL,
  `Course_Id` int(5) NOT NULL,
  `Sem_No` int(2) NOT NULL,
  `Teacher_Id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Subject_Id`, `sub_code`, `S_Name`, `Course_Id`, `Sem_No`, `Teacher_Id`) VALUES
(1, 'C2S1', 'C++ LAB', 1, 2, 201),
(2, 'C2S2', 'ENG', 1, 2, 205),
(3, 'C2S3', 'MATHS', 1, 2, 203),
(4, 'C2S4', 'DAA', 1, 4, 101),
(5, 'C2S5', 'SASE', 1, 4, 205),
(6, 'C2S6', 'LINUX', 1, 4, 203),
(7, 'C2S7', 'PHP LAB', 1, 4, 202),
(8, 'C2S8', 'CLOUD', 1, 6, 102),
(9, 'C2S9', 'DM', 1, 6, 203),
(10, 'C2S10', 'LAB', 1, 6, 201),
(11, 'C2S11', 'DBMS', 1, 2, 103),
(12, 'C2S12', 'COA', 1, 2, 102),
(13, 'C2S13', 'CPP', 1, 2, 201),
(14, 'C2S14', 'LINUX LAB', 1, 4, 202),
(15, 'C2S15', 'PHP', 1, 4, 102),
(16, 'C2S16', 'OR', 1, 4, 203),
(17, 'C2S17', 'MICROPROCESSOR', 1, 4, 103),
(18, 'C2S18', 'DBMS LAB', 1, 4, 202),
(19, 'C2S19', 'PROJECT LAB', 1, 6, 102),
(20, 'C2S20', 'ANDROID', 1, 6, 202);


-- --------------------------------------------------------

--
-- Table structure for table `teacher_`
--

CREATE TABLE `teacher_` (
  `tea_id` int(255) NOT NULL,
  `tea_name` varchar(255) NOT NULL,
  `tea_dep` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `tea_phone` varchar(255) NOT NULL,
  `tea_email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_`
--

INSERT INTO `teacher_` (`tea_id`, `tea_name`, `tea_dep`, `subject_name`, `tea_phone`, `tea_email`, `user_type`) VALUES
(101, 'Jaseena', '2', 'FUNDAMENTALS OF COMPUTER', '9999999999', 'jaseena@gmail.com', 'teacher'),
(102, 'Leena', '2', 'COA', '9999999999', 'leena@gmail.com', 'teacher'),
(103, 'Jasir', '2', 'DBMS', '9999999999', 'jasir@gmail.com', 'teacher'),
(201, 'Sopna', '2', 'CPP LAB', '9999999999', 'sopna@gmail.com', 'teacher'),
(202, 'Rafeeqa', '2', 'DBMS LAB', '9999999999', 'rafeeqa@gmail.com', 'teacher'),
(203, 'Razeena', '2', 'MATHS', '9999999999', 'razeena@gmail.com', 'teacher'),
(205, 'BINDHU', '2', 'ENG', '45982604567', 'bindhu@gmail.com', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Id` int(5) NOT NULL,
  `Roll_No` int(10) NOT NULL,
  `U_Name` varchar(50) NOT NULL,
  `E_Mail` varchar(50) NOT NULL,
  `Phone_No` bigint(15) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Department_Id` int(5) NOT NULL,
  `Course_Id` int(5) NOT NULL,
  `Current_Sem` int(2) NOT NULL,
  `U_Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `Roll_No`, `U_Name`, `E_Mail`, `Phone_No`, `Password`, `Department_Id`, `Course_Id`, `Current_Sem`, `U_Type`) VALUES
(1, 123, 'Deril', 'deril@gmail.com', 1234, '7b62eb85da5711d4e794eee3fe5607fb', 2, 1, 4, 'Teacher'),
(2, 1234, 'salim', 'salim@gmail.com', 1234, 'ca6b147b8fbdd688d8ebcaa3b803c22a', 2, 1, 6, 'Teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement_`
--
ALTER TABLE `announcement_`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_Id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Department_Id`);

--
-- Indexes for table `progress_`
--
ALTER TABLE `progress_`
  ADD PRIMARY KEY (`progress_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`Schedule_Id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Subject_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_Id`),
  ADD UNIQUE KEY `Roll_No` (`Roll_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement_`
--
ALTER TABLE `announcement_`
  MODIFY `announcement_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Course_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Department_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `progress_`
--
ALTER TABLE `progress_`
  MODIFY `progress_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `Schedule_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `Subject_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
