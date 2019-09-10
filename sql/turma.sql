CREATE TABLE `foxish`.`turmas` (
  `turma_id` INT NOT NULL AUTO_INCREMENT,
  `turma_nome` VARCHAR(200) NOT NULL,
  `aluno_1` INT(3) NOT NULL,
  `aluno_2` INT(3) NOT NULL,
  `aluno_3` INT(3) NOT NULL,
  `prof_id` INT(3) NOT NULL,
  PRIMARY KEY (`turma_id`)
) ENGINE = InnoDB;