-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2016 at 07:16 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_park`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE IF NOT EXISTS `customer_details` (
  `carno` int(10) NOT NULL,
  `telno` bigint(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE IF NOT EXISTS `login_details` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`username`, `password`) VALUES
('admin', '827ccb0eea8a706c4c34'),
('admin', '827ccb0eea8a706c4c34'),
('admin', '827ccb0eea8a706c4c34'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('admin', '827ccb0eea8a706c4c34'),
('admin', '827ccb0eea8a706c4c34'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('admin', '827ccb0eea8a706c4c34'),
('admin', '827ccb0eea8a706c4c34'),
('admin', '827ccb0eea8a706c4c34'),
('admin', '827ccb0eea8a706c4c34'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('', 'd41d8cd98f00b204e980'),
('user', 'pass'),
('admin', '827ccb0eea8a706c4c34');
