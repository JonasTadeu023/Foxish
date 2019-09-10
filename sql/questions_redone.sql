
CREATE TABLE `questao`
(
    `id` int
(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `enunciado` varchar
(800) NOT NULL,
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
    `teste_turma` enum
('0','1') DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT
    INTO
        `questao`(
            `
enunciado`,
`op_1
`,
            `op_2`,
            `op_3`,
            `op_4`,
            `op_5`,
            `teste_turma`)VALUES
(
        'I think she spent too much money ____ thoses clothes.',
        'in',
        'at',
        'with',
        'without',
        'on',
        '0'
    ),
(
    
        'What\'s the _____________________ there today?',
        'weather',
        'time',
        'clime',
        'time like',
        'weather like',
        '0'
    ),(
    
        'There\'s a parking lot _____________ from the bookstore.',
        'oposite',
        'across',
        'around',
        'afar',
        'near',
        '0'
    ),
(
        
        'She _________ for _________ while she was studying in the U.S.A.',
        'work / he',
        'work / him',
        'works / he',
        'work/himself',
        'works / him',
        '0'
    ),
(
        
        'Alexander is  _______ a book right now.',
        'readed',
        'read',
        'to read',
        'reader',
        'reading',
        '0'
    ),
(
        
        '_____ you like to do in the weeknd\'s.',
        'whose',
        'how',
        'do',
        'where',
        'what',
        '0'
    ),(
        
        'Don\'t put your cup on the _____ of the table, someone will knock it off!',
        'outside',
        'end',
        'boundary',
        'border',
        'edge',
        '0'
    ),
(
        
        'I don\'t like that noise. ___________ has to do _____________ about it.',
        'someone / anything',
        'somebody / anything',
        'something / anything',
        'somebody/something',
        'someone / something',
        '0'
    ),(
        
        'This new printer is recommended as being ___ reliable.',
        'greatly',
        'strongly',
        'readily',
        'incredibly',
        'highly',
        '0'
    ),(
        
        'I need to go
down town tomorrow
. ____ you ______ me a ride?',
        'Was/Take ',
        'Was/Give',
        'Will/Take',
        'Will/got',
        'Will/Give',
        '0'
    ),(
        
        ' I _________ a summer course in New York last year. I _________ how to play the drums and now I _________ in a rock band
with my cousins. My brother _________ to go
to New York
next year and learn how to play the drums too.',
        'take / learn / play / liked',
        'am going to take / learned / play / wants',
        'did take / learned / playing / does want ',
        'taking/learn/am playing/liked',
        'took / learned / am playing / would like',
        '0'
    ),(
        
        'My wife Susan and my daughter Stephanie _________ mall rats. They _________ to the mall every week and buy things we do not need. On Saturday, they _________ a bicycle, but they don\'t know how to ride a bike! Stephanie always _________ that she _____.',
        'is / are going / bought / say / likes',
        'is / do go
    / is going to buy / say / likes',
        'are / go
    / did buy
    / said / liked',
        'are / go
    / bought
    / says / would like',
        'is / going / did buy / says / liked',
        '0'
    ),
(
    
        'Selecione a frase
    correta:
    ',
        'When is Mrs. Baker going to finish his report?',
        'When Mrs. Baker is going finish her report?',
        'When\'s Mrs. Baker are going to finish her report?',
        'When is Mrs. Baker going finish his report?',
        'When is Mrs. Baker going to finish her report?',
        '0'
    ),(
    
        'Selecione a frase
correta:
',
        'Mrs. Lewis usually is tired at the
end of the week',
        'The Wilsons have always dinner together',
        'My parents often are at home on weekends',
        'Some people did not had a good 2012',
        'Mr. Thompson never goes out on Mondays and Wednesdays',
        '0'
    ),(
        
        'Selecione a frase
correta:
',
        'Mr. Davis will give we a game console on Christmas',
        'Mr. Davis will give our a game console on Christmas',
        'Mr. Davis will give ours a game console on Christmas',
        'Mrs. Davis will give yours a game console on Christmas',
        'Mr. Davis will give us a game console on Christmas',
        '0'
    ),(
        
        'Selecione a frase
correta:
',
        'I would like drink some water',
        'Katie and her friends usually get together at the mall on Saturdays',
        'Jim was fired yesterday. We need to cheer him over',
        'I waited for Brian for almost an hour, but he didn\'t show out',
        'Rebecca has put in a lot of weight in the past months',
        '0'
    ),
(
        'Selecione a frase
    INCORRETA:
    ',
        'In 2011 that company hired over 150 new employees.',
        'Was there someone in the hallway?.',
        'Sorry, but nobody can help you do your term paper.',
        'Wasn\'t there anyone in class when you arrived?',
        'There was anybody outside waiting for you, Mr. Baker.',
        '0'
    ),
    (
    
        'Enumere
corretamente:
<br><br>
        1- Thanks, Julie. <br>                   
        2- How much is that blouse? <br>        
        3- What color is your new dress? <br>   
        4- What\'s your phone number? <br>        
        5- Where\'s my notebook? <br><br>
(    ) It\'s red. <br>
    (    ) You\'re welcome. <br>
(    ) It\'s 346-7098. <br>
    (    ) It\'s under the desk. <br>
(    ) It\'s $19,99. <br>

    '
        ,
        '2, 5, 3, 4, 1',
        '3, 2, 4, 5, 1',
        '4, 3, 1, 5, 2',
        '3, 4, 2, 1, 5',
        '3, 1, 4, 5, 2',
        '0'
    ),
(
        'Enumere
    corretamente:
    1- Have You.           <br>                 
        2-
    While I was taking a shower   <br>       
        3- Emma has worked for that company  <br>   
        4- My present teacher is Mr. Forman    <br> 
        5- I have spoken to him about it       <br> <br>
    (    ) For many years. <br>
    (    ) I\'ve studied
with him for 6 months. <br>
(    ) John was preparing dinner. <br>
(    ) Polish your shoes yet? <br>
(    ) Several times. <br>',
        '2, 5, 3, 4, 1',
        '3, 2, 4, 5, 1',
        '4, 3, 1, 5, 2',
        '2, 1, 3, 5, 4',
        '3, 4, 2, 1, 5',
        '0'
    ),
    (
        'Enumere
corretamente:
<br><br>
    1- I\'m not enjoying my course in college <br>
        2- The problem is that i have no idea of what to do<br>
        3- I hope the student counselor can help me <br>
        4- For now, there is nothing much I can do but keep on studying. <br>
        5- this past year has been a nightmare <br> <br>
    (  ) So it\'s going to be hard to choose one. <br>
(  ) I hope next term things will change for the bether. <br>
(  ) I thought about it very seriously. I\'m going to change it. <br>
    (  ) The exams finish in three days. <br>
    (  ) I have an appointment
    with him tomorrow afternoon.  < br >',
        '3, 5, 4, 1, 2',
        '2, 4, 1, 2, 5',
        '3, 1, 5, 4, 2',
        '1, 4, 2, 3, 5',
        '2, 5, 1, 4, 3',
        '0'
    ),
(
        'Enumere
    corretamente:<br><br>
        1- How\'s it going? <br>
        2-  How do you spell it? <br>
        3- Let\'s go
    shopping. <br
    >
        4- Goodbye. <br>
        5- Thank you very much. <br> <br>
    (  ) You\'  re welcome. <br>
(  ) Good idea! <br>
(  ) Take care. <br>
(  ) T-H-O-R-N-E. <br>
(  ) I\'m fine, thanks. <br> ',
        '3, 1, 2, 4, 5',
        '1, 4, 2, 5, 3',
        '1, 3, 5, 2, 4',
        '2, 5, 3, 1, 4',
        '3, 4, 2, 1, 5',
        '0'
    ),
(
        'Enumere
    corretamente:<br><br>
        1-  _________ did your parents go
    last weekend
    ? <br>
        2-  _________ did you eat for dinner last night? <br>
        3-  _________ did you need to get up early last Sunday? <br>
        4-  _________ did your friends buy new clothes at the mall? <br>
        5-  _________ did you have dinner
    with last weekend? <br><br>
    (  ) What <br>
    (  ) Who <br>
    (  ) Where <br>
    (  ) Why <br>
    (  ) When <br>',
        '3, 5, 2, 1, 4',
        '2, 1, 4, 5, 3',
        '2, 5, 3, 1, 4',
        '3, 2, 5, 4, 1',
        '2, 5, 1, 3, 4',
        '0'
    );