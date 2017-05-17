-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Maio-2017 às 21:44
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_carona`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessorios`
--

CREATE TABLE IF NOT EXISTS `acessorios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`usuario_id`),
  KEY `fk_acessorios_usuarios1_idx` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `acessorios`
--

INSERT INTO `acessorios` (`id`, `nome`, `usuario_id`) VALUES
(1, 'Ar condicionado', 2),
(2, 'Airbag', 2),
(3, '4 portas', 2),
(4, 'Banco de couro', 2),
(5, 'Teto solar', 2),
(6, 'Rádio', 2),
(7, 'Carregador de celular', 2),
(8, 'ABS', 2),
(9, 'Apoio de cabeça', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `senha` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`id`, `login`, `senha`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacaos`
--

CREATE TABLE IF NOT EXISTS `avaliacaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nota` int(11) NOT NULL,
  `comentario` text,
  `usuario_id` int(11) NOT NULL,
  `avaliador_id` int(11) NOT NULL,
  `carona_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`usuario_id`,`avaliador_id`,`carona_id`),
  KEY `fk_avaliacaos_usuarios1_idx` (`usuario_id`),
  KEY `fk_avaliacaos_usuarios2_idx` (`avaliador_id`),
  KEY `fk_avaliacaos_caronas1_idx` (`carona_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `avaliacaos`
--

