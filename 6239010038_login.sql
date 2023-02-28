-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 05:17 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_php_workshop62`
--

-- --------------------------------------------------------

--
-- Table structure for table `6239010038_login`
--

CREATE TABLE `6239010038_login` (
  `UserID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `User_n` varchar(20) NOT NULL,
  `pass_w` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Status` enum('ADMIN','USER') NOT NULL DEFAULT 'USER'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `6239010038_login`
--

INSERT INTO `6239010038_login` (`UserID`, `User_n`, `pass_w`, `Name`, `Status`) VALUES
(001, 'admin', '1234', 'ADMIN', 'ADMIN'),
(002, 'faiy', '1005', 'Watchara', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `6239010038_login`
--
ALTER TABLE `6239010038_login`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `User_n` (`User_n`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `6239010038_login`
--
ALTER TABLE `6239010038_login`
  MODIFY `UserID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
