-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2021 a las 22:29:16
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios_pwd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` bigint(20) NOT NULL,
  `rodescripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `rodescripcion`) VALUES
(1, 'administrador'),
(3, 'editor'),
(5, 'miembro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` bigint(20) NOT NULL,
  `usnombre` varchar(50) NOT NULL,
  `uspass` varchar(50) NOT NULL,
  `usmail` varchar(50) NOT NULL,
  `usdeshabilitado` timestamp NULL DEFAULT NULL,
  `usvencimientocertificado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usnombre`, `uspass`, `usmail`, `usdeshabilitado`, `usvencimientocertificado`) VALUES
(10, 'llanchberry5', '76a46febd7bd778ef507650bccb2c2b7', 'ddeverell5@theglobeandmail.com', NULL, '2022-01-27 03:00:00'),
(11, 'sstern6', '366971226c73b87ab69e87918b9338a5', 'gbulcroft6@desdev.cn', NULL, NULL),
(12, 'miembro', '124ef391809a7840a9b2d4454facb867', 'fhaggard0@reuters.com', '2021-10-29 20:08:13', NULL),
(13, 'editor', '518d7b91a75931e1887bd3d20352869c', 'test@opera.com', NULL, NULL),
(14, 'rpiggin3', '5c4673bce4320da5b54cf78055e59098', 'ataffarello2@java.com', NULL, NULL),
(15, 'test', '2803163d27ac58633fb69d37bff948de', 'test@opera.com', NULL, NULL),
(18, 'admin', '4297f44b13955235245b2497399d7a93', 'admin@mail.com', NULL, '2022-01-27 20:17:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariorol`
--

CREATE TABLE `usuariorol` (
  `idusuario` bigint(20) NOT NULL,
  `idrol` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuariorol`
--

INSERT INTO `usuariorol` (`idusuario`, `idrol`) VALUES
(10, 3),
(10, 5),
(11, 1),
(11, 3),
(11, 5),
(12, 5),
(13, 3),
(14, 5),
(15, 1),
(18, 1),
(18, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `usuariorol`
--
ALTER TABLE `usuariorol`
  ADD PRIMARY KEY (`idusuario`,`idrol`),
  ADD KEY `idrol` (`idrol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuariorol`
--
ALTER TABLE `usuariorol`
  ADD CONSTRAINT `usuariorol_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`),
  ADD CONSTRAINT `usuariorol_ibfk_2` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
