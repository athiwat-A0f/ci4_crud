-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.17-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table ci4tutorial.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table ci4tutorial.news: ~4 rows (approximately)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `title`, `slug`, `body`) VALUES
	(1, 'Elvis sighted', 'elvis-sighted', 'Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.'),
	(2, 'Say it isn\'t so!', 'say-it-isnt-so', 'Scientists conclude that some programmers have a sense of humor.'),
	(3, 'Caffeination, Yes!', 'caffeination-yes', 'World\'s largest coffee shop open onsite nested coffee shop for staff only.'),
	(4, 'manchester united', 'manchester-united', 'manchester united is football club of premierleauge');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
