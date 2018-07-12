-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2018 at 11:28 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training2`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Unique identifier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `Last_name`, `Unique identifier`) VALUES
(1, 'Peter', 'La\'habo', 'ABsdf23'),
(2, 'Liam', 'Peters', 'dfghfgh54'),
(3, 'Super', 'man', 'gff$$#\'\\'),
(4, 'Jimmy	', 'Bobb\'s', 'fghj234\"234df'),
(5, 'RichÃ¡rd', 'Moore', 'dfghfg'),
(6, 'Jack', 'Hurlock', ' fffffff'),
(7, 'Steve', 'Stanley', 'fghgggg433'),
(8, 'Steve', 'Stanley', 'fghgggg433'),
(8, 'Steve', 'Stanley', 'fghgggg433'),
(10, 'Steve', 'Stanley', 'fghgggg433');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
