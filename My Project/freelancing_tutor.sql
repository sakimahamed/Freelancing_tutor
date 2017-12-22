-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2017 at 04:48 PM
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
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `Ans_Id` int(11) NOT NULL,
  `Ans_Description` varchar(200) COLLATE utf32_unicode_ci DEFAULT NULL,
  `Ans_Subject` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `T_Email` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `A_Id` int(11) NOT NULL,
  `A_Description` varchar(200) COLLATE utf32_unicode_ci DEFAULT NULL,
  `A_Subject` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `S_Email` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `A_Dead_Line` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`A_Id`, `A_Description`, `A_Subject`, `S_Email`, `A_Dead_Line`) VALUES
(1, 'How to declare a floating point value in java?', 'Java', 'sakimahamed7@gmail.com', '2017-12-22'),
(2, 'what is the longest word?', 'English', 'sakimahamed7@gmail.com', '2017-12-22'),
(3, 'what is the easiest way to draw a daimond shape in c?', 'C_Programming', 'miftahule151136@bscse.uiu.ac.bd', '2017-12-22'),
(4, 'what is the to determine the circles diameter?', 'Mathematics', 'sagor@gmail.com', '2017-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `interested_sub`
--

CREATE TABLE `interested_sub` (
  `TEmail` varchar(100) COLLATE utf32_unicode_ci DEFAULT NULL,
  `Topic` varchar(100) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `interested_sub`
--

INSERT INTO `interested_sub` (`TEmail`, `Topic`) VALUES
('shantanu@gmail.com', 'Python'),
('shantanu@gmail.com', 'Java'),
('shawkkhor@gmail.com', 'Python'),
('shawkkhor@gmail.com', 'Java'),
('shawkkhor@gmail.com', 'C_Programming'),
('shawkkhor@gmail.com', 'C++'),
('euna@gmail.com', 'Python'),
('euna@gmail.com', 'Java'),
('euna@gmail.com', 'C_Programming'),
('euna@gmail.com', 'C++'),
('rahat@gmail.com', 'Mathematics'),
('rahat@gmail.com', 'Java'),
('rahat@gmail.com', 'English'),
('rahat@gmail.com', 'Accounting'),
('rahat@gmail.com', 'Physics'),
('oeshi2271@gmail.com', 'Mathematics'),
('oeshi2271@gmail.com', 'C_Programming'),
('oeshi2271@gmail.com', 'Java'),
('oeshi2271@gmail.com', 'Python'),
('oeshi2271@gmail.com', 'C++'),
('oeshi2271@gmail.com', 'English'),
('oeshi2271@gmail.com', 'Accounting'),
('oeshi2271@gmail.com', 'Physics');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `P_Id` int(11) NOT NULL,
  `P_Description` varchar(200) COLLATE utf32_unicode_ci DEFAULT NULL,
  `P_Subject` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `S_Email` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `P_Dead_Line` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`P_Id`, `P_Description`, `P_Subject`, `S_Email`, `P_Dead_Line`) VALUES
(1, 'Make a java project on University Management System.\r\n                                 topic: student info, teachers info, stuff info ', 'Java', 'sakimahamed7@gmail.com', '2017-12-28'),
(2, 'Make a python project on University Management System.\r\n                                topic: student info, teachers info, stuff info ', 'Python', 'sagor@gmail.com', '2017-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `Q_Id` int(11) NOT NULL,
  `Q_Description` varchar(200) COLLATE utf32_unicode_ci DEFAULT NULL,
  `Q_Subject` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `S_Email` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Q_Id`, `Q_Description`, `Q_Subject`, `S_Email`) VALUES
(1, 'How to declare a floating point value in java?', 'Java', 'sakimahamed7@gmail.com'),
(2, 'what is the longest word?', 'English', 'sakimahamed7@gmail.com'),
(3, 'what is the easiest way to draw a daimond shape in c?', 'C_Programming', 'miftahule151136@bscse.uiu.ac.bd'),
(4, 'what is the to determine the circles diameter?', 'Mathematics', 'sagor@gmail.com'),
(5, 'Write a java code odd even number?', 'Java', 'oeshi2271@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `SFirst_Name` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `SLast_Name` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `SEmail` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `SPassword` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `SDate_Of_Birth` date NOT NULL,
  `SContact_no` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `SGender` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`SFirst_Name`, `SLast_Name`, `SEmail`, `SPassword`, `SDate_Of_Birth`, `SContact_no`, `SGender`) VALUES
('Miftah', 'Jaman', 'jaman@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1992-07-12', '01567567567', 'Male'),
('Miftahul', 'Jannat', 'miftahule151136@bscse.uiu.ac.bd', '81dc9bdb52d04dc20036dbd8313ed055', '1995-07-12', '01953850326', 'Female'),
('Sagor', 'Sorkar', 'sagor@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1995-05-15', '01797288097', 'Male'),
('Sakim', 'Ahamed', 'sakimahamed7@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1995-05-15', '01797288097', 'Male'),
('Sarah', 'Chawdury', 'sarah@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1992-07-12', '01567567567', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `TFirst_Name` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `TLast_Name` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `TEmail` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `TPassword` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `TDate_Of_Birth` date NOT NULL,
  `TContact_no` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `TGender` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`TFirst_Name`, `TLast_Name`, `TEmail`, `TPassword`, `TDate_Of_Birth`, `TContact_no`, `TGender`) VALUES
('Euna', 'Mehnaz_khan', 'euna@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1990-11-14', '01567567567', 'Female'),
('Oeshi', 'Jannat', 'oeshi2271@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1995-09-01', '01953850326', 'Female'),
('Tamjid-Al', 'Rahat', 'rahat@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1980-12-12', '0154976235', 'Male'),
('Shantanu', 'Shipan_Sarkar', 'shantanu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1990-12-10', '01898989898', 'Male'),
('Shawkkhor', 'Shotabdoh', 'shawkkhor@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1988-12-12', '01797121212', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`Ans_Id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`A_Id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`P_Id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`Q_Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`SEmail`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `Ans_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `A_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `P_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `Q_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
