CREATE TABLE `foxish`.`turmas` (
  `turma_id` INT NOT NULL AUTO_INCREMENT,
  `turma_nome` VARCHAR(200) NOT NULL,
  `aluno_1` VARCHAR(32) NOT NULL,
  `aluno_2` VARCHAR(32) NOT NULL,
  `aluno_3` VARCHAR(32) NOT NULL,
  `prof_id` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`turma_id`)
) ENGINE = InnoDB;