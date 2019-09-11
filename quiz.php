
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/materialize.min.css">
	<script src="js/materialize.min.js"></script>
	<link rel="stylesheet" href="css/site.css">
	<title>Quiz</title>
	<style>
		[type="radio"]:checked+span:after {
			border: 2px solid #ffb02d;
		}
		[type="radio"]:checked+span:after {
			background-color: #ffb02d;
		}
	</style>
</head>

<body class='blue-grey'>
	<center>
		<h3>Test your English!</h3>
	</center>
	<div class='container'>
	<form action='/includes/log_user_highscore.php' method='POST'>
		<div class="card-panel col s12 m6 input-card">
		<h6>1 ) I think she spent too much money ____ thoses clothes.</h6>
		<p>
			<label>
				<input  name="quest1" type="radio" value="in"/>
				<span style='color:#404040;'>in</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest1" type="radio" value="at"/>
				<span style='color:#404040;' >at</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest1" type="radio" value="with"/>
				<span style='color:#404040;'>with</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest1" type="radio" value="on"/>
				<span style='color:#404040;'>on</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest1" type="radio" value="without"/>
				<span style='color:#404040;'>without</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>2 ) What's the _____________________ there today?</h6>
		<p>
			<label>
				<input  name="quest2" type="radio" value="weather"/>
				<span style='color:#404040;'>weather</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest2" type="radio" value="weather like"/>
				<span style='color:#404040;' >weather like</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest2" type="radio" value="time like"/>
				<span style='color:#404040;'>time like</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest2" type="radio" value="time"/>
				<span style='color:#404040;'>time</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest2" type="radio" value="clime"/>
				<span style='color:#404040;'>clime</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>3 ) There's a parking lot _____________ from the bookstore.</h6>
		<p>
			<label>
				<input  name="quest3" type="radio" value="near"/>
				<span style='color:#404040;'>near</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest3" type="radio" value="oposite"/>
				<span style='color:#404040;' >oposite</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest3" type="radio" value="across"/>
				<span style='color:#404040;'>across</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest3" type="radio" value="around"/>
				<span style='color:#404040;'>around</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest3" type="radio" value="afar"/>
				<span style='color:#404040;'>afar</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>4 ) She _________ for _________ while she was studying in the U.S.A</h6>
		<p>
			<label>
				<input  name="quest4" type="radio" value="work/himself"/>
				<span style='color:#404040;'>work/himself</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest4" type="radio" value="works / him"/>
				<span style='color:#404040;' >works / him</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest4" type="radio" value="work / he"/>
				<span style='color:#404040;'>work / he</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest4" type="radio" value="works / he"/>
				<span style='color:#404040;'>works / he</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest4" type="radio" value="work / him"/>
				<span style='color:#404040;'>work / him</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>5 ) Alexander is  _______ a book right now</h6>
		<p>
			<label>
				<input  name="quest5" type="radio" value="reader"/>
				<span style='color:#404040;'>reader</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest5" type="radio" value="read"/>
				<span style='color:#404040;' >read</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest5" type="radio" value="reading"/>
				<span style='color:#404040;'>reading</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest5" type="radio" value="to read"/>
				<span style='color:#404040;'>to read</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest5" type="radio" value="readed"/>
				<span style='color:#404040;'>readed</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>6 ) _____ you like to do in the weeknd's</h6>
		<p>
			<label>
				<input  name="quest6" type="radio" value="whose"/>
				<span style='color:#404040;'>whose</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest6" type="radio" value="do"/>
				<span style='color:#404040;' >do</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest6" type="radio" value="where"/>
				<span style='color:#404040;'>where</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest6" type="radio" value="what"/>
				<span style='color:#404040;'>what</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest6" type="radio" value="how"/>
				<span style='color:#404040;'>how</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>7 ) Don't put your cup on the _____ of the table someone will knock it off</h6>
		<p>
			<label>
				<input  name="quest7" type="radio" value="edge"/>
				<span style='color:#404040;'>edge</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest7" type="radio" value="border"/>
				<span style='color:#404040;' >border</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest7" type="radio" value="outside"/>
				<span style='color:#404040;'>outside</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest7" type="radio" value="boundary"/>
				<span style='color:#404040;'>boundary</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest7" type="radio" value="end"/>
				<span style='color:#404040;'>end</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>8 ) I don't like that noise. ___________ has to do _____________ about it</h6>
		<p>
			<label>
				<input  name="quest8" type="radio" value="something / anything"/>
				<span style='color:#404040;'>something / anything</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest8" type="radio" value="somebody/something"/>
				<span style='color:#404040;' >somebody/something</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest8" type="radio" value="someone / something"/>
				<span style='color:#404040;'>someone / something</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest8" type="radio" value="someone / anything"/>
				<span style='color:#404040;'>someone / anything</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest8" type="radio" value="somebody / anything"/>
				<span style='color:#404040;'>somebody / anything</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>9 ) This new printer is recommended as being _____________ reliable</h6>
		<p>
			<label>
				<input  name="quest9" type="radio" value="readily"/>
				<span style='color:#404040;'>readily</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest9" type="radio" value="incredibly"/>
				<span style='color:#404040;' >incredibly</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest9" type="radio" value="highly"/>
				<span style='color:#404040;'>highly</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest9" type="radio" value="strongly"/>
				<span style='color:#404040;'>strongly</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest9" type="radio" value="greatly"/>
				<span style='color:#404040;'>greatly</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>10 ) I need to go downtown tomorrow. ____ you ______ me a ride?</h6>
		<p>
			<label>
				<input  name="quest10" type="radio" value="Will/Give"/>
				<span style='color:#404040;'>Will/Give</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest10" type="radio" value="Will/got"/>
				<span style='color:#404040;' >Will/got</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest10" type="radio" value="Was/Give"/>
				<span style='color:#404040;'>Was/Give</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest10" type="radio" value="Was/Take "/>
				<span style='color:#404040;'>Was/Take </span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest10" type="radio" value="Will/Take"/>
				<span style='color:#404040;'>Will/Take</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>11 )  I _________ a summer course in New York last year. I _________ how to play the drums and now I _________ in a rock band with my cousins. My brother _________ to go to New York next year and learn how to play the drums too.</h6>
		<p>
			<label>
				<input  name="quest11" type="radio" value="did take / learned / playing / does want "/>
				<span style='color:#404040;'>did take / learned / playing / does want </span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest11" type="radio" value="am going to take / learned / play / wants"/>
				<span style='color:#404040;' >am going to take / learned / play / wants</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest11" type="radio" value="took / learned / am playing / would like"/>
				<span style='color:#404040;'>took / learned / am playing / would like</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest11" type="radio" value="take / learn / play / liked"/>
				<span style='color:#404040;'>take / learn / play / liked</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest11" type="radio" value="taking/learn/am playing/liked"/>
				<span style='color:#404040;'>taking/learn/am playing/liked</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>12 ) My wife Susan and my daughter Stephanie _________ mall rats. They _________ to the mall every week and buy things we do not need. On Saturday, they _________ a bicycle, but they don't know how to ride a bike! Stephanie always _________ that she _____ to work in a department store.
		</h6>
		<p>
			<label>
				<input  name="quest12" type="radio" value="is/going/did buy/says/liked"/>
				<span style='color:#404040;'>is/going/did buy/says/liked</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest12" type="radio" value="is / do go / is going to buy / say / likes"/>
				<span style='color:#404040;' >is / do go / is going to buy / say / likes</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest12" type="radio" value="is / are going / bought / say / likes"/>
				<span style='color:#404040;'>is / are going / bought / say / likes</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest12" type="radio" value="are / go / did buy / said / liked"/>
				<span style='color:#404040;'>are / go / did buy / said / liked</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest12" type="radio" value="are / go / bought / says / would like"/>
				<span style='color:#404040;'>are / go / bought / says / would like</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>13 ) Selecione a sequência correta</h6>
		<p>
			<label>
				<input  name="quest13" type="radio" value="When is Mrs. Baker going finish his report?"/>
				<span style='color:#404040;'>When is Mrs. Baker going finish his report?</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest13" type="radio" value="When's Mrs. Baker are going to finish her report?"/>
				<span style='color:#404040;' >When's Mrs. Baker are going to finish her report?</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest13" type="radio" value="When Mrs. Baker is going finish her report?"/>
				<span style='color:#404040;'>When Mrs. Baker is going finish her report?</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest13" type="radio" value="When is Mrs. Baker going to finish her report?"/>
				<span style='color:#404040;'>When is Mrs. Baker going to finish her report?</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest13" type="radio" value="When is Mrs. Baker going to finish his report?"/>
				<span style='color:#404040;'>When is Mrs. Baker going to finish his report?</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>14 ) Selecione a sequência correta</h6>
		<p>
			<label>
				<input  name="quest14" type="radio" value="Mr. Thompson never goes out on Mondays and Wednesdays"/>
				<span style='color:#404040;'>Mr. Thompson never goes out on Mondays and Wednesdays</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest14" type="radio" value="The Wilsons have always dinner together"/>
				<span style='color:#404040;' >The Wilsons have always dinner together</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest14" type="radio" value="Some people did not had a good 2012"/>
				<span style='color:#404040;'>Some people did not had a good 2012</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest14" type="radio" value="Mrs. Lewis usually is tired at the end of the week"/>
				<span style='color:#404040;'>Mrs. Lewis usually is tired at the end of the week</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest14" type="radio" value="My parents often are at home on weekends"/>
				<span style='color:#404040;'>My parents often are at home on weekends</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>15 ) Selecione a sequência correta</h6>
		<p>
			<label>
				<input  name="quest15" type="radio" value="Mrs. Davis will give yours a video game on Christmas"/>
				<span style='color:#404040;'>Mrs. Davis will give yours a video game on Christmas</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest15" type="radio" value="Mr. Davis will give we a video game on Christmas"/>
				<span style='color:#404040;' >Mr. Davis will give we a video game on Christmas</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest15" type="radio" value="Mr. Davis will give ours a video game on Christmas"/>
				<span style='color:#404040;'>Mr. Davis will give ours a video game on Christmas</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest15" type="radio" value="Mr. Davis will give us a video game on Christmas"/>
				<span style='color:#404040;'>Mr. Davis will give us a video game on Christmas</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest15" type="radio" value="Mr. Davis will give our a video game on Christmas"/>
				<span style='color:#404040;'>Mr. Davis will give our a video game on Christmas</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>16 ) Selecione a sequência correta</h6>
		<p>
			<label>
				<input  name="quest16" type="radio" value="Jim was fired yesterday. We need to cheer him over"/>
				<span style='color:#404040;'>Jim was fired yesterday. We need to cheer him over</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest16" type="radio" value="Katie and her friends usually get together at the mall on Saturdays"/>
				<span style='color:#404040;' >Katie and her friends usually get together at the mall on Saturdays</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest16" type="radio" value="I waited for Brian for almost an hour, but he didn't show out"/>
				<span style='color:#404040;'>I waited for Brian for almost an hour, but he didn't show out</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest16" type="radio" value="I would like drink some water"/>
				<span style='color:#404040;'>I would like drink some water</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest16" type="radio" value="Rebecca has put in a lot of weight in the past months"/>
				<span style='color:#404040;'>Rebecca has put in a lot of weight in the past months</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>17 ) Selecione a sequência INCORRETA</h6>
		<p>
			<label>
				<input  name="quest17" type="radio" value="In 2011 that company hired over 150 new employees"/>
				<span style='color:#404040;'>In 2011 that company hired over 150 new employees</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest17" type="radio" value="There was anybody outside waiting for you, Mr. Baker"/>
				<span style='color:#404040;' >There was anybody outside waiting for you, Mr. Baker</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest17" type="radio" value="Was there someone in the hallway?"/>
				<span style='color:#404040;'>Was there someone in the hallway?</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest17" type="radio" value="Wasn't there anyone in class when you arrived"/>
				<span style='color:#404040;'>Wasn't there anyone in class when you arrived</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest17" type="radio" value="Sorry, but nobody can help you do your term paper"/>
				<span style='color:#404040;'>Sorry, but nobody can help you do your term paper</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
			<h6>18 ) 1- Have You				(    ) For many years
				 <br><br>
				 2- While I was taking a shower		(    ) I've studied with him for 6 months
				 <br><br>
				 3- Emma has worked for that company	(    ) John was preparing dinner
				 <br><br>
				 4- My present teacher is Mr. Forman	(    ) Polish your shoes yet?
				 <br><br>
				 5- I have spoken to him about it		(    ) Several times
				 <br>
