-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/10/2024 às 03:39
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eventos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `evento`
--

CREATE TABLE `evento` (
  `id_event` int(11) NOT NULL,
  `nm_event` varchar(255) NOT NULL,
  `dt_event` date NOT NULL,
  `hr_inicio_event` time NOT NULL,
  `hr_final_event` time NOT NULL,
  `descricao_event` text DEFAULT NULL,
  `local_event` varchar(255) DEFAULT NULL,
  `responsavel_event` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `evento`
--

INSERT INTO `evento` (`id_event`, `nm_event`, `dt_event`, `hr_inicio_event`, `hr_final_event`, `descricao_event`, `local_event`, `responsavel_event`) VALUES
(3, 'Festa comemoração jake', '2024-10-25', '00:00:00', '14:00:00', 'Jogos de comemoração', 'casa do ig', 'Guilherme'),
(4, 'Festa comemor', '2024-10-25', '00:00:00', '14:00:00', 'Jogos de comemoração', 'casa do ig', 'Guilherme'),
(5, 'Festa comemor', '2024-10-24', '12:30:00', '17:30:00', 'ad', 'ads', 'Guilherme'),
(9, 'Etec', '2024-10-20', '13:10:35', '20:45:00', 'Festa na etec para os estudantes', 'Etec', 'Israel'),
(171, 'Casa', '2024-10-31', '12:30:00', '17:30:00', 'Jorge e Matheus e Alegria', 'Casa do bradas', 'Primo'),
(172, 'Casa', '2024-10-31', '12:30:00', '17:30:00', 'Jorge e Matheus e Alegria', 'Casa do bradas', 'Primo'),
(173, 'Casa', '2024-10-31', '12:30:00', '17:30:00', 'Jorge e Matheus e Alegria', 'Casa do bradas', 'Primo'),
(174, 'Casa', '2024-10-31', '12:30:00', '17:30:00', 'Jorge e Matheus e Alegria', 'Casa do bradas', 'Primo');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_event`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
