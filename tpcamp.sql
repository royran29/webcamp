-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2018 a las 22:23:12
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpcamp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id_admin`, `usuario`, `nombre`, `password`) VALUES
(1, 'royran29', 'Royran Castro', '$2y$12$hC7ZDWvIP4OXVYKkRuHXjuEO/b3MAS3uY9/KicYC0mir/oFJpK64q'),
(2, 'rocas', 'Royran Castro', '$2y$12$7tB3X8nx.UCjFqO5nM9z2uvnEaXg1t3SD9djwtVaXwAdbFF9kr.Va'),
(4, 'royran29@gmail.com', 'TPCAMP Newsletter', '$2y$12$n0PzzysX93AQGe7VhR6vK.iJwxNGeYvTLwphb4esoFaivuJea6OG2'),
(5, 'roy', 'TPCA', '$2y$12$dBUElPDdc/8w9xQEdcCJ9eSu0lxFUC8U87go7Y/IkkMQ369tbTbI6'),
(6, 'qwe', 'qer', '$2y$12$RhHRQrt.eDdUkv9H0Dy5VudZPqV7IPqMG6y.FrwGpstLWyTiCXvPO'),
(7, 'asd', 'asdf', '$2y$12$n.kgyuyz9xtrEmhRxshUMucurNOn/6L/li4KWJ90Xmk//n5R5BMTy'),
(8, 'dfg', 'dfg', '$2y$12$VAAG8hmFSDoUxS5xeWTsg.VFJyn5tRzu1RC29dnEikSpL82ylLYfW'),
(9, 'cbn', 'cbvn', '$2y$12$qM4q7twcOheDwZQPtk4bb.D0Z9.b/01iRK9Bfz7.45MCroFX2ySMO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_evento`
--

