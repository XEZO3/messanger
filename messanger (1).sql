-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 04:11 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `messanger`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `fromuser` varchar(255) NOT NULL,
  `touser` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `fromuser`, `touser`, `message`) VALUES
(1, 'ezaldeen', 'mohammed', 'hello noobs'),
(2, 'ezaldeen', 'mohammed', 'helloss noobs'),
(3, 'ezaldeen', 'mohammed', 'hi noobs'),
(4, 'mohammed', 'ezaldeen', 'me noobs'),
(5, 'mohammed', 'ezaldeen', 'my name is mohammed'),
(6, 'ezaldeen', 'alayed', 'hello alayed'),
(7, 'alayed', 'ezaldeen', 'hello ezaldeen'),
(8, 'ezaldeen', 'mohammed', 'my name is ezaldeen what is your name'),
(9, 'mohammed', 'ezaldeen', 'my name is mohammed'),
(10, 'ezaldeen', 'mohammed', 'my name is ezaldeen what is your name'),
(11, 'mohammed', 'ezaldeen', 'my name is mohammed'),
(12, 'mohammed', 'alayed', 'helo'),
(13, 'mohammed', 'alayed', 'hi'),
(14, 'mohammed', 'ezaldeen', 'nice noob'),
(15, 'ezaldeen', 'mohammed', 'hi'),
(16, 'mohammed', 'ezaldeen', 'hello'),
(17, 'ezaldeen', 'alayed', 'nice noob'),
(18, 'mohammed', 'ezaldeen', 'just noob'),
(19, 'mohammed', 'ezaldeen', 'nice noob'),
(20, 'mohammed', 'ezaldeen', 'hello'),
(21, 'alayed', 'mohammed', 'hhhh'),
(22, 'mohammed', 'alayed', 'hehehe'),
(23, 'mohammed', 'ezaldeen', 'هىيثحخقثمشغ'),
(24, 'mohammed', 'ezaldeen', 'المهم كيف الحال'),
(25, 'mohammed', 'ezaldeen', 'و الاحوال'),
(26, 'mohammed', 'alayed', 'هىيثحخقثمشغ'),
(27, 'mohammed', 'alayed', 'hehehe'),
(28, 'mohammed', 'alayed', ''),
(29, 'mohammed', 'alayed', ''),
(30, 'mohammed', 'alayed', ''),
(31, 'mohammed', 'alayed', ''),
(32, 'mohammed', 'alayed', 'just noob'),
(33, 'mohammed', 'alayed', 'sdfsdf'),
(34, 'mohammed', 'alayed', 'sdfsdf'),
(35, 'mohammed', 'alayed', 'sdfsdf'),
(36, 'mohammed', 'alayed', 'sdfsdf'),
(37, 'mohammed', 'alayed', 'sdfsdf'),
(38, 'mohammed', 'alayed', '7777777777'),
(39, 'mohammed', 'alayed', 'sdfsdf'),
(40, 'mohammed', 'alayed', 'mansaf'),
(41, 'mohammed', 'alayed', 'ffff'),
(42, 'mohammed', 'ezaldeen', 'عبرنا يا مدمرنااا'),
(43, 'mohammed', 'ezaldeen', ',,,,,,,,,,,,,,'),
(44, 'mohammed', 'ezaldeen', 'هههخخخخخخخخخخخخخخ'),
(45, 'mohammed', 'ezaldeen', 'hehehe');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `pic`) VALUES
(1, 'ezaldeen', '123', ''),
(2, 'mohammed', '123', ''),
(3, 'alayed', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fromuser` (`fromuser`),
  ADD KEY `touser` (`touser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
