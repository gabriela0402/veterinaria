-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/11/2025 às 02:40
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `veterinaria`
--
CREATE DATABASE IF NOT EXISTS `veterinaria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `veterinaria`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `animal`
--

CREATE TABLE `animal` (
  `Raca` varchar(50) DEFAULT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `ID_Animal` int(11) NOT NULL,
  `Idade` int(11) DEFAULT NULL,
  `Sexo` varchar(10) DEFAULT NULL,
  `Especie` varchar(50) DEFAULT NULL,
  `Peso` decimal(5,2) DEFAULT NULL,
  `Observacao` varchar(255) DEFAULT NULL,
  `idDono_animal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `animal`
--

INSERT INTO `animal` (`Raca`, `Nome`, `ID_Animal`, `Idade`, `Sexo`, `Especie`, `Peso`, `Observacao`, `idDono_animal`) VALUES
('Persa', 'Betty', 2, 5, 'Fêmea', 'Gato', 5.60, 'Alergia leve', 2),
('Persa', 'Jasmin', 4, 5, 'Fêmea', 'Gato', 13.00, 'Ela é pequena', 1),
('Pastor Alemão', 'Elizabeth', 5, 2, 'Fêmea', 'Cachorro', 22.00, 'Ela é grande', 2),
('Persa', 'Taylor', 6, 11, 'Macho', 'Gato', 12.00, 'Ele é agitado.', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `consulta`
--

CREATE TABLE `consulta` (
  `ID_consulta` int(11) NOT NULL,
  `Data_consulta` date DEFAULT NULL,
  `Procedimento` varchar(100) DEFAULT NULL,
  `Horario` varchar(30) DEFAULT NULL,
  `Observacao` varchar(255) DEFAULT NULL,
  `ID_Animal` int(11) DEFAULT NULL,
  `ID_veterinario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `consulta`
--

INSERT INTO `consulta` (`ID_consulta`, `Data_consulta`, `Procedimento`, `Horario`, `Observacao`, `ID_Animal`, `ID_veterinario`) VALUES
(2, '2024-01-16', 'Check-up', '14:00', 'Consulta de rotina', 2, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `dono_animal`
--

CREATE TABLE `dono_animal` (
  `Telefone` varchar(20) DEFAULT NULL,
  `Nome` varchar(80) DEFAULT NULL,
  `ID_Dono_animal` int(11) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `CPF` varchar(14) DEFAULT NULL,
  `Endereco` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `dono_animal`
--

INSERT INTO `dono_animal` (`Telefone`, `Nome`, `ID_Dono_animal`, `Email`, `CPF`, `Endereco`) VALUES
('(11) 9999-8888', 'João', 1, 'joao@email.com', '123.456.789-00', 'Rua das Flores, 100'),
('(11) 7777-6666', 'Maria', 2, 'maria@email.com', '987.654.321-00', 'Av. Central, 200');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `ID_veterinario` int(11) NOT NULL,
  `CRMV` varchar(20) DEFAULT NULL,
  `Nome` varchar(80) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Telefone` varchar(20) DEFAULT NULL,
  `Especialidade` varchar(50) DEFAULT NULL,
  `Horario` varchar(30) DEFAULT NULL,
  `Sexo` varchar(10) DEFAULT NULL,
  `Data_Nascimento` date DEFAULT NULL,
  `CPF` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`ID_veterinario`, `CRMV`, `Nome`, `Email`, `Telefone`, `Especialidade`, `Horario`, `Sexo`, `Data_Nascimento`, `CPF`) VALUES
(1, '12345-SP', 'Dr. Carlos', 'carlos@vet.com', '(11) 98888-7777', 'Clínico Geral', '08:00-17:00', 'M', '1985-05-20', '111.222.333-44'),
(2, '67890-SP', 'Dra. Ana', 'ana@vet.com', '(11) 97777-6666', 'Cirurgia', '09:00-18:00', 'F', '1990-08-15', '555.666.777-88');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID_usuario` int(11) NOT NULL,
  `Telefone` varchar(20) DEFAULT NULL,
  `Tipo` varchar(20) DEFAULT NULL,
  `CPF` varchar(14) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Senha` varchar(255) DEFAULT NULL,
  `Nome` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`ID_usuario`, `Telefone`, `Tipo`, `CPF`, `Email`, `Senha`, `Nome`) VALUES
(1, '1111111111', NULL, '1111111111', 'gabi@gmail.com', '$2y$10$Q0VoBwD4xlLA4KyO9MRYduhPl0cuO/qY6qrSIzbI60b09ss36Z8kK', 'Gabriela Romano'),
(2, '13131313', NULL, '1111111112', 'a@gmail.com', '$2y$10$HeXc0SbvVty8.2c1.9VPSeKtC2uksnRVz4CfFFzux4yF8fxly/5xi', 'Taylor Swift');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`ID_Animal`),
  ADD KEY `idDono_animal` (`idDono_animal`);

--
-- Índices de tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`ID_consulta`),
  ADD KEY `ID_Animal` (`ID_Animal`),
  ADD KEY `ID_veterinario` (`ID_veterinario`);

--
-- Índices de tabela `dono_animal`
--
ALTER TABLE `dono_animal`
  ADD PRIMARY KEY (`ID_Dono_animal`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`ID_veterinario`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animal`
--
ALTER TABLE `animal`
  MODIFY `ID_Animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `consulta`
--
ALTER TABLE `consulta`
  MODIFY `ID_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `dono_animal`
--
ALTER TABLE `dono_animal`
  MODIFY `ID_Dono_animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `ID_veterinario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`idDono_animal`) REFERENCES `dono_animal` (`ID_Dono_animal`);

--
-- Restrições para tabelas `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`ID_Animal`) REFERENCES `animal` (`ID_Animal`),
  ADD CONSTRAINT `consulta_ibfk_2` FOREIGN KEY (`ID_veterinario`) REFERENCES `funcionario` (`ID_veterinario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
