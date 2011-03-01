-- MySQL dump 10.13  Distrib 5.1.49, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: maerdo
-- ------------------------------------------------------
-- Server version	5.1.49-1ubuntu8.1

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
-- Table structure for table `acl__resource`
--

DROP TABLE IF EXISTS `acl__resource`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl__resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `acl__role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl__resource`
--

LOCK TABLES `acl__resource` WRITE;
/*!40000 ALTER TABLE `acl__resource` DISABLE KEYS */;
/*!40000 ALTER TABLE `acl__resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl__role`
--

DROP TABLE IF EXISTS `acl__role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl__role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `role` (`role`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl__role`
--

LOCK TABLES `acl__role` WRITE;
/*!40000 ALTER TABLE `acl__role` DISABLE KEYS */;
/*!40000 ALTER TABLE `acl__role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `action`
--

DROP TABLE IF EXISTS `action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `controller_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `action`
--

LOCK TABLES `action` WRITE;
/*!40000 ALTER TABLE `action` DISABLE KEYS */;
/*!40000 ALTER TABLE `action` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `component__auth`
--

DROP TABLE IF EXISTS `component__auth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `component__auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_id` int(11) NOT NULL,
  `table` varchar(30) NOT NULL,
  `database_name` varchar(25) NOT NULL,
  `username_field` varchar(50) NOT NULL,
  `password_field` varchar(50) NOT NULL,
  `role_field` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `component__auth`
--

LOCK TABLES `component__auth` WRITE;
/*!40000 ALTER TABLE `component__auth` DISABLE KEYS */;
/*!40000 ALTER TABLE `component__auth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `component__auth__role`
--

DROP TABLE IF EXISTS `component__auth__role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `component__auth__role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ca_id` int(11) NOT NULL,
  `role` varchar(30) NOT NULL,
  `url` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `component__auth__role`
--

LOCK TABLES `component__auth__role` WRITE;
/*!40000 ALTER TABLE `component__auth__role` DISABLE KEYS */;
/*!40000 ALTER TABLE `component__auth__role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `component__cache`
--

DROP TABLE IF EXISTS `component__cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `component__cache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `backend_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `component__cache`
--

LOCK TABLES `component__cache` WRITE;
/*!40000 ALTER TABLE `component__cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `component__cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `component__cache__backend__file__option`
--

DROP TABLE IF EXISTS `component__cache__backend__file__option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `component__cache__backend__file__option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cc_id` int(11) NOT NULL,
  `cache_dir` varchar(60) NOT NULL,
  `file_locking` varchar(60) NOT NULL,
  `read_control` varchar(5) NOT NULL,
  `read_control_type` varchar(5) NOT NULL,
  `hashed_directory_level` varchar(5) NOT NULL,
  `hashed_directory_umask` varchar(5) NOT NULL,
  `metatadatas_array_max_size` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `component__cache__backend__file__option`
--

LOCK TABLES `component__cache__backend__file__option` WRITE;
/*!40000 ALTER TABLE `component__cache__backend__file__option` DISABLE KEYS */;
/*!40000 ALTER TABLE `component__cache__backend__file__option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `component__cache__backend__sqlite__option`
--

DROP TABLE IF EXISTS `component__cache__backend__sqlite__option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `component__cache__backend__sqlite__option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cc_id` int(11) NOT NULL,
  `cache_dir` varchar(60) NOT NULL,
  `file_locking` varchar(60) NOT NULL,
  `read_control` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `component__cache__backend__sqlite__option`
--

LOCK TABLES `component__cache__backend__sqlite__option` WRITE;
/*!40000 ALTER TABLE `component__cache__backend__sqlite__option` DISABLE KEYS */;
/*!40000 ALTER TABLE `component__cache__backend__sqlite__option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `component__cache__frontendoption`
--

DROP TABLE IF EXISTS `component__cache__frontendoption`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `component__cache__frontendoption` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cc_id` int(11) NOT NULL,
  `option` varchar(60) NOT NULL,
  `value` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `component__cache__frontendoption`
--

LOCK TABLES `component__cache__frontendoption` WRITE;
/*!40000 ALTER TABLE `component__cache__frontendoption` DISABLE KEYS */;
/*!40000 ALTER TABLE `component__cache__frontendoption` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `component__database`
--

DROP TABLE IF EXISTS `component__database`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `component__database` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adapter` varchar(15) NOT NULL,
  `hostname` varchar(50) NOT NULL,
  `database` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `component__database`
--

LOCK TABLES `component__database` WRITE;
/*!40000 ALTER TABLE `component__database` DISABLE KEYS */;
/*!40000 ALTER TABLE `component__database` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `component__databasemodule`
--

DROP TABLE IF EXISTS `component__databasemodule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `component__databasemodule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_id` int(11) NOT NULL,
  `database_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `component__databasemodule`
--

LOCK TABLES `component__databasemodule` WRITE;
/*!40000 ALTER TABLE `component__databasemodule` DISABLE KEYS */;
/*!40000 ALTER TABLE `component__databasemodule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `component__plugin`
--

DROP TABLE IF EXISTS `component__plugin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `component__plugin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stackindex` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `component__plugin`
--

LOCK TABLES `component__plugin` WRITE;
/*!40000 ALTER TABLE `component__plugin` DISABLE KEYS */;
/*!40000 ALTER TABLE `component__plugin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `component__translate`
--

DROP TABLE IF EXISTS `component__translate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `component__translate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_id` int(11) NOT NULL,
  `identifiant` varchar(5) NOT NULL,
  `locale` varchar(5) NOT NULL,
  `language_name` varchar(30) NOT NULL,
  `default` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `component__translate`
--

LOCK TABLES `component__translate` WRITE;
/*!40000 ALTER TABLE `component__translate` DISABLE KEYS */;
/*!40000 ALTER TABLE `component__translate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `controller`
--

DROP TABLE IF EXISTS `controller`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `controller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `module_id` (`module_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controller`
--

LOCK TABLES `controller` WRITE;
/*!40000 ALTER TABLE `controller` DISABLE KEYS */;
/*!40000 ALTER TABLE `controller` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form`
--

DROP TABLE IF EXISTS `form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_id` int(11) NOT NULL,
  `controller_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `type` enum('post','get') NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form`
--

LOCK TABLES `form` WRITE;
/*!40000 ALTER TABLE `form` DISABLE KEYS */;
/*!40000 ALTER TABLE `form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locale`
--

DROP TABLE IF EXISTS `locale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locale` (
  `id` int(11) NOT NULL,
  `locale` varchar(10) NOT NULL,
  `language_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locale`
--

LOCK TABLES `locale` WRITE;
/*!40000 ALTER TABLE `locale` DISABLE KEYS */;
INSERT INTO `locale` VALUES (1,'fr_FR','Francais'),(2,'en_US','English');
/*!40000 ALTER TABLE `locale` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `module`
--

DROP TABLE IF EXISTS `module`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `module`
--

LOCK TABLES `module` WRITE;
/*!40000 ALTER TABLE `module` DISABLE KEYS */;
/*!40000 ALTER TABLE `module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_id` int(11) NOT NULL,
  `controller_id` int(11) NOT NULL,
  `action_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`),
  KEY `action_id` (`action_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page`
--

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page__css`
--

DROP TABLE IF EXISTS `page__css`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page__css` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `identifiant` varchar(50) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page__css`
--

LOCK TABLES `page__css` WRITE;
/*!40000 ALTER TABLE `page__css` DISABLE KEYS */;
/*!40000 ALTER TABLE `page__css` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page__javascript`
--

DROP TABLE IF EXISTS `page__javascript`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page__javascript` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `identifiant` varchar(50) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page__javascript`
--

LOCK TABLES `page__javascript` WRITE;
/*!40000 ALTER TABLE `page__javascript` DISABLE KEYS */;
/*!40000 ALTER TABLE `page__javascript` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page__meta`
--

DROP TABLE IF EXISTS `page__meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page__meta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `locale` varchar(10) NOT NULL,
  `meta` varchar(20) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page__meta`
--

LOCK TABLES `page__meta` WRITE;
/*!40000 ALTER TABLE `page__meta` DISABLE KEYS */;
/*!40000 ALTER TABLE `page__meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page__navigation`
--

DROP TABLE IF EXISTS `page__navigation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page__navigation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page__navigation`
--

LOCK TABLES `page__navigation` WRITE;
/*!40000 ALTER TABLE `page__navigation` DISABLE KEYS */;
/*!40000 ALTER TABLE `page__navigation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page__title`
--

DROP TABLE IF EXISTS `page__title`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page__title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `locale` varchar(10) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `page_id` (`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page__title`
--

LOCK TABLES `page__title` WRITE;
/*!40000 ALTER TABLE `page__title` DISABLE KEYS */;
/*!40000 ALTER TABLE `page__title` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` enum('locked','active') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrator','Maerdo','admin@project.com','admin','410ec15153a6dff0bed851467309bcbd','admin','active');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-02-25  9:29:48
