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

INSERT INTO `audio` (`id`, `nazev`, `cesta`, `koupeno`) VALUES
(17, 'Chill', '05.mp3', 0),
(18, 'Chilling', '05.mp3', 0),
(19, 'Chacha', '05.mp3', 0);

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
-- Vypisuji data pro tabulku `customers`
--

INSERT INTO `customers` (`id`, `jmeno`, `prijmeni`, `email`, `mesto`, `ulice`, `psc`) VALUES
(73, 'Ferda', 'Mravenec', 'realwekmack@gmail.com', 'addad', 'Poš?tovní 545', 67154),
(74, 'wekmack@klikni.cz', 'wekmack@klikni.cz', 'wekmack@klikni.cz', 'wekmack@klikni.cz', 'wekmack@klikni.cz', 46512),
(75, 'Ferda', 'Ferda', 'Ferda@Ferda.cuz', 'wekmack@klikni.cz', 'Ferda', 64512),
(76, 'Ferda', 'Ferda', 'Ferda@Ferda.cuz', 'Ferda', 'Ferda', 65412),
(77, 'asdad', 'asdad', 'asdadad@sdfs.cz', 'asdad', 'asdad', 46512),
(78, 'sadsada', 'sadsada', 'sadsada@asd.cz', 'sadsada', 'sadsada', 46521),
(79, 'Chacha', 'Chacha', 'Chacha@Chacha.cz', 'Chacha', 'Chacha', 46521),
(80, 'Chacha', 'Chacha', 'Chacha@Chacha.cz', 'Chacha', 'Chacha', 46521),
(81, 'Chacha', 'Chacha', 'Chacha@Chacha.cz', 'Chacha', 'Chacha', 46521),
(82, 'Chacha', 'Chacha', 'Chacha@Chacha.cz', 'Chacha', 'Chacha', 46521),
(83, 'Chacha', 'Chacha', 'Chacha@Chacha.cz', 'Chacha', 'Chacha', 65412),
(84, 'adsadda', 'adsadda', 'adsadda@ccs.cz', 'adsadda', 'adsadda', 54621),
(85, 'dasdada', 'dsadasd', 'adasda@fsfd.cz', 'asdfxv', 'sdfsdfs465', 54612),
(86, 'Ferda', 'Ferda', 'Ferda@Ferda.cuz', 'Ferda', 'Ferda', 12312),
(87, 'sdfsdf', 'sdfsdf', 'sdfsdf@asdasd.cz', 'sdfsdf', 'sdfsdf', 46521),
(88, 'asda', 'dasdasd', 'dasdasd@dasdasd.cz', 'dasdasd', 'dasdasd', 12412),
(89, 'sdfsfs', 'sdfsfs', 'sdfsfs@sdad.cz', 'sdfsfs', 'sdfsfs', 0),
(90, 'sdfsfs', 'sdfsfs', 'sdfsfs@sdad.cz', 'sdfsfs', 'sdfsfs', 0),
(91, 'sdfsfs', 'sdfsfs', 'sdfsfs@sdad.cz', 'sdfsfs', 'sdfsfs', 0),
(92, 'sdfsfs', 'sdfsfs', 'sdfsfs@sdad.cz', 'sdfsfs', 'sdfsfs', 0),
(93, 'sdfsfs', 'sdfsfs', 'sdfsfs@sdad.cz', 'sdfsfs', 'sdfsfs', 0),
(94, 'sdfsfs', 'sdfsfs', 'sdfsfs@sdad.cz', 'sdfsfs', 'sdfsfs', 0),
(95, 'Tomáš', 'Dusík', 'realwekmack@gmail.com', 'Hrušovany', 'Prdel', 46512),
(96, 'sdsaad', 'sdsaad', 'sdsaad@sdsaad.cz', 'sdsaad', 'sdsaad', 64521),
(97, 'Ferda', 'Ferda', 'Ferda@Ferda.cuz', 'Ferda', 'Ferda', 65412),
(98, 'Chacha', 'Chacha', 'Chacha@Chacha.cz', 'Chacha', 'Chacha', 65412),
(99, 'Dfgdfg', 'dfgdg', 'dgfg@sdfs.cz', 'dgf', 'dgdfg', 0),
(100, 'Ferda', 'Ferda', 'Ferda@Ferda.cuz', 'Ferda', 'Ferda', 41654),
(101, 'asdasds', 'asdsadsad', 'asdadad@sdfs.cz', 'asdaada', 'asdsadad', 64512),
(102, 'sadsad', 'asdsd', 'asdasd@asc.cz', 'adsasd', 'asdasd', 56123),
(103, 'sadasdad', 'sadasdad', 'sadasdad@sadasdad.scu', 'sadasdad', 'sadasdad', 64132),
(104, 'sadasdad', 'sadasdad', 'sadasdad@sadasdad.scu', 'sadasdad', 'sadasdad', 64132),
(105, 'sadasdad', 'sadasdad', 'sadasdad@sadasdad.scu', 'sadasdad', 'sadasdad', 64132),
(106, 'sadasdad', 'sadasdad', 'sadasdad@sadasdad.scu', 'sadasdad', 'sadasdad', 64132),
(107, 'sadasdad', 'sadasdad', 'sadasdad@sadasdad.scu', 'sadasdad', 'sadasdad', 64132),
(108, 'sadasdad', 'sadasdad', 'sadasdad@sadasdad.scu', 'sadasdad', 'sadasdad', 64132),
(109, 'sadasdad', 'sadasdad', 'sadasdad@sadasdad.scu', 'sadasdad', 'sadasdad', 64132),
(110, 'dad', 'dad', 'sads@dad.cu', 'dad', 'dad', 65421),
(111, 'asdas', 'asdasd', 'asdasd@asc.cz', 'asdasd', 'asdasd', 64513),
(112, 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 65464),
(113, 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 65464),
(114, 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 65464),
(115, 'Ferda', 'Ferda', 'Ferda@Ferda.cuz', 'Ferda', 'Ferda', 45213),
(116, 'sdfs', 'sdfsdf', 'sdfsdf@asdasd.cz', 'sdfsdf', 'sdfsdfs465', 64546),
(117, 'sdfsfdf', 'sdfsfdf', 'sdfsfdf@sdfsfdf.cz', 'sdfsfdf', 'sdfsfdf', 64532),
(118, 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 65464),
(119, 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 65464),
(120, 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 'asdadad@sdfs.cz', 65464),
(121, 'asda', 'asda', 'asdadad@sdfs.cz', 'asda', 'asda', 64513),
(122, 'čolekčŠo', 'čolekčŠo', 'sdasd@sadasda.cz', 'čolekčŠo', 'čolekčŠo', 64531);

