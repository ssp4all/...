-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2017 at 07:23 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vesit`
--

-- --------------------------------------------------------

--
-- Table structure for table `leavingform`
--

CREATE TABLE `leavingform` (
  `email` varchar(20) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `appdate` date NOT NULL,
  `admission` date NOT NULL,
  `passing` date NOT NULL,
  `cast` varchar(10) NOT NULL,
  `subcast` varchar(10) NOT NULL,
  `mobile` int(10) NOT NULL,
  `cgpi` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `divi` varchar(10) NOT NULL,
  `course` varchar(10) NOT NULL,
  `signature` varchar(10) NOT NULL,
  `comment` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `clerkcomment` text NOT NULL,
  `signaturedoc` text NOT NULL,
  `marksheet` text NOT NULL,
  `passingdoc` text NOT NULL,
  `nationality` text NOT NULL,
  `learning` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leavingform`
--

INSERT INTO `leavingform` (`email`, `fname`, `lname`, `dob`, `appdate`, `admission`, `passing`, `cast`, `subcast`, `mobile`, `cgpi`, `gender`, `divi`, `course`, `signature`, `comment`, `status`, `clerkcomment`, `signaturedoc`, `marksheet`, `passingdoc`, `nationality`, `learning`) VALUES
('ssp@ves.ac.in', 'ssp', 'pawar', '2017-01-31', '2017-01-31', '2017-01-31', '2019-12-01', 'General', 'Hindu', 2147483647, 3, 'male', 'se', 'Inft', 'ROnaldo', 'no problem', 'yes', '', 'uploads/ssp@ves.ac.in/Signature.jpg', 'uploads/ssp@ves.ac.in/Marksheet.jpg', 'uploads/ssp@ves.ac.in/PassingCertificate.jpg', 'uploads/ssp@ves.ac.in/NationalityProof.jpg', 'uploads/ssp@ves.ac.in/PreviousLeaving.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `email`, `password`) VALUES
('1', 'ssp@ves.ac.in', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leavingform`
--
ALTER TABLE `leavingform`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
