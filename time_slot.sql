-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2016 at 11:46 PM
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
-- Table structure for table `time_slot`
--

CREATE TABLE IF NOT EXISTS `time_slot` (
  `id` text NOT NULL,
  `name` text NOT NULL,
  `color` text NOT NULL,
  `timesselected` text NOT NULL,
  `taken` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_slot`
--

INSERT INTO `time_slot` (`id`, `name`, `color`, `timesselected`, `taken`) VALUES
('Tuesday7', 'Team3', 'gold', '5:00pm - 6:00pm', 1),
('Friday3', 'Team3', 'gold', '11:00am - 12:00pm', 1),
('Friday0', 'Team3', 'gold', '8:00am - 9:00am', 1),
('Friday2', 'Team3', 'gold', '10:00am - 11:00am', 1),
('Thursday7', 'Team5', 'orange', '5:00pm - 6:00pm', 1),
('Thursday1', 'Team3', 'gold', '9:00am - 10:00am', 1),
('Wednesday0', 'Team3', 'gold', '8:00am - 9:00am', 1),
('Wednesday4', 'Team3', 'gold', '1:00pm - 2:00pm', 1),
('Friday4', 'Team3', 'gold', '1:00pm - 2:00pm', 1),
('Friday7', 'Team3', 'gold', '5:00pm - 6:00pm', 1),
('Tuesday4', 'Team3', 'gold', '1:00pm - 2:00pm', 1),
('Tuesday0', 'Team1', 'red', '8:00am - 9:00am', 1),
('Monday2', 'Team1', 'red', '10:00am - 11:00am', 1),
('Wednesday2', 'Team8', 'lime', '10:00am - 11:00am', 1),
('Wednesday3', 'Team8', 'lime', '11:00am - 12:00pm', 1),
('Tuesday2', 'Team8', 'lime', '10:00am - 11:00am', 1),
('Tuesday3', 'Team8', 'lime', '11:00am - 12:00pm', 1),
('Friday1', 'Team3', 'gold', '9:00am - 10:00am', 1),
('Thursday2', 'Team3', 'gold', '10:00am - 11:00am', 1),
('Thursday6', 'Team5', 'orange', '3:00pm - 4:00pm', 1),
('Monday6', 'Team5', 'orange', '3:00pm - 4:00pm', 1),
('Monday5', 'Team5', 'orange', '2:00pm - 3:00pm', 1),
('Friday6', 'Team4', 'green', '3:00pm - 4:00pm', 1),
('Friday5', 'Team4', 'green', '2:00pm - 3:00pm', 1),
('Thursday4', 'Team4', 'green', '1:00pm - 2:00pm', 1),
('Thursday3', 'Team4', 'green', '11:00am - 12:00pm', 1),
('Monday7', 'Team3', 'gold', '5:00pm - 6:00pm', 1),
('Monday4', 'Team3', 'gold', '1:00pm - 2:00pm', 1),
('', '', '', '', 1),
('Tuesday1', 'Team1', 'red', '9:00am - 10:00am', 1),
('Monday1', 'Team1', 'red', '9:00am - 10:00am', 1),
('Monday0', 'Team1', 'red', '8:00am - 9:00am', 1),
('Thursday0', 'Team2', 'brown', '8:00am - 9:00am', 1),
('Thursday5', 'Team2', 'brown', '2:00pm - 3:00pm', 1),
('Wednesday1', 'Team1', 'red', '9:00am - 10:00am', 1),
('Monday3', 'Team1', 'red', '11:00am - 12:00pm', 1),
('Wednesday5', 'Team2', 'brown', '2:00pm - 3:00pm', 1);
