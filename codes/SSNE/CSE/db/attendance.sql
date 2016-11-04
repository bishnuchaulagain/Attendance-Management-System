-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2015 at 06:55 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `a1`
--

CREATE TABLE IF NOT EXISTS `a1` (
  `id` varchar(16) NOT NULL,
  `sem` varchar(13) NOT NULL,
  `day` date NOT NULL,
  `atten` varchar(4) NOT NULL,
  `fac` varchar(82) NOT NULL,
  `sec` varchar(6) NOT NULL,
  `per` int(11) NOT NULL,
  `sname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `a2`
--

CREATE TABLE IF NOT EXISTS `a2` (
  `id` varchar(16) NOT NULL,
  `sem` varchar(13) NOT NULL,
  `day` date NOT NULL,
  `atten` varchar(4) NOT NULL,
  `fac` varchar(82) NOT NULL,
  `sec` varchar(6) NOT NULL,
  `per` int(11) NOT NULL,
  `sname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `a3`
--

CREATE TABLE IF NOT EXISTS `a3` (
  `id` varchar(16) NOT NULL,
  `sem` varchar(13) NOT NULL,
  `day` date NOT NULL,
  `atten` varchar(4) NOT NULL,
  `fac` varchar(82) NOT NULL,
  `sec` varchar(6) NOT NULL,
  `per` int(11) NOT NULL,
  `sname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `a4`
--

CREATE TABLE IF NOT EXISTS `a4` (
  `id` varchar(16) NOT NULL,
  `sem` varchar(13) NOT NULL,
  `day` date NOT NULL,
  `atten` varchar(4) NOT NULL,
  `fac` varchar(82) NOT NULL,
  `sec` varchar(6) NOT NULL,
  `per` int(11) NOT NULL,
  `sname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `a5`
--

CREATE TABLE IF NOT EXISTS `a5` (
  `id` varchar(16) NOT NULL,
  `sem` varchar(13) NOT NULL,
  `day` date NOT NULL,
  `atten` varchar(4) NOT NULL,
  `fac` varchar(82) NOT NULL,
  `sec` varchar(6) NOT NULL,
  `per` int(11) NOT NULL,
  `sname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `a6`
--

CREATE TABLE IF NOT EXISTS `a6` (
  `id` varchar(16) NOT NULL,
  `sem` varchar(13) NOT NULL,
  `day` date NOT NULL,
  `atten` varchar(4) NOT NULL,
  `fac` varchar(82) NOT NULL,
  `sec` varchar(6) NOT NULL,
  `per` int(11) NOT NULL,
  `sname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `a7`
--

CREATE TABLE IF NOT EXISTS `a7` (
  `id` varchar(16) NOT NULL,
  `sem` varchar(13) NOT NULL,
  `day` date NOT NULL,
  `atten` varchar(4) NOT NULL,
  `fac` varchar(82) NOT NULL,
  `sec` varchar(6) NOT NULL,
  `per` int(11) NOT NULL,
  `sname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `a8`
--

CREATE TABLE IF NOT EXISTS `a8` (
  `id` varchar(16) NOT NULL,
  `sem` varchar(13) NOT NULL,
  `day` date NOT NULL,
  `atten` varchar(4) NOT NULL,
  `fac` varchar(82) NOT NULL,
  `sec` varchar(6) NOT NULL,
  `per` int(11) NOT NULL,
  `sname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE IF NOT EXISTS `designation` (
  `did_id` int(11) NOT NULL,
  `designation` varchar(32) NOT NULL,
  UNIQUE KEY `did_id` (`did_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dummey`
--

CREATE TABLE IF NOT EXISTS `dummey` (
  `id` varchar(16) NOT NULL,
  `sem` varchar(13) NOT NULL,
  `day` date NOT NULL,
  `atten` varchar(4) NOT NULL,
  `fac` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummey`
--

INSERT INTO `dummey` (`id`, `sem`, `day`, `atten`, `fac`) VALUES
('117X1A0501', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0502', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0503', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0504', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0505', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0506', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0507', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0508', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0509', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0510', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0511', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0512', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0513', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0514', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0515', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0516', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0517', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0518', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0519', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0520', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0521', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0522', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0523', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0524', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0525', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0526', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0527', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0528', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0529', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0530', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0531', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0532', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0533', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0534', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0535', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0536', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0537', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0538', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0539', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0540', 'I-I', '2014-12-10', '1', 'A SUMAN'),
('117X1A0541', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0542', 'I-I', '2014-12-10', '0', 'A SUMAN'),
('117X1A0501', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0502', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0503', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0504', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0505', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0506', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0507', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0508', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0509', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0510', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0511', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0512', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0513', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0514', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0515', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0516', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0517', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0518', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0519', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0520', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0521', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0522', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0523', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0524', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0525', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0526', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0527', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0528', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0529', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0530', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0531', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0532', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0533', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0534', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0535', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0536', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0537', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0538', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0539', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0540', 'I-I', '2014-12-10', '1', 'B SAMPATH'),
('117X1A0541', 'I-I', '2014-12-10', '0', 'B SAMPATH'),
('117X1A0542', 'I-I', '2014-12-10', '0', 'B SAMPATH');

-- --------------------------------------------------------

--
-- Table structure for table `facsub`
--

CREATE TABLE IF NOT EXISTS `facsub` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(40) NOT NULL,
  `subjects` varchar(100) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `sec` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `name` varchar(82) NOT NULL,
  `yr` varchar(12) NOT NULL,
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s1`
--

CREATE TABLE IF NOT EXISTS `s1` (
  `sname` varchar(40) NOT NULL,
  `id` varchar(16) NOT NULL,
  `sem` varchar(10) NOT NULL DEFAULT 'I-I',
  `detained` int(11) NOT NULL DEFAULT '0',
  `sec` varchar(6) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s2`
--

CREATE TABLE IF NOT EXISTS `s2` (
  `sname` varchar(40) NOT NULL,
  `id` varchar(16) NOT NULL,
  `sem` varchar(10) NOT NULL DEFAULT 'I-II',
  `detained` int(11) NOT NULL DEFAULT '0',
  `sec` varchar(6) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s3`
--

CREATE TABLE IF NOT EXISTS `s3` (
  `sname` varchar(40) NOT NULL,
  `id` varchar(16) NOT NULL,
  `sem` varchar(10) NOT NULL DEFAULT 'II-I',
  `detained` int(11) NOT NULL DEFAULT '0',
  `sec` varchar(6) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s4`
--

CREATE TABLE IF NOT EXISTS `s4` (
  `id` varchar(16) NOT NULL,
  `sem` varchar(10) NOT NULL DEFAULT 'II-II',
  `detained` int(11) NOT NULL DEFAULT '0',
  `sec` varchar(6) NOT NULL,
  `sname` varchar(40) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s5`
--

CREATE TABLE IF NOT EXISTS `s5` (
  `id` varchar(16) NOT NULL,
  `sem` varchar(10) NOT NULL DEFAULT 'III-I',
  `detained` int(11) NOT NULL DEFAULT '0',
  `sec` varchar(6) NOT NULL,
  `sname` varchar(40) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s6`
--

CREATE TABLE IF NOT EXISTS `s6` (
  `id` varchar(16) NOT NULL,
  `sem` varchar(10) NOT NULL DEFAULT 'III-II',
  `detained` int(11) NOT NULL DEFAULT '0',
  `sec` varchar(6) NOT NULL,
  `sname` varchar(40) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s7`
--

CREATE TABLE IF NOT EXISTS `s7` (
  `id` varchar(16) NOT NULL,
  `sem` varchar(10) NOT NULL DEFAULT 'IV-I',
  `detained` int(11) NOT NULL DEFAULT '0',
  `sec` varchar(6) NOT NULL,
  `sname` varchar(40) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s8`
--

CREATE TABLE IF NOT EXISTS `s8` (
  `id` varchar(16) NOT NULL,
  `sem` varchar(10) NOT NULL DEFAULT 'IV-II',
  `detained` int(11) NOT NULL DEFAULT '0',
  `sec` varchar(6) NOT NULL,
  `sname` varchar(40) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `day` varchar(20) NOT NULL,
  `per1` varchar(40) NOT NULL,
  `per2` varchar(40) NOT NULL,
  `per3` varchar(40) NOT NULL,
  `per4` varchar(40) NOT NULL,
  `per5` varchar(40) NOT NULL,
  `per6` varchar(40) NOT NULL,
  `per7` varchar(40) NOT NULL,
  `year` varchar(12) NOT NULL,
  `sec` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `did` int(4) NOT NULL,
  `fname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
