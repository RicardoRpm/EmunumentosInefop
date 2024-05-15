-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Maio-2024 às 09:42
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbemun`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `emun`
--

CREATE TABLE `emun` (
  `idemun` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `memoriaram` varchar(10) NOT NULL,
  `memoriahd` varchar(10) NOT NULL,
  `processador` varchar(15) NOT NULL,
  `tipoProcessador` varchar(10) NOT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `data` date NOT NULL,
  `qtd` int(11) NOT NULL,
  `preco` float DEFAULT NULL,
  `instituicao_idinstituicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `emun`
--

INSERT INTO `emun` (`idemun`, `descricao`, `modelo`, `memoriaram`, `memoriahd`, `processador`, `tipoProcessador`, `estado`, `data`, `qtd`, `preco`, `instituicao_idinstituicao`) VALUES
(15, 'Hp', 'Pro', '4GB', '500 GB', '3,30 Ghz', 'Pentium', 'Funcionais', '2012-03-05', 7, 0, 7),
(16, 'DELL', 'Optiplex 380', '2 GB', '500 GB', '3,30 Ghz', 'Pentium', 'Funcionais', '2008-03-03', 8, 0, 8),
(17, 'Hp', 'Pro', '2 GB', '500', '2,9 Ghz', 'Pentium', 'Avariado', '2008-03-03', 6, 0, 7),
(18, 'Hp', 'Pro', '2 GB', '500 GB', '2,9 Ghz', 'Pentium', 'Avariado', '2008-03-03', 3, 0, 8),
(19, 'DELL', 'Optiplex 380', '2 GB', '500 GB', '3,30 Ghz', 'Pentium', 'Avariado', '2010-03-01', 3, 0, 9),
(20, 'DELL', 'Optiplex 380', '2 GB', '500 GB', '3,30 Ghz', 'Pentium', 'Funcionais', '2010-02-01', 13, 0, 9),
(21, 'Hp', 'Pro', '2GB', '500 GB', '3,0 Ghz', 'Pentium', 'Funcionais', '2014-03-03', 9, 0, 10),
(22, 'Hp', 'Pro', '2GB', '500 GB', '3,0 Ghz', 'Pentium', 'Avariado', '2014-03-03', 1, 0, 10),
(23, 'DELL', 'Optiplex 380', '128 MB', '500 GB', '1,7 Ghz', 'Pentium', 'Avariado', '2008-03-03', 7, 0, 11),
(24, 'Hp', 'Pro', '2 GB', '500 GB', '2,9 Ghz', 'Pentium', 'Funcionais', '2014-03-03', 4, 0, 11),
(25, 'DELL', 'Optiplex 3010', '4GB', '500 GB', '3,20 Ghz', 'Core I5', 'Funcionais', '2014-08-28', 7, 0, 12),
(26, 'Hp', 'Pro', '4GB', '500 GB', '3,0 Ghz', 'Pentium', 'Funcionais', '2014-08-28', 37, 0, 12),
(27, 'Hp', 'Pentium', '4GB', '500 GB', '3.1 Ghz', 'Pentium', 'Novos', '2020-10-05', 9, 0, 13),
(28, 'Hp', 'Pentium', '4GB', '500 GB', '3.1 Ghz', 'Pentium', 'Funcionais', '2014-03-03', 1, 0, 13),
(29, 'Hasse', 'Pentium', '2 GB', '500 GB', '2.7 Ghz', 'Pentium', 'Funcionais', '2011-06-06', 1, 0, 13),
(30, 'Dell', 'Pentium', '2 GB', '500 GB', '2.7 Ghz', 'Pentium', 'Avariado', '2007-05-07', 3, 0, 13),
(31, 'Hp', 'Pro', '2GB', '500 GB', '2,9 Ghz', 'Pentium', 'Funcionais', '2010-01-04', 5, 0, 14),
(32, 'LENINO', 'LENINO', '2GB', '500 GB', '2,9 Ghz', 'Pentium', 'Funcionais', '2012-05-08', 1, 0, 7),
(33, 'DELL', 'Optiplex 380', '2GB', '500 GB', '2,9 Ghz', 'Pentium', 'Avariado', '2010-01-04', 4, 0, 14),
(34, 'Hp', 'Core I3', '4 GB', '500 GB', '3,4', 'Core', 'Avariado', '2013-01-07', 2, 0, 14),
(35, 'Hp', 'Pro', '2 GB', '500 GB', '2,9 Ghz', 'Pentium', 'Funcionais', '2010-01-04', 1, 0, 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `idfornecedor` int(11) NOT NULL,
  `nomeFornec` varchar(150) NOT NULL,
  `telefon` varchar(45) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `idinstituicao` int(11) NOT NULL,
  `nomeInst` varchar(150) NOT NULL,
  `sigla` varchar(10) DEFAULT NULL,
  `nivel` varchar(15) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefonInstitui` varchar(45) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `responsavel_idresponsavel` int(11) NOT NULL,
  `provincia_idprovincia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`idinstituicao`, `nomeInst`, `sigla`, `nivel`, `endereco`, `telefonInstitui`, `email`, `responsavel_idresponsavel`, `provincia_idprovincia`) VALUES
