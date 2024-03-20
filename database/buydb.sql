-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Apr 17, 2023 at 03:23 PM
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
-- Database: `buydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `buytable`
--

CREATE TABLE `buytable` (
  `id` int(100) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `ownership` int(1) NOT NULL,
  `price` int(7) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` text NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buytable`
--

INSERT INTO `buytable` (`id`, `brand`, `model`, `year`, `ownership`, `price`, `photo`, `status`) VALUES
(1, 'Royal Enfiled', 'Classic 350', 2018, 1, 160000, 'upload/enfield.jpeg', 'available'),
(2, 'Bajaj', 'Pulsar NS 160 ', 2021, 1, 120000, 'upload/pulsar-ns-160-right-front-three-quarter.jpeg', 'available'),
(4, 'TVS', 'NTORQ 125', 2020, 1, 60000, 'upload/BS6-TVS-NTORQ-125.jpg', 'booked'),
(5, 'TVS', 'Ronin 225', 2022, 1, 192000, 'upload/TVS_Ronin_1657108243402_1657108250591.webp', 'available'),
(6, 'royal enfiled', '2019', 2020, 1, 160000, 'upload/enfield.jpeg', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `userbought`
--

CREATE TABLE `userbought` (
  `id` int(10) NOT NULL,
  `user_id` int(200) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `ownership` int(1) NOT NULL,
  `price` int(7) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userbought`
--

INSERT INTO `userbought` (`id`, `user_id`, `brand`, `model`, `year`, `ownership`, `price`, `image`) VALUES
(98, 11, 'TVS', 'NTORQ 125', 2020, 1, 60000, 'upload/BS6-TVS-NTORQ-125.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buytable`
--
ALTER TABLE `buytable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userbought`
--
ALTER TABLE `userbought`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buytable`
--
ALTER TABLE `buytable`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userbought`
--
ALTER TABLE `userbought`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
