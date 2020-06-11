-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2020 a las 08:50:42
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectodae`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosusuario`
--

CREATE TABLE `datosusuario` (
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `estadoCivil` varchar(20) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `calle` varchar(100) DEFAULT NULL,
  `numero` varchar(100) DEFAULT NULL,
  `colonia` varchar(100) DEFAULT NULL,
  `codigoPostal` int(11) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosusuario`
--

INSERT INTO `datosusuario` (`nombre`, `apellidos`, `edad`, `sexo`, `estadoCivil`, `correo`, `calle`, `numero`, `colonia`, `codigoPostal`, `idUsuario`) VALUES
('Carmen', 'Reyes', 22, 'Mujer', 'Soltero', 'MARICARMEN18998@GMAIL.COM', 'Vertiente del río', '202', 'Valle del Sur', 37557, 4),
('Sandii', 'Argote', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5),
('Edgar', 'Gonzalez', 7, 'Hombre', 'Divorcciado', 'ncnasj', 'smxw ', 'x ksw', 'kldsmxkwd', 12345, 6),
('Josse', 'Rocha', 1, 'Mujer', 'Soltero', 'josse@gmail.com', 'Vertiente del río', '202', 'valle del sur', 37557, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `idres` int(11) NOT NULL,
  `numeroPreg` int(11) NOT NULL,
  `valorResp` int(11) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`idres`, `numeroPreg`, `valorResp`, `idUsuario`) VALUES
(81, 1, 1, 4),
(82, 2, 1, 4),
(83, 3, 1, 4),
(84, 4, 1, 4),
(85, 5, 1, 4),
(86, 6, 1, 4),
(87, 7, 1, 4),
(88, 8, 1, 4),
(97, 1, 2, 5),
(98, 2, 2, 5),
(99, 3, 2, 5),
(100, 4, 5, 5),
(101, 5, 3, 5),
(102, 6, 5, 5),
(103, 7, 5, 5),
(104, 8, 3, 5),
(137, 1, 3, 7),
(138, 2, 3, 7),
(139, 3, 5, 7),
(140, 4, 5, 7),
(141, 5, 5, 7),
(142, 6, 5, 7),
(143, 7, 5, 7),
(144, 8, 5, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestaspromedio`
--

CREATE TABLE `respuestaspromedio` (
  `idRespuesta` int(11) NOT NULL,
  `numeroPrep` int(11) NOT NULL,
  `valorResp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuestaspromedio`
--

INSERT INTO `respuestaspromedio` (`idRespuesta`, `numeroPrep`, `valorResp`) VALUES
(0, 1, 1),
(1, 2, 1),
(2, 3, 1),
(3, 4, 1),
(4, 5, 1),
(5, 6, 1),
(6, 7, 1),
(7, 8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `username`, `password`) VALUES
(3, 'sandy', '1234'),
(4, 'carmen', '1234'),
(5, 'sandi', '1234'),
(6, 'edgar', '1234'),
(7, 'josse', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosusuario`
--
ALTER TABLE `datosusuario`
  ADD KEY `fk_idUsuario` (`idUsuario`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`idres`),
  ADD KEY `fk_id_Usuario` (`idUsuario`);

--
-- Indices de la tabla `respuestaspromedio`
--
ALTER TABLE `respuestaspromedio`
  ADD PRIMARY KEY (`idRespuesta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `idres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datosusuario`
--
ALTER TABLE `datosusuario`
  ADD CONSTRAINT `fk_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD CONSTRAINT `fk_id_Usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
