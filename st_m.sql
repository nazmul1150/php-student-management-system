-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2018 at 01:59 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `st_m`
--

-- --------------------------------------------------------

--
-- Table structure for table `s_id`
--

DROP TABLE IF EXISTS `s_id`;
CREATE TABLE IF NOT EXISTS `s_id` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `roll` int(20) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `img` text NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_id`
--

INSERT INTO `s_id` (`id`, `name`, `roll`, `f_name`, `m_name`, `img`, `class`) VALUES
(14, 'nazmul', 20, 'mnkj', 'jbjkddj', 'esaba.png', '2'),
(13, 'nazmul', 5200, 'mnkj', 'rrrrrrrrrrrrr', '6.jpg', '1'),
(12, 'hkj', 100, 'rtrgj', 'rrrrrrrrrrrrrj', '1.png', '3'),
(11, 'nazmul', 20, 'mnkj', 'jbjkddj', '8.jpg', '4'),
(16, 'hk', 455, 'mnkj', 'rrrrrrrrrrrrr', '3.jpg', '5');

-- --------------------------------------------------------

--
-- Table structure for table `user_id`
--

DROP TABLE IF EXISTS `user_id`;
CREATE TABLE IF NOT EXISTS `user_id` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_id`
--

INSERT INTO `user_id` (`id`, `email`, `password`) VALUES
(1, 'e2ced63a1896a28aed7bc10067ef31ac', 'ed77f311f801f2d976c3392791863d18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
