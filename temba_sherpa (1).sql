-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2013 at 03:41 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `temba_sherpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_achievement`
--

CREATE TABLE IF NOT EXISTS `tbl_achievement` (
  `achievement_id` int(11) NOT NULL AUTO_INCREMENT,
  `achievement_title` varchar(80) NOT NULL,
  `achievement_desc` varchar(240) NOT NULL,
  `achievement_photo` varchar(120) NOT NULL,
  `enable_disable` int(1) NOT NULL,
  `created_date` date NOT NULL,
  `last_modified_date` datetime NOT NULL,
  `achievement_date` date NOT NULL,
  PRIMARY KEY (`achievement_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_achievement`
--

INSERT INTO `tbl_achievement` (`achievement_id`, `achievement_title`, `achievement_desc`, `achievement_photo`, `enable_disable`, `created_date`, `last_modified_date`, `achievement_date`) VALUES
(6, 'Test date', 'Testing whether the achievement portion works or not. Adding other features in it too. Lets see, need to add the created date, and modified date. Others things to be added, well, 1st I want to be able to change the cover image for achieveme', '969605_10151398765537477_961404517_n.jpg', 1, '0000-00-00', '2013-08-25 09:34:01', '2001-07-19'),
(7, 'test', 'test for created date... :)   and test for edit  ', 'Henna_Design_1.jpg', 0, '2013-08-07', '2013-08-25 09:32:55', '2013-08-29'),
(8, 'Test', 'test achievement date ', 'gagri.jpg', 1, '2013-08-25', '2013-08-25 09:34:47', '2013-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(80) NOT NULL,
  `admin_password` varchar(40) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'admin@admin.com', 'f2c57870308dc87f432e5912d4de6f8e322721ba');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_img_path` varchar(80) NOT NULL,
  `gallery_desc` varchar(120) NOT NULL,
  `enable_disable` int(1) NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gallery_id`, `gallery_img_path`, `gallery_desc`, `enable_disable`) VALUES
(1, 'images2.jpg', 'album1', 1),
(2, 'images1.jpg', 'album2', 1),
(7, 'Henna_Design_1.jpg', 'henna', 1),
(8, '4th.png', 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE IF NOT EXISTS `tbl_image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) NOT NULL,
  `image_path` varchar(80) NOT NULL,
  `image_caption` varchar(80) NOT NULL,
  `enable_disable` int(1) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`image_id`, `gallery_id`, `image_path`, `image_caption`, `enable_disable`) VALUES
(1, 7, '969605_10151398765537477_961404517_n.jpg', 'me', 0),
(3, 7, 'henna-designs-for-hands.jpg', 'mehendi', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
