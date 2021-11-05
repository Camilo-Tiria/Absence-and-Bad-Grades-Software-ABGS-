-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-03-2021 a las 13:27:18
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taller1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

DROP TABLE IF EXISTS `aprendiz`;
CREATE TABLE IF NOT EXISTS `aprendiz` (
  `N_doc` int(11) NOT NULL,
  `Estado_idEstado` int(20) UNSIGNED NOT NULL,
  `PROGRAMA_Ficha_carac` int(11) NOT NULL,
  `INSTRUCTOR_Num_doc` int(11) NOT NULL,
  `Tip_doc` enum('C.C','T.I') NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Tel_apre` decimal(10,0) NOT NULL,
  `Correo_SENA` varchar(50) NOT NULL,
  `Correo_Pl` varchar(50) NOT NULL,
  PRIMARY KEY (`N_doc`),
  KEY `INSTRUCTOR_Num_doc` (`INSTRUCTOR_Num_doc`),
  KEY `PROGRAMA_Ficha_carac` (`PROGRAMA_Ficha_carac`),
  KEY `Estado_idEstado` (`Estado_idEstado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aprendiz`
--

INSERT INTO `aprendiz` (`N_doc`, `Estado_idEstado`, `PROGRAMA_Ficha_carac`, `INSTRUCTOR_Num_doc`, `Tip_doc`, `Nombres`, `Apellidos`, `Tel_apre`, `Correo_SENA`, `Correo_Pl`) VALUES
(12254599, 2, 1115554, 10005890, 'C.C', 'Gelen', 'Jimenez', '320545534', 'cati46@misena.edu.co', 'leidy.khateri@gmail.com'),
(1000159994, 1, 2067472, 100023489, 'C.C', 'Camilo Andres ', 'Tiria Corredor', '3137103188', 'catiria4@misena.edu.co', 'tiria88@hotmail.com'),
(1000215864, 1, 2067472, 100023489, 'T.I', 'Leidy Katherine', 'Calderon Castano', '3204473192', 'lkcalderon46@misena.edu.co', 'leidy.khaterinecc2002@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `idEstado` int(20) UNSIGNED NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`idEstado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `Nombre`) VALUES
(1, 'Activo'),
(2, 'Inactivo ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoinstructor`
--

DROP TABLE IF EXISTS `estadoinstructor`;
CREATE TABLE IF NOT EXISTS `estadoinstructor` (
  `idEstadoInstructor` int(11) NOT NULL,
  `EstadoInstruc` varchar(50) NOT NULL,
  PRIMARY KEY (`idEstadoInstructor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadoinstructor`
--

INSERT INTO `estadoinstructor` (`idEstadoInstructor`, `EstadoInstruc`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inasistencia`
--

DROP TABLE IF EXISTS `inasistencia`;
CREATE TABLE IF NOT EXISTS `inasistencia` (
  `Cod_Inas` int(11) NOT NULL AUTO_INCREMENT,
  `N_doc` int(11) NOT NULL,
  `Fecha_Inas` date NOT NULL,
  `Observaciones` enum('Asistencia','Falta','Tarde','Retirado') DEFAULT NULL,
  `Area` enum('Promover','Ingles','C.Fisica','Tecnico') NOT NULL,
  PRIMARY KEY (`Cod_Inas`),
  KEY `APRENDIZ_N°_doc` (`N_doc`)
) ENGINE=InnoDB AUTO_INCREMENT=10008 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inasistencia`
--

INSERT INTO `inasistencia` (`Cod_Inas`, `N_doc`, `Fecha_Inas`, `Observaciones`, `Area`) VALUES
(10001, 1000159994, '2020-10-27', 'Tarde', 'Promover'),
(10002, 1000215864, '2020-10-19', 'Falta', 'Promover'),
(10003, 12254222, '2021-03-09', 'Tarde', 'Promover'),
(10004, 1000159994, '2021-03-09', 'Tarde', 'Ingles'),
(10005, 12254222, '2021-03-09', 'Falta', 'Ingles'),
(10006, 12254222, '2021-03-09', 'Falta', 'Ingles'),
(10007, 12254222, '2021-03-09', 'Tarde', 'Promover');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

DROP TABLE IF EXISTS `instructor`;
CREATE TABLE IF NOT EXISTS `instructor` (
  `Num_doc` int(11) NOT NULL,
  `TipoInstructor_idTipoInstructor` int(50) NOT NULL,
  `EstadoInstructor_idEstadoInstructor` int(11) NOT NULL,
  `Tip_doc` varchar(20) NOT NULL,
  `NombresI` varchar(20) NOT NULL,
  `ApellidosI` varchar(20) DEFAULT NULL,
  `Telefono` int(15) UNSIGNED NOT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Correo_corp` varchar(50) NOT NULL,
  `Correo_Pl` varchar(50) NOT NULL,
  `Area` enum('Promover','Ingles','Tecnico','C.Fisica') NOT NULL,
  `rol_instructor` int(10) NOT NULL,
  PRIMARY KEY (`Num_doc`),
  KEY `EstadoInstructor_idEstadoInstructor` (`EstadoInstructor_idEstadoInstructor`),
  KEY `TipoInstructor_idTipoInstructor` (`TipoInstructor_idTipoInstructor`),
  KEY `rol_instructor` (`rol_instructor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`Num_doc`, `TipoInstructor_idTipoInstructor`, `EstadoInstructor_idEstadoInstructor`, `Tip_doc`, `NombresI`, `ApellidosI`, `Telefono`, `Direccion`, `Correo_corp`, `Correo_Pl`, `Area`, `rol_instructor`) VALUES
(10005890, 2, 1, 'C.C', 'Manuel', 'Perez', 3103211799, 'calle 100', 'Manuel@misena.edu.co', 'perez@gmail.com', 'Promover', 0),
(100023489, 1, 1, 'C.C', 'Miguel Angel', ' Cacho', 3123836961, '124 C', ' malopez030@misena.edu.co', 'miguelopez@gmail.com', 'Promover', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

DROP TABLE IF EXISTS `notas`;
CREATE TABLE IF NOT EXISTS `notas` (
  `Cod_Nota` int(11) NOT NULL AUTO_INCREMENT,
  `N_doc` int(11) NOT NULL,
  `R_APRENDIZAJE_Code_Res` int(11) NOT NULL,
  `Nota` float DEFAULT NULL,
  PRIMARY KEY (`Cod_Nota`),
  KEY `R_APRENDIZAJE_Code_Res` (`R_APRENDIZAJE_Code_Res`),
  KEY `APRENDIZ_N°_doc` (`N_doc`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`Cod_Nota`, `N_doc`, `R_APRENDIZAJE_Code_Res`, `Nota`) VALUES
(101, 1000159994, 1001, 50),
(109, 12254222, 1001, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

DROP TABLE IF EXISTS `programa`;
CREATE TABLE IF NOT EXISTS `programa` (
  `Ficha_carac` int(11) NOT NULL,
  `Nom_Program` varchar(20) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Fecha_Ingr` date NOT NULL,
  `Tipo_Formacion` varchar(50) NOT NULL,
  `Modalidad` varchar(30) NOT NULL,
  PRIMARY KEY (`Ficha_carac`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`Ficha_carac`, `Nom_Program`, `Area`, `Fecha_Ingr`, `Tipo_Formacion`, `Modalidad`) VALUES
(1115554, 'ADSI_3', 'Teleinformatica', '2021-03-10', 'Tecnologia', 'Presencial'),
(2064158, 'ADSI_1', 'Teleinformatica', '2021-03-09', 'Tecnologia', 'Virtual'),
(2067472, 'ADSI', 'Teleinformatica', '2020-04-13', 'Tecnico', 'Virtual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` int(11) NOT NULL,
  `Nombre_rol` varchar(50) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `Nombre_rol`) VALUES
(1, 'Aprendiz'),
(2, 'Instructor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r_aprendizaje`
--

DROP TABLE IF EXISTS `r_aprendizaje`;
CREATE TABLE IF NOT EXISTS `r_aprendizaje` (
  `Code_Res` int(11) NOT NULL AUTO_INCREMENT,
  `INSTRUCTOR_Num_doc` int(11) NOT NULL,
  `PROGRAMA_Ficha_carac` int(11) NOT NULL,
  `Nom_Res` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Code_Res`),
  KEY `PROGRAMA_Ficha_carac` (`PROGRAMA_Ficha_carac`),
  KEY `INSTRUCTOR_Num_doc` (`INSTRUCTOR_Num_doc`)
) ENGINE=InnoDB AUTO_INCREMENT=1002 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `r_aprendizaje`
--

INSERT INTO `r_aprendizaje` (`Code_Res`, `INSTRUCTOR_Num_doc`, `PROGRAMA_Ficha_carac`, `Nom_Res`) VALUES
(1001, 100023489, 2067472, 'Mockups ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

DROP TABLE IF EXISTS `solicitudes`;
CREATE TABLE IF NOT EXISTS `solicitudes` (
  `Cod_s` int(10) NOT NULL,
  `Mensaje` varchar(50) NOT NULL,
  `INSTRUCTOR_Num_doc` int(11) NOT NULL,
  `APRENDIZ_N` int(11) NOT NULL,
  KEY `APRENDIZ_N` (`APRENDIZ_N`),
  KEY `INSTRUCTOR_Num_doc` (`INSTRUCTOR_Num_doc`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoinstructor`
--

DROP TABLE IF EXISTS `tipoinstructor`;
CREATE TABLE IF NOT EXISTS `tipoinstructor` (
  `idTipoInstructor` int(50) NOT NULL,
  `TipoInstructor` varchar(50) NOT NULL,
  PRIMARY KEY (`idTipoInstructor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipoinstructor`
--

INSERT INTO `tipoinstructor` (`idTipoInstructor`, `TipoInstructor`) VALUES
(1, 'Planta'),
(2, 'Contratista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `usuPassword` varchar(255) NOT NULL,
  `Correo_SENA` varchar(50) NOT NULL,
  `ROL_id_rol` int(10) NOT NULL,
  PRIMARY KEY (`Correo_SENA`),
  KEY `ROL_id_rol` (`ROL_id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuPassword`, `Correo_SENA`, `ROL_id_rol`) VALUES
('445', 'l1212@gmail.com', 2),
('222', 'l7@gmail.com', 2),
('111', 'lemili4ac@misena.edu.co', 2),
('44', 'lemiliac@misena.edu.co', 2),
('1111', 'lkcalderon46@misena.edu.co', 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD CONSTRAINT `aprendiz_ibfk_1` FOREIGN KEY (`INSTRUCTOR_Num_doc`) REFERENCES `instructor` (`Num_doc`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `aprendiz_ibfk_2` FOREIGN KEY (`PROGRAMA_Ficha_carac`) REFERENCES `programa` (`Ficha_carac`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `aprendiz_ibfk_3` FOREIGN KEY (`Estado_idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`ROL_id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
