-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-07-2014 a las 22:06:55
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
  KEY `fk_Academica_Preferencias1_idx` (`idPreferencia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `Academica`
--

INSERT INTO `Academica` (`idAcademica`, `academica`, `areaestudio`, `congresos`, `convenciones`, `seminarios`, `talleres`, `diplomados`, `cursos`, `conferencias`, `expos`, `idPreferencia`) VALUES
(10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Calendario`
--

CREATE TABLE IF NOT EXISTS `Calendario` (
  `idCliente` int(11) NOT NULL,
  `idEvento` int(11) NOT NULL,
  `fecha` date NOT NULL,
  KEY `fk_Calendario_Clientes1_idx1` (`idCliente`),
  KEY `fk_Calendario_Eventos1_idx1` (`idEvento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Clientes`
--

CREATE TABLE IF NOT EXISTS `Clientes` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `fechaNacimiento` varchar(45) NOT NULL,
  `genero` tinyint(1) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  PRIMARY KEY (`idCliente`),
  UNIQUE KEY `idCliente_UNIQUE` (`idCliente`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `Clientes`
--

INSERT INTO `Clientes` (`idCliente`, `nombre`, `apellidos`, `fechaNacimiento`, `genero`, `email`, `password`, `activo`) VALUES
(11, 'ALONSDA', 'SDHJAKSHD', '2014-07-24 19:53:26 +0000', 1, 'alonso@hotmail.com', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ClientesPreferencias`
--

CREATE TABLE IF NOT EXISTS `ClientesPreferencias` (
  `idCliente` int(11) NOT NULL,
  `idPreferencia` int(11) NOT NULL,
  PRIMARY KEY (`idCliente`,`idPreferencia`),
  KEY `fk_ClientesPreferencias_Preferencias1_idx` (`idPreferencia`),
  KEY `fk_ClientesPreferencias_Clientes1_idx` (`idCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ClientesPreferencias`
--

INSERT INTO `ClientesPreferencias` (`idCliente`, `idPreferencia`) VALUES
(11, 11);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `Cultural`
--

INSERT INTO `Cultural` (`idCultural`, `cultural`, `balletdanza`, `teatro`, `comedia`, `drama`, `infantilC`, `musical`, `otrosT`, `circos`, `exposiciones`, `fotografia`, `escultura`, `pintura`, `libros`, `otrosE`, `cineArte`, `musica`, `clasica`, `instrumental`, `folklorepopular`, `turistico`, `ferias`, `carnavales`, `peregrinaciones`, `fiestasReligiosasIndigenas`, `otrosTuristica`, `idPreferencia`) VALUES
(10, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Entretenimiento`
--

CREATE TABLE IF NOT EXISTS `Entretenimiento` (
  `idEntretenimiento` int(11) NOT NULL AUTO_INCREMENT,
  `entretenimiento` tinyint(1) NOT NULL,
  `conciertos` tinyint(1) NOT NULL,
  `electronica` tinyint(1) NOT NULL,
  `jazzblues` tinyint(1) NOT NULL,
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
  KEY `fk_Entretenimiento_Preferencias_idx` (`idPreferencia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `Entretenimiento`
--

INSERT INTO `Entretenimiento` (`idEntretenimiento`, `entretenimiento`, `conciertos`, `electronica`, `jazzblues`, `trova`, `rock`, `alternativa`, `gruperanortena`, `infantilE`, `hiphop`, `ranchera`, `pop`, `metal`, `reague`, `reggeatton`, `baladasboleros`, `salsacumbia`, `cristiana`, `deportes`, `futbol`, `basquetball`, `tenis`, `beisball`, `volleyball`, `torneos`, `maratones`, `autosmotos`, `futbolAmericano`, `artesMarciales`, `boxE`, `luchaLibre`, `atletismo`, `toros`, `baresantros`, `inaguracion`, `promocion`, `showE`, `fiestasTematicas`, `bienvenida`, `idPreferencia`) VALUES
(10, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11);

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
  KEY `fk_Eventos_TiposEventos1_idx1` (`idTipoEvento`),
  KEY `fk_Eventos_Promotores1_idx1` (`idPromotor`),
  KEY `fk_Eventos_Destinos1_idx` (`idDestino`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Origenes`
--

CREATE TABLE IF NOT EXISTS `Origenes` (
  `idorigen` int(11) NOT NULL AUTO_INCREMENT,
  `calle` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`idorigen`),
  UNIQUE KEY `idorigen_UNIQUE` (`idorigen`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Preferencias`
--

CREATE TABLE IF NOT EXISTS `Preferencias` (
  `idPreferencia` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idPreferencia`),
  UNIQUE KEY `idPreferencias_UNIQUE` (`idPreferencia`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `Preferencias`
--

INSERT INTO `Preferencias` (`idPreferencia`) VALUES
(11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Promotores`
--

CREATE TABLE IF NOT EXISTS `Promotores` (
  `idPromotor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `paterno` varchar(45) NOT NULL,
  `materno` varchar(45) NOT NULL,
  PRIMARY KEY (`idPromotor`),
  UNIQUE KEY `idPromotores_UNIQUE` (`idPromotor`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Rutas`
--

CREATE TABLE IF NOT EXISTS `Rutas` (
  `idRuta` int(11) NOT NULL AUTO_INCREMENT,
  `longituud` float NOT NULL,
  `latitud` float NOT NULL,
  `idDestino` int(11) NOT NULL,
  `idoOrigen` int(11) NOT NULL,
  PRIMARY KEY (`idRuta`),
  UNIQUE KEY `idRutas_UNIQUE` (`idRuta`),
  KEY `fk_Rutas_Destinos1_idx` (`idDestino`),
  KEY `fk_Rutas_Origenes1_idx` (`idoOrigen`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
