-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: 1121project
-- ------------------------------------------------------
-- Server version 	10.4.27-MariaDB
-- Date: Thu, 30 May 2024 11:45:54 +0530

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40101 SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `adminusers`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adminusers` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `adminemail` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminusers`
--

LOCK TABLES `adminusers` WRITE;
/*!40000 ALTER TABLE `adminusers` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `adminusers` VALUES (1,'Meet','Sinojiya','admin@project.com','d033e22ae348aeb5660fc2140aec35850c4da997','2024-05-27 06:14:40','2024-05-28 06:47:59');
/*!40000 ALTER TABLE `adminusers` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `adminusers` with 1 row(s)
--

--
-- Table structure for table `logs`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logs` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `eventtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `adminemail` varchar(128) NOT NULL,
  `logmessage` varchar(2048) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `logs` VALUES (1,'2024-05-27 06:26:18','admin@project.com','Login Successfully',1),(2,'2024-05-27 06:27:41','admin@project.com','Invalid Attempt of Login',1),(3,'2024-05-27 06:27:48','admin@project.com','Login Successfully',1),(4,'2024-05-27 06:30:58','admin@project.com','Login Successfully',1),(5,'2024-05-27 06:35:03','admin@project.com','Logout Successfully',1),(6,'2024-05-27 06:35:31','admin@project.com','Login Successfully',1),(7,'2024-05-27 06:43:35','admin@project.com','Logout Successfully',1),(8,'2024-05-27 06:43:39','admin@project.com','Login Successfully',1),(9,'2024-05-27 06:58:24','admin@project.com','Logout Successfully',1),(10,'2024-05-28 06:24:07','admin@project.com','Login Successfully',1),(11,'2024-05-28 06:37:06','admin@project.com',' Profile Updated to Meet, Sinojiya',1),(12,'2024-05-28 06:37:13','admin@project.com',' Profile Updated to Meet, Patel',1),(13,'2024-05-28 06:37:26','admin@project.com',' Profile Updated to Meet, Sinojiya',1),(14,'2024-05-28 06:46:03','admin@project.com','Password Changed Successfully',1),(15,'2024-05-28 06:46:03','admin@project.com',' Profile Updated to , ',1),(16,'2024-05-28 06:46:31','admin@project.com','Invalid Attempt of Password Change',1),(17,'2024-05-28 06:46:31','admin@project.com',' Profile Updated to , ',1),(18,'2024-05-28 06:47:26','admin@project.com',' Profile Updated to Meet, Sinojiya',1),(19,'2024-05-28 06:47:48','admin@project.com','Invalid Attempt of Password Change',1),(20,'2024-05-28 06:47:59','admin@project.com','Password Changed Successfully',1),(21,'2024-05-28 07:04:29','admin@project.com','Meta Tags Updated to , we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels, G-YS3ZLEG4S6',1),(22,'2024-05-28 07:05:25','admin@project.com','Meta Tags Updated to , we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels, G-YS3ZLEG4S6',1),(23,'2024-05-28 07:06:25','admin@project.com','Meta Tags Updated to Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable, we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels, G-YS3ZLEG4S6',1),(24,'2024-05-28 07:06:35','admin@project.com','Meta Tags Updated to Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable, we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels, G-YS3ZLEG4S6',1),(25,'2024-05-28 07:07:04','admin@project.com','Meta Tags Updated to Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable, we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels, G-YS3ZLEG4S6',1),(26,'2024-05-28 07:07:14','admin@project.com','Meta Tags Updated to Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable1, we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels1, G-YS3ZLEG4S61',1),(27,'2024-05-28 07:07:28','admin@project.com','Meta Tags Updated to Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable1, we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels1, G-YS3ZLEG4S61',1),(28,'2024-05-28 07:07:41','admin@project.com','Meta Tags Updated to Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable, we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels, G-YS3ZLEG4S6',1),(29,'2024-05-29 06:11:08','admin@project.com','Login Successfully',1),(30,'2024-05-29 07:01:59','admin@project.com','Logout Successfully',0),(31,'2024-05-30 05:33:48','admin@project.com','Login Successfully',0),(32,'2024-05-30 06:05:02','admin@project.com','Database Backup Successfully Stored in Backup of Database on 30052024_113502.sql',0),(33,'2024-05-30 06:08:31','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_113830.sql',0),(34,'2024-05-30 06:13:16','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_114315.sql',0),(35,'2024-05-30 06:15:48','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_114548.sql',0),(36,'2024-05-30 06:15:50','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_114550.sql',0),(37,'2024-05-30 06:15:52','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_114551.sql',0),(38,'2024-05-30 06:15:53','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_114553.sql',0);
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `logs` with 38 row(s)
--

--
-- Table structure for table `messages`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `messageid` int(11) NOT NULL AUTO_INCREMENT,
  `messagetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `fname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `senderemail` varchar(128) NOT NULL,
  `senderphone` varchar(20) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `message` varchar(2048) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`messageid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `messages` VALUES (1,'2024-05-29 06:12:18','Meet','Sinojiya','meet@gmail.com','9966332211455','Testing','Welcome to example of Messages',1),(2,'2024-05-29 06:12:18','Meet','Sinojiya','meet@gmail.com','9966332211455','Testing','Welcome to example of Messages',1),(3,'2024-05-29 06:12:18','Meet','Sinojiya','meet@gmail.com','9966332211455','Testing','Welcome to example of Messages',1);
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `messages` with 3 row(s)
--

--
-- Table structure for table `metatags`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metatags` (
  `metaid` tinyint(4) NOT NULL AUTO_INCREMENT,
  `metakeywords` varchar(1024) NOT NULL,
  `metadescription` varchar(4096) NOT NULL,
  `googletagid` varchar(20) NOT NULL,
  PRIMARY KEY (`metaid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metatags`
--

LOCK TABLES `metatags` WRITE;
/*!40000 ALTER TABLE `metatags` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `metatags` VALUES (1,'Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable','we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels','G-YS3ZLEG4S6');
/*!40000 ALTER TABLE `metatags` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `metatags` with 1 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Thu, 30 May 2024 11:45:55 +0530
