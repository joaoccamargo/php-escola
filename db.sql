-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para sistemaescola
CREATE DATABASE IF NOT EXISTS `sistemaescola` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sistemaescola`;

-- Copiando estrutura para tabela sistemaescola.alunos
CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `cpf` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela sistemaescola.alunos: ~3 rows (aproximadamente)
INSERT INTO `alunos` (`id`, `nome`, `data_nascimento`, `cpf`) VALUES
	(1, 'Pedro', '2000-01-01', '12345678901'),
	(2, 'Renato Moraes', '1996-12-02', '12345546321'),
	(3, 'Silvio de Freitas', '1999-11-03', '55533322211');

-- Copiando estrutura para tabela sistemaescola.matriculas
CREATE TABLE IF NOT EXISTS `matriculas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_aluno` int NOT NULL,
  `id_turma` int NOT NULL,
  `data_matricula` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK1aluno` (`id_aluno`),
  KEY `FK2turma` (`id_turma`),
  CONSTRAINT `FK1aluno` FOREIGN KEY (`id_aluno`) REFERENCES `alunos` (`id`),
  CONSTRAINT `FK2turma` FOREIGN KEY (`id_turma`) REFERENCES `turmas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela sistemaescola.matriculas: ~3 rows (aproximadamente)
INSERT INTO `matriculas` (`id`, `id_aluno`, `id_turma`, `data_matricula`) VALUES
	(1, 1, 1, '2023-07-22'),
	(2, 2, 1, '2023-07-22'),
	(3, 3, 1, '2023-07-22');

-- Copiando estrutura para tabela sistemaescola.turmas
CREATE TABLE IF NOT EXISTS `turmas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ano` smallint NOT NULL,
  `vagas` smallint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela sistemaescola.turmas: ~1 rows (aproximadamente)
INSERT INTO `turmas` (`id`, `descricao`, `ano`, `vagas`) VALUES
	(1, '1 Ano', 2020, 30);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
