-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 05:40 PM
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
  `Q_Id` int(11) DEFAULT NULL,
  `Ans_Id` int(11) NOT NULL,
  `Ans_Description` varchar(200) COLLATE utf32_unicode_ci DEFAULT NULL,
  `T_Email` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`Q_Id`, `Ans_Id`, `Ans_Description`, `T_Email`) VALUES
(3, 1, 'A body continues its state of rest or uniform motion unless it is acted up on by an external force.', 'miftahul151136@gmail.com'),
(5, 3, 'int abs(int x) returns the absolute value of int x', 'tamjid@gmail.com'),
(6, 4, 'ASSETS=LIABILITIES + EQUITY\r\nA=L+E', 'miftahul151136@gmail.com'),
(7, 6, 'It\'s not very easy problem.', 'sotabda@gmail.com'),
(7, 7, 'It\'s not wise to use this tool.', 'tamjid@gmail.com'),
(9, 9, 'C++ is a object oriented programming language.', 'sanjay@gmail.com'),
(9, 10, 'C is a procedural programming language and does not support classes and objectsbut C++ is a combination of both procedural and object oriented programming language', 'tamjid@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `A_Id` int(11) NOT NULL,
  `A_Description` varchar(200) COLLATE utf32_unicode_ci DEFAULT NULL,
  `A_Subject` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `S_Email` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `A_Dead_Line` date NOT NULL,
  `T_Email` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `Flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`A_Id`, `A_Description`, `A_Subject`, `S_Email`, `A_Dead_Line`, `T_Email`, `Flag`) VALUES
(1, 'How to declare a floating point value in java?', 'Java', 'sakimahamed7@gmail.com', '2017-12-22', 'oeshi2271@gmail.com', 1),
(2, 'what is the longest word?', 'English', 'sakimahamed7@gmail.com', '2017-12-22', 'sakib@gmail.com', 1),
(3, 'what is the easiest way to draw a daimond shape in c?', 'C_Programming', 'miftahule151136@bscse.uiu.ac.bd', '2017-12-22', 'miftahul151136@gmail.com', 1),
(4, 'what is the to determine the circles diameter?', 'Mathematics', 'sagor@gmail.com', '2017-12-22', 'oeshi2271@gmail.com', 1),
(7, 'Write a code where multiple thread can work.', 'Java', 'samir@gmail.com', '2017-12-30', 'sanjay@gmail.com', 1),
(8, 'What is LED? How it makes?', 'Physics', 'samir@gmail.com', '2017-12-31', '', 0),
(9, 'Write a short description of a Rohinga.', 'English', 'sakimahamed7@gmail.com', '2018-01-10', 'sanjay@gmail.com', 1);

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
('miftahul151136@gmail.com', 'Mathematics'),
('miftahul151136@gmail.com', 'C_Programming'),
('miftahul151136@gmail.com', 'Java'),
('miftahul151136@gmail.com', 'English'),
('miftahul151136@gmail.com', 'Accounting'),
('miftahul151136@gmail.com', 'Physics'),
('tamjid@gmail.com', 'Mathematics'),
('tamjid@gmail.com', 'C_Programming'),
('tamjid@gmail.com', 'Java'),
('tamjid@gmail.com', 'Python'),
('tamjid@gmail.com', 'C++'),
('tamjid@gmail.com', 'English'),
('tamjid@gmail.com', 'Accounting'),
('sakib@gmail.com', 'Mathematics'),
('sakib@gmail.com', 'C_Programming'),
('sakib@gmail.com', 'Java'),
('sakib@gmail.com', 'Python'),
('sakib@gmail.com', 'C++'),
('sotabda@gmail.com', 'Mathematics'),
('sotabda@gmail.com', 'C_Programming'),
('sotabda@gmail.com', 'Java'),
('sotabda@gmail.com', 'Python'),
('sotabda@gmail.com', 'C++'),
('sotabda@gmail.com', 'English'),
('sotabda@gmail.com', 'Accounting'),
('sotabda@gmail.com', 'Physics'),
('sanjay@gmail.com', 'C_Programming'),
('sanjay@gmail.com', 'Java'),
('sanjay@gmail.com', 'Python'),
('sanjay@gmail.com', 'C++'),
('oeshi2271@gmail.com', 'Mathematics'),
('oeshi2271@gmail.com', 'C++'),
('oeshi2271@gmail.com', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `P_Id` int(11) NOT NULL,
  `P_Description` varchar(200) COLLATE utf32_unicode_ci DEFAULT NULL,
  `P_Subject` varchar(20) COLLATE utf32_unicode_ci DEFAULT NULL,
  `S_Email` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `P_Dead_Line` date NOT NULL,
  `T_Email` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `Flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`P_Id`, `P_Description`, `P_Subject`, `S_Email`, `P_Dead_Line`, `T_Email`, `Flag`) VALUES
