-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2018 a las 12:20:46
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `pw` varchar(165) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `user`, `pw`) VALUES
(1, 'admin', 'admin'),
(2, '123', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compradores`
--

CREATE TABLE `compradores` (
  `comprador_id` int(5) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `telefono` int(10) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compradores`
--

INSERT INTO `compradores` (`comprador_id`, `nombre`, `direccion`, `telefono`, `email`) VALUES
(1, 'Juan Sanchez', 'calle lerdo', 777859625, 'dsfdsfsd@dfksfs.com'),
(2, 'juan herrera', 'dsfdsfdsf', 55555, 'juanherrera@fdsf.com'),
(3, 'juan martinez', 'puebla 28 tepic', 32658955, 'sdfsd@fdsfds.com'),
(4, 'Raul Ruelas', 'lerdo 28', 2147483647, 'Raulr@gmailc.om'),
(5, 'Martin Gonzalez', 'calzada del panteon 28', 2147483647, 'marginglez@gmail.com'),
(6, 'Juan Arias', 'puebla 28', 311526589, 'juan@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `nombre` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mensaje` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`nombre`, `email`, `mensaje`) VALUES
('dfdfd', 'sdfdsf@dfdsc', 'asda'),
('dfdfd', 'sdfdsf@dfdsc', 'asda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `puesto` varchar(150) NOT NULL,
  `sueldo` int(5) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `puesto`, `sueldo`, `direccion`, `telefono`, `fecha`) VALUES
(0, 'Juan Gomez Ruiz', 'Cortador', 200, 'Puebla 84', '3125698525', '2018-06-28'),
(1, 'Luis Gomez', 'Chofer', 200, 'Margarita 19 ', '3272310654', '2018-06-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fruta`
--

CREATE TABLE `fruta` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `hectareas` int(11) NOT NULL,
  `variedad` varchar(150) NOT NULL,
  `huerta` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fruta`
--

INSERT INTO `fruta` (`id`, `nombre`, `hectareas`, `variedad`, `huerta`) VALUES
(1, 'Mango', 15, 'Tommy', 'La barranca'),
(2, 'Mango', 15, 'Ataulfo', 'La barranca'),
(3, 'Mango', 10, 'Key', 'La Loma'),
(4, 'Platano', 10, 'Tabasco', 'La cevadilla'),
(5, 'Aguacate', 20, 'Hass', 'La cevadilla'),
(6, 'Aguacate', 5, 'Bola', 'La cevadilla'),
(7, 'Cafe', 10, 'Cafe', 'La loma'),
(9, 'Aguacate', 5, 'Bola', 'La barranca'),
(10, 'Platano', 10, 'Pera', 'La barranca'),
(11, 'Limon', 5, 'Persa', 'La bajada'),
(12, 'Yaka', 10, 'Yaka', 'El llano'),
(13, 'Mango', 3, 'Tommy', 'Tecopaste'),
(14, 'Mango', 2, 'Ataulfo', 'Tecopaste'),
(15, 'Mango', 10, 'Tommy', 'El crucero'),
(16, 'Mango', 5, 'Ataulfo', 'El crucero'),
(17, 'Platano', 5, 'Pera', 'El panteon'),
(18, 'Aguacate', 10, 'Hass', 'El panteon'),
(19, 'Limon', 5, 'Persa', 'El panteon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id` int(10) NOT NULL,
  `concepto` varchar(200) NOT NULL,
  `factura` varchar(50) NOT NULL,
  `total` int(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`id`, `concepto`, `factura`, `total`, `fecha`) VALUES
(1, 'Compra de fertilizante', 'F45895629', 1500, '2018-06-08'),
(2, 'Gasolina', 'F20158963', 400, '2018-06-05'),
(3, 'Pago a empelados', 'F59526482', 3800, '2018-05-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `huertas`
--

CREATE TABLE `huertas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `localizacion` varchar(100) NOT NULL,
  `fruta` varchar(100) NOT NULL,
  `hectareas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `huertas`
--

INSERT INTO `huertas` (`id`, `nombre`, `localizacion`, `fruta`, `hectareas`) VALUES
(1, 'La barranca', 'La yerba', 'Mango, Aguacate, Platano', 45),
(2, 'La Loma', 'Tecuitata', 'Mango, Cafe', 20),
(3, 'La cevadilla', 'La bajada', 'Platano, Aguacate', 35),
(4, 'La bajada', 'La bajada', 'Limon', 5),
(5, 'El llano', 'El llano', 'Yaka', 10),
(6, 'Tecopaste', 'La yerba', 'Mango', 5),
(7, 'Mango', 'El crucero', 'Jalcocotan', 15),
(8, 'El panteon', 'Jalcocotan', 'Platano, Aguacate, Limon', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `cuerpo` text,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id_post`, `titulo`, `autor`, `cuerpo`, `fecha`) VALUES
(1, 'Post de codeigniter', 'Juan', 'Este es un post sobre el framework de codeIgniter', '2012-05-28 08:54:59'),
(2, 'Post de php orientado a objetos', 'Manuel Perez', 'Este es un post sobre php orientado a objetos', '2012-05-28 08:56:20'),
(3, 'Registro de usuarios con php', 'Jose Luís', 'En este post haremos un registro de usuarios con php orientado a objetos', '2012-05-28 08:57:29'),
(4, 'Login de usuarios con php', 'Manuel', 'Esta vez crearemos un login de usuarios con php', '2012-05-28 09:22:42'),
(5, 'Contar las visitas que tiene mi web', 'Jose Luís', 'En este post haremos un contador de visitas que tiene nuestra web', '2012-05-28 09:22:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(10) NOT NULL,
  `fruta` varchar(50) NOT NULL,
  `calidad` varchar(150) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `origen` varchar(100) NOT NULL,
  `pago` varchar(150) NOT NULL,
  `precio_unitario` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `comprador` varchar(150) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fruta`, `calidad`, `cantidad`, `origen`, `pago`, `precio_unitario`, `total`, `comprador`, `fecha`) VALUES
(1, 'Mango Ataulfo', 'Primera', 10, 'La loma', 'Pagado', 100, 1000, 'Luis Torres', '2018-06-21'),
(2, 'Platano Pera', 'Segunda', 500, 'La barranca', 'Pagado', 5, 2500, 'Juan', '2018-06-22'),
(3, 'Aguacate Bola', 'Primera', 800, 'La barranca', 'Pendiente', 10, 8000, 'Juan Suarez', '2018-06-07'),
(4, 'Limon Persa', 'Primera', 500, 'La barranca', 'Pagado', 10, 5000, 'Luis Suarez', '2018-06-05'),
(5, 'Mango Ataulfo', 'Primera', 50, 'La barranca', 'Pendiente', 200, 10000, 'Juan Arvizu', '2018-06-29'),
(7, 'Platano Pera', 'Tercera', 1000, 'La bajada', 'Pendiente', 5, 5000, 'Juan Torres', '2018-05-30'),
(8, 'Limon Persa', 'Persa', 500, 'La bajada', 'Pediente', 10, 5000, 'Luis Arellano', '2018-06-21'),
(9, 'Yaka', 'Primera', 600, 'El llano', 'Pendiente', 10, 6000, 'Jesus Gomez', '2018-06-29'),
(10, 'Cafe', 'Primera', 500, 'La loma', 'Pendiente', 7, 3500, 'Cafe SA', '2018-06-28'),
(11, 'Mango Ataulfo', 'Segunda', 50, 'La barranca', 'Pagado', 100, 5000, 'Manuel Carranza', '2018-06-28'),
(12, 'Aguacate Bola', 'Primera', 500, 'La cevadilla', 'Pendiente', 10, 5000, 'Luis Suarez', '2018-06-29'),
(13, 'Mango Tommy', 'Primera', 100, 'La barranca', 'Pendiente', 50, 5000, 'Luis Arellano', '2018-06-28'),
(14, 'Mango Tommy', 'Segunda', 50, 'La loma', 'Pagado', 30, 1500, 'Jose Arias', '2018-06-28'),
(15, 'Mango Key', 'Primera', 200, 'La loma', 'Pagado', 50, 10000, 'Jose Ruiz', '2018-06-28'),
(16, 'Mango Tommy', 'Primera', 50, 'Tecopaste', 'Pendiente', 50, 2500, 'Juan Arvizu', '2018-06-22'),
(17, 'Mango Ataulfo', 'Primera', 50, 'El crucero', 'Pagado', 200, 10000, 'Luis Torres', '2018-06-12'),
(18, 'Aguacate Hass', 'Primera', 1000, 'El panteon', 'Pagado', 10, 10000, 'Juan Dias', '2018-06-27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compradores`
--
ALTER TABLE `compradores`
  ADD PRIMARY KEY (`comprador_id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `fruta`
--
ALTER TABLE `fruta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `huertas`
--
ALTER TABLE `huertas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_venta` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
