-- MySQL Workbench Synchronization
-- Generated: 2017-03-15 20:34
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: jose

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `bd_carona`;
CREATE SCHEMA IF NOT EXISTS `bd_carona` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;

DROP USER IF EXISTS 'bd_carona'@'localhost';
CREATE USER 'bd_carona'@'localhost' identified by '@senha_bd_carona';
GRANT ALL PRIVILEGES ON bd_carona.* TO 'bd_carona'@'localhost';

CREATE TABLE IF NOT EXISTS `bd_carona`.`usuarios` (
  `id` INT(11) NOT NULL COMMENT '',
  `nome` VARCHAR(120) NOT NULL COMMENT '',
  `email` VARCHAR(120) NOT NULL COMMENT '',
  `senha` VARCHAR(256) NOT NULL COMMENT '',
  `ativo` TINYINT(1) NOT NULL COMMENT '',
  `bloqueado` TINYINT(1) NOT NULL COMMENT '',
  `data_nascimento` DATE NOT NULL COMMENT '',
  `telefone1` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `telefone2` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `foto` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `cpf` VARCHAR(14) NULL DEFAULT NULL COMMENT '',
  `num_carteira_motorista` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `marca_veiculo` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `placa_veiculo` VARCHAR(8) NULL DEFAULT NULL COMMENT '',
  `cor_veiculo` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `modelo_veiculo` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `data_inclusao_registro` DATETIME NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `bd_carona`.`admins` (
  `id` INT(11) NOT NULL COMMENT '',
  `login` VARCHAR(100) NOT NULL COMMENT '',
  `senha` VARCHAR(256) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `bd_carona`.`acessorios` (
  `id` INT(11) NOT NULL COMMENT '',
  `nome` VARCHAR(45) NOT NULL COMMENT '',
  `usuario_id` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`, `usuario_id`)  COMMENT '',
  INDEX `fk_acessorios_usuarios1_idx` (`usuario_id` ASC)  COMMENT '',
  CONSTRAINT `fk_acessorios_usuarios1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `bd_carona`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `bd_carona`.`enderecos` (
  `id` INT(11) NOT NULL COMMENT '',
  `cep` VARCHAR(9) NOT NULL COMMENT '',
  `rua` VARCHAR(200) NOT NULL COMMENT '',
  `bairro` VARCHAR(100) NOT NULL COMMENT '',
  `numero` INT(11) NULL DEFAULT NULL COMMENT '',
  `complemento` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  `cidade_id` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`, `cidade_id`)  COMMENT '',
  INDEX `fk_enderecos_cidades1_idx` (`cidade_id` ASC)  COMMENT '',
  CONSTRAINT `fk_enderecos_cidades1`
    FOREIGN KEY (`cidade_id`)
    REFERENCES `bd_carona`.`cidades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `bd_carona`.`cidades` (
  `id` INT(11) NOT NULL COMMENT '',
  `nome` VARCHAR(45) NOT NULL COMMENT '',
  `estado_id` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`, `estado_id`)  COMMENT '',
  INDEX `fk_cidades_estados1_idx` (`estado_id` ASC)  COMMENT '',
  CONSTRAINT `fk_cidades_estados1`
    FOREIGN KEY (`estado_id`)
    REFERENCES `bd_carona`.`estados` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `bd_carona`.`estados` (
  `id` INT(11) NOT NULL COMMENT '',
  `nome` VARCHAR(100) NOT NULL COMMENT '',
  `pais_id` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`, `pais_id`)  COMMENT '',
  INDEX `fk_estados_paiss_idx` (`pais_id` ASC)  COMMENT '',
  CONSTRAINT `fk_estados_paiss`
    FOREIGN KEY (`pais_id`)
    REFERENCES `bd_carona`.`paiss` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `bd_carona`.`paiss` (
  `id` INT(11) NOT NULL COMMENT '',
  `nome` VARCHAR(100) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `bd_carona`.`caronas` (
  `id` INT(11) NOT NULL COMMENT '',
  `qtd_vagas` INT(11) NOT NULL COMMENT '',
  `data_hora` DATETIME NOT NULL COMMENT '',
  `status` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `bd_carona`.`avaliacaos` (
  `id` INT(11) NOT NULL COMMENT '',
  `nota` INT(11) NOT NULL COMMENT '',
  `comentario` TEXT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `bd_carona`.`pesquisas` (
  `id` INT(11) NOT NULL COMMENT '',
  `usuario_id` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`, `usuario_id`)  COMMENT '',
  INDEX `fk_pesquisas_usuarios1_idx` (`usuario_id` ASC)  COMMENT '',
  CONSTRAINT `fk_pesquisas_usuarios1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `bd_carona`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `bd_carona`.`carona_usuarios` (
  `carona_id` INT(11) NOT NULL COMMENT '',
  `usuario_id` INT(11) NOT NULL COMMENT '',
  `flag_motorista` TINYINT(1) NOT NULL DEFAULT 0 COMMENT '',
  PRIMARY KEY (`carona_id`, `usuario_id`)  COMMENT '',
  INDEX `fk_caronas_has_usuarios_usuarios1_idx` (`usuario_id` ASC)  COMMENT '',
  INDEX `fk_caronas_has_usuarios_caronas1_idx` (`carona_id` ASC)  COMMENT '',
  CONSTRAINT `fk_caronas_has_usuarios_caronas1`
    FOREIGN KEY (`carona_id`)
    REFERENCES `bd_carona`.`caronas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_caronas_has_usuarios_usuarios1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `bd_carona`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `bd_carona`.`usuario_enderecos` (
  `usuario_id` INT(11) NOT NULL COMMENT '',
  `endereco_id` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`usuario_id`, `endereco_id`)  COMMENT '',
  INDEX `fk_usuarios_has_enderecos_enderecos1_idx` (`endereco_id` ASC)  COMMENT '',
  INDEX `fk_usuarios_has_enderecos_usuarios1_idx` (`usuario_id` ASC)  COMMENT '',
  CONSTRAINT `fk_usuarios_has_enderecos_usuarios1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `bd_carona`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_has_enderecos_enderecos1`
    FOREIGN KEY (`endereco_id`)
    REFERENCES `bd_carona`.`enderecos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `bd_carona`.`pesquisa_enderecos` (
  `pesquisa_id` INT(11) NOT NULL COMMENT '',
  `endereco_id` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`pesquisa_id`, `endereco_id`)  COMMENT '',
  INDEX `fk_pesquisas_has_enderecos_enderecos1_idx` (`endereco_id` ASC)  COMMENT '',
  INDEX `fk_pesquisas_has_enderecos_pesquisas1_idx` (`pesquisa_id` ASC)  COMMENT '',
  CONSTRAINT `fk_pesquisas_has_enderecos_pesquisas1`
    FOREIGN KEY (`pesquisa_id`)
    REFERENCES `bd_carona`.`pesquisas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pesquisas_has_enderecos_enderecos1`
    FOREIGN KEY (`endereco_id`)
    REFERENCES `bd_carona`.`enderecos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `bd_carona`.`usuario_avaliacaos` (
  `usuario_id` INT(11) NOT NULL COMMENT '',
  `avaliacao_id` INT(11) NOT NULL COMMENT '',
  `flag_avaliado` TINYINT(1) NOT NULL DEFAULT 0 COMMENT '',
  PRIMARY KEY (`usuario_id`, `avaliacao_id`)  COMMENT '',
  INDEX `fk_usuarios_has_avaliacaos_avaliacaos1_idx` (`avaliacao_id` ASC)  COMMENT '',
  INDEX `fk_usuarios_has_avaliacaos_usuarios1_idx` (`usuario_id` ASC)  COMMENT '',
  CONSTRAINT `fk_usuarios_has_avaliacaos_usuarios1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `bd_carona`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_has_avaliacaos_avaliacaos1`
    FOREIGN KEY (`avaliacao_id`)
    REFERENCES `bd_carona`.`avaliacaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
