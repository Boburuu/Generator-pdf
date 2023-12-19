
CREATE TABLE `default`.`Entity`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `token` varchar(255) NOT NULL,
  `data_pdf` json NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE`(`id`)
);

CREATE TABLE `default`.`cerfa_pdf`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `number` int NOT NULL,
  `entity_id` int NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_entity_id` FOREIGN KEY (`entity_id`) REFERENCES `Entity`(`id`)
);
