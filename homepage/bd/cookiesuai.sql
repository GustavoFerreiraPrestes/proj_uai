-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/07/2025 às 23:46
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
(5, 1, 1, '2025-07-05', '19:13:52', 8.00, 1),
(6, 1, 1, '2025-07-06', '02:08:43', 8.00, 19),
(7, 1, 7, '2025-07-06', '02:10:40', 8.00, 9),
(8, 1, 7, '2025-07-06', '02:14:44', 8.00, 1),
(9, 1, 1, '2025-07-06', '02:15:20', 8.00, 1),
(10, 1, 8, '2025-07-06', '02:17:37', 9.00, 1),
(11, 1, 9, '2025-07-06', '02:21:17', 12.00, 1),
(12, 1, 13, '2025-07-06', '02:23:03', 13.00, 1),
(13, 1, 8, '2025-07-06', '11:22:38', 9.00, 1),
(14, 1, 1, '2025-07-06', '12:12:35', 8.00, 1),
(15, 1, 1, '2025-07-06', '15:02:17', 8.00, 1),
(16, 1, 1, '2025-07-06', '15:40:29', 8.00, 1),
(17, 1, 1, '2025-07-06', '16:09:37', 8.00, 1),
(18, 1, 1, '2025-07-06', '17:04:38', 8.00, 1),
(19, 1, 1, '2025-07-06', '17:45:06', 8.00, 1),
(20, 1, 1, '2025-07-06', '18:23:29', 8.00, 1),
(21, 1, 16, '2025-07-06', '18:24:17', 16.00, 1);

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
(1, 'img/tradicional.jpg', 'Cookie Tradicional', 'Massa Tradicional de Baunilha\r\ncom Chocolate ao Leite', 8.00, 4),
(7, 'img/chocolate.jpg', 'Cookie de Chocolate', 'Massa de Chocolate com\r\nChocolate ao Leite', 8.00, 10),
(8, 'img/redvelvet.jpg', 'Cookie de Red Velvet', 'Massa Red Velvet com\r\nChocolate Branco', 9.00, 9),
(9, 'img/kitkat.jpg', 'Cookie de Kit Kat', 'Massa de Baunilha com Chocolate ao\r\nLeite e pedaços de Kit Kat finalizado\r\ncom meio Kit Kat por cima', 12.00, 10),
(13, 'img/nutella.jpg', 'Cookie De Chocolate c/ Nutella', 'Massa de Chocolate com\r\nChocolate ao Leite recheado com Nutella', 13.00, 10),
(14, 'img/mm.jpg', 'Cookie de M&amp;Ms', 'Massa Tradicional de Baunilha com\r\nChocolate ao Leite e MM’s', 10.00, 10),
(15, 'img/amendoim.jpg', 'Cookie de Amendoim', 'Massa de Baunilha com Farelo de\r\nAmendoim e pedaços de Chocolate\r\nao Leite e Amendoim', 9.00, 10),
(16, 'img/bnutella.jpg', 'Brownie de Chocolatec/ Nutella', 'Brownie de Chocolate com pedaços de\r\nChocolate ao Leite e Chocolate\r\nMeio Amargo e recheio de\r\nNutella pura', 16.00, 9),
(20, 'img/bolinhochocolate.jpg', 'Bolinho de Chocolate com Cobertura de Chocolate', 'Bolinho de Chocolate com Cobertura de Chocolate', 8.00, 10),
(21, 'img/bolinhoninho.jpg', 'Bolinho de Chocolate com Cobertura de Ninho', 'Bolinho de Chocolate com Cobertura de Ninho', 8.00, 10),
(22, 'img/marmitinha.jpg', 'Cookie na Marmitinha c/ Nutella', 'Massa Tradicional de Baunilha\r\ncom Chocolate ao Leite\r\nrecheado com Nutella pura', 22.00, 10),
(23, 'img/copinhodocedeleite.jpg', 'Copinho de Brownie', 'Copinho de Brownie de Chocolate com\r\nDoce de leite caseiro finalizado com M&amp;M’s', 12.00, 10);

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
(2, 'administrador', 'gustavo adm', 'marioadm@teste.com', '0cc175b9c0f1b6a831c399e269772661', '(42) 98886-2222'),
(22, 'cliente', 'Gustavo Ferreira Prestes', 'gustavocliente@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '(42) 98886-2121');

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
  MODIFY `idCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
