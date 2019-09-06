CREATE TABLE `foxish`.`aluno2` ( 
    `aluno_id` INT NOT NULL AUTO_INCREMENT , 
    `aluno_name` VARCHAR(200) NOT NULL , 
    `aluno_senha` VARCHAR(32) NOT NULL , 
    `aluno_email` VARCHAR(200) NOT NULL , 
    `aluno_foto` VARCHAR(200) NOT NULL , 
    `aluno_xp` INT(200) NOT NULL , 
    `data_cadastro` DATETIME NOT NULL , 
    PRIMARY KEY (`aluno_id`)) ENGINE = InnoDB;