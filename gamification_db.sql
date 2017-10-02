-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Out-2017 às 02:13
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamification_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conquista`
--

CREATE TABLE `conquista` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `guilda`
--

CREATE TABLE `guilda` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `valuesGuilda` varchar(300) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `crest` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `guilda`
--

INSERT INTO `guilda` (`id`, `name`, `valuesGuilda`, `description`, `crest`) VALUES
(1, 'Teste', 'um teste qualquer', 'ainda é apenas um teste', 'nao tem brasao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `patchnote`
--

CREATE TABLE `patchnote` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `id_user` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `trofeu`
--

CREATE TABLE `trofeu` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `image` varchar(256) NOT NULL,
  `id_user` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `user` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(50) DEFAULT NULL,
  `exp` double DEFAULT NULL,
  `notActive` tinyint(1) DEFAULT NULL,
  `id_guild` int(11) DEFAULT NULL,
  `picture` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`user`, `password`, `name`, `class`, `exp`, `notActive`, `id_guild`, `picture`) VALUES
('degepe', '123dgp321', 'Gabriel', 'Bardo', 0, 0, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_conquista`
--

CREATE TABLE `usuario_conquista` (
  `id_user` varchar(20) NOT NULL,
  `id_conquist` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conquista`
--
ALTER TABLE `conquista`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guilda`
--
ALTER TABLE `guilda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `patchnote`
--
ALTER TABLE `patchnote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `trofeu`
--
ALTER TABLE `trofeu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`user`),
  ADD KEY `id_guild` (`id_guild`);

--
-- Indexes for table `usuario_conquista`
--
ALTER TABLE `usuario_conquista`
  ADD PRIMARY KEY (`id_user`,`id_conquist`),
  ADD KEY `id_conquist` (`id_conquist`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`user`);

--
-- Limitadores para a tabela `patchnote`
--
ALTER TABLE `patchnote`
  ADD CONSTRAINT `patchnote_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`user`);

--
-- Limitadores para a tabela `trofeu`
--
ALTER TABLE `trofeu`
  ADD CONSTRAINT `trofeu_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`user`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_guild`) REFERENCES `guilda` (`id`);

--
-- Limitadores para a tabela `usuario_conquista`
--
ALTER TABLE `usuario_conquista`
  ADD CONSTRAINT `usuario_conquista_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`user`),
  ADD CONSTRAINT `usuario_conquista_ibfk_2` FOREIGN KEY (`id_conquist`) REFERENCES `conquista` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
