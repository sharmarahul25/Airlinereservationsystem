-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2011 at 02:57 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `airlines`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `userid` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`userid`, `balance`) VALUES
(4, 45),
(59, 450),
(2, 550);

-- --------------------------------------------------------

--
-- Table structure for table `cancelled`
--

CREATE TABLE IF NOT EXISTS `cancelled` (
  `flightno` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `seatno` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancelled`
--

INSERT INTO `cancelled` (`flightno`, `date`, `seatno`) VALUES
('king', '2011-09-22', 11);

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE IF NOT EXISTS `confirm` (
  `ticketid` int(11) NOT NULL AUTO_INCREMENT,
  `pnr` int(11) NOT NULL,
  `seatno` int(11) NOT NULL,
  `flightno` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(25) NOT NULL,
  `userid` int(11) NOT NULL,
  `fare` int(11) NOT NULL,
  PRIMARY KEY (`ticketid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `confirm`
--

INSERT INTO `confirm` (`ticketid`, `pnr`, `seatno`, `flightno`, `date`, `name`, `userid`, `fare`) VALUES
(1, 5, 55, 'king', '2011-09-22', 'archit', 0, 0),
(2, 5, 56, 'king', '2011-09-22', 'kushagraa', 0, 0),
(3, 6, 33, 'king', '2011-09-22', 'arjun', 2, 300),
(67, 6, 56, 'king', '2011-09-22', '0', 2, 350),
(68, 6, 56, 'king', '2011-09-22', '0', 2, 350),
(69, 6, 56, 'king', '2011-09-22', '0', 0, 350),
(70, 6, 56, 'king', '2011-09-22', '0', 2, 350),
(71, 6, 56, 'king', '2011-09-22', '0', 2, 350),
(72, 6, 56, 'king', '2011-09-22', '0', 2, 350),
(73, 6, 56, 'king', '2011-09-22', '0', 2, 350),
(74, 6, 56, 'king', '2011-09-22', '0', 2, 350),
(75, 7, 56, 'king', '2011-09-22', '0', 2, 350),
(76, 8, 56, 'king', '2011-09-22', '0', 2, 350),
(77, 9, 56, 'king', '2011-09-22', '0', 0, 350),
(78, 10, 56, 'king', '2011-09-22', '0', 2, 350),
(79, 11, 56, 'king', '2011-09-22', '0', 2, 350),
(80, 12, 56, 'king', '2011-09-22', 'archie0', 2, 350),
(81, 13, 56, 'king', '2011-09-22', 'name0', 2, 350),
(82, 14, 56, 'king', '2011-09-22', '', 2, 350),
(83, 15, 56, 'king', '2011-09-22', '', 2, 350),
(84, 16, 56, 'king', '2011-09-22', 'name0', 2, 350);

-- --------------------------------------------------------

--
-- Table structure for table `flightdetails`
--

CREATE TABLE IF NOT EXISTS `flightdetails` (
  `flightno` varchar(4) NOT NULL,
  `source` varchar(10) NOT NULL,
  `destination` varchar(10) NOT NULL,
  `maxseats` int(3) NOT NULL,
  `departure` time NOT NULL,
  `arrival` time NOT NULL,
  `fare` int(5) NOT NULL,
  PRIMARY KEY (`flightno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flightdetails`
--

INSERT INTO `flightdetails` (`flightno`, `source`, `destination`, `maxseats`, `departure`, `arrival`, `fare`) VALUES
('a11', 'ajmer', 'delhi', 60, '15:30:00', '18:30:00', 300),
('king', 'jaipur', 'mumbai', 120, '15:00:00', '13:50:00', 350),
('a34', 'kolkata', 'ajmer', 120, '13:40:00', '15:40:00', 400),
('a12', 'jaipur', 'mumbai', 90, '13:50:00', '15:50:00', 550),
('a13', 'delhi', 'ajmer', 90, '15:58:00', '17:40:00', 300);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `pnr` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `age` int(11) NOT NULL,
  `source` varchar(15) NOT NULL,
  `detsination` varchar(15) NOT NULL,
  `flightno` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `userid` int(11) NOT NULL,
  `seatno` int(11) NOT NULL,
  PRIMARY KEY (`pnr`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=246 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`pnr`, `name`, `sex`, `age`, `source`, `detsination`, `flightno`, `date`, `userid`, `seatno`) VALUES
(134, 'adgsd', 'male', 12, 'jaipur', 'mumbai', 'a12', '2011-09-12', 1, 34),
(101, 'kushagra', 'male', 65, 'jaipur', 'mumbai', 'a12', '2011-09-09', 11, 21),
(245, 'archit', 'male', 23, 'jaipur', 'mumbai', 'a12', '2011-09-12', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` char(1) NOT NULL,
  `securityquestion` varchar(20) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `password`, `gender`, `securityquestion`) VALUES
(3, 'xyzs', 'gfd', 'm', 'ramona'),
(2, 'architmah', 'arma', 'm', 'hello'),
(33, 'abc', 'def', 'm', 'hello'),
(5, '', '', '', ''),
(4, 'arc', 'hit', 'm', 'abcdef'),
(34, 'pushpendra', 'krishna', 'm', 'krishna');

-- --------------------------------------------------------

--
-- Table structure for table `waiting`
--

CREATE TABLE IF NOT EXISTS `waiting` (
  `ticketid` int(11) NOT NULL,
  `pnr` int(11) NOT NULL,
  `flightno` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `waitno` varchar(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `fare` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`ticketid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waiting`
--

INSERT INTO `waiting` (`ticketid`, `pnr`, `flightno`, `date`, `waitno`, `name`, `fare`, `userid`) VALUES
(66, 5, 'king', '2011-09-23', 'w133', 'rahul', 0, 0),
(4, 5, 'a12', '2011-09-23', '54', 'ajab', 30000, 4);
