CREATE TABLE `foxish`.`aluno`
( 
	`aluno_id` INT NOT NULL AUTO_INCREMENT , 
    `aluno_name` VARCHAR
(40) NOT NULL , 
    `aluno_senha` VARCHAR
(32) NOT NULL ,
    `aluno_email` VARCHAR
(40) NOT NULL , 
    `aluno_foto` VARCHAR
(200) NOT NULL , 
    `aluno_xp` INT
(9) NOT NULL ,
    `aluno_nivel`INT
(3) not null DEFAULT 1 ,
    `aluno fluencia`ENUM
('Iniciante','Aprendiz','Mediano','Fluente','GODLIKE') not NULL DEFAULT 'Iniciante' ,
    `data_cadastro` DATETIME NOT NULL , 
    PRIMARY KEY
(`aluno_id`)
) ENGINE = InnoDB;