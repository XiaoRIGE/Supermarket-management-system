-- MySQL dump 10.13  Distrib 5.5.53, for Win32 (AMD64)
--
-- Host: localhost    Database: market
-- ------------------------------------------------------
-- Server version	5.5.27

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `usergroup` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (69,'小王','789789','超级管理员'),(68,'小明','789789','普通员工'),(67,'啦啦啦','11111','普通管理员'),(10,'马云','123456','超级管理员'),(45,'admin','admin','超级管理员'),(43,'小白','123456','普通员工'),(28,'小日','898989','超级管理员'),(29,'小李','565656','普通管理员'),(37,'xiaori','456456','普通员工'),(38,'xaioming','789','普通员工'),(41,'小李子','456456','普通员工');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `parentid` int(11) DEFAULT NULL,
  `level` tinyint(4) DEFAULT NULL,
  `state` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'服饰类',0,1,1),(2,'家用电器',0,1,1),(4,'图书',0,1,1),(8,'生活用品',0,1,1),(9,'房产',0,1,1),(10,'零食',0,2,1),(12,'科普',4,2,1),(14,'电饭煲',2,1,1),(15,'女装',1,2,1),(17,'半身裙',15,3,1),(22,'学习',4,2,1),(19,'毛衣',15,3,1);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `costprice` float(7,2) DEFAULT NULL,
  `price` float(7,2) DEFAULT NULL,
  `saleprice` float(7,2) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `weight` float(7,2) DEFAULT NULL,
  `saled` tinyint(4) DEFAULT NULL,
  `intro` text,
  `intime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (1,'长虹电视机','39861701',2,340.00,3400.00,4080.00,500,0.50,1,'开始你的表演','2018-04-11 15:29:01'),(2,'热水器','39861702',2,165.00,1650.00,1980.00,500,0.50,0,'阿司农从i额我女','2018-04-11 15:29:17'),(18,'修身气质短裙','83690501',17,68.00,680.00,816.00,1000,1.00,1,'适合夏日穿噢','2018-04-22 17:37:03'),(5,'貔貅','39861705',8,564.00,5640.00,6768.00,165,0.50,1,'465451','2018-04-11 15:40:39'),(6,'美的电饭煲','39861706',14,165.00,1650.00,1980.00,165,0.50,0,'就是一个很酷的电饭煲啊\n','2018-04-12 00:51:45'),(17,'女装爸爸','39867007',16,45.00,450.00,540.00,555,0.50,1,'这是夫妻的衣服','2018-04-13 13:06:17'),(15,'汉语词典','39867010',4,15.00,150.00,180.00,156,0.50,1,'这是一本神奇的书','2018-04-12 15:17:09'),(8,'热狗','39861708',3,3.00,30.00,36.00,165,150.00,1,'神奇的热狗','2018-04-12 05:07:19'),(9,'果冻','39861709',3,5.00,50.00,60.00,1965,0.50,1,'喜之郎果冻啊','2018-04-12 09:26:46'),(11,'裙子啊','39861711',16,45.00,450.00,540.00,1,0.50,1,'分如果退货让你讨厌吗','2018-04-12 09:37:01'),(12,'好吃点','39861712',10,1.00,10.00,12.00,1653,0.50,1,'好吃你就多吃点','2018-04-12 09:40:24'),(14,'针织衫','39861714',19,31.00,310.00,372.00,156,0.50,1,'从萨博擦吕安斯卡','2018-04-12 15:15:20');
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `cardnum` varchar(16) DEFAULT NULL,
  `usergroup` varchar(20) DEFAULT NULL,
  `idcard` char(18) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `landline` varchar(12) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `postcode` char(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (1,'马云','6666666','至尊会员','51152519960512668','1','666946@163.','18965658989','08\n1-4567895','成都','天府新谷五号楼','641000'),(2,'刘强东','668669','超级会员','511525197508945489','1','qiangdong@1','18945567889','08\n1-4845680','杭州','天府新谷一号楼','641000'),(5,'林冲','006156','普通会员','15616516515165','1','15484864586','0859-4561894','16516@qq.com','Chengdu','梁山','645150'),(6,'及时雨','006156','普通会员','516489161951656461','1','19856486485','0916-1651653','165165@163.com','Dalian','黄土高原','165195'),(7,'鲁智深','1651','普通会员','465165','1','156153','54345','','Chengdu','深山老林','35434'),(8,'曹操','16511','超级会员','561651654651654665','1','5115616516','51156165','1651651','Guangzhou','沧海','465105'),(9,'柯南','9494947','超级会员','616516156981651896','1','6531561651','156153186516','16565156@qq.com','Guangzhou','阿森纳的','16516'),(10,'小兰','1561651','普通会员','165198616516561','0','15645456568','415-6156166','1561@qq.com','Shanghai','魔都','41651'),(11,'小马','156156','普通会员','5115156164886516','0','16485615689','051-6516556','16516@qq.com','Chengdu','是不敢打扰','89161'),(12,'小明','651657','普通会员','6519841565498','0','1846516551','084-5156137','16516@qq.cpm','Shenzhen','青藏小高原','156348'),(13,'小日','66688899','至尊会员','51154864891615616','1','19980999988','087-8864889','1554019387@qq.com','Chengdu','天府大道聚源段156','645150');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sales` (
  `ordernum` int(11) NOT NULL AUTO_INCREMENT,
  `salenum` int(11) DEFAULT NULL,
  `saleprice` int(11) DEFAULT NULL,
  `discount` float(5,2) DEFAULT NULL,
  `refund` int(11) DEFAULT NULL,
  `saletime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `codes` varchar(20) DEFAULT NULL,
  `names` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ordernum`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales`
--

LOCK TABLES `sales` WRITE;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
INSERT INTO `sales` VALUES (26,1,1650,1.00,0,'2018-04-13 15:16:37','39861706','美的电饭煲'),(25,1,50,1.00,0,'2018-04-13 15:16:37','39861709','果冻'),(24,1,30,1.00,0,'2018-04-13 15:16:37','39861708','热狗'),(23,1,10,0.90,0,'2018-04-13 15:07:08','39861700012','好吃点'),(22,1,450,1.00,0,'2018-04-13 15:04:17','39861700011','裙子啊'),(27,1,5640,1.00,0,'2018-04-13 15:16:37','39861705','貔貅'),(28,1,1650,1.00,0,'2018-04-13 15:18:19','39861702','热水器'),(29,1,450,0.80,0,'2018-04-14 07:31:58','39861701','长虹电视机'),(30,1,450,1.00,0,'2018-04-14 07:38:02','39861701','长虹电视机'),(31,3,450,0.80,0,'2018-04-14 07:40:36','39861701','长虹电视机'),(32,4,3400,1.00,0,'2018-04-14 08:52:03','39861701','长虹电视机'),(33,3,30,1.00,0,'2018-04-14 08:52:03','39861708','热狗'),(34,3,3400,1.00,0,'2018-04-14 08:53:44','39861701','长虹电视机'),(35,1,50,0.80,0,'2018-04-18 08:25:16','39861709','果冻');
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) DEFAULT NULL,
  `inventory` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock`
--

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
INSERT INTO `stock` VALUES (1,'156165',9999),(2,'54981',8888);
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-25 23:56:43
