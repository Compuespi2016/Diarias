-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 01-Nov-2018 às 21:57
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DIARIA`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `BANCO`
--

CREATE TABLE `BANCO` (
  `COD_BANCO` varchar(5) DEFAULT NULL,
  `NOME_BANCO` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `BANCO`
--

INSERT INTO `BANCO` (`COD_BANCO`, `NOME_BANCO`) VALUES
('001', 'Banco do Brasil S.A.'),
('104', 'Caixa Econômica Federal'),
('237', 'Banco Bradesco S.A.'),
('184', 'Banco Itaú BBA S.A.'),
('260', 'NuBank');

-- --------------------------------------------------------

--
-- Estrutura da tabela `CADASTRADOS`
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
-- Extraindo dados da tabela `CADASTRADOS`
--

INSERT INTO `CADASTRADOS` (`NOME`, `TELEFONE`, `EMAIL`, `CENTRO`, `CAMPUS`, `MATRICULA`, `SENHA`, `TIPO`, `QTD_SOLICITACAO`, `QTD_SOLICITACAO_CONFIRMADA`) VALUES
('RODRIGO PADUA', '03186988741587', 'ROUDRIGO@GMAIL.COM', 'CTU', 'POETA TORQUATO NETO', 1111111, '1111111', 'D', 3, 1),
('Eloi Ícaro', '999999999', 'eloi@hotmail.com', 'CTU', 'Poeta Torquato Neto', 1234567, '123456', 'T', 1, 0),
('Marcus', '999998888', 'marcus@hotmail.com', 'CTU', 'Poeta Torquato Neto', 2222222, '123456', 'E', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `PRAD`
--

CREATE TABLE `PRAD` (
  `USUARIO` varchar(4) NOT NULL,
  `SENHA` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `PRAD`
--

INSERT INTO `PRAD` (`USUARIO`, `SENHA`) VALUES
('prad', 'praduespi');

-- --------------------------------------------------------

--
-- Estrutura da tabela `PROP`
--

CREATE TABLE `PROP` (
  `USUARIO` varchar(4) NOT NULL,
  `SENHA` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `PROP`
--

INSERT INTO `PROP` (`USUARIO`, `SENHA`) VALUES
('prop', 'propuespi');

-- --------------------------------------------------------

--
-- Estrutura da tabela `PROPLAN`
--

CREATE TABLE `PROPLAN` (
  `USUARIO` varchar(7) NOT NULL,
  `SENHA` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `PROPLAN`
--

INSERT INTO `PROPLAN` (`USUARIO`, `SENHA`) VALUES
('proplan', 'proplanuespi');

-- --------------------------------------------------------

--
-- Estrutura da tabela `SOLICITACAO`
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
  `VALIDACAO` varchar(25) NOT NULL DEFAULT 'Em Avaliacao: PROP',
  `JUSTIFICATIVA` varchar(350) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `SOLICITACAO`
--

INSERT INTO `SOLICITACAO` (`COD_SOLICITACAO`, `MAT_SOLICITANTE`, `NOME_EVENTO`, `ABRANGENCIA`, `TITULO_TRABALHO`, `TITULO_PROJETO`, `AUXILIO`, `TIPO_AUXILIO`, `DESCRICAO`, `COD_AGENCIA`, `ANOS_AUXILIO`, `NUM_CONTA`, `COD_NOME_BANCO`, `LOCAL_EVENTO`, `INICIO_EVENTO`, `FIM_EVENTO`, `VALIDACAO`, `JUSTIFICATIVA`) VALUES
(2, '1111111', 'Evento', 'Internacional', 'TRabalho', 'ESse mesmo', NULL, 'Passagem', 'dmfnbsdfsdfsgfg', '123123', 0, '123123', '001 - Banco do Brasil S.A.', 'Bem ali', '2018-10-03', '2018-10-26', 'Confirmado', NULL),
(3, '1111111', '12312312', 'Internacional', '123123', '12312312', NULL, 'Passagem', '123123123123123', '1231231231', 0, '123123', '104 - Caixa Econï¿½mica Federal', '12312312', '2018-10-12', '2018-10-27', 'Negado - PROP', 'PQ SIM'),
(4, '1234567', 'y7hy7', 'Internacional', '.Ã§p', 'Ãºhn8hj', NULL, 'Passagem', 'uhbnuhbnhu', '5456465', 0, '465456456', '237 - Banco Bradesco S.A.', 'nmu8jh', '2018-11-02', '2018-11-03', 'Em Avaliacao: PROP', NULL);

--
-- Acionadores `SOLICITACAO`
--
DELIMITER $$
CREATE TRIGGER `tg_solicitacao` AFTER INSERT ON `SOLICITACAO` FOR EACH ROW UPDATE CADASTRADOS
SET QTD_SOLICITACAO = QTD_SOLICITACAO + 1
WHERE MATRICULA = NEW.MAT_SOLICITANTE
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CADASTRADOS`
--
ALTER TABLE `CADASTRADOS`
  ADD PRIMARY KEY (`MATRICULA`);

--
-- Indexes for table `PRAD`
--
ALTER TABLE `PRAD`
  ADD PRIMARY KEY (`USUARIO`);

--
-- Indexes for table `PROP`
--
ALTER TABLE `PROP`
  ADD PRIMARY KEY (`USUARIO`);

--
-- Indexes for table `PROPLAN`
--
ALTER TABLE `PROPLAN`
  ADD PRIMARY KEY (`USUARIO`);

--
-- Indexes for table `SOLICITACAO`
--
ALTER TABLE `SOLICITACAO`
  ADD PRIMARY KEY (`COD_SOLICITACAO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `SOLICITACAO`
--
ALTER TABLE `SOLICITACAO`
  MODIFY `COD_SOLICITACAO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
