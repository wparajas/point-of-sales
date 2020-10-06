-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: pointofsale
-- ------------------------------------------------------
-- Server version	10.4.14-MariaDB

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
-- Table structure for table `business_nature`
--

DROP TABLE IF EXISTS `business_nature`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `business_nature` (
  `business_natureID` bigint(20) NOT NULL AUTO_INCREMENT,
  `business_natureName` varchar(150) NOT NULL,
  `business_natureStatus` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`business_natureID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `business_nature`
--

LOCK TABLES `business_nature` WRITE;
/*!40000 ALTER TABLE `business_nature` DISABLE KEYS */;
INSERT INTO `business_nature` VALUES (1,'BlackBox POS for Restaurant (Fine Dining)',1,'2020-09-17 23:13:42','2020-09-17 23:13:42'),(2,'BlackBox POS for Restaurant (Fast Food)',1,'2020-09-17 23:13:42','2020-09-17 23:13:42'),(3,'BlackBox Inventory System',1,'2020-09-17 23:13:42','2020-09-17 23:13:42');
/*!40000 ALTER TABLE `business_nature` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_business`
--

DROP TABLE IF EXISTS `company_business`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_business` (
  `company_businessID` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_profileID` bigint(20) NOT NULL,
  `business_natureID` bigint(20) NOT NULL,
  `company_businessStatus` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`company_businessID`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_business`
--

LOCK TABLES `company_business` WRITE;
/*!40000 ALTER TABLE `company_business` DISABLE KEYS */;
INSERT INTO `company_business` VALUES (52,1,1,1,'2020-09-24 22:17:01','2020-09-24 22:17:01'),(53,1,2,1,'2020-09-24 22:17:01','2020-09-24 22:17:01');
/*!40000 ALTER TABLE `company_business` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_profile`
--

DROP TABLE IF EXISTS `company_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_profile` (
  `company_profileID` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_profileName` varchar(255) NOT NULL,
  `company_profileContactperson` varchar(100) NOT NULL,
  `company_profileContactnumber` varchar(100) NOT NULL,
  `company_profileUnitnumber` varchar(100) NOT NULL,
  `company_profileBuilding` varchar(100) NOT NULL,
  `company_profileStreet` varchar(100) NOT NULL,
  `company_profileSubdivision` varchar(100) NOT NULL,
  `company_profileBarangay` varchar(100) NOT NULL,
  `company_profileMunicipality` varchar(100) NOT NULL,
  `company_profileProvince` varchar(100) DEFAULT NULL,
  `company_profileZipcode` varchar(100) NOT NULL,
  `company_profileEmail` varchar(150) NOT NULL,
  `company_profileWebsite` varchar(200) NOT NULL,
  `company_profileLogo` text NOT NULL,
  `company_profileTin` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`company_profileID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_profile`
--

LOCK TABLES `company_profile` WRITE;
/*!40000 ALTER TABLE `company_profile` DISABLE KEYS */;
INSERT INTO `company_profile` VALUES (1,'BlackCoders Group Incorporated','Charles Malakas','09099054795','1701','Antel Global','Julia Vargas','Ortigas Extension','San Antonio','Mandaluyong','','1900','theblackcoders@gmail.com','https://www.theblackcoders.com','1.jpg','199-568-779-236','2020-09-17 23:36:01','2020-09-24 22:17:01');
/*!40000 ALTER TABLE `company_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inv_purchaseorder`
--

DROP TABLE IF EXISTS `inv_purchaseorder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inv_purchaseorder` (
  `purchaseorderID` bigint(20) NOT NULL AUTO_INCREMENT,
  `purchaseorderstatus` bigint(20) NOT NULL,
  PRIMARY KEY (`purchaseorderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_purchaseorder`
--

LOCK TABLES `inv_purchaseorder` WRITE;
/*!40000 ALTER TABLE `inv_purchaseorder` DISABLE KEYS */;
/*!40000 ALTER TABLE `inv_purchaseorder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inv_purchaserequest`
--

DROP TABLE IF EXISTS `inv_purchaserequest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inv_purchaserequest` (
  `purchaserequestID` bigint(20) NOT NULL AUTO_INCREMENT,
  `purchaserequeststatus` bigint(20) NOT NULL,
  PRIMARY KEY (`purchaserequestID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_purchaserequest`
--

LOCK TABLES `inv_purchaserequest` WRITE;
/*!40000 ALTER TABLE `inv_purchaserequest` DISABLE KEYS */;
/*!40000 ALTER TABLE `inv_purchaserequest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invr_group`
--

DROP TABLE IF EXISTS `invr_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invr_group` (
  `invr_groupID` bigint(20) NOT NULL AUTO_INCREMENT,
  `invr_groupCode` varchar(100) NOT NULL,
  `invr_groupName` varchar(100) NOT NULL,
  `invr_groupDescription` varchar(150) NOT NULL,
  `invr_groupStatus` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`invr_groupID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invr_group`
--

LOCK TABLES `invr_group` WRITE;
/*!40000 ALTER TABLE `invr_group` DISABLE KEYS */;
INSERT INTO `invr_group` VALUES (1,'GRP-20-00001','Condiment','A condiment is a spice, sauce, or preparation that is added to foods',1,1,'2020-10-05 06:12:08','2020-10-05 07:06:59'),(9,'IGC-20-00002','Meat','Meat is a meat that meat the meatsssss',0,1,'2020-10-05 07:05:33','2020-10-05 07:27:30'),(10,'IGC-20-00010','Pork','Pork is an example of pork that pork the porks',1,1,'2020-10-05 07:06:12','2020-10-05 07:06:12');
/*!40000 ALTER TABLE `invr_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invr_storage`
--

DROP TABLE IF EXISTS `invr_storage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invr_storage` (
  `invr_storageID` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_departmentID` int(11) DEFAULT NULL,
  `invr_storageCode` varchar(100) NOT NULL,
  `invr_storageName` varchar(200) NOT NULL,
  `invr_storageAddress` text NOT NULL,
  `invr_storageFloor` varchar(100) DEFAULT NULL,
  `invr_storageBay` varchar(100) DEFAULT NULL,
  `invr_storageLevel` varchar(100) DEFAULT NULL,
  `invr_storageStatus` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`invr_storageID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invr_storage`
--

LOCK TABLES `invr_storage` WRITE;
/*!40000 ALTER TABLE `invr_storage` DISABLE KEYS */;
INSERT INTO `invr_storage` VALUES (1,NULL,'WAR-20-00001','Warehouse 1','Pasig City','F-1','B-1','L-1',1,1,'2020-09-24 08:01:59','2020-10-05 00:28:21'),(4,NULL,'WAR-20-00002','Warehouse 2','Cainta Rizal','F-2','B-1','L-2',1,2,'2020-09-24 23:09:26','2020-10-05 00:28:24'),(8,3,'WAR-20-00005','Warehouse 3','Pasig City','F-1','B-1','L-1',1,2,'2020-09-25 00:23:33','2020-10-05 00:35:33'),(9,2,'WAR-20-00009','Kitchen','Cainta Rizal','F-2','B-2','L-10',1,2,'2020-09-25 00:24:21','2020-10-05 00:35:08'),(10,NULL,'WAR-20-00010','Warehouse 12','Mandaluyong City','F-1','B-1','L-3',1,1,'2020-10-04 23:42:04','2020-10-05 00:28:36'),(11,NULL,'WAR-20-00011','Warehouse 4','Makati City','N/A','N/A','N/A',1,1,'2020-10-05 00:06:09','2020-10-05 00:28:39'),(12,2,'WAR-20-00013','Warehouse 5','Antipolo City','F-1','B-1','L-0',1,1,'2020-10-05 00:34:37','2020-10-05 01:19:04');
/*!40000 ALTER TABLE `invr_storage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invr_vendor`
--

DROP TABLE IF EXISTS `invr_vendor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invr_vendor` (
  `invr_vendorID` bigint(20) NOT NULL AUTO_INCREMENT,
  `invr_vendorCode` varchar(100) DEFAULT NULL,
  `invr_vendorName` varchar(100) DEFAULT NULL,
  `invr_vendorAddress` varchar(100) DEFAULT NULL,
  `invr_vendorContactperson` varchar(60) DEFAULT NULL,
  `invr_vendorContactnumber` varchar(30) DEFAULT NULL,
  `invr_vendorTin` varchar(45) DEFAULT NULL,
  `invr_vendorVat` int(11) DEFAULT NULL,
  `invr_vendorStatus` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`invr_vendorID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invr_vendor`
--

LOCK TABLES `invr_vendor` WRITE;
/*!40000 ALTER TABLE `invr_vendor` DISABLE KEYS */;
INSERT INTO `invr_vendor` VALUES (1,'SUP-20-00001','San Miguel Corp.','Pasig City','Miguel Ortiz','09099054789','879-895-326-465',1,1,1,'2020-10-05 02:36:20','2020-10-05 02:36:20'),(2,'SUP-20-00002','MY San','Pasig City','Arjay Pogi','09894659653','543-265-621-312',1,1,1,'2020-10-05 03:37:33','2020-10-05 03:37:33'),(3,'SUP-20-00003','Shrimp Corp','Pasig City','Nieto Gilly','0923456789','132-163-672-174',0,0,1,'2020-10-05 03:44:10','2020-10-05 04:02:37'),(4,'SUP-20-00004','GTC','Pasig City','Amy Han','09213543543','958-784-537-967',0,0,1,'2020-10-05 05:40:36','2020-10-05 05:40:36');
/*!40000 ALTER TABLE `invr_vendor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pos_approval`
--

DROP TABLE IF EXISTS `pos_approval`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pos_approval` (
  `approvalID` bigint(20) NOT NULL AUTO_INCREMENT,
  `approvalDescription` varchar(255) NOT NULL,
  `moduleID` bigint(20) NOT NULL,
  PRIMARY KEY (`approvalID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pos_approval`
--

LOCK TABLES `pos_approval` WRITE;
/*!40000 ALTER TABLE `pos_approval` DISABLE KEYS */;
INSERT INTO `pos_approval` VALUES (1,'Purchase Request',16),(2,'Purchase Order',17),(3,'Stock Out Warehouse',20),(4,'Transfer Request Form',22),(5,'Inventory Incident Report',26);
/*!40000 ALTER TABLE `pos_approval` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pos_approvaldet`
--

DROP TABLE IF EXISTS `pos_approvaldet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pos_approvaldet` (
  `approvaldetID` bigint(20) NOT NULL AUTO_INCREMENT,
  `approvalID` bigint(20) NOT NULL,
  `user_accountID` bigint(20) NOT NULL,
  `seconduser_accountID` bigint(20) NOT NULL,
  `approvalLevel` int(11) NOT NULL,
  `lastapprover` int(11) NOT NULL,
  PRIMARY KEY (`approvaldetID`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pos_approvaldet`
--

LOCK TABLES `pos_approvaldet` WRITE;
/*!40000 ALTER TABLE `pos_approvaldet` DISABLE KEYS */;
INSERT INTO `pos_approvaldet` VALUES (31,2,1,0,1,0),(32,2,2,0,2,1),(39,3,2,0,1,0),(40,3,1,0,2,1),(41,1,1,0,1,0),(42,1,2,0,2,1),(43,5,1,0,1,0),(44,5,2,0,2,1);
/*!40000 ALTER TABLE `pos_approvaldet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pos_approvalmodule`
--

DROP TABLE IF EXISTS `pos_approvalmodule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pos_approvalmodule` (
  `approvalmoduleID` bigint(20) NOT NULL AUTO_INCREMENT,
  `moduleID` bigint(20) NOT NULL,
  PRIMARY KEY (`approvalmoduleID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pos_approvalmodule`
--

LOCK TABLES `pos_approvalmodule` WRITE;
/*!40000 ALTER TABLE `pos_approvalmodule` DISABLE KEYS */;
INSERT INTO `pos_approvalmodule` VALUES (1,16),(2,17),(3,20),(4,22),(5,26);
/*!40000 ALTER TABLE `pos_approvalmodule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pos_menucategory`
--

DROP TABLE IF EXISTS `pos_menucategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pos_menucategory` (
  `menucategoryID` bigint(20) NOT NULL AUTO_INCREMENT,
  `menugroupID` bigint(20) NOT NULL,
  `menucategoryname` varchar(255) NOT NULL,
  `menucategorystatus` bigint(20) NOT NULL,
  `datecreated` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  PRIMARY KEY (`menucategoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pos_menucategory`
--

LOCK TABLES `pos_menucategory` WRITE;
/*!40000 ALTER TABLE `pos_menucategory` DISABLE KEYS */;
INSERT INTO `pos_menucategory` VALUES (1,1,'fresca',1,'2020-09-25 02:55:11.720920'),(2,4,'1222',1,'2020-09-25 05:38:19.202322');
/*!40000 ALTER TABLE `pos_menucategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pos_menugroup`
--

DROP TABLE IF EXISTS `pos_menugroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pos_menugroup` (
  `menugroupID` bigint(20) NOT NULL AUTO_INCREMENT,
  `menugroup` varchar(255) NOT NULL,
  `menudescription` varchar(255) NOT NULL,
  `menugroupstatus` int(10) NOT NULL,
  `datecreated` datetime(6) NOT NULL,
  PRIMARY KEY (`menugroupID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pos_menugroup`
--

LOCK TABLES `pos_menugroup` WRITE;
/*!40000 ALTER TABLE `pos_menugroup` DISABLE KEYS */;
INSERT INTO `pos_menugroup` VALUES (1,'Pasta','is a type of food typically made from an unleavened dough of wheat flour mixed with water or eggs, and formed into sheets or other shapes, then cooked by boiling or baking',1,'0000-00-00 00:00:00.000000'),(2,'Beverage','Water',0,'0000-00-00 00:00:00.000000'),(3,'er','erer',1,'0000-00-00 00:00:00.000000'),(4,'sadasd','zxczxczx',1,'0000-00-00 00:00:00.000000'),(5,'sadsa','asdsad',0,'0000-00-00 00:00:00.000000'),(6,'asdasd','asdsad',1,'0000-00-00 00:00:00.000000'),(7,'sadasdxzc','zxzczxc',0,'0000-00-00 00:00:00.000000');
/*!40000 ALTER TABLE `pos_menugroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pos_modulemstr`
--

DROP TABLE IF EXISTS `pos_modulemstr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pos_modulemstr` (
  `moduleID` bigint(20) NOT NULL AUTO_INCREMENT,
  `moduleDescription` varchar(255) NOT NULL,
  `moduleShortDesc` varchar(255) NOT NULL,
  PRIMARY KEY (`moduleID`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pos_modulemstr`
--

LOCK TABLES `pos_modulemstr` WRITE;
/*!40000 ALTER TABLE `pos_modulemstr` DISABLE KEYS */;
INSERT INTO `pos_modulemstr` VALUES (1,'Dashboard','dashboard'),(2,'Company Setup','company_setup'),(3,'Roles and Permission','roles_and_permission'),(4,'User Department','user_department'),(5,'User Designation','user_designation'),(6,'User Account','user_account'),(7,'Approval Setup','approval_setup'),(8,'Inventory Storage','inventory_storage'),(9,'Warehouse and Storage Reports','warehouse_and_storage_reports'),(10,'Inventory Vendor','inventory_vendor'),(11,'Supplier Reports','supplier_reports'),(12,'Courrier Setup','courrier_setup'),(13,'Logistic Reports','logistic_reports'),(14,'Inventory Group','inventory_group'),(15,'Inventory Item','inventory_item'),(16,'Purchase Request','purchase_request'),(17,'Purchase Order','purchase_order'),(18,'List of Stocks','list_of_stocks'),(19,'Stock In Warehouse','stock_in_warehouse'),(20,'Stock Out Warehouse','stock_out_warehouse'),(21,'Stock In Department','stock_in_department'),(22,'Transfer Request Form','transfer_request_form'),(25,'Purchase Report','purchase_report'),(26,'Inventory Incident Report','inventory_incident_report'),(27,'Menu Group','menu_group'),(28,'Menu Category','menu_category'),(29,'Menu Item','menu_item'),(30,'Discount Setup','discount_setup'),(31,'Payment Setup','payment_setup'),(32,'Post Scheduling','post_scheduling'),(33,'Cash Tray In','cash_tray_in'),(34,'Dine In/Take Out','dine_in/take_out'),(35,'Recall','recall'),(36,'Discount','discount'),(37,'Cashier Report','cashier_report'),(38,'Sales Report','sales_report');
/*!40000 ALTER TABLE `pos_modulemstr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pos_rolemodule`
--

DROP TABLE IF EXISTS `pos_rolemodule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pos_rolemodule` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `roleID` bigint(20) NOT NULL,
  `moduleID` bigint(20) NOT NULL,
  `modulestatus` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pos_rolemodule`
--

LOCK TABLES `pos_rolemodule` WRITE;
/*!40000 ALTER TABLE `pos_rolemodule` DISABLE KEYS */;
INSERT INTO `pos_rolemodule` VALUES (1,1,1,1),(2,1,2,1),(3,1,3,1),(4,1,4,1),(5,1,5,1),(6,1,6,1),(7,1,7,1),(8,1,8,1),(9,1,9,1),(10,1,10,1),(11,1,11,1),(12,1,12,1),(13,1,13,1),(14,1,14,1),(15,1,15,1),(16,1,16,1),(17,1,17,1),(18,1,18,1),(19,1,19,1),(20,1,20,1),(21,1,21,1),(22,1,22,1),(23,1,23,1),(24,1,24,1),(25,1,25,1),(26,1,26,1),(27,1,27,1),(28,1,28,1),(29,1,29,1),(30,1,30,1),(31,1,31,1),(32,1,32,1),(33,1,33,1),(34,1,34,1),(35,1,35,1),(36,1,36,1),(37,1,37,1),(38,1,38,1),(39,2,1,1),(40,2,2,1),(41,3,1,0),(42,3,2,0),(43,3,3,0),(44,3,4,0),(45,3,5,0),(46,3,6,0),(47,3,7,0),(48,3,8,0),(49,3,9,0),(50,3,10,0),(51,3,11,0),(52,3,12,0),(53,3,13,0),(54,3,14,0),(55,3,15,0),(56,3,16,0),(57,3,17,0),(58,3,18,0),(59,3,19,0),(60,3,20,0),(61,3,21,0),(62,3,22,0),(63,3,23,0),(64,3,24,0),(65,3,25,0),(66,3,26,0),(67,3,27,0),(68,3,28,0),(69,3,29,0),(70,3,30,0),(71,3,31,0),(72,3,32,0),(73,3,33,0),(74,3,34,0),(75,3,35,0),(76,3,36,0),(77,3,37,0),(78,3,38,0),(79,4,1,1),(80,4,2,0),(81,4,3,0),(82,4,4,0),(83,4,5,0),(84,4,6,0),(85,4,7,0),(86,4,8,0),(87,4,9,0),(88,4,10,0),(89,4,11,0),(90,4,12,0),(91,4,13,0),(92,4,14,0),(93,4,15,0),(94,4,16,0),(95,4,17,0),(96,4,18,0),(97,4,19,0),(98,4,20,0),(99,4,21,0),(100,4,22,0),(101,4,23,0),(102,4,24,0),(103,4,25,0),(104,4,26,0),(105,4,27,0),(106,4,28,0),(107,4,29,0),(108,4,30,0),(109,4,31,0),(110,4,32,0),(111,4,33,0),(112,4,34,0),(113,4,35,0),(114,4,36,0),(115,4,37,0),(116,4,38,0);
/*!40000 ALTER TABLE `pos_rolemodule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pos_rolemstr`
--

DROP TABLE IF EXISTS `pos_rolemstr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pos_rolemstr` (
  `roleID` bigint(20) NOT NULL AUTO_INCREMENT,
  `roleDescription` varchar(255) NOT NULL,
  `user_roleStatus` bigint(20) NOT NULL,
  PRIMARY KEY (`roleID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pos_rolemstr`
--

LOCK TABLES `pos_rolemstr` WRITE;
/*!40000 ALTER TABLE `pos_rolemstr` DISABLE KEYS */;
INSERT INTO `pos_rolemstr` VALUES (1,'Administrator 1',1),(2,'Cashier',1),(3,'IT',1),(4,'Accounting',1);
/*!40000 ALTER TABLE `pos_rolemstr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_account`
--

DROP TABLE IF EXISTS `user_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_account` (
  `user_accountID` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_profileID` bigint(20) NOT NULL,
  `roleID` bigint(20) NOT NULL,
  `user_departmentID` bigint(20) NOT NULL,
  `user_designationID` bigint(20) NOT NULL,
  `user_accountCode` varchar(100) NOT NULL,
  `user_accountUsername` varchar(150) NOT NULL,
  `user_accountPassword` text NOT NULL,
  `user_accountFirstname` varchar(100) NOT NULL,
  `user_accountMiddlename` varchar(100) DEFAULT NULL,
  `user_accountLastname` varchar(100) NOT NULL,
  `user_accountContactnumber` varchar(100) NOT NULL,
  `user_accountHireddate` date NOT NULL,
  `user_accountStatus` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`user_accountID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_account`
--

LOCK TABLES `user_account` WRITE;
/*!40000 ALTER TABLE `user_account` DISABLE KEYS */;
INSERT INTO `user_account` VALUES (1,1,1,1,1,'EMP-20-00001','admin','admin','Akosi','Hatdog','Admin','09099054766','2020-10-03',1,1,1,'2020-09-07 02:49:19','2020-10-05 08:30:28'),(2,1,2,2,2,'EMP-20-00002','cashier','cashier','Akosi','Halaman','Cashier','09099054769','2020-10-02',1,1,1,'2020-09-07 02:49:19','2020-10-02 03:52:31');
/*!40000 ALTER TABLE `user_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_department`
--

DROP TABLE IF EXISTS `user_department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_department` (
  `user_departmentID` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_departmentCode` varchar(100) NOT NULL,
  `user_departmentName` varchar(200) NOT NULL,
  `user_departmentStatus` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`user_departmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_department`
--

LOCK TABLES `user_department` WRITE;
/*!40000 ALTER TABLE `user_department` DISABLE KEYS */;
INSERT INTO `user_department` VALUES (1,'DEP-20-00001','Information Technology',1,'2020-09-07 02:41:46','2020-10-02 03:55:50'),(2,'DEP-20-00002','Sales',1,'2020-09-07 02:44:57','2020-10-02 03:55:52'),(3,'DEP-20-00003','Finance',1,'2020-10-02 04:00:13','2020-10-05 00:36:31');
/*!40000 ALTER TABLE `user_department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_designation`
--

DROP TABLE IF EXISTS `user_designation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_designation` (
  `user_designationID` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_departmentID` bigint(20) NOT NULL,
  `user_designationCode` varchar(100) NOT NULL,
  `user_designationName` varchar(200) NOT NULL,
  `user_designationLimit` decimal(15,2) NOT NULL,
  `user_designationStatus` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`user_designationID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_designation`
--

LOCK TABLES `user_designation` WRITE;
/*!40000 ALTER TABLE `user_designation` DISABLE KEYS */;
INSERT INTO `user_designation` VALUES (1,1,'DES=20-00001','Supervisor',0.00,1,'2020-09-07 02:42:30','2020-10-02 03:56:03'),(2,2,'DES=20-00002','Cashier',0.00,1,'2020-09-07 02:42:30','2020-10-02 03:56:06'),(3,2,'DES-20-00003','ewwe',2333.00,1,'2020-10-02 04:00:41','2020-10-02 04:00:41');
/*!40000 ALTER TABLE `user_designation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_module`
--

DROP TABLE IF EXISTS `user_module`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_module` (
  `user_moduleID` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_moduleName` varchar(100) NOT NULL,
  `user_moduleShortname` varchar(200) DEFAULT NULL,
  `user_moduleStatus` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`user_moduleID`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_module`
--

LOCK TABLES `user_module` WRITE;
/*!40000 ALTER TABLE `user_module` DISABLE KEYS */;
INSERT INTO `user_module` VALUES (1,'Dashboard','dashboard','Active','2020-09-06 17:27:19','2020-09-06 17:27:19'),(2,'Company Setup','company_setup','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(3,'Roles and Permission','roles_and_permission','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(4,'User Department','user_department','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(5,'User Designation','user_designation','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(6,'User Account','user_account','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(7,'Approval Setup','approval_setup','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(8,'Inventory Storage','inventory_storage','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(9,'Warehouse and Storage Reports','warehouse_and_storage_reports','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(10,'Inventory Vendor','inventory_vendor','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(11,'Supplier Reports','supplier_reports','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(12,'Courrier Setup','courrier_setup','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(13,'Logistic Reports','logistic_reports','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(14,'Inventory Group','inventory_group','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(15,'Inventory Item','inventory_item','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(16,'Purchase Request','purchase_request','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(17,'Purchase Order','purchase_order','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(18,'List of Stocks','list_of_stocks','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(19,'Stock In Warehouse','stock_in_warehouse','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(20,'Stock Out Warehouse','stock_out_warehouse','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(21,'Stock In Department','stock_in_department','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(22,'Transfer Request Form','transfer_request_form','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(23,'Inventory Movement','inventory_movement','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(24,'Inventory Report','inventory_report','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(25,'Purchase Report','purchase_report','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(26,'Inventory Incident Report','inventory_incident_report','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(27,'Menu Group','menu_group','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(28,'Menu Category','menu_category','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(29,'Menu Item','menu_item','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(30,'Discount Setup','discount_setup','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(31,'Payment Setup','payment_setup','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(32,'Post Scheduling','post_scheduling','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(33,'Cash Tray In','cash_tray_in','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(34,'Dine In/Take Out','dine_in/take_out','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(35,'Recall','recall','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(36,'Discount','discount','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(37,'Cashier Report','cashier_report','Active','2020-09-06 17:44:26','2020-09-06 17:44:26'),(38,'Sales Report','sales_report','Active','2020-09-06 17:44:26','2020-09-06 17:44:26');
/*!40000 ALTER TABLE `user_module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_permission`
--

DROP TABLE IF EXISTS `user_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_permission` (
  `user_permissionID` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_roleID` bigint(20) NOT NULL,
  `user_moduleID` bigint(20) NOT NULL,
  `user_permissionStatus` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`user_permissionID`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_permission`
--

LOCK TABLES `user_permission` WRITE;
/*!40000 ALTER TABLE `user_permission` DISABLE KEYS */;
INSERT INTO `user_permission` VALUES (1,1,1,'1','2020-09-06 22:36:08','2020-09-17 06:18:53'),(2,1,2,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(3,1,3,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(4,1,4,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(5,1,5,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(6,1,6,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(7,1,7,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(8,1,8,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(9,1,9,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(10,1,10,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(11,1,11,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(12,1,12,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(13,1,13,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(14,1,14,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(15,1,15,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(16,1,16,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(17,1,17,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(18,1,18,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(19,1,19,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(20,1,20,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(21,1,21,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(22,1,22,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(23,1,23,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(24,1,24,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(25,1,25,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(26,1,26,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(27,1,27,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(28,1,28,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(29,1,29,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(30,1,30,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(31,1,31,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(32,1,32,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(33,1,33,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(34,1,34,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(35,1,35,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(36,1,36,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(37,1,37,'1','2020-09-06 22:41:23','2020-09-17 06:20:10'),(38,1,38,'1','2020-09-06 22:41:23','2020-09-17 06:20:10');
/*!40000 ALTER TABLE `user_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_role` (
  `user_roleID` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_roleName` varchar(100) NOT NULL,
  `user_roleDescription` varchar(150) DEFAULT NULL,
  `user_roleStatus` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`user_roleID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_role`
--

LOCK TABLES `user_role` WRITE;
/*!40000 ALTER TABLE `user_role` DISABLE KEYS */;
INSERT INTO `user_role` VALUES (1,'Administrator',NULL,'Active','2020-09-07 02:31:51','2020-09-07 02:31:51'),(2,'Cashier',NULL,'Active','2020-09-07 02:43:02','2020-09-07 02:43:02'),(3,'CEO','Chief Executive Officer','Active','2020-09-07 02:43:45','2020-09-07 02:43:45');
/*!40000 ALTER TABLE `user_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'pointofsale'
--

--
-- Dumping routines for database 'pointofsale'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-05 16:34:11
