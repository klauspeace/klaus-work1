-- phpMyAdmin SQL Dump
-- version 10.1.13
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Generated on :  Wednesday January 17, 2018   15:39
-- Version of Server :  2.4.17
-- Version of PHP :  5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+01:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Data base :  `cyf4`
--

-- --------------------------------------------------------

--
-- Structure of the table `contact`
--

CREATE DATABASE `cyf4`;
USE `cyf4`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(10) NOT NULL AUTO_INCREMENT,
  `civility` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `adress` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ask` text NOT NULL,
  `newsletter` int(10) NOT NULL,
  `date_creation` datetime NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure of the table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id_mail` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL,
  PRIMARY KEY (`id_mail`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
