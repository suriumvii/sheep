-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: userinputdb
-- ------------------------------------------------------
-- Server version	5.7.18-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `croptable`
--

DROP TABLE IF EXISTS `croptable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `croptable` (
  `cropName` varchar(255) DEFAULT NULL,
  `plantingDate` date DEFAULT NULL,
  `harvestDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `croptable`
--

LOCK TABLES `croptable` WRITE;
/*!40000 ALTER TABLE `croptable` DISABLE KEYS */;
INSERT INTO `croptable` VALUES ('Tomato','2015-12-12','2015-12-12'),('Potato','2015-12-11','2015-12-12'),('Payatas','2015-12-11','1290-10-10'),('Tomatoe','1212-12-12','1212-12-12'),('crap','1212-12-12','1212-12-12'),('wu','1212-12-12','1212-12-12'),('Tomatoes','1212-12-12','1212-12-12'),('asd','1212-12-12','1212-12-12'),('asd','1212-12-12','1212-12-12'),('asd','1212-12-12','1212-12-12'),('asd','1212-12-12','1212-12-12'),('asd','1212-12-12','1212-12-12'),('asd','1212-12-12','1212-12-12'),('qwe','1212-12-12','1212-12-12'),('Tomatoe','1212-12-12','1212-12-12'),('Tomatoe','1212-12-12','1212-12-12'),('Tomatoe','1212-12-12','1212-12-12'),('Tomatoe','1212-12-12','1212-12-12'),('faktato','1212-12-12','1212-12-12'),('es','1010-10-10','1010-10-10');
/*!40000 ALTER TABLE `croptable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `landareadetails`
--

DROP TABLE IF EXISTS `landareadetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `landareadetails` (
  `username` varchar(255) NOT NULL,
  `usercrop` varchar(255) DEFAULT NULL,
  `landarea` int(11) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `plantingDate` date DEFAULT NULL,
  `harvestDate` date DEFAULT NULL,
  `estimatedVolume` decimal(5,2) DEFAULT NULL,
  `farmerName` varchar(255) DEFAULT NULL,
  `isSelected` tinyint(1) DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `landareadetails`
--

LOCK TABLES `landareadetails` WRITE;
/*!40000 ALTER TABLE `landareadetails` DISABLE KEYS */;
INSERT INTO `landareadetails` VALUES ('jack1','palay',400,'luzon','2017-05-06','2017-08-06',5.00,'Jack',0,121,15.4429),('jack10','mais',400,'luzon','2016-10-10','2017-01-10',5.00,'John',0,120.982,15.4393),('jack11','palay',12616,'luzon','1212-12-12','1213-03-12',5.00,'Laeral',0,120.994,15.4345),('jack12','palay',400,'visayas','2017-06-01','2017-07-01',5.00,'John',0,120.997,15.4304),('jack13','palay',1612,'visayas','2017-06-01','2017-09-01',5.00,'Cardlar',0,120.997,15.4505),('jack14','palay',400,'luzon','2017-06-01','2017-09-01',12.00,'Welp',0,120.996,15.4259),('jack15','mais',400,'luzon','2017-06-01','2017-09-01',2.00,'Fandrasel',0,120.988,15.4212),('jack16','mais',1261,'luzon','2017-06-01','2017-11-01',5.00,'John',0,120.995,15.4077),('jack17','mais',400,'luzon','2017-06-01','2017-12-01',5.00,'John',0,120.981,15.4134),('jack18','palay',400,'luzon','2017-06-01','2017-09-01',8.00,'Kelp',0,120.967,15.4353),('jack19','palay',400,'visayas','2017-06-01','2017-07-01',5.00,'John',0,120.957,15.4305),('jack2','palay',400,'visayas','2017-01-11','2017-04-11',5.00,'Esbole',0,120.955,15.418),('jack20','palay',400,'luzon','2017-06-01','2017-10-01',7.00,'Melp',0,120.966,15.4107),('jack21','palay',400,'visayas','2017-06-01','2017-10-01',5.00,'John',0,120.969,15.4227),('jack22','mais',400,'luzon','2017-06-01','2017-11-01',4.00,'Selp',0,124.547,11.3085),('jack23','palay',400,'visayas','2017-06-01','2017-09-01',5.00,'John',0,124.545,11.3119),('jack24','palay',400,'visayas','2017-06-01','2017-08-01',9.00,'Satron',0,124.544,11.3142),('jack25','mais',400,'luzon','2017-06-01','2017-09-01',5.00,'John',0,124.544,11.3184),('jack3','palay',124,'luzon','1212-06-12','1212-09-12',2.00,'Janice',0,124.541,11.3211),('jack4','palay',1255,'luzon','2017-06-01','2017-09-01',6.00,'Jake',0,124.539,11.3226),('jack5','mais',400,'luzon','1212-12-12','1213-03-12',5.00,'John',0,124.542,11.3259),('jack6','palay',171,'visayas','2017-07-10','2017-10-10',5.00,'Frotdan',0,124.533,11.3335),('jack7','mais',400,'luzon','2017-06-01','2017-11-01',11.00,'Jeric',0,124.523,11.3384),('jack8','palay',400,'visayas','2017-06-01','2017-09-01',5.00,'John',0,124.525,11.3399),('jack9','palay',1236,'luzon','2016-06-11','2016-09-11',5.00,'Pan',0,124.528,11.3373),('john1','palay',200,'mindanao','2017-06-15','2017-09-12',3.00,'Telamont',0,124.53,11.3359),('john10','palay',826,'mindanao','2017-06-15','2017-09-14',3.00,'Felsard',0,124.536,11.3262),('john11','palay',200,'visayas','1212-12-12','1213-03-12',3.00,'Garsbjorn',0,124.54,11.3317),('john12','palay',2020,'mindanao','2017-01-02','2017-04-02',3.00,'Asbarn',0,124.536,11.3303),('john13','mais',200,'mindanao','2017-06-15','2017-09-20',3.00,'Seldper',0,125.617,9.01988),('john14','mais',374,'mindanao','2017-06-15','2017-09-12',3.00,'Colseora',0,125.615,9.02484),('john15','palay',200,'luzon','2017-06-15','2017-09-25',3.00,'Felnir',0,125.601,9.01649),('john16','palay',200,'luzon','2017-06-15','2017-09-20',3.00,'Meskari',0,125.599,9.02136),('john17','palay',200,'mindanao','2017-06-15','2017-09-15',3.00,'Asbjorn',0,125.604,9.02759),('john18','palay',200,'luzon','2017-06-15','2017-09-15',3.00,'Gabrount',0,125.61,9.03137),('john19','palay',1261,'mindanao','2017-06-15','2017-09-15',3.00,'Seismen',0,125.59,9.01924),('john2','mais',200,'mindanao','2017-06-15','2017-09-09',3.00,'Galaeron',0,125.599,9.03586),('john20','mais',777,'luzon','2017-06-15','2017-09-20',3.00,'Tarkand',0,125.593,9.03243),('john21','mais',200,'luzon','2017-06-15','2017-09-15',3.00,'Rorunt',0,125.586,9.02848),('john22','palay',1236,'mindanao','2017-06-15','2017-09-20',3.00,'Ensaed',0,125.589,9.0412),('john23','mais',713,'visayas','2017-06-15','2017-09-20',3.00,'Hastram',0,125.593,9.05073),('john24','mais',666,'luzon','2017-06-15','2017-09-26',3.00,'Lorfasm',0,125.591,9.05451),('john25','mais',200,'mindanao','2017-06-15','2017-09-28',3.00,'Phaerim',0,125.578,9.05391),('john26','palay',200,'visayas','2017-06-15','2017-09-16',3.00,'Farasd',0,125.574,9.05531),('john3','mais',6352,'visayas','2017-06-15','2017-09-16',3.00,'Khelben',0,125.118,8.15196),('john4','mais',200,'mindanao','2017-06-15','2017-09-21',3.00,'Carl',0,125.118,8.15421),('john5','mais',1241,'visayas','2017-06-15','2017-09-21',3.00,'Varjaska',0,125.114,8.15019),('john6','mais',200,'luzon','2017-06-15','2017-09-20',3.00,'Dana',0,125.111,8.14242),('john7','palay',124,'luzon','2017-06-15','2017-09-14',3.00,'Mesiporeh',0,125.11,8.13911),('john8','mais',200,'visayas','2017-06-15','2017-09-22',3.00,'Ho`oudrun',0,125.111,8.13399),('john9','palay',200,'visayas','2017-06-15','2017-09-16',3.00,'Keinsel',0,125.12,8.13165);
/*!40000 ALTER TABLE `landareadetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registrytable`
--

DROP TABLE IF EXISTS `registrytable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registrytable` (
  `uniqueUsrnm` varchar(255) DEFAULT NULL,
  `userPassword` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `birthdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registrytable`
--

LOCK TABLES `registrytable` WRITE;
/*!40000 ALTER TABLE `registrytable` DISABLE KEYS */;
INSERT INTO `registrytable` VALUES ('admin','admin','em','castillo','m','1997-02-10'),('surium','qw','qw','qw','m','2017-10-10');
/*!40000 ALTER TABLE `registrytable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testland`
--

DROP TABLE IF EXISTS `testland`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testland` (
  `username` varchar(255) NOT NULL,
  `usercrop` varchar(255) DEFAULT NULL,
  `landarea` int(11) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `plantingdate` date DEFAULT NULL,
  `harvestdate` date DEFAULT NULL,
  `estimatedVolume` decimal(5,2) DEFAULT NULL,
  `farmerName` varchar(255) DEFAULT NULL,
  `isSelected` tinyint(4) DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testland`
--

LOCK TABLES `testland` WRITE;
/*!40000 ALTER TABLE `testland` DISABLE KEYS */;
INSERT INTO `testland` VALUES ('john1','mais',200,'luzon','2017-06-06','2017-12-09',3.00,'Asgore',0,120.887,14.8409),('john2','mais',200,'luzon','2017-06-06','2017-09-09',3.00,'Toriel',0,120.936,14.812),('john3','palay',126,'mindanao','2017-06-06','2017-07-09',3.00,'Asriel',0,125.6,9.06701),('john4','palay',126,'mindanao','2017-06-06','2017-11-09',3.00,'Sans',0,120.991,14.7181);
/*!40000 ALTER TABLE `testland` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-13 17:00:11
