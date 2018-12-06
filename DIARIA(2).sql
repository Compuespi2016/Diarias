-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 06/12/2018 às 21:00
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
-- Estrutura para tabela `ARQUIVOS`
--

CREATE TABLE `ARQUIVOS` (
  `MATRICULA` int(10) NOT NULL,
  `ID_SOLICITACAO` int(11) NOT NULL,
  `TRANSPORTE` varchar(150) NOT NULL,
  `HOSPEDAGEM` varchar(150) NOT NULL,
  `ALIMENTACAO` varchar(150) NOT NULL,
  `VALIDACAO` varchar(20) NOT NULL DEFAULT 'Em Avaliacao',
  `JUSTIFICATIVA` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `ARQUIVOS`
--

INSERT INTO `ARQUIVOS` (`MATRICULA`, `ID_SOLICITACAO`, `TRANSPORTE`, `HOSPEDAGEM`, `ALIMENTACAO`, `VALIDACAO`, `JUSTIFICATIVA`) VALUES
(1111111, 9, '15441258961.pdf', '15441258962.pdf', '15441258963.pdf', 'Negado - Auditoria', 'conta nao estÃ¡ clara!!');

-- --------------------------------------------------------

--
-- Estrutura para tabela `AUDITORIA`
--

CREATE TABLE `AUDITORIA` (
  `USUARIO` varchar(9) NOT NULL,
  `SENHA` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `AUDITORIA`
--

INSERT INTO `AUDITORIA` (`USUARIO`, `SENHA`) VALUES
('auditoria', 'auditoriauespi');

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
  `QTD_SOLICITACAO` int(2) NOT NULL DEFAULT '0',
  `QTD_SOLICITACAO_CONFIRMADA` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `CADASTRADOS`
--

INSERT INTO `CADASTRADOS` (`NOME`, `TELEFONE`, `EMAIL`, `CENTRO`, `CAMPUS`, `MATRICULA`, `SENHA`, `TIPO`, `QTD_SOLICITACAO`, `QTD_SOLICITACAO_CONFIRMADA`) VALUES
('RODRIGO PADUA', '03186988741587', 'ROUDRIGO@GMAIL.COM', 'CTU', 'POETA TORQUATO NETO', 1111111, '1111111', 'D', 2, 1),
('Eloi Ícaro', '999999999', 'eloi@hotmail.com', 'CTU', 'Poeta Torquato Neto', 1234567, '123456', 'T', 2, 2),
('Marcus', '999998888', 'marcus@hotmail.com', 'CTU', 'Poeta Torquato Neto', 2222222, '123456', 'E', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `PONTUACAO`
--

CREATE TABLE `PONTUACAO` (
  `cod_pontuacao` int(11) NOT NULL,
  `q_1` int(11) NOT NULL DEFAULT '0',
  `q_2` int(11) NOT NULL DEFAULT '0',
  `q_3` int(11) NOT NULL DEFAULT '0',
  `q_4_1` int(11) NOT NULL DEFAULT '0',
  `q_4_2` int(11) NOT NULL DEFAULT '0',
  `q_4_3` int(11) NOT NULL DEFAULT '0',
  `q_4_4` int(11) NOT NULL DEFAULT '0',
  `q_4_5` int(11) NOT NULL DEFAULT '0',
  `q_4_6` int(11) NOT NULL DEFAULT '0',
  `q_4_7` int(11) NOT NULL DEFAULT '0',
  `q_5` int(11) NOT NULL DEFAULT '0',
  `q_6_1` int(11) NOT NULL DEFAULT '0',
  `q_6_2` int(11) NOT NULL DEFAULT '0',
  `q_7` int(11) NOT NULL DEFAULT '0',
  `q_8` int(11) NOT NULL DEFAULT '0',
  `q_9_1` int(11) NOT NULL DEFAULT '0',
  `q_9_2` int(11) NOT NULL DEFAULT '0',
  `q_9_3` int(11) NOT NULL DEFAULT '0',
  `q_9_4` int(11) NOT NULL DEFAULT '0',
  `q_10_1` int(11) NOT NULL DEFAULT '0',
  `q_10_2` int(11) NOT NULL DEFAULT '0',
  `q_11_1` int(11) NOT NULL DEFAULT '0',
  `q_11_2` int(11) NOT NULL DEFAULT '0',
  `q_12_1` int(11) NOT NULL DEFAULT '0',
  `q_12_2` int(11) NOT NULL DEFAULT '0',
  `q_12_3` int(11) NOT NULL DEFAULT '0',
  `q_12_4` int(11) NOT NULL DEFAULT '0',
  `q_12_5` int(11) NOT NULL DEFAULT '0',
  `q_12_6` int(11) NOT NULL DEFAULT '0',
  `q_12_7` int(11) NOT NULL DEFAULT '0',
  `q_13_1` int(11) NOT NULL DEFAULT '0',
  `q_13_2` int(11) NOT NULL DEFAULT '0',
  `q_13_3` int(11) NOT NULL DEFAULT '0',
  `q_13_4` int(11) NOT NULL DEFAULT '0',
  `q_13_5` int(11) NOT NULL DEFAULT '0',
  `q_14` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `PONTUACAO`
--

INSERT INTO `PONTUACAO` (`cod_pontuacao`, `q_1`, `q_2`, `q_3`, `q_4_1`, `q_4_2`, `q_4_3`, `q_4_4`, `q_4_5`, `q_4_6`, `q_4_7`, `q_5`, `q_6_1`, `q_6_2`, `q_7`, `q_8`, `q_9_1`, `q_9_2`, `q_9_3`, `q_9_4`, `q_10_1`, `q_10_2`, `q_11_1`, `q_11_2`, `q_12_1`, `q_12_2`, `q_12_3`, `q_12_4`, `q_12_5`, `q_12_6`, `q_12_7`, `q_13_1`, `q_13_2`, `q_13_3`, `q_13_4`, `q_13_5`, `q_14`, `total`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `PRAD`
--

CREATE TABLE `PRAD` (
  `USUARIO` varchar(4) NOT NULL,
  `SENHA` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `PRAD`
--

INSERT INTO `PRAD` (`USUARIO`, `SENHA`) VALUES
('prad', 'praduespi');

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
-- Estrutura para tabela `PROPLAN`
--

CREATE TABLE `PROPLAN` (
  `USUARIO` varchar(7) NOT NULL,
  `SENHA` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `PROPLAN`
--

INSERT INTO `PROPLAN` (`USUARIO`, `SENHA`) VALUES
('proplan', 'proplanuespi');

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
  `PONTUACAO` int(11) NOT NULL DEFAULT '0',
  `VALIDACAO` varchar(25) NOT NULL DEFAULT 'Em Avaliacao: PROP',
  `JUSTIFICATIVA` varchar(350) DEFAULT NULL,
  `COD_PONTUACAO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `SOLICITACAO`
--

INSERT INTO `SOLICITACAO` (`COD_SOLICITACAO`, `MAT_SOLICITANTE`, `NOME_EVENTO`, `ABRANGENCIA`, `TITULO_TRABALHO`, `TITULO_PROJETO`, `AUXILIO`, `TIPO_AUXILIO`, `DESCRICAO`, `COD_AGENCIA`, `ANOS_AUXILIO`, `NUM_CONTA`, `COD_NOME_BANCO`, `LOCAL_EVENTO`, `INICIO_EVENTO`, `FIM_EVENTO`, `PONTUACAO`, `VALIDACAO`, `JUSTIFICATIVA`, `COD_PONTUACAO`) VALUES
(6, '1234567', 'SPC', 'Regional', 'Porque o Scrum Ã© Importante', 'Porque o Scrum Ã© Importante', NULL, 'Diaria', 'Porque SIM', '000234', 0, '002586', '237 - Banco Bradesco S.A.', 'teresina', '2018-11-12', '2018-11-16', 0, 'Confirmado', NULL, NULL),
(7, '2222222', 'teste', 'Internacional', 'teste', 'teste', NULL, 'AjudaFinanceira', 'teste', '45456', 0, '456456', '260 - NuBank', 'teste', '2018-11-09', '2018-11-09', 0, 'Confirmado', NULL, NULL),
(8, '1111111', 'gsdfdsfsda', 'Internacional', 'hfdhfdgs', 'dfgfdgsd', NULL, 'Passagem', 'hgdfshfdhfdgdf', '54546', 0, '32312354', '104 - Caixa Econï¿½mica Federal', 'xfdsgdfsgsd', '2019-01-09', '2019-01-11', 0, 'Em Avaliacao: PROP', NULL, 0),
(9, '1111111', 'SEEK', 'Internacional', 'Eu sou legal', 'Como ser legal', NULL, 'Passagem', 'Lisboa Ã© muito legal', '35599', 0, '69744', '001 - Banco do Brasil S.A.', 'Lisboa', '2019-06-01', '2019-06-05', 0, 'Confirmado', NULL, 0),
(10, '1234567', 'ENUCOMPI', 'Regional', 'adoro floriano', 'floriano Ã© legal', NULL, 'Diaria', 'ir a floriano', '4324', 0, '5215435', '104 - Caixa Econï¿½mica Federal', 'Floriano', '2019-01-07', '2019-01-11', 0, 'Confirmado', NULL, 0),
(11, '2222222', 'DFASDG', 'Nacional', 'FGSDFG', 'GDSFGSDG', NULL, 'AjudaFinanceira', 'QUERO PASSEAR', '2344324', 0, 'FDSFD', '260 - NuBank', 'DFGDG', '2019-01-17', '2019-02-22', 0, 'Negado - PROP', 'sÃ³ quer passear, vÃ¡ estudar!!', 0);

--
-- Gatilhos `SOLICITACAO`
--
DELIMITER $$
CREATE TRIGGER `gt_dell` AFTER DELETE ON `SOLICITACAO` FOR EACH ROW UPDATE CADASTRADOS SET QTD_SOLICITACAO = QTD_SOLICITACAO - 1 WHERE MATRICULA = OLD.MAT_SOLICITANTE
$$
DELIMITER ;
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
-- Índices de tabela `PRAD`
--
ALTER TABLE `PRAD`
  ADD PRIMARY KEY (`USUARIO`);

--
-- Índices de tabela `PROP`
--
ALTER TABLE `PROP`
  ADD PRIMARY KEY (`USUARIO`);

--
-- Índices de tabela `PROPLAN`
--
ALTER TABLE `PROPLAN`
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
  MODIFY `COD_SOLICITACAO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
