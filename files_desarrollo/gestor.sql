-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2024 a las 04:00:11
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caso`
--

CREATE TABLE `caso` (
  `Expediente` varchar(50) NOT NULL,
  `NombreVictima` varchar(50) DEFAULT NULL,
  `Fecha` varchar(20) DEFAULT NULL,
  `UsuarioID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dato`
--

CREATE TABLE `dato` (
  `ID` int(11) NOT NULL,
  `Expediente` varchar(50) DEFAULT NULL,
  `Numero_dato` varchar(50) DEFAULT NULL,
  `Fecha_solicitado` varchar(50) DEFAULT NULL,
  `Informe_de_solicitud` varchar(50) DEFAULT NULL,
  `Propietario` varchar(50) DEFAULT NULL,
  `Observacion` varchar(500) DEFAULT NULL,
  `TipoDato` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID`, `nombre`) VALUES
(1, 'perito'),
(2, 'investigador'),
(3, 'administradores'),
(4, 'Superuser');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_datos`
--

CREATE TABLE `tipo_de_datos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Contraseña` varchar(50) DEFAULT NULL,
  `RolID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Contraseña`, `RolID`) VALUES
(1, 'perito', 'perito', 1),
(2, 'investigador', 'investigador', 2),
(3, 'administradores', 'administradores', 3),
(4, 'superuser', 'superuser', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caso`
--
ALTER TABLE `caso`
  ADD PRIMARY KEY (`Expediente`),
  ADD KEY `UsuarioID` (`UsuarioID`);

--
-- Indices de la tabla `dato`
--
ALTER TABLE `dato`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TipoDato` (`TipoDato`),
  ADD KEY `Expediente` (`Expediente`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tipo_de_datos`
--
ALTER TABLE `tipo_de_datos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `RolID` (`RolID`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `caso`
--
ALTER TABLE `caso`
  ADD CONSTRAINT `caso_ibfk_1` FOREIGN KEY (`UsuarioID`) REFERENCES `usuarios` (`ID`);

--
-- Filtros para la tabla `dato`
--
ALTER TABLE `dato`
  ADD CONSTRAINT `dato_ibfk_1` FOREIGN KEY (`TipoDato`) REFERENCES `tipo_de_datos` (`ID`),
  ADD CONSTRAINT `dato_ibfk_2` FOREIGN KEY (`Expediente`) REFERENCES `caso` (`Expediente`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`RolID`) REFERENCES `roles` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
