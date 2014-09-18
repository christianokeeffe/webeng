-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 18. 09 2014 kl. 11:42:40
-- Serverversion: 5.6.20
-- PHP-version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mondial`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `border`
--

CREATE TABLE IF NOT EXISTS `border` (
  `country_id` text NOT NULL,
  `country` text NOT NULL,
  `length` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` text NOT NULL,
  `country` text NOT NULL,
  `name` text NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `province` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `city`
--

INSERT INTO `city` (`id`, `country`, `name`, `latitude`, `longitude`, `province`) VALUES
('f0_1461', 'f0_136', 'Tirane', 0, 0, ''),
('f0_1464', 'f0_144', 'Andorra la Vella', 0, 0, '');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `continent`
--

CREATE TABLE IF NOT EXISTS `continent` (
  `id` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `continent`
--

INSERT INTO `continent` (`id`, `name`) VALUES
('f0_119', 'Europe'),
('f0_123', 'Asia');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` text NOT NULL,
  `name` text NOT NULL,
  `capital` text NOT NULL,
  `population` int(11) NOT NULL,
  `gdp_total` int(11) NOT NULL,
  `datacode` text NOT NULL,
  `population_growth` double NOT NULL,
  `car_code` text NOT NULL,
  `indep_date` date NOT NULL,
  `infant_mortality` double NOT NULL,
  `government` text NOT NULL,
  `inflation` double NOT NULL,
  `gdp_serv` int(11) NOT NULL,
  `total_area` int(11) NOT NULL,
  `gdp_agri` int(11) NOT NULL,
  `gdp_ind` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `country`
--

INSERT INTO `country` (`id`, `name`, `capital`, `population`, `gdp_total`, `datacode`, `population_growth`, `car_code`, `indep_date`, `infant_mortality`, `government`, `inflation`, `gdp_serv`, `total_area`, `gdp_agri`, `gdp_ind`) VALUES
('f0_136', 'Mettesinternet', 'f0_1461', 2, 0, '', 0, '', '0000-00-00', 0, '', 0, 0, 0, 0, 0),
('f0_144', 'Andorra', 'f0_1464', 72766, 0, '', 0, '', '0000-00-00', 0, '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `encompassed`
--

CREATE TABLE IF NOT EXISTS `encompassed` (
  `percentage` int(11) NOT NULL,
  `continent` text NOT NULL,
  `country_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `ethnicgroups`
--

CREATE TABLE IF NOT EXISTS `ethnicgroups` (
  `country_id` text NOT NULL,
  `percentage` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `located_at`
--

CREATE TABLE IF NOT EXISTS `located_at` (
  `id` text NOT NULL,
  `water` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `population`
--

CREATE TABLE IF NOT EXISTS `population` (
  `city_id` text NOT NULL,
  `year` int(11) NOT NULL,
  `population` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `province`
--

CREATE TABLE IF NOT EXISTS `province` (
  `country_id` text NOT NULL,
  `population` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `name` text NOT NULL,
  `id` text NOT NULL,
  `capital` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `religions`
--

CREATE TABLE IF NOT EXISTS `religions` (
  `country_id` text NOT NULL,
  `percentage` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
