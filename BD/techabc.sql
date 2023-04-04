-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Abr-2023 às 02:18
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `techabc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessorios`
--

CREATE TABLE `acessorios` (
  `tipo` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `preco` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `quantidade` int(3) NOT NULL,
  `idAcessorios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `idClientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `desktops`
--

CREATE TABLE `desktops` (
  `idDesk` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `preco` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `quantidade` int(3) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `rua` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `movel` varchar(10) NOT NULL,
  `numero` int(4) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `pais` varchar(15) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `fkEndereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notebooks`
--

CREATE TABLE `notebooks` (
  `tipo` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `preco` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `quantidade` int(3) NOT NULL,
  `idNote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pecas`
--

CREATE TABLE `pecas` (
  `tipo` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `preco` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `quantidade` int(3) NOT NULL,
  `idPeca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acessorios`
--
ALTER TABLE `acessorios`
  ADD PRIMARY KEY (`idAcessorios`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idClientes`);

--
-- Índices para tabela `desktops`
--
ALTER TABLE `desktops`
  ADD PRIMARY KEY (`idDesk`);

--
-- Índices para tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD KEY `FOREIGN KEY` (`fkEndereco`);

--
-- Índices para tabela `notebooks`
--
ALTER TABLE `notebooks`
  ADD PRIMARY KEY (`idNote`);

--
-- Índices para tabela `pecas`
--
ALTER TABLE `pecas`
  ADD PRIMARY KEY (`idPeca`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acessorios`
--
ALTER TABLE `acessorios`
  MODIFY `idAcessorios` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idClientes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `desktops`
--
ALTER TABLE `desktops`
  MODIFY `idDesk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `notebooks`
--
ALTER TABLE `notebooks`
  MODIFY `idNote` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pecas`
--
ALTER TABLE `pecas`
  MODIFY `idPeca` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `FOREIGN KEY` FOREIGN KEY (`fkEndereco`) REFERENCES `clientes` (`idClientes`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
