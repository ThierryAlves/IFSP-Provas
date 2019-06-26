-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.38-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para provas
CREATE DATABASE IF NOT EXISTS `provas` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `provas`;

-- Copiando estrutura para tabela provas.alternativas
CREATE TABLE IF NOT EXISTS `alternativas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questao_id` int(11) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `correta` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_alternativas_questoes` (`questao_id`),
  CONSTRAINT `FK_alternativas_questoes` FOREIGN KEY (`questao_id`) REFERENCES `questoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela provas.alternativas: ~69 rows (aproximadamente)
/*!40000 ALTER TABLE `alternativas` DISABLE KEYS */;
INSERT INTO `alternativas` (`id`, `questao_id`, `descricao`, `correta`, `created_at`, `updated_at`) VALUES
	(10, 8, '1', 0, '2019-06-22 18:28:47', '2019-06-22 18:28:47'),
	(11, 8, '2', 1, '2019-06-22 18:28:47', '2019-06-22 18:28:47'),
	(12, 8, '3', 0, '2019-06-22 18:28:47', '2019-06-22 18:28:47'),
	(13, 8, '4', 0, '2019-06-22 18:28:47', '2019-06-22 18:28:47'),
	(14, 8, '5', 0, '2019-06-22 18:28:47', '2019-06-22 18:28:47'),
	(19, 10, '1', 0, '2019-06-22 18:31:55', '2019-06-22 18:31:55'),
	(20, 10, '2', 0, '2019-06-22 18:31:55', '2019-06-22 18:31:55'),
	(21, 10, '3', 0, '2019-06-22 18:31:55', '2019-06-22 18:31:55'),
	(22, 10, 'Nenhuma das anteriores', 1, '2019-06-22 18:31:55', '2019-06-22 18:31:55'),
	(32, 11, '8', 1, '2019-06-22 18:49:50', '2019-06-22 18:49:50'),
	(33, 11, '80', 0, '2019-06-22 18:49:50', '2019-06-22 18:49:50'),
	(34, 11, '8,5', 0, '2019-06-22 18:49:50', '2019-06-22 18:49:50'),
	(35, 9, '1', 0, '2019-06-22 18:50:33', '2019-06-22 18:50:33'),
	(36, 9, '4', 1, '2019-06-22 18:50:33', '2019-06-22 18:50:33'),
	(37, 9, '32', 0, '2019-06-22 18:50:33', '2019-06-22 18:50:33'),
	(38, 15, '2', 1, '2019-06-23 23:51:57', '2019-06-23 23:51:57'),
	(39, 15, '3', 0, '2019-06-23 23:51:57', '2019-06-23 23:51:57'),
	(40, 16, '3', 1, '2019-06-23 23:53:10', '2019-06-23 23:53:10'),
	(41, 16, '4', 0, '2019-06-23 23:53:10', '2019-06-23 23:53:10'),
	(42, 17, '4', 1, '2019-06-23 23:53:22', '2019-06-23 23:53:22'),
	(43, 17, '5', 0, '2019-06-23 23:53:22', '2019-06-23 23:53:22'),
	(44, 18, '5', 1, '2019-06-23 23:53:35', '2019-06-23 23:53:35'),
	(45, 18, '6', 0, '2019-06-23 23:53:35', '2019-06-23 23:53:35'),
	(46, 19, '6', 1, '2019-06-23 23:53:48', '2019-06-23 23:53:48'),
	(47, 19, '7', 0, '2019-06-23 23:53:48', '2019-06-23 23:53:48'),
	(48, 20, '7', 1, '2019-06-23 23:54:02', '2019-06-23 23:54:02'),
	(49, 20, '8', 0, '2019-06-23 23:54:02', '2019-06-23 23:54:02'),
	(50, 21, '8', 1, '2019-06-23 23:54:26', '2019-06-23 23:54:26'),
	(51, 21, '9', 0, '2019-06-23 23:54:26', '2019-06-23 23:54:26'),
	(52, 22, '9', 1, '2019-06-23 23:54:37', '2019-06-23 23:54:37'),
	(53, 22, '10', 0, '2019-06-23 23:54:37', '2019-06-23 23:54:37'),
	(54, 23, '10', 1, '2019-06-23 23:54:49', '2019-06-23 23:54:49'),
	(55, 23, '11', 0, '2019-06-23 23:54:49', '2019-06-23 23:54:49'),
	(56, 24, '11', 1, '2019-06-23 23:55:00', '2019-06-23 23:55:00'),
	(57, 24, '12', 0, '2019-06-23 23:55:00', '2019-06-23 23:55:00'),
	(58, 25, '10', 0, '2019-06-26 22:18:21', '2019-06-26 22:18:21'),
	(59, 25, '6', 1, '2019-06-26 22:18:21', '2019-06-26 22:18:21'),
	(60, 25, '12', 0, '2019-06-26 22:18:21', '2019-06-26 22:18:21'),
	(61, 25, '14', 0, '2019-06-26 22:18:21', '2019-06-26 22:18:21'),
	(62, 25, '5', 0, '2019-06-26 22:18:21', '2019-06-26 22:18:21'),
	(63, 26, '1', 1, '2019-06-26 22:18:58', '2019-06-26 22:18:58'),
	(64, 26, '3', 0, '2019-06-26 22:18:58', '2019-06-26 22:18:58'),
	(65, 26, '0', 0, '2019-06-26 22:18:58', '2019-06-26 22:18:58'),
	(66, 27, '9', 1, '2019-06-26 22:19:15', '2019-06-26 22:19:15'),
	(67, 27, '12', 0, '2019-06-26 22:19:15', '2019-06-26 22:19:15'),
	(68, 27, '6', 0, '2019-06-26 22:19:15', '2019-06-26 22:19:15'),
	(69, 27, '4', 0, '2019-06-26 22:19:15', '2019-06-26 22:19:15'),
	(70, 28, '0', 0, '2019-06-26 22:19:52', '2019-06-26 22:19:52'),
	(71, 28, '3', 0, '2019-06-26 22:19:52', '2019-06-26 22:19:52'),
	(72, 28, '1', 1, '2019-06-26 22:19:52', '2019-06-26 22:19:52'),
	(73, 28, '2', 0, '2019-06-26 22:19:52', '2019-06-26 22:19:52'),
	(74, 28, '32', 0, '2019-06-26 22:19:52', '2019-06-26 22:19:52'),
	(75, 29, '4', 0, '2019-06-26 22:20:13', '2019-06-26 22:20:13'),
	(76, 29, '-6', 0, '2019-06-26 22:20:13', '2019-06-26 22:20:13'),
	(77, 29, '6', 1, '2019-06-26 22:20:13', '2019-06-26 22:20:13'),
	(78, 30, '21', 0, '2019-06-26 22:20:37', '2019-06-26 22:20:37'),
	(79, 30, '11', 0, '2019-06-26 22:20:37', '2019-06-26 22:20:37'),
	(80, 30, '13', 0, '2019-06-26 22:20:37', '2019-06-26 22:20:37'),
	(81, 30, '12', 1, '2019-06-26 22:20:37', '2019-06-26 22:20:37'),
	(82, 31, '11', 1, '2019-06-26 22:20:56', '2019-06-26 22:20:56'),
	(83, 31, '9', 0, '2019-06-26 22:20:56', '2019-06-26 22:20:56'),
	(84, 31, '4', 0, '2019-06-26 22:20:56', '2019-06-26 22:20:56'),
	(85, 32, '12', 0, '2019-06-26 22:21:22', '2019-06-26 22:21:22'),
	(86, 32, '0', 0, '2019-06-26 22:21:22', '2019-06-26 22:21:22'),
	(87, 32, '12', 0, '2019-06-26 22:21:22', '2019-06-26 22:21:22'),
	(88, 32, '20', 1, '2019-06-26 22:21:22', '2019-06-26 22:21:22'),
	(89, 33, '10', 0, '2019-06-26 22:21:55', '2019-06-26 22:21:55'),
	(90, 33, '1', 0, '2019-06-26 22:21:55', '2019-06-26 22:21:55'),
	(91, 33, '12', 0, '2019-06-26 22:21:55', '2019-06-26 22:21:55'),
	(92, 33, 'nenhuma das anteriores', 1, '2019-06-26 22:21:55', '2019-06-26 22:21:55'),
	(93, 34, '0', 1, '2019-06-26 22:22:13', '2019-06-26 22:22:13'),
	(94, 34, '-3', 0, '2019-06-26 22:22:13', '2019-06-26 22:22:13'),
	(95, 34, '10', 0, '2019-06-26 22:22:13', '2019-06-26 22:22:13');
