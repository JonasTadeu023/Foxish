CREATE TABLE `foxish`.`prof` (
  `prof_id` INT NOT NULL AUTO_INCREMENT,
  `prof_name` VARCHAR (200) NOT NULL,
  `prof_senha` VARCHAR (32) NOT NULL,
  `prof_email` VARCHAR (200) NOT NULL,
  `prof_localtrabalho` VARCHAR (200) NOT NULL,
  `prof_foto` VARCHAR (200) NOT NULL,
  `data_cadastro` DATETIME NOT NULL,
  PRIMARY KEY (`prof_id`)
) ENGINE = InnoDB;