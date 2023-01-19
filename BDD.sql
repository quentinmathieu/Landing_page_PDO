-- --------------------------------------------------------
-- Hôte:                         127.0.0.55
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour landingpage
CREATE DATABASE IF NOT EXISTS `landingpage` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `landingpage`;

-- Listage de la structure de la table landingpage. pricing
CREATE TABLE IF NOT EXISTS `pricing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'Name',
  `Price` float NOT NULL DEFAULT '0',
  `Sale` int(11) NOT NULL DEFAULT '0',
  `Bandwidth` int(11) NOT NULL DEFAULT '0',
  `Onlinespace` int(11) NOT NULL DEFAULT '0',
  `Support` tinyint(4) NOT NULL DEFAULT '0',
  `HiddenFees` tinyint(4) NOT NULL DEFAULT '0',
  `Domain` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT 'Unlimited',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Listage des données de la table landingpage.pricing : ~2 rows (environ)
/*!40000 ALTER TABLE `pricing` DISABLE KEYS */;
INSERT INTO `pricing` (`id`, `Name`, `Price`, `Sale`, `Bandwidth`, `Onlinespace`, `Support`, `HiddenFees`, `Domain`) VALUES
	(1, 'Name', 0, 0, 0, 0, 0, 0, 'Unlimited'),
	(2, 'Name', 0, 0, 0, 0, 0, 0, 'Unlimited'),
	(3, 'Name', 0, 0, 0, 0, 0, 0, 'Unlimited');
/*!40000 ALTER TABLE `pricing` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
