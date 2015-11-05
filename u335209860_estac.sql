-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2015 a las 20:31:55
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u335209860_estac`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `BorrarAuto`(IN `miPatente` VARCHAR(6))
    NO SQL
delete from autos WHERE patente=miPatente$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `BorrarUsuario`(IN `miId` INT)
    NO SQL
delete from usuarios WHERE id=miId$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `BuscarPagoPorPatente`(IN `miPatente` VARCHAR(6))
    NO SQL
SELECT * FROM pagos WHERE patente LIKE miPatente$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `BuscarUnAuto`(IN `miPatente` VARCHAR(6))
    NO SQL
select * from autos where patente = miPatente$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `BuscarUnUsuarioParaLogin`(IN `miUser` VARCHAR(30), IN `miPass` VARCHAR(30))
    NO SQL
SELECT * FROM usuarios WHERE user LIKE miUser AND password LIKE miPass$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarAuto`(IN `miPatente` VARCHAR(6), IN `miColor` VARCHAR(15), IN `miTamanio` CHAR(1), IN `miFoto` VARCHAR(100))
    NO SQL
INSERT into autos (patente,color,tamanio,ingreso,foto) values(miPatente,miColor,miTamanio,now(),miFoto)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarPago`(IN `miIngreso` DATETIME, IN `miPatente` VARCHAR(6), IN `miMonto` FLOAT)
    NO SQL
INSERT into pagos (ingreso,salida,patente,monto)values(miIngreso,now(),miPatente,miMonto)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarUsuario`(IN `miUser` VARCHAR(30), IN `miPass` VARCHAR(30), IN `miNombre` VARCHAR(30), IN `miApellido` VARCHAR(30), IN `miFecha` DATE, IN `miEmail` VARCHAR(100), IN `miDireccion` VARCHAR(50), IN `miLocalidad` VARCHAR(30), IN `miProvincia` VARCHAR(30))
    NO SQL
INSERT into usuarios (user,password,nombre,apellido,fechanac,email,direccion,localidad,provincia)values(miUser,miPass,miNombre,miApellido,miFecha,miEmail,miDireccion,miLocalidad,miProvincia)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ModificarAuto`(IN `miPatente` VARCHAR(6), IN `miTamanio` CHAR(1), IN `miFoto` VARCHAR(100), IN `miColor` VARCHAR(15))
    NO SQL
UPDATE autos SET color=miColor,tamanio=miTamanio,foto=miFoto where patente=miPatente$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ModificarUsuario`(IN `miUser` VARCHAR(30), IN `miPass` VARCHAR(30), IN `miId` MEDIUMINT, IN `miNombre` VARCHAR(30), IN `miApellido` VARCHAR(30), IN `miEmail` VARCHAR(100), IN `miDireccion` VARCHAR(50), IN `miLocalidad` VARCHAR(30), IN `miProvincia` VARCHAR(30))
    NO SQL
update usuarios set user=miUser,passwod=miPass,nombre=miNombre,apellido=miApellido,email=miEmail,direccion=miDireccion,localidad=miLocalidad,provincia=miProvincia WHERE id=miId$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TiempoDeUnAuto`(IN `miPatente` VARCHAR(6))
    NO SQL
SELECT TIMESTAMPDIFF(MINUTE,ingreso,now()) as diferencia from autos where patente=miPatente$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerTodosLosAutos`()
    NO SQL
select * from autos$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerTodosLosPagos`()
    NO SQL
select * FROM pagos$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerTodosLosUsuarios`()
    NO SQL
select * from usuarios$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

CREATE TABLE IF NOT EXISTS `autos` (
  `patente` varchar(6) NOT NULL,
  `color` varchar(15) NOT NULL,
  `tamanio` char(1) NOT NULL,
  `ingreso` datetime NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`patente`, `color`, `tamanio`, `ingreso`, `foto`) VALUES
('AAA333', 'Azul', 'G', '2015-10-12 18:59:48', 'fotos/1395738665.jpg'),
('ASD456', 'Azul', 'G', '2015-10-13 23:33:55', 'fotos/39819_league_of_legends_blade_mistress_morgana.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
  `id` int(11) NOT NULL,
  `ingreso` datetime NOT NULL,
  `salida` datetime NOT NULL,
  `patente` varchar(6) NOT NULL,
  `monto` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `ingreso`, `salida`, `patente`, `monto`) VALUES
(1, '2015-09-12 00:00:00', '2015-09-12 00:00:00', 'AAA000', 2),
(2, '2015-09-12 00:00:00', '2015-09-12 00:00:00', 'BBB111', 6),
(3, '2015-09-12 00:00:00', '2015-09-12 00:00:00', 'CCC222', 4),
(4, '2015-09-12 00:00:00', '2015-09-12 00:00:00', 'DDD999', 4),
(5, '2015-09-12 00:00:00', '2015-09-12 00:00:00', 'ZZZ777', 2),
(6, '2015-09-12 00:00:00', '2015-09-12 00:00:00', 'AAA666', 2),
(7, '2015-09-12 00:00:00', '2015-09-12 00:00:00', 'BBB999', 6),
(8, '2015-09-12 00:00:00', '2015-09-12 00:00:00', 'CCC543', 4),
(9, '2015-09-12 00:00:00', '2015-09-12 00:00:00', 'BSB432', 8),
(10, '2015-09-12 00:00:00', '2015-09-12 00:00:00', 'PUU675', 240),
(11, '2015-09-12 22:20:08', '2015-09-12 22:21:39', 'IUY213', 2),
(12, '2015-10-12 19:00:23', '2015-10-12 19:00:59', 'BBB111', 0),
(13, '2015-10-12 18:59:04', '2015-10-12 19:01:08', 'AAA000', 12),
(14, '2015-10-12 19:01:24', '2015-10-12 19:04:53', 'BBB111', 18),
(15, '2015-10-12 19:04:09', '2015-10-13 23:01:57', 'ZZZ777', 10062),
(16, '2015-10-13 23:07:45', '2015-10-13 23:08:44', 'AAA321', 0),
(17, '2015-10-13 23:12:09', '2015-10-13 23:12:21', 'AAA222', 0),
(18, '2015-10-13 23:33:24', '2015-10-14 00:01:46', 'MMM456', 168),
(19, '2015-10-13 23:11:24', '2015-10-14 00:02:41', 'AAA444', 306),
(20, '2015-10-13 23:12:56', '2015-10-14 07:50:14', 'AAA211', 3102),
(21, '2015-10-14 07:50:35', '2015-10-14 15:01:59', 'AAA689', 2586),
(22, '2015-10-13 23:33:39', '2015-10-14 15:02:01', 'ASD123', 5568),
(23, '2015-10-12 19:04:45', '2015-10-14 15:02:04', 'SSS111', 15822),
(24, '2015-10-13 23:33:10', '2015-10-14 15:02:07', 'MMM215', 5568);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `fechanac` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `localidad` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `password`, `nombre`, `apellido`, `fechanac`, `email`, `provincia`, `direccion`, `localidad`) VALUES
(7, 'dansan', 'riverplate', 'daniel', 'sanchez', '1987-02-28', 'dansan0012@gmail.com', 'Buenos Aires', 'Mitre 750', 'Avellaneda');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`patente`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
