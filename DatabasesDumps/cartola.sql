-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Maio-2024 às 15:54
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cartola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_jogadores`
--

CREATE TABLE `tb_jogadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `preco` float NOT NULL,
  `valorizacao` float NOT NULL,
  `ultPont` float NOT NULL,
  `media` float NOT NULL,
  `pontuacao` float NOT NULL,
  `posicao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_jogadores`
--

INSERT INTO `tb_jogadores` (`id`, `nome`, `status`, `preco`, `valorizacao`, `ultPont`, `media`, `pontuacao`, `posicao`) VALUES
(1, 'Vini Jr', 'Provavel', 20.05, 0, 0, 0, 0, 'Atacante');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_scouts`
--

CREATE TABLE `tb_scouts` (
  `id` int(11) NOT NULL,
  `scout` varchar(255) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_scouts`
--

INSERT INTO `tb_scouts` (`id`, `scout`, `valor`) VALUES
(1, 'Gol', 10),
(2, 'Finalizacao na Trave', 4),
(3, 'Assistencia', 7),
(4, 'Finalizacao pra fora', 0.5),
(5, 'Finalizacao Defendida', 1.5),
(6, 'Desarme', 1.8),
(7, 'Falta Sofrida', 0.8),
(8, 'Falta Cometida', -0.5),
(9, 'Cartao Amarelo', -2.5),
(10, 'Penalti Perdido', -6),
(11, 'Cartao Vermelho', -8),
(12, 'Gol Sofrido', -1.2),
(13, 'SG', 6),
(14, 'Defesa', 1.2),
(15, 'Penalti Defendido', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jogadores`
--
ALTER TABLE `tb_jogadores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_scouts`
--
ALTER TABLE `tb_scouts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jogadores`
--
ALTER TABLE `tb_jogadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_scouts`
--
ALTER TABLE `tb_scouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
