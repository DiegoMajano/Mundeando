-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 18-03-2024 a las 03:52:18
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenciaviajesdb`
--

DELIMITER $$
--
-- Procedimientos
--
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` varchar(50) NOT NULL,
  `Nombres` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Telefono` int NOT NULL,
  `Ocupacion` varchar(200) NOT NULL
) ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `Nombres`, `Apellidos`, `Direccion`, `Telefono`, `Ocupacion`) VALUES
('CMD0001', 'daniel', 'miranda', 'dds', 78658874, 'rmjrmdrk'),
('CMH0001', 'Hazel', 'Maltes', 'soya', 87672397, 'psicologa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escalas`
--

CREATE TABLE `escalas` (
  `IdEscala` varchar(50) NOT NULL,
  `Pais` varchar(200) NOT NULL,
  `Ciudad` varchar(200) NOT NULL,
  `Aeropuerto` varchar(200) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escalastour`
--

CREATE TABLE `escalastour` (
  `Id_Tour` varchar(50) NOT NULL,
  `Id_Escala` varchar(50) NOT NULL
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formapago`
--

CREATE TABLE `formapago` (
  `IdMetPago` varchar(50) NOT NULL,
  `MetodoPago` varchar(200) NOT NULL
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcionclitour`
--

CREATE TABLE `inscripcionclitour` (
  `Id_Inscripcion` varchar(50) NOT NULL,
  `Id_Cliente` varchar(50) NOT NULL,
  `Id_Tour` varchar(50) NOT NULL,
  `Id_MetPago` varchar(50) NOT NULL
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `IdRol` varchar(50) NOT NULL,
  `NombreRol` varchar(200) NOT NULL
);

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`IdRol`, `NombreRol`) VALUES
('RA0001', 'Atencion al público'),
('RG0001', 'Gerente'),
('RT0001', 'Turismo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tour`
--

CREATE TABLE `tour` (
  `idTour` varchar(50) NOT NULL,
  `ciudadDestino` varchar(200)  NOT NULL,
  `paisDestino` varchar(200) NOT NULL,
  `fechaSalida` date NOT NULL,
  `horaSalida` time NOT NULL,
  `fechaLLegada` date NOT NULL,
  `horaLlegada` time NOT NULL,
  `plazasAsignadas` int NOT NULL,
  `plazasVendidas` int NOT NULL,
  `idEncargado` varchar(50) NOT NULL
) ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` varchar(50) NOT NULL,
  `User` varchar(200)  NOT NULL,
  `Contraseña` varchar(200) NOT NULL,
  `Id_Rol` varchar(50) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Apellido` varchar(200) NOT NULL,
  `NombreCompleto` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Telefono` int NOT NULL
) ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `User`, `Contraseña`, `Id_Rol`, `Nombre`, `Apellido`, `NombreCompleto`, `Email`, `Telefono`) VALUES
('UDM0001', 'diego.majano', 'diegoM', 'RG0001', 'Diego', 'Majano', 'Diego Majano', 'diego.majano@mundeando.com.sv', 79413267),
('UDR0001', 'daniel.rodas', '1234', 'RT0001', 'daniel', 'rodas', 'daniel rodas', 'dmdmjdd', 87878787);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `escalas`
--
ALTER TABLE `escalas`
  ADD PRIMARY KEY (`IdEscala`);

--
-- Indices de la tabla `escalastour`
--
ALTER TABLE `escalastour`
  ADD KEY `Id_Tour` (`Id_Tour`),
  ADD KEY `Id_Escala` (`Id_Escala`);

--
-- Indices de la tabla `formapago`
--
ALTER TABLE `formapago`
  ADD PRIMARY KEY (`IdMetPago`);

--
-- Indices de la tabla `inscripcionclitour`
--
ALTER TABLE `inscripcionclitour`
  ADD PRIMARY KEY (`Id_Inscripcion`),
  ADD KEY `Id_Cliente` (`Id_Cliente`),
  ADD KEY `Id_Tour` (`Id_Tour`),
  ADD KEY `Id_MetPago` (`Id_MetPago`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`IdRol`);

--
-- Indices de la tabla `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`idTour`),
  ADD KEY `idEncargado` (`idEncargado`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `U_nomUsuario` (`User`),
  ADD KEY `Id_Rol` (`Id_Rol`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `escalastour`
--
ALTER TABLE `escalastour`
  ADD CONSTRAINT `escalastour_ibfk_1` FOREIGN KEY (`Id_Escala`) REFERENCES `escalas` (`IdEscala`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `escalastour_ibfk_2` FOREIGN KEY (`Id_Tour`) REFERENCES `tour` (`idTour`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `formapago`
--
ALTER TABLE `formapago`
  ADD CONSTRAINT `formapago_ibfk_1` FOREIGN KEY (`IdMetPago`) REFERENCES `inscripcionclitour` (`Id_MetPago`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inscripcionclitour`
--
ALTER TABLE `inscripcionclitour`
  ADD CONSTRAINT `inscripcionclitour_ibfk_1` FOREIGN KEY (`Id_Cliente`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscripcionclitour_ibfk_2` FOREIGN KEY (`Id_Tour`) REFERENCES `tour` (`idTour`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_ibfk_2` FOREIGN KEY (`idEncargado`) REFERENCES `usuario` (`IdUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Id_Rol`) REFERENCES `rol` (`IdRol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
