-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 10:56 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `week3`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_detail`
--

CREATE TABLE `contact_detail` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `cell` int(12) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_detail`
--

INSERT INTO `contact_detail` (`firstname`, `lastname`, `cell`, `address`) VALUES
('harsha', 'boopathi', 123456789, 'T-333 Thirumalai hostel,\r\nCoimbatore institute of technology,\r\nCivil aerodromes post'),
('M', 'HARSHAVARD', 123654878, '17 kuperapattinam\r\npalani'),
('sofi', 'vasan', 2147483647, 'nagapattinam\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_detail`
--
ALTER TABLE `contact_detail`
  ADD UNIQUE KEY `cell` (`cell`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
