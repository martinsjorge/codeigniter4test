-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           10.4.21-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para testphp
DROP DATABASE IF EXISTS `testphp`;
CREATE DATABASE IF NOT EXISTS `testphp` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `testphp`;

-- Copiando estrutura para tabela testphp.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `hobbie` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela testphp.users: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `mobile`, `username`, `password`, `age`, `hobbie`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Jay', 'Kay', 'jaykay@jamiroquai.com', '+447488843892', 'jaycosmic', 'testepass', NULL, 'Singer', '2021-11-04 10:57:32', NULL, NULL),
	(2, 'Peter', 'Parker', 'therealspider@marvel.com', '+16016177070', 'spiderman', 'testepass', NULL, 'Hero', '2021-11-04 10:58:22', NULL, NULL),
	(3, 'Derrick', 'McKenzie', 'mckenzie@jamiroquai.com', '+447225843892', 'derrick.mc', 'testpass', NULL, 'Drummer', '2021-11-04 10:59:14', NULL, NULL),
	(4, 'Antony Edward', 'Stark', 'ironman@marvel.com', '+16894577070', 'starktony', 'testpass', NULL, 'Maker', '2021-11-04 11:02:27', NULL, NULL),
	(5, 'Joscelyn Eve', 'Stoker', 'joss@jossstoneband.com', '+4021321459784', 'joss', '', 45, 'Singer', '2021-11-04 11:02:53', '2021-11-04 14:33:37', NULL),
	(6, 'Gal', 'Gardot', 'amazinghoman@gmail.com', '+5511954142547', 'wonderhoman', '', 35, 'Fight', '2021-11-04 11:03:04', '2021-11-04 14:35:34', NULL),
	(7, 'Mary', 'Jane', 'gingermary@gmail.com', '+1601954142548', 'maryjane', 'testpass', 0, 'Actress', '2021-11-04 11:57:47', '2021-11-04 15:47:12', NULL),
	(8, 'Jorge', 'Martins', 'mailtest@gmail.com', '+5511954142547', 'martinsjorge', '123456', 31, 'Play piano', '2021-11-04 11:59:17', '2021-11-04 15:56:28', NULL),
	(9, 'Dwayne', 'Johnson', 'therock@gmail.com', '+1421545128', 'therock', 'testpass', 49, 'Titan', '2021-11-04 14:31:10', '2021-11-04 15:48:07', '2021-11-04 15:48:07');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
