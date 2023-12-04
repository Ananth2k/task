-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 07:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `ID` int(250) NOT NULL,
  `NAME` varchar(250) DEFAULT NULL,
  `DOB` varchar(250) DEFAULT NULL,
  `AGE` int(250) DEFAULT NULL,
  `MATHS` int(250) DEFAULT NULL,
  `SCIENCE` int(250) DEFAULT NULL,
  `ENGLISH` int(250) DEFAULT NULL,
  `TOTAL` int(250) DEFAULT NULL,
  `AVERAGE` int(250) DEFAULT NULL,
  `CREATED` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`ID`, `NAME`, `DOB`, `AGE`, `MATHS`, `SCIENCE`, `ENGLISH`, `TOTAL`, `AVERAGE`, `CREATED`) VALUES
(2, 'Harry', '2019-11-15', 4, 34, 45, 34, 113, 38, '2023-12-04 11:29:49'),
(3, 'wilson', '2019-12-13', 3, 23, 23, 23, 69, 23, '2023-12-04 11:30:20'),
(4, 'Max', '2019-12-13', 3, 43, 12, 32, 87, 29, '2023-12-04 11:30:57'),
(5, 'Mark', '2019-12-12', 3, 12, 43, 32, 87, 29, '2023-12-04 11:31:20'),
(6, 'john', '2019-12-06', 3, 45, 43, 32, 120, 40, '2023-12-04 11:31:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
