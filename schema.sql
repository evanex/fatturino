-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: fatturino
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1-log

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
-- Table structure for table `ANAGRAFICA_CONSOLIDATA`
--

DROP TABLE IF EXISTS `ANAGRAFICA_CONSOLIDATA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ANAGRAFICA_CONSOLIDATA` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `vatNumber` varchar(30) NOT NULL,
  `requestDate` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `fromquerystring` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `vatNumber` (`vatNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=3509 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `FATTURE_FRONT_END`
--

DROP TABLE IF EXISTS `FATTURE_FRONT_END`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FATTURE_FRONT_END` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DATE_CREATED` datetime NOT NULL,
  `ragione_sociale` varchar(255) NOT NULL,
  `partita_iva` varchar(20) NOT NULL,
  `codice_fiscale` varchar(20) NOT NULL,
  `indirizzo` varchar(255) NOT NULL,
  `citta_cap` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sito` varchar(255) NOT NULL,
  `dest_ragione_sociale` varchar(255) NOT NULL,
  `dest_partita_iva` varchar(20) NOT NULL,
  `dest_codice_fiscale` varchar(20) NOT NULL,
  `dest_idirizzo` varchar(255) NOT NULL,
  `dest_citta_cap` varchar(255) NOT NULL,
  `dest_email` varchar(255) NOT NULL,
  `tipo_doc` varchar(20) NOT NULL,
  `regime_minimi` tinyint(1) DEFAULT NULL,
  `num_fatt` text NOT NULL,
  `data_fatt` date NOT NULL,
  `descrizione` varchar(255) NOT NULL,
  `importo` decimal(10,2) NOT NULL,
  `importo1` decimal(15,0) NOT NULL,
  `importo2` decimal(15,0) NOT NULL,
  `spese_generali` decimal(3,1) NOT NULL,
  `IBAN` varchar(200) NOT NULL,
  `profilo` varchar(20) NOT NULL,
  `rand` varchar(200) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `html_views` int(11) NOT NULL,
  `pdf_views` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `retreive_rand` (`rand`)
) ENGINE=InnoDB AUTO_INCREMENT=685 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `FATTURE_SAVED`
--

DROP TABLE IF EXISTS `FATTURE_SAVED`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FATTURE_SAVED` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DATE_CREATED` datetime NOT NULL,
  `ragione_sociale` varchar(255) NOT NULL,
  `partita_iva` varchar(20) NOT NULL,
  `codice_fiscale` varchar(20) NOT NULL,
  `indirizzo` varchar(255) NOT NULL,
  `citta_cap` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sito` varchar(255) NOT NULL,
  `dest_ragione_sociale` varchar(255) NOT NULL,
  `dest_partita_iva` varchar(20) NOT NULL,
  `dest_codice_fiscale` varchar(20) NOT NULL,
  `dest_idirizzo` varchar(255) NOT NULL,
  `dest_citta_cap` varchar(255) NOT NULL,
  `dest_email` varchar(255) NOT NULL,
  `tipo_doc` varchar(20) NOT NULL,
  `regime_minimi` tinyint(1) DEFAULT NULL,
  `num_fatt` text NOT NULL,
  `data_fatt` date NOT NULL,
  `descrizione` varchar(255) NOT NULL,
  `importo` decimal(10,2) NOT NULL,
  `importo1` decimal(15,0) NOT NULL,
  `importo2` decimal(15,0) NOT NULL,
  `spese_generali` decimal(3,1) NOT NULL,
  `IBAN` varchar(200) NOT NULL,
  `profilo` varchar(20) NOT NULL,
  `rand` varchar(200) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `html_views` int(11) NOT NULL,
  `pdf_views` int(11) NOT NULL,
  `ANNO` int(11) NOT NULL,
  `PAGATA` smallint(6) NOT NULL,
  `NOTE` tinytext NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `retreive_rand` (`rand`),
  KEY `dsadasd` (`partita_iva`,`ANNO`)
) ENGINE=InnoDB AUTO_INCREMENT=844 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `MAIN_INVOICE_TABLE`
--

DROP TABLE IF EXISTS `MAIN_INVOICE_TABLE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MAIN_INVOICE_TABLE` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `partita_iva` varchar(20) NOT NULL,
  `data` date NOT NULL,
  `num_fatt` int(11) NOT NULL,
  `importo` decimal(15,2) NOT NULL,
  `profilo` varchar(20) NOT NULL,
  `rand_code` varchar(200) NOT NULL,
  `partita_iva_cliente` varchar(20) NOT NULL,
  `id_anagrafica_cliente` int(11) NOT NULL,
  `ragione_sociale_cliente` varchar(255) NOT NULL,
  `status_invoice` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `USER_EMAIL_VATCODE`
--

DROP TABLE IF EXISTS `USER_EMAIL_VATCODE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USER_EMAIL_VATCODE` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(200) NOT NULL,
  `PWD` varchar(200) NOT NULL,
  `VATCODE` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-03 16:32:45
