-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 08:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro-2`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `guardiansname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `weight` int(11) NOT NULL,
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
