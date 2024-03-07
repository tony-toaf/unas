-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 06:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestor`
--

-- --------------------------------------------------------

--
-- Table structure for table `caso`
--

CREATE TABLE `caso` (
  `Expediente` varchar(50) NOT NULL,
  `NombreVictima` varchar(50) DEFAULT NULL,
  `Fecha` varchar(20) DEFAULT NULL,
  `UsuarioID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dato`
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID`, `nombre`) VALUES
(1, 'perito'),
(2, 'investigador'),
(3, 'administradores'),
(4, 'Superuser');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_de_datos`
--

CREATE TABLE `tipo_de_datos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipo_de_datos`
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
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Contraseña` varchar(50) DEFAULT NULL,
  `RolID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Contraseña`, `RolID`) VALUES
(1, 'perito', 'perito', 1),
(2, 'investigador', 'investigador', 2),
(3, 'administradores', 'administradores', 3),
(4, 'superuser', 'superuser', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caso`
--
ALTER TABLE `caso`
  ADD PRIMARY KEY (`Expediente`),
  ADD KEY `UsuarioID` (`UsuarioID`);

--
-- Indexes for table `dato`
--
ALTER TABLE `dato`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TipoDato` (`TipoDato`),
  ADD KEY `Expediente` (`Expediente`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tipo_de_datos`
--
ALTER TABLE `tipo_de_datos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `RolID` (`RolID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `caso`
--
ALTER TABLE `caso`
  ADD CONSTRAINT `caso_ibfk_1` FOREIGN KEY (`UsuarioID`) REFERENCES `usuarios` (`ID`);

--
-- Constraints for table `dato`
--
ALTER TABLE `dato`
  ADD CONSTRAINT `dato_ibfk_1` FOREIGN KEY (`TipoDato`) REFERENCES `tipo_de_datos` (`ID`),
  ADD CONSTRAINT `dato_ibfk_2` FOREIGN KEY (`Expediente`) REFERENCES `caso` (`Expediente`);

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`RolID`) REFERENCES `roles` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
