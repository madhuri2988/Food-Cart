-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: localhost    Database: database
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `product_name` varchar(45) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_desc` varchar(200) DEFAULT NULL,
  `product_image` varchar(55) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`productId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (0,NULL,NULL,NULL,NULL,NULL),(100,'Black pepper beef',10,'Oil fried black pepper beef tastes smooth dish is fragrant and crispy.','blackpepperbeef.jpg','beef'),(101,'skillet beef',6,'Garnished with rosemary to add to the aroma of the beef.','skilletbeef.jpg','beef'),(102,'beef curry with rice',11,'beef curry prepared and spices served with jasmine rice','beefcurrywithrice.jpg','beef'),(103,'yak hotpot',10,'Steam boiled yak meat served in a hot pot mixed with herbs and spices.','yakhotpot.jpg','beef'),(104,'wanshan trotter',6,'The center portion of choice and herbs giving an appetizing sapor.','wanshanpig.jpg','pork'),(105,' dongpo pork',8,'Made from slab of pork belly away in small pieces with chopsticks.','dongpopork.jpg','pork'),(106,'braised pork',8,'Bringing you a traditional food of north-east China. ','porkvermicelli.jpg','pork'),(107,'pepper spare ribs',9,'Delicious crispy yet juicy meaty pork ribs with smattering of spices.','peppersaltedribs.jpg','pork'),(108,'boiled mutton soup',5,'nutritive, fresh and fragrant mutton soup ready to tickle your taste buds.','newSoup.jpg','soup'),(109,'clam soup',5,'Chicken marinated for hours before cooking with ginger and wine. .','clamsoup.jpg','soup'),(110,'lotus seed soup',5,'Made with red beans and lotus seeds, a traditional chinese cuisine.','lotusseed.jpg','soup'),(111,'melon rib soup',6,'A satisfying soup reputed to be good for detoxification.','wintermelonsoup.jpg','soup'),(112,'seaweed soup',10,'a great combination of egg, seaweed and soft tofu.','seaweedsoup.jpg','soup'),(113,'crispy chicken',10,'Chicken dipped in vinegar, dried and deep-fried.','crispychicken.jpg','poultry'),(114,'duck wings',4,'Delicious game day wings with hot sauce.','duck_wings.jpg','poultry'),(115,'Garlic Chicken',7,'Baked Chicken breasts coated with garlic butter sauce and bread crumbs.','GarlicChicken.jpg','poultry'),(116,'Barbary Duck',9,'A delicacy of the Hianan region with an international twist.','hianan_duck.jpg','poultry'),(117,'Kung Pao Chicken',8,'dish made with chicken, garlic, peanuts, vegetables and chili.','KungPaoChicken.jpg','poultry'),(118,'Peking Roast Duck',8,'Roasted duck served with homemade plum sauce and green onions.','pekingroastduck.jpg','poultry'),(120,'Fried Clams',7,'Fresh Clams fried in oil mixed with chinese herbs.','friedclams.jpg','seafood'),(121,'king prawns',11,'King prawns braised in garlic and oil and mustard','oilbraisedprawns.jpg','seafood'),(122,'oyster omelete',6,'freshly caught oysters served with spicy omelete','oysteromelete.jpg','seafood'),(123,'Snail Chicken',8,'Freshly snails boiled with chicken along with spices and herbs.','riversnailwithchicken.jpg','seafood'),(124,'Seafood Noodles',6,'Noodles prepared with freshly caught shrimps and oysters.','seafoodnoodles.jpg','noodles'),(125,'Pork Chop Noodles',6,'Noodles smeared in hot sauce and served with pork chops.','porkchopnoodles.jpg','noodles'),(126,'Beef Stewed Noodles',7,'Noodles served with beef with option of adding hot sauce','beefstewednoodles.jpg','noodles'),(127,'Shredded Noodles',7,'Noodles with sauce along with shredded chicken.','shreddedchickennoodles.jpg','noodles'),(128,'Sesame Tofu',7,'Tofu prepared with sesame seeds prepared in soy sauce.','sesametofu.jpg','vegetables'),(129,'Gau Tofu',8,'Tofu prepared with hoisin, vinegar and chili paste.','gautofu.jpg','vegetables'),(130,'Ma Po Tofu',8,'Tofu set in spicy chili bean-based sauce, which is very good.','mapotofu.jpg','vegetables'),(131,'Sauted Beans',5,'String beans sauted in vinegar and soy sauce.','sautedstringbeans.jpg','vegetables');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase_history`
--

DROP TABLE IF EXISTS `purchase_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchase_history` (
  `orderId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` varchar(45) DEFAULT NULL,
  `product_list` varchar(45) DEFAULT NULL,
  `total_price` varchar(45) DEFAULT NULL,
  `card_numb` varchar(45) DEFAULT NULL,
  `card_exp` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `comments` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`orderId`)
) ENGINE=InnoDB AUTO_INCREMENT=11223339 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase_history`
--

