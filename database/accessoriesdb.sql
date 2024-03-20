-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Apr 17, 2023 at 03:22 PM
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
-- Database: `accessoriesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(4) NOT NULL,
  `quantity` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `itemstocks`
--

CREATE TABLE `itemstocks` (
  `item_name` varchar(100) NOT NULL,
  `stocks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itemstocks`
--

INSERT INTO `itemstocks` (`item_name`, `stocks`) VALUES
('Axor Apex Venomous Dull Black Gray Helmet-M', 1),
('Castrol Power1 10W40 4T Semi Synthetic Engine Oil', 6),
('Castrol Power1 Cruise 20W50 4T Semi Synthetic Engine Oil', 3),
('Castrol Power1 Ultimate 10W40 4T Synthetic Engine Oil', 6),
('Castrol Power1 Ultimate 20W50 4T Synthetic Engine Oil', 8),
('Motul C2 Chain Lube', 4),
('Motul Chain Lubes with Chain Cleaning Brush', 5),
('NGK Iridium Spark Plug', 5),
('NGK Laser Iridium Spark Plug', 3),
('NGK Standard Spark Plug', 4),
('NIKAVI SP01 Spark Plug', 2),
('Royal Enfield ABS Marble Open Face Helmet', 5),
('Vega Crux Black Helmet-M', 14),
('Vega Off Road Black Silver Helmet', 6),
('Waxpol AP-3 Multipurpose Grease for vehicles', 3),
('WD-40 Multipurpose Spray', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ordered_details`
--

CREATE TABLE `ordered_details` (
  `order_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile_no` bigint(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `payment_mode` varchar(30) NOT NULL,
  `invoice_status` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordered_details`
--

INSERT INTO `ordered_details` (`order_id`, `user_id`, `name`, `mobile_no`, `email`, `address`, `payment_mode`, `invoice_status`) VALUES
(61, 11, 'sudesh shetty', 6360356790, 'sudeshshetty450@gmail.com', 'belman', 'COD', 'sent'),
(62, 15, 'sudhir', 9482640924, 'raosudhir2k1@gmail.com', 'padubidri', 'COD', 'sent'),
(63, 15, 'sudhir', 9482640924, 'raosudhir2k1@gmail.com', 'padubidri', 'Online', 'sent'),
(64, 17, 'vittal', 7676976810, 'vittalshenoy777@gmail.com', 'MULKI', 'Online', 'sent'),
(65, 21, 'nagaraj', 9876543210, 'harshirao17@gmail.com', 'mulki', 'Online', 'sent'),
(66, 22, 'user1', 8722074501, 'samisonu2000@gmail.com', 'mulki', 'Online', 'sent'),
(67, 11, 'sudesh shetty', 6360356790, 'sudeshshetty450@gmail.com', 'belman', 'Online', 'sent'),
(68, 11, 'sudesh shetty', 6360356790, 'sudeshshetty450@gmail.com', 'kjhjhk', 'Online', 'sent'),
(69, 25, 'preeti', 6360356790, 'preetipshetty01@gmail.com', 'belman', 'Online', 'sent');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `invoice_status` varchar(10) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `item_name`, `price`, `quantity`, `invoice_status`) VALUES
(61, 11, 'Vega Crux Black Helmet-M', 1156, 1, 'sent'),
(61, 11, 'NGK Standard Spark Plug', 230, 1, 'sent'),
(61, 11, 'Castrol Power1 10W40 4T Semi Synthetic Engine Oil', 439, 1, 'sent'),
(62, 15, 'Castrol Power1 10W40 4T Semi Synthetic Engine Oil', 439, 1, 'sent'),
(63, 15, 'Castrol Power1 10W40 4T Semi Synthetic Engine Oil', 439, 1, 'sent'),
(64, 17, 'Vega Crux Black Helmet-M', 1156, 3, 'sent'),
(65, 21, 'Vega Crux Black Helmet-M', 1156, 1, 'sent'),
(65, 21, 'NGK Standard Spark Plug', 230, 1, 'sent'),
(65, 21, 'Motul C2 Chain Lube', 220, 1, 'sent'),
(65, 21, 'Castrol Power1 Ultimate 10W40 4T Synthetic Engine ', 570, 1, 'sent'),
(66, 22, 'NIKAVI SP01 Spark Plug', 120, 1, 'sent'),
(66, 22, 'Waxpol AP-3 Multipurpose Grease for vehicles', 229, 1, 'sent'),
(67, 11, 'Axor Apex Venomous Dull Black Gray Helmet-M', 4844, 1, 'sent'),
(67, 11, 'Vega Off Road Black Silver Helmet', 1825, 2, 'sent'),
(67, 11, 'NIKAVI SP01 Spark Plug', 120, 2, 'sent'),
(68, 11, 'Waxpol AP-3 Multipurpose Grease for vehicles', 229, 1, 'sent'),
(69, 25, 'Castrol Power1 10W40 4T Semi Synthetic Engine Oil', 439, 1, 'sent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemstocks`
--
ALTER TABLE `itemstocks`
  ADD PRIMARY KEY (`item_name`);

--
-- Indexes for table `ordered_details`
--
ALTER TABLE `ordered_details`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `ordered_details`
--
ALTER TABLE `ordered_details`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
