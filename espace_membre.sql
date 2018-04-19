-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2018 at 01:37 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `espace_membre`
--

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `cin` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nbHeures` int(11) NOT NULL,
  `tarifHoraire` int(11) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`cin`, `nom`, `prenom`, `nbHeures`, `tarifHoraire`) VALUES
(6213, 'SG', 'ad', 72, 73),
(26, 'sgh', 'sgh', 11, 23),
(2489, 'sf', 'fhj', 24, 9),
(92384, 'Bad', 'sjf', 2093, 391);

-- --------------------------------------------------------

--
-- Table structure for table `espace_membre`
--

DROP TABLE IF EXISTS `espace_membre`;
CREATE TABLE IF NOT EXISTS `espace_membre` (
  `nom` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `tel` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `adresse` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fidelite`
--

DROP TABLE IF EXISTS `fidelite`;
CREATE TABLE IF NOT EXISTS `fidelite` (
  `id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fidelite`
--

INSERT INTO `fidelite` (`id`, `points`) VALUES
(1, 78),
(9999, 13),
(7236, 11),
(193814, 2372);

-- --------------------------------------------------------

--
-- Table structure for table `maison`
--

DROP TABLE IF EXISTS `maison`;
CREATE TABLE IF NOT EXISTS `maison` (
  `reference` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `superficie` int(11) NOT NULL,
  `prixMetreCarre` int(11) NOT NULL,
  `dateDisponibilite` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL,
  `confirmkey` varchar(255) NOT NULL,
  `confirme` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membre`
--

INSERT INTO `membre` (`id`, `pseudo`, `mail`, `motdepasse`, `confirmkey`, `confirme`) VALUES
(17, 'Dyler', 'dyler@mail.com', '9a511001c3eacd7e3164d92812cd3bf24bcb336f', '0', 0),
(18, 'Dylera', 'dylera@mail.com', 'e8646e4c891fcb0100e8192ba3986cfacbc25872', '70585469172', 0),
(19, 'nivo', 'nivo@mail.com', '1a874ef770a6ce0c71eb46f6dd19073d28f529f3', '60061841151', 0),
(20, 'khayoo', 'khayoo@mail.com', '88540fc9aa931549a97ffa8ecc0329c0ecc32992', '95530552106', 0),
(28, 'test', 'yassine.bengharsallah@esprit.tn', '05da1e02ecec012886cb91c612f45bf9270b1b31', '62780265620', 0),
(25, 'yassin', 'yass.curvasud@gmail.com', '942178525becf72031bd9d01b83cac0308b9f088', '59062286657', 1);

-- --------------------------------------------------------

--
-- Table structure for table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL,
  `confirmkey` varchar(255) NOT NULL,
  `confirme` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recuperation`
--

DROP TABLE IF EXISTS `recuperation`;
CREATE TABLE IF NOT EXISTS `recuperation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recuperation`
--

INSERT INTO `recuperation` (`id`, `mail`, `code`) VALUES
(1, 'dylera@mail.com', 29063144),
(13, 'fashionmakeup113@gmail.com', 25803298),
(3, 'nivo@mail.com', 22211345),
(12, 'yass.curvasud@gmail.com', 88073745);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `nom` varchar(30) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `age` int(2) NOT NULL,
  `tel` int(18) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