LOCK TABLES `purchase_history` WRITE;
/*!40000 ALTER TABLE `purchase_history` DISABLE KEYS */;
INSERT INTO `purchase_history` VALUES (11223300,'madhuri','101,102','14','123412341234','112018','4444 sara',NULL),(11223301,'madhuri2988@gmail.com','103,','4.32','123412341234','','',''),(11223302,'madhuri2988@gmail.com','103,','4.32','','','',''),(11223303,'madhuri2988@gmail.com','103,','4.32','','','',''),(11223304,'madhuri2988@gmail.com','104,','5.4','','','',''),(11223305,'madhuri2988@gmail.com','102,','5.4','','','',''),(11223306,'madhuri2988@gmail.com','103,','4.32','','','',''),(11223307,'madhuri2988@gmail.com','103,','4.32','123412341234','','',''),(11223308,'madhuri2988@gmail.com','','','123412341234','','',''),(11223309,'madhuri2988@gmail.com','','','123412341234','','',''),(11223310,'madhuri2988@gmail.com','','','123412341234','','',''),(11223311,'madhuri2988@gmail.com','','','123412341234','','',''),(11223312,'madhuri2988@gmail.com','','','123412341234','','',''),(11223313,'madhuri2988@gmail.com','','','123412341234','','',''),(11223314,'madhuri2988@gmail.com','','','123412341234','','',''),(11223315,'madhuri2988@gmail.com','','','123412341234','','',''),(11223316,'madhuri2988@gmail.com','','','123412341234','','',''),(11223317,'madhuri2988@gmail.com','','','123412341234','','',''),(11223318,'madhuri2988@gmail.com','','','123412341234','','',''),(11223334,'anonymous','109,','4.86','375987654321001','1118','',''),(11223335,'anonymous','108,109,','10.8','375987654321001','1118','','-small-mild,'),(11223336,'anonymous','108,','5.4','375987654321001','1221','aa',''),(11223337,'anonymous','','','375987654321001','1218','',''),(11223338,'anonymous','108,109,','27','375987654321001','1118','',',,,,');
/*!40000 ALTER TABLE `purchase_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservations` (
  `idreservations` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `time` varchar(45) DEFAULT NULL,
  `num` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idreservations`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
INSERT INTO `reservations` VALUES (1,'naveen reddy kambalapalli','naveenr.kancharla@gmail.com','408-601-8689','1','1','2015-12-18'),(101,NULL,NULL,NULL,NULL,NULL,NULL),(102,'naveen reddy kambalapalli','naveenr.kancharla@gmail.com','408-601-8689','1','1',''),(103,'sarang','sarangjaltare@yahoo.com','408-601-8689','1','1','');
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `username` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `security` varchar(45) DEFAULT NULL,
  `answer` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('Jun','email@email.com','a','Yang','male','santa clara','California','United States','b','fish'),('madhuri2988@gmail.com','madhuri2988@gmail.com','12345','kambalapalli','male','sunnyvale','CA','United States','a','aaaa');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-10 17:25:44
