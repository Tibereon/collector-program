# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 192.168.20.20 (MySQL 5.6.44)
# Database: collection
# Generation Time: 2019-08-05 13:58:12 +0000
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
	(16,'Walking-shark','Water',200,70,14,2,1,12),
	(17,'Fire-elemental','Fire',80,400,40,50,0,120),
	(18,'Glowing-lizard','Fire',18,28,12,14,3,6),
	(19,'Giant arachnid','Poision ',20,18,18,16,6,20),
	(20,'stone-golem','Earth',1000,350,6,1,300,30),
	(21,'Bull-toad','Earth',50,40,42,12,1,6),
	(22,'Merman','Water',34,58,20,22,0,105),
	(23,'Dark-elf','Posion ',24,32,32,36,0,95),
	(24,'Orc','Earth',60,70,28,22,2,80),
	(25,'Scorpion ','Earth/Arid',20,12,14,6,8,4),
	(26,'Huge-fly','Posion',200,22,110,40,1,2),
	(27,'Wraith','Corruption',34,48,24,20,28,80),
	(28,'Antlion','Earth/arid',38,50,28,8,20,10),
	(29,'Dragon','Air',3000,320,140,48,20,150),
	(30,'King slime','Earth',10000,120,20,8,0,40),
	(31,'Beastman','Poison',40,52,32,28,1,60),
	(32,'Vampire','Corruption',200,90,46,42,0,125),
	(33,'Cockroach-man','Unaffiliated',140,110,60,50,8,100),
	(34,'Evil-natural water','Water',1,1000,200,100,0,60),
	(35,'Harpy','Air',30,20,60,64,3,70),
	(36,'Subterranean mole man','Earth',80,120,20,32,8,115),
	(37,'Angry-bread loaf','Unaffiliated',2,2,5,1,2,200);

/*!40000 ALTER TABLE `monsters` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
