-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Maio-2017 às 19:53
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atas`
--

CREATE TABLE `atas` (
  `id` int(11) NOT NULL,
  `data` varchar(255) NOT NULL,
  `local` varchar(255) DEFAULT NULL,
  `deliberacoes` varchar(255) DEFAULT NULL,
  `participantes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atuaxa_ies`
--

CREATE TABLE `atuaxa_ies` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `planoensino`
--

CREATE TABLE `planoensino` (
  `id` int(11) NOT NULL,
  `curs` varchar(255) NOT NULL,
  `ano` varchar(255) NOT NULL,
  `semestre` varchar(255) NOT NULL,
  `disc` varchar(255) NOT NULL,
  `chm` varchar(255) NOT NULL,
  `periodo` varchar(255) NOT NULL,
  `prof` varchar(255) NOT NULL,
  `mat_prof` varchar(255) NOT NULL,
  `ementa` text NOT NULL,
  `comp` text NOT NULL,
  `met` text NOT NULL,
  `a1` varchar(255) NOT NULL,
  `a2` varchar(255) NOT NULL,
  `a3` varchar(255) NOT NULL,
  `a4` varchar(255) NOT NULL,
  `a5` varchar(255) NOT NULL,
  `avaiacao` text NOT NULL,
  `bibliografia` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ppc`
--

CREATE TABLE `ppc` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `modalidade` varchar(255) NOT NULL,
  `denominacao` varchar(255) NOT NULL,
  `habilitacao` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `turnos` varchar(255) NOT NULL,
  `vagas` varchar(255) NOT NULL,
  `carga` varchar(255) NOT NULL,
  `regime` varchar(255) NOT NULL,
  `periodos` varchar(255) NOT NULL,
  `nome_cord` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `titulacao` varchar(255) NOT NULL,
  `tempo_dedi` varchar(255) NOT NULL,
  `pc` text NOT NULL,
  `pe` text NOT NULL,
  `fa` text NOT NULL,
  `repre` text NOT NULL,
  `sapea` varchar(9000) NOT NULL,
  `sapc` text NOT NULL,
  `tcc` text NOT NULL,
  `estagio` text NOT NULL,
  `politica` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `maiortitulacao` varchar(255) NOT NULL,
  `area_formacao` varchar(255) NOT NULL,
  `curriculo_lattes` varchar(255) NOT NULL,
  `data_atualizacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `simulacao`
--

CREATE TABLE `simulacao` (
  `id` int(11) NOT NULL,
  `op1` int(11) NOT NULL,
  `op2` int(11) NOT NULL,
  `op3` int(11) NOT NULL,
  `op4` int(11) NOT NULL,
  `op5` int(11) NOT NULL,
  `op6` int(11) NOT NULL,
  `op7` int(11) NOT NULL,
  `op8` int(11) NOT NULL,
  `op9` int(11) NOT NULL,
  `rdg1` text NOT NULL,
  `op11` int(11) NOT NULL,
  `op12` int(11) NOT NULL,
  `op13` int(11) NOT NULL,
  `op14` int(11) NOT NULL,
  `op15` int(11) NOT NULL,
  `op16` int(11) NOT NULL,
  `op17` int(11) NOT NULL,
  `op18` int(11) NOT NULL,
  `op19` int(11) NOT NULL,
  `op20` int(11) NOT NULL,
  `op21` int(11) NOT NULL,
  `op22` int(11) NOT NULL,
  `op23` int(11) NOT NULL,
  `op24` int(11) NOT NULL,
  `op25` int(11) NOT NULL,
  `rgd2` text NOT NULL,
  `op27` int(11) NOT NULL,
  `op28` int(11) NOT NULL,
  `op29` int(11) NOT NULL,
  `op30` int(11) NOT NULL,
  `op31` int(11) NOT NULL,
  `op32` int(11) NOT NULL,
  `op33` int(11) NOT NULL,
  `op34` int(11) NOT NULL,
  `op35` int(11) NOT NULL,
  `op36` int(11) NOT NULL,
  `rgd3` text NOT NULL,
  `n1` float NOT NULL,
  `n2` float NOT NULL,
  `n3` float NOT NULL,
  `nf` float NOT NULL,
  `sugestao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atas`
--
ALTER TABLE `atas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planoensino`
--
ALTER TABLE `planoensino`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppc`
--
ALTER TABLE `ppc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `simulacao`
--
ALTER TABLE `simulacao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atas`
--
ALTER TABLE `atas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `planoensino`
--
ALTER TABLE `planoensino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ppc`
--
ALTER TABLE `ppc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
