# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 192.168.20.20 (MySQL 5.6.44)
# Database: collection
# Generation Time: 2019-08-05 14:45:07 +0000
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
  `healthpoints` int(11) NOT NULL DEFAULT '0',
  `strength` int(11) NOT NULL DEFAULT '0',
  `speed` int(11) NOT NULL DEFAULT '0',
  `agility` int(11) NOT NULL DEFAULT '0',
  `armour` int(11) NOT NULL DEFAULT '0',
  `intelligence` int(11) NOT NULL DEFAULT '0',
  `element` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `monsters` WRITE;
/*!40000 ALTER TABLE `monsters` DISABLE KEYS */;

INSERT INTO `monsters` (`id`, `type`, `healthpoints`, `strength`, `speed`, `agility`, `armour`, `intelligence`, `element`)
VALUES
	(1,'Goblin',16,10,16,14,2,50,'Earth'),
	(2,'Slime',3,2,1,4,0,0,'Earth'),
	(3,'Ancient lobster',70,28,10,8,30,28,'Water'),
	(4,'Skeleton ',12,8,12,8,0,15,'Earth'),
	(5,'Cave bat',2,1,70,40,0,4,'Earth'),
	(6,'Ogre',220,120,32,18,16,70,'Earth'),
	(7,'Jungle Slime',8,6,8,8,0,6,'Earth/Humid'),
	(8,'Vulture',4,3,90,48,0,8,'Earth/Arid'),
	(9,'Hobgoblin',22,26,22,22,4,65,'Earth'),
	(10,'Corrupted human',30,40,26,30,6,100,'Corruption'),
	(11,'Large rat',5,3,14,6,0,5,'Poison'),
	(12,'Clan rat',18,22,20,24,0,90,'Poison'),
	(13,'Devourer',320,80,34,16,8,10,'Corruption'),
	(14,'Eater of worlds',240,100,85,35,6,14,'Corruption'),
	(15,'Flying polyp',540,280,130,60,0,110,'Unaffiliated'),
	(16,'Walking shark',200,70,14,2,1,12,'Water'),
	(17,'Fire elemental',80,400,40,50,0,120,'Fire'),
	(18,'Glowing lizard',18,28,12,14,3,6,'Fire'),
	(19,'Giant arachnid',20,18,18,16,6,20,'Poison'),
	(20,'Stone golem',1000,350,6,1,300,30,'Earth'),
	(21,'Bull toad',50,40,42,12,1,6,'Water'),
	(22,'Merman',34,58,20,22,0,105,'Water'),
	(23,'Dark elf',24,32,32,36,0,95,'Poison'),
	(24,'Orc',60,70,28,22,2,80,'Earth'),
	(25,'Scorpion ',20,12,14,6,8,4,'Earth/Arid'),
	(26,'Huge fly',200,22,110,40,1,2,'Poison'),
	(27,'Wraith',34,48,24,20,28,80,'Corruption'),
	(28,'Antlion',38,50,28,8,20,10,'Earth/Arid'),
	(29,'Dragon',3000,320,140,48,20,150,'Air'),
	(30,'King slime',10000,120,20,8,0,40,'Earth'),
	(31,'Beastman',40,52,32,28,1,60,'Poison'),
	(32,'Vampire',200,90,46,42,0,125,'Corruption'),
	(33,'Cockroach man',140,110,60,50,8,100,'Unaffiliated'),
	(34,'Evil natural water',1,1000,200,100,0,60,'Water'),
	(35,'Harpy',30,20,60,64,3,70,'Air'),
	(36,'Subterranean mole man',80,120,20,32,8,115,'Earth'),
	(37,'Angry bread loaf',2,2,5,1,2,200,'Unaffiliated');

/*!40000 ALTER TABLE `monsters` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
