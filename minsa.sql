-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/04/2022 às 11:37
-- Versão do servidor: 10.4.19-MariaDB
-- Versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `minsa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `conglo`
--

CREATE TABLE `conglo` (
  `idConglo` int(11) NOT NULL,
  `Conglomerado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `conglo`
--

INSERT INTO `conglo` (`idConglo`, `Conglomerado`) VALUES
(2, 'Benfica, Ramiro, Mundial'),
(3, 'Fubu, Dangareux, Camama'),
(4, 'Mutamba, Viana, Calemba'),
(5, 'Morro Bento, Samba, Mutamba'),
(6, 'Futungo, Ugp, Multiperfil');

-- --------------------------------------------------------

--
-- Estrutura para tabela `conglomerado`
--

CREATE TABLE `conglomerado` (
  `idConglo` int(11) NOT NULL,
  `Conglomerado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sincronizacao`
--

CREATE TABLE `sincronizacao` (
  `idsincro` int(11) NOT NULL,
  `provincia` varchar(40) NOT NULL,
  `semana` varchar(15) NOT NULL,
  `mes` varchar(15) NOT NULL,
  `ano` int(11) NOT NULL,
  `qtdEntre` int(11) NOT NULL,
  `Pendente` int(11) NOT NULL,
  `justificativa` text NOT NULL,
  `idConglo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `sincronizacao`
--

INSERT INTO `sincronizacao` (`idsincro`, `provincia`, `semana`, `mes`, `ano`, `qtdEntre`, `Pendente`, `justificativa`, `idConglo`) VALUES
(4, 'Luanda', '1', 'Fevereiro', 0, 3, 2, 'JSDHJ', 2),
(9, 'Huambo', '4', 'Julho', 2023, 12, 0, 'N/A', 2),
(10, 'Cunene', '4', 'Maio', 2022, 12, 0, 'xx', 4),
(11, 'Huila', '', 'Janeiro', 2050, 12, 1, 'n/a', 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`) VALUES
(1, 'Mateus', 'Tango'),
(2, 'Tchingunji', 'Santos');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `conglo`
--
ALTER TABLE `conglo`
  ADD PRIMARY KEY (`idConglo`);

--
-- Índices de tabela `conglomerado`
--
ALTER TABLE `conglomerado`
  ADD PRIMARY KEY (`idConglo`);

--
-- Índices de tabela `sincronizacao`
--
ALTER TABLE `sincronizacao`
  ADD PRIMARY KEY (`idsincro`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conglo`
--
ALTER TABLE `conglo`
  MODIFY `idConglo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `conglomerado`
--
ALTER TABLE `conglomerado`
  MODIFY `idConglo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sincronizacao`
--
ALTER TABLE `sincronizacao`
  MODIFY `idsincro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