(7, 'Centro de Formação e Artes e Oficio do Km 12', 'C.F.A.O - ', 'Nivel I', 'Bairro da Estalagem Km 12', '999999999', 'teste@hotmail.com', 4, 1),
(8, 'Centro de Formação Profissional de Artes e Ofícios do Zango 1', 'C.F.P.A.O ', 'Nivel I', 'Viana, Bairro Zango 1', '999999999', 'teste@hotmail.com', 5, 1),
(9, 'Centro de Empreedndorismo e Serviço de Emprego de Viana', 'C.E.S.E- V', 'Nivel I', 'Viana, Sede Junto a END', '999999999', 'teste@hotmail.com', 6, 1),
(10, 'Centro de Formação Profissional do Zango 4', 'C.F.P - Za', 'Nivel I', 'Viana Zango 4', '923214978', 'teste@hotmail.com', 7, 1),
(11, 'Centro de Formação Profissional do Kalumbo', 'C.F.P - Ca', 'Nivel I', 'Viana Calumbo - Sede', '923214978', 'teste@hotmail.com', 7, 1),
(12, 'Centro de Formação Profissional e Serviço de Emprego do Kilamba', 'C.F.P.S.E ', 'Nivel I', 'Viana, Kilamba por de Traz do Kero', '999999999', 'teste@hotmail.com', 8, 1),
(13, 'Pavilhão de Artes e Oficios do Kicolo', 'P.A.O-Kico', 'Nivel I', 'Rua da Conduta', '912237718', 'teste@hotmail.com', 9, 1),
(14, 'Centro de Empreendedorismo do Kicolo', 'C.E - Kico', 'Nivel I', 'Bairro Boa Esperança Junto ao IBA', '924275102', 'teste@hotmail.com', 10, 1),
(15, 'Centro de Reabilitação de Viana', 'CRPV', 'Nivel II', 'Viana', '930116619', 'teste@hotmail.com', 4, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao_has_fornecedor`
--

CREATE TABLE `instituicao_has_fornecedor` (
  `id_instituicao_fornecedorcol` int(11) NOT NULL,
  `instituicao_idinstituicao` int(11) NOT NULL,
  `fornecedor_idfornecedor` int(11) NOT NULL,
  `dta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `provincia`
--

CREATE TABLE `provincia` (
  `idprovincia` int(11) NOT NULL,
  `nomeProvinc` varchar(45) NOT NULL,
  `sigla` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `provincia`
--

INSERT INTO `provincia` (`idprovincia`, `nomeProvinc`, `sigla`) VALUES
(1, 'Luanda', 'LD'),
(2, 'Bengo', 'BO'),
(3, 'Bié', 'BE'),
(5, 'Cuando Cubango', 'CC'),
(6, 'Lunda Sul', 'LS'),
(7, 'Malanje', 'MJ'),
(8, 'Cabinda', 'CA'),
(9, 'Benguela', 'BA'),
(10, 'Uige', 'UE'),
(11, 'Lunda Norte', 'LN'),
(12, 'Moxico', 'MO'),
(13, 'Kwanza Norte', 'KN'),
(14, 'Kwanza Sul', 'KS'),
(15, 'Cunene', 'CE'),
(16, 'Namibe', 'NE'),
(17, 'Zaire', 'ZE'),
(18, 'Huambo', 'HO'),
(19, 'Huila', 'HA'),
(20, 'Departamento de Apoio a Directora', 'DAD'),
(21, 'Departamento de Apoio a Directora', 'DAD');

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

CREATE TABLE `responsavel` (
  `idresponsavel` int(11) NOT NULL,
  `nomeRespon` varchar(150) NOT NULL,
  `telefoneRespon` varchar(45) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`idresponsavel`, `nomeRespon`, `telefoneRespon`, `email`) VALUES
(4, 'Almeida José', '999999999', 'teste@hotmail.com'),
(5, 'Eliza Jinga', '999999999', 'Teste@Hotmail.com'),
(6, 'Lucrécia Lila', '999999999', 'Teste@Hotmail.com'),
(7, 'Venáncio Zozi-pó Mendes', '923214978', 'teste@hotmail.com'),
(8, 'Chefe Pembele', '999999999', 'teste@hotmail.com'),
(9, 'Antonio Armando', '923916729', 'teste@hotmail.com'),
(10, 'Joaquim Gege Baião', '924275102', 'teste@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

CREATE TABLE `utilizador` (
  `id_utilizador` int(11) NOT NULL,
  `nomeUtilizador` varchar(150) NOT NULL,
  `tipoUtilizador` varchar(30) NOT NULL,
  `Senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`id_utilizador`, `nomeUtilizador`, `tipoUtilizador`, `Senha`) VALUES
(1, 'Abilson', 'Admin', '123'),
(2, 'Neide Maria', 'Técnico', '12345'),
(3, 'Teste', 'Chefe do Departamento', '1aa');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `emun`
--
ALTER TABLE `emun`
  ADD PRIMARY KEY (`idemun`),
  ADD KEY `fk_emun_instituicao1_idx` (`instituicao_idinstituicao`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`idfornecedor`);

--
-- Índices para tabela `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`idinstituicao`),
  ADD KEY `fk_instituicao_responsavel_idx` (`responsavel_idresponsavel`),
  ADD KEY `fk_instituicao_provincia1_idx` (`provincia_idprovincia`);

--
-- Índices para tabela `instituicao_has_fornecedor`
--
ALTER TABLE `instituicao_has_fornecedor`
  ADD PRIMARY KEY (`id_instituicao_fornecedorcol`),
  ADD KEY `fk_instituicao_has_fornecedor_fornecedor1_idx` (`fornecedor_idfornecedor`),
  ADD KEY `fk_instituicao_has_fornecedor_instituicao1_idx` (`instituicao_idinstituicao`);

--
-- Índices para tabela `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`idprovincia`);

--
-- Índices para tabela `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`idresponsavel`);

--
-- Índices para tabela `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`id_utilizador`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `emun`
--
ALTER TABLE `emun`
  MODIFY `idemun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `idfornecedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `idinstituicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `instituicao_has_fornecedor`
--
ALTER TABLE `instituicao_has_fornecedor`
  MODIFY `id_instituicao_fornecedorcol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `provincia`
--
ALTER TABLE `provincia`
  MODIFY `idprovincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `responsavel`
--
ALTER TABLE `responsavel`
  MODIFY `idresponsavel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `id_utilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `emun`
--
ALTER TABLE `emun`
  ADD CONSTRAINT `fk_emun_instituicao1` FOREIGN KEY (`instituicao_idinstituicao`) REFERENCES `instituicao` (`idinstituicao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `instituicao`
--
ALTER TABLE `instituicao`
  ADD CONSTRAINT `fk_instituicao_provincia1` FOREIGN KEY (`provincia_idprovincia`) REFERENCES `provincia` (`idprovincia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_instituicao_responsavel` FOREIGN KEY (`responsavel_idresponsavel`) REFERENCES `responsavel` (`idresponsavel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `instituicao_has_fornecedor`
--
ALTER TABLE `instituicao_has_fornecedor`
  ADD CONSTRAINT `fk_instituicao_has_fornecedor_fornecedor1` FOREIGN KEY (`fornecedor_idfornecedor`) REFERENCES `fornecedor` (`idfornecedor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_instituicao_has_fornecedor_instituicao1` FOREIGN KEY (`instituicao_idinstituicao`) REFERENCES `instituicao` (`idinstituicao`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
