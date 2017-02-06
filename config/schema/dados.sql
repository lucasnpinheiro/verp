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


 --
 -- Dumping data for table `administradores`
 --
 

 LOCK TABLES `administradores` WRITE;
 /*!40000 ALTER TABLE `administradores` DISABLE KEYS */;
 INSERT IGNORE INTO `administradores` (`id`, `foto`, `nome`, `email`, `senha`, `status`, `created`, `modified`) VALUES  (1, 'cef827684ac16280f76a5abd91be36f6.png', 'Administrador', 'admin@verp.com.br', '$2y$10$JvRp7oo8RdKqj0w9d0loqeXl8V6w3JnYnvtajgYN0XKACAHY5a85i', 1, '2017-02-06 01:53:53', NULL);
 /*!40000 ALTER TABLE `administradores` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `clientes`
 --
 

 LOCK TABLES `clientes` WRITE;
 /*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
 INSERT IGNORE INTO `clientes` (`id`, `nome`, `documento`, `documento_estadual`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `telefone1`, `telefone2`, `telefone3`, `telefone4`, `ponto_referencia`, `foto`, `email1`, `email2`, `email3`, `site`, `created`, `modified`) VALUES  (1, 'teste aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c3951fe456e183d20329cfe756631cec.jpg', NULL, NULL, NULL, NULL, '2017-02-06 01:53:53', NULL);
 /*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `embalagens`
 --
 

 LOCK TABLES `embalagens` WRITE;
 /*!40000 ALTER TABLE `embalagens` DISABLE KEYS */;
 /*!40000 ALTER TABLE `embalagens` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `empresas`
 --
 

 LOCK TABLES `empresas` WRITE;
 /*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
 INSERT IGNORE INTO `empresas` (`id`, `nome`, `documento`, `documento_estadual`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `telefone1`, `telefone2`, `telefone3`, `telefone4`, `ponto_referencia`, `foto`, `email1`, `email2`, `email3`, `site`, `created`, `modified`) VALUES  (1, 'teste 22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ca4e93a7135c72afb3baab1ac22c07f4.png', NULL, NULL, NULL, NULL, '2017-02-06 01:53:53', NULL);
 /*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `fornecedores`
 --
 

 LOCK TABLES `fornecedores` WRITE;
 /*!40000 ALTER TABLE `fornecedores` DISABLE KEYS */;
 INSERT IGNORE INTO `fornecedores` (`id`, `nome`, `documento`, `documento_estadual`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `telefone1`, `telefone2`, `telefone3`, `telefone4`, `ponto_referencia`, `foto`, `email1`, `email2`, `email3`, `site`, `created`, `modified`) VALUES  (1, 'teste aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-02-06 01:53:53', NULL);
 /*!40000 ALTER TABLE `fornecedores` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `grupos`
 --
 

 LOCK TABLES `grupos` WRITE;
 /*!40000 ALTER TABLE `grupos` DISABLE KEYS */;
 /*!40000 ALTER TABLE `grupos` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `icms`
 --
 

 LOCK TABLES `icms` WRITE;
 /*!40000 ALTER TABLE `icms` DISABLE KEYS */;
 /*!40000 ALTER TABLE `icms` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `impostos_origens`
 --
 

 LOCK TABLES `impostos_origens` WRITE;
 /*!40000 ALTER TABLE `impostos_origens` DISABLE KEYS */;
 /*!40000 ALTER TABLE `impostos_origens` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `produtos`
 --
 

 LOCK TABLES `produtos` WRITE;
 /*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
 INSERT IGNORE INTO `produtos` (`id`, `codigo`, `nome`, `grupo_id`, `unidades_carga_id`, `peso`, `icms_id`, `impostos_origem_id`, `varejo_valor_compra`, `varejo_valor_lucro`, `varejo_valor_venda`, `atacado_quantidade_minima`, `atacado_valor_lucro`, `atacado_valor_venda`, `pratica_desconto`, `valor_desconto`, `media_venda_30_dias`, `estoque_atual`, `descricao`, `status`, `foto`, `created`, `modified`) VALUES  (1, '1', 'ssss', NULL, NULL, 0.5, NULL, NULL, 1.45, 0.5, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 1, '66cdaf7fe94342e5febe1e903bc951b8.png', '2017-02-06 01:53:53', NULL);
 /*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `promocoes`
 --
 

 LOCK TABLES `promocoes` WRITE;
 /*!40000 ALTER TABLE `promocoes` DISABLE KEYS */;
 /*!40000 ALTER TABLE `promocoes` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `unidades_cargas`
 --
 

 LOCK TABLES `unidades_cargas` WRITE;
 /*!40000 ALTER TABLE `unidades_cargas` DISABLE KEYS */;
 /*!40000 ALTER TABLE `unidades_cargas` ENABLE KEYS */;
 UNLOCK TABLES;
 



 --
 -- Dumping data for table `vendedores`
 --
 

 LOCK TABLES `vendedores` WRITE;
 /*!40000 ALTER TABLE `vendedores` DISABLE KEYS */;
 INSERT IGNORE INTO `vendedores` (`id`, `nome`, `documento`, `documento_estadual`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `telefone1`, `telefone2`, `telefone3`, `telefone4`, `ponto_referencia`, `foto`, `email1`, `email2`, `email3`, `site`, `estado_civil`, `casa_propria`, `veiculo`, `created`, `modified`) VALUES  (1, 'dasdfasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c97c4bdde612310d89059a1860c9af47.png', NULL, NULL, NULL, NULL, NULL, 0, 0, '2017-02-06 01:53:53', NULL);
 /*!40000 ALTER TABLE `vendedores` ENABLE KEYS */;
 UNLOCK TABLES;
 

/* !40103 SET TIME_ZONE=@OLD_TIME_ZONE */;


/* !40101 SET SQL_MODE=@OLD_SQL_MODE */;
/* !40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/* !40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/* !40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/* !40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/* !40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/* !40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


-- Dump completed on 2017-02-06 01:53:53