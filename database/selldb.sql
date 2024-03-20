-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Apr 17, 2023 at 03:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `selltable`
--

CREATE TABLE `selltable` (
  `id` int(100) NOT NULL,
  `user_id` int(200) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile_number` bigint(10) NOT NULL,
  `brand` text NOT NULL,
  `model` varchar(20) NOT NULL,
  `year` int(4) NOT NULL,
  `km` int(6) NOT NULL,
  `ownership` int(1) NOT NULL,
  `value` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selltable`
--

INSERT INTO `selltable` (`id`, `user_id`, `name`, `email`, `mobile_number`, `brand`, `model`, `year`, `km`, `ownership`, `value`) VALUES
(8, 15, 'sudhir', 'raosudhir2k1@gmail.com', 9482640924, 'TVS', 'ronin', 2021, 85697, 1, 52369),
(9, 17, 'vittal', 'vittalshenoy@gmail.com', 7676976810, 'Honda', 'HONDA', 1, 25000, 2, 100000),
(10, 11, 'sudesh', 'sudeshshetty450@gmail.com', 6360356790, 'Honda', 'honda', 2020, 12000, 2, 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `selltable`
--
ALTER TABLE `selltable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `selltable`
--
ALTER TABLE `selltable`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
