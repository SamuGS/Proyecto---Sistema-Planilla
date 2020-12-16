-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2020 a las 15:00:33
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_planilla`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `time_in` time NOT NULL,
  `estado` int(11) NOT NULL,
  `time_out` time NOT NULL,
  `num_hr` double NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id`, `id_empleado`, `nombre`, `fecha`, `time_in`, `estado`, `time_out`, `num_hr`, `registro`) VALUES
(73, 3443, 'Carlos Rivas', '2020-12-15', '07:46:35', 1, '07:49:05', 9, '2020-12-15 13:49:05'),
(74, 4632, 'Juan Cortez', '2020-12-15', '07:47:30', 1, '07:48:01', 9, '2020-12-15 13:48:01'),
(75, 8364, 'Abraham Douglas Escobar Duran', '2020-12-15', '07:51:32', 1, '07:51:38', 9, '2020-12-15 13:51:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `descripcion`) VALUES
(10, 'Programador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `direccion` text NOT NULL,
  `dui` varchar(50) NOT NULL,
  `edad` int(3) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `id_horario` int(11) NOT NULL,
  `salario` double NOT NULL,
  `seguro` double NOT NULL,
  `afp` double NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `codigo`, `nombre`, `direccion`, `dui`, `edad`, `telefono`, `id_cargo`, `id_horario`, `salario`, `seguro`, `afp`, `registro`) VALUES
(84, 4632, 'Juan Cortez', 'San salvador, Valle del sol', '2345678-9', 25, '6564-5796', 10, 7, 448.75, 15, 36.25, '2020-12-15 13:45:03'),
(85, 3443, 'Carlos Rivas', 'Los conacastes #2', '97607996-2', 22, '9875-3804', 10, 9, 359, 12, 29, '2020-12-15 13:51:05'),
(86, 8364, 'Abraham Douglas Escobar Duran', 'Santiago Nonualco', '97607996-2', 22, '9876-8980', 10, 7, 400, 0, 0, '2020-12-15 13:51:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id` int(11) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id`, `time_in`, `time_out`) VALUES
(7, '07:00:00', '16:00:00'),
(9, '07:30:00', '16:30:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `mensual` double NOT NULL,
  `quincenal` double NOT NULL,
  `afp` double NOT NULL,
  `seguro` double NOT NULL,
  `descuento` int(11) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id`, `nombre`, `mensual`, `quincenal`, `afp`, `seguro`, `descuento`, `registro`) VALUES
(53, 'Carlos Rivas', 359, 179.5, 29, 12, 41, '2020-12-15 13:52:20'),
(54, 'Juan Cortez', 365.41666666667, 182.70833333333, 36.25, 15, 51, '2020-12-15 13:52:37'),
(55, 'Abraham Douglas Escobar Duran', 386.66666666667, 193.33333333333, 0, 0, 0, '2020-12-15 13:52:51'),
(56, 'Abraham Douglas Escobar Duran', 400, 200, 0, 0, 0, '2020-12-15 13:55:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(150) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `clave`, `correo`, `tipo`, `estado`, `registro`) VALUES
(3, 'abraham', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'dstiloficial@gmail.com', 'Planillero', 1, '2020-12-15 12:53:24'),
(25, 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 'admin@admin.com', 'Administrador', 1, '2020-12-15 13:40:36');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
