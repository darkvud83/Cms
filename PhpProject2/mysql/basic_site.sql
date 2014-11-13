-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2014 at 10:11 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `basic_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `pagedata`
--

CREATE TABLE IF NOT EXISTS `pagedata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `page` text NOT NULL,
  `text1` text,
  `text2` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pagedata`
--

INSERT INTO `pagedata` (`id`, `title`, `page`, `text1`, `text2`) VALUES
(1, 'About page', 'about', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla egestas, magna ut porta vehicula, arcu ipsum rutrum metus, porttitor tempor mi quam ut nisl. Donec nec cursus mauris, sed ornare velit. Duis blandit velit vitae varius tincidunt. Nullam auctor pretium nunc eget sagittis. Mauris non dignissim elit, vitae dapibus augue.'),
(2, 'Home Page', 'home', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla egestas, magna ut porta vehicula, arcu ipsum rutrum metus, porttitor tempor mi quam ut nisl. Donec nec cursus mauris, sed ornare velit. Duis blandit velit vitae varius tincidunt. Nullam auctor pretium nunc eget sagittis. Mauris non dignissim elit, vitae dapibus augue. Donec quis consectetur arcu. Integer massa diam, sagittis a ligula vel, mollis sollicitudin nisi. Vestibulum eget ullamcorper nulla. Curabitur blandit nibh vitae enim scelerisque dapibus. Praesent quam risus, dictum sit amet ipsum at, condimentum condimentum massa. In sem turpis, porttitor sit amet nunc vitae, eleifend auctor sapien. Proin id gravida urna. Sed mollis risus sed diam placerat, eget ultrices diam ultrices. Nam a gravida ipsum. Ut dapibus, metus in rutrum molestie, nulla nunc semper tellus, non malesuada erat dui in metus. Nunc enim nunc, blandit non laoreet sed, fermentum rhoncus eros.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
