-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 01-Jul-2017 às 17:40
-- Versão do servidor: 5.5.28
-- versão do PHP: 5.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `pw`
--
CREATE DATABASE IF NOT EXISTS `pw` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pw`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `CodAluno` int(10) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Matricula` varchar(50) DEFAULT NULL,
  `Senha` varchar(30) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `Curso` varchar(200) DEFAULT NULL,
  `instituicao` varchar(150) DEFAULT NULL,
  `LinkLattes` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`CodAluno`),
  KEY `Matricula` (`Matricula`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`CodAluno`, `Nome`, `Matricula`, `Senha`, `email`, `Curso`, `instituicao`, `LinkLattes`) VALUES
(10, 'gui', '123', '123', NULL, NULL, NULL, NULL),
(11, 'vitor', '12345', '12345', 'vitao375@hotmail.com', '12345', '12345', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `coordenadortcc`
--

CREATE TABLE IF NOT EXISTS `coordenadortcc` (
  `idCordenador` int(10) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(25) DEFAULT NULL,
  `siape` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `instituicao` varchar(100) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `LinkLattes` varchar(200) NOT NULL,
  `Senha` varchar(30) DEFAULT NULL,
  `Formacao` varchar(50) NOT NULL,
  PRIMARY KEY (`idCordenador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcao`
--

CREATE TABLE IF NOT EXISTS `funcao` (
  `codFunc` int(10) NOT NULL AUTO_INCREMENT,
  `NomFunc` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codFunc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `funcao`
--

INSERT INTO `funcao` (`codFunc`, `NomFunc`) VALUES
(1, 'CoordenadorDeTCC'),
(2, 'Orientador'),
(3, 'Avaliador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `monografia`
--

CREATE TABLE IF NOT EXISTS `monografia` (
  `CodAluno` int(10) DEFAULT NULL,
  `idTurma` int(10) DEFAULT NULL,
  `hora` varchar(12) DEFAULT NULL,
  `Arquivo` varchar(200) DEFAULT NULL,
  `Local` varchar(200) DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `Resumo` varchar(250) DEFAULT NULL,
  `Titulo` varchar(100) DEFAULT NULL,
  `Tema` varchar(100) DEFAULT NULL,
  KEY `CodAluno` (`CodAluno`),
  KEY `idTurma` (`idTurma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota`
--

CREATE TABLE IF NOT EXISTS `nota` (
  `codNota` int(10) NOT NULL AUTO_INCREMENT,
  `NotaMono` float DEFAULT NULL,
  `Arquivo` varchar(250) DEFAULT NULL,
  `Comentarios` varchar(250) DEFAULT NULL,
  `idAval` int(10) DEFAULT NULL,
  `codAluno` int(10) NOT NULL,
  PRIMARY KEY (`codNota`),
  KEY `idAval` (`idAval`),
  KEY `codAluno` (`codAluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `idAval` int(10) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `siape` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `instituicao` varchar(100) DEFAULT NULL,
  `Área` varchar(50) DEFAULT NULL,
  `LinkLattes` varchar(200) DEFAULT NULL,
  `Senha` varchar(50) DEFAULT NULL,
  `Formacao` varchar(50) DEFAULT NULL,
  `codFunc` int(10) NOT NULL,
  PRIMARY KEY (`idAval`),
  KEY `codFunc` (`codFunc`),
  KEY `codFunc_2` (`codFunc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `idTurma` int(10) NOT NULL AUTO_INCREMENT,
  `Ano` varchar(10) DEFAULT NULL,
  `Curso` varchar(25) DEFAULT NULL,
  `idCordenador` int(10) DEFAULT NULL,
  PRIMARY KEY (`idTurma`),
  KEY `idCordenador` (`idCordenador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `monografia`
--
ALTER TABLE `monografia`
  ADD CONSTRAINT `monografia_ibfk_1` FOREIGN KEY (`CodAluno`) REFERENCES `aluno` (`CodAluno`),
  ADD CONSTRAINT `monografia_ibfk_2` FOREIGN KEY (`idTurma`) REFERENCES `turma` (`idTurma`);

--
-- Limitadores para a tabela `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `AlunoNota` FOREIGN KEY (`codAluno`) REFERENCES `aluno` (`CodAluno`),
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`idAval`) REFERENCES `professor` (`idAval`);

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `professor_ibfk_1` FOREIGN KEY (`codFunc`) REFERENCES `funcao` (`codFunc`);

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`idCordenador`) REFERENCES `coordenadortcc` (`idCordenador`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
