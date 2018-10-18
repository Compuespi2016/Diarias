-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 18/10/2018 às 21:09
-- Versão do servidor: 10.1.13-MariaDB
-- Versão do PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `DIARIA`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `BANCO`
--

CREATE TABLE `BANCO` (
  `COD_BANCO` varchar(5) DEFAULT NULL,
  `NOME_BANCO` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `BANCO`
--

INSERT INTO `BANCO` (`COD_BANCO`, `NOME_BANCO`) VALUES
('001', 'Banco do Brasil S.A.'),
('104', 'Caixa Econômica Federal'),
('237', 'Banco Bradesco S.A.'),
('184', 'Banco Itaú BBA S.A.'),
('260', 'NuBank');

-- --------------------------------------------------------

--
-- Estrutura para tabela `CADASTRADOS`
--

CREATE TABLE `CADASTRADOS` (
  `NOME` varchar(70) NOT NULL,
  `TELEFONE` varchar(14) DEFAULT NULL,
  `EMAIL` varchar(70) DEFAULT NULL,
  `CENTRO` varchar(40) DEFAULT NULL,
  `CAMPUS` varchar(40) NOT NULL,
  `MATRICULA` int(10) NOT NULL,
  `SENHA` varchar(30) NOT NULL,
  `TIPO` varchar(1) NOT NULL,
  `QTD_SOLICITACAO` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `CADASTRADOS`
--

INSERT INTO `CADASTRADOS` (`NOME`, `TELEFONE`, `EMAIL`, `CENTRO`, `CAMPUS`, `MATRICULA`, `SENHA`, `TIPO`, `QTD_SOLICITACAO`) VALUES
('RODRIGO PADUA', '03186988741587', 'ROUDRIGO@GMAIL.COM', 'CTU', 'POETA TORQUATO NETO', 1111111, '1111111', 'D', 3),
('Eloi Ícaro', '999999999', 'eloi@hotmail.com', 'CTU', 'Poeta Torquato Neto', 1234567, '123456', 'T', 0),
('Marcus', '999998888', 'marcus@hotmail.com', 'CTU', 'Poeta Torquato Neto', 2222222, '123456', 'E', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `PROP`
--

CREATE TABLE `PROP` (
  `USUARIO` varchar(4) NOT NULL,
  `SENHA` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `PROP`
--

INSERT INTO `PROP` (`USUARIO`, `SENHA`) VALUES
('prop', 'propuespi');

-- --------------------------------------------------------

--
-- Estrutura para tabela `SOLICITACAO`
--

CREATE TABLE `SOLICITACAO` (
  `COD_SOLICITACAO` int(11) NOT NULL,
  `MAT_SOLICITANTE` varchar(10) DEFAULT NULL,
  `NOME_EVENTO` varchar(50) DEFAULT NULL,
  `ABRANGENCIA` varchar(15) DEFAULT NULL,
  `TITULO_TRABALHO` varchar(100) DEFAULT NULL,
  `TITULO_PROJETO` varchar(100) DEFAULT NULL,
  `AUXILIO` char(1) DEFAULT NULL,
  `TIPO_AUXILIO` varchar(20) DEFAULT NULL,
  `DESCRICAO` varchar(350) DEFAULT NULL,
  `COD_AGENCIA` varchar(60) NOT NULL,
  `ANOS_AUXILIO` int(2) NOT NULL,
  `NUM_CONTA` varchar(15) DEFAULT NULL,
  `COD_NOME_BANCO` varchar(60) DEFAULT NULL,
  `LOCAL_EVENTO` varchar(50) DEFAULT NULL,
  `INICIO_EVENTO` varchar(10) DEFAULT NULL,
  `FIM_EVENTO` varchar(10) DEFAULT NULL,
  `VALIDACAO` varchar(15) NOT NULL DEFAULT 'Avaliando'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `SOLICITACAO`
--

INSERT INTO `SOLICITACAO` (`COD_SOLICITACAO`, `MAT_SOLICITANTE`, `NOME_EVENTO`, `ABRANGENCIA`, `TITULO_TRABALHO`, `TITULO_PROJETO`, `AUXILIO`, `TIPO_AUXILIO`, `DESCRICAO`, `COD_AGENCIA`, `ANOS_AUXILIO`, `NUM_CONTA`, `COD_NOME_BANCO`, `LOCAL_EVENTO`, `INICIO_EVENTO`, `FIM_EVENTO`, `VALIDACAO`) VALUES
(2, '1111111', 'Evento Tal', 'Internacional', 'Esse Mesmo', 'SCRUM na Veia', NULL, 'Passagem', 'dfshsfcgbndfgsdfgdfgdfg', '001211', 0, '111111', '', 'Bem Ali', '2018-11-06', '2018-11-10', 'Confirmado'),
(3, '1111111', 'um evento ai', 'Regional', '3 cara numa bis', 'assalto', NULL, 'Passagem', 'passa o celular playboy', '212121', 0, '23432434323', '', 'aculÃ¡', '2018-10-24', '2018-10-31', 'Avaliando'),
(4, '2222222', 'testando', 'Internacional', 'Dinos', 'Dinossauros do google', NULL, 'AjudaFinanceira', 'Birllll', '00303', 0, '0000012', '001 - Banco do Brasil S.A.', 'UFPI-Acre', '2018-10-19', '2018-10-26', 'Avaliando');

--
-- Gatilhos `SOLICITACAO`
--
DELIMITER $$
CREATE TRIGGER `tg_solicitacao` AFTER INSERT ON `SOLICITACAO` FOR EACH ROW UPDATE CADASTRADOS
SET QTD_SOLICITACAO = QTD_SOLICITACAO + 1
WHERE MATRICULA = NEW.MAT_SOLICITANTE
$$
DELIMITER ;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `CADASTRADOS`
--
ALTER TABLE `CADASTRADOS`
  ADD PRIMARY KEY (`MATRICULA`);

--
-- Índices de tabela `PROP`
--
ALTER TABLE `PROP`
  ADD PRIMARY KEY (`USUARIO`);

--
-- Índices de tabela `SOLICITACAO`
--
ALTER TABLE `SOLICITACAO`
  ADD PRIMARY KEY (`COD_SOLICITACAO`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `SOLICITACAO`
--
ALTER TABLE `SOLICITACAO`
  MODIFY `COD_SOLICITACAO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
