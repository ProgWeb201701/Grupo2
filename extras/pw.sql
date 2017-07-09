-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 09-Jul-2017 às 15:20
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
  UNIQUE KEY `matricula_unica` (`Matricula`),
  KEY `Matricula` (`Matricula`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `coordenadortcc`
--

INSERT INTO `coordenadortcc` (`idCordenador`, `Nome`, `siape`, `email`, `instituicao`, `Area`, `LinkLattes`, `Senha`, `Formacao`) VALUES
(1, 'prof', '12345', 'prof@prof.com.br', 'unipampa', 'haha', 'porf@hahah', '12345', 'doc');

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
  `codAvaliacao` int(10) NOT NULL AUTO_INCREMENT,
  `Nota` float DEFAULT NULL,
  `Arquivo` varchar(250) DEFAULT NULL,
  `Parecer` varchar(250) DEFAULT NULL,
  `idAval` int(10) DEFAULT NULL,
  `codAluno` int(10) NOT NULL,
  PRIMARY KEY (`codAvaliacao`),
  KEY `idAval` (`idAval`),
  KEY `codAluno` (`codAluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

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
  `area` varchar(50) DEFAULT NULL,
  `LinkLattes` varchar(200) DEFAULT NULL,
  `Senha` varchar(50) DEFAULT NULL,
  `Formacao` varchar(50) DEFAULT NULL,
  `codFunc` int(10) DEFAULT NULL,
  PRIMARY KEY (`idAval`),
  UNIQUE KEY `siape_unico` (`siape`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`idAval`, `Nome`, `siape`, `email`, `instituicao`, `area`, `LinkLattes`, `Senha`, `Formacao`, `codFunc`) VALUES
(30, 'Guilherme Arcano', '152020028', 'guilthys@gmail.com', 'Unipampa', 'Matematica ', 'meuLattes@hahha', '12345', 'Mestre', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefa`
--

CREATE TABLE IF NOT EXISTS `tarefa` (
  `codTarefa` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `dinicio` varchar(50) NOT NULL,
  `dfim` varchar(50) NOT NULL,
  `destinatario` varchar(150) NOT NULL,
  `arquivo` varchar(200) NOT NULL,
  `idAval` int(10) DEFAULT NULL,
  PRIMARY KEY (`codTarefa`),
  KEY `tarefa_fk` (`idAval`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tcc`
--

CREATE TABLE IF NOT EXISTS `tcc` (
  `idtcc` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `idAluno` int(6) DEFAULT NULL,
  `idOri` int(6) DEFAULT NULL,
  `idTurma` int(6) DEFAULT NULL,
  PRIMARY KEY (`idtcc`),
  KEY `fk_Aluno` (`idAluno`),
  KEY `fk_Orientador` (`idOri`),
  KEY `fk_turma` (`idTurma`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `idTurma` int(10) NOT NULL AUTO_INCREMENT,
  `codigoturma` varchar(50) DEFAULT NULL,
  `semestre` varchar(10) DEFAULT NULL,
  `Curso` varchar(25) DEFAULT NULL,
  `idCordenador` int(10) DEFAULT NULL,
  PRIMARY KEY (`idTurma`),
  KEY `idCordenador` (`idCordenador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

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
-- Limitadores para a tabela `tcc`
--
ALTER TABLE `tcc`
  ADD CONSTRAINT `fk_Aluno` FOREIGN KEY (`idAluno`) REFERENCES `aluno` (`CodAluno`),
  ADD CONSTRAINT `fk_Orientador` FOREIGN KEY (`idOri`) REFERENCES `professor` (`idAval`),
  ADD CONSTRAINT `fk_turma` FOREIGN KEY (`idTurma`) REFERENCES `turma` (`idTurma`);

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`idCordenador`) REFERENCES `coordenadortcc` (`idCordenador`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
