-- MySQL dump 10.13  Distrib 5.1.57, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: a4243734_gow2
-- ------------------------------------------------------
-- Server version	5.1.57
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Academica`
--
CREATE Database wanagow;
use wanagow;

DROP TABLE IF EXISTS `Academica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Academica` (
  `idAcademica` int(11) NOT NULL AUTO_INCREMENT,
  `academica` tinyint(1) NOT NULL,
  `areaestudio` tinyint(1) NOT NULL,
  `congresos` tinyint(1) NOT NULL,
  `convenciones` tinyint(1) NOT NULL,
  `seminarios` tinyint(1) NOT NULL,
  `talleres` tinyint(1) NOT NULL COMMENT '	',
  `diplomados` tinyint(1) NOT NULL,
  `cursos` tinyint(1) NOT NULL,
  `conferencias` tinyint(1) NOT NULL COMMENT '	',
  `expos` tinyint(1) NOT NULL,
  `idPreferencia` int(11) NOT NULL,
  PRIMARY KEY (`idAcademica`),
  UNIQUE KEY `idAcademia_UNIQUE` (`idAcademica`),
  KEY `fk_Academia_Preferencias1_idx` (`idPreferencia`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Academica`
--

LOCK TABLES `Academica` WRITE;
/*!40000 ALTER TABLE `Academica` DISABLE KEYS */;
INSERT INTO `Academica` VALUES (1,1,0,0,0,0,0,0,0,0,0,1),(2,1,0,0,0,0,0,1,0,0,1,2),(3,1,0,0,0,0,0,0,0,0,0,3),(4,0,0,0,0,0,0,0,0,0,0,4),(5,0,0,0,0,0,0,0,0,0,0,5),(6,1,1,1,1,1,1,1,1,1,1,6),(7,1,1,1,1,1,1,1,1,1,1,7);
/*!40000 ALTER TABLE `Academica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Administradores`
--

DROP TABLE IF EXISTS `Administradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Administradores` (
  `idAdministrador` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuarios` int(11) NOT NULL,
  PRIMARY KEY (`idAdministrador`),
  UNIQUE KEY `idAdministrador_UNIQUE` (`idAdministrador`),
  KEY `fk_Administradores_Usuarios1_idx` (`idUsuarios`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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

CREATE TABLE IF NOT EXISTS `wanagow`.`Calendario` (
  `idCliente` INT(11) NOT NULL,
  `idEvento` INT(11) NOT NULL,
  `fecha` DATE NOT NULL,
  INDEX `fk_Calendario_Clientes1_idx` (`idCliente` ASC),
  INDEX `fk_Calendario_Eventos1_idx` (`idEvento` ASC))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Calendario`
--

LOCK TABLES `Calendario` WRITE;
/*!40000 ALTER TABLE `Calendario` DISABLE KEYS */;
/*!40000 ALTER TABLE `Calendario` ENABLE KEYS */;
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
  PRIMARY KEY (`idCliente`),
  UNIQUE KEY `idCliente_UNIQUE` (`idCliente`),
  KEY `fk_Clientes_Usuarios1_idx` (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Clientes`
--

LOCK TABLES `Clientes` WRITE;
/*!40000 ALTER TABLE `Clientes` DISABLE KEYS */;
INSERT INTO `Clientes` VALUES (1,1),(2,2),(3,3),(4,4),(5,5),(6,6),(7,7);
/*!40000 ALTER TABLE `Clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ClientesPreferencias`
--

DROP TABLE IF EXISTS `ClientesPreferencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ClientesPreferencias` (
  `idCliente` int(11) NOT NULL,
  `idPreferencia` int(11) NOT NULL,
  PRIMARY KEY (`idCliente`,`idPreferencia`),
  KEY `fk_Clientes_has_Preferencias_Preferencias1` (`idPreferencia`),
  KEY `fk_Clientes_has_Preferencias_Clientes1_idx` (`idCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ClientesPreferencias`
--

LOCK TABLES `ClientesPreferencias` WRITE;
/*!40000 ALTER TABLE `ClientesPreferencias` DISABLE KEYS */;
INSERT INTO `ClientesPreferencias` VALUES (1,1),(2,2),(3,3),(4,4),(5,5),(6,6),(7,7);
/*!40000 ALTER TABLE `ClientesPreferencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Cultural`
--

DROP TABLE IF EXISTS `Cultural`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cultural` (
  `idCultural` int(11) NOT NULL AUTO_INCREMENT,
  `cultural` tinyint(1) NOT NULL,
  `balletdanza` tinyint(1) NOT NULL COMMENT '	',
  `teatro` tinyint(1) NOT NULL,
  `comedia` tinyint(1) NOT NULL,
  `drama` tinyint(1) NOT NULL,
  `infantilC` tinyint(1) NOT NULL,
  `musical` tinyint(1) NOT NULL,
  `otrosT` tinyint(1) NOT NULL,
  `circos` tinyint(1) NOT NULL COMMENT '	',
  `exposiciones` tinyint(1) NOT NULL,
  `fotografia` tinyint(1) NOT NULL COMMENT '	',
  `escultura` tinyint(1) NOT NULL COMMENT '	',
  `pintura` tinyint(1) NOT NULL,
  `libros` tinyint(1) NOT NULL,
  `otrosE` tinyint(1) NOT NULL,
  `cineArte` tinyint(1) NOT NULL,
  `musica` tinyint(1) NOT NULL,
  `clasica` tinyint(1) NOT NULL,
  `instrumental` tinyint(1) NOT NULL,
  `folklorepopular` tinyint(1) NOT NULL,
  `turistico` tinyint(1) NOT NULL,
  `ferias` tinyint(1) NOT NULL,
  `carnavales` tinyint(1) NOT NULL,
  `peregrinaciones` tinyint(1) NOT NULL,
  `fiestasReligiosasIndigenas` tinyint(1) NOT NULL,
  `otrosTuristica` tinyint(1) NOT NULL,
  `idPreferencia` int(11) NOT NULL,
  PRIMARY KEY (`idCultural`),
  UNIQUE KEY `idCultural_UNIQUE` (`idCultural`),
  KEY `fk_Cultural_Preferencias1_idx` (`idPreferencia`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cultural`
--

LOCK TABLES `Cultural` WRITE;
/*!40000 ALTER TABLE `Cultural` DISABLE KEYS */;
INSERT INTO `Cultural` VALUES (1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1),(2,1,0,1,1,1,1,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2),(3,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,3),(4,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,4),(5,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5),(6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,6),(7,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,7);
/*!40000 ALTER TABLE `Cultural` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Destinos`
--

DROP TABLE IF EXISTS `Destinos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Destinos` (
  `idDestino` int(11) NOT NULL AUTO_INCREMENT,
  `calle` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `codigoPostal` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`idDestino`),
  UNIQUE KEY `iddestino_UNIQUE` (`idDestino`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Destinos`
--

LOCK TABLES `Destinos` WRITE;
/*!40000 ALTER TABLE `Destinos` DISABLE KEYS */;
INSERT INTO `Destinos` VALUES (1,'Reforma','90'),(2,'Revolucion','14'),(3,'Independencia','10');
/*!40000 ALTER TABLE `Destinos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Entretenimiento`
--

DROP TABLE IF EXISTS `Entretenimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Entretenimiento` (
  `idEntretenimiento` int(11) NOT NULL AUTO_INCREMENT,
  `entretenimiento` tinyint(1) NOT NULL,
  `conciertos` tinyint(1) NOT NULL,
  `electronica` tinyint(1) NOT NULL,
  `jazzblues` tinyint(1) unsigned NOT NULL,
  `trova` tinyint(1) NOT NULL,
  `rock` tinyint(1) NOT NULL,
  `alternativa` tinyint(1) NOT NULL,
  `gruperanortena` tinyint(1) NOT NULL,
  `infantilE` tinyint(1) NOT NULL,
  `hiphop` tinyint(1) NOT NULL,
  `ranchera` tinyint(1) NOT NULL,
  `pop` tinyint(1) NOT NULL,
  `metal` tinyint(1) NOT NULL,
  `reague` tinyint(1) NOT NULL,
  `reggeatton` tinyint(1) NOT NULL,
  `baladasboleros` tinyint(1) NOT NULL,
  `salsacumbia` tinyint(1) NOT NULL,
  `cristiana` tinyint(1) NOT NULL,
  `deportes` tinyint(1) NOT NULL COMMENT '	',
  `futbol` tinyint(1) NOT NULL,
  `basquetball` tinyint(1) NOT NULL,
  `tenis` tinyint(1) NOT NULL COMMENT '	',
  `beisball` tinyint(1) NOT NULL,
  `volleyball` tinyint(1) NOT NULL,
  `torneos` tinyint(1) NOT NULL,
  `maratones` tinyint(1) NOT NULL,
  `autosmotos` tinyint(1) NOT NULL,
  `futbolAmericano` tinyint(1) NOT NULL,
  `artesMarciales` tinyint(1) NOT NULL,
  `boxE` tinyint(1) NOT NULL,
  `luchaLibre` tinyint(1) NOT NULL,
  `atletismo` tinyint(1) NOT NULL,
  `toros` tinyint(1) NOT NULL,
  `baresantros` tinyint(1) NOT NULL,
  `inaguracion` tinyint(1) NOT NULL,
  `promocion` tinyint(1) NOT NULL,
  `showE` tinyint(1) NOT NULL,
  `fiestasTematicas` tinyint(1) NOT NULL,
  `bienvenida` tinyint(1) NOT NULL,
  `idPreferencia` int(11) NOT NULL,
  PRIMARY KEY (`idEntretenimiento`),
  UNIQUE KEY `idEntretenimiento_UNIQUE` (`idEntretenimiento`),
  KEY `fk_Entretenimiento_Preferencias1_idx` (`idPreferencia`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Entretenimiento`
--

LOCK TABLES `Entretenimiento` WRITE;
/*!40000 ALTER TABLE `Entretenimiento` DISABLE KEYS */;
INSERT INTO `Entretenimiento` VALUES (1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,0,1,1,1,0,0,0,0,0,0,0,0,0,0,0,1),(2,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2),(3,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,0,0,0,0,0,0,0,0,0,1,1,1,1,1,1,3),(4,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,4),(5,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5),(6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,6),(7,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,7);
/*!40000 ALTER TABLE `Entretenimiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Eventos`
--

DROP TABLE IF EXISTS `Eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Eventos` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `descripcion` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `fechaEvento` date NOT NULL,
  `hora` time NOT NULL,
  `costo` float NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `imagen` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `idPromotor` int(11) NOT NULL,
  `idTipoEvento` int(11) NOT NULL,
  `idDestino` int(11) NOT NULL,
  PRIMARY KEY (`idEvento`),
  UNIQUE KEY `idEventos_UNIQUE` (`idEvento`),
  KEY `fk_Eventos_Promotores1_idx` (`idPromotor`),
  KEY `fk_Eventos_TiposEventos1_idx` (`idTipoEvento`),
  KEY `fk_Eventos_destino1_idx` (`idDestino`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Eventos`
--

LOCK TABLES `Eventos` WRITE;
/*!40000 ALTER TABLE `Eventos` DISABLE KEYS */;
INSERT INTO `Eventos` VALUES (1,'Congreso de Diseño','You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don\'t know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I\'m breaking now. We said we\'d say it was the snow that killed the other two, but it wasn\'t. Nature is lethal but it doesn\'t hold a candle to man.','2014-02-27','13:00:00',0,1,'',1,2,1),(2,'Teatro','dashsdjaskhdjhjdhkjh hdsajkhdajh hdsakjhdkjash ashdajskhdjash shdjahk','2014-03-07','12:00:00',2000,1,'',1,7,1),(3,'Concierto de Guitarra','sdhasjkdhas ashdajkshda asdkjashdkj ad asdhajshd kajs d dsahjdahskdj sdkajhsdj a asdasjdhakjs a hdjhask','2014-08-23','13:00:00',9000,1,'',1,12,1),(4,'Congreso de Python','Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that\'s what you see at a toy store. And you must think you\'re in a toy store, because you\'re here shopping for an infant named Jeb.','2014-03-07','14:00:00',12000,1,'',1,3,1),(5,'Convencion de Java','My money\'s in that office, right? If she start giving me some bullshit about it ain\'t there, and we got to go someplace else and get it, I\'m gonna shoot you in the head then and there. Then I\'m gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I\'m talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?','2014-02-12','09:00:00',0,1,'',1,4,1),(6,'Seminario de C#','My money\'s in that office, right? If she start giving me some bullshit about it ain\'t there, and we got to go someplace else and get it, I\'m gonna shoot you in the head then and there. Then I\'m gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I\'m talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?','2014-02-12','06:00:00',0,1,'',1,5,1),(7,'Teatro de Comedia','Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they\'re actually proud of that shit.','2014-03-03','09:00:00',0,1,'',1,7,1),(8,'Teatro de Drama','You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don\'t know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I\'m breaking now. We said we\'d say it was the snow that killed the other two, but it wasn\'t. Nature is lethal but it doesn\'t hold a candle to man.','2014-02-12','10:00:00',1000,1,'',1,8,1),(9,'Teatro Infantil','My money\'s in that office, right? If she start giving me some bullshit about it ain\'t there, and we got to go someplace else and get it, I\'m gonna shoot you in the head then and there. Then I\'m gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I\'m talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?','2013-03-20','10:00:00',2000,1,'',1,9,1),(10,'Teatro Musical','ook, just because I don\'t be givin\' no man a foot massage don\'t make it right for Marsellus to throw Antwone into a glass motherfuckin\' house, fuckin\' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, \'cause I\'ll kill the motherfucker, know what I\'m sayin\'?','2014-03-07','12:00:00',0,1,'',1,10,1),(11,'Curso de Frontend','Well, the way they make shows is, they make one show. That show\'s called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they\'re going to make more shows. Some pilots get picked and become television programs. Some don\'t, become nothing. She starred in one of the ones that became nothing.','2014-02-27','12:00:00',0,1,'',1,2,1),(23,'clases de baile','bailaremos toda la noche','2014-04-14','02:00:00',0,1,'',1,20,1),(37,'taller de programacion','aprenda a programar en un dos por tres ','2003-04-14','01:00:00',100,1,'',1,60,1),(25,'danza maya','disfrutar de la mejor danza ','2022-05-14','16:00:00',200,1,'',1,27,1),(38,'Curso de Videojuegos','sdhkajsdhasjhdakjshdkjashd\r\nshjashdkajsd\r\nsdhasjkdhkasj\r\nsdlkasjdlka\r\nsdjkashd','0000-00-00','00:00:00',0,1,'',1,4,1);
/*!40000 ALTER TABLE `Eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Origenes`
--

DROP TABLE IF EXISTS `Origenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Origenes` (
  `idorigen` int(11) NOT NULL AUTO_INCREMENT,
  `calle` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`idorigen`),
  UNIQUE KEY `idorigen_UNIQUE` (`idorigen`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Origenes`
--

LOCK TABLES `Origenes` WRITE;
/*!40000 ALTER TABLE `Origenes` DISABLE KEYS */;
INSERT INTO `Origenes` VALUES (1,'Independencia'),(2,'Revolucion'),(3,'16 de Septiembre'),(4,'5 de Mayo'),(5,'Reforma');
/*!40000 ALTER TABLE `Origenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Preferencias`
--

DROP TABLE IF EXISTS `Preferencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Preferencias` (
  `idPreferencia` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idPreferencia`),
  UNIQUE KEY `idPreferencias_UNIQUE` (`idPreferencia`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Preferencias`
--

LOCK TABLES `Preferencias` WRITE;
/*!40000 ALTER TABLE `Preferencias` DISABLE KEYS */;
INSERT INTO `Preferencias` VALUES (1),(2),(3),(4),(5),(6),(7);
/*!40000 ALTER TABLE `Preferencias` ENABLE KEYS */;
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
  UNIQUE KEY `idPromotores_UNIQUE` (`idPromotor`),
  KEY `fk_Promotores_Usuarios1_idx` (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Promotores`
--

LOCK TABLES `Promotores` WRITE;
/*!40000 ALTER TABLE `Promotores` DISABLE KEYS */;
INSERT INTO `Promotores` VALUES (1,2),(2,1);
/*!40000 ALTER TABLE `Promotores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Rutas`
--

DROP TABLE IF EXISTS `Rutas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Rutas` (
  `idRuta` int(11) NOT NULL AUTO_INCREMENT,
  `longituud` float NOT NULL,
  `latitud` float NOT NULL,
  `idDestino` int(11) NOT NULL,
  `idOrigen` int(11) NOT NULL,
  PRIMARY KEY (`idRuta`),
  UNIQUE KEY `idRutas_UNIQUE` (`idRuta`),
  KEY `fk_Rutas_destino1_idx` (`idDestino`),
  KEY `fk_Rutas_origen1_idx` (`idOrigen`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Rutas`
--

LOCK TABLES `Rutas` WRITE;
/*!40000 ALTER TABLE `Rutas` DISABLE KEYS */;
/*!40000 ALTER TABLE `Rutas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TiposEventos`
--

DROP TABLE IF EXISTS `TiposEventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TiposEventos` (
  `idTipoEvento` int(11) NOT NULL AUTO_INCREMENT,
  `tipoEvento` varchar(45) NOT NULL,
  `detallesEvento` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoEvento`),
  UNIQUE KEY `idTiposEventos_UNIQUE` (`idTipoEvento`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TiposEventos`
--

LOCK TABLES `TiposEventos` WRITE;
/*!40000 ALTER TABLE `TiposEventos` DISABLE KEYS */;
INSERT INTO `TiposEventos` VALUES (1,'Academica','Area de Estudio'),(2,'Academica','Congreso'),(3,'Academica','Curso'),(4,'Academica','Convencion'),(5,'Academica','Seminario'),(6,'Cultural','Teatro'),(7,'Teatro','Comedia'),(8,'Teatro','Drama'),(9,'Teatro','Infantil'),(10,'Teatro','Musical'),(11,'Entretenimiento','Deporte'),(12,'Entretenimiento','Electronica'),(13,'Academica','Taller'),(14,'Academica','Diplomado'),(15,'Academica','Curso'),(16,'Academica','Conferencia'),(17,'Academica','Expo'),(18,'Teatro','Otros'),(19,'Cultural','Ballet | Danza'),(20,'Cultural','Circo'),(21,'Exposicion','Fotografia'),(22,'Exposicion','Escultura'),(23,'Exposicion','Pintura'),(24,'Exposicion','Libros'),(25,'Exposicion','Otros'),(26,'Cultural','Cine de Arte'),(27,'Musica','Clasica'),(28,'Musica','Instrumental'),(29,'Musica','Folklore | Popular'),(30,'Turistico','Ferias'),(31,'Turistico','Carnavales'),(32,'Turistico','Peregrinaciones'),(33,'Turistico','Fiestas Religiosas | Indigenas'),(34,'Turistico','Otras'),(35,'Conciertos','Electronica'),(36,'Conciertos','Jazz | Blues'),(37,'Conciertos','Trova'),(38,'Conciertos','Rock'),(39,'Conciertos','Alternativa'),(40,'Conciertos','Grupera | Nortena'),(41,'Conciertos','Infantil'),(42,'Conciertos','Hip-Hop'),(43,'Conciertos','Ranchera'),(44,'Conciertos','Pop'),(45,'Conciertos','Metal'),(46,'Conciertos','Reague'),(47,'Conciertos','Reggeatton'),(48,'Conciertos','Baladas | Boleros'),(49,'Conciertos','Salsa | Cumbia'),(50,'Conciertos','Cristiana'),(51,'Deportes','Futbol'),(52,'Deportes','Basketball'),(53,'Deportes','Tenis'),(54,'Deportes','Beisball'),(55,'Deportes','Volleyball'),(56,'Deportes','Torneos'),(57,'Deportes','Maratones'),(58,'Deportes','Autos | Motos'),(59,'Deportes','Futbol Americano'),(60,'Deportes','Artes Marciales'),(61,'Deportes','Box'),(62,'Deportes','Lucha Libre'),(63,'Deportes','Atletismo'),(64,'Deportes','Toros'),(65,'Bares Antros','Inaguracion'),(66,'Bares Antros','Promocion'),(67,'Bares Antros','Show'),(68,'Bares Antros','Fiestas Tematicas'),(69,'Bares Antros','Bienvenida'),(70,'Academico',''),(71,'Entretenimiento',''),(72,'Cultural | Turistica',''),(73,'Entretenimiento','Bares & Antros'),(74,'Entretenimiento','Conciertos'),(75,'Cultural','Exposiciones'),(76,'Cultural','Musica'),(77,'Cultural','Turistico');
/*!40000 ALTER TABLE `TiposEventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuarios`
--

DROP TABLE IF EXISTS `Usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `apellidos` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `fechaNacimiento` datetime NOT NULL,
  `genero` tinyint(1) NOT NULL,
  `email` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `idUsuarios_UNIQUE` (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuarios`
--

LOCK TABLES `Usuarios` WRITE;
/*!40000 ALTER TABLE `Usuarios` DISABLE KEYS */;
INSERT INTO `Usuarios` VALUES (1,'Alonso','Campos','2011-01-12 00:00:00',1,'alonso@hotmail.com','123',1),(2,'Alonso','Campos Alonso','2011-01-12 00:00:00',1,'alonsocampos@hotmail.com','1232',1),(3,'Hector','Campos Alonso','2011-01-12 00:00:00',1,'huixcospartan@live.com','yoshi117',1),(4,'Hector ','Campos ALonso','2011-01-12 00:00:00',1,'huixcospartan@hotmail.com','yoshi117711',1),(5,'nombre','apellidos','2011-01-12 00:00:00',0,'email','password',1),(6,'','','2011-01-12 00:00:00',0,'Aa@hotmail.com','1',1),(7,'Rex','Rax','2011-01-12 00:00:00',1,'rex@hotmail.com','123',1);
/*!40000 ALTER TABLE `Usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-15  0:26:50