/*!40000 ALTER TABLE `alternativas` ENABLE KEYS */;

-- Copiando estrutura para tabela provas.alunos
CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela provas.alunos: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` (`id`, `nome`, `cpf`, `created_at`, `updated_at`) VALUES
	(1, 'ALUNO DE TESTE', '44329498804', '2019-06-22 16:08:42', '2019-06-22 16:08:42'),
	(3, 'THIERRY ALVES', '46687756818', '2019-06-23 16:25:44', '2019-06-23 16:25:44');
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;

-- Copiando estrutura para tabela provas.professores
CREATE TABLE IF NOT EXISTS `professores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela provas.professores: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `professores` DISABLE KEYS */;
INSERT INTO `professores` (`id`, `Nome`, `email`, `senha`, `created_at`, `updated_at`) VALUES
	(4, 'THIERRY ALVES', 'thierryalves.oliveira@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2019-06-20 16:04:04', '2019-06-20 16:04:04');
/*!40000 ALTER TABLE `professores` ENABLE KEYS */;

-- Copiando estrutura para tabela provas.provas
CREATE TABLE IF NOT EXISTS `provas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `professor_id` int(11) NOT NULL,
  `descricao` varchar(256) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_final` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK1` (`professor_id`),
  CONSTRAINT `FK1` FOREIGN KEY (`professor_id`) REFERENCES `professores` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela provas.provas: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `provas` DISABLE KEYS */;
INSERT INTO `provas` (`id`, `professor_id`, `descricao`, `data_inicio`, `data_final`, `created_at`, `updated_at`) VALUES
	(7, 4, 'Prova de matemática', '2019-06-22', '2019-06-25', '2019-06-22 18:26:14', '2019-06-22 15:56:40'),
	(9, 4, 'Prova de lógica', '2019-06-24', '2019-08-30', '2019-06-23 23:28:07', '2019-06-24 21:54:14'),
	(10, 4, 'Prova de matemática 2', '2019-06-26', '2019-06-30', '2019-06-25 22:15:20', '2019-06-25 19:22:44');
/*!40000 ALTER TABLE `provas` ENABLE KEYS */;

-- Copiando estrutura para tabela provas.questoes
CREATE TABLE IF NOT EXISTS `questoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prova_id` int(11) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_questoes_provas` (`prova_id`),
  CONSTRAINT `FK_questoes_provas` FOREIGN KEY (`prova_id`) REFERENCES `provas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela provas.questoes: ~24 rows (aproximadamente)
/*!40000 ALTER TABLE `questoes` DISABLE KEYS */;
INSERT INTO `questoes` (`id`, `prova_id`, `descricao`, `created_at`, `updated_at`) VALUES
	(8, 7, 'Quanto é 1+ 1 ?', '2019-06-22 18:28:19', '2019-06-22 18:28:19'),
	(9, 7, 'Quanto é 2+2 ?', '2019-06-22 18:28:19', '2019-06-22 18:28:19'),
	(10, 7, 'Quanto é 3+3 ?', '2019-06-22 18:28:19', '2019-06-22 18:28:19'),
	(11, 7, 'Quanto é 4+4 ?', '2019-06-22 18:28:19', '2019-06-22 18:28:19'),
	(15, 9, 'Quanto é 1+1 ?', '2019-06-23 23:41:41', '2019-06-23 23:41:41'),
	(16, 9, 'Quanto é 2+1 ?', '2019-06-23 23:41:41', '2019-06-23 23:41:41'),
	(17, 9, 'Quanto é 3+1 ?', '2019-06-23 23:41:41', '2019-06-23 23:41:41'),
	(18, 9, 'Quanto é 4+1 ?', '2019-06-23 23:41:41', '2019-06-23 23:41:41'),
	(19, 9, 'Quanto é 5+1 ?', '2019-06-23 23:41:41', '2019-06-23 23:41:41'),
	(20, 9, 'Quanto é 6+1 ?', '2019-06-23 23:41:41', '2019-06-23 23:41:41'),
	(21, 9, 'Quanto é 7+1 ?', '2019-06-23 23:41:41', '2019-06-23 23:41:41'),
	(22, 9, 'Quanto é 8+1 ?', '2019-06-23 23:41:41', '2019-06-23 23:41:41'),
	(23, 9, 'Quanto é 9+1 ?', '2019-06-23 23:41:41', '2019-06-23 23:41:41'),
	(24, 9, 'Quanto é 10+1 ?', '2019-06-23 23:41:41', '2019-06-23 23:41:41'),
	(25, 10, 'Quanto é 2 * 3 ?', '2019-06-26 22:17:56', '2019-06-26 22:17:56'),
	(26, 10, 'Quanto é 3 / 3 ?', '2019-06-26 22:17:56', '2019-06-26 22:17:56'),
	(27, 10, 'Quanto é 3 * 3 ?', '2019-06-26 22:17:56', '2019-06-26 22:17:56'),
	(28, 10, 'Quanto é 3 - 2 ?', '2019-06-26 22:17:56', '2019-06-26 22:17:56'),
	(29, 10, 'Quanto é 8 - 2 ?', '2019-06-26 22:17:56', '2019-06-26 22:17:56'),
	(30, 10, 'Quanto é 10 + 2 ?', '2019-06-26 22:17:56', '2019-06-26 22:17:56'),
	(31, 10, 'Quanto é 14 - 3 ?', '2019-06-26 22:17:56', '2019-06-26 22:17:56'),
	(32, 10, 'Quanto é 10 * 2 ?', '2019-06-26 22:17:56', '2019-06-26 22:17:56'),
	(33, 10, 'Quanto é 10 * 0 ?', '2019-06-26 22:17:56', '2019-06-26 22:17:56'),
	(34, 10, 'Quanto é 3 - 3  ?', '2019-06-26 22:17:56', '2019-06-26 22:17:56');
/*!40000 ALTER TABLE `questoes` ENABLE KEYS */;

-- Copiando estrutura para tabela provas.respostas
CREATE TABLE IF NOT EXISTS `respostas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aluno_id` int(11) NOT NULL,
  `prova_id` int(11) NOT NULL,
  `alternativa_id` int(11) NOT NULL,
  `correta` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_respostas_alunos` (`aluno_id`),
  KEY `FK_respostas_alternativas` (`alternativa_id`),
  KEY `FK_respostas_provas` (`prova_id`),
  CONSTRAINT `FK_respostas_alternativas` FOREIGN KEY (`alternativa_id`) REFERENCES `alternativas` (`id`),
  CONSTRAINT `FK_respostas_alunos` FOREIGN KEY (`aluno_id`) REFERENCES `alunos` (`id`),
  CONSTRAINT `FK_respostas_provas` FOREIGN KEY (`prova_id`) REFERENCES `provas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela provas.respostas: ~28 rows (aproximadamente)
/*!40000 ALTER TABLE `respostas` DISABLE KEYS */;
INSERT INTO `respostas` (`id`, `aluno_id`, `prova_id`, `alternativa_id`, `correta`, `created_at`, `updated_at`) VALUES
	(17, 1, 7, 11, 1, '2019-06-23 14:48:59', '2019-06-23 14:48:59'),
	(18, 1, 7, 35, 0, '2019-06-23 14:48:59', '2019-06-23 14:48:59'),
	(19, 1, 7, 22, 1, '2019-06-23 14:48:59', '2019-06-23 14:48:59'),
	(20, 1, 7, 33, 0, '2019-06-23 14:48:59', '2019-06-23 14:48:59'),
	(21, 3, 7, 10, 0, '2019-06-23 17:07:26', '2019-06-23 17:07:26'),
	(22, 3, 7, 35, 0, '2019-06-23 17:07:26', '2019-06-23 17:07:26'),
	(23, 3, 7, 19, 0, '2019-06-23 17:07:26', '2019-06-23 17:07:26'),
	(24, 3, 7, 34, 0, '2019-06-23 17:07:26', '2019-06-23 17:07:26'),
	(25, 1, 9, 38, 1, '2019-06-25 00:54:51', '2019-06-25 00:54:51'),
	(26, 1, 9, 41, 0, '2019-06-25 00:54:51', '2019-06-25 00:54:51'),
	(27, 1, 9, 42, 1, '2019-06-25 00:54:51', '2019-06-25 00:54:51'),
	(28, 1, 9, 45, 0, '2019-06-25 00:54:51', '2019-06-25 00:54:51'),
	(29, 1, 9, 46, 1, '2019-06-25 00:54:51', '2019-06-25 00:54:51'),
	(30, 1, 9, 49, 0, '2019-06-25 00:54:51', '2019-06-25 00:54:51'),
	(31, 1, 9, 50, 1, '2019-06-25 00:54:51', '2019-06-25 00:54:51'),
	(32, 1, 9, 53, 0, '2019-06-25 00:54:51', '2019-06-25 00:54:51'),
	(33, 1, 9, 54, 1, '2019-06-25 00:54:51', '2019-06-25 00:54:51'),
	(34, 1, 9, 57, 0, '2019-06-25 00:54:51', '2019-06-25 00:54:51'),
	(35, 3, 9, 38, 1, '2019-06-25 00:55:29', '2019-06-25 00:55:29'),
	(36, 3, 9, 40, 1, '2019-06-25 00:55:29', '2019-06-25 00:55:29'),
	(37, 3, 9, 42, 1, '2019-06-25 00:55:29', '2019-06-25 00:55:29'),
	(38, 3, 9, 44, 1, '2019-06-25 00:55:29', '2019-06-25 00:55:29'),
	(39, 3, 9, 46, 1, '2019-06-25 00:55:29', '2019-06-25 00:55:29'),
	(40, 3, 9, 48, 1, '2019-06-25 00:55:29', '2019-06-25 00:55:29'),
	(41, 3, 9, 50, 1, '2019-06-25 00:55:29', '2019-06-25 00:55:29'),
	(42, 3, 9, 52, 1, '2019-06-25 00:55:29', '2019-06-25 00:55:29'),
	(43, 3, 9, 54, 1, '2019-06-25 00:55:29', '2019-06-25 00:55:29'),
	(44, 3, 9, 57, 0, '2019-06-25 00:55:29', '2019-06-25 00:55:29');
/*!40000 ALTER TABLE `respostas` ENABLE KEYS */;

-- Copiando estrutura para tabela provas.resultados
CREATE TABLE IF NOT EXISTS `resultados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aluno_id` int(11) NOT NULL,
  `questoes_corretas` int(11) NOT NULL,
  `prova_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_resultado_alunos` (`aluno_id`),
  KEY `FK_resultado_provas` (`prova_id`),
  CONSTRAINT `FK_resultado_alunos` FOREIGN KEY (`aluno_id`) REFERENCES `alunos` (`id`),
  CONSTRAINT `FK_resultado_provas` FOREIGN KEY (`prova_id`) REFERENCES `provas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela provas.resultados: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `resultados` DISABLE KEYS */;
INSERT INTO `resultados` (`id`, `aluno_id`, `questoes_corretas`, `prova_id`, `created_at`, `updated_at`) VALUES
	(2, 1, 2, 7, '2019-06-23 14:48:59', '2019-06-23 14:48:59'),
	(3, 3, 0, 7, '2019-06-23 17:07:26', '2019-06-23 17:07:26'),
	(4, 1, 5, 9, '2019-06-25 00:54:51', '2019-06-25 00:54:51'),
	(5, 3, 9, 9, '2019-06-25 00:55:29', '2019-06-25 00:55:29');
/*!40000 ALTER TABLE `resultados` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
