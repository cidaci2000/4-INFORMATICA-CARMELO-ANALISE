-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/09/2024 às 01:08
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `wakeup`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
--

CREATE TABLE `aluno` (
  `idaluno` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `datadenascimento` date NOT NULL,
  `cpf` int(20) NOT NULL,
  `telefone` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `redessociais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `aluno`
--

INSERT INTO `aluno` (`idaluno`, `nome`, `endereco`, `datadenascimento`, `cpf`, `telefone`, `email`, `senha`, `redessociais`) VALUES
(188, '', '', '0000-00-00', 0, 0, '', '', ''),
(189, '', '', '0000-00-00', 0, 0, '', '', ''),
(190, '', '', '0000-00-00', 0, 0, '', '', ''),
(191, '', '', '0000-00-00', 0, 0, '', '', ''),
(192, 'Mirella', 'n', '2024-08-22', 231, 45, '123', '123', 'AA'),
(193, '', '', '0000-00-00', 0, 0, '', '', ''),
(194, '', '', '0000-00-00', 0, 0, '', '', ''),
(195, 'Mirella', 'n', '2024-08-22', 231, 45, 'n', '123', 'AA'),
(196, '', '', '0000-00-00', 0, 0, '', '', ''),
(197, '', '', '0000-00-00', 0, 0, '', '', ''),
(198, '', '', '0000-00-00', 0, 0, '', '', ''),
(199, 'Mirella ', 'rua ...', '2006-10-09', 0, 2147483647, 'mirella@gmail.com', '123', 'mirella'),
(200, '', '', '0000-00-00', 0, 0, '', '', ''),
(201, '', '', '0000-00-00', 0, 0, '', '', ''),
(202, 'Mirella ', 'rua ...', '2024-08-23', 0, 2147483647, 'mirella@gmail.com', '123', 'mirella'),
(203, '', '', '0000-00-00', 0, 0, '', '', ''),
(204, '', '', '0000-00-00', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `curso`
--

CREATE TABLE `curso` (
  `idcurso` int(11) NOT NULL,
  `nomedocurso` varchar(100) DEFAULT NULL,
  `duracao` varchar(50) DEFAULT NULL,
  `datainicio` date DEFAULT NULL,
  `datatermino` date DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `curso`
--

INSERT INTO `curso` (`idcurso`, `nomedocurso`, `duracao`, `datainicio`, `datatermino`, `imagem`) VALUES
(1, NULL, '6', '2024-05-09', '2024-09-26', 'imagens/1.jpg'),
(2, 'MIRELLA', '5', '2024-07-04', '2024-09-26', 'imagens/1.jpg'),
(3, 'MIRELLA', '3', '2024-08-08', '2024-09-25', 'imagens/5.jpg'),
(4, 'MUSICA', '10', '2024-05-09', '2024-12-26', 'imagens/apple-touch-icon.png'),
(5, 'TEATRO', '2', '2024-09-04', '2024-11-13', 'imagens/3.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idfuncionario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` int(20) NOT NULL,
  `telefone` int(20) NOT NULL,
  `datadenascimento` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `formacao` varchar(100) NOT NULL,
  `redessociais` varchar(50) NOT NULL,
  `datadeinicio` date NOT NULL,
  `tipo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`idfuncionario`, `nome`, `cpf`, `telefone`, `datadenascimento`, `email`, `senha`, `formacao`, `redessociais`, `datadeinicio`, `tipo`) VALUES
(3, 'Mirella', 231, 45, '2024-08-22', 'dsaa@m', '123', 'm', 'AA', '0000-00-00', 0),
(10, 'Mirella ', 111111111, 2147483647, '2006-10-09', 'mi@gmail.com', '123', 'ksdki', 'mirella', '0000-00-00', 1),
(13, 'Mirella ', 0, 2147483647, '2024-08-23', 'mirellamayara130@gmail.com', '123', 'ksdki', 'mirella', '2024-08-23', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `inscricao`
--

CREATE TABLE `inscricao` (
  `idinscricao` int(11) NOT NULL,
  `nome` varchar(110) NOT NULL,
  `datadenascimento` date NOT NULL,
  `telefone` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cursos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `inscricao`
--

INSERT INTO `inscricao` (`idinscricao`, `nome`, `datadenascimento`, `telefone`, `email`, `cursos`) VALUES
(98, '', '0000-00-00', 4, '', 'Educação Financeira'),
(99, '', '0000-00-00', 4, '', 'Educação Financeira'),
(100, '', '0000-00-00', 0, '', ''),
(101, '', '0000-00-00', 0, '', ''),
(102, '', '0000-00-00', 0, '', ''),
(103, '', '0000-00-00', 0, '', ''),
(104, '', '0000-00-00', 0, '', ''),
(105, '', '0000-00-00', 0, '', ''),
(106, '', '0000-00-00', 0, '', ''),
(107, '', '0000-00-00', 0, '', ''),
(108, '', '0000-00-00', 0, '', ''),
(109, '', '0000-00-00', 0, '', ''),
(110, '', '0000-00-00', 0, '', ''),
(111, '', '0000-00-00', 0, '', ''),
(112, '', '0000-00-00', 0, '', ''),
(113, '', '0000-00-00', 0, '', ''),
(114, '', '0000-00-00', 0, '', ''),
(115, '', '0000-00-00', 0, '', ''),
(116, '', '0000-00-00', 0, '', ''),
(117, '', '0000-00-00', 0, '', ''),
(118, '', '0000-00-00', 0, '', ''),
(119, '', '0000-00-00', 0, '', ''),
(120, '', '0000-00-00', 0, '', ''),
(121, '', '0000-00-00', 0, '', ''),
(122, '', '0000-00-00', 0, '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registro`
--

CREATE TABLE `registro` (
  `idregistro` varchar(50) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nomedocurso` varchar(100) NOT NULL,
  `frequencia` varchar(20) NOT NULL,
  `nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `responsavel`
--

CREATE TABLE `responsavel` (
  `idresponsavel` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` int(20) NOT NULL,
  `datadenascimento` varchar(11) NOT NULL,
  `nomealuno` varchar(100) NOT NULL,
  `responsavel` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `redessociais` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `responsavel`
--

INSERT INTO `responsavel` (`idresponsavel`, `nome`, `cpf`, `datadenascimento`, `nomealuno`, `responsavel`, `endereco`, `telefone`, `email`, `senha`, `redessociais`) VALUES
(1, '', 0, '', '', '', '', 0, '', '', ''),
(2, '', 0, '', '', '', '', 0, '', '', ''),
(3, 'Mirella', 231, '2024-08-22', 'eth', 'mae', 'n', 0, '', '', ''),
(4, '', 0, '', '', '', '', 0, '', '', ''),
(5, '', 0, '', '', '', '', 0, '', '', ''),
(6, 'Mirella', 231, '2024-08-22', '', 'outro', 'dsadads', 45, '', '', ''),
(7, '', 0, '', '', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `turma`
--

CREATE TABLE `turma` (
  `idturma` int(11) NOT NULL,
  `nomedaturma` varchar(11) NOT NULL,
  `nomedocurso` varchar(100) NOT NULL,
  `nomedoprofessor` varchar(80) NOT NULL,
  `quantidadealunos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `turma`
--

INSERT INTO `turma` (`idturma`, `nomedaturma`, `nomedocurso`, `nomedoprofessor`, `quantidadealunos`) VALUES
(1, '', '', '', 0),
(2, '', '', '', 0),
(3, 'M', 'M', 'M', 0),
(4, '', '', '', 0),
(5, '', '', '', 0),
(6, '', '', '', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idaluno`);

--
-- Índices de tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idcurso`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idfuncionario`);

--
-- Índices de tabela `inscricao`
--
ALTER TABLE `inscricao`
  ADD PRIMARY KEY (`idinscricao`);

--
-- Índices de tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`idresponsavel`);

--
-- Índices de tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`idturma`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `idaluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idfuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `inscricao`
--
ALTER TABLE `inscricao`
  MODIFY `idinscricao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT de tabela `responsavel`
--
ALTER TABLE `responsavel`
  MODIFY `idresponsavel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `idturma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
