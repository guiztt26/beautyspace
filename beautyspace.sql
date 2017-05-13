CREATE DATABASE  IF NOT EXISTS `beautyspace` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `beautyspace`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: beautyspace
-- ------------------------------------------------------
-- Server version	5.6.31-log

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
-- Table structure for table `agenda`
--

DROP TABLE IF EXISTS `agenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL AUTO_INCREMENT,
  `cpf_cliente` char(11) NOT NULL,
  `id_contrato_servico` int(11) NOT NULL,
  `cpf_funcionario` char(11) NOT NULL,
  `data_agendada` date NOT NULL,
  `horario` time NOT NULL,
  PRIMARY KEY (`id_agenda`),
  UNIQUE KEY `id_agenda` (`id_agenda`),
  KEY `cpf_cliente` (`cpf_cliente`),
  KEY `id_contrato_servico` (`id_contrato_servico`),
  KEY `cpf_funcionario` (`cpf_funcionario`),
  CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`cpf_cliente`) REFERENCES `cliente` (`cpf_cliente`) ON UPDATE CASCADE,
  CONSTRAINT `agenda_ibfk_2` FOREIGN KEY (`id_contrato_servico`) REFERENCES `servico_contrato_profissional_estetica` (`id_contrato_servico`) ON UPDATE CASCADE,
  CONSTRAINT `agenda_ibfk_3` FOREIGN KEY (`cpf_funcionario`) REFERENCES `funcionario` (`cpf_funcionario`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agenda`
--

LOCK TABLES `agenda` WRITE;
/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `agenda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aluguel`
--