</h6>
		<p>
			<label>
				<input  name="quest18" type="radio" value="2, 5, 3, 4, 1"/>
				<span style='color:#404040;'>2, 5, 3, 4, 1</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest18" type="radio" value="3, 4, 2, 1, 5"/>
				<span style='color:#404040;' >3, 4, 2, 1, 5</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest18" type="radio" value="2, 1, 3, 5, 4"/>
				<span style='color:#404040;'>2, 1, 3, 5, 4</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest18" type="radio" value="4, 3, 1, 5, 2"/>
				<span style='color:#404040;'>4, 3, 1, 5, 2</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest18" type="radio" value="3, 2, 4, 5, 1"/>
				<span style='color:#404040;'>3, 2, 4, 5, 1</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>19 ) 1- Thanks, Julie				(    ) It's red
				<br><br>
				2- How much is that blouse? 		(    ) You're wellcome
				<br><br>
				3- What collor is your new dress? 	(    ) It's 346-7098
				<br><br>
				4- What's your phone number?		(    ) It's under the desk
				<br><br>
				5- Where's my notebook?		(    ) It's $19,99
				<br>
</h6>
		<p>
			<label>
				<input  name="quest19" type="radio" value="2, 4, 3, 5, 1"/>
				<span style='color:#404040;'>2, 4, 3, 5, 1</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest19" type="radio" value="3, 5, 1, 2, 4"/>
				<span style='color:#404040;' >3, 5, 1, 2, 4</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest19" type="radio" value="5, 3, 1, 4, 2"/>
				<span style='color:#404040;'>5, 3, 1, 4, 2</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest19" type="radio" value="3, 1, 4, 5, 2"/>
				<span style='color:#404040;'>3, 1, 4, 5, 2</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest19" type="radio" value="2, 5, 3, 4, 1"/>
				<span style='color:#404040;'>2, 5, 3, 4, 1</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>20 ) 1- I'm not enjoying my course in college
				 <br><br>				
				2- The problem is that i have no idea of what to do
				<br><br>
				3- I hope the student counselor can help me
				<br><br> 
				4- For now, there is nothing much I can do but keep on studying
				<br><br>
				5- this past year has been a nightmare
				<br><br><br>

				(  ) So it's going to be hard to choose one
				<br><br>
				(  ) I hope next term things will change for the bether
				<br><br>
				(  ) I thought about it verry seriously. I'm going to change it
				<br><br>
				(  ) The exams finish in three days
				<br><br>
				(  ) I have an appointment with him tomorrow afternoon
