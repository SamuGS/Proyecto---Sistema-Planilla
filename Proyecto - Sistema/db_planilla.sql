-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2020 a las 19:05:37
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
(58, 6885, 'Abraham Douglas Escobar Duran', '2020-12-01', '08:49:20', 1, '10:01:27', 17, '2020-12-01 16:01:27'),
(59, 5356, 'Octavio EfraÃ­n HernÃ¡ndez GÃ¡lvez ', '2020-12-01', '08:49:54', 1, '10:00:21', 16, '2020-12-01 16:00:21'),
(60, 5356, 'Octavio EfraÃ­n HernÃ¡ndez GÃ¡lvez ', '2020-12-01', '10:01:53', 1, '10:01:59', 15, '2020-12-01 16:01:59'),
(61, 5356, 'Octavio EfraÃ­n HernÃ¡ndez GÃ¡lvez ', '2020-12-01', '10:30:44', 1, '10:31:03', 10, '2020-12-01 16:31:03'),
(62, 5356, 'Octavio EfraÃ­n HernÃ¡ndez GÃ¡lvez ', '2020-12-01', '10:33:14', 1, '11:52:41', 9, '2020-12-01 17:52:41'),
(63, 5356, 'Octavio EfraÃ­n HernÃ¡ndez GÃ¡lvez ', '2020-12-01', '11:54:31', 1, '11:57:27', 9, '2020-12-01 17:57:27'),
(64, 5356, 'Octavio EfraÃ­n HernÃ¡ndez GÃ¡lvez ', '2020-12-01', '11:54:49', 1, '11:57:31', 9, '2020-12-01 17:57:31'),
(65, 6885, 'Abraham Douglas Escobar Duran', '2020-12-01', '11:58:30', 0, '00:00:00', 0, '2020-12-01 17:58:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `pago_hora` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `descripcion`, `pago_hora`) VALUES
(1, 'Gerente', 5),
(3, 'Marketing', 1.5),
(4, 'Programador Junior', 2),
(6, 'Analista de datos', 1.25);

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
(80, 5356, 'Octavio EfraÃ­n HernÃ¡ndez GÃ¡lvez ', 'Los almendros', '97607996-2', 22, '7564-3242', 1, 2, 359, 12, 29, '2020-12-01 16:54:04'),
(81, 6885, 'Abraham Douglas Escobar Duran', 'Santiago Nonualco', '97607996-2', 23, '7695-7522', 1, 1, 448.75, 15, 36.25, '2020-12-01 16:54:16');

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
(1, '07:00:00', '04:00:00'),
(2, '08:00:00', '05:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hora_extra`
--

CREATE TABLE `hora_extra` (
  `id` int(11) NOT NULL,
  `id_empleado` varchar(15) NOT NULL,
  `horas` double NOT NULL,
  `pago_hora` double NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `salario` double NOT NULL,
  `squince` double NOT NULL,
  `afp` double NOT NULL,
  `seguro` double NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id`, `nombre`, `salario`, `squince`, `afp`, `seguro`, `registro`) VALUES
(41, 'Abraham Douglas Escobar Duran', 448.75, 224.375, 36.25, 15, '2020-12-01 17:59:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planilla`
--

CREATE TABLE `planilla` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, 'abraham', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'dstiloficial@gmail.com', 'Planillero', 1, '2020-11-05 15:55:26'),
(18, 'douglas', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'dstiloficial@gmail.com', 'Administrador', 2, '2020-12-01 13:34:24'),
(19, 'douglas', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'dstiloficial@gmail.com', 'Administrador', 2, '2020-12-01 13:35:14'),
(20, '9999', '', 'juan@j.com', 'Administrador', 1, '2020-12-01 13:38:52');

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
-- Indices de la tabla `planilla`
--
ALTER TABLE `planilla`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `planilla`
--
ALTER TABLE `planilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
