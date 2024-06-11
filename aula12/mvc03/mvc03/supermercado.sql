-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/05/2024 às 00:13
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `supermercado`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `cliente` varchar(20) NOT NULL,
  `valor_venda` decimal(9,2) NOT NULL,
  `quadrimestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `venda`
--

INSERT INTO `venda` (`id`, `cliente`, `valor_venda`, `quadrimestre`) VALUES
(1, 'FULANO', 8000.00, 1),
(2, 'BELTRANO', 20000.00, 1),
(3, 'CICLANO', 15000.00, 1),
(5, 'MARIA', 28000.00, 2),
(9, 'MARIANA', 28500.00, 2),
(20, 'RENATA', 8000.00, 3),
(21, 'RAFAEL', 10000.00, 2),
(22, 'PEDRO', 5000.00, 3),
(23, 'ALEXANDRE', 7500.00, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas_q1`
--

CREATE TABLE `vendas_q1` (
  `id` int(11) NOT NULL,
  `cliente` varchar(20) NOT NULL,
  `valor_venda` decimal(9,2) NOT NULL,
  `quadrimestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `vendas_q1`
--

INSERT INTO `vendas_q1` (`id`, `cliente`, `valor_venda`, `quadrimestre`) VALUES
(1, 'FULANO', 8000.00, 1),
(2, 'BELTRANO', 20000.00, 1),
(3, 'CICLANO', 15000.00, 1),
(10, 'YYYY', 800.00, 1),
(11, 'TESTE88', 6666.00, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas_q2`
--

CREATE TABLE `vendas_q2` (
  `id` int(11) NOT NULL,
  `cliente` varchar(20) NOT NULL,
  `valor_venda` decimal(9,2) NOT NULL,
  `quadrimestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `vendas_q2`
--

INSERT INTO `vendas_q2` (`id`, `cliente`, `valor_venda`, `quadrimestre`) VALUES
(1, 'MARIA', 28000.00, 2),
(2, 'JOSÉ', 5000.00, 2),
(3, 'PAULO', 35000.00, 2),
(7, 'TESTE880', 99999.00, 2),
(11, 'MARIANA', 28500.00, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas_q3`
--

CREATE TABLE `vendas_q3` (
  `id` int(11) NOT NULL,
  `cliente` varchar(20) NOT NULL,
  `valor_venda` decimal(9,2) NOT NULL,
  `quadrimestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `vendas_q3`
--

INSERT INTO `vendas_q3` (`id`, `cliente`, `valor_venda`, `quadrimestre`) VALUES
(2, 'ANDRÉ', 52000.00, 3),
(3, 'MARIA', 7000.00, 3),
(6, 'MARIANA', 28500.00, 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vendas_q1`
--
ALTER TABLE `vendas_q1`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vendas_q2`
--
ALTER TABLE `vendas_q2`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vendas_q3`
--
ALTER TABLE `vendas_q3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `vendas_q1`
--
ALTER TABLE `vendas_q1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `vendas_q2`
--
ALTER TABLE `vendas_q2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `vendas_q3`
--
ALTER TABLE `vendas_q3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
