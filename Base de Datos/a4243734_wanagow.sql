-- MySQL dump 10.13  Distrib 5.1.57, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: a4243734_wanagow
-- ------------------------------------------------------
-- Server version	5.1.57
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Administradores`
--

DROP TABLE IF EXISTS `Administradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Administradores` (
  `idAdministrador` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idAdministrador`),
  UNIQUE KEY `idAdministrador_UNIQUE` (`idAdministrador`),
  KEY `fk_Administradores_Usuarios1` (`idUsuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Administradores`
--

LOCK TABLES `Administradores` WRITE;
/*!40000 ALTER TABLE `Administradores` DISABLE KEYS */;
/*!40000 ALTER TABLE `Administradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Calendario`
--

DROP TABLE IF EXISTS `Calendario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Calendario` (
  `idCliente` int(11) NOT NULL,
  `idEventos` int(11) NOT NULL,
  PRIMARY KEY (`idCliente`,`idEventos`),
  KEY `fk_Clientes_has_Eventos_Eventos1` (`idEventos`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Calendario`
--

LOCK TABLES `Calendario` WRITE;
/*!40000 ALTER TABLE `Calendario` DISABLE KEYS */;
/*!40000 ALTER TABLE `Calendario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Categorias`
--

DROP TABLE IF EXISTS `Categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Categorias` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `idInteres` int(11) NOT NULL,
  PRIMARY KEY (`idCategoria`),
  UNIQUE KEY `idCategoria_UNIQUE` (`idCategoria`),
  KEY `fk_Categorias_Intereses1` (`idInteres`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Categorias`
--

LOCK TABLES `Categorias` WRITE;
/*!40000 ALTER TABLE `Categorias` DISABLE KEYS */;
INSERT INTO `Categorias` VALUES (1,'Area de Estudio',1),(2,'Congresos',1),(3,'Convenciones',1),(4,'Seminarios',1),(5,'Ballet | Danza',2),(6,'Teatro',2);
/*!40000 ALTER TABLE `Categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Clientes`
--

DROP TABLE IF EXISTS `Clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Clientes` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `idInteres` int(11) NOT NULL,
  PRIMARY KEY (`idCliente`),
  UNIQUE KEY `idCliente_UNIQUE` (`idCliente`),
  KEY `fk_Cliente_Usuarios1` (`idUsuario`),
  KEY `fk_Clientes_Intereses1` (`idInteres`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Clientes`
--

LOCK TABLES `Clientes` WRITE;
/*!40000 ALTER TABLE `Clientes` DISABLE KEYS */;
INSERT INTO `Clientes` VALUES (1,1,1),(2,1,2),(3,1,3);
/*!40000 ALTER TABLE `Clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Eventos`
--

DROP TABLE IF EXISTS `Eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Eventos` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `evento` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `fechaEvento` date NOT NULL,
  `lugar` text COLLATE latin1_general_ci NOT NULL,
  `costo` float NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `imagen` text COLLATE latin1_general_ci NOT NULL,
  `idInteres` int(11) NOT NULL,
  `idPromotor` int(11) NOT NULL,
  PRIMARY KEY (`idEvento`),
  UNIQUE KEY `idEventos_UNIQUE` (`idEvento`),
  KEY `fk_Eventos_Intereses1` (`idInteres`),
  KEY `fk_Eventos_Promotor1` (`idPromotor`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Eventos`
--

LOCK TABLES `Eventos` WRITE;
/*!40000 ALTER TABLE `Eventos` DISABLE KEYS */;
INSERT INTO `Eventos` VALUES (1,'Congreso de Diseño','2013-03-20','Complejo Cultural Univeritario',500,1,'imagenes/evento1.jpg',1,1),(2,'Diplomado de Diseño Grafico','2013-02-20','Haptos Inegrando Soluciones',0,1,'imagenes/haptos.jpg',1,1),(3,'Mexico XXI','2014-08-23','Auditorio Nacional',0,1,'imagenes/Auditorio-Nacional.jpg',1,1),(4,'Se busca Diseñador','2014-03-03','Complejo Cultural',0,1,'imagenes/evento.jpg',1,1),(5,'Noche de Leyendas en el Lago La Concordia','2014-02-27','Ejércitos de Oriente, Mártires del Trabajo PUEBLA, Puebla, 72260',9000,1,'imagenes/bigpic3659.jpg',2,2),(6,'Torneo de Ajedrez','2014-03-07','En el complejo Cultural Universitario de la Benemérita Universidad Autónoma de Puebla (BUAP). Ubicado en Vía Atlixcáyotl 2499, esquina con Cúmulo de Virgo, Colonia Reserva Territorial Atlixcáyotl, Puebla.',0,1,'imagenes/ajedrez.jpg',3,2);
/*!40000 ALTER TABLE `Eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Events`
--

DROP TABLE IF EXISTS `Events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evento` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `descripcion` varchar(59) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Events`
--

LOCK TABLES `Events` WRITE;
/*!40000 ALTER TABLE `Events` DISABLE KEYS */;
INSERT INTO `Events` VALUES (1,'Mexico Siglo XII','Evento Cultural');
/*!40000 ALTER TABLE `Events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Intereses`
--

DROP TABLE IF EXISTS `Intereses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Intereses` (
  `idInteres` int(11) NOT NULL AUTO_INCREMENT,
  `interes` varchar(30) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`idInteres`),
  UNIQUE KEY `idIntereses_UNIQUE` (`idInteres`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Intereses`
--

LOCK TABLES `Intereses` WRITE;
/*!40000 ALTER TABLE `Intereses` DISABLE KEYS */;
INSERT INTO `Intereses` VALUES (1,'Academica'),(2,'Cultural'),(3,'Entretenimiento');
/*!40000 ALTER TABLE `Intereses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Promotores`
--

DROP TABLE IF EXISTS `Promotores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Promotores` (
  `idPromotor` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idPromotor`),
  UNIQUE KEY `idPromotor_UNIQUE` (`idPromotor`),
  KEY `fk_Promotor_Usuarios` (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Promotores`
--

LOCK TABLES `Promotores` WRITE;
/*!40000 ALTER TABLE `Promotores` DISABLE KEYS */;
INSERT INTO `Promotores` VALUES (1,4),(2,5);
/*!40000 ALTER TABLE `Promotores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Rutas`
--

DROP TABLE IF EXISTS `Rutas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Rutas` (
  `idRuta` int(11) NOT NULL,
  `latitud` float NOT NULL,
  `longitud` float NOT NULL,
  `idEvento` int(11) NOT NULL,
  PRIMARY KEY (`idRuta`),
  KEY `fk_Rutas_Eventos1` (`idEvento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Rutas`
--

LOCK TABLES `Rutas` WRITE;
/*!40000 ALTER TABLE `Rutas` DISABLE KEYS */;
/*!40000 ALTER TABLE `Rutas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SubCategorias`
--

DROP TABLE IF EXISTS `SubCategorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SubCategorias` (
  `idSubCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `subCategoria` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `idCategoria` int(11) NOT NULL,
  PRIMARY KEY (`idSubCategoria`),
  UNIQUE KEY `idSubCategoria_UNIQUE` (`idSubCategoria`),
  KEY `fk_SubCategorias_Categorias1` (`idCategoria`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SubCategorias`
--

LOCK TABLES `SubCategorias` WRITE;
/*!40000 ALTER TABLE `SubCategorias` DISABLE KEYS */;
INSERT INTO `SubCategorias` VALUES (1,'Comedia',6);
/*!40000 ALTER TABLE `SubCategorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuarios`
--

DROP TABLE IF EXISTS `Usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `apellidos` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `fechaNaciemiento` date DEFAULT NULL,
  `genero` tinyint(1) DEFAULT NULL,
  `email` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `password` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `idUsuario_UNIQUE` (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuarios`
--

LOCK TABLES `Usuarios` WRITE;
/*!40000 ALTER TABLE `Usuarios` DISABLE KEYS */;
INSERT INTO `Usuarios` VALUES (1,'Al','ashdjsh','1992-01-28',1,'Alonso','123',1),(2,'Alonso','Campos',NULL,0,'z@hotmail.com','345',NULL),(3,'Djahsgdjh','Dgsahagdsjhgp',NULL,0,'asdhskjd@dasdasgdhjgas.com','jaja',NULL),(4,'Campos','Alonso',NULL,1,'alonso@hotmail.com','Alonso',NULL),(5,'Vianey','Vera ',NULL,0,'vianey@hotmail.com','12',1),(6,'Alonso','Campos',NULL,NULL,'campos@yahoo.es','alonso',NULL),(7,'Ebodio','Contreras Zarate','2012-01-12',1,'ebodio@hotmail.com','12345',NULL),(8,'Analleth','Zarate',NULL,NULL,'Tatiana@hotmail.com','amor',NULL);
/*!40000 ALTER TABLE `Usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nombre`
--

DROP TABLE IF EXISTS `nombre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nombre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nombre`
--

LOCK TABLES `nombre` WRITE;
/*!40000 ALTER TABLE `nombre` DISABLE KEYS */;
INSERT INTO `nombre` VALUES (90,'Alonso'),(99,'Campos'),(130,'adgjsahgdajhsgd'),(129,'Y'),(128,''),(127,''),(108,'Alonso'),(111,'Vianey'),(126,'Alejandra'),(121,'Concierto de Guitarra'),(123,'Drake'),(124,'Wally'),(125,'Carmime');
/*!40000 ALTER TABLE `nombre` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-15  0:27:11