</h6>
		<p>
			<label>
				<input  name="quest20" type="radio" value="3, 1, 5, 4, 2"/>
				<span style='color:#404040;'>3, 1, 5, 4, 2</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest20" type="radio" value="3, 5, 4, 1, 2"/>
				<span style='color:#404040;' >3, 5, 4, 1, 2</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest20" type="radio" value="1, 3, 2, 5, 4"/>
				<span style='color:#404040;'>1, 3, 2, 5, 4</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest20" type="radio" value="1, 4, 2, 3, 5"/>
				<span style='color:#404040;'>1, 4, 2, 3, 5</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest20" type="radio" value="2, 4, 1, 2, 5"/>
				<span style='color:#404040;'>2, 4, 1, 2, 5</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>21 ) 1- How's it going? 		(  ) Good idea
				<br><br>
				2-  How do you spell it?		(  ) Take care
				<br><br>
				3- Let's go shopping.		(  ) T-H-O-R-N-E
				<br><br>
				4- Goodbye			(  ) I'm fine, thanks 
				<br><br>
				5- Thank you very much.	(  ) You're wellcome
</h6>
		<p>
			<label>
				<input  name="quest21" type="radio" value="3, 1, 2, 4, 5"/>
				<span style='color:#404040;'>3, 1, 2, 4, 5</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest21" type="radio" value="2, 5, 3, 1, 4"/>
				<span style='color:#404040;' >2, 5, 3, 1, 4</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest21" type="radio" value="1, 3, 5, 2, 4"/>
				<span style='color:#404040;'>1, 3, 5, 2, 4</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest21" type="radio" value="1, 4, 2, 5, 3"/>
				<span style='color:#404040;'>1, 4, 2, 5, 3</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest21" type="radio" value="3, 4, 2, 1, 5"/>
				<span style='color:#404040;'>3, 4, 2, 1, 5</span>
			</label>
		</p>
		</div>
				<div class="card-panel col s12 m6 input-card">
		<h6>22 ) 1-  _________ did your parents go last weekend?		(  ) What 
				 <br><br>
				 2-  _________ did you eat for dinner last night?			(  ) Who
				 <br><br>
				 3-  _________ did you need to get up early last Sunday?		(  ) Where
				 <br><br>
				 4-  _________ did your friends buy new clothes at the mall?	(  ) Why
				 <br><br>
				 5-  _________ did you have dinner with last weekend?		(  ) When
				 <br><br>
</h6>
		<p>
			<label>
				<input  name="quest22" type="radio" value="2, 5, 1, 3, 4"/>
				<span style='color:#404040;'>2, 5, 1, 3, 4</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest22" type="radio" value="2, 5, 3, 1, 4"/>
				<span style='color:#404040;' >2, 5, 3, 1, 4</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest22" type="radio" value="3, 2, 5, 4, 1"/>
				<span style='color:#404040;'>3, 2, 5, 4, 1</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest22" type="radio" value="3, 5, 2, 1, 4"/>
				<span style='color:#404040;'>3, 5, 2, 1, 4</span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest22" type="radio" value="2, 1, 4, 5, 3"/>
				<span style='color:#404040;'>2, 1, 4, 5, 3</span>
			</label>
		</p>
		</div>
				<button class="btn col s10 m10 offset-s1 offset-m1" type='submit' name='submit'>enviar</button>
		</form>
		<br><br><br><br><br><br><br>
	</div>
</body>

</html>