-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2024 a las 07:59:16
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_pueba3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `idConsulta` int(11) NOT NULL,
  `fechaConsulta` varchar(18) DEFAULT NULL,
  `idCuestionario` int(11) DEFAULT NULL,
  `idResultado` int(11) DEFAULT NULL,
  `idFormularioSociodemografico` int(11) DEFAULT NULL,
  `idAlumno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dimensiones`
--

CREATE TABLE `dimensiones` (
  `idDimension` tinyint(4) NOT NULL,
  `nombreDimension` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dimensiones`
--

INSERT INTO `dimensiones` (`idDimension`, `nombreDimension`) VALUES
(1, 'Motivación Intrínseca'),
(2, 'Auto eficacia'),
(3, 'Ansiedad ante evaluaciones'),
(4, 'Uso de estrategias metacognitivas'),
(5, 'Auto regulación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_sociodemografico`
--

CREATE TABLE `formulario_sociodemografico` (
  `idFormulario` int(11) NOT NULL,
  `carrera` varchar(100) DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `edad` tinyint(4) DEFAULT NULL,
  `nacionalidad` varchar(100) DEFAULT NULL,
  `carreraPrimeraOpcion` varchar(100) DEFAULT NULL,
  `convivencia` varchar(100) DEFAULT NULL,
  `tiempoDeTrasladoHastaLaEscuela` varchar(100) DEFAULT NULL,
  `carreraDeProcedencia` varchar(100) DEFAULT NULL,
  `razonParaElegir` varchar(250) DEFAULT NULL,
  `condicionMental` varchar(250) DEFAULT NULL,
  `beneficioDeGratuidad` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_cuestionario_mslq`
--

CREATE TABLE `preguntas_cuestionario_mslq` (
  `idPregunta` tinyint(4) NOT NULL,
  `pregunta` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `preguntas_cuestionario_mslq`
--

INSERT INTO `preguntas_cuestionario_mslq` (`idPregunta`, `pregunta`) VALUES
(1, 'Prefiero las materias que son difíciles o desafiantes, porque aprendo cosas nuevas.'),
(2, 'A diferencia de otras personas, yo siempre espero rendir bien.'),
(3, 'Me pongo tan nervioso en las evaluaciones, que no puedo recordar la información que aprendí.'),
(4, 'Para mí es importante entender lo que se enseña en las clases.'),
(5, 'Me gusta lo que aprendo en clases.'),
(6, 'Sé que entiendo bien las ideas que se dan a conocer en las asignaturas.'),
(7, 'Soy capaz de utilizar lo que aprendo en una asignatura para aplicarlo a otras.'),
(8, 'Siempre espero rendir bien en mis clases.'),
(9, 'Creo que soy un buen estudiante.'),
(10, 'Siempre investigo acerca de temas de los cuales aprenderé cosas nuevas, incluso si son difíciles o requieren más trabajo.'),
(11, 'Tengo certeza de que puedo hacer un buen trabajo en los problemas y tareas que se me dan en las diferentes asignaturas.'),
(12, 'Cuando rindo una evaluación, me siento incómodo y alterado.'),
(13, 'Siento que tendré buenas calificaciones en mis asignaturas.'),
(14, 'Incluso cuando me va mal en una evaluación, trato de aprender de mis errores.'),
(15, 'Creo que lo que se me enseña en mis asignaturas es importante para mí.'),
(16, 'Mis técnicas y hábitos de estudio son muy buenos.'),
(17, 'Creo que lo que aprendemos en las diferentes asignaturas es siempre interesante.'),
(18, 'Comparado con otros estudiantes, creo que sé muchas cosas.'),
(19, 'Sé que lograré aprender las materias de mis asignaturas.'),
(20, 'Siempre me preocupo mucho ante una evaluación.'),
(21, 'Entender mis materias es muy importante para mí.'),
(22, 'Cuando rindo una evaluación pienso en lo mal que me está yendo.'),
(23, 'Cuando estudio para una prueba, trato de relacionar la información de clases y la información de los libros.'),
(24, 'Cuando hago trabajos en casa, trato de recordar lo que dijo el profesor en clases para poder realizar la tarea correctamente.'),
(25, 'Constantemente me hago preguntas para asegurarme de que aprendí bien lo que estudié.'),
(26, 'Me es difícil poder determinar cuáles son las ideas principales en las cosas que leo.'),
(27, 'Cuando la materia es difícil, me rindo o simplemente trabajo en las partes más fáciles.'),
(28, 'Cuando estudio, elaboro las ideas importantes con mis propias palabras (\',no las aprendo de manera textual).'),
(29, 'Siempre trato de entender lo que el profesor dice, incluso si para mí no tiene sentido o es difícil.'),
(30, 'Cuando estudio para una prueba, trato de recordar lo más que se puede.'),
(31, 'Cuando estudio reviso mis apuntes para ayudarme a recordar el resto de la materia.'),
(32, 'Hago ejercicios y completo cuestionarios o guías de trabajo incluso cuando no tengo que hacerlo por obligación.'),
(33, 'Incluso cuando la materia es difícil o incomprensible, trato de seguir trabajando hasta terminar.'),
(34, 'Cuando estudio para una prueba, práctica repitiendo los conceptos una y otra vez.'),
(35, 'Antes de empezar a estudiar pienso en las cosas que necesitaré hacer para aprender la materia.'),
(36, 'Uso lo que he aprendido anteriormente en otras materias, libros o tareas para entender materias nuevas.'),
(37, 'Usualmente me encuentro leyendo algo para mis clases, pero no he entendido nada de lo que estoy leyendo.'),
(38, 'Usualmente, cuando el profesor habla, yo pienso en otras cosas y realmente no pongo atención a lo que está diciendo.'),
(39, 'Cuando estudio una materia, trato de relacionar todos los temas para que tengan sentido.'),
(40, 'Cuando leo, me detengo de vez en cuando y vuelvo atrás para leer de nuevo lo que ya leí.'),
(41, 'Cuando estudio una materia, me digo a mi mismo las palabras una y otra vez para ayudarme a recordar.'),
(42, 'Subrayo las ideas en mis libros y apuntes para ayudarme a estudiar.'),
(43, 'Me esfuerzo mucho por conseguir buenas calificaciones, incluso si no me gusta la asignatura.'),
(44, 'Cuando leo, trato de conectar aquello que estoy leyendo con lo que ya conozco, sé y manejo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta_dimension`
--

CREATE TABLE `pregunta_dimension` (
  `idPregunta` tinyint(4) DEFAULT NULL,
  `idDimension` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pregunta_dimension`
--

INSERT INTO `pregunta_dimension` (`idPregunta`, `idDimension`) VALUES
(1, 2),
(2, 1),
(3, 3),
(4, 2),
(5, 2),
(6, 1),
(7, 2),
(8, 1),
(9, 1),
(10, 2),
(11, 1),
(12, 3),
(13, 1),
(14, 2),
(15, 2),
(16, 1),
(17, 2),
(18, 1),
(19, 1),
(20, 3),
(21, 2),
(22, 3),
(23, 4),
(24, 4),
(25, 5),
(26, 4),
(27, 5),
(28, 4),
(29, 4),
(30, 4),
(31, 4),
(32, 5),
(33, 5),
(34, 4),
(35, 5),
(36, 4),
(37, 5),
(38, 5),
(39, 4),
(40, 5),
(41, 4),
(42, 4),
(43, 5),
(44, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas_de_cuestionario`
--

CREATE TABLE `respuestas_de_cuestionario` (
  `idCuestionario` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idPregunta` tinyint(4) DEFAULT NULL,
  `respuesta` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `respuestas_de_cuestionario`
--

INSERT INTO `respuestas_de_cuestionario` (`idCuestionario`, `idUsuario`, `idPregunta`, `respuesta`) VALUES
(1, 0, 1, 1),
(2, 0, 2, 1),
(3, 0, 3, 2),
(4, 0, 4, 2),
(5, 0, 5, 3),
(6, 0, 6, 3),
(7, 0, 7, 4),
(8, 0, 8, 4),
(9, 0, 9, 5),
(10, 0, 10, 5),
(11, 0, 11, 6),
(12, 0, 12, 7),
(13, 0, 13, 7),
(14, 0, 14, 1),
(15, 0, 15, 1),
(16, 0, 16, 2),
(17, 0, 17, 2),
(18, 0, 18, 3),
(19, 0, 19, 3),
(20, 0, 20, 4),
(21, 0, 21, 4),
(22, 0, 22, 5),
(23, 0, 23, 5),
(24, 0, 24, 6),
(25, 0, 25, 6),
(26, 0, 26, 7),
(27, 0, 27, 7),
(28, 0, 28, 1),
(29, 0, 29, 1),
(30, 0, 30, 2),
(31, 0, 31, 2),
(32, 0, 32, 3),
(33, 0, 33, 3),
(34, 0, 34, 4),
(35, 0, 35, 4),
(36, 0, 36, 5),
(37, 0, 37, 5),
(38, 0, 38, 6),
(39, 0, 39, 6),
(40, 0, 40, 7),
(41, 0, 41, 7),
(42, 0, 42, 1),
(43, 0, 43, 1),
(44, 0, 44, 2),
(45, 0, 1, 1),
(46, 0, 2, 1),
(47, 0, 3, 2),
(48, 0, 4, 2),
(49, 0, 5, 3),
(50, 0, 6, 3),
(51, 0, 7, 4),
(52, 0, 8, 4),
(53, 0, 9, 5),
(54, 0, 10, 5),
(55, 0, 11, 6),
(56, 0, 12, 7),
(57, 0, 13, 7),
(58, 0, 14, 1),
(59, 0, 15, 1),
(60, 0, 16, 2),
(61, 0, 17, 2),
(62, 0, 18, 3),
(63, 0, 19, 3),
(64, 0, 20, 4),
(65, 0, 21, 4),
(66, 0, 22, 5),
(67, 0, 23, 5),
(68, 0, 24, 6),
(69, 0, 25, 6),
(70, 0, 26, 7),
(71, 0, 27, 7),
(72, 0, 28, 1),
(73, 0, 29, 1),
(74, 0, 30, 2),
(75, 0, 31, 2),
(76, 0, 32, 3),
(77, 0, 33, 3),
(78, 0, 34, 4),
(79, 0, 35, 4),
(80, 0, 36, 5),
(81, 0, 37, 5),
(82, 0, 38, 6),
(83, 0, 39, 6),
(84, 0, 40, 7),
(85, 0, 41, 7),
(86, 0, 42, 1),
(87, 0, 43, 1),
(88, 0, 44, 2),
(89, 0, 1, 1),
(90, 0, 2, 3),
(91, 0, 3, 3),
(92, 0, 4, 3),
(93, 0, 5, 3),
(94, 0, 6, 3),
(95, 0, 7, 3),
(96, 0, 8, 3),
(97, 0, 9, 3),
(98, 0, 10, 3),
(99, 0, 11, 3),
(100, 0, 12, 3),
(101, 0, 13, 3),
(102, 0, 14, 3),
(103, 0, 15, 3),
(104, 0, 16, 3),
(105, 0, 17, 3),
(106, 0, 18, 3),
(107, 0, 19, 3),
(108, 0, 20, 3),
(109, 0, 21, 3),
(110, 0, 22, 3),
(111, 0, 23, 3),
(112, 0, 24, 3),
(113, 0, 25, 3),
(114, 0, 26, 3),
(115, 0, 27, 3),
(116, 0, 28, 3),
(117, 0, 29, 2),
(118, 0, 30, 2),
(119, 0, 31, 2),
(120, 0, 32, 2),
(121, 0, 33, 2),
(122, 0, 34, 2),
(123, 0, 35, 2),
(124, 0, 36, 2),
(125, 0, 37, 2),
(126, 0, 38, 2),
(127, 0, 39, 2),
(128, 0, 40, 2),
(129, 0, 41, 2),
(130, 0, 42, 2),
(131, 0, 43, 1),
(132, 0, 44, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados_de_encuesta`
--

CREATE TABLE `resultados_de_encuesta` (
  `idResultado` int(11) NOT NULL,
  `dimension` tinyint(4) DEFAULT NULL,
  `valorDimension` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` tinyint(4) NOT NULL,
  `nombreRol` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `nombreRol`) VALUES
(1, 'Administrador'),
(2, 'Coordinador'),
(3, 'Alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `rol` tinyint(4) DEFAULT NULL,
  `rutUsuario` varchar(20) DEFAULT NULL,
  `contrasena` varchar(15) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `nombres` varchar(250) DEFAULT NULL,
  `apellidos` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `rol`, `rutUsuario`, `contrasena`, `estado`, `nombres`, `apellidos`) VALUES
(1, 1, '8135176-7', '5176', 0, 'usuario admin', 'apellido admin'),
(4, 2, '19152977-4', '2977', 0, 'usuario coordinador', 'apellido coordinador'),
(5, 3, '19940449-0', '0449', 0, 'usuario alumno', 'apellido alumno');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`idConsulta`);

--
-- Indices de la tabla `dimensiones`
--
ALTER TABLE `dimensiones`
  ADD PRIMARY KEY (`idDimension`);

--
-- Indices de la tabla `formulario_sociodemografico`
--
ALTER TABLE `formulario_sociodemografico`
  ADD PRIMARY KEY (`idFormulario`);

--
-- Indices de la tabla `preguntas_cuestionario_mslq`
--
ALTER TABLE `preguntas_cuestionario_mslq`
  ADD PRIMARY KEY (`idPregunta`);

--
-- Indices de la tabla `respuestas_de_cuestionario`
--
ALTER TABLE `respuestas_de_cuestionario`
  ADD PRIMARY KEY (`idCuestionario`);

--
-- Indices de la tabla `resultados_de_encuesta`
--
ALTER TABLE `resultados_de_encuesta`
  ADD PRIMARY KEY (`idResultado`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `idConsulta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formulario_sociodemografico`
--
ALTER TABLE `formulario_sociodemografico`
  MODIFY `idFormulario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas_cuestionario_mslq`
--
ALTER TABLE `preguntas_cuestionario_mslq`
  MODIFY `idPregunta` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `respuestas_de_cuestionario`
--
ALTER TABLE `respuestas_de_cuestionario`
  MODIFY `idCuestionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT de la tabla `resultados_de_encuesta`
--
ALTER TABLE `resultados_de_encuesta`
  MODIFY `idResultado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
