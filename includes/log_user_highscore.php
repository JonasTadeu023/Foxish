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

    $jogador_recorde = 18;
    for ($i = 1; array_key_exists($i, $reg) == true; $i++) {
        if ($post_array[$i] == $reg[$i][5]) {

            $jogador_recorde++;
        }
    }
    $nivel = 0;
    $fluencia = 0;
    if ($jogador_recorde == 22) {
        $fluencia = 'GODLIKE';
        $nivel = 5;
    }if ($jogador_recorde < 22) {
        $fluencia = 'Fluente';
        $nivel = 4;
    }if ($jogador_recorde < 19) {
        $fluencia = 'Mediano';
        $nivel = 3;
    }if ($jogador_recorde < 15) {
        $fluencia = 'Aprendiz';
        $nivel = 2;
    }
    if ($jogador_recorde < 7) {
        $fluencia = 'Iniciante';
        $nivel = 1;
    }

    $id = $_SESSION['usuario_id'];
    $query = "SELECT * FROM `aluno` WHERE `aluno_id` = '$id';";
    $result = mysqli_fetch_assoc(mysqli_query($conn, $query));
    var_dump($nivel);
    var_dump($result);
    if ($nivel < $result['aluno_nivel']) {
        $query = "UPDATE aluno SET aluno_nivel = $nivel, aluno_fluencia = '$fluencia' where `aluno_id` = '$id';";
        mysqli_query($conn, $query);
        header("Location: perfis/perfil_aluno.php");
        exit();
    } else {
        echo 'x';
        header("Location: perfis/perfil_aluno.php");
        exit();
    }
} else {
    echo 'x';
    header("Location: ../quiz.php");
    exit();
}
