/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Inicio das estrutura da tabela `administradores` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `administradores` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`foto` VARCHAR(500) COLLATE utf8_general_ci,
`nome` VARCHAR(150) COLLATE utf8_general_ci,
`email` VARCHAR(500) COLLATE utf8_general_ci,
`senha` VARCHAR(100) COLLATE utf8_general_ci,
`status` INTEGER(1) COMMENT '0 - Inativo | 1 - Ativo | 9 - Excluido',
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `administradores` --


-- Inicio das estrutura da tabela `clientes` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `clientes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(500) COLLATE utf8_general_ci,
`documento` VARCHAR(20) COLLATE utf8_general_ci,
`dovumento_estadual` VARCHAR(20) COLLATE utf8_general_ci,
`cep` VARCHAR(10) COLLATE utf8_general_ci,
`logradouro` VARCHAR(500) COLLATE utf8_general_ci,
`numero` VARCHAR(15) COLLATE utf8_general_ci,
`complemento` VARCHAR(255) COLLATE utf8_general_ci,
`bairro` VARCHAR(255) COLLATE utf8_general_ci,
`cidade` VARCHAR(255) COLLATE utf8_general_ci,
`estado` VARCHAR(2) COLLATE utf8_general_ci,
`telefone1` VARCHAR(15) COLLATE utf8_general_ci,
`telefone2` VARCHAR(15) COLLATE utf8_general_ci,
`telefone3` VARCHAR(15) COLLATE utf8_general_ci,
`telefone4` VARCHAR(15) COLLATE utf8_general_ci,
`ponto_referencia` VARCHAR(500) COLLATE utf8_general_ci,
`foto` VARCHAR(500) COLLATE utf8_general_ci,
`email1` VARCHAR(500) COLLATE utf8_general_ci,
`email2` VARCHAR(500) COLLATE utf8_general_ci,
`email3` VARCHAR(500) COLLATE utf8_general_ci,
`site` VARCHAR(500) COLLATE utf8_general_ci,
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `clientes` --


-- Inicio das estrutura da tabela `embalagens` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `embalagens` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`embalagem` VARCHAR(150) COLLATE utf8_general_ci NOT NULL,
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `embalagens` --


-- Inicio das estrutura da tabela `empresas` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `empresas` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(500) COLLATE utf8_general_ci,
`documento` VARCHAR(20) COLLATE utf8_general_ci,
`dovumento_estadual` VARCHAR(20) COLLATE utf8_general_ci,
`cep` VARCHAR(10) COLLATE utf8_general_ci,
`logradouro` VARCHAR(500) COLLATE utf8_general_ci,
`numero` VARCHAR(15) COLLATE utf8_general_ci,
`complemento` VARCHAR(255) COLLATE utf8_general_ci,
`bairro` VARCHAR(255) COLLATE utf8_general_ci,
`cidade` VARCHAR(255) COLLATE utf8_general_ci,
`estado` VARCHAR(2) COLLATE utf8_general_ci,
`telefone1` VARCHAR(15) COLLATE utf8_general_ci,
`telefone2` VARCHAR(15) COLLATE utf8_general_ci,
`telefone3` VARCHAR(15) COLLATE utf8_general_ci,
`telefone4` VARCHAR(15) COLLATE utf8_general_ci,
`ponto_referencia` VARCHAR(500) COLLATE utf8_general_ci,
`foto` VARCHAR(500) COLLATE utf8_general_ci,
`email1` VARCHAR(500) COLLATE utf8_general_ci,
`email2` VARCHAR(500) COLLATE utf8_general_ci,
`email3` VARCHAR(500) COLLATE utf8_general_ci,
`site` VARCHAR(500) COLLATE utf8_general_ci,
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `empresas` --


-- Inicio das estrutura da tabela `fornecedores` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `fornecedores` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(500) COLLATE utf8_general_ci,
`documento` VARCHAR(20) COLLATE utf8_general_ci,
`dovumento_estadual` VARCHAR(20) COLLATE utf8_general_ci,
`cep` VARCHAR(10) COLLATE utf8_general_ci,
`logradouro` VARCHAR(500) COLLATE utf8_general_ci,
`numero` VARCHAR(15) COLLATE utf8_general_ci,
`complemento` VARCHAR(255) COLLATE utf8_general_ci,
`bairro` VARCHAR(255) COLLATE utf8_general_ci,
`cidade` VARCHAR(255) COLLATE utf8_general_ci,
`estado` VARCHAR(2) COLLATE utf8_general_ci,
`telefone1` VARCHAR(15) COLLATE utf8_general_ci,
`telefone2` VARCHAR(15) COLLATE utf8_general_ci,
`telefone3` VARCHAR(15) COLLATE utf8_general_ci,
`telefone4` VARCHAR(15) COLLATE utf8_general_ci,
`ponto_referencia` VARCHAR(500) COLLATE utf8_general_ci,
`foto` VARCHAR(500) COLLATE utf8_general_ci,
`email1` VARCHAR(500) COLLATE utf8_general_ci,
`email2` VARCHAR(500) COLLATE utf8_general_ci,
`email3` VARCHAR(500) COLLATE utf8_general_ci,
`site` VARCHAR(500) COLLATE utf8_general_ci,
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `fornecedores` --


-- Inicio das estrutura da tabela `grupos` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `grupos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`grupo` VARCHAR(150) COLLATE utf8_general_ci NOT NULL,
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `grupos` --


