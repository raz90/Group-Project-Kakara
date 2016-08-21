-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2016 at 12:41 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kakara`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img_name` varchar(50) NOT NULL,
  `img_url` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `condition1` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `lga` varchar(50) NOT NULL,
  `about` varchar(500) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `bbm` varchar(10) NOT NULL,
  `preferred` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `img_name`, `img_url`, `price`, `condition1`, `location`, `lga`, `about`, `full_name`, `email`, `phone`, `bbm`, `preferred`, `password`, `time`) VALUES
(2, 'Mobile Phones AND Gadgets', 'Samsung g1', 'banner3.jpg', 'images/banner3.jpg', '578', 'Second Hand (used)', 'Abuja FCT', 'Garki ', 'This is a short description ', 'Muzzammil', 'mamz912', '08055358312', 'G45787', 'Whatsapp/Call Prefer', 'mamzy', '2016-03-01 05:33:04'),
(3, 'Mobile Phones AND Gadgets', 'Italian Spoon ', 'egg_beater.png', 'images/egg_beater.png', '566', 'Second Hand (used)', 'Adamawa', 'Adama South ', 'fdsflandof jdsiugbisbghsbkj hgbhgbkjhsbgh', 'MUzzammil', 'suleiman.muzzammil@ymail.com', '+2349099968798', '45', 'Call/SMS ONLY', 'mamzy', '2016-03-02 09:03:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
