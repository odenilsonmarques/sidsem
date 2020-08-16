-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.13-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para db_sidsem
CREATE DATABASE IF NOT EXISTS `db_sidsem` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_sidsem`;

-- Copiando estrutura para tabela db_sidsem.denuncias
CREATE TABLE IF NOT EXISTS `denuncias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `crime` varchar(100) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `infrator` varchar(200) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `anexoUm` varchar(200) DEFAULT NULL,
  `anexoDois` varchar(200) DEFAULT NULL,
  `anexoTres` varchar(200) DEFAULT NULL,
  `denunciante` varchar(100) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `cpf` varchar(100) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL,
  `descricaoStatus` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_sidsem.denuncias: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `denuncias` DISABLE KEYS */;
INSERT INTO `denuncias` (`id`, `crime`, `descricao`, `infrator`, `bairro`, `rua`, `anexoUm`, `anexoDois`, `anexoTres`, `denunciante`, `telefone`, `email`, `cpf`, `data`, `status`, `descricaoStatus`) VALUES
	(64, 'Crime contra a flora', 'dwedwedwedwed', 'laine santiago', 'dwedwed', 'dwedew', '', '', '', 'dwedewde', '(44) 44444-4444', NULL, NULL, '2020-08-15 18:51:32', 'Recebida', 'Aguardado para ser analisada'),
	(65, 'Crime contra a fauna', 'qdqwdqwdqfdvfvdf', 'MARCOS VELOSO', 'QWEQEQW', 'EQWEQW', '', '', '', 'EQWEQW', '(98) 79879-8797', NULL, NULL, '2020-08-15 18:53:12', 'Recebida', 'Aguardado para ser analisada'),
	(66, 'Atividade sem licenciamento', 'jogo de lixo na rua', 'odenilson marques', 'mioba', 'rua m', '', '', '', 'walderez marques', '(98) 98798-7897', NULL, NULL, '2020-08-15 19:03:27', 'Recebida', 'Aguardado para ser analisada'),
	(67, 'Poluicao', 'wedkjwldjwjl', 'pátricia xavier', 'qjsjqjlwkj', 'sjwksjqlwjlq', '', '', '', 'waldamarque', '(54) 54654-5454', NULL, NULL, '2020-08-15 19:04:29', 'Recebida', 'Aguardado para ser analisada'),
	(68, 'Atividade sem licenciamento', 'wqeqeqedqwe', 'frederico', 'ddqwdew', 'edwedwe', '', '', '', 'dwedwed', '(45) 64654-5645', NULL, NULL, '2020-08-15 19:11:47', 'Recebida', 'Aguardado para ser analisada'),
	(69, 'Atividade sem licenciamento', 'wqeqeqedqwe', 'frederico', 'ddqwdew', 'edwedwe', '', '', '', 'dwedwed', '(55) 55555-5555', NULL, NULL, '2020-08-15 19:13:48', 'Recebida', 'Aguardado para ser analisada'),
	(70, 'Poluicao', 'wldjlwejlk', 'osvaldo canuto', 'asdlajlk', 'kjlkJLDJSL', '', '', '', 'ddsasadasd', '(45) 45465-4564', NULL, NULL, '2020-08-15 19:15:46', 'Recebida', 'Aguardado para ser analisada'),
	(71, 'Poluicao', 'wedwedwedw', 'dwedwedwed', 'dewdwedw', 'dedwedw', '', '', '', 'dwedwedw', '(98) 78797-9879', NULL, NULL, '2020-08-15 19:18:01', 'Recebida', 'Aguardado para ser analisada'),
	(72, 'Crime contra a fauna', 'wxwxasxasxas', 'regis danese', 'sasqwsq', 'qwsqwsq', '', '', '', 'qwsqsqws', '(98) 79879-7879', NULL, NULL, '2020-08-15 19:30:23', 'Recebida', 'Aguardado para ser analisada'),
	(73, 'Poluicao', 'dwedopwepodkpwkpp', 'wkedkwpkepp', 'eokdwpkdepokwp', 'edkwedkkkp', '', '', '', 'pddopewkdepw', '(21) 32323-2323', NULL, NULL, '2020-08-15 19:35:03', 'Recebida', 'Aguardado para ser analisada'),
	(74, 'Crime contra a flora', 'wewdewedwdasd', 'ododoodooodood', 'sdadasdas', 'dasdasd', '', '', '', 'dasdasd', '(87) 98797-9778', NULL, NULL, '2020-08-15 19:51:26', 'Recebida', 'Aguardado para ser analisada'),
	(75, 'Crime contra a flora', 'djahkajhksjakA', 'KDASHDJADHS', 'ADASJJAKHKA', 'DAKJHDAHDK', '', '', '', 'DQJHDJQK', '(', NULL, NULL, '2020-08-16 19:24:48', 'Recebida', 'Aguardado para ser analisada'),
	(76, 'Crime contra a flora', 'djahkajhksjakA', 'KDASHDJADHS', 'ADASJJAKHKA', 'DAKJHDAHDK', '', '', '', 'DQJHDJQK', '(', NULL, NULL, '2020-08-16 19:24:50', 'Recebida', 'Aguardado para ser analisada'),
	(77, 'Crime contra a flora', 'djahkajhksjakA', 'KDASHDJADHS', 'ADASJJAKHKA', 'DAKJHDAHDK', '', '', '', 'DQJHDJQK', '(78) 68768-8768', NULL, NULL, '2020-08-16 19:24:51', 'Recebida', 'Aguardado para ser analisada');
