-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/11/2024 às 01:01
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pfaex`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `schedulers`
--

CREATE TABLE `schedulers` (
  `id` int(11) NOT NULL,
  `name_scheduler` varchar(50) NOT NULL,
  `obs` text NOT NULL,
  `date_scheduler` date NOT NULL,
  `status` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `schedulers`
--

INSERT INTO `schedulers` (`id`, `name_scheduler`, `obs`, `date_scheduler`, `status`, `email`, `phone`) VALUES
(10, 'Carlos jaime 2', 'asdsada aa sdasdas ', '2024-10-19', 0, 'b@b.com', '232322'),
(12, 'asdasd', 'asdasd 1 1 11 1 ', '2024-11-09', 0, 'jaime_andrek@hotmail.com', 'adsad'),
(13, 'asdasd', 'asdasd', '2024-11-09', 0, 'jaime_andrek@hotmail.com', 'adsad'),
(14, 'Carlos jaime 2', 'asdsada aa sdasdas ', '2024-10-19', 0, 'b@b.com', '232322'),
(15, 'asdasd', 'asdasd 1 1 11 1 ', '2024-11-09', 0, 'jaime_andrek@hotmail.com', 'adsad'),
(16, 'asdasd', 'asdasd', '2024-11-09', 0, 'jaime_andrek@hotmail.com', 'adsad'),
(17, 'Carlos jaime 2', 'asdsada aa sdasdas ', '2024-10-19', 0, 'b@b.com', '232322'),
(18, 'asdasd', 'asdasd 1 1 11 1 ', '2024-11-09', 0, 'jaime_andrek@hotmail.com', 'adsad'),
(19, 'asdasd', 'asdasd', '2024-11-09', 0, 'jaime_andrek@hotmail.com', 'adsad'),
(20, 'Carlos jaime 2', 'asdsada aa sdasdas ', '2024-10-19', 0, 'b@b.com', '232322'),
(21, 'asdasd', 'asdasd 1 1 11 1 ', '2024-11-09', 0, 'jaime_andrek@hotmail.com', 'adsad'),
(22, 'asdasd', 'asdasd', '2024-11-09', 0, 'jaime_andrek@hotmail.com', 'adsad'),
(23, 'Carlos jaime 2', 'asdsada aa sdasdas ', '2024-10-19', 0, 'b@b.com', '232322'),
(24, 'asdasd', 'asdasd 1 1 11 1 ', '2024-11-09', 0, 'jaime_andrek@hotmail.com', 'adsad'),
(25, 'asdasd', 'asdasd', '2024-11-09', 0, 'jaime_andrek@hotmail.com', 'adsad'),
(26, 'Carlos jaime 2', 'asdsada aa sdasdas ', '2024-10-19', 0, 'b@b.com', '232322'),
(27, 'asdasd', 'asdasd 1 1 11 1 ', '2024-11-09', 0, 'jaime_andrek@hotmail.com', 'adsad'),
(28, 'asdasd', 'asdasd', '2024-11-09', 0, 'jaime_andrek@hotmail.com', 'adsad'),
(29, 'Carlos jaime 2', 'asdsada aa sdasdas ', '2024-10-19', 0, 'b@b.com', '232322'),
(30, 'asdasd', 'asdasd 1 1 11 1 ', '2024-11-09', 0, 'jaime_andrek@hotmail.com', 'adsad'),
(31, 'asdasd', 'asdasd', '2024-11-09', 0, 'jaime_andrek@hotmail.com', 'adsad'),
(32, 'Carlos jaime 2', 'asdsada aa sdasdas ', '2024-10-19', 0, 'b@b.com', '232322'),
(33, 'asdasd', 'asdasd 1 1 11 1 ', '2024-11-09', 0, 'jaime_andrek@hotmail.com', 'adsad'),
(34, 'asdasd', 'asdasd', '2024-11-09', 0, 'jaime_andrek@hotmail.com', 'adsad');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `level`) VALUES
(1, 'Carlos', 'jaime_andrek@hotmail.com', '565655', '$2y$10$8OcGKuFh4f.UAI5I4D4XUe9wAljZ8Ll0Q1E9KmI.gl6jA/IWA2SbC', 0),
(2, 'Carlos', 'a@a', '555', '$2y$10$QuBlr78r4ZVkchJ9HlDhh.Ix2XebDP3g0M3yQ.0/V5h1.flyZ/98W', 0),
(3, 'Alex', 'b@b.com', '555555', '$2y$10$7H.Qgr0VdaaKk8WYFLcbe.KUWRdtuh8DRvNZT5f49ZGkF8W3m.Eia', 0),
(4, 'carlinhos', 'reqsolutionweb@gmail.com', '11', '$2y$10$/UlYqHjgWPKwYVowlQ0QuuRRjV84FQBLp71OosH3LRcW3lHLFfFH.', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `schedulers`
--
ALTER TABLE `schedulers`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `schedulers`
--
ALTER TABLE `schedulers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
