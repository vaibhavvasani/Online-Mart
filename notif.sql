-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 06:53 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omart`
--

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `userid` varchar(30) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `seller_email` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`userid`, `seller_id`, `seller_email`, `message`) VALUES
('1234', 2, 'saerh@gmail.com', 'You have wished to buy the product . Please contact with the seller using email id '),
('qwerty', 8, 'damandeep.s@somaiya.edu', 'You have wished to buy the product . Please contact with the seller using email id'),
('daman', 5, 'sheth.pr@somaiya.edu', 'You have wished to buy the product . Please contact with the seller using email id'),
('parth', 6, '1234@gmail.com', 'You have wished to buy the product . Please contact with the seller using email id'),
('pranav', 8, 'damandeep.s@somaiya.edu', 'You have wished to buy the product . Please contact with the seller using email id'),
('daman', 7, 'pranav.paul@somaiya.edu', 'You have wished to buy the product . Please contact with the seller using email id'),
('sheth.pr', 1, 'ulyv@gmail.com', 'You have wished to buy the product . Please contact with the seller using email id'),
('qwerty', 8, 'damandeep.s@somaiya.edu', 'You have wished to buy the product . Please contact with the seller using email id'),
('pranav', 5, 'sheth.pr@somaiya.edu', 'You have wished to buy the product . Please contact with the seller using email id'),
('1234', 5, 'sheth.pr@somaiya.edu', 'You have wished to buy the product . Please contact with the seller using email id'),
('1234', 7, 'pranav.paul@somaiya.edu', 'You have wished to buy the product . Please contact with the seller using email id'),
('1234', 1, 'ulyv@gmail.com', 'You have wished to buy the product . Please contact with the seller using email id'),
('qwerty', 7, 'pranav.paul@somaiya.edu', 'You have wished to buy the product . Please contact with the seller using email id');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD KEY `seller_email` (`seller_email`),
  ADD KEY `userid` (`userid`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notif`
--
ALTER TABLE `notif`
  ADD CONSTRAINT `notif_ibfk_1` FOREIGN KEY (`seller_email`) REFERENCES `user` (`email`),
  ADD CONSTRAINT `notif_ibfk_3` FOREIGN KEY (`userid`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `notif_ibfk_4` FOREIGN KEY (`seller_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
