-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jul-2024 às 00:02
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `maiskwanza_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrators_tb`
--

CREATE TABLE `administrators_tb` (
  `Id_adm` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Senha` varchar(255) NOT NULL,
  `DataCriacao` datetime NOT NULL DEFAULT current_timestamp(),
  `Permissoes` enum('administrador_total','editor','visualizador') NOT NULL DEFAULT 'visualizador',
  `Estado` enum('ativo','inativo') NOT NULL DEFAULT 'ativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `newsletter_tb`
--

CREATE TABLE `newsletter_tb` (
  `Id_noticia` int(11) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Conteudo` text NOT NULL,
  `DataCriacao` datetime NOT NULL DEFAULT current_timestamp(),
  `Autor` int(11) DEFAULT NULL,
  `ImgUrl` varchar(255) DEFAULT NULL,
  `Categoria` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `subscribers_tb`
--

CREATE TABLE `subscribers_tb` (
  `Id_sub` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DataInscricao` datetime NOT NULL DEFAULT current_timestamp(),
  `Status` enum('ativo','inativo') NOT NULL DEFAULT 'ativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrators_tb`
--
ALTER TABLE `administrators_tb`
  ADD PRIMARY KEY (`Id_adm`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Índices para tabela `newsletter_tb`
--
ALTER TABLE `newsletter_tb`
  ADD PRIMARY KEY (`Id_noticia`),
  ADD KEY `Autor` (`Autor`);

--
-- Índices para tabela `subscribers_tb`
--
ALTER TABLE `subscribers_tb`
  ADD PRIMARY KEY (`Id_sub`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrators_tb`
--
ALTER TABLE `administrators_tb`
  MODIFY `Id_adm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `newsletter_tb`
--
ALTER TABLE `newsletter_tb`
  MODIFY `Id_noticia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `subscribers_tb`
--
ALTER TABLE `subscribers_tb`
  MODIFY `Id_sub` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `newsletter_tb`
--
ALTER TABLE `newsletter_tb`
  ADD CONSTRAINT `newsletter_tb_ibfk_1` FOREIGN KEY (`Autor`) REFERENCES `administrators_tb` (`Id_adm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
