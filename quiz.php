<?php session_start();
//if(!isset($reg['nome'])){
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
	<form action='includes/log_user_highscore.php' method='POST'>
<?php
include_once "includes/dbh.php";
$query = $query = "SELECT * from questao where 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $reg[$row['id']] = array($row['enunciado'], $row['op_1'], $row['op_2'], $row['op_3'], $row['op_4'], $row['op_5']);
}
$shuffle = array(1, 2, 3, 4, 5);
for ($i = 1; $i < mysqli_num_rows($result) + 1; $i++) {
    shuffle($shuffle);
    if (true): ?>
		<div class="card-panel col s12 m6 input-card">
		<h6><?=$i?> ) <?=$reg[$i][0]?></h6>
		<p>
			<label>
				<input  name="quest<?=$i?>" type="radio" value="<?=$reg[$i][$shuffle[0]]?>"/>
				<span style='color:#404040;'><?=$reg[$i][$shuffle[0]]?></span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest<?=$i?>" type="radio" value="<?=$reg[$i][$shuffle[1]]?>"/>
				<span style='color:#404040;' ><?=$reg[$i][$shuffle[1]]?></span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest<?=$i?>" type="radio" value="<?=$reg[$i][$shuffle[2]]?>"/>
				<span style='color:#404040;'><?=$reg[$i][$shuffle[2]]?></span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest<?=$i?>" type="radio" value="<?=$reg[$i][$shuffle[3]]?>"/>
				<span style='color:#404040;'><?=$reg[$i][$shuffle[3]]?></span>
			</label>
		</p>
		<p>
			<label>
				<input name="quest<?=$i?>" type="radio" value="<?=$reg[$i][$shuffle[4]]?>"/>
				<span style='color:#404040;'><?=$reg[$i][$shuffle[4]]?></span>
			</label>
		</p>
		</div>
		<?php endif;}?>
		<button class="btn col s10 m10 offset-s1 offset-m1" type='submit' name='submit'>enviar</button>
		</form>
		<br><br><br><br><br><br><br>
	</div>
</body>

</html>