(2, 'Make a python project on University Management System.\r\n                                topic: student info, teachers info, stuff info ', 'Python', 'sagor@gmail.com', '2017-12-30', '', 0),
(4, 'Prove that, (a+b)^2 == a^2+b^2+2ab', 'Mathematics', 'samir@gmail.com', '2017-12-31', '', 0),
(5, 'Write a composition on \"Bangobandhu Safari Park\" .', 'English', 'samir@gmail.com', '2017-12-31', '', 0),
(6, 'Library management system using JAVA FX.', 'Java', 'sakimahamed7@gmail.com', '2018-01-12', 'sanjay@gmail.com', 1),
(7, 'Make a document of a bank.', 'Accounting', 'sakimahamed7@gmail.com', '2018-01-05', '', 0);

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
(3, 'What is the Newton\'s first law?', 'Physics', 'sakimahamed7@gmail.com'),
(4, 'What is the longest word in English?', 'English', 'samir@gmail.com'),
(5, 'How to absolute value in c?', 'C_Programming', 'samir@gmail.com'),
(6, 'What is the balance sheet equation?\r\n', 'Accounting', 'raya@gmail.com'),
(7, 'How to use ajax in c++?', 'C++', 'raya@gmail.com'),
(8, 'What is the law to calculate a square area?', 'Mathematics', 'sakimahamed7@gmail.com'),
(9, 'What is the main difference in C and C++?', 'C++', 'sakimahamed7@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `SFirst_Name` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `SLast_Name` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `SEmail` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `SPassword` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `SDate_Of_Birth` date NOT NULL,
  `SContact_no` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `SGender` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`SFirst_Name`, `SLast_Name`, `SEmail`, `SPassword`, `SDate_Of_Birth`, `SContact_no`, `SGender`) VALUES
('Pritilota', 'Waddar', 'pritilota@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1995-08-27', '01678123123', 'Female'),
('Raya', 'Mehjabin', 'raya@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1995-07-14', '01879123876', 'Female'),
('Sagor', 'Sarkar', 'sagor@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1998-01-01', '01987345765', 'Male'),
('Sakim', 'Ahamed', 'sakimahamed7@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1995-05-15', '01797288097', 'Male'),
('Samir', 'Bhuiya', 'samir@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1995-09-19', '01787151317', 'Male'),
('Sayed', 'Sujon', 'sayed@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1990-07-13', '01987123123', 'Male');

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
('Miftahul', 'Jannat', 'miftahul151136@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1995-09-01', '01953850326', 'Female'),
('Oeshi', 'Jannat', 'oeshi2271@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1995-09-01', '01712725919', 'Female'),
('Sakib', 'Shahriar', 'sakib@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1994-03-15', '01987134123', 'Male'),
('Sanjay', 'Saha', 'sanjay@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1997-09-15', '01989156654', 'Male'),
('Shakkhor', 'Shotabda', 'sotabda@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1997-07-21', '01674155541', 'Male'),
('Tamjid_Al', 'Rahat', 'tamjid@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1990-04-19', '01557134234', 'Male');

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
  MODIFY `Ans_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `A_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `P_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `Q_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
