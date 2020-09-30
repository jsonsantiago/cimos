-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for cimos_covid
DROP DATABASE IF EXISTS `cimos_covid`;
CREATE DATABASE IF NOT EXISTS `cimos_covid` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `cimos_covid`;

-- Dumping structure for table cimos_covid.covid_declaration
CREATE TABLE IF NOT EXISTS `covid_declaration` (
  `declaration_id` int(11) NOT NULL AUTO_INCREMENT,
  `submitted` datetime NOT NULL DEFAULT current_timestamp(),
  `lead_id` int(11) DEFAULT NULL,
  `temperature` decimal(5,2) DEFAULT NULL,
  `photo_name` varchar(50) DEFAULT NULL,
  `photo_taken` datetime DEFAULT NULL,
  `normal_temp` tinyint(4) DEFAULT NULL,
  `no_cough` tinyint(4) DEFAULT NULL,
  `no_taste_smell_loss` tinyint(4) DEFAULT NULL,
  `no_other_symptoms` tinyint(4) DEFAULT NULL,
  `location_lat` decimal(8,6) DEFAULT NULL,
  `location_long` decimal(9,6) DEFAULT NULL,
  PRIMARY KEY (`declaration_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
