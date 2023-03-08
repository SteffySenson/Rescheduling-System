-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 07:50 AM
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
-- Table structure for table `reallocate`
--

CREATE TABLE `reallocate` (
  `id` int(10) NOT NULL,
  `Schedule_Id` int(10) NOT NULL,
  `Date` date NOT NULL,
  `tid1` int(5) NOT NULL,
  `tid2` int(5) NOT NULL,
  `period` int(5) NOT NULL,
  `sub` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reallocate`
--

INSERT INTO `reallocate` (`id`, `Schedule_Id`, `Date`, `tid1`, `tid2`, `period`, `sub`) VALUES
(1, 17, '2023-03-08', 1, 0, 2, 0),
(2, 17, '2023-03-08', 1, 0, 2, 0),
(3, 17, '2023-03-08', 1, 0, 3, 0),
(4, 17, '2023-03-08', 1, 1, 2, 3),
(5, 17, '2023-03-08', 1, 0, 2, 0),
(6, 16, '2023-03-08', 1, 0, 1, 0),
(7, 16, '2023-03-08', 1, 0, 1, 0),
(8, 16, '2023-03-08', 1, 0, 1, 0),
(9, 17, '2023-03-08', 1, 0, 1, 0),
(10, 16, '2023-03-08', 1, 0, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reallocate`
--
ALTER TABLE `reallocate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reallocate`
--
ALTER TABLE `reallocate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