-- --------------------------------------------------------

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

--
-- Vypisuji data pro tabulku `logs`
--

INSERT INTO `logs` (`id`, `datum`, `msg`, `type`) VALUES
(2, '09.10.2014', 'Nezda?ilo se p?idat chybu!', 0),
(4, '09.10.2014', 'Objednávka se nezda?ila, spadla u vytvá?ení požadavku prdel, post: ', 0),
(5, '09.10.2014', 'Objednávka se nezda?ila, spadla u vytvá?ení požadavku prdel, post: {"typ":"Skladba","jmeno":"asdadad@sdfs.cz","prijmeni":"asdadad@sdfs.cz","email":"asdadad@sdfs.cz","mesto":"asdadad@sdfs.cz","ulice":"asdadad@sdfs.cz","psc":"65464","skladba":"Chill","prani":""}', 0),
(6, '09.10.2014', 'Objednávka se nezda?ila, spadla u vytvá?ení požadavku audioNotSold, post: {"typ":"Skladba","jmeno":"asdadad@sdfs.cz","prijmeni":"asdadad@sdfs.cz","email":"asdadad@sdfs.cz","mesto":"asdadad@sdfs.cz","ulice":"asdadad@sdfs.cz","psc":"65464","skladba":"Chill","prani":""}', 0),
(7, '09.10.2014', 'Potvrzena nová objednávka, post: {"typ":"Du00e1rkovu00fd Balu00edu010dek","jmeno":"asdadad@sdfs.cz","prijmeni":"asdadad@sdfs.cz","email":"asdadad@sdfs.cz","mesto":"asdadad@sdfs.cz","ulice":"asdadad@sdfs.cz","psc":"65464","skladba":"Chill","prani":"asdadad@sdfs.czasdadad@sdfs.czasdadad@sdfs.czasdadad@sdfs.cz"}', 0),
(8, '09.10.2014', 'Potvrzena nová objednávka, post: {"typ":"Du00e1rkovu00fd Balu00edu010dek","jmeno":"asdadad@sdfs.cz","prijmeni":"asdadad@sdfs.cz","email":"asdadad@sdfs.cz","mesto":"asdadad@sdfs.cz","ulice":"asdadad@sdfs.cz","psc":"65464","skladba":"Chill","prani":"asdadad@sdfs.czasdadad@sdfs.czasdadad@sdfs.czasdadad@sdfs.cz"}', 0),
(9, '09.10.2014', 'Potvrzena nová objednávka, post: {"typ":"Du00e1rkovu00fd Balu00edu010dek","jmeno":"asda","prijmeni":"asda","email":"asdadad@sdfs.cz","mesto":"asda","ulice":"asda","psc":"64513","skladba":"Chacha","prani":"asdaasdaasdaasdaasdaasda"}', 0),
(10, '09.10.2014', 'Potvrzena nová objednávka, post: {"typ":"Du00e1rkovu00fd Balu00edu010dek","jmeno":"u010doleku010du0160o","prijmeni":"u010doleku010du0160o","email":"sdasd@sadasda.cz","mesto":"u010doleku010du0160o","ulice":"u010doleku010du0160o","psc":"64531","skladba":"Chill","prani":"u010doleku010doleku010doleku010dolek"}', 0);

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

