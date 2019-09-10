<?php session_start(); 
    //if(!isset($_SESSION['nome'])){
    //    header("Location: index.php");
    //   exit();
	//}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../assets/materialize.min.css">
	<script src="../assets/materialize.min.js"></script>
	<link rel="stylesheet" href="../assets/site.css">
	<title>Quiz</title>
	<style>
		[type="radio"]:checked+span:after {
			border: 2px solid #ef5350;
		}
		[type="radio"]:checked+span:after {
			background-color: #ef5350;
		}
	</style>
</head>

<body>
	<center>
		<h1>Quiz</h1>
	</center>
	<div class='container'>
	<form action='/includes/log_user_highscore.php' method='POST'>
		<?php
			session_start();
			include_once"/includes/question_array.php";
			$shuffle = array(1, 2, 3, 4, 5);
			for ($i = 1; $i < mysqli_num_rows($result) + 1; $i++) {
				shuffle($shuffle);
				if (true) : ?>
		<div class="card-panel col s12 m6 input-card">
		<h6><?= $i ?> ) <?= $reg[$i][0] ?></h6>
		<p>
			<label>
				<input name="quest<?=$i?>" type="radio" value="<?=$reg[$i][$shuffle[0]] ?>"/>
				<span><?=$reg[$i][$shuffle[0]] ?></span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest<?=$i?>" type="radio" value="<?=$reg[$i][$shuffle[1]] ?>"/>
				<span><?=$reg[$i][$shuffle[1]] ?></span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest<?=$i?>" type="radio" value="<?=$reg[$i][$shuffle[2]] ?>"/>
				<span><?=$reg[$i][$shuffle[2]] ?></span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest<?=$i?>" type="radio" value="<?=$reg[$i][$shuffle[3]] ?>"/>
				<span><?=$reg[$i][$shuffle[3]] ?></span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest<?=$i?>" type="radio" value="<?=$reg[$i][$shuffle[4]] ?>"/>
				<span><?=$reg[$i][$shuffle[4]] ?></span>
			</label>
		</p>
		</div>
		<?php endif;} ?>
		<button class="btn col s10 m10 offset-s1 offset-m1" type='submit' name='submit'>enviar</button>
		</form>
	</div>
</body>

</html>