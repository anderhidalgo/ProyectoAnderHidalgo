-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-02-2017 a las 13:41:50
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
--V2

CREATE TABLE `Album` (
  `IdAlbum` int(11) NOT NULL,
  `Titulo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Pais` int(11) DEFAULT NULL,
  `Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
  `FRegistro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
(1, 'ander', '123', 'ander@gmail.com', '1994-08-30', 'Vitoria-Gasteiz', 1, 'foto', '2017-01-25 12:00:00'),
(2, 'cejas', 'abc', 'cejas@gmail.com', '2018-01-01', 'Badoo', 0, 'chiflas', '0000-00-00 00:00:00'),
(4, 'vicente', 'picao', 'picao@gmail.com', '2019-01-01', 'badoo', 1, 'chi', '0000-00-00 00:00:00'),
(5, 'caifas', '123', 'caifas@gmail.com', '2020-04-01', 'Jerusalen', 1, 'judios', '2017-01-27 13:02:08');

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
  MODIFY `IdAlbum` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Foto`
--
ALTER TABLE `Foto`
  MODIFY `IdFoto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Pais`
--
ALTER TABLE `Pais`
  MODIFY `IdPais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
