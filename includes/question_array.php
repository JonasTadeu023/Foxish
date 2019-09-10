<?php
	if(isset($_SESSION['texte_turma'])){
		$query = "SELECT * FROM questao where teste_turma = 1";
	}
	else{			
		$query = "SELECT * from questao where teste_turma = 0";
	}
	
	$result = mysqli_query($conn ,$query);
	$reg = array();
	while($row = mysqli_fetch_assoc($result)){
		$reg[$row['id']] = array($row['enunciado'], $row['op_1'], $row['op_2'], $row['op_3'], $row['op_4'], $row['op_5']);
	} 