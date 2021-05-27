-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Maio-2021 às 20:40
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `prog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `img` varchar(30) NOT NULL,
  `cargo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `email`, `img`, `cargo`) VALUES
(1, 'teste', '202cb962ac59075b964b07152d234b70', 'teste@teste', 'user.png', 'user'),
(2, 'asd', '202cb962ac59075b964b07152d234b70', 'allanhivdc@gmail.com', 'user.png', 'user'),
(3, 'asdsad', '202cb962ac59075b964b07152d234b70', 'crossoverfriv@gmail.com', 'user.png', 'user'),
(4, 'fgsadfasf', '81dc9bdb52d04dc20036dbd8313ed055', 'rse@ts', 'user.png', 'user'),
(5, 'teste22', '202cb962ac59075b964b07152d234b70', 'teste@sadsa', 'user.png', 'user'),
(6, 'asdasdasd', '202cb962ac59075b964b07152d234b70', 'asdhjasbhkd@sadasd', 'user.png', 'user'),
(7, 'teste30', '202cb962ac59075b964b07152d234b70', 'teste30@teste30', 'user.png', 'user');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
