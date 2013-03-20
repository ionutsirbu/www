-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2013 at 04:24 AM
-- Server version: 5.1.66
-- PHP Version: 5.3.3-7+squeeze15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `description` varchar(100) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `description`) VALUES
(1, 'Inutz', 'A lu Inutz'),
(2, 'jean ', 'desc jean2'),
(3, 'Inutzs', 'A lu Inutzs'),
(4, 'Io5', 'A lu Inutzs4'),
(5, 'Io', 'A lu Io'),
(6, 'Io5', 'A lu Io5'),
(7, 'Io5', 'A lu Io5'),
(8, 'Io9', 'A lu Io9'),
(9, 'Io9', 'A lu Io9'),
(10, 'Io9', 'A lu Io9'),
(11, 'Io9', 'A lu Io9'),
(12, 'Io9', 'A lu Io9'),
(13, 'Io9', 'A lu Io9'),
(14, 'Io9', 'A lu Io9'),
(15, 'Io9', 'A lu Io9');
