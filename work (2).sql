-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2016 a las 01:34:51
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `work`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE IF NOT EXISTS `inmuebles` (
  `id_inmueble` int(11) NOT NULL,
  `name_inmueble` varchar(35) NOT NULL,
  `cliente` varchar(20) NOT NULL DEFAULT 'NOT NULL',
  `calle` varchar(40) NOT NULL,
  `colonia` varchar(30) NOT NULL,
  `num_exterior` int(11) NOT NULL,
  `num_interior` int(11) NOT NULL,
  `codigo_postal` int(11) NOT NULL,
  `entidad` varchar(30) NOT NULL,
  `demarcacion` varchar(30) NOT NULL,
  `zona` varchar(15) NOT NULL,
  `Supervisor` varchar(30) NOT NULL,
  `fecha_registro_inmueble` datetime NOT NULL,
  `fecha_mod_inmueble` datetime NOT NULL,
  `estado_repo` char(2) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`id_inmueble`, `name_inmueble`, `cliente`, `calle`, `colonia`, `num_exterior`, `num_interior`, `codigo_postal`, `entidad`, `demarcacion`, `zona`, `Supervisor`, `fecha_registro_inmueble`, `fecha_mod_inmueble`, `estado_repo`) VALUES
(1, 'Anzures', 'NOT NULL', 'Zapata', 'Anzures', 23, 12, 52132, '--', 'Cuatemoc', 'Centro', 'Mario', '2016-04-04 00:00:00', '2016-04-30 00:00:00', 'si'),
(2, 'Vallejo', 'NOT NULL', 'San Sebastian', 'Tepalcapa', 34, 1, 23141, '--', 'GAM', 'Norte', '', '2011-04-04 00:00:00', '2016-04-30 00:00:00', 'no'),
(7, 'Inmuebles tlalpan', 'Senasica', 'rio tepeji', 'Del valle', 12, 12, 43412, 'Ciudad de MÃ©xico', 'Atizapan', 'Poniente Norte', '', '2016-04-27 00:00:00', '2016-04-27 00:00:00', 'no'),
(6, 'Central aurrera', 'Senasica', 'Francisco Barrera', 'Alfredo V.Bonfil', 21, 29, 52940, 'Ciudad de MÃ©xico', 'Atizapan', 'Poniente Norte', '', '2016-04-27 00:00:00', '2016-04-27 00:00:00', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros_jornada`
--

CREATE TABLE IF NOT EXISTS `registros_jornada` (
  `id_reg_j` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `type_user` varchar(10) NOT NULL,
  `data_entrada` datetime NOT NULL,
  `data_salida` datetime NOT NULL,
  `asistencia` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_system`
--

CREATE TABLE IF NOT EXISTS `registro_system` (
  `id_reg_sys` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `type_user` varchar(10) NOT NULL,
  `data_entrada` datetime NOT NULL,
  `data_salida` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_system`
--

INSERT INTO `registro_system` (`id_reg_sys`, `id_usuario`, `type_user`, `data_entrada`, `data_salida`) VALUES
(1, NULL, 'supervisor', '2016-04-21 00:00:00', NULL),
(2, NULL, 'administra', '2016-04-21 00:00:00', NULL),
(3, NULL, 'administra', '2016-04-21 00:00:00', NULL),
(4, NULL, 'administra', '2016-04-21 00:00:00', NULL),
(5, NULL, 'administra', '2016-04-21 00:00:00', NULL),
(6, NULL, 'administra', '2016-04-21 00:00:00', NULL),
(7, NULL, 'administra', '2016-04-21 00:00:00', NULL),
(8, NULL, 'administra', '2016-04-21 00:00:00', NULL),
(9, NULL, 'administra', '2016-04-22 00:00:00', NULL),
(10, NULL, 'administra', '2016-04-22 00:00:00', NULL),
(11, NULL, 'administra', '2016-04-22 00:00:00', NULL),
(12, NULL, 'administra', '2016-04-22 00:00:00', NULL),
(13, NULL, 'administra', '2016-04-22 00:00:00', NULL),
(14, NULL, 'Mario', '2016-04-22 00:00:00', NULL),
(15, NULL, 'administra', '2016-04-22 00:00:00', NULL),
(16, NULL, 'Mario', '2016-04-22 00:00:00', NULL),
(17, NULL, 'Mario', '2016-04-22 00:00:00', NULL),
(18, NULL, 'Mario', '2016-04-22 00:00:00', NULL),
(19, NULL, 'Mario', '2016-04-22 00:00:00', NULL),
(20, NULL, 'administra', '2016-04-22 00:00:00', NULL),
(21, NULL, 'administra', '2016-04-22 00:00:00', NULL),
(22, NULL, 'administra', '2016-04-22 00:00:00', NULL),
(23, NULL, 'administra', '2016-04-22 00:00:00', NULL),
(24, NULL, 'administra', '2016-04-22 00:00:00', NULL),
(25, NULL, 'Mario', '2016-04-22 00:00:00', NULL),
(26, NULL, 'administra', '2016-04-22 00:00:00', NULL),
(27, NULL, 'administra', '2016-04-24 00:00:00', NULL),
(28, NULL, 'administra', '2016-04-24 00:00:00', NULL),
(29, NULL, 'Mario', '2016-04-25 00:00:00', NULL),
(30, NULL, 'Mario', '2016-04-25 00:00:00', NULL),
(31, NULL, 'administra', '2016-04-25 00:00:00', NULL),
(32, NULL, 'administra', '2016-04-25 00:00:00', NULL),
(33, NULL, 'administra', '2016-04-25 00:00:00', NULL),
(34, NULL, 'administra', '2016-04-25 00:00:00', NULL),
(35, NULL, 'administra', '2016-04-25 00:00:00', NULL),
(36, NULL, 'Mario', '2016-04-25 00:00:00', NULL),
(37, NULL, 'administra', '2016-04-25 00:00:00', NULL),
(38, NULL, 'Mario', '2016-04-25 00:00:00', NULL),
(39, NULL, 'administra', '2016-04-25 00:00:00', NULL),
(40, NULL, 'Mario', '2016-04-25 00:00:00', NULL),
(41, NULL, 'Mario', '2016-04-26 00:00:00', NULL),
(42, NULL, 'Mario', '2016-04-26 00:00:00', NULL),
(43, NULL, 'Mario', '2016-04-26 00:00:00', NULL),
(44, NULL, 'administra', '2016-04-26 00:00:00', NULL),
(45, NULL, 'administra', '2016-04-26 00:00:00', NULL),
(46, NULL, 'administra', '2016-04-26 00:00:00', NULL),
(47, NULL, 'administra', '2016-04-27 00:00:00', NULL),
(48, NULL, 'administra', '2016-04-27 00:00:00', NULL),
(49, NULL, 'administra', '2016-04-27 00:00:00', NULL),
(50, NULL, 'administra', '2016-04-27 00:00:00', NULL),
(51, NULL, 'administra', '2016-04-27 00:00:00', NULL),
(52, NULL, 'administra', '2016-04-28 00:00:00', NULL),
(53, NULL, 'administra', '2016-04-28 00:00:00', NULL),
(54, NULL, 'Mario', '2016-04-28 00:00:00', NULL),
(55, NULL, 'Mario', '2016-04-28 00:00:00', NULL),
(56, NULL, 'administra', '2016-04-28 00:00:00', NULL),
(57, NULL, 'Mario', '2016-04-28 00:00:00', NULL),
(58, NULL, 'administra', '2016-04-28 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_datos_basicos`
--

CREATE TABLE IF NOT EXISTS `usuarios_datos_basicos` (
  `id_usuario` int(11) NOT NULL,
  `nombre_g` varchar(40) NOT NULL,
  `apellido_p` varchar(35) NOT NULL,
  `apellido_m` varchar(35) NOT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `curp` char(18) NOT NULL,
  `type_usuario` varchar(40) NOT NULL,
  `calle` varchar(40) NOT NULL,
  `colonia` varchar(30) NOT NULL,
  `num_exterior` int(11) NOT NULL,
  `num_interior` int(11) NOT NULL,
  `codigo_postal` int(11) NOT NULL,
  `entidad` varchar(30) NOT NULL,
  `demarcacion` varchar(30) NOT NULL,
  `num_movil` varchar(20) NOT NULL,
  `name_img` varchar(15) NOT NULL,
  `pass_xc` varchar(20) NOT NULL,
  `inmueble_asign` varchar(35) NOT NULL,
  `supervisor` varchar(40) NOT NULL,
  `costo_serv` int(11) NOT NULL,
  `turno` varchar(15) NOT NULL,
  `horario_laboral` varchar(13) NOT NULL,
  `tipo_pago` varchar(10) NOT NULL,
  `fecha_inicio_contrato` date NOT NULL,
  `fecha_finalizacion` date NOT NULL,
  `fecha_registro_bd` datetime NOT NULL,
  `fecha_mod_bd` datetime NOT NULL,
  `estado_repo` char(2) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios_datos_basicos`
--

INSERT INTO `usuarios_datos_basicos` (`id_usuario`, `nombre_g`, `apellido_p`, `apellido_m`, `fecha_nacimiento`, `curp`, `type_usuario`, `calle`, `colonia`, `num_exterior`, `num_interior`, `codigo_postal`, `entidad`, `demarcacion`, `num_movil`, `name_img`, `pass_xc`, `inmueble_asign`, `supervisor`, `costo_serv`, `turno`, `horario_laboral`, `tipo_pago`, `fecha_inicio_contrato`, `fecha_finalizacion`, `fecha_registro_bd`, `fecha_mod_bd`, `estado_repo`) VALUES
(1, 'polo', 'sanches', 'flores', '2016-04-06 00:00:00', 'hakj829k892', 'guardia', 'Mariposa', 'Colmena', 1, 2, 54212, 'Nicolas Romero', 'Nicolas Romero', '54-23-12-12', 'primer', 'guardia', 'anzures', 'Mario Manolo', 7000, '12-12', '6am-6-pm', 'cheques', '2016-04-08', '2016-04-30', '2016-04-05 00:00:00', '2016-04-03 00:00:00', 'si'),
(2, 'Oliver', 'Queen', 'Ramirez', '2015-03-21 00:00:00', 'kjau1289aask12', 'guardia', 'calle', 'colonia', 3, 2, 54212, 'Santa Helena', 'Tlalneplantla de baz', '54-23-12-12', 'name', 'pass_oliver', 'deportivo', 'Mario Manolo', 9000, '12-24', '8-8', 'efectivo', '2016-04-16', '2016-04-29', '2015-10-21 00:00:00', '2016-09-21 00:00:00', 'no'),
(3, 'Mario', 'Manolo', 'Mejia', '2013-12-21 00:00:00', 'kjahbajas', 'supervisor', 'calle', 'colonia', 1, 4, 78212, 'Satelite', 'Naucalpan de Juarez', '7282822', 'name', 'pass_supervisor', 'anzures', '--', 10000, 'matutino', '12-12', 'debito', '2016-04-01', '2016-04-29', '2016-04-02 00:00:00', '2016-04-30 00:00:00', 'si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD PRIMARY KEY (`id_inmueble`);

--
-- Indices de la tabla `registros_jornada`
--
ALTER TABLE `registros_jornada`
  ADD PRIMARY KEY (`id_reg_j`);

--
-- Indices de la tabla `registro_system`
--
ALTER TABLE `registro_system`
  ADD PRIMARY KEY (`id_reg_sys`);

--
-- Indices de la tabla `usuarios_datos_basicos`
--
ALTER TABLE `usuarios_datos_basicos`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  MODIFY `id_inmueble` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `registros_jornada`
--
ALTER TABLE `registros_jornada`
  MODIFY `id_reg_j` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `registro_system`
--
ALTER TABLE `registro_system`
  MODIFY `id_reg_sys` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT de la tabla `usuarios_datos_basicos`
--
ALTER TABLE `usuarios_datos_basicos`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
