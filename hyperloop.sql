-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 02:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hyperloop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `car` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `car`) VALUES
(1, 'BKC'),
(2, 'NAVI MUMBAI'),
(4, 'PUNE');

-- --------------------------------------------------------

--
-- Table structure for table `category2`
--

CREATE TABLE `category2` (
  `id` int(255) NOT NULL,
  `car` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category2`
--

INSERT INTO `category2` (`id`, `car`) VALUES
(1, 'BKC'),
(2, 'NAVI MUMBAI'),
(4, 'PUNE');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `first_name` varchar(100) NOT NULL,
  `last_name` int(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`first_name`, `last_name`, `address`, `email`) VALUES
('', 0, 'A-103,  Neels Lake View, Plot-20, Sector-06, Khanda Colony, New Panvel-West, ', 'kulkarrni.vithi@gmail.com'),
('vt', 11, 'please', 'work'),
('chrisitne', 2147483647, 'nice', 'chris@gmail.com'),
('', 0, '', ''),
('', 0, '', ''),
('', 0, '', ''),
('', 0, '', ''),
('vithi', 2147483647, 'amaizng', 'kulkarrni.vithi@gmail.com'),
('Vithi Kulkarni', 936094407, 'amazing', 'kulkarni.vithi@gmail.com'),
('vithi', 93999999, 'amazing', 'kulkarni.vithi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `opusers`
--

CREATE TABLE `opusers` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opusers`
--

INSERT INTO `opusers` (`id`, `user_id`, `user_name`, `e_mail`, `password`, `date`) VALUES
(11, 800410087, 'vithikul', '', 'ff', '2022-01-22 15:35:25'),
(13, 4527333140890, 'srushti', '', 'srush', '2022-01-25 16:33:11'),
(14, 834447767949, 'srushti', '', 'srush', '2022-01-25 17:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `tfeedback`
--

CREATE TABLE `tfeedback` (
  `user_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `e_mail`, `password`, `date`) VALUES
(14, 23653028123828005, 'chris', 'kulkarni.vithi@gmail.com', 'vt', '2022-01-22 14:38:36'),
(15, 32095, 'srush', 'kulkarni.vithi@gmail.com', 'vt', '2022-01-22 14:39:08'),
(21, 5993543248576575080, 'vithi kulkarni', 'kulkarni.vithi@gmail.com', 'kirti', '2022-01-25 12:56:26'),
(22, 123073775865330, 'vithi kulkarni', 'kulkarni.vithi@gmail.com', 'kirti', '2022-01-25 13:29:38'),
(26, 6038746610953132337, 'Christine', 'kulkarni.vithi@gmail.com', 'chris', '2022-01-25 16:25:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `opusers`
--
ALTER TABLE `opusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `opusers`
--
ALTER TABLE `opusers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
