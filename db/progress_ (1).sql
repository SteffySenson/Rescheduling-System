-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 07:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `progress_`
--
ALTER TABLE `progress_`
  ADD PRIMARY KEY (`progress_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `progress_`
--
ALTER TABLE `progress_`
  MODIFY `progress_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
