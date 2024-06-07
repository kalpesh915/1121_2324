-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: 1121project
-- ------------------------------------------------------
-- Server version 	10.4.27-MariaDB
-- Date: Fri, 07 Jun 2024 12:21:07 +0530

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
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `logs` VALUES (1,'2024-05-27 06:26:18','admin@project.com','Login Successfully',1),(2,'2024-05-27 06:27:41','admin@project.com','Invalid Attempt of Login',1),(3,'2024-05-27 06:27:48','admin@project.com','Login Successfully',1),(4,'2024-05-27 06:30:58','admin@project.com','Login Successfully',1),(5,'2024-05-27 06:35:03','admin@project.com','Logout Successfully',1),(6,'2024-05-27 06:35:31','admin@project.com','Login Successfully',1),(7,'2024-05-27 06:43:35','admin@project.com','Logout Successfully',1),(8,'2024-05-27 06:43:39','admin@project.com','Login Successfully',1),(9,'2024-05-27 06:58:24','admin@project.com','Logout Successfully',1),(10,'2024-05-28 06:24:07','admin@project.com','Login Successfully',1),(11,'2024-05-28 06:37:06','admin@project.com',' Profile Updated to Meet, Sinojiya',1),(12,'2024-05-28 06:37:13','admin@project.com',' Profile Updated to Meet, Patel',1),(13,'2024-05-28 06:37:26','admin@project.com',' Profile Updated to Meet, Sinojiya',1),(14,'2024-05-28 06:46:03','admin@project.com','Password Changed Successfully',1),(15,'2024-05-28 06:46:03','admin@project.com',' Profile Updated to , ',1),(16,'2024-05-28 06:46:31','admin@project.com','Invalid Attempt of Password Change',1),(17,'2024-05-28 06:46:31','admin@project.com',' Profile Updated to , ',1),(18,'2024-05-28 06:47:26','admin@project.com',' Profile Updated to Meet, Sinojiya',1),(19,'2024-05-28 06:47:48','admin@project.com','Invalid Attempt of Password Change',1),(20,'2024-05-28 06:47:59','admin@project.com','Password Changed Successfully',1),(21,'2024-05-28 07:04:29','admin@project.com','Meta Tags Updated to , we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels, G-YS3ZLEG4S6',1),(22,'2024-05-28 07:05:25','admin@project.com','Meta Tags Updated to , we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels, G-YS3ZLEG4S6',1),(23,'2024-05-28 07:06:25','admin@project.com','Meta Tags Updated to Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable, we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels, G-YS3ZLEG4S6',1),(24,'2024-05-28 07:06:35','admin@project.com','Meta Tags Updated to Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable, we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels, G-YS3ZLEG4S6',1),(25,'2024-05-28 07:07:04','admin@project.com','Meta Tags Updated to Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable, we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels, G-YS3ZLEG4S6',1),(26,'2024-05-28 07:07:14','admin@project.com','Meta Tags Updated to Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable1, we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels1, G-YS3ZLEG4S61',1),(27,'2024-05-28 07:07:28','admin@project.com','Meta Tags Updated to Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable1, we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels1, G-YS3ZLEG4S61',1),(28,'2024-05-28 07:07:41','admin@project.com','Meta Tags Updated to Mobile Cable, Charge Cable, Best Cables, C Type Charger cable, Data Cable, Type c to Type c, Type c to USB, High Speed Charger Cable, we are one of the largest whole seller of mobile charger cables also we are deal in laptop cabels, G-YS3ZLEG4S6',1),(29,'2024-05-29 06:11:08','admin@project.com','Login Successfully',1),(30,'2024-05-29 07:01:59','admin@project.com','Logout Successfully',1),(31,'2024-05-30 05:33:48','admin@project.com','Login Successfully',1),(32,'2024-05-30 06:05:02','admin@project.com','Database Backup Successfully Stored in Backup of Database on 30052024_113502.sql',1),(33,'2024-05-30 06:08:31','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_113830.sql',1),(34,'2024-05-30 06:13:16','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_114315.sql',1),(35,'2024-05-30 06:15:48','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_114548.sql',1),(36,'2024-05-30 06:15:50','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_114550.sql',1),(37,'2024-05-30 06:15:52','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_114551.sql',1),(38,'2024-05-30 06:15:53','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_114553.sql',1),(39,'2024-05-30 06:15:55','admin@project.com','Database Backup Successfully Stored in Backup_of_Database_on_30052024_114554.sql',1),(40,'2024-05-30 06:39:02','admin@project.com','SMTP Configuration Updated to : mail.prajapatispirit.com, help@prajapatispirit.org, 123@iantRajkot, ssl, 465, 15',1),(41,'2024-05-30 06:39:34','admin@project.com','SMTP Configuration Updated to : mail.prajapatispirit.org, help@prajapatispirit.org, 123@iantRajkot, ssl, 465, 15',1),(42,'2024-05-30 07:00:11','admin@project.com','Settings Updated to 0, 0',1),(43,'2024-05-30 07:00:41','admin@project.com','Settings Updated to 1, 1',1),(44,'2024-06-04 06:09:44','admin@project.com','Login Successfully',1),(45,'2024-06-04 06:37:35','admin@project.com','Contact Details Updated to Meet Patel, 9988774400, 9988554400, meet@gmail.com1, meet@yahoo.com1, Kalawad road Rajkot India, https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.605690619866!2d70.7819714!3d22.292921700000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca2471312a07%3A0xabc998708aa8d138!2sBAPS%20Shri%20Swaminarayan%20Mandir%2C%20Rajkot!5e0!3m2!1sen!2sin!4v1717481895129!5m2!1sen!2sin',1),(46,'2024-06-04 06:55:44','admin@project.com','Social Media Links are Updated https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com',1),(47,'2024-06-04 06:55:57','admin@project.com','Social Media Links are Updated https://www.dummyurl.com.in, https://www.dummyurl.com.us, https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com, https://www.dummyurl.com',1),(48,'2024-06-04 06:56:20','admin@project.com','Logout Successfully',1),(49,'2024-06-05 05:44:29','admin@project.com','Login Successfully',1),(50,'2024-06-05 06:20:19','admin@project.com','Phone Cover added in database',1),(51,'2024-06-05 06:20:43','admin@project.com','Charger added in database',1),(52,'2024-06-05 06:20:50','admin@project.com','Data Cable added in database',1),(53,'2024-06-05 06:20:58','admin@project.com','Head Phone added in database',1),(54,'2024-06-05 06:21:06','admin@project.com','Memory Card added in database',1),(55,'2024-06-05 06:41:24','admin@project.com','Data Cable1 Updated in Database',1),(56,'2024-06-05 06:41:30','admin@project.com','Data Cable Updated in Database',1),(57,'2024-06-05 06:49:06','admin@project.com','Logout Successfully',1),(58,'2024-06-06 06:11:02','admin@project.com','Login Successfully',1),(59,'2024-06-06 06:31:12','admin@project.com','Question 1 FAQ added in database',1),(60,'2024-06-06 06:37:06','admin@project.com','Question 11 Updated in Database',1),(61,'2024-06-06 06:37:12','admin@project.com','Question 11 Updated in Database',1),(62,'2024-06-06 06:37:20','admin@project.com','Question 11 Updated in Database',1),(63,'2024-06-06 06:42:42','admin@project.com','Question 1 FAQ added in database',1),(64,'2024-06-06 06:42:50','admin@project.com','question 2 FAQ added in database',1),(65,'2024-06-06 06:42:57','admin@project.com','question 3 FAQ added in database',1),(66,'2024-06-06 06:58:59','admin@project.com','Logout Successfully',1),(67,'2024-06-07 06:04:16','admin@project.com','Login Successfully',1),(68,'2024-06-07 06:32:45','admin@project.com','User Friendly Service added in database',1),(69,'2024-06-07 06:41:23','admin@project.com','Car Service added in database',0),(70,'2024-06-07 06:46:48','admin@project.com','Car1 Updated in Database',0),(71,'2024-06-07 06:47:12','admin@project.com','Bus Updated in Database',0),(72,'2024-06-07 06:48:05','admin@project.com','Secure Service added in database',0);
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `logs` with 72 row(s)
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

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Fri, 07 Jun 2024 12:21:08 +0530
