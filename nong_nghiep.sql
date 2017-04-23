-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2017 at 05:27 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nong_nghiep`
--

-- --------------------------------------------------------

--
-- Table structure for table `nong_nghiep`
--

CREATE TABLE `nong_nghiep` (
  `id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mode` int(11) NOT NULL,
  `nhiet_do` int(11) NOT NULL,
  `do_am_dat` int(11) NOT NULL,
  `do_am_kk` int(11) NOT NULL,
  `dong_co1` int(11) NOT NULL,
  `dong_co2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nong_nghiep`
--

INSERT INTO `nong_nghiep` (`id`, `time`, `mode`, `nhiet_do`, `do_am_dat`, `do_am_kk`, `dong_co1`, `dong_co2`) VALUES
(1, '2017-03-27 03:26:49', 1, 14, 14, 14, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nong_nghiep`
--
ALTER TABLE `nong_nghiep`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nong_nghiep`
--
ALTER TABLE `nong_nghiep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
