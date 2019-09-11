<?php
session_start();

include_once "dbh.php";
$query = $query = "SELECT * from questao where 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $reg[$row['id']] = array($row['enunciado'], $row['op_1'], $row['op_2'], $row['op_3'], $row['op_4'], $row['op_5']);
}
if (isset($_POST['submit'])) {
    for ($i = 1; $i < count($_POST); $i++) {
        $name_concatenation = "quest$i";
        if (true) {
            $post_array[$i] = mysqli_real_escape_string($conn, $_POST["$name_concatenation"]);
        } else {
            $post_array[$i] = false;
        }
    }

    $jogador_recorde = 0;
    for ($i = 1; array_key_exists($i, $reg) == true; $i++) {
        if ($post_array[$i] == $reg[$i][5]) {

            $jogador_recorde++;
        }
    }
    $fluencia;
    $nivel;
    if ($joagdor_record == 22) {
        $fluencia = 'GODLIKE';
        $nivel = 5;
    } elseif ($joagdor_record > 19 && $joagdor_record < 22) {
        $fluencia = 'Fluente';
        $nivel = 4;
    } elseif ($joagdor_record > 15 && $joagdor_record < 19) {
        $fluencia = 'Mediano';
        $nivel = 3;
    } elseif ($joagdor_record > 7 && $joagdor_record < 15) {
        $fluencia = 'Aprendiz';
        $nivel = 2;
    } else {
        $fluencia = 'Iniciante';
        $nivel = 1;
    }

    $id = $reg['usuario_id'];
    $query = "SELECT aluno_nivel,aluno_fluencia FROM `aluno` WHERE `id` = '$id';";
    $result = mysqli_fetch_assoc(mysqli_query($conn, $query));
    if ($nivel > $result['aluno_nivel']) {
        $query = "UPDATE aluno SET aluno_nivel = (int)$nivel, aluno_fluencia = '$fluencia' ;";
        mysqli_query($conn, $query);
        header("Location: perfis/perfil_aluno.php");
        exit();
    } else {
        header("Location: perfis/perfil_aluno.php");
        exit();
    }
} else {
    header("Location: ../quiz.php");
    exit();
}
