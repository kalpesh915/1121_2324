-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: 1121project
-- ------------------------------------------------------
-- Server version 	10.4.27-MariaDB
-- Date: Fri, 14 Jun 2024 12:32:35 +0530

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
-- Table structure for table `career`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `career` (
  `careerid` int(11) NOT NULL AUTO_INCREMENT,
  `candidatefname` varchar(32) NOT NULL,
  `candidatelname` varchar(32) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dateofbirth` date NOT NULL,
  `jobposition` varchar(256) NOT NULL,
  `education` varchar(128) NOT NULL,
  `experience` varchar(128) NOT NULL,
  `candidatephone` varchar(20) NOT NULL,
  `candidateemail` varchar(128) NOT NULL,
  `candidateaddress` varchar(512) NOT NULL,
  `coverlatter` varchar(2048) NOT NULL,
  `resumepath` varchar(256) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`careerid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `career`
--

LOCK TABLES `career` WRITE;
/*!40000 ALTER TABLE `career` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `career` VALUES (1,'Brijesh','Miyatra','Male','2001-04-26','Manager','MBA','5+ Years','1234567890','brijesh@gmail.com','kalawad road rajkot','this is my first job application in MNC Company','resumes/brijesh resume.pdf',1,'2024-06-11 06:37:28','2024-06-11 06:55:48');
/*!40000 ALTER TABLE `career` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `career` with 1 row(s)
--

--
-- Table structure for table `categorys`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorys` (
  `categoryid` tinyint(4) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(128) NOT NULL,
  `categoryclassname` varchar(128) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorys`
--

LOCK TABLES `categorys` WRITE;
/*!40000 ALTER TABLE `categorys` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `categorys` VALUES (1,'Phone Cover','Phone_Cover',1),(2,'Charger','Charger',1),(3,'Data Cable','Data_Cable',1),(4,'Head Phone','Head_Phone',1),(5,'Memory Card','Memory_Card',1);
/*!40000 ALTER TABLE `categorys` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `categorys` with 5 row(s)
--

--
-- Table structure for table `contactus`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactus` (
  `contactid` int(11) NOT NULL AUTO_INCREMENT,
  `contactperson` varchar(64) NOT NULL,
  `phone1` varchar(20) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `email1` varchar(128) NOT NULL,
  `email2` varchar(128) NOT NULL,
  `address` varchar(1024) NOT NULL,
  `googlemap` varchar(2048) NOT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactus`
--

LOCK TABLES `contactus` WRITE;
/*!40000 ALTER TABLE `contactus` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `contactus` VALUES (1,'Meet Patel','9988774400','9988554400','meet@gmail.com1','meet@yahoo.com1','Kalawad road Rajkot India','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.605690619866!2d70.7819714!3d22.292921700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca2471312a07%3A0xabc998708aa8d138!2sBAPS%20Shri%20Swaminarayan%20Mandir%2C%20Rajkot!5e0!3m2!1sen!2sin!4v1717481895129!5m2!1sen!2sin');
/*!40000 ALTER TABLE `contactus` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `contactus` with 1 row(s)
--

--
-- Table structure for table `faq`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `faqid` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(1024) NOT NULL,
  `answer` varchar(4096) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`faqid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `faq` VALUES (3,'Question 1','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',1,'2024-06-06 06:42:42','2024-06-06 06:42:42'),(4,'question 2','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',1,'2024-06-06 06:42:50','2024-06-06 06:42:50'),(5,'question 3','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',1,'2024-06-06 06:42:57','2024-06-06 06:42:57');
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `faq` with 3 row(s)
--

--
-- Table structure for table `images`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `imageid` int(11) NOT NULL AUTO_INCREMENT,
  `imagetitle` varchar(128) NOT NULL,
  `imagedescription` varchar(1024) NOT NULL,
  `imagepath` varchar(512) NOT NULL,
  `imagetype` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`imageid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `images` VALUES (3,'Slider 11','Dummy Description text','images/gallery 13062024_120417 4818 img12.jpg',2,1,'2024-06-13 06:11:36','2024-06-13 06:34:17'),(4,'Slider 2','Dummy Description text','images/slider 13062024_114145 1461 img2.jpg',1,1,'2024-06-13 06:11:45','2024-06-13 06:17:58'),(5,'Slider 3','Dummy Description text','images/slider 13062024_114158 7576 img3.jpg',1,1,'2024-06-13 06:11:58','2024-06-13 06:17:58'),(6,'Gallery 1','Dummy Description text','images/gallery 13062024_114209 1006 img12.jpg',2,1,'2024-06-13 06:12:09','2024-06-13 06:17:58'),(7,'Gallery 2','Dummy Description text','images/gallery 13062024_114219 1096 img11.jpg',2,1,'2024-06-13 06:12:19','2024-06-13 06:17:58'),(8,'Gallery 3','Dummy Description text','images/gallery 13062024_114228 8419 img10.jpg',2,1,'2024-06-13 06:12:28','2024-06-13 06:17:58'),(9,'Slider 11','Dummy Description text Dummy Description text Dummy Description text Dummy Description text Dummy Description text Dummy Description text Dummy Description text Dummy Description text Dummy Description text Dummy Description text','images/slider 13062024_121415 7514 img10.jpg',1,1,'2024-06-13 06:37:45','2024-06-13 06:44:15');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `images` with 7 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `logs` VALUES (1,'2024-05-27 06:26:18','admin@project.com','Login Successfully',1),(2,'2024-05-27 06:27:41','admin@project.com','Invalid Attempt of Login',1),(3,'2024-05-27 06:27:48','admin@project.com','Login Successfully',1),(4,'2024-05-27 06:30:58','admin@project.com','Login Successfully',1),(5,'2024-05-27 06:35:03','admin@project.com','Logout Successfully',1),(6,'2024-05-27 06:35:31','admin@project.com','Login Successfully',1),(7,'2024-05-27 06:43:35','admin@project.com','Logout Successfully',1),(8,'2024-05-27 06:43:39','admin@project.com','Login Successfully',1),(9,'2024-05-27 06:58:24','admin@project.com','Logout Successfully',1),(10,'2024-05-28 06:24:07','admin@project.com','Login Successfully',1),(11,'2024-05-28 06:37:06','admin@project.com',' Profile Updated to Meet, Sinojiya',1),(12,'2024-05-28 06:37:13','admin@project.com',' Profile Updated to Meet, Patel',1),(13,'2024-05-28 06:37:26','admin@project.com',' Profile Updated to Meet, Sinojiya',1),(14,'2024-05-28 06:46:03','admin@project.com','Password Changed Successfully',1),(15,'2024-05-28 06:46:03','admin@project.com',' Profile Updated to , ',1),(16,'2024-05-28 06:46:31','admin@project.com','Invalid Attempt of Password Change',1),(17,'2024-05-28 06:46:31','admin@project.com',' Profile Updated to , ',1),(18,'2024-05-28 06:47:26','admin@project.com',' Profile Updated to Meet, Sinojiya',1),(19,'2024-05-28 06:47:48','admin@project.com','Invalid Attempt of Password Change',1),(20,'2024-05-28 06:47:59','admin@project.com','Password Changed Successfully',1),(21,'2024-05-28 07:04:29','admin@project.com','Meta Tags Updated to , we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels, G-YS3ZLEG4S6',1),(22,'2024-05-28 07:05:25','admin@project.com','Meta Tags Updated to , we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels, G-YS3ZLEG4S6',1),(23,'2024-05-28 07:06:25','admin@project.com','Meta Tags Updated to Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable, we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels, G-YS3ZLEG4S6',1),(24,'2024-05-28 07:06:35','admin@project.com','Meta Tags Updated to Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable, we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels, G-YS3ZLEG4S6',1),(25,'2024-05-28 07:07:04','admin@project.com','Meta Tags Updated to Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable, we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels, G-YS3ZLEG4S6',1),(26,'2024-05-28 07:07:14','admin@project.com','Meta Tags Updated to Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable1, we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels1, G-YS3ZLEG4S61',1),(27,'2024-05-28 07:07:28','admin@project.com','Meta Tags Updated to Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable1, we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels1, G-YS3ZLEG4S61',1),(28,'2024-05-28 07:07:41','admin@project.com','Meta Tags Updated to Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable, we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels, G-YS3ZLEG4S6',1),(29,'2024-05-29 06:11:08','admin@project.com','Login Successfully',1),(30,'2024-05-29 07:01:59','admin@project.com','Logout Successfully',1),(31,'2024-05-30 05:33:48','admin@project.com','Login Successfully',1),(32,'2024-05-30 06:05:02','admin@project.com','Database Backup Successfully Stored in Backup of Database on 30052024_113502.sql',1),(33,'2024-05-30 06:08:31','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_113830.sql',1),(34,'2024-05-30 06:13:16','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_114315.sql',1),(35,'2024-05-30 06:15:48','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_114548.sql',1),(36,'2024-05-30 06:15:50','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_114550.sql',1),(37,'2024-05-30 06:15:52','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_114551.sql',1),(38,'2024-05-30 06:15:53','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_114553.sql',1),(39,'2024-05-30 06:15:55','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_114554.sql',1),(40,'2024-05-30 06:39:02','admin@project.com','SMTP Configuration Updated to : mail.prajapatispirit.com, help@prajapatispirit.org, 123@iantRajkot, ssl, 465, 15',1),(41,'2024-05-30 06:39:34','admin@project.com','SMTP Configuration Updated to : mail.prajapatispirit.org, help@prajapatispirit.org, 123@iantRajkot, ssl, 465, 15',1),(42,'2024-05-30 07:00:11','admin@project.com','Settings Updated to 0, 0',1),(43,'2024-05-30 07:00:41','admin@project.com','Settings Updated to 1, 1',1),(44,'2024-06-04 06:09:44','admin@project.com','Login Successfully',1),(45,'2024-06-04 06:37:35','admin@project.com','Contact Details Updated to Meet Patel, 9988774400, 9988554400, meet@gmail.com1, meet@yahoo.com1, Kalawad road Rajkot India, https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.605690619866!2d70.7819714!3d22.292921700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca2471312a07%3A0xabc998708aa8d138!2sBAPS%20Shri%20Swaminarayan%20Mandir%2C%20Rajkot!5e0!3m2!1sen!2sin!4v1717481895129!5m2!1sen!2sin',1),(46,'2024-06-04 06:55:44','admin@project.com','Social Media Links are Updated https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com',1),(47,'2024-06-04 06:55:57','admin@project.com','Social Media Links are Updated https://www.dummyurl.com.in, https://www.dummyurl.com.us, https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com',1),(48,'2024-06-04 06:56:20','admin@project.com','Logout Successfully',1),(49,'2024-06-05 05:44:29','admin@project.com','Login Successfully',1),(50,'2024-06-05 06:20:19','admin@project.com','Phone Cover added in database',1),(51,'2024-06-05 06:20:43','admin@project.com','Charger added in database',1),(52,'2024-06-05 06:20:50','admin@project.com','Data Cable added in database',1),(53,'2024-06-05 06:20:58','admin@project.com','Head Phone added in database',1),(54,'2024-06-05 06:21:06','admin@project.com','Memory Card added in database',1),(55,'2024-06-05 06:41:24','admin@project.com','Data Cable1 Updated in Database',1),(56,'2024-06-05 06:41:30','admin@project.com','Data Cable Updated in Database',1),(57,'2024-06-05 06:49:06','admin@project.com','Logout Successfully',1),(58,'2024-06-06 06:11:02','admin@project.com','Login Successfully',1),(59,'2024-06-06 06:31:12','admin@project.com','Question 1 FAQ added in database',1),(60,'2024-06-06 06:37:06','admin@project.com','Question 11 Updated in Database',1),(61,'2024-06-06 06:37:12','admin@project.com','Question 11 Updated in Database',1),(62,'2024-06-06 06:37:20','admin@project.com','Question 11 Updated in Database',1),(63,'2024-06-06 06:42:42','admin@project.com','Question 1 FAQ added in database',1),(64,'2024-06-06 06:42:50','admin@project.com','question 2 FAQ added in database',1),(65,'2024-06-06 06:42:57','admin@project.com','question 3 FAQ added in database',1),(66,'2024-06-06 06:58:59','admin@project.com','Logout Successfully',1),(67,'2024-06-07 06:04:16','admin@project.com','Login Successfully',1),(68,'2024-06-07 06:32:45','admin@project.com','User Friendly Service added in database',1),(69,'2024-06-07 06:41:23','admin@project.com','Car Service added in database',1),(70,'2024-06-07 06:46:48','admin@project.com','Car1 Updated in Database',1),(71,'2024-06-07 06:47:12','admin@project.com','Bus Updated in Database',1),(72,'2024-06-07 06:48:05','admin@project.com','Secure Service added in database',1),(73,'2024-06-07 06:51:08','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_07062024_122107.sql',1),(74,'2024-06-10 06:05:21','admin@project.com','Login Successfully',1),(75,'2024-06-10 06:26:00','admin@project.com','Login Successfully',1),(76,'2024-06-10 06:26:34','admin@project.com','Login Successfully',1),(77,'2024-06-10 06:46:50','admin@project.com','New Team Member Meet Sinojiya Added in Database',1),(78,'2024-06-10 06:48:29','admin@project.com','New Team Member Krishil Trivedi Added in Database',1),(79,'2024-06-10 06:49:01','admin@project.com','New Team Member Pooja Mori Added in Database',1),(80,'2024-06-10 06:49:46','admin@project.com','New Team Member Pooja Mori Added in Database',1),(81,'2024-06-10 06:50:07','admin@project.com','New Team Member Pooja Mori Added in Database',1),(82,'2024-06-10 06:52:22','admin@project.com','New Team Member Pooja Mori Added in Database',1),(83,'2024-06-10 06:52:53','admin@project.com','New Team Member Pooja Mori Added in Database',1),(84,'2024-06-10 06:52:55','admin@project.com','New Team Member Pooja Mori Added in Database',1),(85,'2024-06-10 06:53:26','admin@project.com','New Team Member Pooja Mori Added in Database',1),(86,'2024-06-10 06:53:30','admin@project.com','New Team Member Pooja Mori Added in Database',1),(87,'2024-06-10 06:54:12','admin@project.com','New Team Member Pooja Mori Added in Database',1),(88,'2024-06-10 06:58:35','admin@project.com','Logout Successfully',1),(89,'2024-06-11 06:05:49','admin@project.com','Login Successfully',1),(90,'2024-06-11 06:26:00','admin@project.com','New Team Member KRISHIL TRIVEDI Update in Database',1),(91,'2024-06-11 06:26:12','admin@project.com','New Team Member KRISHIL TRIVEDI Update in Database',1),(92,'2024-06-11 06:26:39','admin@project.com','New Team Member Krishil Trivedi Update in Database',1),(93,'2024-06-11 07:03:26','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_11062024_123325.sql',1),(94,'2024-06-11 07:03:31','admin@project.com','Logout Successfully',1),(95,'2024-06-12 06:06:43','admin@project.com','Login Successfully',1),(96,'2024-06-12 06:36:40','admin@project.com','New Image Uplaoded with Name images/slider 12062024_120640 5775 img1.jpg',1),(97,'2024-06-12 06:37:12','admin@project.com','New Image Uplaoded with Name images/gallery 12062024_120712 2056 img2.jpg',1),(98,'2024-06-12 06:57:50','admin@project.com','Logout Successfully',1),(99,'2024-06-13 05:20:12','admin@project.com','Login Successfully',1),(100,'2024-06-13 06:11:36','admin@project.com','New Image Uplaoded with Name images/slider 13062024_114136 2339 img1.jpg',1),(101,'2024-06-13 06:11:45','admin@project.com','New Image Uplaoded with Name images/slider 13062024_114145 1461 img2.jpg',1),(102,'2024-06-13 06:11:58','admin@project.com','New Image Uplaoded with Name images/slider 13062024_114158 7576 img3.jpg',1),(103,'2024-06-13 06:12:09','admin@project.com','New Image Uplaoded with Name images/gallery 13062024_114209 1006 img12.jpg',1),(104,'2024-06-13 06:12:19','admin@project.com','New Image Uplaoded with Name images/gallery 13062024_114219 1096 img11.jpg',1),(105,'2024-06-13 06:12:28','admin@project.com','New Image Uplaoded with Name images/gallery 13062024_114228 8419 img10.jpg',1),(106,'2024-06-13 06:37:45','admin@project.com','New Image Uplaoded with Name images/slider 13062024_120745 2411 img8.jpg',1),(107,'2024-06-14 06:22:55','admin@project.com','Login Successfully',1);
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `logs` with 107 row(s)
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
INSERT INTO `messages` VALUES (1,'2024-05-29 06:12:18','Meet','Sinojiya','meet@gmail.com','9966332211455','Testing','Welcome to example of Messages',0),(2,'2024-05-29 06:12:18','Meet','Sinojiya','meet@gmail.com','9966332211455','Testing','Welcome to example of Messages',0),(3,'2024-05-29 06:12:18','Meet','Sinojiya','meet@gmail.com','9966332211455','Testing','Welcome to example of Messages',0);
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

--
-- Table structure for table `productimages`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productimages` (
  `productimageid` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) NOT NULL,
  `mediapath` varchar(512) NOT NULL,
  `mediatype` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`productimageid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productimages`
--

LOCK TABLES `productimages` WRITE;
/*!40000 ALTER TABLE `productimages` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `productimages` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `productimages` with 0 row(s)
--

--
-- Table structure for table `products`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(256) NOT NULL,
  `productbrandname` varchar(128) NOT NULL,
  `productcategory` int(11) NOT NULL,
  `productdescription` varchar(2048) NOT NULL,
  `manufacturedate` date NOT NULL,
  `productcolor` varchar(64) NOT NULL,
  `productweight` varchar(32) NOT NULL,
  `productsize` varchar(64) NOT NULL,
  `productpackaging` varchar(128) NOT NULL,
  `productmaterial` varchar(256) NOT NULL,
  `productshape` varchar(32) NOT NULL,
  `productcountry` varchar(64) NOT NULL,
  `productmrp` decimal(10,2) NOT NULL,
  `productdiscount` decimal(10,2) NOT NULL,
  `returnpolicy` varchar(2048) NOT NULL,
  `productwarranty` varchar(128) NOT NULL,
  `minimumorder` varchar(128) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `products` with 0 row(s)
--

--
-- Table structure for table `services`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `serviceid` tinyint(4) NOT NULL AUTO_INCREMENT,
  `servicetitle` varchar(64) NOT NULL,
  `servicedescription` varchar(512) NOT NULL,
  `serviceicon` varchar(128) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`serviceid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `services` VALUES (2,'User Friendly','','fa fa-user-circle',1,'2024-06-07 06:32:45','2024-06-07 06:35:49'),(3,'Bus','We provide Bus on Rent','fa fa-bus',1,'2024-06-07 06:41:23','2024-06-07 06:47:12'),(4,'Secure','We provide secure database','fa fa-shield',1,'2024-06-07 06:48:05','2024-06-07 06:48:05');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `services` with 3 row(s)
--

--
-- Table structure for table `settings`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `settingid` tinyint(4) NOT NULL AUTO_INCREMENT,
  `googletranslate` tinyint(4) NOT NULL,
  `careeroption` tinyint(4) NOT NULL,
  PRIMARY KEY (`settingid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `settings` VALUES (1,1,1);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `settings` with 1 row(s)
--

--
-- Table structure for table `smtpconfig`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `smtpconfig` (
  `configid` int(11) NOT NULL AUTO_INCREMENT,
  `smtphostname` varchar(128) NOT NULL,
  `smtpusername` varchar(128) NOT NULL,
  `smtppassword` varchar(128) NOT NULL,
  `smtpsecure` varchar(20) NOT NULL,
  `smtpport` varchar(10) NOT NULL,
  `otptimelimit` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`configid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smtpconfig`
--

LOCK TABLES `smtpconfig` WRITE;
/*!40000 ALTER TABLE `smtpconfig` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `smtpconfig` VALUES (1,'mail.prajapatispirit.org','help@prajapatispirit.org','123@iantRajkot','ssl','465',15,'2024-05-21 02:23:06','2024-05-30 06:39:34');
/*!40000 ALTER TABLE `smtpconfig` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `smtpconfig` with 1 row(s)
--

--
-- Table structure for table `socialmedia`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `socialmedia` (
  `socialid` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(256) NOT NULL,
  `twitter` varchar(256) NOT NULL,
  `instagram` varchar(256) NOT NULL,
  `youtube` varchar(256) NOT NULL,
  `snapchat` varchar(256) NOT NULL,
  `linkedin` varchar(256) NOT NULL,
  `telegram` varchar(256) NOT NULL,
  `whatsapp` varchar(256) NOT NULL,
  PRIMARY KEY (`socialid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `socialmedia`
--

LOCK TABLES `socialmedia` WRITE;
/*!40000 ALTER TABLE `socialmedia` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `socialmedia` VALUES (1,'https://www.dummyurl.com.in','https://www.dummyurl.com.us','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com');
/*!40000 ALTER TABLE `socialmedia` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `socialmedia` with 1 row(s)
--

--
-- Table structure for table `subscribers`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscribers` (
  `subscriberid` int(11) NOT NULL AUTO_INCREMENT,
  `subscriberemail` varchar(256) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`subscriberid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribers`
--

LOCK TABLES `subscribers` WRITE;
/*!40000 ALTER TABLE `subscribers` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `subscribers` VALUES (1,'meet@gmail.com',1,'2024-06-06 06:46:42','2024-06-06 06:46:42'),(4,'brijesh@gmail.com',1,'2024-06-06 06:47:01','2024-06-06 06:47:01');
/*!40000 ALTER TABLE `subscribers` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `subscribers` with 2 row(s)
--

--
-- Table structure for table `team`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `teamid` tinyint(4) NOT NULL AUTO_INCREMENT,
  `membername` varchar(64) NOT NULL,
  `memberdesignation` varchar(128) NOT NULL,
  `memberdescription` varchar(256) NOT NULL,
  `memberfacebook` varchar(256) NOT NULL,
  `memberinstagram` varchar(256) NOT NULL,
  `membertwitter` varchar(256) NOT NULL,
  `memberlinkedin` varchar(256) NOT NULL,
  `memberyoutube` varchar(256) NOT NULL,
  `membersnapchat` varchar(256) NOT NULL,
  `membertelegram` varchar(256) NOT NULL,
  `memberphoto` varchar(256) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`teamid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `team` VALUES (1,'Meet Sinojiya','Manager','10+ year Developing Exprience','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','memberphotos/Meet Sinojiya 10062024121650 88459 img1.jpg',1,'2024-06-10 06:46:50','2024-06-11 06:12:33'),(2,'Krishil Trivedi','General Manager','16+ year Developing Exprience','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','','','','','memberphotos/Krishil Trivedi 11062024115638 52193 img7.jpg',1,'2024-06-10 06:48:29','2024-06-11 06:26:38'),(3,'Pooja Mori','Junior Manager','10+ year Developing Exprience','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','memberphotos/Pooja Mori 10062024121901 76860 img1.jpg',1,'2024-06-10 06:49:01','2024-06-11 06:12:35'),(4,'Pooja Mori','Junior Manager','10+ year Developing Exprience','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','memberphotos/Pooja Mori 10062024121946 45551 img1.jpg',0,'2024-06-10 06:49:46','2024-06-11 06:12:08'),(10,'Pooja Mori','Junior Manager','10+ year Developing Exprience','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','https://www.dummyurl.com','memberphotos/Pooja Mori 10062024122330 68656 img1.jpg',0,'2024-06-10 06:53:30','2024-06-11 06:12:05');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `team` with 5 row(s)
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

-- Dump completed on: Fri, 14 Jun 2024 12:32:36 +0530
