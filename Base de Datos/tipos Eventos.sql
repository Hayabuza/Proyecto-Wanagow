-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-07-2014 a las 17:03:29
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

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
(8, 'Alonso', 'Campos', '2014-07-24 14:59:08', 1, 'alonso1@hotmail.com', '202cb962ac59075b964b07152d234b70', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
