-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 10:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `bpcode` int(11) DEFAULT NULL,
  `Probablename` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `info_giver` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `bpcode`, `Probablename`, `gender`, `Age`, `height`, `weight`, `type`, `area`, `description`, `info_giver`) VALUES
(12, 777, 'tualsi nath', 'female', 35, 5, 61, 'landslide', 'tanahun', '6 fingers in right hand', 'nepal police'),
(13, 666, 'bikas gupta', 'male', 45, 5, 68, 'flood', 'dolakha', 'tattoo on left shoulder', 'nepal police');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_miss`
--

CREATE TABLE `tbl_miss` (
  `id` int(11) NOT NULL,
  `mpncode` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `birthplace` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `info_giver` varchar(100) NOT NULL,
  `others` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_miss`
--

INSERT INTO `tbl_miss` (`id`, `mpncode`, `name`, `gender`, `age`, `birthplace`, `language`, `description`, `occupation`, `religion`, `info_giver`, `others`) VALUES
(3, 1, 'hema', 0, 23, 'ktm', 'nepali', 'jhsdkjfh', 'student', 'hindu', 'hero hiralal', 'kndskjnsdkjv'),
(7, 124, 'dilkumar', 0, 23, 'pokhara', 'nepali', 'hjguguv', 'student', 'christian', 'hero hiralal', 'kjbj');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signup`
--

CREATE TABLE `tbl_signup` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `addresss` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `police_id` blob NOT NULL,
  `post` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `phone` double NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_signup`
--

INSERT INTO `tbl_signup` (`id`, `fullname`, `username`, `password`, `addresss`, `state`, `district`, `city`, `police_id`, `post`, `area`, `phone`, `email`) VALUES
(1, 'hembahadur', 'sid', '123', 'qwert', '123', 'luy', 'vbnm', 0x322e6a7067, 'cvbn', 'IUY', 123456789, 'g@gmail.com'),
(2, 'sid', 'sid123', '12345', 'kpan', '03', 'ktm', 'ktm', 0x4453435f303233372e4a5047, 'khatra', 'kapan', 98765431234, 'g@gmail.com'),
(4, 'hero hiralal', 'hero', '12345', 'kapan', '03', 'lalitpur', 'patan', 0x31322e6a7067, 'khatra', 'sindupalchowk', 98765431234, 'g@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_miss`
--
ALTER TABLE `tbl_miss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_signup`
--
ALTER TABLE `tbl_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_miss`
--
ALTER TABLE `tbl_miss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_signup`
--
ALTER TABLE `tbl_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
