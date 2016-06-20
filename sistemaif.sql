-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Jun-2016 às 18:03
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sistemaif`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `demanda`
--

CREATE TABLE IF NOT EXISTS `demanda` (
  `iddemanda` int(10) unsigned NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `empresa` varchar(200) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `descricao` text,
  `envio` datetime DEFAULT NULL,
  `finalizada` datetime DEFAULT NULL,
  `atendida` tinyint(1) DEFAULT NULL,
  `especialista` text
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `demanda`
--

INSERT INTO `demanda` (`iddemanda`, `nome`, `empresa`, `telefone`, `email`, `descricao`, `envio`, `finalizada`, `atendida`, `especialista`) VALUES
(3, 'Ens', 'do ensino', '54999999', 'ensino@ensino.com', 'dasdiasd', '2016-01-04 22:48:55', '2016-01-15 00:29:30', 5, ''),
(4, 'pesquisa', 'pesquisa', '56494835468', 'AUHS@aysd.com', 'auysdgyausgdyugasd', '2016-01-04 22:51:59', '2016-01-15 00:29:21', 5, ''),
(5, 'teste', 'dasd', '5454564564', 'dasdas@dasd.com', 'dasijdais', '2016-01-06 00:30:26', '0000-00-00 00:00:00', 2, ''),
(6, 'testew', 'ads', '4546546546', 'dasd@das.com', 'asdsdasa', '2016-01-10 22:49:56', '0000-00-00 00:00:00', 1, ''),
(7, 'asd', 'asd', '5646546', 'dasd@das.com', 'asdasdas', '2016-01-10 22:51:13', '0000-00-00 00:00:00', 1, ''),
(8, 'asd', 'asd', '5646546', 'dasd@das.com', 'asdasdas', '2016-01-10 22:51:23', '2016-01-15 00:31:38', 5, ''),
(9, 'asdasd', 'adsasd', '6545646', 'dasdasd@dasd.comk', 'asdasdasda', '2016-01-10 22:51:34', '0000-00-00 00:00:00', 4, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE IF NOT EXISTS `historico` (
  `idhistorico` int(10) unsigned NOT NULL,
  `iddemanda` int(10) unsigned NOT NULL,
  `atualizada` datetime DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `encaminhar` enum('pesquisa','extensao','ensino','outro','especialista') DEFAULT NULL,
  `contato` text
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`idhistorico`, `iddemanda`, `atualizada`, `estado`, `encaminhar`, `contato`) VALUES
(14, 3, '2016-01-04 22:48:55', 'Demandante submeteu.', '', ''),
(15, 3, '2016-01-04 22:49:20', 'Encaminhado para ensino.', 'ensino', ''),
(16, 3, '2016-01-04 22:49:37', 'Encaminhado para plebey@plebe.com.', 'ensino', ''),
(17, 4, '2016-01-04 22:51:59', 'Demandante submeteu.', '', ''),
(18, 4, '2016-01-04 22:52:13', 'Encaminhado para pesquisa.', 'pesquisa', ''),
(19, 0, '2016-01-06 00:07:51', 'Demandante submeteu.', '', ''),
(20, 5, '2016-01-06 00:30:26', 'Demandante submeteu.', '', ''),
(21, 6, '2016-01-10 22:49:56', 'Demandante submeteu.', '', ''),
(22, 7, '2016-01-10 22:51:13', 'Demandante submeteu.', '', ''),
(23, 8, '2016-01-10 22:51:23', 'Demandante submeteu.', '', ''),
(24, 9, '2016-01-10 22:51:34', 'Demandante submeteu.', '', ''),
(25, 9, '2016-01-10 22:52:41', 'Encaminhado para ensino.', 'ensino', ''),
(26, 9, '2016-01-10 22:53:09', 'Encaminhado para ensino.', 'ensino', ''),
(27, 9, '2016-01-10 23:05:20', 'Encaminhado para ensino.', 'ensino', ''),
(28, 9, '2016-01-10 23:09:36', 'Encaminhado para ensino.', 'ensino', ''),
(29, 9, '2016-01-10 23:26:54', 'Encaminhado para ensino.', 'ensino', ''),
(30, 9, '2016-01-10 23:33:09', 'Encaminhado para ensino.', 'ensino', ''),
(31, 9, '2016-01-10 23:33:14', 'Encaminhado para ensino.', 'ensino', ''),
(32, 9, '2016-01-10 23:36:22', 'Encaminhado para ensino.', 'ensino', ''),
(33, 3, '2016-01-15 00:20:37', 'Demanda aceita por oi.', 'ensino', 'oi'),
(34, 8, '2016-01-15 00:26:29', 'Encaminhado para ensino.', 'ensino', ''),
(35, 4, '2016-01-15 00:26:35', 'Encaminhado para Tetudo.', '', ''),
(36, 4, '2016-01-15 00:26:46', 'Demanda aceita por Tetudo.', '', 'Tetudo'),
(37, 4, '2016-01-15 00:29:21', 'Demanda Finalizada.', '', ''),
(38, 3, '2016-01-15 00:29:30', 'Demanda Finalizada.', 'ensino', ''),
(39, 9, '2016-01-15 00:29:39', 'Encaminhado para Tetudo.', 'ensino', ''),
(40, 9, '2016-01-15 00:29:45', 'Demanda aceita por .', 'ensino', ''),
(41, 8, '2016-01-15 00:31:27', 'Encaminhado para Tetudo@tefu.com.', 'ensino', ''),
(42, 8, '2016-01-15 00:31:34', 'Demanda aceita por tetudo.', 'ensino', 'tetudo'),
(43, 8, '2016-01-15 00:31:38', 'Demanda Finalizada.', 'ensino', ''),
(44, 5, '2016-06-16 00:15:36', 'Encaminhado para ensino.', 'ensino', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(10) unsigned NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  `classe` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `email`, `senha`, `classe`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin', 'admin'),
(2, 'Pesquisa', 'pesquisa@pesquisa.com', 'pesquisa', 'pesquisa'),
(3, 'Ensino', 'ensino@ensino.com', 'ensino', 'ensino'),
(4, 'Extensão', 'extensa@extensao.com', 'extensao', 'extensao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demanda`
--
ALTER TABLE `demanda`
  ADD PRIMARY KEY (`iddemanda`);

--
-- Indexes for table `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`idhistorico`), ADD KEY `historico_FKIndex1` (`iddemanda`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demanda`
--
ALTER TABLE `demanda`
  MODIFY `iddemanda` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `historico`
--
ALTER TABLE `historico`
  MODIFY `idhistorico` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
