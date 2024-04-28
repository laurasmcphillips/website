CREATE DATABASE  IF NOT EXISTS `justbrewit` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `justbrewit`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: justbrewit
-- ------------------------------------------------------
-- Server version	8.1.0

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
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customers` (
  `email` varchar(255) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phonenum` int DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `county` varchar(100) DEFAULT NULL,
  `eircode` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES ('lmcphillips@gmail.com','Laura','McPhillips','pass',765435621,'Painstown','Beauparc','Kells','Kilkenny','J87K32O'),('vamps@gmail.com','Buffy','Summers','pass',765472631,'Main Street','Sunnydale','Navan','Tyrone','R56Y762'),('witches@gmail.com','Willow','Rosenberg','admin',76542731,'Trimgate Street','Apartment 6','Navan','Leitrim','E342RW1');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderdetails`
--

DROP TABLE IF EXISTS `orderdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orderdetails` (
  `ordernum` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `productid` int DEFAULT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  PRIMARY KEY (`ordernum`),
  KEY `email` (`email`),
  KEY `productid` (`productid`),
  CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`email`) REFERENCES `customers` (`email`),
  CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `products` (`productid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderdetails`
--

LOCK TABLES `orderdetails` WRITE;
/*!40000 ALTER TABLE `orderdetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `orderdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `productid` int NOT NULL AUTO_INCREMENT,
  `productname` varchar(255) DEFAULT NULL,
  `productdescription` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Network Chuck - Default Route','light roast with subtle hints of nutmeg & ginger Country of Origin: Brazil',19.99,'../images/green_coffee.jpg','coffee'),(2,'Network Chuck - Sudo Blend','Hints of Maple Syrup & Milk Chocolate Country of Origin: Mexico',19.99,'../images/yellow_coffee.jpg','coffee'),(3,'Network Chuck - 200 OK','Hints of Rich Caramel & Cherry Country of Origin: Colombia',19.99,'../images/red_coffee.jpg','coffee'),(4,'Network Chuck - On Call','Hints of Cherry & Milk Chocolate Country of Origin: Vietnam',19.99,'../images/blue_coffee.jpg','coffee'),(5,'Coffee Perfection - Special Blend No. 14','Hints of Caramel & Red Apple Country of Origin: Brazil',24.99,'../images/purple_coffee.png','coffee'),(6,'Coffee Perfection - Special Blend No. 21','Hints of Rich Caramel & Milk Chocolate Country of Origin: Colombia',24.99,'../images/yellow_beans.png','coffee'),(7,'Coffee Perfection - Special Blend No. 05','Notes of Sweet Caramel & Milk Chocolate Country of Origin: Vietnam',24.99,'../images/blue_beans.png','coffee'),(8,'Coffee Perfection - Special Blend No. 09','Notes of Malt, Chocolate & Roasted Nut Country of Origin: Latin America',24.99,'../images/green_beans.png','coffee'),(9,'Coffee Perfection - Mexican Mountain Water','Decaffeinated Blend with notes of SugarCake & Citrus Country of Origin: Mexico',24.99,'../images/light_blue_beans.png','coffee'),(10,'Delonghi','Quick 15 second heat up time, Easy to use, Perfect for beginner baristas',199.99,'../images/delonghi.jpg','machine'),(11,'Nespresso','Makes everything from Cappuccinos & Mochas to Flat Whites. Fits two sizes of cups.',299.99,'../images/nespresso.jpg','machine'),(12,'Sunbeam Iced Coffee','Perfect for a hot summers day. Comes with insulated tumbler to keep your coffee ice cold.',99.99,'../images/iced.jpeg','machine'),(13,'Delonghi Magnifica Plus','Make the perfect Lattees and Cappuccinos with it\'s built-in milk frother.',349.99,'../images/magnifica.jpg','machine'),(14,'Smeg - White','Compact All-In-One Machine, froths your milk while your coffee is brewing.',149.99,'../images/smeg.jpg','machine'),(15,'Delonghi - Eletta','Quick heat up time in 10 seconds for those on the go. Cup warmer on top.',249.99,'../images/eletta.jpg','machine'),(16,'Sage Barista Style','This professional machine will make you feel like you\'\'re in a coffee shop.',499.99,'../images/sage.jpg','machine'),(17,'Smeg - Black','Small but powerful, this machine is perfect if you have limited counter space.',149.99,'../images/smeg_black.jpg','machine'),(18,'Nespresso Vertuo','Sleek & Simple Design - designed for use with Nespresso Vertuo Coffee Pods.',199.99,'../images/nespresso_vertuo.jpg','machine');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shoppingcart`
--

DROP TABLE IF EXISTS `shoppingcart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shoppingcart` (
  `itemno` int NOT NULL AUTO_INCREMENT,
  `productid` int DEFAULT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  PRIMARY KEY (`itemno`),
  KEY `productid` (`productid`),
  CONSTRAINT `shoppingcart_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `products` (`productid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoppingcart`
--

LOCK TABLES `shoppingcart` WRITE;
/*!40000 ALTER TABLE `shoppingcart` DISABLE KEYS */;
INSERT INTO `shoppingcart` VALUES (1,NULL,NULL,NULL,NULL,NULL),(2,NULL,NULL,NULL,NULL,NULL),(3,NULL,NULL,NULL,NULL,NULL),(4,NULL,NULL,NULL,NULL,NULL),(5,NULL,NULL,NULL,NULL,NULL),(6,NULL,NULL,NULL,NULL,NULL),(7,NULL,NULL,NULL,NULL,NULL),(8,NULL,NULL,NULL,NULL,NULL),(9,NULL,NULL,NULL,NULL,NULL),(10,NULL,NULL,NULL,NULL,NULL),(11,NULL,NULL,NULL,NULL,NULL),(12,NULL,NULL,NULL,NULL,NULL),(13,NULL,NULL,NULL,NULL,NULL),(14,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `shoppingcart` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-28 19:31:02
