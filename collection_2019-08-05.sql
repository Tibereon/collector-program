# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 192.168.20.20 (MySQL 5.6.44)
# Database: collection
# Generation Time: 2019-08-05 12:32:55 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table monsters
# ------------------------------------------------------------

DROP TABLE IF EXISTS `monsters`;

CREATE TABLE `monsters` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL DEFAULT '?',
  `element` varchar(255) NOT NULL DEFAULT 'Unaffiliated',
  `healthpoints` int(11) NOT NULL DEFAULT '0',
  `strength` int(11) NOT NULL DEFAULT '0',
  `speed` int(11) NOT NULL DEFAULT '0',
  `agility` int(11) NOT NULL DEFAULT '0',
  `armour` int(11) NOT NULL DEFAULT '0',
  `intelligence` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `monsters` WRITE;
/*!40000 ALTER TABLE `monsters` DISABLE KEYS */;

INSERT INTO `monsters` (`id`, `type`, `element`, `healthpoints`, `strength`, `speed`, `agility`, `armour`, `intelligence`)
VALUES
	(1,'Goblin','Earth',16,10,16,14,2,50),
	(2,'Slime','Earth',3,2,1,4,0,0),
	(3,'Ancient lobster','Water',70,28,10,8,30,28),
	(4,'Skeleton ','Earth',12,8,12,8,0,15),
	(5,'Cave bat','Earth',2,1,70,40,0,4),
	(6,'Ogre','Earth/Arid',220,120,32,18,16,70),
	(7,'Jungle Slime','Earth/Humid',8,6,8,8,0,6),
	(8,'Vulture','Earth/Arid',4,3,90,48,0,8),
	(9,'Hobgoblin','Earth',22,26,22,22,4,65),
	(10,'Corrupted human','Corruption',30,40,26,30,6,100),
	(11,'Large-rat','Poision',5,3,14,6,0,5),
	(12,'Clan-rat','Posion',18,22,20,24,0,90),
	(13,'Devourer','Courruption',320,80,34,16,8,10),
	(14,'Eater of worlds','Corruption',240,100,85,35,6,14),
	(15,'Flying polp','Unaffiliated',540,280,130,60,0,110),
	(16,'?','Unaffiliated',0,0,0,0,0,0);

/*!40000 ALTER TABLE `monsters` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
