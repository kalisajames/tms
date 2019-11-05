-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2019 at 07:30 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `position`, `role`) VALUES
(1, 'mushishi', 'web developer', 'client'),
(2, 'manzi', 'ios developer', 'client'),
(3, 'vector', 'android developer', 'client'),
(4, 'alexandrine', 'web developer', 'client'),
(5, 'james', 'mobile web developer,android developer', 'client'),
(6, 'ntwari', 'cloud expert', 'client'),
(7, 'mugeni', 'android developer', 'client'),
(8, 'kazungu', 'iot expert', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) NOT NULL,
  `task` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `status` varchar(200) NOT NULL,
  `client` varchar(200) NOT NULL,
  `priority` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task`, `category`, `startdate`, `enddate`, `status`, `client`, `priority`) VALUES
(1, 'mobile development', 'ios', '2019-10-17', '2019-10-27', 'completed', 'manzi', '78%'),
(2, 'develop web for student', 'web design', '2019-10-12', '2019-10-26', 'Doing', 'mushishi', '67%'),
(3, 'car gps navigation ', 'android', '2019-10-31', '2019-11-14', 'Todo', 'vector', '100%'),
(6, 'client service portal', 'web design', '2019-10-04', '2019-10-11', 'Doing', 'mushishi', '40%'),
(8, 'IoT Based Weather Reporting System.', 'Iot', '2019-10-05', '2019-10-31', 'Doing', 'kazungu', '50%'),
(9, 'Touch-Based Home Automation System.', 'Iot', '2019-10-31', '2019-12-15', 'Todo', 'kazungu', '50%'),
(11, 'Android Women Safety App', 'android', '2019-10-31', '2019-11-20', 'Doing', 'james', '70%'),
(12, 'Restaurant Table Booking Android Application', 'android', '2019-12-27', '2020-01-20', 'Todo', 'james', '50%'),
(13, ' Child Monitoring System App', 'android', '2020-01-24', '2020-02-06', 'Todo', 'james', '40%'),
(14, 'hotel booking web app', 'web design', '2020-04-02', '2020-05-02', 'Todo', 'james', '10%'),
(15, 'A weight tracker app', 'web design', '2019-10-05', '2019-10-13', 'completed', 'james', '70%');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'manzi', 'fred', 'manzifred13@gmail.com', 'f9ffaabbfc2bc902ba5adb1f3b5812db');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
