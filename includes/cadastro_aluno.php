<?php
session_start();
include 'dbh.php';

$aluno_nome = mysqli_real_escape_string($conn, trim($_POST['aluno_nome']));
$aluno_senha = mysqli_real_escape_string($conn, trim(md5($_POST['aluno_senha'])));
$aluno_email = mysqli_real_escape_string($conn, trim($_POST['aluno_email']));
$aluno_foto = $_FILES['arquivo']['name'];
$XP = 0;

$sql = "SELECT count(*) as total from aluno2 where aluno_name = '$aluno_nome'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1) {
    $_SESSION['Usuario ja existe'] = true;
    header('location: cadastro_aluno.php');
    exit();
}

$result = "INSERT INTO aluno (aluno_name, aluno_senha, aluno_email, aluno_foto, aluno_xp, data_cadastro) VALUES ('$aluno_nome', '$aluno_senha', '$aluno_email', '$aluno_foto', '$XP', NOW())";
$result_perfil = mysqli_query($conn, $result);

$pastaaluno = 'usersaluno/' . $aluno_nome . '/';
mkdir($pastaaluno, 0777);

if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $pastaaluno . $aluno_foto)) {
    if ($conn->query($sql) == true) {
        $_SESSION['status_cadastro'] = true;
    }
    $conn->close();
    header('location: ../login_aluno.php');
    exit();
}
