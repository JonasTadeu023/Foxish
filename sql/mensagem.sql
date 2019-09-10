-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Set-2019 às 02:10
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foxish`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id_msg` int(11) NOT NULL,
  `texto_msg` varchar(1000) DEFAULT NULL,
  `autor_msg` varchar(1000) DEFAULT NULL,
  `id_chat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`id_msg`, `texto_msg`, `autor_msg`, `id_chat`) VALUES
(1, 'Bom dia', 'Pedro', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id_msg`),
  ADD KEY `id_chat` (`id_chat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD CONSTRAINT `mensagem_ibfk_1` FOREIGN KEY (`id_chat`) REFERENCES `chat` (`id_chat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
