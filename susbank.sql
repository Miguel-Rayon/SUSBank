-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-08-2022 a las 23:28:21
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `susbank`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(12) NOT NULL,
  `servicio` varchar(20) DEFAULT NULL,
  `cantidad` int(5) DEFAULT NULL,
  `referencia` varchar(20) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_servicio`, `servicio`, `cantidad`, `referencia`, `id_user`) VALUES
(1, 'TELMEX', 500, '12345678', 3),
(2, 'Agua y Drenaje', 60, '12345678', 3),
(3, 'IZZI', 300, '12345678', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transferencia`
--

CREATE TABLE `transferencia` (
  `id` int(12) NOT NULL,
  `folio` varchar(5) DEFAULT NULL,
  `clabe` varchar(18) DEFAULT NULL,
  `monto` int(8) DEFAULT NULL,
  `concepto` varchar(50) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `transferencia`
--

INSERT INTO `transferencia` (`id`, `folio`, `clabe`, `monto`, `concepto`, `id_user`) VALUES
(1, '58796', '123456789876543211', 200, 'Prueba de pago', 2),
(2, '24247', '123456789876543211', 300, 'Prueba de pagoxd', 2),
(3, '92451', '123456789876543211', 200, 'Prueba de pago', 3),
(8, '55218', '123456789876543211', 30, 'Prueba de pago', 3),
(9, '46267', '123456789876543211', 200, 'Prueba de pago', 3),
(10, '79137', '123456789876543211', 50, 'Prueba de pagoxd', 3),
(11, '06386', '588407582747511831', 300, 'prueba aumento saldo', 3),
(12, '32203', '629161631166828435', 200, 'prueba aumento saldo', 3),
(13, '74767', '123456789876543211', 90, 'hola', 3),
(14, '21146', '123456789876543211', 200, 'Prueba de pago', 3),
(15, '52292', '123456789876543211', 10, 'hola que haces', 3),
(16, '99923', '588407582747511831', 90, 'hola que haces xd', 3),
(17, '42675', '588407582747511831', 200, 'primer deposito', 8),
(18, '58037', '629161631166828435', 200, 'prueba validacion', 3),
(19, '56486', '123456789876543211', 200, 'hola xd', 3),
(20, '49046', '629161631166828435', 200, 'falopa', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `curp` varchar(20) DEFAULT NULL,
  `cel` varchar(10) DEFAULT NULL,
  `num_tarjeta` varchar(16) DEFAULT NULL,
  `saldo` int(8) DEFAULT NULL,
  `clabe` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nombre`, `correo`, `pass`, `curp`, `cel`, `num_tarjeta`, `saldo`, `clabe`) VALUES
(2, 'Administrador', 'admin@gmail.com', 'admin', 'HERM020327HNLRYGA5', '811000000', '7431126430230160', 2780, '588407582747511831'),
(3, 'Ejemplo', 'ejemplo@gmail.com', '1234', 'CURPDEEJEMPLO', '811000000', '3687128376263572', 18500, '690388970417155043'),
(4, 'Jose Miguel', 'dante4629@gmail.com', '1234', 'HERM020327HNLRYGA5', '811000000', '8301068829739054', 7318, '072953992351810723'),
(6, 'Ejemplo', 'ejemplo2@gmail.com', '1234', 'CURPDEEJEMPLO', '811000000', '4838586602779660', 8226, '099510882366655262'),
(8, 'Ejemplo3', 'ejemplo3@gmail.com', '1234', 'CURPDEEJEMPLO3', '811000000', '7535658593041333', 1639, '629161631166828435'),
(10, 'Ejemplo4', 'ejemplo4@gmail.com', '12345', 'HERM020327HNLRYGA5', '811000000', '2522684180627094', 8154, '258416535739348821');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `transferencia`
--
ALTER TABLE `transferencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `transferencia`
--
ALTER TABLE `transferencia`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`);

--
-- Filtros para la tabla `transferencia`
--
ALTER TABLE `transferencia`
  ADD CONSTRAINT `transferencia_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
