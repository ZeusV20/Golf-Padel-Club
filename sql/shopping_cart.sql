-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2024 at 06:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `stock` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `image`) VALUES
(14, 'Pala de Pickleball Vantage', '¡Eleva tu juego de pickleball al siguiente nivel con nuestra pala de pickleball vantage de fibra de carbono, diseñada especialmente para jugadores principiantes e intermedios! En PadelStore.mx, estamos emocionados de presentarte una pala que combina durabilidad, potencia y control, todo a un precio excepcional.', 1280, 10, 'uploads/Captura de pantalla 2024-11-22 200458.png'),
(15, 'RaqPaqPro Azul – Incluye funda', 'Con esta pala, experimentarás un balance excelente entre potencia de la pala y el control en tu muñeca, ideal para jugadores que buscan una pala que cumpla con sus exigencias de golpeo.', 1490, 10, 'uploads/Captura de pantalla 2024-11-22 200926.png'),
(16, 'RaqPaqPro Naranja/Azul – Incluye funda', 'Con esta pala, experimentarás un balance excelente entre potencia de la pala y el control en tu muñeca, ideal para jugadores que buscan una pala que cumpla con sus exigencias de golpeo.', 1490, 10, 'uploads/Captura de pantalla 2024-11-22 201022.png'),
(17, 'RaqPaqPro Rosa – Incluye funda', 'Con la pala raqpaqpro rosa, experimentarás un balance excelente entre potencia de la pala y el control en tu muñeca, ideal para jugadores que buscan una pala que cumpla con sus exigencias de golpeo.', 1490, 10, 'uploads/Captura de pantalla 2024-11-22 201051.png'),
(18, 'Pala de Pádel Vantage Black Thunder (Fibra de Carbono)', 'La fibra de carbono hace que la pala de pádel Black Thunder sea duradera, resistente a golpes y arañazos, pero al mismo tiempo ligera y con la potencia suficiente para generar golpes de poder sin mayor esfuerzo.', 1530, 10, 'uploads/Captura de pantalla 2024-11-22 201224.png'),
(19, 'Pala de Pádel Vantage PRO300 fibra de carbono, incluye funda', 'Pala de pádel Vantage PRO300. Fibra de carbono y centro de EVA para potencia y control. Unisex, ideal para jugadores intermedios', 1750, 10, 'uploads/Captura de pantalla 2024-11-22 201355.png'),
(20, 'Starvie – Metheora, Pala de Pickleball', 'La Starvie Metheora es una pala de pickleball diseñada tanto para jugadores nuevos como para profesionales, ofreciendo una combinación única de potencia y capacidad para generar efectos.', 1900, 10, 'uploads/Captura de pantalla 2024-11-22 201456.png'),
(21, 'Vantage STORM100 Fibra de carbono12K – incluye funda', 'Pala de pádel Vantage PRO300. Fibra de carbono y centro de EVA para potencia y control. Unisex, ideal para jugadores intermedios', 2190, 10, 'uploads/Captura de pantalla 2024-11-22 201644.png'),
(22, 'Playera deportiva Dry Fit para Hombre Marca Bolea CD01', 'Fabricada con los materiales más cómodos y eficientes para el juego de pádel, además de contar con un diseño con mucho estilo, la playera deportiva dry fit Bolea aportará su granito de arena a que ganes en tus juegos.', 749, 10, 'uploads/Captura de pantalla 2024-11-22 202350.png'),
(23, 'Playera deportiva para Hombre Marca Bolea VN01', 'Fabricada con los materiales más cómodos y eficientes para el juego de pádel, además de contar con un diseño con mucho estilo, la playera deportiva Bolea aportará su granito de arena a que ganes en tus juegos.', 749, 10, 'uploads/Captura de pantalla 2024-11-22 202425.png'),
(24, 'Playera deportiva para Hombre marca Bolea', 'Fabricada con los materiales más cómodos y eficientes para el juego de pádel, además de contar con un diseño con mucho estilo, la playera deportiva Bolea aportará su granito de arena a que ganes en tus juegos.', 749, 10, 'uploads/Captura de pantalla 2024-11-22 202458.png'),
(25, 'Camiseta para Pádel Bullpadel Imotep 013 Turquesa', 'La camiseta IMOTEP 013  está diseñado en color turquesa, que combina fácilmente con tus shorts favoritos, además luce un diseño elegante y clásico que te proporciona niveles altos de confort y comodidad en todo momento de la competencia.', 820, 10, 'uploads/Captura de pantalla 2024-11-22 202610.png'),
(26, 'Blusa deportiva Dry Fit Marca Bolea Color Verde/Blanca', 'Fabricada con los materiales más cómodos y eficientes para el juego de pádel, además de contar con un diseño con mucho estilo, la blusa deportiva Bolea aportará su granito de arena a que ganes en tus juegos más importantes!', 649, 10, 'uploads/Captura de pantalla 2024-11-22 202714.png'),
(27, 'Blusa de Padel Femenina Marca Bolea Color Negro/Blanco', 'Fabricada con los materiales más cómodos y eficientes para el juego de pádel, además de contar con un diseño con mucho estilo, la blusa deportiva Bolea aportará su granito de arena a que ganes en tus juegos más importantes!', 649, 10, 'uploads/Captura de pantalla 2024-11-22 202747.png'),
(28, 'Blusa de Padel Femenina Marca Bolea Color Verde', 'Fabricada con los materiales más cómodos y eficientes para el juego de pádel, además de contar con un diseño con mucho estilo, la blusa deportiva Bolea aportará su granito de arena a que ganes en tus juegos más importantes!', 649, 10, 'uploads/Captura de pantalla 2024-11-22 202820.png'),
(29, 'Blusa Bullpadel Cicle 529 Naranja Mujer', 'Blusa de tirantes en tejido elástico melange con inserciones y logos a contraste.  Con acabado quicker-dry que ayuda a mantenerte seca.  Patrocinador oficial de World Padel Tour.', 1090, 10, 'uploads/Captura de pantalla 2024-11-22 202907.png'),
(30, 'Driver Ping G430 Max 10K', 'Palo 1', 14930, 3, 'uploads/Captura de pantalla 2024-11-22 203044.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
