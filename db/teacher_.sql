-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 11:46 PM
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
