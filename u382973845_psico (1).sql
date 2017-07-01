
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-04-2017 a las 16:49:48
-- Versión del servidor: 10.0.28-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u382973845_psico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`Id`, `Nombre`, `User`, `Password`) VALUES
(1, 'Admin-sist-vwpsico', 'vw-admin-2016', '62b2fc601a0bf57617dbc3261d38cd75'),
(2, 'Luis', 'AdMVWdelGUADIANA2016', '34984da003b4496edf68cb65ce9455fc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barsit`
--

CREATE TABLE IF NOT EXISTS `barsit` (
  `Id_Pregunta` int(10) NOT NULL AUTO_INCREMENT,
  `Respuesta_Sec` int(10) DEFAULT NULL,
  `Respuesta_Prim` int(10) DEFAULT NULL,
  PRIMARY KEY (`Id_Pregunta`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Volcado de datos para la tabla `barsit`
--

INSERT INTO `barsit` (`Id_Pregunta`, `Respuesta_Sec`, `Respuesta_Prim`) VALUES
(1, NULL, NULL),
(2, NULL, NULL),
(3, NULL, NULL),
(4, NULL, NULL),
(5, NULL, NULL),
(6, NULL, NULL),
(7, NULL, NULL),
(8, NULL, NULL),
(9, NULL, NULL),
(10, NULL, NULL),
(11, NULL, NULL),
(12, NULL, NULL),
(13, NULL, NULL),
(14, NULL, NULL),
(15, NULL, NULL),
(16, NULL, NULL),
(17, NULL, NULL),
(18, NULL, NULL),
(19, NULL, NULL),
(20, NULL, NULL),
(21, NULL, NULL),
(22, NULL, NULL),
(23, NULL, NULL),
(24, NULL, NULL),
(25, NULL, NULL),
(26, NULL, NULL),
(27, NULL, NULL),
(28, NULL, NULL),
(29, NULL, NULL),
(30, NULL, NULL),
(31, NULL, NULL),
(32, NULL, NULL),
(33, NULL, NULL),
(34, NULL, NULL),
(35, NULL, NULL),
(36, NULL, NULL),
(37, NULL, NULL),
(38, NULL, NULL),
(39, NULL, NULL),
(40, NULL, NULL),
(41, NULL, NULL),
(42, NULL, NULL),
(43, NULL, NULL),
(44, NULL, NULL),
(45, NULL, NULL),
(46, NULL, NULL),
(47, NULL, NULL),
(48, NULL, NULL),
(49, NULL, NULL),
(50, NULL, NULL),
(51, NULL, NULL),
(52, NULL, NULL),
(53, NULL, NULL),
(54, NULL, NULL),
(55, NULL, NULL),
(56, NULL, NULL),
(57, NULL, NULL),
(58, NULL, NULL),
(59, NULL, NULL),
(60, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos`
--

CREATE TABLE IF NOT EXISTS `candidatos` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Escolaridad` varchar(255) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Puesto` varchar(255) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Estado` varchar(255) NOT NULL,
  `prueba` varchar(255) DEFAULT NULL,
  `User` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `StatusBarsit` varchar(255) DEFAULT NULL,
  `PuntosBarsit` int(10) DEFAULT NULL,
  `StatusCleaver` varchar(255) NOT NULL,
  `CleaverDM` int(10) DEFAULT NULL,
  `CleaverDL` int(10) DEFAULT NULL,
  `CleaverDML` int(10) DEFAULT NULL,
  `CleaverIM` int(10) DEFAULT NULL,
  `CleaverIL` int(10) DEFAULT NULL,
  `CleaverIML` int(10) DEFAULT NULL,
  `CleaverSM` int(10) DEFAULT NULL,
  `CleaverSL` int(10) DEFAULT NULL,
  `CleaverSML` int(10) DEFAULT NULL,
  `CleaverCM` int(10) DEFAULT NULL,
  `CleaverCL` int(10) DEFAULT NULL,
  `CleaverCML` int(10) DEFAULT NULL,
  `StatusDomino` varchar(255) DEFAULT NULL,
  `PuntosDomino` float(10,2) DEFAULT NULL,
  `CapDomino` varchar(255) DEFAULT NULL,
  `StatusIPV` varchar(255) DEFAULT NULL,
  `IPVI` int(10) DEFAULT NULL,
  `IPVII` int(10) DEFAULT NULL,
  `IPVIII` int(10) DEFAULT NULL,
  `IPVIV` int(10) DEFAULT NULL,
  `IPVV` int(10) DEFAULT NULL,
  `IPVVI` int(10) DEFAULT NULL,
  `IPVVII` int(10) DEFAULT NULL,
  `IPVVIII` int(10) DEFAULT NULL,
  `IPVIX` int(10) DEFAULT NULL,
  `IPVDGV` int(10) DEFAULT NULL,
  `IPVR` int(10) DEFAULT NULL,
  `IPVA` int(10) DEFAULT NULL,
  `StatusKostick` varchar(255) NOT NULL,
  `KostickG` int(10) DEFAULT NULL,
  `KostickL` int(10) DEFAULT NULL,
  `KostickI` int(10) DEFAULT NULL,
  `KostickT` int(11) DEFAULT NULL,
  `KostickV` int(11) DEFAULT NULL,
  `KostickS` int(11) DEFAULT NULL,
  `KostickR` int(11) DEFAULT NULL,
  `KostickD` int(11) DEFAULT NULL,
  `KostickC` int(11) DEFAULT NULL,
  `KostickE` int(11) DEFAULT NULL,
  `KostickN` int(11) DEFAULT NULL,
  `KostickA` int(11) DEFAULT NULL,
  `KostickP` int(11) DEFAULT NULL,
  `KostickX` int(11) DEFAULT NULL,
  `KostickB` int(11) DEFAULT NULL,
  `KostickO` int(11) DEFAULT NULL,
  `KostickZ` int(11) DEFAULT NULL,
  `KostickK` int(11) DEFAULT NULL,
  `KostickF` int(11) DEFAULT NULL,
  `KostickW` int(11) DEFAULT NULL,
  `StatusTerman` varchar(255) NOT NULL,
  `TermanI` int(11) NOT NULL,
  `TermanII` int(11) NOT NULL,
  `TermanIII` int(11) NOT NULL,
  `TermanIV` int(11) NOT NULL,
  `TermanV` int(11) NOT NULL,
  `TermanVI` int(11) NOT NULL,
  `TermanVII` int(11) NOT NULL,
  `TermanVIII` int(11) NOT NULL,
  `TermanIX` int(11) NOT NULL,
  `TermanX` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`Id`, `Nombre`, `Escolaridad`, `Edad`, `Puesto`, `Correo`, `Estado`, `prueba`, `User`, `Password`, `StatusBarsit`, `PuntosBarsit`, `StatusCleaver`, `CleaverDM`, `CleaverDL`, `CleaverDML`, `CleaverIM`, `CleaverIL`, `CleaverIML`, `CleaverSM`, `CleaverSL`, `CleaverSML`, `CleaverCM`, `CleaverCL`, `CleaverCML`, `StatusDomino`, `PuntosDomino`, `CapDomino`, `StatusIPV`, `IPVI`, `IPVII`, `IPVIII`, `IPVIV`, `IPVV`, `IPVVI`, `IPVVII`, `IPVVIII`, `IPVIX`, `IPVDGV`, `IPVR`, `IPVA`, `StatusKostick`, `KostickG`, `KostickL`, `KostickI`, `KostickT`, `KostickV`, `KostickS`, `KostickR`, `KostickD`, `KostickC`, `KostickE`, `KostickN`, `KostickA`, `KostickP`, `KostickX`, `KostickB`, `KostickO`, `KostickZ`, `KostickK`, `KostickF`, `KostickW`, `StatusTerman`, `TermanI`, `TermanII`, `TermanIII`, `TermanIV`, `TermanV`, `TermanVI`, `TermanVII`, `TermanVIII`, `TermanIX`, `TermanX`) VALUES
(47, 'Adrian Mata', 'Universidad', 26, 'Sistemas', 'zoomwas@hotmail.com', 'casado', 'Masculino', 'zoomwas', 'a151d408dc0c0c310be368bc87ed1c00', 'No', 50, 'Yes', 30, 55, 45, 70, 55, 60, 30, 80, 50, 70, 84, 75, 'No', 39.00, 'Superior', 'No', 3, 6, 5, 9, 1, 1, 1, 6, 4, 1, 5, 2, 'No', 9, 7, 7, 5, 5, 4, 3, 2, 1, 0, 1, 0, 2, 3, 4, 5, 6, 7, 8, 8, 'Yes', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 'sandra molina', 'Universidad', 22, 'auxiliaradministrativo', 'pollita_ms@hotmail.com', 'casado', 'Femenino', 'sandymolina', '04f825182b9d33c28c7b8624cc42f5fb', 'Yes', 0, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 'MARIANA MENDIVIL ONTIVEROS', 'Universidad', 22, 'JEFE DE TALLER', 'mmodgo@hotmail.com', 'soltero', 'Femenino', 'MarianaMendivil', '213deada68ce6c086b7b96f2dea2c768', 'No', 57, 'No', 40, 55, 50, 96, 87, 96, 16, 28, 20, 5, 38, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 'Mariela', 'Universidad', 24, 'CRM', 'marielacat22@gmail.com', 'soltero', 'Femenino', 'Mariela', '104dc639e6cd486032bb0dd9ebac0c9d', NULL, 0, 'No', 30, 65, 50, 70, 40, 55, 55, 28, 35, 84, 84, 84, 'No', 37.00, 'Superior', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 14, 22, 30, 13, 16, 14, 16, 17, 13, 14),
(51, 'MIGUEL ADAN CONTRERAS LEON', 'Preparatoria', 28, 'ADMINISTRATIVO O MECANICO', 'LEONTEPEHUANO@HOTMAIL.COM', 'casado', 'Masculino', 'MIGUEL ADAN CONTRERAS LEON', 'b8f444e349fedb15b12b7cf4182361e1', 'No', 47, 'No', 60, 65, 65, 10, 5, 5, 40, 80, 57, 93, 97, 97, 'No', 31.50, 'Superior al Termino Medio', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 'PASCUAL RAYGOZA LOERA', 'Universidad', 23, 'MARKETING ', 'Pascual_1993@hotmail.com', 'soltero', 'Masculino', 'Raygozaloera', 'fb582ab31869fc9e0ceff471c5c7af6a', 'No', 59, 'No', 84, 95, 85, 82, 87, 85, 55, 10, 25, 5, 23, 9, 'No', 39.00, 'Superior', 'No', 6, 4, 6, 7, 5, 6, 2, 4, 6, 7, 6, 6, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 'asada', 'Universidad', 27, 'ers', 'weweer@hoeres.com', 'casado', 'Masculino', 'rentos', '72053c78af6389b69936a14067c3a392', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 'Luis Gerardo Soto Payan ', 'Preparatoria', 20, 'asesor ', 'luisgsotopy@gmail.com', 'soltero', 'Masculino', 'LUISGSOTO', '05a4d019a0814db7185be771f9ebfd1b', NULL, 0, 'No', 50, 65, 60, 70, 95, 85, 55, 10, 25, 84, 70, 75, NULL, NULL, NULL, 'No', 7, 2, 6, 7, 1, 4, 6, 4, 6, 4, 5, 5, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 'Gino Adrian Ramirez Soto', 'Universidad', 30, 'Asesor', 'ginoadryanram727@gmail.com', 'casado', 'Masculino', 'ginoadrianramirez', '6f068fae536084103bc7a1d2f8dcf484', 'No', 52, 'No', 50, 87, 67, 25, 25, 20, 75, 55, 60, 70, 38, 40, NULL, NULL, NULL, 'No', 3, 4, 4, 9, 7, 6, 5, 4, 5, 6, 4, 8, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 'israel jose calderon ramirez', 'Universidad', 32, 'empleado', 'axel_usa_la@hotmail.com', 'casado', 'Masculino', 'axelkallws6', 'b82e58f5a351a74a99567eac3918b147', 'No', 54, 'No', 84, 80, 80, 55, 87, 70, 16, 28, 20, 55, 23, 25, NULL, NULL, NULL, 'No', 2, 9, 6, 7, 5, 6, 6, 2, 6, 7, 6, 7, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 'Ernesto ', 'Universidad', 24, 'Practicante', 'ernestomota20@gmail.com', 'soltero', 'Masculino', 'ernestomota', 'd037186c9c88a17a917e44b9d5932e1f', 'No', 55, 'No', 20, 55, 40, 82, 40, 60, 75, 35, 57, 93, 84, 90, 'No', 35.00, 'Superior al Termino Medio', 'No', 4, 6, 5, 7, 4, 1, 5, 4, 8, 5, 5, 4, 'No', 4, 9, 3, 7, 4, 3, 6, 2, 3, 4, 6, 6, 7, 5, 2, 5, 4, 2, 2, 5, 'No', 15, 22, 26, 0, 16, 12, 17, 15, 11, 22);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
