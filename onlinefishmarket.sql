-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2021 at 11:05 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinefishmarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE IF NOT EXISTS `details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `weight` int(11) NOT NULL,
  `public` varchar(11) NOT NULL,
  `uploadedtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedtime` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `name`, `weight`, `public`, `uploadedtime`, `updatedtime`) VALUES
(6, 'rahu', 45, 'yes', '2021-06-06 16:45:04', '2021-06-06 21:45:04'),
(4, 'trout', 23, 'no', '2021-06-06 16:36:48', '2021-06-07 14:13:30'),
(5, 'star', 2, 'no', '2021-06-06 16:37:01', '2021-06-06 17:44:20'),
(7, 'blue', 23, 'yes', '2021-06-06 17:36:01', '2021-06-07 14:15:14'),
(12, 'gold', 100, 'yes', '2021-06-09 10:03:17', '2021-06-09 15:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'salman', 'salman'),
(2, 'akram', 'akram'),
(3, 'ali', 'ali'),
(4, 'salman', 'salman'),
(5, 'arslan', 'arslan'),
(6, 'asif', 'asif'),
(7, 'asif', 'asif'),
(8, 'asif', 'asif'),
(9, 'asif', 'asif'),
(10, 'asif', 'asif'),
(11, 'asif', 'asif'),
(12, 'salman', 'salman'),
(13, 'farhan', 'farhan'),
(14, 'umar', 'umar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
