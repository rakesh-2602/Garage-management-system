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
-- Database: `invoicedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `invoice_id` int(100) NOT NULL,
  `invoice_date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `grand_total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`invoice_id`, `invoice_date`, `name`, `email`, `address`, `grand_total`) VALUES
(123, '2022-08-30', 'sudesh shetty', 'sudeshshetty450@gmail.com', 'belman', 1825),
(124, '2022-09-01', 'sudhir', 'raosudhir2k1@gmail.com', 'padubidri', 878),
(125, '2022-09-01', 'vittal', 'vittalshenoy777@gmail.com', 'MULKI', 3468),
(126, '2022-09-01', 'nagaraj', 'harshirao17@gmail.com', 'mulki', 2176),
(127, '2022-09-05', 'user1', 'samisonu2000@gmail.com', 'mulki', 349),
(128, '2022-09-28', 'sudesh shetty', 'sudeshshetty450@gmail.com', 'belman', 8734),
(129, '2022-09-30', 'sudesh shetty', 'sudeshshetty450@gmail.com', 'kjhjhk', 229),
(130, '2022-12-06', 'preeti', 'preetipshetty01@gmail.com', 'belman', 439);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `invoice_id` int(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`invoice_id`, `p_name`, `p_price`, `quantity`, `total`) VALUES
(123, 'Vega Crux Black Helmet-M', 1156, 1, 1156),
(123, 'NGK Standard Spark Plug', 230, 1, 230),
(123, 'Castrol Power1 10W40 4T Semi Synthetic Engine Oil', 439, 1, 439),
(124, 'Castrol Power1 10W40 4T Semi Synthetic Engine Oil', 439, 1, 439),
(124, 'Castrol Power1 10W40 4T Semi Synthetic Engine Oil', 439, 1, 439),
(125, 'Vega Crux Black Helmet-M', 1156, 3, 3468),
(126, 'Vega Crux Black Helmet-M', 1156, 1, 1156),
(126, 'NGK Standard Spark Plug', 230, 1, 230),
(126, 'Motul C2 Chain Lube', 220, 1, 220),
(126, 'Castrol Power1 Ultimate 10W40 4T Synthetic Engine ', 570, 1, 570),
(127, 'NIKAVI SP01 Spark Plug', 120, 1, 120),
(127, 'Waxpol AP-3 Multipurpose Grease for vehicles', 229, 1, 229),
(128, 'Axor Apex Venomous Dull Black Gray Helmet-M', 4844, 1, 4844),
(128, 'Vega Off Road Black Silver Helmet', 1825, 2, 3650),
(128, 'NIKAVI SP01 Spark Plug', 120, 2, 240),
(129, 'Waxpol AP-3 Multipurpose Grease for vehicles', 229, 1, 229),
(130, 'Castrol Power1 10W40 4T Semi Synthetic Engine Oil', 439, 1, 439);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`invoice_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `invoice_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
