-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2016 at 10:34 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('nagaraj', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `login2`
--

CREATE TABLE IF NOT EXISTS `login2` (
  `token` char(60) NOT NULL,
  `user` varchar(200) NOT NULL,
  `password` char(120) NOT NULL,
  PRIMARY KEY (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login2`
--

INSERT INTO `login2` (`token`, `user`, `password`) VALUES
('370b9507162bb03d45f373903773b03316458f6e', 'mknagarajnaik35@gmail.com', '8147'),
('3877e1548ec122a9d6530aeec5bcb67f0d52eb49', 'mknagaraj@gmail.com', '81456'),
('3cac348e03e1b732976c1b6f851ad39422d068da', 'mknagarajnaik35@gmail.com', '814729'),
('6f2685dc94d5cefdae716510cbfc527018a5d68f', '', ''),
('7b068adb3a3297e356cf03a0d78ae6cc695c24bd', 'mknagarajnaik35@gmail.com', '8147'),
('8b19125218734358a2f21b24f457dc7699863d61', 'mknagaraj21@gmail.com', '4532'),
('8cdfd1a96a515e538587fb903ac1203b40b0113b', 'mknagaraj21@gmail.com', '9782');