DROP TABLE IF EXISTS `aluguel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aluguel` (
  `id_aluguel` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_aluguel` varchar(30) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_aluguel`),
  UNIQUE KEY `id_aluguel` (`id_aluguel`),
  UNIQUE KEY `tipo_aluguel` (`tipo_aluguel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aluguel`
--

LOCK TABLES `aluguel` WRITE;
/*!40000 ALTER TABLE `aluguel` DISABLE KEYS */;
/*!40000 ALTER TABLE `aluguel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargo`
--

DROP TABLE IF EXISTS `cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cargo` varchar(48) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_cargo`),
  UNIQUE KEY `id_cargo` (`id_cargo`),
  UNIQUE KEY `nome_cargo` (`nome_cargo`),
  UNIQUE KEY `descricao` (`descricao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargo`
--

LOCK TABLES `cargo` WRITE;
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `cpf_cliente` char(11) NOT NULL,
  `nome_completo` varchar(48) DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `telefone_fixo` varchar(13) DEFAULT NULL,
  `telefone_movel` varchar(13) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `estado_civil` varchar(10) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `profissao` varchar(25) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`cpf_cliente`),
  UNIQUE KEY `cpf_cliente` (`cpf_cliente`),
  KEY `cep` (`cep`),
  CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`cep`) REFERENCES `endereco` (`cep`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contrato_funcionario`
--

DROP TABLE IF EXISTS `contrato_funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contrato_funcionario` (
  `id_contrato` int(11) NOT NULL AUTO_INCREMENT,
  `cpf_funcionario` char(11) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  PRIMARY KEY (`id_contrato`),
  UNIQUE KEY `id_contrato` (`id_contrato`),
  KEY `cpf_funcionario` (`cpf_funcionario`),
  KEY `id_cargo` (`id_cargo`),
  CONSTRAINT `contrato_funcionario_ibfk_1` FOREIGN KEY (`cpf_funcionario`) REFERENCES `funcionario` (`cpf_funcionario`) ON UPDATE CASCADE,
  CONSTRAINT `contrato_funcionario_ibfk_2` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id_cargo`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contrato_funcionario`
--

LOCK TABLES `contrato_funcionario` WRITE;
/*!40000 ALTER TABLE `contrato_funcionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `contrato_funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contrato_profissional`
--

DROP TABLE IF EXISTS `contrato_profissional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contrato_profissional` (
  `id_contrato` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `cpf_profissional` char(11) DEFAULT NULL,
  `id_aluguel` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_contrato`),
  UNIQUE KEY `id_contrato` (`id_contrato`),
  KEY `cpf_profissional` (`cpf_profissional`),
  KEY `id_aluguel` (`id_aluguel`),
  CONSTRAINT `contrato_profissional_ibfk_1` FOREIGN KEY (`cpf_profissional`) REFERENCES `profissional_estetica` (`cpf_profissional`) ON UPDATE CASCADE,
  CONSTRAINT `contrato_profissional_ibfk_2` FOREIGN KEY (`id_aluguel`) REFERENCES `aluguel` (`id_aluguel`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contrato_profissional`
--

LOCK TABLES `contrato_profissional` WRITE;
/*!40000 ALTER TABLE `contrato_profissional` DISABLE KEYS */;
/*!40000 ALTER TABLE `contrato_profissional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `endereco` (
  `cep` int(11) NOT NULL,
  `logradouro` varchar(48) DEFAULT NULL,
  `bairro` varchar(15) DEFAULT NULL,
  `cidade` varchar(25) DEFAULT NULL,
  `uf` char(2) DEFAULT NULL,
  PRIMARY KEY (`cep`),
  UNIQUE KEY `cep` (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionario` (
  `cpf_funcionario` char(11) NOT NULL,
  `nome_completo` varchar(48) DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `sexo` char(2) DEFAULT NULL,
  `estado_civil` varchar(10) DEFAULT NULL,
  `telefone_fixo` varchar(13) DEFAULT NULL,
  `telefone_movel` varchar(13) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cpf_funcionario`),
  UNIQUE KEY `cpf_funcionario` (`cpf_funcionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_agendamento`
--

DROP TABLE IF EXISTS `log_agendamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_agendamento` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `id_status_agenda` int(11) DEFAULT NULL,
  `id_agenda` int(11) DEFAULT NULL,
  `data_alteracao` date DEFAULT NULL,
  PRIMARY KEY (`id_log`),
  UNIQUE KEY `id_log` (`id_log`),
  KEY `id_status_agenda` (`id_status_agenda`),
  KEY `id_agenda` (`id_agenda`),
  CONSTRAINT `log_agendamento_ibfk_1` FOREIGN KEY (`id_status_agenda`) REFERENCES `status_agenda` (`id_status_agenda`) ON UPDATE CASCADE,
  CONSTRAINT `log_agendamento_ibfk_2` FOREIGN KEY (`id_agenda`) REFERENCES `agenda` (`id_agenda`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_agendamento`
--

LOCK TABLES `log_agendamento` WRITE;
/*!40000 ALTER TABLE `log_agendamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `log_agendamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preco_aluguel`
--

DROP TABLE IF EXISTS `preco_aluguel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preco_aluguel` (
  `id_preco_aluguel` int(11) NOT NULL AUTO_INCREMENT,
  `id_aluguel` int(11) DEFAULT NULL,
  `preco_aluguel` decimal(5,2) NOT NULL,
  `data_validade` date DEFAULT NULL,
  PRIMARY KEY (`id_preco_aluguel`),
  UNIQUE KEY `id_preco_aluguel` (`id_preco_aluguel`),
  KEY `id_aluguel` (`id_aluguel`),
  CONSTRAINT `preco_aluguel_ibfk_1` FOREIGN KEY (`id_aluguel`) REFERENCES `aluguel` (`id_aluguel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preco_aluguel`
--

LOCK TABLES `preco_aluguel` WRITE;
/*!40000 ALTER TABLE `preco_aluguel` DISABLE KEYS */;
/*!40000 ALTER TABLE `preco_aluguel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preco_servico`
--

DROP TABLE IF EXISTS `preco_servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preco_servico` (
  `id_preco_servico` int(11) NOT NULL AUTO_INCREMENT,
  `id_servico` int(11) DEFAULT NULL,
  `preco_servico` decimal(5,2) NOT NULL,
  `data_validade` date DEFAULT NULL,
  PRIMARY KEY (`id_preco_servico`),
  UNIQUE KEY `id_preco_servico` (`id_preco_servico`),
  KEY `id_servico` (`id_servico`),
  CONSTRAINT `preco_servico_ibfk_1` FOREIGN KEY (`id_servico`) REFERENCES `servico` (`id_servico`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preco_servico`
--

LOCK TABLES `preco_servico` WRITE;
/*!40000 ALTER TABLE `preco_servico` DISABLE KEYS */;
/*!40000 ALTER TABLE `preco_servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profissional_estetica`
--

DROP TABLE IF EXISTS `profissional_estetica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profissional_estetica` (
  `cpf_profissional` char(11) NOT NULL,
  `nome_completo` varchar(48) DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `sexo` char(2) DEFAULT NULL,
  `estado_civil` varchar(10) DEFAULT NULL,
  `telefone_fixo` varchar(13) DEFAULT NULL,
  `telefone_movel` varchar(13) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `banco` int(3) DEFAULT NULL,
  `agencia` int(4) DEFAULT NULL,
  `num_con` int(10) DEFAULT NULL,
  PRIMARY KEY (`cpf_profissional`),
  UNIQUE KEY `cpf_profissional` (`cpf_profissional`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profissional_estetica`
--

LOCK TABLES `profissional_estetica` WRITE;
/*!40000 ALTER TABLE `profissional_estetica` DISABLE KEYS */;
/*!40000 ALTER TABLE `profissional_estetica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servico`
--

DROP TABLE IF EXISTS `servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servico` (
  `id_servico` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_servico` varchar(30) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_servico`),
  UNIQUE KEY `id_servico` (`id_servico`),
  UNIQUE KEY `tipo_servico` (`tipo_servico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servico`
--

LOCK TABLES `servico` WRITE;
/*!40000 ALTER TABLE `servico` DISABLE KEYS */;
/*!40000 ALTER TABLE `servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servico_contrato_profissional_estetica`
--

DROP TABLE IF EXISTS `servico_contrato_profissional_estetica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servico_contrato_profissional_estetica` (
  `id_contrato_servico` int(11) NOT NULL AUTO_INCREMENT,
  `id_contrato` int(11) DEFAULT NULL,
  `id_servico` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_contrato_servico`),
  UNIQUE KEY `id_contrato_servico` (`id_contrato_servico`),
  KEY `id_contrato` (`id_contrato`),
  KEY `id_servico` (`id_servico`),
  CONSTRAINT `servico_contrato_profissional_estetica_ibfk_1` FOREIGN KEY (`id_contrato`) REFERENCES `contrato_profissional` (`id_contrato`) ON UPDATE CASCADE,
  CONSTRAINT `servico_contrato_profissional_estetica_ibfk_2` FOREIGN KEY (`id_servico`) REFERENCES `servico` (`id_servico`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servico_contrato_profissional_estetica`
--

LOCK TABLES `servico_contrato_profissional_estetica` WRITE;
/*!40000 ALTER TABLE `servico_contrato_profissional_estetica` DISABLE KEYS */;
/*!40000 ALTER TABLE `servico_contrato_profissional_estetica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status_agenda`
--

DROP TABLE IF EXISTS `status_agenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status_agenda` (
  `id_status_agenda` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(15) NOT NULL,
  PRIMARY KEY (`id_status_agenda`),
  UNIQUE KEY `id_status_agenda` (`id_status_agenda`),
  UNIQUE KEY `descricao` (`descricao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status_agenda`
--

LOCK TABLES `status_agenda` WRITE;
/*!40000 ALTER TABLE `status_agenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `status_agenda` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-05 20:13:37
