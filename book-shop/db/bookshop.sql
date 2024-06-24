-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2021 at 08:26 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `bookorder`
--

CREATE TABLE IF NOT EXISTS `bookorder` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `selluser` varchar(100) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `baddress` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `orderdate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bookorder`
--

INSERT INTO `bookorder` (`id`, `bookname`, `author`, `price`, `selluser`, `bname`, `mobile`, `email`, `baddress`, `qty`, `total`, `username`, `orderdate`) VALUES
(2, 'Why We Sleep', 'Matthew Walker ', '450', 'babu', 'Raja', '9498832696', 'raja@gmail.com', 'erode', '1', '450', 'raja', '02-04-2021 13:31'),
(3, 'The Intelligent Investor', 'Benjamin Graham', '580', 'babu', 'Raja', '7564545344', 'raja@gmail.com', 'erode', '2', '1160', 'raja', '02-04-2021 13:32');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `sno` int(100) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `sno`, `bookname`, `author`, `price`, `path`, `username`) VALUES
(1, 1, 'The Intelligent Investor', 'Benjamin Graham', '580', 'books/1.jpg', 'babu'),
(2, 2, 'Why We Sleep', 'Matthew Walker ', '450', 'books/2.jpg', 'babu');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE IF NOT EXISTS `buyer` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `bname` varchar(100) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `btype` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `bname`, `mobile`, `email`, `address`, `username`, `password`, `btype`) VALUES
(4, 'Raja', 9088776564, 'raja@gmail.com', 'Erode', 'raja', '123', 'Buyer');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `sname` varchar(100) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `stype` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `sname`, `mobile`, `email`, `address`, `username`, `password`, `stype`) VALUES
(1, 'Babu', 9080777544, 'babu@gmail.com', 'Erode', 'babu', '123', 'Seller');
