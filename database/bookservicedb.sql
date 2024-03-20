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
-- Database: `bookservicedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(100) NOT NULL,
  `user_id` int(200) NOT NULL,
  `name` varchar(30) NOT NULL,
  `reg_no` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `v_name` varchar(45) NOT NULL,
  `fuel_level` text NOT NULL,
  `booked_date` varchar(15) NOT NULL,
  `service_date` date NOT NULL,
  `time_slot` varchar(10) NOT NULL,
  `complaint` varchar(300) NOT NULL,
  `token` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `user_id`, `name`, `reg_no`, `address`, `mobile_no`, `email`, `v_name`, `fuel_level`, `booked_date`, `service_date`, `time_slot`, `complaint`, `token`) VALUES
(10, 21, 'nagaraj', 'ka19ma1234', 'mulki', 9876543210, 'knagarajrao76@gmail.com', 'pulzar', 'Half', '12', '2022-09-02', '11am - 1pm', 'wash\r\nchain tight', 939352),
(11, 11, 'aaa', 'ka20012', 'kkk', 6360356790, 'sudeshshetty450@gmail.com', 'honda', 'Half', '22-09-30', '2022-10-01', '11am - 1pm', 'khjghjfhjfh', 971407);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
