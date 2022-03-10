-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Mar-2022 às 10:48
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gestao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada`
--

DROP TABLE IF EXISTS `entrada`;
CREATE TABLE IF NOT EXISTS `entrada` (
  `codigoEntrada` int(11) NOT NULL AUTO_INCREMENT,
  `dataEntrada` datetime NOT NULL,
  `tipoEquipamento` varchar(255) NOT NULL,
  `defeitoAparente` varchar(255) NOT NULL,
  `fk_codigoRequisitante` int(11) NOT NULL,
  `fk_codigoTecnico` int(11) NOT NULL,
  PRIMARY KEY (`codigoEntrada`),
  KEY `fk_codigoRequisitante` (`fk_codigoRequisitante`),
  KEY `fk_codigoTecnico` (`fk_codigoTecnico`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `requisitante`
--

DROP TABLE IF EXISTS `requisitante`;
CREATE TABLE IF NOT EXISTS `requisitante` (
  `codigoRequisitante` int(11) NOT NULL AUTO_INCREMENT,
  `nomeRequisitante` varchar(255) NOT NULL,
  `setor` varchar(255) NOT NULL,
  `contato` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigoRequisitante`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida`
--

DROP TABLE IF EXISTS `saida`;
CREATE TABLE IF NOT EXISTS `saida` (
  `codigoSaida` int(11) NOT NULL AUTO_INCREMENT,
  `dataSaida` datetime NOT NULL,
  `fk_codigoTecnico` int(11) NOT NULL,
  `fk_codigoEntrada` int(11) NOT NULL,
  `fk_codigoStatus` int(11) NOT NULL,
  PRIMARY KEY (`codigoSaida`),
  KEY `fk_codigoTecnico` (`fk_codigoTecnico`),
  KEY `fk_codigoEntrada` (`fk_codigoEntrada`),
  KEY `fk_codigoStatus` (`fk_codigoStatus`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

DROP TABLE IF EXISTS `servico`;
CREATE TABLE IF NOT EXISTS `servico` (
  `codigoServico` int(11) NOT NULL AUTO_INCREMENT,
  `laudoTecnico` varchar(255) NOT NULL,
  `servicoRealizado` varchar(255) NOT NULL,
  `fk_codigoEntrada` int(11) NOT NULL,
  PRIMARY KEY (`codigoServico`),
  KEY `fk_codigoEntrada` (`fk_codigoEntrada`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `codigoStatus` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) NOT NULL,
  `fk_codigoTecnico` int(11) NOT NULL,
  PRIMARY KEY (`codigoStatus`),
  KEY `fk_codigoTecnico` (`fk_codigoTecnico`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnico`
--

DROP TABLE IF EXISTS `tecnico`;
CREATE TABLE IF NOT EXISTS `tecnico` (
  `codigoTecnico` int(11) NOT NULL AUTO_INCREMENT,
  `nomeTecnico` varchar(255) NOT NULL,
  PRIMARY KEY (`codigoTecnico`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