--
-- Vypisuji data pro tabulku `orders`
--

INSERT INTO `orders` (`id`, `typ`, `prani`, `cena`, `datum_objednani`, `customer`, `audio`) VALUES
(16, 'Dárkový Balí?ek', 'Prání?ko', 449, '19-08-14:22:26', 73, 0),
(17, 'Dárkový Balí?ek', 'wekmack@klikni.cz', 449, '19-08-14:22:40', 74, 0),
(19, 'Dárkový Balí?ek', 'ChachaChachaChachaChacha', 449, '24-08-14:22:42', 82, 0),
(20, 'Dárkový Balí?ek', 'ChachaChachaChacha', 449, '24-08-14:22:50', 83, 0),
(21, 'Dárkový Balí?ek', 'adsadda', 449, '24-08-14:22:51', 84, 0),
(22, 'Dárkový Balí?ek', '4654adsadaaad', 449, '09-10-14:09:43', 93, 18),
(23, 'Dárkový Balí?ek', '4654adsadaaad', 449, '09-10-14:09:45', 94, 18),
(24, 'Skladba', '', 449, '09-10-14:09:45', 95, 19),
(25, 'Dárkový Balí?ek', 'sdsaadsdsaadsdsaadsdsaadsdsaad', 449, '09-10-14:09:46', 96, 18),
(26, 'Skladba', '', 449, '09-10-14:09:48', 97, 19),
(27, 'Dárkový Balí?ek', 'ChachaChachaChachaChachaChacha', 449, '09-10-14:10:01', 98, 19),
(28, 'Skladba', '', 449, '09-10-14:10:04', 99, 19),
(29, 'Dárkový Balí?ek', 'FerdaFerdaFerdaFerda', 449, '09-10-14:10:11', 100, 19),
(30, 'Skladba', '', 449, '09-10-14:10:29', 101, 17),
(31, 'Dárkový Balí?ek', 'asdasddasad', 449, '09-10-14:10:32', 102, 17),
(32, 'Dárkový Balí?ek', 'sadasdadsadasdadsadasdad', 449, '09-10-14:10:35', 103, 17),
(33, 'Dárkový Balí?ek', 'sadasdadsadasdadsadasdad', 449, '09-10-14:10:36', 104, 17),
(34, 'Dárkový Balí?ek', 'sadasdadsadasdadsadasdad', 449, '09-10-14:10:36', 105, 17),
(35, 'Dárkový Balí?ek', 'sadasdadsadasdadsadasdad', 449, '09-10-14:10:36', 106, 17),
(36, 'Dárkový Balí?ek', 'sadasdadsadasdadsadasdad', 449, '09-10-14:10:39', 107, 17),
(37, 'Dárkový Balí?ek', 'sadasdadsadasdadsadasdad', 449, '09-10-14:10:39', 108, 17),
(38, 'Dárkový Balí?ek', 'sadasdadsadasdadsadasdad', 449, '09-10-14:10:40', 109, 17),
(39, 'Dárkový Balí?ek', 'daddaddaddaddad', 449, '09-10-14:10:41', 110, 17),
(40, 'Dárkový Balí?ek', 'asdasasdasasdas', 449, '09-10-14:10:41', 111, 17),
(41, 'Skladba', '', 449, '09-10-14:10:45', 112, 17),
(42, 'Skladba', '', 449, '09-10-14:10:46', 113, 17),
(43, 'Skladba', '', 449, '09-10-14:10:47', 114, 17),
(44, 'Dárkový Balí?ek', 'FerdaFerdaFerda', 449, '09-10-14:10:48', 115, 17),
(45, 'Dárkový Balí?ek', 'sdfsdfsdfsdfsdfsdfsdfsdfsdfsdf', 449, '09-10-14:11:00', 116, 17),
(46, 'Dárkový Balí?ek', 'sdfsfdfsdfsfdfsdfsfdf', 449, '09-10-14:11:03', 117, 18),
(47, 'Dárkový Balí?ek', 'asdadad@sdfs.czasdadad@sdfs.czasdadad@sdfs.czasdadad@sdfs.cz', 449, '09-10-14:11:04', 118, 17),
(48, 'Dárkový Balí?ek', 'asdadad@sdfs.czasdadad@sdfs.czasdadad@sdfs.czasdadad@sdfs.cz', 449, '09-10-14:11:05', 119, 17),
(49, 'Dárkový Balí?ek', 'asdadad@sdfs.czasdadad@sdfs.czasdadad@sdfs.czasdadad@sdfs.cz', 449, '09-10-14:11:07', 120, 17),
(50, 'Dárkový Balí?ek', 'asdaasdaasdaasdaasdaasda', 449, '09-10-14:11:08', 121, 19),
(51, 'Dárkový Balí?ek', '?olek?olek?olek?olek', 449, '09-10-14:11:16', 122, 17);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