-- Inicio das estrutura da tabela `icms` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `icms` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`icms` VARCHAR(150) COLLATE utf8_general_ci NOT NULL,
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `icms` --


-- Inicio das estrutura da tabela `impostos_origens` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `impostos_origens` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`imposto_origem` VARCHAR(150) COLLATE utf8_general_ci NOT NULL,
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `impostos_origens` --


-- Inicio das estrutura da tabela `produtos` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `produtos` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`codigo` VARCHAR(100) COLLATE utf8_general_ci,
`nome` VARCHAR(500) COLLATE utf8_general_ci NOT NULL,
`grupo_id` INTEGER(11),
`unidades_carga_id` INTEGER(11),
`peso` FLOAT(11,3) DEFAULT '0.000',
`icms_id` INTEGER(11),
`impostos_origem_id` INTEGER(11),
`varejo_valor_compra` FLOAT(11,2) DEFAULT '0.00',
`varejo_valor_lucro` FLOAT(11,2) DEFAULT '0.00',
`varejo_valor_venda` FLOAT(11,2) DEFAULT '0.00',
`atacado_quantidade_minima` FLOAT(11,3) DEFAULT '0.000',
`atacado_valor_lucro` FLOAT(11,2) DEFAULT '0.00',
`atacado_valor_venda` FLOAT(11,2) DEFAULT '0.00',
`pratica_desconto` INTEGER(1) DEFAULT 0 COMMENT '0 - Não | 1 - Sim',
`valor_desconto` FLOAT(11,2) DEFAULT '0.00',
`media_venda_30_dias` FLOAT(11,3) DEFAULT '0.000',
`estoque_atual` FLOAT(11,3) DEFAULT '0.000',
`descricao` TEXT COLLATE utf8_general_ci,
`status` INTEGER(1) DEFAULT 1 COMMENT '0 - Inativo | 1 - Ativo',
`foto` VARCHAR(500) COLLATE utf8_general_ci,
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `produtos` --


-- Inicio das estrutura da tabela `promocoes` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `promocoes` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`produto_id` INTEGER(11) NOT NULL,
`tipo_promocao` INTEGER(1) NOT NULL COMMENT '1 - Varejo | 2 - Atacado',
`valor_original` FLOAT(11,2) NOT NULL,
`valor_venda` FLOAT(11,2) NOT NULL,
`data_inicio` DATE,
`data_fim` DATE,
`status` INTEGER(1) DEFAULT 1 COMMENT '0 - Inativo | 1 - Ativo',
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `promocoes` --


-- Inicio das estrutura da tabela `unidades_cargas` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `unidades_cargas` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`unidade_carga` VARCHAR(150) COLLATE utf8_general_ci NOT NULL,
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `unidades_cargas` --


-- Inicio das estrutura da tabela `vendedores` --
/* !40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `vendedores` (
`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
`nome` VARCHAR(500) COLLATE utf8_general_ci,
`documento` VARCHAR(20) COLLATE utf8_general_ci,
`dovumento_estadual` VARCHAR(20) COLLATE utf8_general_ci,
`cep` VARCHAR(10) COLLATE utf8_general_ci,
`logradouro` VARCHAR(500) COLLATE utf8_general_ci,
`numero` VARCHAR(15) COLLATE utf8_general_ci,
`complemento` VARCHAR(255) COLLATE utf8_general_ci,
`bairro` VARCHAR(255) COLLATE utf8_general_ci,
`cidade` VARCHAR(255) COLLATE utf8_general_ci,
`estado` VARCHAR(2) COLLATE utf8_general_ci,
`telefone1` VARCHAR(15) COLLATE utf8_general_ci,
`telefone2` VARCHAR(15) COLLATE utf8_general_ci,
`telefone3` VARCHAR(15) COLLATE utf8_general_ci,
`telefone4` VARCHAR(15) COLLATE utf8_general_ci,
`ponto_referencia` VARCHAR(500) COLLATE utf8_general_ci,
`foto` VARCHAR(500) COLLATE utf8_general_ci,
`email1` VARCHAR(500) COLLATE utf8_general_ci,
`email2` VARCHAR(500) COLLATE utf8_general_ci,
`email3` VARCHAR(500) COLLATE utf8_general_ci,
`site` VARCHAR(500) COLLATE utf8_general_ci,
`estado_civil` VARCHAR(50) COLLATE utf8_general_ci,
`casa_propria` INTEGER(1) DEFAULT 0 COMMENT '0 - Não | 1 - Sim',
`veiculo` INTEGER(1) DEFAULT 0 COMMENT '0 - Não | 1 - Sim',
`created` DATETIME,
`modified` DATETIME,
PRIMARY KEY (`id`)
) ENGINE=InnoDB;
-- Fim das estrutura da tabela `vendedores` --


/* !40101 SET SQL_MODE=@OLD_SQL_MODE */;
/* !40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/* !40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/* !40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/* !40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/* !40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/* !40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

