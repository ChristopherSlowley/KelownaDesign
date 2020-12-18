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

USE `DeVenteDB`;


--
-- Loading data for table `Stock`
--

LOCK TABLES `Stock` WRITE;
/*!40000 ALTER TABLE `Stock` DISABLE KEYS */;
INSERT INTO `Stock` VALUES ('PBB36','Peanut Butter Biscuit',116,15,15,'Packs'),('LCM21','Large Chicken Meal',0,150,0,'Meal'),('MCM20','Medium Chicken Meal',0,130,0,'Meal'),('SCM19','Small Chicken Meal',-1,100,0,'Meal'),('LCGM24','Large Curry Goat Meal',0,150,0,'Meal'),('MCGM22','Medium Curry Goat Meal',0,130,0,'Meal'),('SCGM23','Small Curry Goat Meal',0,100,0,'Meal'),('LPM210','Large Pork Meal',-5,150,0,'Meal'),('MPM432','Medium Pork Meal',0,130,0,'Meal'),('SPM123','Small Pork Meal',0,100,0,'Meal'),('MS200','Medium Soup',0,60,0,'Meal'),('SS243','Small Soup',0,30,0,'Meal'),('WW19','Whole Wheat Biscuit',30,30,5,'Packs'),('MB21','Mint Ball',100,2,30,'Pieces'),('HB302','Hard Cover Book',48,50,5,'Pieces'),('P501','Panadol',99,30,10,'Strip'),('P21','Peanut',50,25,20,'Pieces'),('BB32','Bon Bon',100,5,30,'Pieces'),('D17','Dixie',48,15,15,'Packs'),('P111','Pencil',60,6,20,'Pieces'),('HW20','Honey Wheat Biscuit',50,30,10,'Packs'),('O35','Ole',50,25,10,'Packs'),('P221','Pen',60,20,10,'Pieces'),('AJ121','Apple J',50,40,5,'Bottles'),('P122','Pepsi',100,40,20,'Bottles'),('BM123','Box Milk',24,40,5,'Boxes'),('B045','Bun',47,20,15,'Pieces'),('C024','Cheese',1,30,2,'Tins'),('TJ124','Tru-Juice',72,30,20,'Boxes'),('H023','Halls',65,2,30,'Pieces'),('T125','Tropicana',24,35,5,'Boxes'),('B026','Bubbaloo',24,5,20,'Pieces'),('P136','Pringles',47,40,20,'Cans'),('B025','Bubbilicious',11,25,5,'Pieces'),('NB15','Naturals Biscuit',24,30,15,'Packs'),('TB16','Tea Biscuits',24,20,10,'Packs'),('CBC22','Chippies Banana Chips',30,30,15,'Packs'),('BC23','Butter Cookies',60,30,15,'Packs'),('CZ24','Cheese Zees',75,25,20,'Packs'),('CS25','Cheese Sticks',70,25,20,'Packs'),('W112','Water',120,40,20,'Bottles'),('BD113','Box Drink',56,25,20,'Boxes'),('TR114','Tropical Rhythm',72,75,20,'Bottles'),('OS115','Ocean Spray',48,90,20,'Bottles'),('V112','Viva',48,30,20,'Bottles'),('M116','Malta',72,60,20,'Bottles'),('Z117','Zesti',72,55,20,'Bottles'),('S118','Supligen',35,75,20,'Cans'),('F110','Fruita',72,40,20,'Cans'),('SPB301','Super Pen Light Battery',72,15,30,'Packs'),('G119','Gatorade',24,90,20,'Bottles'),('OJ120','Orange Juice',72,40,5,'Boxes'),('S210','Sodas',96,30,20,'Bottles'),('CPC14','Caribbean Crisp Plantain Chips',120,30,20,'Packs'),('RBS04','Ritz Bitz Cheese Sandwiches',36,30,15,'Packs'),('E246','Excelsior Chocolate Chip Cooki',36,25,15,'Packs'),('E247','Excelsior Cheese Crunches',36,30,15,'Packs'),('NCC01','Nibbles Chocolate Cookies',24,30,15,'Packs'),('BRT07','Bermudez Rough Tops',24,50,20,'Packs'),('NPB05','National Peanut Bits',36,25,15,'Packs'),('NCB06','National Chocolate Bits',36,25,15,'Packs'),('BCC02','Butterkist Coconut Cookies',36,25,15,'Packs'),('BSB03','Butterkist Strawberry Biscuits',36,20,15,'Packs'),('KC18','Kiss Cakes',30,30,20,'Packs'),('NC11','Nuggles Chocolate',48,40,20,'Packs'),('CC11','Catch Chocolate',48,35,20,'Packs'),('TC11','Tiki Chocolate',36,35,20,'Packs'),('KKC11','Krik Krak Chocolate',36,30,20,'Packs'),('SB08','Shirley Biscuits',24,50,10,'Packs'),('CS411','Cup Soup',36,50,15,'Packs'),('NCA09','Nabisco Chips Ahoy',48,30,15,'Packs'),('O10','Oreo',36,30,10,'Packs'),('O13','Ovaltine',72,25,10,'Packs'),('FAC12','Famous Amos Cookies',36,30,10,'Packs'),('W023','Wriggley\'s',60,25,20,'Packs');
/*!40000 ALTER TABLE `Stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Loading data for table `Stock_t`
--

LOCK TABLES `Stock_t` WRITE;
/*!40000 ALTER TABLE `Stock_t` DISABLE KEYS */;
INSERT INTO `Stock_t` VALUES ('PBB36','Peanut Butter Biscuit',116,15,15,'Packs'),('LCM21','Large Chicken Meal',0,150,0,'Meal'),('MCM20','Medium Chicken Meal',0,130,0,'Meal'),('SCM19','Small Chicken Meal',-1,100,0,'Meal'),('LCGM24','Large Curry Goat Meal',0,150,0,'Meal'),('MCGM22','Medium Curry Goat Meal',0,130,0,'Meal'),('SCGM23','Small Curry Goat Meal',0,100,0,'Meal'),('LPM210','Large Pork Meal',-5,150,0,'Meal'),('MPM432','Medium Pork Meal',0,130,0,'Meal'),('SPM123','Small Pork Meal',0,100,0,'Meal'),('MS200','Medium Soup',0,60,0,'Meal'),('SS243','Small Soup',0,30,0,'Meal'),('WW19','Whole Wheat Biscuit',30,30,5,'Packs'),('MB21','Mint Ball',100,2,30,'Pieces'),('HB302','Hard Cover Book',48,50,5,'Pieces'),('P501','Panadol',99,30,10,'Strip'),('P21','Peanut',50,25,20,'Pieces'),('BB32','Bon Bon',100,5,30,'Pieces'),('D17','Dixie',48,15,15,'Packs'),('P111','Pencil',60,6,20,'Pieces'),('HW20','Honey Wheat Biscuit',50,30,10,'Packs'),('O35','Ole',50,25,10,'Packs'),('P221','Pen',60,20,10,'Pieces'),('AJ121','Apple J',50,40,5,'Bottles'),('P122','Pepsi',100,40,20,'Bottles'),('BM123','Box Milk',24,40,5,'Boxes'),('B045','Bun',47,20,15,'Pieces'),('C024','Cheese',1,30,2,'Tins'),('TJ124','Tru-Juice',72,30,20,'Boxes'),('H023','Halls',65,2,30,'Pieces'),('T125','Tropicana',24,35,5,'Boxes'),('B026','Bubbaloo',24,5,20,'Pieces'),('P136','Pringles',47,40,20,'Cans'),('B025','Bubbilicious',11,25,5,'Pieces'),('NB15','Naturals Biscuit',24,30,15,'Packs'),('TB16','Tea Biscuits',24,20,10,'Packs'),('CBC22','Chippies Banana Chips',30,30,15,'Packs'),('BC23','Butter Cookies',60,30,15,'Packs'),('CZ24','Cheese Zees',75,25,20,'Packs'),('CS25','Cheese Sticks',70,25,20,'Packs'),('W112','Water',120,40,20,'Bottles'),('BD113','Box Drink',56,25,20,'Boxes'),('TR114','Tropical Rhythm',72,75,20,'Bottles'),('OS115','Ocean Spray',48,90,20,'Bottles'),('V112','Viva',48,30,20,'Bottles'),('M116','Malta',72,60,20,'Bottles'),('Z117','Zesti',72,55,20,'Bottles'),('S118','Supligen',35,75,20,'Cans'),('F110','Fruita',72,40,20,'Cans'),('SPB301','Super Pen Light Battery',72,15,30,'Packs'),('G119','Gatorade',24,90,20,'Bottles'),('OJ120','Orange Juice',72,40,5,'Boxes'),('S210','Sodas',96,30,20,'Bottles'),('CPC14','Caribbean Crisp Plantain Chips',120,30,20,'Packs'),('RBS04','Ritz Bitz Cheese Sandwiches',36,30,15,'Packs'),('E246','Excelsior Chocolate Chip Cooki',36,25,15,'Packs'),('E247','Excelsior Cheese Crunches',36,30,15,'Packs'),('NCC01','Nibbles Chocolate Cookies',24,30,15,'Packs'),('BRT07','Bermudez Rough Tops',24,50,20,'Packs'),('NPB05','National Peanut Bits',36,25,15,'Packs'),('NCB06','National Chocolate Bits',36,25,15,'Packs'),('BCC02','Butterkist Coconut Cookies',36,25,15,'Packs'),('BSB03','Butterkist Strawberry Biscuits',36,20,15,'Packs'),('KC18','Kiss Cakes',30,30,20,'Packs'),('NC11','Nuggles Chocolate',48,40,20,'Packs'),('CC11','Catch Chocolate',48,35,20,'Packs'),('TC11','Tiki Chocolate',36,35,20,'Packs'),('KKC11','Krik Krak Chocolate',36,30,20,'Packs'),('SB08','Shirley Biscuits',24,50,10,'Packs'),('CS411','Cup Soup',36,50,15,'Packs'),('NCA09','Nabisco Chips Ahoy',48,30,15,'Packs'),('O10','Oreo',36,30,10,'Packs'),('O13','Ovaltine',72,25,10,'Packs'),('FAC12','Famous Amos Cookies',36,30,10,'Packs'),('W023','Wriggley\'s',15,25.5,20,'Packs');
/*!40000 ALTER TABLE `Stock_t` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Loading data for table `Stock_t3`
--

LOCK TABLES `Stock_t3` WRITE;
/*!40000 ALTER TABLE `Stock_t3` DISABLE KEYS */;
INSERT INTO `Stock_t3` VALUES ('PBB36','Peanut Butter Biscuit',116,15,15,'Packs'),('LCM21','Large Chicken Meal',0,150,0,'Meal'),('MCM20','Medium Chicken Meal',0,130,0,'Meal'),('SCM19','Small Chicken Meal',-1,100,0,'Meal'),('LCGM24','Large Curry Goat Meal',0,150,0,'Meal'),('MCGM22','Medium Curry Goat Meal',0,130,0,'Meal'),('SCGM23','Small Curry Goat Meal',0,100,0,'Meal'),('LPM210','Large Pork Meal',-5,150,0,'Meal'),('MPM432','Medium Pork Meal',0,130,0,'Meal'),('SPM123','Small Pork Meal',-1,100,0,'Meal'),('MS200','Medium Soup',0,60,0,'Meal'),('SS243','Small Soup',0,30,0,'Meal'),('WW19','Whole Wheat Biscuit',30,30,5,'Packs'),('MB21','Mint Ball',100,2,30,'Pieces'),('HB302','Hard Cover Book',48,50,5,'Pieces'),('P501','Panadol',99,30,10,'Strip'),('P21','Peanut',50,25,20,'Pieces'),('BB32','Bon Bon',100,5,30,'Pieces'),('D17','Dixie',48,15,15,'Packs'),('P111','Pencil',60,6,20,'Pieces'),('HW20','Honey Wheat Biscuit',50,30,10,'Packs'),('O35','Ole',50,25,10,'Packs'),('P221','Pen',60,20,10,'Pieces'),('AJ121','Apple J',50,40,5,'Bottles'),('P122','Pepsi',100,40,20,'Bottles'),('BM123','Box Milk',24,40,5,'Boxes'),('B045','Bun',47,20,15,'Pieces'),('C024','Cheese',1,30,2,'Tins'),('TJ124','Tru-Juice',72,30,20,'Boxes'),('H023','Halls',65,2,30,'Pieces'),('T125','Tropicana',24,35,5,'Boxes'),('B026','Bubbaloo',24,5,20,'Pieces'),('P136','Pringles',47,40,20,'Cans'),('B025','Bubbilicious',11,25,5,'Pieces'),('NB15','Naturals Biscuit',24,30,15,'Packs'),('TB16','Tea Biscuits',24,20,10,'Packs'),('CBC22','Chippies Banana Chips',30,30,15,'Packs'),('BC23','Butter Cookies',60,30,15,'Packs'),('CZ24','Cheese Zees',75,25,20,'Packs'),('CS25','Cheese Sticks',70,25,20,'Packs'),('W112','Water',120,40,20,'Bottles'),('BD113','Box Drink',56,25,20,'Boxes'),('TR114','Tropical Rhythm',72,75,20,'Bottles'),('OS115','Ocean Spray',48,90,20,'Bottles'),('V112','Viva',48,30,20,'Bottles'),('M116','Malta',72,60,20,'Bottles'),('Z117','Zesti',72,55,20,'Bottles'),('S118','Supligen',35,75,20,'Cans'),('F110','Fruita',72,40,20,'Cans'),('SPB301','Super Pen Light Battery',72,15,30,'Packs'),('G119','Gatorade',24,90,20,'Bottles'),('OJ120','Orange Juice',72,40,5,'Boxes'),('S210','Sodas',96,30,20,'Bottles'),('CPC14','Caribbean Crisp Plantain Chips',120,30,20,'Packs'),('RBS04','Ritz Bitz Cheese Sandwiches',36,30,15,'Packs'),('E246','Excelsior Chocolate Chip Cooki',36,25,15,'Packs'),('E247','Excelsior Cheese Crunches',36,30,15,'Packs'),('NCC01','Nibbles Chocolate Cookies',24,30,15,'Packs'),('BRT07','Bermudez Rough Tops',24,50,20,'Packs'),('NPB05','National Peanut Bits',36,25,15,'Packs'),('NCB06','National Chocolate Bits',36,25,15,'Packs'),('BCC02','Butterkist Coconut Cookies',36,25,15,'Packs'),('BSB03','Butterkist Strawberry Biscuits',36,20,15,'Packs'),('KC18','Kiss Cakes',30,30,20,'Packs'),('NC11','Nuggles Chocolate',48,40,20,'Packs'),('CC11','Catch Chocolate',48,35,20,'Packs'),('TC11','Tiki Chocolate',36,35,20,'Packs'),('KKC11','Krik Krak Chocolate',36,30,20,'Packs'),('SB08','Shirley Biscuits',24,50,10,'Packs'),('CS411','Cup Soup',36,50,15,'Packs'),('NCA09','Nabisco Chips Ahoy',48,30,15,'Packs'),('O10','Oreo',36,30,10,'Packs'),('O13','Ovaltine',72,25,10,'Packs'),('FAC12','Famous Amos Cookies',36,30,10,'Packs'),('W023','Wriggley\'s',15,25.5,20,'Packs');
/*!40000 ALTER TABLE `Stock_t3` ENABLE KEYS */;
UNLOCK TABLES;

/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
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

