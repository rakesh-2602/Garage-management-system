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
-- Database: `logindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `feedback_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacktable`
--

INSERT INTO `feedbacktable` (`feedback_id`, `name`, `email`, `contact_no`, `message`) VALUES
(20, 'sudesh shetty', 'sudeshshetty450@gmail.com', 6360356790, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

CREATE TABLE `registered_user` (
  `id` int(100) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(256) NOT NULL,
  `picture` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`id`, `username`, `email`, `password`, `picture`) VALUES
(11, 'sudesh shetty', 'sudeshshetty450@gmail.com', '$2y$10$J3t.8R2lNkhecnJ7Xuzk4ugFu3ccutQaXhLHWZzCO3Hb8OqUmwW6S', 'profile/SAVE_20220706_093709.jpg'),
(15, 'Sudhir Rao', 'raosudhir2k1@gmail.com', '$2y$10$2q34TJ3NMoHqh.lLOgnwZek98nWgyizuyh.tARqVe6h7soJRLJKhm', 'profile/sudhir.jpg'),
(17, 'Vittal', 'vittalshenoy777@gmail.com', '$2y$10$OSBn5WBVTmPnB4xh1iunIOkd.jjrExmkijmYFpacBWXpb8E.4/.wi', 'profile/vittal2.JPG'),
(18, 'sss', 'sudeshshetty213@gmail.com', '$2y$10$FV8ikr80IpBHLTp2szNYZ.b8x5IEHboUkjHLO/tCi1CGfY2HsdNeG', 'profile/SAVE_20220706_093709.jpg'),
(21, 'Nagaraj', 'knagarajrao76@gmail.com', '$2y$10$rIB0f6pBl.PJwAjeEyUWw.u1khnKzy8oxRDF.lUnshqUaT7JVBzcW', 'profile/SAVE_20220706_093709.jpg'),
(23, 'user2', 'tejupujari2001@gmail.com', '$2y$10$G0bmq7Ou9Sphq2vMP78acuu.9qmZG86mvbCB1KQEcp4ckbAt7lhrm', 'profile/SAVE_20220706_093709.jpg'),
(24, 'shreya', 'shreyashetty008@gmail.com', '$2y$10$XSc9UYtqQDCm2/7hOZJIdu94fzfJspeVFx9fuhntewZroCzgtLCb.', 'profile/SAVE_20220706_093709.jpg'),
(25, 'preethi', 'preetipshetty01@gmail.com', '$2y$10$e6K3C4LuHGQAFE9P40Ani.oPSPzpoHqCdKdbnXr9OqbIUmpiCeK8G', 'profile/SAVE_20220706_091931.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `registered_user`
--
ALTER TABLE `registered_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  MODIFY `feedback_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `registered_user`
--
ALTER TABLE `registered_user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
