-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: 10.10.51.252    Database: guillaume
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `jeuxenvente`
--

DROP TABLE IF EXISTS `jeuxenvente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jeuxenvente` (
  `jeuxID` int NOT NULL AUTO_INCREMENT,
  `jeuxNom` varchar(255) NOT NULL,
  `jeuxLimiteAge` int DEFAULT NULL,
  `dateDeSortie` date DEFAULT NULL,
  `jeuxPrix` int NOT NULL,
  `jeuxStock` int NOT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `jeuxImage` varchar(255) DEFAULT NULL,
  `userId` int NOT NULL,
  `licenceID` int NOT NULL,
  `editeurID` int NOT NULL,
  `userRole` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`jeuxID`),
  KEY `userId` (`userId`),
  KEY `licenceID` (`licenceID`),
  KEY `editeurID` (`editeurID`),
  CONSTRAINT `jeuxenvente_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `jeuxenvente_ibfk_2` FOREIGN KEY (`licenceID`) REFERENCES `licence` (`licenceID`),
  CONSTRAINT `jeuxenvente_ibfk_3` FOREIGN KEY (`editeurID`) REFERENCES `editeur` (`editeurID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jeuxenvente`
--

LOCK TABLES `jeuxenvente` WRITE;
/*!40000 ALTER TABLE `jeuxenvente` DISABLE KEYS */;
INSERT INTO `jeuxenvente` VALUES (1,'watchdogs2',18,'2016-11-15',40,25,'Watch Dogs 2 est un jeu d\'aventure en monde ouvert faisant suite aux événements du premier épisode. Ce nouvel opus de la franchise nous entraîne au cœur de la ville de San Francisco dans la peau du nouveau héros Marcus Holloway, un jeune hacker surdoué victime des algorithmes prédictifs du ctOS 2.0 qui l’accusent d’un crime qu’il n’a pas commis. Dans sa quête de vérité, Marcus pourra hacker les infrastructures de la ville ainsi que les personnes qui sont connectées au réseau.','https://image.jeuxvideo.com/medias-md/148113/1481131475-7130-card.png',13,3,6,NULL),(2,'the legend of Zelda Breath of the wild',12,'2017-03-03',60,25,'Après un sommeil de 100 ans, Link se réveille seul dans un monde dont il ne se souvient plus. Le héros légendaire doit maintenant explorer une terre vaste et dangereuse et retrouver ses souvenirs avant qu\'Hyrule ne soit perdue à jamais. Armé uniquement de ce qu\'il peut récupérer, Link part à la recherche de réponses et des ressources nécessaires à sa survie.','https://www.zelda.com/breath-of-the-wild/assets/img/media/wallpaper-7-thumb.jpg',13,1,1,NULL);
/*!40000 ALTER TABLE `jeuxenvente` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-27 16:16:47
