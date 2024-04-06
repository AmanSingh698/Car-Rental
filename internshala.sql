-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2024 at 06:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcar`
--

CREATE TABLE `addcar` (
  `model` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `capacity` int(50) NOT NULL,
  `rent` int(100) NOT NULL,
  `session_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addcar`
--

INSERT INTO `addcar` (`model`, `number`, `capacity`, `rent`, `session_name`) VALUES
('MK254', 'BR 01 CK 1234', 9, 800, 'deepak'),
('MN12368', 'BR 01 CK 2580', 4, 1500, 'deepak'),
('MN 255', 'BR 01 CK 2525', 5, 860, 'Aman');

-- --------------------------------------------------------

--
-- Table structure for table `agency_signup`
--

CREATE TABLE `agency_signup` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` text NOT NULL,
  `mobile` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agency_signup`
--

INSERT INTO `agency_signup` (`name`, `email`, `pwd`, `mobile`) VALUES
('Akriti', 'akriti@gmail.com', 'akriti', '2147483647'),
('Aman', 'aman@gmail.com', 'aman', '1234567890'),
('Cikoho Arora', 'cikoho5149@roborena.com', 'cikoho', '2147483647'),
('deepak', 'deepak@gmail.com', 'deepak', '2147483647'),
('Manish', 'manish@gmail.com', 'manish', '7004785930');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `name` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `day` int(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `session_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`name`, `mobile`, `day`, `destination`, `session_name`) VALUES
('Aman', 'mobile', 14, 'destination', 'Aman'),
('Aman', 'mobile', 14, 'destination', 'Aman'),
('Aman Kumar Singh', '5942384281', 13, 'Mussorie', 'Aman Kumar Singh'),
('Aman', '1234567890', 16, 'Mussorie', 'Aman');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `name` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `pwd` text NOT NULL,
  `mobile` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`name`, `email`, `pwd`, `mobile`) VALUES
('Aman', 'techiecrat5@gmail.com', 'aman', '1234567890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency_signup`
--
ALTER TABLE `agency_signup`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD UNIQUE KEY `email` (`email`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
