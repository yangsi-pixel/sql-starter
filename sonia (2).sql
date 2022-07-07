-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 07, 2022 at 09:40 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sonia`
--

-- --------------------------------------------------------

--
-- Table structure for table `in_form`
--

DROP TABLE IF EXISTS `in_form`;
CREATE TABLE IF NOT EXISTS `in_form` (
  `matriculation` varchar(8) NOT NULL,
  `username` text NOT NULL,
  `phone_number` int(20) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `in_form`
--

INSERT INTO `in_form` (`matriculation`, `username`, `phone_number`, `address`) VALUES
('sc21c394', 'Daniell', 1234612, 'No Idea'),
('sc21c394', 'Daniell', 1234612, 'No Idea'),
('sc20a321', 'Diane', 681077477, 'Fonfuka'),
('ed21a324', 'Desmond', 677835446, 'Molyko'),
('ED20A415', 'Daniella', 681077477, 'Molyko');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
