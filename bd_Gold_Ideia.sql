-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 20-Set-2018 às 14:24
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bd_Gold_Ideia`
--
CREATE DATABASE IF NOT EXISTS `bd_Gold_Ideia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_Gold_Ideia`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_ideias`
--

CREATE TABLE IF NOT EXISTS `tbl_ideias` (
  `ide_cod` int(11) NOT NULL AUTO_INCREMENT,
  `ide_nome` varchar(150) NOT NULL,
  `ide_tipo` int(11) NOT NULL,
  `ide_resumo` varchar(150) NOT NULL,
  `ide_completo` varchar(255) NOT NULL,
  `ide_usu` int(11) NOT NULL,
  PRIMARY KEY (`ide_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_investimeto`
--

CREATE TABLE IF NOT EXISTS `tbl_investimeto` (
  `inv_cod` int(11) NOT NULL AUTO_INCREMENT,
  `inv_usu` int(11) NOT NULL,
  `inv_ideia` int(11) NOT NULL,
  `inv_valor` double NOT NULL,
  PRIMARY KEY (`inv_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `log_cod` int(11) NOT NULL AUTO_INCREMENT,
  `log_login` varchar(150) NOT NULL,
  `log_senha` varchar(150) NOT NULL,
  PRIMARY KEY (`log_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_tipoideia`
--

CREATE TABLE IF NOT EXISTS `tbl_tipoideia` (
  `tpi_cod` int(11) NOT NULL AUTO_INCREMENT,
  `tpi_nome` varchar(150) NOT NULL,
  `tpi_descricao` varchar(255) NOT NULL,
  `tpi_acesso` int(11) NOT NULL,
  PRIMARY KEY (`tpi_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_tipousu`
--

CREATE TABLE IF NOT EXISTS `tbl_tipousu` (
  `tip_cod` int(11) NOT NULL AUTO_INCREMENT,
  `tip_nome` varchar(150) NOT NULL,
  `tip_descricao` varchar(255) NOT NULL,
  PRIMARY KEY (`tip_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuario`
--

CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `usu_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `usu_logCod` int(11) NOT NULL,
  `usu_nome` varchar(150) NOT NULL,
  `usu_email` varchar(150) NOT NULL,
  `usu_tipo` int(11) NOT NULL,
  PRIMARY KEY (`usu_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
