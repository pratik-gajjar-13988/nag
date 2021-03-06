-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2018 at 07:15 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `art_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_nm` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` char(255) NOT NULL,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_nm`, `username`, `password`) VALUES
(5, 'namrata gajjar', 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `art_items`
--

CREATE TABLE IF NOT EXISTS `art_items` (
  `item_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `source` varchar(400) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `new_flag` int(1) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `art_items`
--

INSERT INTO `art_items` (`item_id`, `name`, `source`, `price`, `category`, `new_flag`) VALUES
(1, 'Panihari', 'images/clay_panihari.jpg', 5000, 'clay', 0),
(2, 'Sea', 'images/clay_sea.jpg', 3000, 'clay', 0),
(3, 'Fort', 'images/clay_fort.jpg', 7000, 'clay', 0),
(4, 'Flowers', 'images/clay_flowers.jpg', 6500, 'clay', 0),
(5, 'Sparrow', 'images/clay_sparrow.jpg', 3700, 'clay', 0),
(6, 'Couple in Paris', 'images/oil_couple_in_paris.jpg', 9000, 'oil', 0),
(8, 'Rainy Day', 'images/oil_rain_umbrella.jpg', 5500, 'oil', 0),
(9, 'Sunset', 'images/oil_sunset.jpg', 11000, 'oil', 0),
(10, 'Boat in Water', 'images/oil_boat_on_water.jpg', 2700, 'oil', 0),
(11, 'City', 'images/water_city.jpg', 2000, 'water', 0),
(12, 'Bridge', 'images/water_bridge.jpg', 3000, 'water', 0),
(13, 'Traffic', 'images/water_traffic.jpg', 2500, 'water', 0),
(14, 'Sea Boat', 'images/water_sea_boat.jpg', 7650, 'water', 0),
(15, 'Ganga River', 'images/water_ganga.jpg', 4500, 'water', 0),
(16, 'Boat on Water', 'images/oil_boat_on_water.jpg', 2500, 'water', 0),
(17, 'Musical Instument_1', 'images/new_1.JPG', 12000, 'water', 1),
(18, 'Musical Instument_2', 'images/new_2.JPG', 10000, 'water', 1),
(19, 'Musical Instument_3', 'images/NEW_3.jpg', 4500, 'water', 1),
(20, 'Musical Instument_4', 'images/NEW_4.jpg', 7650, 'water', 1);

-- --------------------------------------------------------


--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
 `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_nm` varchar(50) NOT NULL,
  `page_desc` text NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`p_id`, `page_nm`, `page_desc`) VALUES
(1, 'deshboard', ''),
(2, 'home', ''),
(3, 'about_us', 'namrata gajjar');

-- --------------------------------------------------------

--
-- Table structure for table `reach_us`
--

CREATE TABLE IF NOT EXISTS `reach_us` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `nm` varchar(100) NOT NULL,
  `add1` varchar(255) NOT NULL,
  `add2` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` int(20) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reach_us`
--

INSERT INTO `reach_us` (`uid`, `nm`, `add1`, `add2`, `city`, `state`, `zipcode`, `contact_no`) VALUES
(1, 'Babasaheb Ambedkar Open University', 'Nalanda Institute', '', 'Ahmedabad', 'Gujarat', 380013, '7405198956');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_nm` varchar(50) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `img_nm`, `path`) VALUES
(9, 'Penguins.jpg', 'images/SliderPenguins.jpg');

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE IF NOT EXISTS `social_media` (
  `uid` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`uid`, `facebook`, `twitter`, `linkedin`, `insta`) VALUES
(1, 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.linkedln.com/', 'https://www.instagram.com/');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `add1` varchar(100) NOT NULL,
  `add2` varchar(100) NOT NULL,
  `add3` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`fname`, `lname`, `gender`, `contact`, `email`, `password`, `add1`, `add2`, `add3`) VALUES
('Namrata', 'Gajjar', 'Female', '7405198956', 'namrataonmail@gmail.com', 'admin', 'Ahmedabad', 'Ahmedabad', 'Ahmedabad');

--
-- Indexes for dumped tables
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
