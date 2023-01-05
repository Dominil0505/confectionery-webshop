-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Szerver verzió:               10.4.22-MariaDB - mariadb.org binary distribution
-- Szerver OS:                   Win64
-- HeidiSQL Verzió:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Adatbázis struktúra mentése a webfejlesztes_beadando.
CREATE DATABASE IF NOT EXISTS `webfejlesztes_beadando` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci */;
USE `webfejlesztes_beadando`;

-- Struktúra mentése tábla webfejlesztes_beadando. tbl_food
CREATE TABLE IF NOT EXISTS `tbl_food` (
  `etel_id` int(20) NOT NULL AUTO_INCREMENT,
  `etel_nev` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `ar` int(4) DEFAULT NULL,
  `kep` tinytext COLLATE utf8_hungarian_ci DEFAULT NULL,
  `glutenmentes` tinyint(1) DEFAULT NULL,
  `laktozmentes` tinyint(1) DEFAULT NULL,
  `tojasmentes` tinyint(1) DEFAULT NULL,
  `cukormentes` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`etel_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- Tábla adatainak mentése webfejlesztes_beadando.tbl_food: ~20 rows (hozzávetőleg)
/*!40000 ALTER TABLE `tbl_food` DISABLE KEYS */;
REPLACE INTO `tbl_food` (`etel_id`, `etel_nev`, `ar`, `kep`, `glutenmentes`, `laktozmentes`, `tojasmentes`, `cukormentes`) VALUES
	(1, 'Zserbó', 380, '1.jpg', NULL, NULL, NULL, NULL),
	(2, 'Snickers szelet', 550, '2.jpg', NULL, NULL, NULL, NULL),
	(3, 'Gluténmentes vanília szelet', 580, '3.jpg', 1, NULL, NULL, NULL),
	(4, 'Sajtorta', 400, '4.jpg', NULL, NULL, NULL, NULL),
	(5, 'Sacher', 500, '5.jpg', NULL, NULL, NULL, NULL),
	(6, 'Tiramisu', 1800, '6.jpg', NULL, NULL, NULL, NULL),
	(7, 'Lúdláb', 380, '7.jpg', NULL, NULL, NULL, NULL),
	(8, 'Krémes', 350, '8.jpg', NULL, NULL, NULL, NULL),
	(9, 'Oreo szelet', 580, '9.jpg', NULL, NULL, NULL, NULL),
	(10, 'Dobos torta szelet', 490, '10.jpg', NULL, NULL, NULL, NULL),
	(11, 'Citrom szelet', 450, '11.jpg', NULL, NULL, NULL, NULL),
	(12, 'Glutén-és tejmentes narancsos ', 2200, '12.jpg', 1, 1, NULL, NULL),
	(13, 'Szamócakrémes szelet', 580, '13.jpg', NULL, NULL, NULL, NULL),
	(14, 'Gluténmentes csoki szelet', 580, '14.jpg', 1, NULL, NULL, NULL),
	(15, 'Cukormentes hollandi szelet', 580, '15.jpg', NULL, NULL, NULL, 1),
	(16, 'Ishler', 330, '16.jpg', NULL, NULL, NULL, NULL),
	(17, 'Kinder szelet', 330, '17.jpg', NULL, NULL, NULL, NULL),
	(18, 'Tej-tojásmentes szamócakrémes ', 580, '18.jpg', NULL, 1, 1, NULL),
	(19, 'Puncs mignon', 200, '19.jpg', NULL, NULL, NULL, NULL),
	(20, 'Cukormentes joghurtos túró mál', 580, '20.jpg', NULL, NULL, NULL, 1);
/*!40000 ALTER TABLE `tbl_food` ENABLE KEYS */;

-- Struktúra mentése tábla webfejlesztes_beadando. tbl_orderdata
CREATE TABLE IF NOT EXISTS `tbl_orderdata` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `rend_datum` datetime DEFAULT NULL,
  `vevo_nev` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `vevo_tel` varchar(12) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `vevo_cim` varchar(100) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `order_id` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `megjegyzes` varchar(300) COLLATE utf8_hungarian_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- Tábla adatainak mentése webfejlesztes_beadando.tbl_orderdata: ~0 rows (hozzávetőleg)
/*!40000 ALTER TABLE `tbl_orderdata` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_orderdata` ENABLE KEYS */;

-- Struktúra mentése tábla webfejlesztes_beadando. tbl_orderitems
CREATE TABLE IF NOT EXISTS `tbl_orderitems` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(50) COLLATE utf8_hungarian_ci NOT NULL DEFAULT '0',
  `etel_nev` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `mennyiseg` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- Tábla adatainak mentése webfejlesztes_beadando.tbl_orderitems: ~0 rows (hozzávetőleg)
/*!40000 ALTER TABLE `tbl_orderitems` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_orderitems` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
webfejlesztes_beadandowebfejlesztes_beadando