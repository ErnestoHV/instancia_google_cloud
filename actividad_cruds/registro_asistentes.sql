-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 03:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registro_asistentes`
--

-- --------------------------------------------------------

--
-- Table structure for table `asistente`
--

CREATE TABLE `asistente` (
  `id_asistente` int(10) NOT NULL,
  `nombre_asistente` varchar(35) NOT NULL,
  `apellido_pat_asistente` varchar(35) NOT NULL,
  `apellido_mat_asistente` varchar(35) NOT NULL,
  `e_mail` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asistente`
--

INSERT INTO `asistente` (`id_asistente`, `nombre_asistente`, `apellido_pat_asistente`, `apellido_mat_asistente`, `e_mail`) VALUES
(1, 'Ernesto', 'Hernández', 'Velázquez', 'ernesto.hve@outlook.com'),
(2, 'Juan', 'López', 'Huerta', 'juanlopez@gmail.com'),
(3, 'Ernesto', 'Hernández', 'López', 'ernesto.hl@outlook.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asistente`
--
ALTER TABLE `asistente`
  ADD PRIMARY KEY (`id_asistente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asistente`
--
ALTER TABLE `asistente`
  MODIFY `id_asistente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
