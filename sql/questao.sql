-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Set-2019 às 04:42
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET
  AUTOCOMMIT = 0;
START TRANSACTION;
SET
  time_zone = "+00:00";
  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8mb4 */;
--
  -- Database: `foxish`
  --
  -- --------------------------------------------------------
  --
  -- Estrutura da tabela `questao`
  --
  CREATE TABLE `questao` (
    `id` int (3) NOT NULL,
    `enunciado` varchar (550) NOT NULL,
    `op_1` varchar (250) NOT NULL,
    `op_2` varchar (250) NOT NULL,
    `op_3` varchar (250) NOT NULL,
    `op_4` varchar (250) NOT NULL,
    `op_5` varchar (250) NOT NULL,
    `teste_turma` enum ('0', '1') DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = latin1;
--
  -- Extraindo dados da tabela `questao`
  --
INSERT INTO
  `questao` (
    `
id`,
    `enunciado
`,
    `op_1`,
    `op_2`,
    `op_3`,
    `op_4`,
    `op_5`,
    `teste_turma`
  )
VALUES
  (
    1,
    'I think she spent too much money ____ thoses clothes.',
    'on',
    'in',
    'at',
    'with',
    'without',
    '0'
  ),
  (
    2,
    'What\'s the _____________________ there today?',
    'weather',
    'time',
    'weather like',
    'clime',
    'time like',
    '0'
  ),
  (
    3,
    'There\'s a parking lot _____________ from the bookstore.',
    'oposite',
    'across',
    'around',
    'near',
    'afar',
    '0'
  ),
  (
    4,
    'She _________ for _________ while she was studying in the U.S.A',
    'works / him',
    'work / he',
    'work / him',
    'works / he',
    'work/himself',
    '0'
  ),
  (
    5,
    'Alexander is  _______ a book right now',
    'readed',
    'read',
    'reading',
    'to read',
    'reader',
    '0'
  ),
  (
    6,
    '_____ you like to do in the weeknd\'s',
    'whose',
    'how',
    'what',
    'do',
    'where',
    '0'
  ),
  (
    7,
    'Don\'t put your cup on the _____ of the table – someone will knock it off',
    'outside',
    'end',
    'edge',
    'boundary',
    'border',
    '0'
  ),
  (
    8,
    'I don\'t like that noise. ___________ has to do _____________ about it',
    'someone / anything',
    'someone / something',
    'somebody / anything',
    'something / anything',
    'somebody/something',
    '0'
  ),
  (
    9,
    'This new printer is recommended as being ___ reliable',
    'greatly',
    'highly',
    'strongly',
    'readily',
    'incredibly',
    '0'
  ),
  (
    10,
    'I need to go
downtown tomorrow
. ____ you ______ me a ride?',
    'Was/Take ',
    'Was/Give',
    'Will/Give',
    'Will/Take',
    'Will/got',
    '0'
  ),
  (
    11,
    ' I _________ a summer course in New York last year. I _________ how to play the drums and now I _________ in a rock band
with my cousins. My brother _________ to go
to New York
next year and learn how to play the drums too',
    'took / learned / am playing / would like',
    'take / learn / play / liked',
    'am going to take / learned / play / wants',
    'did take / learned / playing / does want ',
    'taking/learn/am playing/liked',
    '0'
  ),
  (
    12,
    'My wife Susan and my daughter Stephanie _________ mall rats. They _________ to the mall every week and buy things we do not need. On Saturday, they _________ a bicycle, but they don’t know how to ride a bike! Stephanie always _________ that she _____',
    'is / are going / bought / say / likes',
    'is / do go
/ is going to buy / say / likes',
    'are / go
/ did buy
/ said / liked',
    'are / go
/ bought
/ says / would like',
    'is/going/did buy/says/liked',
    '0'
  ),
  (
    13,
    'Selecione a sequência correta',
    'When is Mrs. Baker going to finish his report?',
    'When is Mrs. Baker going to finish her report?',
    'When Mrs. Baker is going finish her report?',
    'When\'s Mrs. Baker are going to finish her report?',
    'When is Mrs. Baker going finish his report?',
    '0'
  ),
  (
    14,
    'Selecione a sequência correta',
    'Mrs. Lewis usually is tired at the end of the week',
    'The Wilsons have always dinner together',
    'My parents often are at home on weekends',
    'Mr. Thompson never goes out on Mondays and Wednesdays',
    'Some people did not had a good 2012',
    '0'
  ),
  (
    15,
    'Selecione a sequência correta',
    'Mr. Davis will give us a video game on Christmas',
    'Mr. Davis will give we a video game on Christmas',
    'Mr. Davis will give our a video game on Christmas',
    'Mr. Davis will give ours a video game on Christmas',
    'Mrs. Davis will give yours a video game on Christmas',
    '0'
  ),
  (
    16,
    'Selecione a sequência correta',
    'I would like drink some water',
    'Katie and her friends usually get together at the mall on Saturdays',
    'Jim was fired yesterday. We need to cheer him over',
    'I waited for Brian for almost an hour, but he didn’t show out',
    'Rebecca has put in a lot of weight in the past months',
    '0'
  ),
  (
    17,
    'Selecione a sequência INCORRETA',
    'In 2011 that company hired over 150 new employees',
    'Was there someone in the hallway?',
    'Sorry, but nobody can help you do your term paper',
    'There was anybody outside waiting for you, Mr. Baker',
    'Wasn’t there anyone in class when you arrived',
    '0'
  ),
  (
    18,
    '1- Have You				(    ) For many years\n2- While I was taking a shower		(    ) I’ve studied with him for 6 months\n3- Emma has worked for that company	(    ) John was preparing dinner\n4- My present teacher is Mr. Forman	(    ) Polish your shoes yet?\n5- I have spoken to him about it		(    ) Several times\n',
    '2, 5, 3, 4, 1',
    '3, 2, 4, 5, 1',
    '4, 3, 1, 5, 2',
    '3, 4, 2, 1, 5',
    '2, 1, 3, 5, 4',
    '0'
  ),
  (
    19,
    '1- Thanks, Julie				(    ) It’s red\n2- How much is that blouse? 		(    ) You’re wellcome\n3- What collor is your new dress? 	(    ) It’s 346-7098\n4- What’s your phone number?		(    ) It’s under the desk\n5- Where’s my notebook?		(    ) It’s $19,99\n',
    '3, 5, 1, 2, 4',
    '2, 5, 3, 4, 1',
    '3, 1, 4, 5, 2',
    '5, 3, 1, 4, 2',
    '2, 4, 3, 5, 1',
    '0'
  ),
  (
    20,
    '1- I’m not enjoying my course in college				\n2- The problem is that i have no idea of what to do\n3- I hope the student counselor can help me \n4- For now, there is nothing much I can do but keep on studying\n5- this past year has been a nightmare\n\n(  ) So it’s going to be hard to choose one\n(  ) I hope next term things will change for the bether\n(  ) I thought about it verry seriously. I’m going to change it\n(  ) The exams finish in three days \n(  ) I have an appointment with him tomorrow afternoon\n',
    '3, 5, 4, 1, 2',
    '2, 4, 1, 2, 5',
    '3, 1, 5, 4, 2',
    '1, 4, 2, 3, 5',
    '1, 3, 2, 5, 4',
    '0'
  ),
  (
    21,
    '1- How’s it going? 		(  ) Good idea\n2-  How do you spell it?		(  ) Take care\n3- Let’s go shopping.		(  ) T-H-O-R-N-E\n4- Goodbye			(  ) I’m fine, thanks \n5- Thank you very much.	(  ) You’re wellcome\n',
    '3, 1, 2, 4, 5',
    '3, 4, 2, 1, 5',
    '1, 4, 2, 5, 3',
    '1, 3, 5, 2, 4',
    '2, 5, 3, 1, 4',
    '0'
  ),
  (
    22,
    '1-  _________ did your parents go last weekend?		(  ) What \n2-  _________ did you eat for dinner last night?			(  ) Who\n3-  _________ did you need to get up early last Sunday?		(  ) Where\n4-  _________ did your friends buy new clothes at the mall?	(  ) Why\n5-  _________ did you have dinner with last weekend?		(  ) When\n',
    '3, 5, 2, 1, 4',
    '2, 1, 4, 5, 3',
    '2, 5, 3, 1, 4',
    '2, 5, 1, 3, 4',
    '3, 2, 5, 4, 1',
    '0'
  );
--
  -- Indexes for dumped tables
  --
  --
  -- Indexes for table `questao`
  --
ALTER TABLE
  `questao`
ADD
  PRIMARY KEY (`id`);
--
  -- AUTO_INCREMENT for dumped tables
  --
  --
  -- AUTO_INCREMENT for table `questao`
  --
ALTER TABLE
  `questao`
MODIFY
  `id` int (3) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 23;
COMMIT;
  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;