-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-04-2024 a las 06:33:07
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
-- Base de datos: `gestor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CasoAdministrador`
--

CREATE TABLE `CasoAdministrador` (
  `Id` int(11) NOT NULL,
  `AgenteDeCaso` varchar(255) DEFAULT NULL,
  `PeritoDeCaso` varchar(255) DEFAULT NULL,
  `Expediente` varchar(255) DEFAULT NULL,
  `NombreVictima` varchar(255) DEFAULT NULL,
  `FechaEcho` varchar(255) DEFAULT NULL,
  `FechaRescate` varchar(255) DEFAULT NULL,
  `LugarHecho` varchar(400) DEFAULT NULL,
  `LugarRescate` varchar(400) DEFAULT NULL,
  `NombreCapturados` varchar(1000) DEFAULT NULL,
  `UsuarioID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CasoInvestigador`
--

CREATE TABLE `CasoInvestigador` (
  `Expediente` varchar(255) NOT NULL,
  `AgenteDeCaso` varchar(255) DEFAULT NULL,
  `NombreVictima` varchar(255) DEFAULT NULL,
  `Identidad` varchar(255) DEFAULT NULL,
  `Edad` varchar(255) DEFAULT NULL,
  `Sinopsis` varchar(10000) DEFAULT NULL,
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
  `Identidad` varchar(50) DEFAULT NULL,
  `Observacion` varchar(500) DEFAULT NULL,
  `TipoDato` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EstadoOrdenesCaptura`
--

CREATE TABLE `EstadoOrdenesCaptura` (
  `IdEstado` int(11) NOT NULL,
  `Estado` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `EstadoOrdenesCaptura`
--

INSERT INTO `EstadoOrdenesCaptura` (`IdEstado`, `Estado`) VALUES
(1, 'Pendiente'),
(2, 'Ejecutada'),
(3, 'En El Extrangero'),
(4, 'Muerto'),
(5, 'Preso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ListaPersonal`
--

CREATE TABLE `ListaPersonal` (
  `Id` int(11) NOT NULL,
  `Identidad` varchar(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Apellido` varchar(255) NOT NULL,
  `Chapa` varchar(50) DEFAULT NULL,
  `Rango` varchar(255) DEFAULT NULL,
  `Rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ListaPersonal`
--

INSERT INTO `ListaPersonal` (`Id`, `Identidad`, `Nombre`, `Apellido`, `Chapa`, `Rango`, `Rol`) VALUES
(1, '0719200200354', 'Tony', 'Alonzo', NULL, 'Agente de Policia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `OrdenesCapturas`
--

CREATE TABLE `OrdenesCapturas` (
  `Id` int(11) NOT NULL,
  `FechaEmision` varchar(300) DEFAULT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Identidad` varchar(255) DEFAULT NULL,
  `Delito` varchar(255) DEFAULT NULL,
  `Victima` varchar(255) DEFAULT NULL,
  `Estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `OrdenesCapturas`
--

INSERT INTO `OrdenesCapturas` (`Id`, `FechaEmision`, `Nombre`, `Identidad`, `Delito`, `Victima`, `Estado`) VALUES
(1, '1 enero del 2023', 'Tony', '43403840324', 'robo', 'juan', 3),
(2, '1 enero del 2023', 'maria', '443493', 'maltrato', 'juan', 2);

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

--
-- Volcado de datos para la tabla `tipo_de_datos`
--

INSERT INTO `tipo_de_datos` (`ID`, `Nombre`) VALUES
(1, 'Llamadas'),
(2, 'Mensajes'),
(3, 'Imei'),
(4, 'CDR_llamadas'),
(5, 'CDR_mensajes'),
(6, 'Sinopsis'),
(7, 'Audios');

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
(4, 'superuser', 'superuser', 4),
(5, 'otro', 'jfdjfld', 2),
(6, 'estee es otro', 'jfdjfld', 2),
(7, 'Allnzosjw', 'Ejjejej', 2),
(8, 'Tinykekek', 'Jej3j', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `CasoAdministrador`
--
ALTER TABLE `CasoAdministrador`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UsuarioID` (`UsuarioID`);

--
-- Indices de la tabla `CasoInvestigador`
--
ALTER TABLE `CasoInvestigador`
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
-- Indices de la tabla `EstadoOrdenesCaptura`
--
ALTER TABLE `EstadoOrdenesCaptura`
  ADD PRIMARY KEY (`IdEstado`);

--
-- Indices de la tabla `ListaPersonal`
--
ALTER TABLE `ListaPersonal`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Rol` (`Rol`);

--
-- Indices de la tabla `OrdenesCapturas`
--
ALTER TABLE `OrdenesCapturas`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Estado` (`Estado`);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `CasoAdministrador`
--
ALTER TABLE `CasoAdministrador`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `EstadoOrdenesCaptura`
--
ALTER TABLE `EstadoOrdenesCaptura`
  MODIFY `IdEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ListaPersonal`
--
ALTER TABLE `ListaPersonal`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `OrdenesCapturas`
--
ALTER TABLE `OrdenesCapturas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `CasoAdministrador`
--
ALTER TABLE `CasoAdministrador`
  ADD CONSTRAINT `CasoAdministrador_ibfk_1` FOREIGN KEY (`UsuarioID`) REFERENCES `usuarios` (`ID`);

--
-- Filtros para la tabla `CasoInvestigador`
--
ALTER TABLE `CasoInvestigador`
  ADD CONSTRAINT `CasoInvestigador_ibfk_1` FOREIGN KEY (`UsuarioID`) REFERENCES `usuarios` (`ID`);

--
-- Filtros para la tabla `dato`
--
ALTER TABLE `dato`
  ADD CONSTRAINT `dato_ibfk_1` FOREIGN KEY (`TipoDato`) REFERENCES `tipo_de_datos` (`ID`),
  ADD CONSTRAINT `dato_ibfk_2` FOREIGN KEY (`Expediente`) REFERENCES `CasoInvestigador` (`Expediente`);

--
-- Filtros para la tabla `ListaPersonal`
--
ALTER TABLE `ListaPersonal`
  ADD CONSTRAINT `ListaPersonal_ibfk_1` FOREIGN KEY (`Rol`) REFERENCES `roles` (`ID`);

--
-- Filtros para la tabla `OrdenesCapturas`
--
ALTER TABLE `OrdenesCapturas`
  ADD CONSTRAINT `OrdenesCapturas_ibfk_1` FOREIGN KEY (`Estado`) REFERENCES `EstadoOrdenesCaptura` (`IdEstado`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`RolID`) REFERENCES `roles` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
