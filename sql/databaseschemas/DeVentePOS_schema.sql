-- MySQL dump 10.13  Distrib 5.7.31, for Linux (x86_64)
--
-- Host: localhost    Database: TenToSixProject
-- ------------------------------------------------------
-- Server version	5.7.31-0ubuntu0.18.04.1

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
-- Current Database: `TenToSixProject`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `DeVenteDB` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `DeVenteDB`;

--
-- Temporary table structure for view `OutofStockItems`
--

DROP TABLE IF EXISTS `OutofStockItems`;
/*!50001 DROP VIEW IF EXISTS `OutofStockItems`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `OutofStockItems` AS SELECT 
 1 AS `Description`,
 1 AS `InStock`,
 1 AS `ReorderLevel`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `Stock`
--

DROP TABLE IF EXISTS `Stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Stock` (
  `ProductNumber` varchar(6) NOT NULL,
  `Items` varchar(30) DEFAULT NULL,
  `Quantity` float DEFAULT NULL,
  `UnitPrice` float DEFAULT NULL,
  `ReorderLevel` float DEFAULT NULL,
  `Unit` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ProductNumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Stock_t`
--

DROP TABLE IF EXISTS `Stock_t`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Stock_t` (
  `ProductNumber` varchar(6) NOT NULL,
  `Items` varchar(30) DEFAULT NULL,
  `Quantity` float DEFAULT NULL,
  `UnitPrice` float DEFAULT NULL,
  `ReorderLevel` float DEFAULT NULL,
  `Unit` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


--
-- Table structure for table `Stock_t2`
--

DROP TABLE IF EXISTS `Stock_t2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Stock_t2` (
  `ProductNumber` varchar(6) NOT NULL,
  `Quantity` float DEFAULT NULL,
  `UnitPrice` float DEFAULT NULL,
  `ReorderLevel` float DEFAULT NULL,
  `Unit` varchar(10) DEFAULT NULL,
  `Description` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Stock_t2`
--

LOCK TABLES `Stock_t2` WRITE;
/*!40000 ALTER TABLE `Stock_t2` DISABLE KEYS */;
/*!40000 ALTER TABLE `Stock_t2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Stock_t3`
--

DROP TABLE IF EXISTS `Stock_t3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Stock_t3` (
  `ProductNumber` varchar(6) NOT NULL,
  `Description` varchar(30) DEFAULT NULL,
  `Quantity` float DEFAULT NULL,
  `UnitPrice` float DEFAULT NULL,
  `ReorderLevel` float DEFAULT NULL,
  `Unit` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


--
-- Current Database: `DeVenteDB`
--

USE `DeVenteDB`;

--
-- Final view structure for view `OutofStockItems`
--

/*!50001 DROP VIEW IF EXISTS `OutofStockItems`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `OutofStockItems` AS select `Stock_t`.`Items` AS `Description`,`Stock_t`.`Quantity` AS `InStock`,`Stock_t`.`ReorderLevel` AS `ReorderLevel` from `Stock_t` where (`Stock_t`.`Quantity` < `Stock_t`.`ReorderLevel`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-07 23:38:21
