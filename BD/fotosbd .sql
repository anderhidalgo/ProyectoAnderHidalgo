-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-02-2017 a las 11:48:35
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fotosbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Album`
--

CREATE TABLE `Album` (
  `IdAlbum` int(11) NOT NULL,
  `Titulo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Pais` int(11) DEFAULT NULL,
  `Usuario` varchar(11) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Album`
--

INSERT INTO `Album` (`IdAlbum`, `Titulo`, `Descripcion`, `Fecha`, `Pais`, `Usuario`) VALUES
(1, '', '', '0000-00-00', 0, '0'),
(2, '', '', '0000-00-00', 0, '0'),
(3, '', '', '0000-00-00', 0, '0'),
(4, '', '', '0000-00-00', 0, '0'),
(5, 'Bocadillos', 'fotosbocadillazos', '2017-02-08', 2, '0'),
(6, 'ataria', 'fotosataria', '2017-02-04', 4, '0'),
(7, 'txapelas', 'txapelas-respingonas', '2017-02-03', 2, '0'),
(8, 'ander', 'ander-fotos', '2017-02-08', 17, 'ander'),
(9, 'chiflas', 'chiflas-png', '2017-02-08', 3, 'ander'),
(10, 'primavera', 'primaver-png', '2017-02-06', 2, 'ander'),
(11, 'euskal', 'lan-png', '2017-02-03', 20, 'vicente'),
(12, 'invierno', 'fotosinvierno', '2017-02-07', 17, 'ander');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Foto`
--

CREATE TABLE `Foto` (
  `IdFoto` int(11) NOT NULL,
  `Titulo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Pais` int(11) DEFAULT NULL,
  `Album` int(11) NOT NULL,
  `Fichero` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `FRegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Foto`
--

INSERT INTO `Foto` (`IdFoto`, `Titulo`, `Fecha`, `Pais`, `Album`, `Fichero`, `FRegistro`) VALUES
(1, 'vodka', '2017-02-08', 17, 12, '../Fotos/business-1.jpg', '0000-00-00 00:00:00'),
(2, 'jeje', '2017-02-09', 5, 8, '../Fotos/business-1.jpg', '2017-02-13 10:20:10'),
(3, 'g', '2017-02-10', 5, 10, '../Fotos/Captura de pantalla 2017-02-13 ', '2017-02-13 10:58:22'),
(4, 'q', '2017-02-08', 5, 9, '../Fotos/Captura de pantalla 2017-02-13 ', '2017-02-13 11:01:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pais`
--

CREATE TABLE `Pais` (
  `IdPais` int(11) NOT NULL,
  `NomPais` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Pais`
--

INSERT INTO `Pais` (`IdPais`, `NomPais`) VALUES
(2, 'España'),
(3, 'Francia'),
(4, 'Italia'),
(5, 'Alemania'),
(6, 'Estados Unidos'),
(7, 'Mexico'),
(8, 'Colombia'),
(9, 'Venezuela'),
(10, 'India'),
(11, 'Marruecos'),
(12, 'Japon'),
(13, 'China'),
(14, 'Brasil'),
(15, 'Corea del Sur'),
(16, 'Paises Bajos'),
(17, 'Rusia'),
(18, 'Belgica'),
(19, 'Suiza'),
(20, 'Sudafrica'),
(21, 'Canada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `IdUsuario` int(11) NOT NULL,
  `NomUsuario` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Contrasena` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `FNacimiento` date NOT NULL,
  `Ciudad` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Pais` int(11) NOT NULL,
  `Foto` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `FRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`IdUsuario`, `NomUsuario`, `Contrasena`, `Email`, `FNacimiento`, `Ciudad`, `Pais`, `Foto`, `FRegistro`) VALUES
(10, 'ander', '123', 'peloduto@gmail.com', '2017-02-09', 'vitoria', 5, 'qs.png', '2017-02-10 12:52:24'),
(11, 'vicente', 'txapelas', 'wowu@wowmail.wow', '2017-02-02', 'Txapelas', 6, 'japonerdy.png', '2017-02-10 08:48:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Album`
--
ALTER TABLE `Album`
  ADD PRIMARY KEY (`IdAlbum`);

--
-- Indices de la tabla `Foto`
--
ALTER TABLE `Foto`
  ADD PRIMARY KEY (`IdFoto`);

--
-- Indices de la tabla `Pais`
--
ALTER TABLE `Pais`
  ADD PRIMARY KEY (`IdPais`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `NomUsuario` (`NomUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Album`
--
ALTER TABLE `Album`
  MODIFY `IdAlbum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `Foto`
--
ALTER TABLE `Foto`
  MODIFY `IdFoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `Pais`
--
ALTER TABLE `Pais`
  MODIFY `IdPais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
