CREATE TABLE `questao`
(
  `id` int
(3) NOT NULL AUTO_INCREMENT PRIMARY key,
  `enunciado` varchar
(250) NOT NULL,
  `op_1` varchar
(250) NOT NULL,
  `op_2` varchar
(250) NOT NULL,
  `op_3` varchar
(250) NOT NULL,
  `op_4` varchar
(250) NOT NULL,
  `op_5` varchar
(250) NOT NULL,
  `teste_turma` ENUM
('0','1')
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
