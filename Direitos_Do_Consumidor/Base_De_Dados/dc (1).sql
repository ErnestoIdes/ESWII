-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2017 at 11:59 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dc`
--

-- --------------------------------------------------------

--
-- Table structure for table `denuncias`
--

CREATE TABLE `denuncias` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `instituicao` varchar(45) NOT NULL,
  `provincia` varchar(45) NOT NULL,
  `local` varchar(100) NOT NULL,
  `Denuncia` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `denuncias`
--

INSERT INTO `denuncias` (`id`, `email`, `instituicao`, `provincia`, `local`, `Denuncia`) VALUES
(1, '', 'UEM', 'Maputo', 'Junta', 'kkkkkkkkkkkkkkkkk'),
(5, '', 'UEM', 'Maputo', 'nnn', 'nnnn'),
(4, '', 'UEM', 'Manica', 'nnnn', 'llllll'),
(6, '', 'UEM', 'Maputo', 'nnn', 'nnnn'),
(7, '', 'UEM', 'Inhambane', ' mmm', 'mmmm');

-- --------------------------------------------------------

--
-- Table structure for table `local`
--

CREATE TABLE `local` (
  `id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `av` varchar(50) NOT NULL,
  `numero` mediumint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questoes`
--

CREATE TABLE `questoes` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `questao` varchar(255) NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questoes`
--

INSERT INTO `questoes` (`id`, `email`, `questao`, `activo`) VALUES
(1, 'judelsonantonio@gmail.com', 'Porque', 0),
(6, 'judelsonantonio@gmail.com', 'porque', 1),
(5, 'judelsonantonio@gmail.com', 'Teste de sessao', 1),
(7, 'judelsonantonio@gmail.com', 'porque', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reclam`
--

CREATE TABLE `reclam` (
  `id` int(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `instituicao` varchar(45) NOT NULL,
  `provincia` varchar(45) NOT NULL,
  `local` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `reclamacao` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reclam`
--

INSERT INTO `reclam` (`id`, `email`, `instituicao`, `provincia`, `local`, `data`, `reclamacao`) VALUES
(3, '', 'UEM', 'Manica.', 'kkkkkkkk', '2017-11-08', 'opssssssssshhhhhhhhh'),
(4, '', 'UEM', 'Gaza.', 'Avenida xai-xai', '2017-11-22', 'Mal atendimento'),
(5, '', 'UEM', 'Gaza.', 'Avenida xai-xai', '2017-11-22', 'Mal atendimento'),
(6, '', 'UEM', 'Maputo.', 'llll', '2017-11-01', 'jjjj'),
(7, '', 'UEM', 'Inhambane.', 'jjjj', '2017-11-01', 'jjj');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(4) UNSIGNED ZEROFILL NOT NULL COMMENT 'Identificador unico do Usuario',
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contacto` varchar(9) NOT NULL,
  `nacionalidade` varchar(50) NOT NULL DEFAULT 'Mocambicana',
  `tipo` varchar(4) NOT NULL DEFAULT 'user' COMMENT 'User=usuario Normal e admin=Usuarios administradors',
  `estado` varchar(10) DEFAULT 'normal' COMMENT 'O estado pode ser normal, bloqueado eremovido',
  `existencia` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Se a conta estiver activa=1, e se estiver removida(apagada)=0',
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `contacto`, `nacionalidade`, `tipo`, `estado`, `existencia`, `senha`) VALUES
(0001, 'Francisco Libele', 'franciscolibele@gmail.com', '842915205', 'Mocambicana', 'admi', 'normal', 1, 'admin'),
(0017, 'Judelson Antonio Panzeca', 'judelsonantonio@gmail.com', '825152027', 'Mocambicana', 'user', 'normal', 1, '222222'),
(0020, 'Emilco Panzeca', 'emilcopanzeca@gmail.com', '825152027', 'Mocambicana', 'user', 'normal', 1, '123654');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `denuncias`
--
ALTER TABLE `denuncias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reclam`
--
ALTER TABLE `reclam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `denuncias`
--
ALTER TABLE `denuncias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `local`
--
ALTER TABLE `local`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questoes`
--
ALTER TABLE `questoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `reclam`
--
ALTER TABLE `reclam`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'Identificador unico do Usuario', AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
