-- MariaDB dump 10.19-11.1.2-MariaDB, for osx10.19 (arm64)
--
-- Host: localhost    Database: Ecf2023GarageKarineP
-- ------------------------------------------------------
-- Server version	8.2.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `mileage` int NOT NULL,
  `dateInCirculation` date NOT NULL,
  `principalPicture` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car`
--

LOCK TABLES `car` WRITE;
/*!40000 ALTER TABLE `car` DISABLE KEYS */;
INSERT INTO `car` VALUES
(1,'PEUGEOT 108','VTI 72 STYLE S&S 4CV 5P','9955',72564,'2020-03-01','/Applications/MAMP/htdocs/Ecf2023GarageKarineP/pictures/PEUGEOT-108-2787626_2.JPG'),
(2,'CITROEN C5 AIRCROSS','PURETECH 130 S&S EAT8 SHINE','35990',3639,'2023-05-01','/Applications/MAMP/htdocs/Ecf2023GarageKarineP/pictures/CITROEN-C5-AIRCROSS-2801585_1.JPG'),
(3,'CITROEN C3','SOCIETE BLUEHDI 100 S&S BVM FEEL NAV','9970',62200,'2019-02-01','/Applications/MAMP/htdocs/Ecf2023GarageKarineP/pictures/CITROEN_C3_1.jpg');
/*!40000 ALTER TABLE `car` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_option`
--

DROP TABLE IF EXISTS `car_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car_option` (
  `id` int NOT NULL AUTO_INCREMENT,
  `carId` int DEFAULT NULL,
  `optionId` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carId` (`carId`),
  KEY `optionId` (`optionId`),
  CONSTRAINT `car_option_ibfk_1` FOREIGN KEY (`carId`) REFERENCES `car` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `car_option_ibfk_2` FOREIGN KEY (`optionId`) REFERENCES `optionCarEquipement` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_option`
--

LOCK TABLES `car_option` WRITE;
/*!40000 ALTER TABLE `car_option` DISABLE KEYS */;
INSERT INTO `car_option` VALUES
(1,1,2),
(2,1,4),
(3,2,1),
(4,2,3),
(5,2,4),
(6,2,5),
(7,2,7),
(8,2,8),
(16,3,2),
(17,3,3),
(18,3,4);
/*!40000 ALTER TABLE `car_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `optionCarEquipement`
--

DROP TABLE IF EXISTS `optionCarEquipement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `optionCarEquipement` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `optionCarEquipement`
--

LOCK TABLES `optionCarEquipement` WRITE;
/*!40000 ALTER TABLE `optionCarEquipement` DISABLE KEYS */;
INSERT INTO `optionCarEquipement` VALUES
(1,'climatisation automatique'),
(2,'climatisation manuelle'),
(3,'airbag passager'),
(4,'régulateur de vitesse'),
(5,'assistance de freinage d\'urgence'),
(6,'capteur de pression des pneus automatique'),
(7,'radar de recul'),
(8,'allumage automatique des feux');
/*!40000 ALTER TABLE `optionCarEquipement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lastName` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'PARROT','Vincent','vincentparrot@vparrot.fr','$2y$10$bECtrvV0bJl3ajnL5cXvkOFV/OMkna8utedBT4zUvBTofSxGd3SKK',1),
(2,'VISSON','Jean','jeanvisson@vparrot.fr','$2y$10$7J6srpsB4yiQpxzQN9M.Zudab5Kwq9lSDRzR7NGa26MSdk8GQysju',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-21  1:33:14
