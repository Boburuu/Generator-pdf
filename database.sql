CREATE TABLE `default`.`Assoc`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `token` varchar(255) NOT NULL,
  `data_pdf` json NOT NULL,
  `generate` int  NULL,
  `generate_at` TIMESTAMP  NULL,
  `signature` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id`)
);
