-- Adminer 4.8.1 MySQL 8.0.29 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` char(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL DEFAULT 'male',
  `birth_date` date NOT NULL,
  `birth_place` varchar(60) NOT NULL,
  `address` tinytext NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `gender` (`gender`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `students` (`id`, `name`, `gender`, `birth_date`, `birth_place`, `address`, `is_active`) VALUES
('0123456789',	'si anu',	'female',	'1990-02-02',	'Jakarta',	'Jauh',	0),
('1234567890',	'si itu',	'male',	'1990-01-01',	'Jakarta',	'Deket',	1),
('35353',	'aoeuo',	'male',	'2022-05-12',	'tangerang',	'gak jauh',	0);

-- 2022-05-27 13:10:25
