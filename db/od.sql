-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 03, 2018 at 02:10 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `od`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `user_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `cover` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`user_id`, `cover`) VALUES
(0000000019, 'TH_event_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

DROP TABLE IF EXISTS `login_user`;
CREATE TABLE IF NOT EXISTS `login_user` (
  `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ip` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`user_id`, `username`, `password`, `ip`) VALUES
(1, 'od', 'od', '');

-- --------------------------------------------------------

--
-- Table structure for table `od_events`
--

DROP TABLE IF EXISTS `od_events`;
CREATE TABLE IF NOT EXISTS `od_events` (
  `event_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `event_head` varchar(100) NOT NULL,
  `event_date` varchar(10) NOT NULL,
  `event_time` varchar(10) NOT NULL,
  `event_venues` varchar(100) NOT NULL,
  `event_details` text NOT NULL,
  `event_cover` varchar(100) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `od_events`
--

INSERT INTO `od_events` (`event_id`, `event_head`, `event_date`, `event_time`, `event_venues`, `event_details`, `event_cover`) VALUES
(1, 'ORGAN DONATION', '2018-04-05', '00:30', 'Fanshawe College, London', 'Please attend our event.', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
