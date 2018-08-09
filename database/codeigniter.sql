-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2018 at 06:03 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `sex`, `username`, `password`, `mobile`, `address`, `email`, `designation`, `image`) VALUES
(182, 'Albert Newsen', 'male', 'manager', 'manager', '+89-9856-55', 'Berlin, Germany', 'albert@gmail.com', 'Developer', ''),
(183, 'Richmond Hel', 'male', 'admin', 'admin', '+87-85742-365', 'DC, Lane , WX/123', 'hel.343@hotmail.com', 'admin', ''),
(185, 'Alicia Kristens', 'Female', 'alicia453', '123', 'alicia453', 'New Jersys', 'alicia.pm@gmail.coms', 'Project Manager', 'dome.jpg'),
(216, 'Kibria Hossen', 'female', 'dsfsdf', '', 'dsfsdf', 'New Jersy', 'abcd@def.com', 'Assistant', 'logo_3.png'),
(218, 'Kibria Hossen', 'female', 'stuff', 'stuff', 'dsfsdf', 'New Jersy', 'abcd@def.com', 'Assistant', 'logo_3.png'),
(219, 'Albert Newsen', 'male', '', '', '+89-9856-55', 'Berlin, Germany', 'albert@gmail.com', 'Developer', ''),
(220, 'Calvin Pr', 'male', 'calvin123', '0', '+1-5874-522', 'California', 'calvin.pr@gmail.com', 'General Manageer', ''),
(221, 'Alicia Kristens', 'Female', 'alicia453', '123', 'alicia453', 'New Jersys', 'alicia.pm@gmail.coms', 'Project Manager', 'dome.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
