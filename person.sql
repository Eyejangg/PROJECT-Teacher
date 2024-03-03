-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2024 at 03:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `person`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `p_id` int(12) NOT NULL,
  `p_prefix` varchar(20) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_surname` varchar(100) NOT NULL,
  `p_birthday` date NOT NULL,
  `p_address` text NOT NULL,
  `p_skill` text NOT NULL,
  `p_tel` varchar(30) NOT NULL,
  `p_information` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_user` varchar(20) NOT NULL,
  `p_pass` varchar(100) NOT NULL,
  `p_level` varchar(10) NOT NULL,
  `d_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`p_id`, `p_prefix`, `p_name`, `p_surname`, `p_birthday`, `p_address`, `p_skill`, `p_tel`, `p_information`, `p_image`, `p_user`, `p_pass`, `p_level`, `d_id`) VALUES
(29, 'นาย', 'พิธารวัฒน์', 'เกตุมณี', '2004-04-22', '42/13 กาญจนบุรี', 'Admin\r\n', '0611080011', '', '', 'user1', 'e10adc3949ba59abbe56e057f20f883e', 'a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `d_id` int(10) NOT NULL,
  `d_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`d_id`, `d_name`) VALUES
(1, 'อธิการบดี'),
(2, 'คณบดี');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`d_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `p_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
