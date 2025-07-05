-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/07/2025 às 00:41
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
-- Banco de dados: `cookiesuai`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `compras`
--

CREATE TABLE `compras` (
  `idCompra` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idProduto` int(11) DEFAULT NULL,
  `dataCompra` date DEFAULT NULL,
  `horaCompra` time DEFAULT NULL,
  `valorCompra` decimal(10,2) DEFAULT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `compras`
--

INSERT INTO `compras` (`idCompra`, `idUsuario`, `idProduto`, `dataCompra`, `horaCompra`, `valorCompra`, `quantidade`) VALUES
(1, 1, 1, '2025-07-05', '17:24:24', 8.00, 0),
(2, 1, 1, '2025-07-05', '19:11:26', 8.00, 1),
(3, 1, 1, '2025-07-05', '19:11:33', 8.00, 1),
(4, 1, 1, '2025-07-05', '19:13:35', 8.00, 1),
(5, 1, 1, '2025-07-05', '19:13:52', 8.00, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProduto` int(11) NOT NULL,
  `fotoProduto` varchar(100) DEFAULT NULL,
  `nomeProduto` varchar(50) DEFAULT NULL,
  `descricaoProduto` varchar(300) DEFAULT NULL,
  `valorProduto` decimal(10,2) DEFAULT NULL,
  `estoque` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `fotoProduto`, `nomeProduto`, `descricaoProduto`, `valorProduto`, `estoque`) VALUES
(1, 'img/tradicional.jpg', 'Cookie Tradicional', 'Massa Tradicional de Baunilha\r\ncom Chocolate ao Leite', 8.00, 10),
(7, 'img/chocolate.jpg', 'Cookie de Chocolate', 'Massa de Chocolate com\r\nChocolate ao Leite', 8.00, 10),
(8, 'img/redvelvet.jpg', 'Cookie de Red Velvet', 'Massa Red Velvet com\r\nChocolate Branco', 9.00, 10),
(9, 'img/kitkat.jpg', 'Cookie de Kit Kat', 'Massa de Baunilha com Chocolate ao\r\nLeite e pedaços de Kit Kat finalizado\r\ncom meio Kit Kat por cima', 12.00, 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `tipoUsuario` varchar(13) DEFAULT NULL,
  `nomeUsuario` varchar(100) DEFAULT NULL,
  `emailUsuario` varchar(50) DEFAULT NULL,
  `senhaUsuario` varchar(100) DEFAULT NULL,
  `telefoneUsuario` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `tipoUsuario`, `nomeUsuario`, `emailUsuario`, `senhaUsuario`, `telefoneUsuario`) VALUES
(1, 'cliente', 'gustavo', 'sonic@teste.com', '0cc175b9c0f1b6a831c399e269772661', '42988862223'),
(2, 'administrador', 'gustavo adm', 'marioadm@teste.com', '0cc175b9c0f1b6a831c399e269772661', '(42) 98886-2222');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idCompra`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProduto`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `idCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
