-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2017 at 02:59 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelancing_tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `TFirst_Name` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `TLast_Name` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `TEmail` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `TPassword` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `TDate_Of_Birth` date NOT NULL,
  `TContact_no` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `TGender` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`TFirst_Name`, `TLast_Name`, `TEmail`, `TPassword`, `TDate_Of_Birth`, `TContact_no`, `TGender`) VALUES
('Oeshi', 'Jannat', 'oeshi2271@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-12-01', '34563786785', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TEmail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
