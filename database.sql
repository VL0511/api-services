-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Abr-2022 às 18:06
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `services`
--
CREATE DATABASE IF NOT EXISTS `services` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `services`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `services-name`
--

CREATE TABLE `services-name` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `services-name`
--

INSERT INTO `services-name` (`id`, `name`, `date`) VALUES
(1, 'TesteAPI', '2022-04-02'),
(2, 'TesteAPI', '2022-04-24'),
(4, 'TesteAPI', '2022-04-24'),
(6, 'Teste3', '2022-04-24');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `services-name`
--
ALTER TABLE `services-name`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `services-name`
--
ALTER TABLE `services-name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
