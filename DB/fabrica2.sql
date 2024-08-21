-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/06/2024 às 01:32
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
-- Banco de dados: `fabrica2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carros`
--

CREATE TABLE `carros` (
  `id` int(11) NOT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `estoque_carros` int(11) DEFAULT NULL,
  `numero_Chassi` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `lote` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carros`
--

INSERT INTO `carros` (`id`, `modelo`, `valor`, `estoque_carros`, `numero_Chassi`, `ano`, `lote`) VALUES
(1, 'Golf', 50000.00, 1, 11411111, 2000, 15),
(2, 'Gol', 70000.00, 1, 560367, 2000, 25),
(3, 'Fiesta', 50000.00, 1, 632712, 1990, 10),
(4, 'Corolla', 50000.00, 1, 93950, 2900, 25),
(5, 'Onix', 30000.00, 1, 135838, 2010, 15),
(6, 'Civic', 30000.00, 1, 74267, 2017, 15),
(7, 'Uno', 30000.00, 1, 692400, 2024, 10),
(12, 'Duster', 75000.00, 0, 3000, 2000, 25),
(13, 's', 35535353.00, 0, 2147483647, 2000, 10),
(14, 's', 35535353.00, 0, 2147483647, 2000, 15),
(15, 'RET', 646478.00, 0, 2147483647, 2000, 10),
(16, 'RET', 646478.00, 0, 2147483647, 2000, 25),
(17, '5747', 67444.00, 0, 2147483647, 56, 10),
(18, 'Astra', 50000.00, 0, 2147483647, 2018, 15),
(19, 'Astra', 50000.00, 0, 2147483647, 2018, 15),
(20, 'Mustang', 50000.00, 4, 2147483647, 2020, 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `carro_pecas`
--

CREATE TABLE `carro_pecas` (
  `id` int(11) NOT NULL,
  `carro_id` int(11) DEFAULT NULL,
  `peca_id` int(11) DEFAULT NULL,
  `fornecedor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `CNPJ` int(14) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `fornecedores`
--

INSERT INTO `fornecedores` (`id`, `nome`, `CNPJ`, `endereco`, `email`) VALUES
(1, 'Bosch', 123, 'Rua sans paulo', 'email@gamil.com'),
(2, 'Fornecedor A', 692461, 'Rua jadim azul', 'testsocial@gamil.com'),
(3, 'Fornecedor B', 24112, 'Casa do chapeu', 'OrionPrime@gmail.com'),
(4, 'Fornecedor C', 1337, 'Valhalla', 'Artemis@gmail.com'),
(7, 'Fornecedor C', 1337, 'Valhalla', 'Artemis@gmail.com'),
(8, 'Fornecedor C', 1337, 'Valhalla', 'Artemis@gmail.com'),
(14, 'Test', 323, 'Valhalla', '234@gmail.com'),
(15, 'Test2', 323789, 'Valhalla', '2234@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pecas`
--

CREATE TABLE `pecas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `estoque` int(11) DEFAULT NULL,
  `Fk_Fornecedor` int(11) NOT NULL,
  `lote` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pecas`
--

INSERT INTO `pecas` (`id`, `nome`, `preco`, `estoque`, `Fk_Fornecedor`, `lote`) VALUES
(2, 'Carburador', 500.00, 3, 2, 10),
(3, 'Carburador', 500.00, 3, 2, 10),
(4, 'painel diferencial', 1500.00, 3, 2, 15),
(5, 'painel diferencial', 1500.00, 3, 2, 25),
(6, 'Carburador', 1000.00, 5, 3, 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(100) DEFAULT NULL,
  `email_usuario` varchar(100) DEFAULT NULL,
  `senha_usuario` varchar(100) DEFAULT NULL,
  `data_registro_usuario` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `data_registro_usuario`) VALUES
(1, 'lucas', 'lucas@unibrasil.com', '123', NULL),
(2, 'eduardo', 'eduardo@unibrasil.com', '$2y$10$BRNX18n9VSN2GtGusLhfwexuHEhd053thVFPMiKS5u29zyK1Cbjyq', NULL),
(3, 'lucasop', 'lucasop@uni.com', '$2y$10$prUwwIlnakQacsI5jCqbDeEOFPRDSjAT9kEmOQfgn.IlDHsZHMUUK', NULL),
(4, 'Thiago', 'Thiago@email.com', '$2y$10$SrPMHqZ.L5wLtcbqRcR73u8rlo/vR5gv.6vM0Y.i55iRSuYjajju.', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `carro_id` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `vendas`
--

INSERT INTO `vendas` (`id`, `carro_id`, `quantidade`, `data`, `valor`) VALUES
(1, 1, 3, '2024-05-09', 50000.00),
(2, 1, 2, '2024-04-20', 70000.00),
(3, 2, 3, '2024-04-21', 30000.00),
(4, 1, 1, '2024-04-23', 50000.00),
(5, 2, 2, '2024-04-24', 70000.00),
(6, 3, 1, '2024-04-24', NULL),
(7, 4, 1, '2024-04-25', NULL),
(8, 5, 2, '2024-04-26', NULL),
(9, 6, 1, '2024-04-26', 68000.00),
(10, 3, 2, '2024-04-27', 100000.00),
(11, 2, 1, '2024-04-27', 80000.00),
(12, 1, 3, '2024-04-30', NULL),
(13, 1, 1, '2024-06-16', 50000.00),
(14, 2, 2, '2024-06-17', 70000.00),
(15, 3, 1, '2024-06-18', 30000.00),
(16, 4, 1, '2024-06-19', 50000.00),
(17, 5, 3, '2024-06-20', 60000.00);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `carro_pecas`
--
ALTER TABLE `carro_pecas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carro_id` (`carro_id`),
  ADD KEY `peca_id` (`peca_id`),
  ADD KEY `fornecedor_id` (`fornecedor_id`);

--
-- Índices de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pecas`
--
ALTER TABLE `pecas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `estoque2` (`id`),
  ADD KEY `fk_fornecedor` (`Fk_Fornecedor`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carro_id` (`carro_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carros`
--
ALTER TABLE `carros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `carro_pecas`
--
ALTER TABLE `carro_pecas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `pecas`
--
ALTER TABLE `pecas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `carro_pecas`
--
ALTER TABLE `carro_pecas`
  ADD CONSTRAINT `carro_pecas_ibfk_1` FOREIGN KEY (`carro_id`) REFERENCES `carros` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carro_pecas_ibfk_2` FOREIGN KEY (`peca_id`) REFERENCES `pecas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carro_pecas_ibfk_3` FOREIGN KEY (`fornecedor_id`) REFERENCES `fornecedores` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `pecas`
--
ALTER TABLE `pecas`
  ADD CONSTRAINT `fk_fornecedor` FOREIGN KEY (`Fk_Fornecedor`) REFERENCES `fornecedores` (`id`);

--
-- Restrições para tabelas `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`carro_id`) REFERENCES `carros` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
