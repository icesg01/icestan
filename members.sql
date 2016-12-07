-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2016 at 10:05 PM
-- Server version: 5.1.47
-- PHP Version: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sice`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` char(60) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `salt` varchar(255) NOT NULL,
  `countSlots` int(11) NOT NULL,
  `teamColor` varchar(7) NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `salt`, `countSlots`, `teamColor`, `approved`) VALUES
(1, 'Team1', '$1$sfU6263X$s.OnaZJgr181Y.iqL0bXA0', 'sfU6263XKQBGrvU778cKXA==', 0, 'red', 1),
(2, 'Team2', '$1$clRT8/o-$4Auc8R.XvsJDlzSqiSxbM.', 'clRT8/o-SL6YWQ570uHX-A==', 0, 'brown', 1),
(3, 'Team3', '$1$YRLmye6a$.H3ncgvXiVuiA75WuGOZc/', 'YRLmye6aJl9nJ-Qkr54iYg==', 0, 'gold', 1),
(4, 'Team4', '$1$K/04QP0z$orirQ1KNzQIvs8GjHcuNL1', 'K/04QP0zw/ItRiiddQxHPw==', 0, 'green', 1),
(5, 'Team5', '$1$TjqG105T$QCPRWT5ddoA6mQ99aObwd/', 'TjqG105TP4uEpxpwpMhpeQ==', 0, 'orange', 1),
(6, 'Team6', '$1$eUviXAFj$bRCyhejQHJKxgXZTKc5ho1', 'eUviXAFjh8Im4vqcUqYGnw==', 0, 'purple', 1),
(7, 'Team7', '$1$DdsTa1i2$rjNQfPdcgB/gw0JDpTtP50', 'DdsTa1i2S9v2nWqF78WW4Q==', 0, 'magenta', 1),
(8, 'Team8', '$1$izkMjHmm$7xhOw.F6MFEgcIvDZNrPp/', 'izkMjHmmTs5/4FJM79-wHA==', 0, 'lime', 1);