/*!40000 ALTER TABLE `denuncias` ENABLE KEYS */;

-- Copiando estrutura para tabela db_sidsem.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `matricula` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_sidsem.users: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `matricula`, `password`, `remember_token`) VALUES
	(1, 'bianca maria', 'bia@gmail.com', '123456', '$2y$10$9q2uCRbVmH9FjAoRtK8W9.TpntImFHMKgfdGERcdmMrCqDBv.cjjm', NULL),
	(2, 'odenilson', 'od@gmail.com', '12345', '$2y$10$EsuJJVdc2T/4zt2TCA6bJOWjVWFwTQv5z2fX/JA7c.WBgKr316sKO', NULL),
	(3, 'frederico', 'fred@gmail.com', '23', '$2y$10$lXeM6a7K2iLf2tfs14mlXOaHiR4AgWEFijzx3ki0y/0a1HM1r4Ii6', NULL),
	(4, 'thiago', 'thiago@gmail.com', '123', '$2y$10$wFR5tNBmel7uerFGuWqUg.4fe6J4Jz6eDVZxbXtAtOHCoCwLQnoKa', NULL),
	(5, 'eliana', 'eliana@gmail.com', '1234', '$2y$10$9R3Cm.JDB09vWs4mVG1f3.HX7sNZ61ceI5q2XthsFsFrZKKwUFITe', NULL),
	(6, 'luan', 'luan@gmail.com', '123', '$2y$10$73t5LUuZeyj1rNLsEp8La.cO7OMxAIz30M9NZbDH0Z/R3EPoaRdNO', NULL),
	(7, 'enzo', 'enzo@gmail.com', '1234', '$2y$10$XGZyKcRMGHvhOPEJg0zLDunY80WG8CQgAXMeBiWa6ZCxNh1kfX4Q6', NULL),
	(8, 'walda', 'walda@hotmail.com', '12345678', '$2y$10$y0I92je.QVC7iDr.GHYMguyWeD92mdFuTl5zJ8GUPz5uvsgxni1Yu', NULL),
	(9, 'odenilson', 'odmarquesgm@gmail.com', '123', '$2y$10$1k73II2HEbvqTyuWor0IaeWtx9i41y22yZub8zK1.43MShweMgoBK', NULL),
	(10, 'kiara', 'kiara@gmail.com', '1234', '$2y$10$BKgXsgUWvvgft6L84aKKZ.O4NTlHoebfE.HepKTCii5d2ie/o3eE6', NULL),
	(11, 'joao heitor', 'joao@gmail.com', '0992699', '$2y$10$zTAVUGSdUi2TKFkY0TQYaujl3vOXDYDp4iiS8QJel/Myorqutg86S', NULL),
	(12, 'Osavaldo Canuto', 'josvaldo@gmail.com', '0992699', '$2y$10$2A5fM0RDv8JyHRBkkX6aUeeUhQyTn3j7xzZaoi6nUMM.pnI6lAmGG', NULL),
	(13, 'valquiria brito', 'val@gmail.com', '0992699', '$2y$10$j9V9U0CbQMew4tFx4u57x.NMGqrg5zUPt6FWAN2F6pM6/JkWZMcju', NULL),
	(14, 'Calebe', 'calebe@gmail.com', '0992699', '$2y$10$IaYvFEGrqsK0O8rDaye/5.8votXcq1riW3J9IVHyv8rodUbYG/LOS', NULL),
	(15, 'teoutoeiutoie', 'teste@gmail.com', '123123', '$2y$10$1X3Gh8MX220iCKSHxHCf6ODmlSAm/SiYkzEd1x3Vy2PoFEDWQfvnm', NULL),
	(16, 'Elisa', 'elisa@hotmail.com', '123456', '$2y$10$kIE59r9BmPlcAmx3ohKTROLc4iMatudH5HjT575wyncI4A2Vu4.IK', NULL),
	(17, 'osvaldo canuto', 'osvaldo@hmail.com', '123456', '$2y$10$wZsekxoEQywl5C1vLIQ7A.IWY29P7vjOuhMsJyBSTTmPobBgGeIci', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
