-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/05/2025 às 03:26
-- Versão do servidor: 8.0.41
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `generico`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `compras`
--

CREATE TABLE `compras` (
`idCompra` int NOT NULL,
`idUsuario` int DEFAULT NULL,
`idProduto` int DEFAULT NULL,
`dataCompra` date DEFAULT NULL,
`horaCompra` time DEFAULT NULL,
`valorCompra` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `compras`
--

INSERT INTO `compras` (`idCompra`, `idUsuario`, `idProduto`, `dataCompra`, `horaCompra`, `valorCompra`) VALUES
(1, 2, 3, '2025-05-26', '21:25:35', 20000.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProduto` int NOT NULL,
  `fotoProduto` varchar(100) NOT NULL,
  `nomeProduto` varchar(30) NOT NULL,
  `descricaoProduto` varchar(200) NOT NULL,
  `valorProduto` decimal(10,0) NOT NULL,
  `statusProduto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `fotoProduto`, `nomeProduto`, `descricaoProduto`, `valorProduto`, `statusProduto`) VALUES
(1, 'img/xbox360.webp', 'Xbox 360', 'Console Microsoft Xbox 360 Slim', 300, 'disponivel'),
(2, 'img/tenisVans.jpg', 'Tênis Vans', 'Calçado Vans Old School Bla bla bla', 400, 'esgotado'),
(3, 'img/Fusca_Azul.jpeg', 'Fusca', 'VW Fusca Azul 1972', 20000, 'esgotado');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int NOT NULL,
  `tipoUsuario` varchar(15) NOT NULL,
  `fotoUsuario` varchar(100) NOT NULL,
  `nomeUsuario` varchar(50) NOT NULL,
  `dataNascimentoUsuario` date NOT NULL,
  `cidadeUsuario` varchar(30) NOT NULL,
  `telefoneUsuario` varchar(20) NOT NULL,
  `emailUsuario` varchar(50) NOT NULL,
  `senhaUsuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `tipoUsuario`, `fotoUsuario`, `nomeUsuario`, `dataNascimentoUsuario`, `cidadeUsuario`, `telefoneUsuario`, `emailUsuario`, `senhaUsuario`) VALUES
(1, 'administrador', 'img/Classico_2D.webp', 'Sonic', '2025-04-05', 'telemacoBorba', '(42) 99999-9999', 'sonic@teste.com', '202cb962ac59075b964b07152d234b70'),
(2, 'cliente', 'img/mario.png', 'Mario Mario', '2025-05-19', 'telemacoBorba', '(42) 99999-9999', 'mario@teste.com', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idCompra`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idProduto` (`idProduto`);

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
  MODIFY `idCompra` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProduto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`idProduto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
