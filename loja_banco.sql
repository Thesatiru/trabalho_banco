-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 05/12/2024 às 18:50
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
-- Banco de dados: `loja_banco`
--
CREATE DATABASE IF NOT EXISTS `loja_banco` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `loja_banco`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_administração`
--

DROP TABLE IF EXISTS `cadastro_administração`;
CREATE TABLE `cadastro_administração` (
  `id` int(250) NOT NULL,
  `nome_adm` varchar(200) NOT NULL,
  `email_adm` varchar(250) NOT NULL,
  `senha_adm` varchar(300) NOT NULL,
  `telefone_adm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro_administração`
--

INSERT INTO `cadastro_administração` (`id`, `nome_adm`, `email_adm`, `senha_adm`, `telefone_adm`) VALUES
(1, 'Rafael Lana Dos Santos ', 'rafaellana750@gmail.com', '10192000', '(11)95050-4049'),
(2, 'Gabriella Ferreira', 'gabiferreves@gmail.com', '22052005', '(11)95050-4323'),
(4, 'João Peixe', 'joão@gmail.com', '404951', '(22)9402-94040'),
(5, 'Geniscleide Correia', 'geniS@gmail.com', '20304920', '(11)94017-3893'),
(6, 'Rafael Lana Dos Santos ', 'rafaellana750@gmail.com', '10192000', '(11)95050-4049');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos_esportes`
--

DROP TABLE IF EXISTS `produtos_esportes`;
CREATE TABLE `produtos_esportes` (
  `id` int(250) NOT NULL,
  `nome_produto` varchar(200) NOT NULL,
  `preco_produto` varchar(250) NOT NULL,
  `descricao_produto` varchar(300) NOT NULL,
  `estoque` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos_esportes`
--

INSERT INTO `produtos_esportes` (`id`, `nome_produto`, `preco_produto`, `descricao_produto`, `estoque`) VALUES
(3, 'Bola de basquete', 'R$120,00', 'Bola de basquete, borracha', '10'),
(5, 'Camiseta dry fit', 'R$50,00', 'Camiseta extremamente confortavél', '5');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro_administração`
--
ALTER TABLE `cadastro_administração`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos_esportes`
--
ALTER TABLE `produtos_esportes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_administração`
--
ALTER TABLE `cadastro_administração`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produtos_esportes`
--
ALTER TABLE `produtos_esportes`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
