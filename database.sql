create database test;

use test;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `edad` int(3) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `fruta_favorita` varchar(100) NOT NULL,
  `verdura_favorita` varchar(100) NOT NULL,
  `n_personas_viven` int(3) NOT NULL,
  PRIMARY KEY  (`id`)
);
