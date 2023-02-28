-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 05:18 AM
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
-- Table structure for table `6239010038_employee`
--

CREATE TABLE `6239010038_employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `emp_lname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `emp_sex` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `emp_birthday` date NOT NULL,
  `emp_position` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `emp_salary` int(11) NOT NULL,
  `emp_phone` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `emp_email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `emp_mark` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `6239010038_employee`
--

INSERT INTO `6239010038_employee` (`emp_id`, `emp_name`, `emp_lname`, `emp_sex`, `emp_birthday`, `emp_position`, `emp_salary`, `emp_phone`, `emp_email`, `emp_mark`, `image`) VALUES
(375, 'Watchara', 'Faichai', 'Female', '0000-00-00', '', 0, '0623725430', 'faiycoc1508@gmail.com', '', ''),
(378, 'วัชระ', 'zaza', 'Female', '4184-05-10', 'Network system', 120, '0623725430', 'faiycoc1508@gmail.com', '-', ''),
(391, 'Watchara', 'Faichai', '', '0000-00-00', '', 0, '0623725430', 'faiycoc1508@gmail.com', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `6239010038_employee`
--
ALTER TABLE `6239010038_employee`
  ADD PRIMARY KEY (`emp_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `6239010038_employee`
--
ALTER TABLE `6239010038_employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=397;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