INSERT INTO `avaliacaos` (`id`, `nota`, `comentario`, `usuario_id`, `avaliador_id`, `carona_id`) VALUES
(1, 10, 'Deu bom', 2, 1, 1),
(2, 5, 'Não tão baum', 1, 2, 2),
(3, 6, 'blablacar', 2, 3, 1),
(4, 7, 'afasfs', 3, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `caronas`
--

CREATE TABLE IF NOT EXISTS `caronas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qtd_vagas` int(11) NOT NULL,
  `data_hora` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `valor_sem` double NOT NULL,
  `valor_com` double NOT NULL,
  `origem_id` int(11) NOT NULL,
  `destino_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`origem_id`,`destino_id`),
  KEY `fk_caronas_enderecos1_idx` (`origem_id`),
  KEY `fk_caronas_enderecos2_idx` (`destino_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `caronas`
--

INSERT INTO `caronas` (`id`, `qtd_vagas`, `data_hora`, `status`, `valor_sem`, `valor_com`, `origem_id`, `destino_id`) VALUES
(1, 4, '2017-03-31 08:30:00', 1, 25, 30, 1, 2),
(2, 3, '2017-03-31 09:00:00', 1, 25, 30, 2, 1),
(3, 4, '2017-03-31 05:00:00', 1, 25, 30, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `carona_usuarios`
--

CREATE TABLE IF NOT EXISTS `carona_usuarios` (
  `carona_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `flag_motorista` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`carona_id`,`usuario_id`),
  KEY `fk_caronas_has_usuarios_usuarios1_idx` (`usuario_id`),
  KEY `fk_caronas_has_usuarios_caronas1_idx` (`carona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carona_usuarios`
--

INSERT INTO `carona_usuarios` (`carona_id`, `usuario_id`, `flag_motorista`) VALUES
(1, 1, 0),
(1, 2, 1),
(1, 3, 0),
(1, 4, 0),
(2, 1, 0),
(2, 2, 1),
(2, 3, 0),
(3, 1, 1),
(3, 2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE IF NOT EXISTS `cidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `estado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`estado_id`),
  KEY `fk_cidades_estados1_idx` (`estado_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`, `estado_id`) VALUES
(1, 'Barão de Cocais', 1),
(2, 'Belo Horizonte', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE IF NOT EXISTS `enderecos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cep` varchar(9) NOT NULL,
  `rua` varchar(200) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `cidade_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`cidade_id`),
  KEY `fk_enderecos_cidades1_idx` (`cidade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id`, `cep`, `rua`, `bairro`, `numero`, `complemento`, `cidade_id`) VALUES
(-1, 'cep', 'rua', 'bairro', NULL, NULL, 1),
(1, '35970-000', 'Dr Pedro Queiroga', 'Vila São Geraldo', 167, NULL, 1),
(2, '31812115', 'Maria Madalena', 'Minaslandia', 206, NULL, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `pais_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`pais_id`),
  KEY `fk_estados_paiss_idx` (`pais_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`id`, `nome`, `pais_id`) VALUES
(1, 'MG', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paiss`
--

CREATE TABLE IF NOT EXISTS `paiss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `paiss`
--

INSERT INTO `paiss` (`id`, `nome`) VALUES
(1, 'Brasilllllll');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisas`
--

CREATE TABLE IF NOT EXISTS `pesquisas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`usuario_id`),
  KEY `fk_pesquisas_usuarios1_idx` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisa_enderecos`
--

CREATE TABLE IF NOT EXISTS `pesquisa_enderecos` (
  `pesquisa_id` int(11) NOT NULL,
  `endereco_id` int(11) NOT NULL,
  PRIMARY KEY (`pesquisa_id`,`endereco_id`),
  KEY `fk_pesquisas_has_enderecos_enderecos1_idx` (`endereco_id`),
  KEY `fk_pesquisas_has_enderecos_pesquisas1_idx` (`pesquisa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `senha` varchar(256) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `bloqueado` tinyint(1) NOT NULL DEFAULT '0',
  `data_nascimento` date NOT NULL,
  `telefone1` varchar(45) DEFAULT NULL,
  `telefone2` varchar(45) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `motorista` tinyint(1) NOT NULL DEFAULT '0',
  `num_carteira_motorista` varchar(45) DEFAULT NULL,
  `marca_veiculo` varchar(45) DEFAULT NULL,
  `placa_veiculo` varchar(8) DEFAULT NULL,
  `cor_veiculo` varchar(45) DEFAULT NULL,
  `modelo_veiculo` varchar(45) DEFAULT NULL,
  `data_inclusao_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `endereco_id` int(11) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`id`,`endereco_id`),
  KEY `fk_usuarios_enderecos1_idx` (`endereco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `ativo`, `bloqueado`, `data_nascimento`, `telefone1`, `telefone2`, `foto`, `cpf`, `motorista`, `num_carteira_motorista`, `marca_veiculo`, `placa_veiculo`, `cor_veiculo`, `modelo_veiculo`, `data_inclusao_registro`, `endereco_id`) VALUES
(1, 'Guilherme', 'gui@email.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 1, '1991-11-25', '(31)995041406', '', '', '99999999999', 0, '', '', '', '', '', '2017-03-28 23:17:00', 1),
(2, 'José', 'j@email.com', '662eaa47199461d01a623884080934ab', 1, 0, '2017-03-08', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2017-03-29 00:13:40', 1),
(3, 'gustavo', 'gu@email.com', '202cb962ac59075b964b07152d234b70', 1, 0, '1990-06-11', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2017-03-30 21:57:48', 1),
(4, 'Gabriel', 'ga@email.com', '202cb962ac59075b964b07152d234b70', 1, 0, '1990-06-11', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2017-03-30 21:58:18', 1),
(6, 'gui', 'guii@email.com', '123', 1, 0, '0000-00-00', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2017-04-26 00:53:23', -1),
(11, 'jose', 'jose', '202cb962ac59075b964b07152d234b70', 1, 0, '0000-00-00', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2017-04-27 00:13:05', -1);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `acessorios`
--
ALTER TABLE `acessorios`
  ADD CONSTRAINT `fk_acessorios_usuarios1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `avaliacaos`
--
ALTER TABLE `avaliacaos`
  ADD CONSTRAINT `fk_avaliacaos_caronas1` FOREIGN KEY (`carona_id`) REFERENCES `caronas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_avaliacaos_usuarios1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_avaliacaos_usuarios2` FOREIGN KEY (`avaliador_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `caronas`
--
ALTER TABLE `caronas`
  ADD CONSTRAINT `fk_caronas_enderecos1` FOREIGN KEY (`origem_id`) REFERENCES `enderecos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_caronas_enderecos2` FOREIGN KEY (`destino_id`) REFERENCES `enderecos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `carona_usuarios`
--
ALTER TABLE `carona_usuarios`
  ADD CONSTRAINT `fk_caronas_has_usuarios_caronas1` FOREIGN KEY (`carona_id`) REFERENCES `caronas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_caronas_has_usuarios_usuarios1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cidades`
--
ALTER TABLE `cidades`
  ADD CONSTRAINT `fk_cidades_estados1` FOREIGN KEY (`estado_id`) REFERENCES `estados` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `fk_enderecos_cidades1` FOREIGN KEY (`cidade_id`) REFERENCES `cidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estados`
--
ALTER TABLE `estados`
  ADD CONSTRAINT `fk_estados_paiss` FOREIGN KEY (`pais_id`) REFERENCES `paiss` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pesquisas`
--
ALTER TABLE `pesquisas`
  ADD CONSTRAINT `fk_pesquisas_usuarios1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pesquisa_enderecos`
--
ALTER TABLE `pesquisa_enderecos`
  ADD CONSTRAINT `fk_pesquisas_has_enderecos_enderecos1` FOREIGN KEY (`endereco_id`) REFERENCES `enderecos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesquisas_has_enderecos_pesquisas1` FOREIGN KEY (`pesquisa_id`) REFERENCES `pesquisas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_enderecos1` FOREIGN KEY (`endereco_id`) REFERENCES `enderecos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
