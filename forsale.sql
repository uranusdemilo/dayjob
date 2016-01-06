-- MySQL dump 10.13  Distrib 5.1.61, for redhat-linux-gnu (i386)
--
-- Host: localhost    Database: forsale
-- ------------------------------------------------------
-- Server version	5.1.61

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
-- Table structure for table `cards`
--

DROP TABLE IF EXISTS `cards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cards` (
  `cardindex` int(8) NOT NULL AUTO_INCREMENT,
  `cardmodel` char(25) NOT NULL DEFAULT '',
  `cardslot` char(10) NOT NULL DEFAULT '',
  `cardtype` char(25) NOT NULL DEFAULT '',
  `cardprice` char(5) DEFAULT NULL,
  `cardpic` char(20) DEFAULT NULL,
  PRIMARY KEY (`cardindex`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cards`
--

LOCK TABLES `cards` WRITE;
/*!40000 ALTER TABLE `cards` DISABLE KEYS */;
INSERT INTO `cards` VALUES (10,'Qlogic Unknown Model','PCI-E X4','Fiber Channel HBA','10.00',''),(11,'Adaptec AUA-400B','PCI','4x USB Expansion','5.00',''),(12,'Unknown','PCI','IEEE 1394 Host Adapter','1.00',''),(13,'Adaptec AAR-2610','PCI-X','6-Channle SATA RAID','5.00',''),(14,'Sound Blaster Live','PCI','Sound Card','1.00',''),(15,'3ware Unknown Model','PCI-X','4 Channel SATA RAID','Offer','');
/*!40000 ALTER TABLE `cards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colnames`
--

DROP TABLE IF EXISTS `colnames`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colnames` (
  `name` char(10) DEFAULT NULL,
  `descr` char(80) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colnames`
--

LOCK TABLES `colnames` WRITE;
/*!40000 ALTER TABLE `colnames` DISABLE KEYS */;
INSERT INTO `colnames` VALUES ('pcs','FB Code?Brand?Model?CPU?RAM?HDD?USD'),('hdds','FB Code?Brand?Model?Size?Type?USD'),('cards','FB Code?Model?Slot?Type?USD'),('ps','Code?Brand?Model?Wattage?Type?OEM Pn?USD'),('mon','FB Code?Brand?Model?Size?Type?USD'),('ww','FB Code?Brand?Volts-Amps?End Type?USD');
/*!40000 ALTER TABLE `colnames` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cpumake`
--

DROP TABLE IF EXISTS `cpumake`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cpumake` (
  `make` char(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cpumake`
--

LOCK TABLES `cpumake` WRITE;
/*!40000 ALTER TABLE `cpumake` DISABLE KEYS */;
INSERT INTO `cpumake` VALUES ('Intel'),('AMD'),('Cyrix');
/*!40000 ALTER TABLE `cpumake` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cpumod`
--

DROP TABLE IF EXISTS `cpumod`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cpumod` (
  `modl` char(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cpumod`
--

LOCK TABLES `cpumod` WRITE;
/*!40000 ALTER TABLE `cpumod` DISABLE KEYS */;
INSERT INTO `cpumod` VALUES ('Pentium'),('Pentium II'),('Pentium III'),('Pentium IV'),('Pentium II XEON'),('Pentium III XEON'),('DURON'),('K6'),('ATHALON');
/*!40000 ALTER TABLE `cpumod` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hdds`
--

DROP TABLE IF EXISTS `hdds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hdds` (
  `hddindex` int(8) NOT NULL AUTO_INCREMENT,
  `hddmanuf` char(20) NOT NULL DEFAULT '',
  `hddmod` char(10) DEFAULT NULL,
  `hddsize` char(10) NOT NULL DEFAULT '',
  `hddtype` char(20) NOT NULL DEFAULT '',
  `hddprice` char(10) NOT NULL DEFAULT '',
  `hddpic` char(12) DEFAULT NULL,
  PRIMARY KEY (`hddindex`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hdds`
--

LOCK TABLES `hdds` WRITE;
/*!40000 ALTER TABLE `hdds` DISABLE KEYS */;
INSERT INTO `hdds` VALUES (1,'Quantum','Atlas 10K','36.7 GB','SCSI-3','10',''),(2,'Western Digital','WD200','200 GB','EIDE','20',''),(3,'Hitachi','Deskstar','82.3 GB','EIDE','20',''),(4,'Seagate','Barracuda','80 GB','EIDE','20',''),(5,'Fujitsu','MAX3147RC','146 GB','SAS 15K','30','');
/*!40000 ALTER TABLE `hdds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `junk`
--

DROP TABLE IF EXISTS `junk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `junk` (
  `jitem` char(20) DEFAULT NULL,
  `jprice` int(2) DEFAULT NULL,
  `jpic` char(15) DEFAULT NULL,
  `jtext` char(15) DEFAULT NULL,
  `jindex` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`jindex`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `junk`
--

LOCK TABLES `junk` WRITE;
/*!40000 ALTER TABLE `junk` DISABLE KEYS */;
INSERT INTO `junk` VALUES ('Euro Power Cord',0,'cord.jpg','cord.txt',1);
/*!40000 ALTER TABLE `junk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mon`
--

DROP TABLE IF EXISTS `mon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mon` (
  `monindex` int(4) DEFAULT NULL,
  `monmake` varchar(20) DEFAULT NULL,
  `monmodel` varchar(20) DEFAULT NULL,
  `monsize` varchar(20) DEFAULT NULL,
  `montype` varchar(20) DEFAULT NULL,
  `monprice` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mon`
--

LOCK TABLES `mon` WRITE;
/*!40000 ALTER TABLE `mon` DISABLE KEYS */;
INSERT INTO `mon` VALUES (0,'Dell','E228WFPc','22 in','LCD','50.00');
/*!40000 ALTER TABLE `mon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nw`
--

DROP TABLE IF EXISTS `nw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nw` (
  `nwindex` int(8) NOT NULL AUTO_INCREMENT,
  `nwmanuf` char(25) NOT NULL DEFAULT '',
  `nwmodel` char(25) NOT NULL DEFAULT '',
  `nwdevice` char(10) NOT NULL DEFAULT '',
  `nwtype` char(25) NOT NULL DEFAULT '',
  `nwattrib` char(25) DEFAULT NULL,
  `nwprice` char(5) DEFAULT NULL,
  `nwpic` char(15) DEFAULT NULL,
  `nwtext` char(15) DEFAULT NULL,
  PRIMARY KEY (`nwindex`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nw`
--

LOCK TABLES `nw` WRITE;
/*!40000 ALTER TABLE `nw` DISABLE KEYS */;
INSERT INTO `nw` VALUES (2,'Linksys','BEFSR11','Router','DSL','1 Port','10','befsr11.jpg','befsr11.txt');
/*!40000 ALTER TABLE `nw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `other`
--

DROP TABLE IF EXISTS `other`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `other` (
  `micsindex` int(4) DEFAULT NULL,
  `attr1` char(30) DEFAULT NULL,
  `attr2` char(30) DEFAULT NULL,
  `attr3` char(30) DEFAULT NULL,
  `attr4` char(40) DEFAULT NULL,
  `attr5` char(40) DEFAULT NULL,
  `price` char(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `other`
--

LOCK TABLES `other` WRITE;
/*!40000 ALTER TABLE `other` DISABLE KEYS */;
/*!40000 ALTER TABLE `other` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pcs`
--

DROP TABLE IF EXISTS `pcs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pcs` (
  `pcindex` int(8) NOT NULL AUTO_INCREMENT,
  `pcmake` char(20) DEFAULT NULL,
  `pcmodel` char(20) DEFAULT NULL,
  `pccpu` varchar(30) DEFAULT NULL,
  `pcmem` varchar(30) DEFAULT NULL,
  `pcdisk` varchar(30) DEFAULT NULL,
  `price` int(4) DEFAULT NULL,
  `pctext` char(20) DEFAULT NULL,
  PRIMARY KEY (`pcindex`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pcs`
--

LOCK TABLES `pcs` WRITE;
/*!40000 ALTER TABLE `pcs` DISABLE KEYS */;
INSERT INTO `pcs` VALUES (1,'Dell','Precision 490','3Ghz Quad Core Xeon','4GB ECC DDR2','140GB SAS',300,'Good System'),(2,'IBM','Thinkpad X61','2.4Ghz Core Duo','4GB PC2-5300','80GB SATA',150,'Works OK'),(3,'Dell','Dimension 3000','2.8Ghz Pentium 4','1GB DDR2','60GB IDE',25,'Old but functional');
/*!40000 ALTER TABLE `pcs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ps`
--

DROP TABLE IF EXISTS `ps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ps` (
  `psindex` int(8) NOT NULL AUTO_INCREMENT,
  `psmanuf` char(25) DEFAULT NULL,
  `psmodel` char(15) DEFAULT NULL,
  `pswatts` int(4) DEFAULT NULL,
  `pstype` char(15) DEFAULT NULL,
  `psoempn` char(25) DEFAULT NULL,
  `psprice` char(5) DEFAULT NULL,
  PRIMARY KEY (`psindex`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ps`
--

LOCK TABLES `ps` WRITE;
/*!40000 ALTER TABLE `ps` DISABLE KEYS */;
INSERT INTO `ps` VALUES (2,'Antec','Earthwatts EA-4',430,'ATX','none','20.00'),(3,'Bestec','ATX0300D5WC',300,'ATX','HP 4188-2625','10.00');
/*!40000 ALTER TABLE `ps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `uname` char(20) DEFAULT NULL,
  `passwd` char(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('mwyatt','mike62');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wallwarts`
--

DROP TABLE IF EXISTS `wallwarts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wallwarts` (
  `plugname` char(50) DEFAULT NULL,
  `odmm` char(10) DEFAULT NULL,
  `idmm` char(10) DEFAULT NULL,
  `barlenmm` char(10) DEFAULT NULL,
  `pdmm` char(10) DEFAULT NULL,
  `standard` char(20) DEFAULT NULL,
  `voltagelow` char(5) DEFAULT NULL,
  `voltagehigh` char(10) DEFAULT NULL,
  `ringcolor` char(20) DEFAULT NULL,
  `partnum` char(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wallwarts`
--

LOCK TABLES `wallwarts` WRITE;
/*!40000 ALTER TABLE `wallwarts` DISABLE KEYS */;
INSERT INTO `wallwarts` VALUES ('IEC 60120-10:70 Type A','5.5','2.1','NA','NA','IEC 60120-10:70','NA','NA','NA','NA'),('IEC 60120-10:70 Type A','5.5','2.5','NA','NA','IEC 60120-10:70','NA','NA','NA','NA'),('IEC 60120-10:70 Type B','6.0','2.1','NA','NA','IEC 60120-10:70','NA','NA','NA','NA'),('IEC 60120-10:70 Type B','6.0','2.5','NA','NA','IEC 60120-10:70','NA','NA','NA','NA'),('IEC 60120-10:70 Type C','3.8','1.4','NA','NA','IEC 60120-10:70','NA','NA','NA','NA'),('IEC 60120-10:70 Type D','6.3','1.3','NA','NA','IEC 60120-10:70','NA','NA','NA','NA'),('EAJ-01','2.35','0.7','NA','NA','IEC 60120-10:70','0','3.15','NA','NA'),('EAJ-02','4.0','1.7','NA','NA','IEC 60120-10:70','3.15','6.3','NA','NA'),('EAJ-03','4.75','1.7','NA','NA','IEC 60120-10:70','6.3','10.5','NA','NA'),('EAJ-04','5.5','3.4','NA','NA','IEC 60120-10:70','10.5','13.5','NA','NA'),('EAJ-05','6.5','4.4','NA','NA','IEC 60120-10:70','13.5','18V','NA','NA'),('DIN 45323','5.0','2.0','14','NA','DIN 45323','NA','NA','NA','NA'),('DIN 45323','6.0','1.98','NA','NA','DIN 45323','NA','NA','NA','NA'),('Adaptaplug A','2.3','0.7','NA','NA','EIAJ-01','0','3.15','Yellow','RS 3807936'),('Adaptaplug B','4.0','1.7','NA','NA','EIAJ-02','3.15','6.3','Yellow','RS 3780266'),('Adaptaplug C','4.7','1.7','NA','NA','EIAJ-03','6.3','10.5','Yellow','RS 3780267'),('Adaptaplug D','5.5','2.1','NA','NA','EIAJ-04','10.5','13.5','Yellow','RS 3780268'),('Adaptaplug E','2.5','NA','NA','NA','3/32 submini','NA','NA','Black','RS 3870005'),('Adaptaplug F','3.5','NA','NA','NA','1/8 Mini Plug','NA','NA','Black','RS 3875411'),('Adaptaplug G','3.0','1.1','NA','NA','NA','NA','NA','Turquoise','RS 3807935'),('Adaptaplug H','3.4','1.3','NA','NA','IEC 60130-10 E','NA','NA','Orange','RS 3870006'),('Adaptaplug I','3.8','1.1','NA','NA','IEC 60130-10 E','NA','NA','Pink','RS 3870007'),('Adaptaplug J','5.0','1.5','NA','NA','NA','NA','NA','Red','RS 3870004'),('Adaptaplug K','5.0','2.1','NA','NA','NA','NA','NA','Purple','RS 3807937'),('Adaptaplug L','5.0','2.5','NA','NA','NA','NA','NA','Dark Green','RS 3807938'),('Adaptaplug M','5.5','2.1','NA','NA','IEC 60130-10 A','NA','NA','Navy','RS 3807939'),('Adaptaplug N','5.5','2.5','NA','NA','IEC 60130-10 A','NA','NA','White','RS 3807940'),('Adaptaplug O','5.5','2.8','NA','NA','NA','NA','NA','Brown','RS 3780269'),('Adaptaplug P','5.5','3.8','NA','1.8','NA','NA','NA','Yellow-Green','RS 3780270'),('Adaptaplug Q','6.3','3.0','NA','NA','NA','NA','NA','Navy','RS 3807940'),('Adaptaplug R','6.9','4.2','NA','0.7','NA','NA','NA','NA','RS 3912655'),('Adaptaplug S','5.5','1.5','NA','NA','NA','NA','NA','Gray','RS 3875405'),('Adaptaplug T','6.5','4.3','NA','1.4','EIAJ-05','13.5','18.0','Yellow','RS 3875406'),('Adaptaplug U-1','6.5','4.1','NA','1.0','IEC 60130-10 D','NA','NA','Light Yelow','RS 3875407'),('Adaptaplug U-2','6.5','3.1','NA','1.0','IEC 60130-10 D','NA','NA','Light Yelow','RS 3875407');
/*!40000 ALTER TABLE `wallwarts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-23  3:17:13
