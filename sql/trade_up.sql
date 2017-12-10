-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2017 a las 00:22:57
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `trade_up`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `producto` varchar(25) NOT NULL,
  `precio` int(6) NOT NULL,
  `descrip` varchar(300) NOT NULL,
  `img` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `precio`, `descrip`, `img`) VALUES
(1, 'Motorola G5 plus', 5499, 'Pantalla 5.2", 1080 x 1920 pixels \r\nProcesador Snapdragon 625 2GHz \r\n2GB/3GB/4GB RAM \r\n32GB/64GB, microSD \r\nCámara: 12 MP \r\nOS: Android 7.0 \r\nPerfil: 7.7 mm \r\nPeso: 155 g', '3.jpg'),
(2, 'Samsung J7', 4999, 'Pantalla 5.5", 720 x 1280 pixels\r\nProcesador Exynos 7580 1.5GHz / Snapdragon 615 1.4GHz\r\n1.5GB RAM\r\n16GB, microSD\r\nCámara: 13 MP\r\nOS: Android 5.1\r\nPerfil: 7.5 mm\r\nPeso: 171 g', '1.jpg'),
(3, 'Sony Xperia C4', 3699, 'Pantalla 5.5", 1080 x 1920 pixels\r\nProcesador Mediatek MT6752 1.7GHz\r\n2GB RAM\r\n16GB, microSD\r\nCámara: 13 MP\r\nOS: Android 5.1.1\r\nPerfil: 7.9 mm\r\nPeso: 147 g', '2.jpg'),
(4, 'Pantalón Thinner', 399, 'Modelo: Stright\r\nColor: Negro', '4.jpg'),
(5, 'Chamarra York Team', 719, 'Material: 100% poliéster\r\nColor: Negro\r\nEstilo: Moda\r\nTipo de forro: Poliéster', '5.jpg'),
(6, 'Suéter Walstreet', 389, 'Material: 100% algodón\r\nColor: Gris\r\nEstilo: Casual moda\r\nTipo de forro: Algodón\r\nDetalles: Cuello V', '6.jpg'),
(7, 'Abrigo Sahara', 529, 'Composición: 100% poliéster\r\nColor: Negro\r\nEstilo: Juvenil\r\nContraste: 50% poliéster', '9.jpg'),
(8, 'Chaleco Thinner', 379, 'Composición: 100% acrílico\r\nColor: Negro\r\nEstilo: Juvenil', '7.jpg'),
(9, 'Pantalón Boy London', 419, 'Composición: 2% elastano, 20% poliéster, 78% algodón\r\nModelo: Skinny\r\nColor: Negro', '8.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_u` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `ap_pat` varchar(15) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `img_perfil` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(32) NOT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
