-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2014 at 11:25 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_cms`
--
CREATE DATABASE IF NOT EXISTS `ci_cms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ci_cms`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `pubdate` date NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `images` varchar(128) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `pubdate`, `body`, `created`, `modified`, `images`) VALUES
(1, 'Resume/CV', 'dart', '2014-07-13', '<p><strong><span style="font-size: medium;">RADNO ISKUSTVO</span></strong></p>\r\n<ul>\r\n<li><strong><span style="font-size: medium;">CYCLE d.o.o - Programer konsultant<br /></span></strong></li>\r\n</ul>\r\n<p>Rad na aplikaciji transport menadzer i pruzanje podrske korisnicima programa. Izrda faktura, radnih naloga i ostalih modula na zahtev klijenata - ASP VBA.</p>\r\n<ul>\r\n<li><strong><span style="font-size: medium;">POLIMARK d.o.o - Junior programer</span></strong></li>\r\n</ul>\r\n<p>&nbsp;Kreiranje i odrzavanje MS SQL baze podataka(Navision, Kontrola Kvaliteta, Proizvodnja, Paletne nalepnice, SCADA). Podesavanje i podrska korisnicima ERP poslovnog sistema MS Dnamics Navision, podrska za HandHeld uredjaje, izrada izvestaja po zahtevu korisnika. Odrzavanje internog portala Polimark d.o.o i projektovanje novih funkcionalnosti. Odrzavanje sajta <a href="http://www.polimark.rs">www.polimark.rs</a> , <a href="http://www.omnico.rs">www.omnico.rs</a> , <a href="http://www.pfi.rs">www.pfi.rs</a> .</p>\r\n<ul>\r\n<li><strong><span style="font-size: medium;">Obrazovanje</span></strong></li>\r\n</ul>\r\n<p>Diplomirani inzenjer elektrotehnike za racunarsku tehniku - Tehnicki fakultet Cacak, univerzitet u Kragujevcu. Diplomirao u oktobru 2008 god. sa temom Inteligentne kuce.</p>\r\n<ul>\r\n<li><strong><span style="font-size: medium;">Jezici</span></strong></li>\r\n</ul>\r\n<p>&nbsp;Engleski - citanje i pisanje (srednji nivo), govor (srednji nivo).</p>\r\n<ul>\r\n<li>&nbsp;<strong><span style="font-size: medium;">Licne osobine</span></strong></li>\r\n</ul>\r\n<p>&nbsp;Vredan, uporan, odgovoran, timski opredeljen i spreman za usvajanje novih znanja i usavrsavanje.</p>\r\n<ul>\r\n<li><strong><span style="font-size: medium;">Ostalo</span></strong></li>\r\n</ul>\r\n<p>&nbsp;Vozacka dozvola B kategorije - aktivan vozac</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('077ed0be0c8b0fa3b3cc5512b001d843', '::1', 'Mozilla/5.0 (Windows NT 6.3; Trident/7.0; Touch; rv:11.0) like Gecko', 1413127964, ''),
('69a357cb60c94d161cfeac964ce4e263', '::1', 'Mozilla/5.0 (Windows NT 6.3; Trident/7.0; Touch; rv:11.0) like Gecko', 1413127950, ''),
('77f5f189a5b54ca9af2373a2efbf5a46', '::1', 'Mozilla/5.0 (Windows NT 6.3; Trident/7.0; Touch; rv:11.0) like Gecko', 1413142249, '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `version` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(7);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `order` int(11) NOT NULL,
  `body` text NOT NULL,
  `parent_id` int(11) unsigned NOT NULL DEFAULT '0',
  `template` varchar(25) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `order`, `body`, `parent_id`, `template`) VALUES
(1, 'Homepage', '', 0, 'Lorem Ipsum je jednostavno probni tekst koji se koristi u tiskarskoj i slovoslagarskoj industriji. Lorem Ipsum postoji kao industrijski standard još od 16-og stoljeća, kada je nepoznati tiskar uzeo tiskarsku galiju slova i posložio ih da bi napravio knjigu s uzorkom tiska. Taj je tekst ne samo preživio pet stoljeća, već se i vinuo u svijet elektronskog slovoslagarstva, ostajući u suštini nepromijenjen. Postao je popularan tijekom 1960-ih s pojavom Letraset listova s odlomcima Lorem Ipsum-a, a u skorije vrijeme sa software-om za stolno izdavaštvo kao što je Aldus PageMaker koji također sadrži varijante Lorem Ipsum-a.', 0, 'page'),
(8, 'Contact', 'contact', 0, 'This is my contact', 0, ''),
(9, 'News archive', 'news-archive', 0, 'This is news automatically display', 0, 'news_archive'),
(10, 'About', 'about', 0, 'About page', 0, 'homepage'),
(11, 'Homepage child', 'homepage-child', 0, '<p>Aleksandar</p>', 1, 'page'),
(12, 'moja stranica', 'moja-stranica', 2, 'This is my body', 0, ''),
(13, 'moja stranica', 'moja-stranica', 2, 'This is my body', 0, ''),
(14, 'moja stranica 2', 'moja-stranica 2', 3, 'This is my body 2', 0, ''),
(15, 'moja stranica', 'moja-stranica', 2, 'This is my body', 0, ''),
(16, 'moja stranica', 'moja-stranica', 2, 'This is my body', 0, ''),
(18, 'moja stranica', 'moja-stranica', 2, 'This is my body', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `name` varchar(100) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(1, 'aleksandar.rc83@gmail.com', '6f3ac2b755466e968f5cff6fd7af3239', 'Aleksandar Radovic'),
(3, 'hladnopivo87@gmail.com', 'e1b3ff7a80e9e6927026e1000a3ca71e', 'Senad Mehic'),
(4, 'bobos87@gmail.com', 'fb79527ac3f9fc9048769789855c770d', 'Boskic Slobodan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
