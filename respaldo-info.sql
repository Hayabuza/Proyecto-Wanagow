-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-07-2014 a las 18:51:38
-- Versión del servidor: 5.5.36
-- Versión de PHP: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `wanagow`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Academica`
--

CREATE TABLE IF NOT EXISTS `Academica` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `Academica`
--

INSERT INTO `Academica` (`idAcademica`, `academica`, `areaestudio`, `congresos`, `convenciones`, `seminarios`, `talleres`, `diplomados`, `cursos`, `conferencias`, `expos`, `idPreferencia`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(2, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 2),
(3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5),
(6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 6),
(7, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 7),
(8, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 8),
(9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cultural`
--

CREATE TABLE IF NOT EXISTS `Cultural` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `Cultural`
--

INSERT INTO `Cultural` (`idCultural`, `cultural`, `balletdanza`, `teatro`, `comedia`, `drama`, `infantilC`, `musical`, `otrosT`, `circos`, `exposiciones`, `fotografia`, `escultura`, `pintura`, `libros`, `otrosE`, `cineArte`, `musica`, `clasica`, `instrumental`, `folklorepopular`, `turistico`, `ferias`, `carnavales`, `peregrinaciones`, `fiestasReligiosasIndigenas`, `otrosTuristica`, `idPreferencia`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2),
(3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7),
(8, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8),
(9, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Destinos`
--

CREATE TABLE IF NOT EXISTS `Destinos` (
  `idDestino` int(11) NOT NULL AUTO_INCREMENT,
  `calle` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `codigoPostal` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`idDestino`),
  UNIQUE KEY `iddestino_UNIQUE` (`idDestino`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `Destinos`
--

INSERT INTO `Destinos` (`idDestino`, `calle`, `codigoPostal`) VALUES
(1, 'Reforma', '90'),
(2, 'Revolucion', '14'),
(3, 'Independencia', '10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Entretenimiento`
--

CREATE TABLE IF NOT EXISTS `Entretenimiento` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `Entretenimiento`
--

INSERT INTO `Entretenimiento` (`idEntretenimiento`, `entretenimiento`, `conciertos`, `electronica`, `jazzblues`, `trova`, `rock`, `alternativa`, `gruperanortena`, `infantilE`, `hiphop`, `ranchera`, `pop`, `metal`, `reague`, `reggeatton`, `baladasboleros`, `salsacumbia`, `cristiana`, `deportes`, `futbol`, `basquetball`, `tenis`, `beisball`, `volleyball`, `torneos`, `maratones`, `autosmotos`, `futbolAmericano`, `artesMarciales`, `boxE`, `luchaLibre`, `atletismo`, `toros`, `baresantros`, `inaguracion`, `promocion`, `showE`, `fiestasTematicas`, `bienvenida`, `idPreferencia`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2),
(3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 3),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7),
(8, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8),
(9, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Eventos`
--

CREATE TABLE IF NOT EXISTS `Eventos` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `Eventos`
--

INSERT INTO `Eventos` (`idEvento`, `titulo`, `descripcion`, `fechaEvento`, `hora`, `costo`, `activo`, `imagen`, `idPromotor`, `idTipoEvento`, `idDestino`) VALUES
(1, 'Congreso de Diseño', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don''t know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I''m breaking now. We said we''d say it was the snow that killed the other two, but it wasn''t. Nature is lethal but it doesn''t hold a candle to man.', '2014-02-27', '13:00:00', 0, 1, '', 1, 2, 1),
(2, 'Teatro', 'dashsdjaskhdjhjdhkjh hdsajkhdajh hdsakjhdkjash ashdajskhdjash shdjahk', '2014-03-07', '12:00:00', 2000, 1, '', 1, 7, 1),
(3, 'Concierto de Guitarra', 'sdhasjkdhas ashdajkshda asdkjashdkj ad asdhajshd kajs d dsahjdahskdj sdkajhsdj a asdasjdhakjs a hdjhask', '2014-08-23', '13:00:00', 9000, 1, '', 1, 12, 1),
(4, 'Congreso de Python', 'Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that''s what you see at a toy store. And you must think you''re in a toy store, because you''re here shopping for an infant named Jeb.', '2014-03-07', '14:00:00', 12000, 1, '', 1, 3, 1),
(5, 'Convencion de Java', 'My money''s in that office, right? If she start giving me some bullshit about it ain''t there, and we got to go someplace else and get it, I''m gonna shoot you in the head then and there. Then I''m gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I''m talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?', '2014-02-12', '09:00:00', 0, 1, '', 1, 4, 1),
(6, 'Seminario de C#', 'My money''s in that office, right? If she start giving me some bullshit about it ain''t there, and we got to go someplace else and get it, I''m gonna shoot you in the head then and there. Then I''m gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I''m talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?', '2014-02-12', '06:00:00', 0, 1, '', 1, 5, 1),
(7, 'Teatro de Comedia', 'Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they''re actually proud of that shit.', '2014-03-03', '09:00:00', 0, 1, '', 1, 7, 1),
(8, 'Teatro de Drama', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don''t know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I''m breaking now. We said we''d say it was the snow that killed the other two, but it wasn''t. Nature is lethal but it doesn''t hold a candle to man.', '2014-02-12', '10:00:00', 1000, 1, '', 1, 8, 1),
(9, 'Teatro Infantil', 'My money''s in that office, right? If she start giving me some bullshit about it ain''t there, and we got to go someplace else and get it, I''m gonna shoot you in the head then and there. Then I''m gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I''m talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?', '2013-03-20', '10:00:00', 2000, 1, '', 1, 9, 1),
(10, 'Teatro Musical', 'ook, just because I don''t be givin'' no man a foot massage don''t make it right for Marsellus to throw Antwone into a glass motherfuckin'' house, fuckin'' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, ''cause I''ll kill the motherfucker, know what I''m sayin''?', '2014-03-07', '12:00:00', 0, 1, '', 1, 10, 1),
(11, 'Curso de Frontend', 'Well, the way they make shows is, they make one show. That show''s called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they''re going to make more shows. Some pilots get picked and become television programs. Some don''t, become nothing. She starred in one of the ones that became nothing.', '2014-02-27', '12:00:00', 0, 1, '', 1, 2, 1),
(23, 'clases de baile', 'bailaremos toda la noche', '2014-04-14', '02:00:00', 0, 1, '', 1, 20, 1),
(37, 'taller de programacion', 'aprenda a programar en un dos por tres ', '2003-04-14', '01:00:00', 100, 1, '', 1, 60, 1),
(25, 'danza maya', 'disfrutar de la mejor danza ', '2022-05-14', '16:00:00', 200, 1, '', 1, 27, 1),
(38, 'Curso de Videojuegos', 'sdhkajsdhasjhdakjshdkjashd\r\nshjashdkajsd\r\nsdhasjkdhkasj\r\nsdlkasjdlka\r\nsdjkashd', '0000-00-00', '00:00:00', 0, 1, '', 1, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Preferencias`
--

CREATE TABLE IF NOT EXISTS `Preferencias` (
  `idPreferencia` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idPreferencia`),
  UNIQUE KEY `idPreferencias_UNIQUE` (`idPreferencia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `Preferencias`
--

INSERT INTO `Preferencias` (`idPreferencia`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TiposEventos`
--

CREATE TABLE IF NOT EXISTS `TiposEventos` (
  `idTipoEvento` int(11) NOT NULL AUTO_INCREMENT,
  `tipoEvento` varchar(45) NOT NULL,
  `detallesEvento` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoEvento`),
  UNIQUE KEY `idTiposEventos_UNIQUE` (`idTipoEvento`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=78 ;

--
-- Volcado de datos para la tabla `TiposEventos`
--

INSERT INTO `TiposEventos` (`idTipoEvento`, `tipoEvento`, `detallesEvento`) VALUES
(1, 'Academica', 'Area de Estudio'),
(2, 'Academica', 'Congreso'),
(3, 'Academica', 'Curso'),
(4, 'Academica', 'Convencion'),
(5, 'Academica', 'Seminario'),
(6, 'Cultural', 'Teatro'),
(7, 'Teatro', 'Comedia'),
(8, 'Teatro', 'Drama'),
(9, 'Teatro', 'Infantil'),
(10, 'Teatro', 'Musical'),
(11, 'Entretenimiento', 'Deporte'),
(12, 'Entretenimiento', 'Electronica'),
(13, 'Academica', 'Taller'),
(14, 'Academica', 'Diplomado'),
(16, 'Academica', 'Conferencia'),
(17, 'Academica', 'Expo'),
(18, 'Teatro', 'Otros'),
(19, 'Cultural', 'Ballet | Danza'),
(20, 'Cultural', 'Circo'),
(21, 'Exposicion', 'Fotografia'),
(22, 'Exposicion', 'Escultura'),
(23, 'Exposicion', 'Pintura'),
(24, 'Exposicion', 'Libros'),
(25, 'Exposicion', 'Otros'),
(26, 'Cultural', 'Cine de Arte'),
(27, 'Musica', 'Clasica'),
(28, 'Musica', 'Instrumental'),
(29, 'Musica', 'Folklore | Popular'),
(30, 'Turistico', 'Ferias'),
(31, 'Turistico', 'Carnavales'),
(32, 'Turistico', 'Peregrinaciones'),
(33, 'Turistico', 'Fiestas Religiosas | Indigenas'),
(34, 'Turistico', 'Otras'),
(35, 'Conciertos', 'Electronica'),
(36, 'Conciertos', 'Jazz | Blues'),
(37, 'Conciertos', 'Trova'),
(38, 'Conciertos', 'Rock'),
(39, 'Conciertos', 'Alternativa'),
(40, 'Conciertos', 'Grupera | Nortena'),
(41, 'Conciertos', 'Infantil'),
(42, 'Conciertos', 'Hip-Hop'),
(43, 'Conciertos', 'Ranchera'),
(44, 'Conciertos', 'Pop'),
(45, 'Conciertos', 'Metal'),
(46, 'Conciertos', 'Reague'),
(47, 'Conciertos', 'Reggeatton'),
(48, 'Conciertos', 'Baladas | Boleros'),
(49, 'Conciertos', 'Salsa | Cumbia'),
(50, 'Conciertos', 'Cristiana'),
(51, 'Deportes', 'Futbol'),
(52, 'Deportes', 'Basketball'),
(53, 'Deportes', 'Tenis'),
(54, 'Deportes', 'Beisball'),
(55, 'Deportes', 'Volleyball'),
(56, 'Deportes', 'Torneos'),
(57, 'Deportes', 'Maratones'),
(58, 'Deportes', 'Autos | Motos'),
(59, 'Deportes', 'Futbol Americano'),
(60, 'Deportes', 'Artes Marciales'),
(61, 'Deportes', 'Box'),
(62, 'Deportes', 'Lucha Libre'),
(63, 'Deportes', 'Atletismo'),
(64, 'Deportes', 'Toros'),
(65, 'Bares Antros', 'Inaguracion'),
(66, 'Bares Antros', 'Promocion'),
(67, 'Bares Antros', 'Show'),
(68, 'Bares Antros', 'Fiestas Tematicas'),
(69, 'Bares Antros', 'Bienvenida'),
(70, 'Academico', ''),
(71, 'Entretenimiento', ''),
(72, 'Cultural | Turistica', ''),
(73, 'Entretenimiento', 'Bares & Antros'),
(74, 'Entretenimiento', 'Conciertos'),
(75, 'Cultural', 'Exposiciones'),
(76, 'Cultural', 'Musica'),
(77, 'Cultural', 'Turistico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`idUsuario`, `nombre`, `apellidos`, `fechaNacimiento`, `genero`, `email`, `password`, `activo`) VALUES
(1, 'Alonso', 'Campos', '2011-01-12 00:00:00', 1, 'alonso@hotmail.com', '123', 1),
(2, 'Alonso', 'Campos Alonso', '2011-01-12 00:00:00', 1, 'alonsocampos@hotmail.com', '1232', 1),
(3, 'Hector', 'Campos Alonso', '2011-01-12 00:00:00', 1, 'huixcospartan@live.com', 'yoshi117', 1),
(4, 'Hector ', 'Campos ALonso', '2011-01-12 00:00:00', 1, 'huixcospartan@hotmail.com', 'yoshi117711', 1),
(5, 'nombre', 'apellidos', '2011-01-12 00:00:00', 0, 'email', 'password', 1),
(6, '', '', '2011-01-12 00:00:00', 0, 'Aa@hotmail.com', '1', 1),
(7, 'Rex', 'Rax', '2011-01-12 00:00:00', 1, 'rex@hotmail.com', '123', 1),
(8, 'Alonso', 'Campos', '2014-07-24 14:59:08', 1, 'alonso1@hotmail.com', '202cb962ac59075b964b07152d234b70', 1),
(9, 'Alonso', 'Campos', '1995-06-12 16:39:53', 0, 'alonso@yahoo.es', '202cb962ac59075b964b07152d234b70', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
