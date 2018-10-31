-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Out-2018 às 21:34
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doeesperanca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `orfanatos`
--

CREATE TABLE `orfanatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `estado` varchar(40) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(40) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `horario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `orfanatos`
--

INSERT INTO `orfanatos` (`id`, `nome`, `estado`, `endereco`, `telefone`, `email`, `horario`) VALUES
(1, 'Qualquer Nome', 'Rio de Janeiro, RJ', 'Rua Alguma coisa, 300', '999999999', 'teste@teste.com', 'Segunda à sexta'),
(2, 'Outro Nome', 'São Paulo, SP', 'Rua Qualquer, 000', '999999999', 'teste@teste.com', 'Quarta feira - de 6 às 18 horas'),
(3, 'Outro Nome', 'São Paulo, SP', 'Rua Qualquer, 000', '999999999', 'teste@teste.com', 'Quarta feira - de 6 às 18 horas'),
(4, 'Outro Nome', 'São Paulo, SP', 'Rua Qualquer, 000', '999999999', 'teste@teste.com', 'Quarta feira - de 6 às 18 horas'),
(5, 'Outro Nome', 'São Paulo, SP', 'Rua Qualquer, 000', '999999999', 'teste@teste.com', 'Quarta feira - de 6 às 18 horas'),
(6, 'Outro Nome', 'São Paulo, SP', 'Rua Qualquer, 000', '999999999', 'teste@teste.com', 'Quarta feira - de 6 às 18 horas'),
(7, 'Outro Nome', 'São Paulo, SP', 'Rua Qualquer, 000', '999999999', 'teste@teste.com', 'Quarta feira - de 6 às 18 horas'),
(8, 'Outro Nome', 'São Paulo, SP', 'Rua Qualquer, 000', '999999999', 'teste@teste.com', 'Quarta feira - de 6 às 18 horas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orfanatos`
--
ALTER TABLE `orfanatos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orfanatos`
--
ALTER TABLE `orfanatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
