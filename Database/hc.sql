-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 10:06 PM
-- Server version: 8.0.22
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hc`
--

-- --------------------------------------------------------

--
-- Table structure for table `badmin`
--

CREATE TABLE `badmin` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `badmin`
--

INSERT INTO `badmin` (`Username`, `Password`) VALUES
('Badmin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor_request`
--

CREATE TABLE `blood_donor_request` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Blood Group` varchar(100) NOT NULL,
  `Having Disease` varchar(100) NOT NULL,
  `Current Weight` varchar(100) NOT NULL,
  ` Blood Amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_donor_request`
--

INSERT INTO `blood_donor_request` (`Name`, `Email`, `Phone`, `Blood Group`, `Having Disease`, `Current Weight`, ` Blood Amount`) VALUES
('Ferdous', 'gg@gmail.com', '01922', 'B', 'N', '46', '3'),
('Arafath', 'aa@gmail.com', '019282373', 'A+', 'N', '46', '20ml'),
('ffasf', 'fa@gmail.com', '019282333', 'AB+', 'N', '50', '30 ml'),
('Mamun', 'mm@gmail.com', '01928243', 'AB+', 'N', '55', '200 ml');

-- --------------------------------------------------------

--
-- Table structure for table `blood_seek`
--

CREATE TABLE `blood_seek` (
  `Name` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_No` varchar(13) NOT NULL,
  `Blood Group` varchar(4) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_seek`
--

INSERT INTO `blood_seek` (`Name`, `Password`, `Email`, `Mobile_No`, `Blood Group`, `Address`) VALUES
('Mamun', '*****', 'mm@gmail.com', '0181726272', 'B+', 'Shahporan'),
('ABCD', '@1234', 'aa@gmail.com', '01928276', 'A+', 'Syl'),
('ABCD', '@1234', 'aa@gmail.com', '01928276', 'A+', 'Syl'),
('gggg', '@@@', 'aa@gmail.com', '019282722', 'B+', 's'),
('eerew', '@123', 'aa@gmail.com', '11', 'B+', '12'),
('fg44', '@1234', 'kk@gmail.com', '444', 'B+', '22'),
('Rashed', '123456@', 'jj@gmail.com', '1232', 'B+', 'ww'),
('asaaa', '1234@@', 'ww@gmail.com', '1111', 'A+', '22'),
('gggggg', '@@@@@@', 'aa@gmail.com', '2111', 'B+', '22');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `guardiansname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `weight` int NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `guardiansname`, `gender`, `dob`, `weight`, `bloodgroup`, `email`, `address`, `contact`, `username`, `password`) VALUES
(49, 'Tuhin', 'ass', 'male', '2000-02-10', 50, 'A+', 'tarequehasnattuhin36', 'sylhet', '0175656', 'tuhin', 'tuhin'),
(50, 'tht', 'tht', 'male', '2002-02-01', 56, 'B-', 'tht@gmail.com', 'sylhet', '3353', 'tht', 'tht'),
(51, 'x', 'xy', 'male', '2000-02-16', 34, 'B-', 'n@gmail.com', 'sylhet', '2222', 'x', 'xxx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
