-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2013 at 01:34 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `name` varchar(50) NOT NULL,
  `bank` text NOT NULL,
  `accountnum` varchar(25) NOT NULL,
  `pin` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`name`, `bank`, `accountnum`, `pin`, `amount`) VALUES
('Deepak', 'SBI', '10511103333', 105111033, 4300),
('Vikas', 'ICICI', '10511101111', 105111011, 5625);

-- --------------------------------------------------------

--
-- Table structure for table `canteen`
--

CREATE TABLE IF NOT EXISTS `canteen` (
  `name` varchar(50) NOT NULL,
  `sales` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `canteen`
--

INSERT INTO `canteen` (`name`, `sales`) VALUES
('Meenakshi', 520),
('Buhari', 385),
('Vasantham', 170);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `feed` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user`, `feed`, `time`) VALUES
(6, '205112011', 'Service is Good', '2013-10-22 11:33:56'),
(5, '205112033', 'Service is Excellent', '2013-10-22 11:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `canteen` text NOT NULL,
  `rollno` int(11) NOT NULL,
  `items` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `amount` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`canteen`, `rollno`, `items`, `name`, `address`, `amount`, `time`) VALUES
('Meenakshi', 205112011, 'soup,aloo paratha,pbm,veg rice,sprite 1l', 'Vikas', 'Aquamarine - A Room No- 60', 205, '2013-10-22 16:50:17'),
('Meenakshi', 205112011, 'soup,veg noodels,butter nan,gobi masala,sprite 500ml,', 'Deepak', 'Pearl Room No - 24', 170, '2013-10-22 16:54:04'),
('Buhari', 205112011, 'veg noodels,aloo paratha,pbm,coke 1l,', 'Vikas', 'Ruby Hostel Room No-25', 170, '2013-10-22 16:55:30'),
('Vasantham', 205112033, 'soup,veg noodels,butter nan,gobi masala,coke 500ml,', 'Deepak', 'Zircon hostel', 170, '2013-10-22 16:59:22'),
('Meenakshi', 205112033, 'soup,aloo paratha,pbm,coke 1l,', 'Deepak', 'Aquamarine A\r\n', 145, '2013-10-22 17:00:08'),
('Buhari', 205112033, 'soup,veg noodels,aloo paratha,butter nan,gobi masala,sprite 1l', 'Deepak', 'Garnet C\r\n', 215, '2013-10-22 17:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `role`) VALUES
('205112011', '11749eb9160710bdaae4a2edc065283d51ddcea6', 1),
('205112033', 'd11186354d1ef01ca06ae37d7e23e827da13e85f', 1),
('Buhari', 'e5c52b3c75ac4f1dfbee8ec994b696f6a83c6c51', 2),
('Meenakshi', 'a00b5290e740808a3f0be68a8468a3d08ec7abea', 2),
('Vasantham', '25e6994ebc53d40034b50331942e4255256b96bc', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
