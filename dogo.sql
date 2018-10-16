-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 08:54 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dogo`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `prod_name` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `prod_description` varchar(500) COLLATE latin1_spanish_ci DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `prod_name`, `price`, `prod_description`, `stock`, `id_brand`, `id_category`) VALUES
(1, 'Correa', '45', 'Es un coso', 100, 0, 1),
(2, 'Correa', '45', 'Es un coso', 100, 0, 1),
(3, 'Correa', '45', 'Es un coso', 100, 0, 1),
(4, 'Correa', '45', 'Es un coso', 100, 0, 1),
(5, 'CACA', '18000', '', 100, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `first_name` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `last_name` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `dni` int(8) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `email` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `pswd` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `street_address` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `apt_floor` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `zip_code` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `city` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `province` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `genre` varchar(1) COLLATE latin1_spanish_ci DEFAULT NULL,
  `user_role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `dni`, `phone`, `email`, `pswd`, `dob`, `street_address`, `apt_floor`, `zip_code`, `city`, `province`, `genre`, `user_role`) VALUES
(1, 'Prueba', 'Prueba', NULL, NULL, 'prueba@vadca.com', '123efasdgr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 'OTRA', 'PRUEBA', 0, 0, 'ASDSA@ASDAS.COM', '$2y$10$/lbTvblUKjvPKLnA5w3y8e3SVqba8FdPnCrO.koPUhQWM8UqVnEqK', '0000-00-00', '', '', '', '', '', NULL, 0),
(3, 'OTRA', 'PRUEBA', 0, 0, 'ASDSA@ASDAS.COM', '$2y$10$iGiWNwC6LXXVyvc9.deajeenVA0UlsVVkZ.duX4MDJ3G6zIu7qPOm', '0000-00-00', '', '', '', '', '', NULL, 0),
(4, 'OTRA', 'PRUEBA', 0, 0, 'ASDSA@ASDAS.COM', '$2y$10$uSoCYaJth7GkYkgNVqnkcuCFtb4.G5JuuMMyKw41PUHwLmYhy.yYy', '0000-00-00', '', '', '', '', '', NULL, 0),
(5, 'PRUEBA', 'PIOLA', 0, 0, 'asdsa@asdsa.com', '$2y$10$kAG0r47li0NXPR18L9qd/eaT8tnP0gyCfIwGfh3aiwY1kgbAFWbA.', '0000-00-00', '', '', '', '', '', NULL, 0),
(6, 'AVATAR', 'AVATAR', 0, 0, 'asdsa@asdsa.com', '$2y$10$IVl/lUh1t/00pC6OSymQpufxbcXhgb75Te83bl6cjDMWIuNUu0GVu', '0000-00-00', '', '', '', '', '', NULL, 0),
(7, 'Prueba', 'Login', 0, 0, 'prueba@login.com', '$2y$10$zqtcZqeKPS4aKRSTgT.bDOCuRl8n.XaFkDc5HkvElpjr34RwIlqzq', '0000-00-00', '', '', '', '', '', NULL, 0),
(8, 'Prueba', 'COSO', 0, 0, 'prueba@coso.com', '$2y$10$oyBPu/7LCQwj0Bx9hDmUmOlDPC8hdtnjPB8hXZQVUAhk0KhLwQpgS', '0000-00-00', '', '', '', '', '', NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
