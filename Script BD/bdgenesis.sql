-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Nov-2021 às 17:16
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdgenesis`
--
CREATE DATABASE IF NOT EXISTS `bdgenesis` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bdgenesis`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `ID_ALUNO` int(11) NOT NULL AUTO_INCREMENT,
  `NOME_ALUNO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DATA_NASCIMENTO` date DEFAULT NULL,
  PRIMARY KEY (`ID_ALUNO`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`ID_ALUNO`, `NOME_ALUNO`, `DATA_NASCIMENTO`) VALUES
(2, 'Marina Rodrigues', '1999-01-01'),
(4, 'Joao Victor', '2002-04-18'),
(5, 'Beatriz Flores', '1998-12-12'),
(6, 'Alex Soares', '1988-08-22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_cursos`
--

CREATE TABLE IF NOT EXISTS `alunos_cursos` (
  `ID_ALUNO_CURSO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ALUNO` int(11) NOT NULL,
  `ID_CURSO` int(11) NOT NULL,
  PRIMARY KEY (`ID_ALUNO_CURSO`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `alunos_cursos`
--

INSERT INTO `alunos_cursos` (`ID_ALUNO_CURSO`, `ID_ALUNO`, `ID_CURSO`) VALUES
(2, 2, 2),
(4, 4, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `ID_CURSO` int(11) NOT NULL AUTO_INCREMENT,
  `NOME_CURSO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CARGA_HORARIA` int(11) NOT NULL,
  PRIMARY KEY (`ID_CURSO`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`ID_CURSO`, `NOME_CURSO`, `CARGA_HORARIA`) VALUES
(1, 'HTML e CSS', 10),
(2, 'PHP e MySQL', 8),
(3, 'JavaScript', 10),
(4, 'Python', 80),
(5, 'JAVA', 70);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SENHA` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `USUARIO` (`USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `USUARIO`, `SENHA`) VALUES
(1, 'admin', '25d55ad283aa400af464c76d713c07ad');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