CREATE TABLE `categoria_evento` (
  `id_categoria` tinyint(10) NOT NULL,
  `cat_evento` varchar(50) NOT NULL,
  `icono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria_evento`
--

INSERT INTO `categoria_evento` (`id_categoria`, `cat_evento`, `icono`) VALUES
(1, 'Seminar', 'fa-university'),
(2, 'Conferences', 'fa-comments'),
(3, 'Workshops', 'fa-code');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `evento_id` tinyint(10) NOT NULL,
  `nombre_evento` varchar(60) NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora` time NOT NULL,
  `clave` varchar(10) NOT NULL,
  `id_cat_evento` tinyint(10) NOT NULL,
  `id_inv` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`evento_id`, `nombre_evento`, `fecha_evento`, `hora`, `clave`, `id_cat_evento`, `id_inv`) VALUES
(2, 'Responsive Web Design', '2018-12-09', '10:00:00', 'ws_01', 3, 1),
(3, 'Flexbox', '2018-12-09', '12:00:00', 'ws_02', 3, 2),
(4, 'HTML5 and CSS3', '2018-12-09', '14:00:00', 'ws_03', 3, 3),
(5, 'Drupal', '2018-12-09', '17:00:00', 'ws_04', 3, 4),
(6, 'WordPress', '2018-12-09', '19:00:00', 'ws_05', 3, 5),
(7, 'How to be a freelancer', '2018-12-09', '10:00:00', 'conf_01', 2, 6),
(8, 'Technologies of the Future', '2018-12-09', '17:00:00', 'conf_02', 2, 1),
(9, 'Security on the Web', '2018-12-09', '19:00:00', 'conf_03', 2, 2),
(10, 'UI and UX design for mobile I', '2018-12-09', '10:00:00', 'sem_01', 1, 6),
(11, 'Angular 2', '2018-12-10', '10:00:00', 'ws_06', 3, 1),
(12, 'PHP and MySQL', '2018-12-10', '12:00:00', 'ws_07', 3, 2),
(13, 'Advanced JavaScript', '2018-12-10', '14:00:00', 'ws_08', 3, 3),
(14, 'SEO en Google', '2018-12-10', '17:00:00', 'ws_09', 3, 4),
(15, 'From Photoshop to HTML5 and CSS3', '2018-12-10', '19:00:00', 'ws_10', 3, 5),
(16, 'Intermediate and Advanced PHP', '2018-12-10', '21:00:00', 'ws_11', 3, 6),
(17, 'How to create an online store that sells millions in a few d', '2018-12-10', '10:00:00', 'conf_04', 2, 6),
(18, 'The best places to find work', '2018-12-10', '17:00:00', 'conf_05', 2, 1),
(19, 'Steps to create a profitable business', '2018-12-10', '19:00:00', 'conf_06', 2, 2),
(20, 'Learn to Schedule in a Morning', '2018-12-10', '10:00:00', 'sem_02', 1, 3),
(21, 'UI and UX design for mobile II', '2018-12-10', '17:00:00', 'sem_03', 1, 5),
(22, 'Laravel', '2018-12-11', '10:00:00', 'ws_12', 3, 1),
(23, 'Create your own API', '2018-12-11', '12:00:00', 'ws_13', 3, 2),
(24, 'jQuery', '2018-12-11', '14:00:00', 'ws_14', 3, 3),
(25, 'Creating WordPress Templates', '2018-12-11', '17:00:00', 'ws_15', 3, 4),
(26, 'Virtual Stores in Magento', '2018-12-11', '19:00:00', 'ws_16', 3, 5),
(27, 'How to do Online Marketing', '2018-12-11', '10:00:00', 'conf_07', 2, 6),
(28, 'With what language should I start?', '2018-12-11', '17:00:00', 'conf_08', 2, 2),
(29, 'Frameworks and Open Source Libraries', '2018-12-11', '19:00:00', 'conf_09', 2, 3),
(30, 'Creating an App on Android in a morning', '2018-12-11', '10:00:00', 'sem_04', 1, 4),
(31, 'Creating an App on iOS in an afternoon', '2018-12-11', '17:00:00', 'sem_05', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitados`
--

CREATE TABLE `invitados` (
  `invitado_id` tinyint(4) NOT NULL,
  `nombre_invitado` varchar(30) NOT NULL,
  `apellido_invitado` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `url_imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `invitados`
--

INSERT INTO `invitados` (`invitado_id`, `nombre_invitado`, `apellido_invitado`, `descripcion`, `url_imagen`) VALUES
(1, 'Rafael', 'Bautista', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et nibh consectetur, lobortis nisi id.', 'invitado1.jpg'),
(2, 'Shari', 'Herrera', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et nibh consectetur, lobortis nisi id.', 'invitado2.jpg'),
(3, 'Gregorio', 'Sanchez', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et nibh consectetur, lobortis nisi id.', 'invitado3.jpg'),
(4, 'Susana', 'Rivera', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et nibh consectetur, lobortis nisi id.', 'invitado4.jpg'),
(5, 'Harold', 'Gracia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et nibh consectetur, lobortis nisi id.', 'invitado5.jpg'),
(6, 'Susan', 'Sanchez', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan luctus magna vitae rhoncus. Pellentesque.', 'invitado6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regalos`
--

CREATE TABLE `regalos` (
  `id_regalo` int(11) NOT NULL,
  `nombre_regalo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `regalos`
--

INSERT INTO `regalos` (`id_regalo`, `nombre_regalo`) VALUES
(1, 'Bracelet'),
(2, 'Stickers'),
(3, 'Pencil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrados`
--

CREATE TABLE `registrados` (
  `id_registrado` bigint(20) UNSIGNED NOT NULL,
  `nombre_registrado` varchar(50) NOT NULL,
  `apellido_registrado` varchar(50) NOT NULL,
  `email_registrado` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `pases_articulos` longtext NOT NULL,
  `talleres_registrados` longtext NOT NULL,
  `regalo` int(11) NOT NULL,
  `total_pagado` varchar(50) NOT NULL,
  `pagado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registrados`
--

INSERT INTO `registrados` (`id_registrado`, `nombre_registrado`, `apellido_registrado`, `email_registrado`, `fecha_registro`, `pases_articulos`, `talleres_registrados`, `regalo`, `total_pagado`, `pagado`) VALUES
(1, 'Royran', 'Castro', 'royran29@gmail.com', '2018-04-26 21:37:45', '{"one_day":1,"full_pass":2,"shirts":2,"stickers":1}', '{"events":["workshop_01","workshop_02","workshop_03","conf_02","conf_03","workshop_09","workshop_10","workshop_11","conf_04","sem_02","sem_03","workshop_13","workshop_14","conf_07","sem_04","sem_05"]}', 1, '150.6', 0),
(2, 'Cristina ', 'Castillo', 'royran@gmail.com', '2018-04-26 21:48:51', '{"one_day":1,"shirts":2,"stickers":1}', '{"events":["workshop_01","workshop_02","workshop_03","workshop_04","workshop_05","conf_02","conf_03"]}', 3, '50.6', 0),
(3, 'Royran Castro', 'Castro', 'royran29@gmail.com', '2018-05-16 23:15:09', '[]', '{"events":["workshop_05","conf_01","conf_06","sem_02","conf_08","conf_09"]}', 2, '136.3', 0),
(4, 'Royran Castro Padilla', 'Castro Padilla', 'royran29@gmail.com', '2018-05-17 00:19:21', '[]', '{"events":["conf_02","conf_03"]}', 1, '41.3', 0),
(5, 'Royran Castro Padilla', 'Castro Padilla', 'royran29@gmail.com', '2018-05-17 21:35:58', '{"one_day":1,"full_pass":1,"pass_2days":1,"shirts":1,"stickers":1}', '{"events":["workshop_01","workshop_05","conf_01","sem_01"]}', 1, '41.3', 0),
(6, 'Royran Castro Padilla', 'Castro Padilla', 'royran29@gmail.com', '2018-05-17 21:36:52', '{"one_day":1,"full_pass":1,"pass_2days":1,"shirts":1,"stickers":1}', '{"events":["workshop_01","workshop_02","conf_02","conf_03","sem_01"]}', 1, '41.3', 0),
(7, 'Royran Castro', 'Castro', 'royran29@gmail.com', '2018-05-17 21:51:29', '{"one_day":1,"full_pass":1,"pass_2days":1,"shirts":1,"stickers":1}', '{"events":["workshop_01","workshop_02","conf_01","sem_01","workshop_06","workshop_08","conf_05","sem_02","workshop_15","conf_09","sem_04"]}', 1, '91.3', 0),
(8, 'Royran Castro Padilla', 'Castro Padilla', 'royran29@gmail.com', '2018-05-17 22:16:31', '{"one_day":1,"full_pass":1,"pass_2days":1,"shirts":1,"stickers":1}', '{"events":["workshop_01","workshop_02","conf_01","sem_01"]}', 3, '41.3', 0),
(9, '', '', '', '2018-05-17 22:18:51', '{"one_day":1,"full_pass":1,"pass_2days":1,"shirts":1,"stickers":1}', '{"events":["workshop_03","workshop_04","conf_02","sem_01"]}', 2, '41.3', 0),
(10, '', '', '', '2018-05-17 22:19:32', '{"one_day":1,"full_pass":1,"pass_2days":1,"shirts":1,"stickers":1}', '{"events":["workshop_03","workshop_04","conf_02","sem_01"]}', 2, '41.3', 0),
(11, 'Royran Castro Padilla', 'Castro Padilla', 'royran29@gmail.com', '2018-05-17 22:20:12', '{"one_day":1,"full_pass":1,"pass_2days":1,"shirts":1,"stickers":1}', '{"events":["workshop_03","workshop_04","conf_01","conf_02"]}', 3, '41.3', 0),
(12, 'Roiran Castro Padilla - CR', 'CR', 'royran29@gmail.com', '2018-05-17 22:24:45', '{"one_day":1,"full_pass":1,"pass_2days":1,"shirts":1,"stickers":1}', '{"events":["workshop_02","workshop_03","conf_01","conf_02","sem_01"]}', 2, '41.3', 0),
(13, 'Roiran Castro Padilla - CR', 'CR', 'royran29@gmail.com', '2018-05-17 22:27:45', '{"one_day":1,"full_pass":1,"pass_2days":1,"shirts":1,"stickers":1}', '{"events":["workshop_02","workshop_03","conf_01","conf_02","sem_01"]}', 2, '41.3', 0),
(14, 'Roiran Castro Padilla - CR', 'CR', 'royran29@gmail.com', '2018-05-17 22:32:33', '{"one_day":1,"full_pass":1,"pass_2days":1,"shirts":1,"stickers":1}', '{"events":["workshop_02","workshop_03","conf_01","conf_02","sem_01"]}', 2, '41.3', 0),
(15, 'Roiran Castro Padilla - CR', 'CR', 'royran29@gmail.com', '2018-05-17 22:34:10', '{"one_day":1,"full_pass":1,"pass_2days":1,"shirts":1,"stickers":1}', '{"events":["workshop_02","workshop_03","conf_01","conf_02","sem_01"]}', 2, '41.3', 0),
(16, 'Roiran Castro Padilla - CR', 'CR', 'royran29@gmail.com', '2018-05-17 22:36:51', '{"one_day":1,"full_pass":1,"pass_2days":1,"shirts":1,"stickers":1}', '{"events":["workshop_02","workshop_03","conf_01","conf_02","sem_01"]}', 2, '41.3', 0),
(17, 'Roiran Castro Padilla - CR', 'CR', 'royran29@gmail.com', '2018-05-17 22:42:19', '{"one_day":1,"full_pass":1,"pass_2days":1,"shirts":1,"stickers":1}', '{"events":["workshop_02","workshop_03","conf_01","conf_02","sem_01"]}', 2, '41.3', 0),
(18, 'Royran ', 'Castro', 'royran29@gmail.com', '2018-05-18 00:01:54', '{"one_day":1,"full_pass":1,"pass_2days":1,"shirts":2,"stickers":3}', '{"events":["workshop_01","workshop_02","workshop_03","conf_03","sem_01","workshop_07","workshop_10","conf_04","sem_03","workshop_13","workshop_15","conf_08","sem_04"]}', 3, '289.6', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`evento_id`),
  ADD KEY `id_cat_evento` (`id_cat_evento`),
  ADD KEY `id_inv` (`id_inv`);

--
-- Indices de la tabla `invitados`
--
ALTER TABLE `invitados`
  ADD PRIMARY KEY (`invitado_id`);

--
-- Indices de la tabla `regalos`
--
ALTER TABLE `regalos`
  ADD PRIMARY KEY (`id_regalo`);

--
-- Indices de la tabla `registrados`
--
ALTER TABLE `registrados`
  ADD PRIMARY KEY (`id_registrado`),
  ADD KEY `regalo` (`regalo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `categoria_evento`
--
ALTER TABLE `categoria_evento`
  MODIFY `id_categoria` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `evento_id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `invitados`
--
ALTER TABLE `invitados`
  MODIFY `invitado_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `regalos`
--
ALTER TABLE `regalos`
  MODIFY `id_regalo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `registrados`
--
ALTER TABLE `registrados`
  MODIFY `id_registrado` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`id_cat_evento`) REFERENCES `categoria_evento` (`id_categoria`),
  ADD CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`id_inv`) REFERENCES `invitados` (`invitado_id`);

--
-- Filtros para la tabla `registrados`
--
ALTER TABLE `registrados`
  ADD CONSTRAINT `registrados_ibfk_1` FOREIGN KEY (`regalo`) REFERENCES `regalos` (`id_regalo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
