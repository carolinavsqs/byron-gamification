-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Nov-2017 às 00:00
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
CREATE DATABASE IF NOT EXISTS gamification_db;

-- --------------------------------------------------------

--
-- Estrutura da tabela `conquista`
--

CREATE TABLE `conquista` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `image` varchar(256) NOT NULL,
    `crest` varchar(256) NOT NULL
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
  `crest` varchar(256) NOT NULL,
  `exp` int not null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `guilda`
--

INSERT INTO `guilda` (`id`, `name`, `valuesGuilda`, `description`, `crest`,`exp`) VALUES
(1, 'Teste1', 'um teste qualquer', 'Guild 1', '_img/iconG/1.png/',0),
(2, 'Teste2', 'um teste qualquer', 'Guild 2', '_img/iconG/2.png',0),
(3, 'Teste3', 'um teste qualquer', 'Guild 3', '_img/iconG/3.png',0),
(4, 'Teste4', 'um teste qualquer', 'Guild 4', '_img/iconG/4.png',0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

CREATE TABLE `log` (
  `id` int(10) UNSIGNED NOT NULL,
  `hora` datetime NOT NULL,
  `ip` varchar(15) NOT NULL,
  `message` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `type` enum('add','edit','remove','xp') DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL,
  `user_modify` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `log`
--

INSERT INTO `log` (`id`, `hora`, `ip`, `message`, `type`, `user`, `user_modify`) VALUES
(1, '2017-10-15 19:46:00', '200.99.198.178', 'Adicionou uma Guilda para.', 'add', 'gabbs', 'fletcher'),
(4, '2017-11-06 23:30:44', '::1', 'Alterou seu about', 'edit', 'gabbs', NULL),
(9, '2017-11-06 23:37:55', '::1', 'Alterou seu mbti', 'edit', 'gabbs', NULL),
(21, '2017-11-06 23:53:23', '::1', 'Alterou seu allignment', 'edit', 'gabbs', NULL),
(22, '2017-11-06 23:53:23', '::1', 'Alterou seu about', 'edit', 'gabbs', NULL),
(27, '2017-11-07 00:01:27', '::1', 'Cadastrou um novo usuario', 'add', 'gabbs', NULL),
(28, '2017-11-07 00:05:55', '::1', 'Alterou seu about', 'edit', 'gabbs', NULL),
(29, '2017-11-07 00:06:39', '::1', 'Alterou sua data de nascimento', 'edit', 'gabbs', NULL),
(100, '2017-11-14 02:21:40', '0.0.00', 'Editou o log.', 'xp', 'gabbs', NULL),
(6747, '2017-11-15 08:20:21', '0.0.0.0', 'Teste Wyru', 'remove', 'gabbs', NULL),
(9000, '2017-11-09 07:23:38', '0.0.0.0', 'Testamos aqui na hora Wyru', 'xp', 'gabriel', NULL);

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
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `user` varchar(15) NOT NULL,
  `password` varchar(256) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(50) DEFAULT NULL,
  `exp` double DEFAULT NULL,
  `notActive` tinyint(1) DEFAULT NULL,
  `id_guild` int(11) DEFAULT NULL,
  `picture` varchar(256) DEFAULT NULL,
  `isDirector` tinyint(1) NOT NULL,
  `dateBirthday` date NOT NULL,
  `level` int(11) NOT NULL,
  `allignment` varchar(255) NOT NULL,
  `mbti` enum('','INTP','ENTJ','ENTP','INFJ','INFP','ENFJ','ENFP','ISTJ','ISFJ','ESTJ','ESFJ','ISTP','ISFP','ESTP','ESFP','INTJ') DEFAULT NULL,
  `about` varchar(255) NOT NULL,
  `attributes` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `expertise` varchar(255) NOT NULL,
  `genero` enum('M','F') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`user`, `password`, `name`, `class`, `exp`, `notActive`, `id_guild`, `picture`, `isDirector`, `dateBirthday`, `level`, `allignment`, `mbti`, `about`, `attributes`, `title`, `expertise`, `genero`) VALUES
('222', '10b4cf304d159860533f40710c7ad3124cfc054951be368f60c154d86e435b96', 'bvnm,33', 'bardo', 500, NULL, 1, NULL, 0, '1996-06-22', 0, '', NULL, '', '', '', '', 'M'),
('333', '10b4cf304d159860533f40710c7ad3124cfc054951be368f60c154d86e435b96', 'bvnm,332', 'bardo', NULL, NULL, 1, NULL, 0, '1996-06-22', 0, '', NULL, '', '', '', '', 'M'),
('5555', '10b4cf304d159860533f40710c7ad3124cfc054951be368f60c154d86e435b96', 'bvnm,3326\'\'', 'bardo', NULL, NULL, 1, NULL, 0, '1996-06-22', 0, '', NULL, '', '', '', '', 'M'),
('brenu', 'f8768d6db6803734ed730e6fd2382cd8a7c0ec422dc5ebee3b22d7078ad2e88c', 'Brenu', 'Guerreiro', NULL, NULL, 1, NULL, 0, '1996-02-22', 0, '', NULL, '', '', '', '', 'F'),
('carol', '30cf6d90d5cbeedd660ace7d54229fecf9aab1bdcb4fd7678dad7b781d994f88', 'Carolina Vasques', 'Bardo', 1000, NULL, 1, NULL, 0, '1997-04-29', 0, '', NULL, '', '', '', '', 'F'),
('fasjkla', '10b4cf304d159860533f40710c7ad3124cfc054951be368f60c154d86e435b96', 'tysfgahja', 'bardo', NULL, NULL, 1, NULL, 0, '1996-06-22', 0, '', NULL, '', '', '', '', 'M'),
('fletcher', '10b4cf304d159860533f40710c7ad3124cfc054951be368f60c154d86e435b96', 'carolina', 'bardo', NULL, NULL, 1, NULL, 0, '1996-06-22', 0, '', NULL, '', '', '', '', 'F'),
('gabbs', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'gabriel', 'bardo', 0, 0, 1, 'null', 0, '1996-06-22', 0, 'as vezes vai', '', 'eu so legal poxa', '', '', '', 'M');


-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_conquista`
--

CREATE TABLE `usuario_conquista` (
  `id_user` varchar(20) NOT NULL,
  `id_conquist` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_trofeu`
--

CREATE TABLE `usuario_trofeu` (
  `id_user` varchar(30) NOT NULL,
  `id_trofeu` int(11) NOT NULL
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
  ADD KEY `user` (`user`),
  ADD KEY `user_modify` (`user_modify`);

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
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `usuario_trofeu`
--
ALTER TABLE `usuario_trofeu`
  ADD PRIMARY KEY (`id_user`,`id_trofeu`),
  ADD KEY `id_trofeu` (`id_trofeu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9001;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_1` FOREIGN KEY (`user`) REFERENCES `usuario` (`user`),
  ADD CONSTRAINT `log_ibfk_2` FOREIGN KEY (`user_modify`) REFERENCES `usuario` (`user`);

--
-- Limitadores para a tabela `patchnote`
--
ALTER TABLE `patchnote`
  ADD CONSTRAINT `patchnote_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`user`);

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

--
-- Limitadores para a tabela `usuario_trofeu`
--
ALTER TABLE `usuario_trofeu`
  ADD CONSTRAINT `usuario_trofeu_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`user`),
  ADD CONSTRAINT `usuario_trofeu_ibfk_2` FOREIGN KEY (`id_trofeu`) REFERENCES `trofeu` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
