-- MariaDB dump 10.19  Distrib 10.6.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: class_db
-- ------------------------------------------------------
-- Server version	10.6.12-MariaDB-0ubuntu

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
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lname` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `short_bio` text DEFAULT NULL,
  `user_image` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `employment_date` year(4) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES (1,'Wangui','MissSharleen','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ut sed a! Earum voluptas','f1.eps','https://linkedin.com/jane-doe','Wanguiatexample.com','director',2005,1),(2,'Wanjala','DrJotham','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ut sed a! Earum voluptas','m1.jpg','https://linkedin.com/john-doe','Wanjalatexample.com','director',2005,1),(3,'Elisha','ProfDodrich','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ut sed a! Earum voluptas','m2.jpg','https://linkedin.com/john-doe','dodrichatsample.com','director',2005,1),(4,'Eunice','DrMukami','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ut sed a! Earum voluptas','f2.jpg','https://linkedin.com/jane-doe','mukamiatjkuat.com','director',2005,1),(5,'Kamaki','Ian','Manager','','','kamaki@maziwa.com','employee',2008,1),(6,'Abigael','Johnson','Cashier','','','abigael@maziwa.com','employee',2009,1),(7,'Getao','Cynthia','Operations','','','getao@maziwa.com','employee',2009,1),(8,'Ndolo','Mwakazi','Operations',NULL,NULL,'ndolo@maziwa.com','employee',2011,1),(9,'Nyakio','Grace','Manager',NULL,NULL,'nyakio@maziwa.com','employee',2006,0),(10,'Kigera','David','Logistics',NULL,NULL,'kigera@maziwa.com','employee',2010,1),(11,'Mwashigadi','Purity','Quality Assurance',NULL,NULL,'mwashigadi@maziwa.com','employee',2007,1);
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `contact_date` datetime DEFAULT NULL,
  `message` text DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-25 15:37:49
