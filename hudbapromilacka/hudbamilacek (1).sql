-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Počítač: 127.0.0.1
-- Vygenerováno: Ned 12. říj 2014, 22:33
-- Verze serveru: 5.6.11
-- Verze PHP: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `hudbamilacek`
--
CREATE DATABASE IF NOT EXISTS `hudbamilacek` DEFAULT CHARACTER SET utf8 COLLATE utf8_czech_ci;
USE `hudbamilacek`;

-- --------------------------------------------------------

--
-- Struktura tabulky `audio`
--

CREATE TABLE IF NOT EXISTS `audio` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `nazev` varchar(30) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `cesta` varchar(50) NOT NULL,
  `koupeno` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Vypisuji data pro tabulku `audio`
--



-- --------------------------------------------------------

--
-- Struktura tabulky `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `jmeno` varchar(30) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `prijmeni` varchar(30) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `mesto` varchar(30) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `ulice` varchar(30) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `psc` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123 ;


--
-- Struktura tabulky `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `datum` varchar(10) NOT NULL,
  `msg` varchar(9999) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `type` int(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;


-- --------------------------------------------------------

--
-- Struktura tabulky `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `typ` varchar(30) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `prani` varchar(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `cena` int(10) NOT NULL,
  `datum_objednani` varchar(25) NOT NULL,
  `customer` int(16) NOT NULL,
  `audio` int(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
