<?php
session_start();
include 'dbh.php';
if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('location: ../login_aluno.php');
    exit();
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT * from aluno where aluno_email = '{$email}' and aluno_senha = md5('{$senha}')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$rows = mysqli_num_rows($result);
$dados = mysqli_fetch_assoc($result);

if ($rows == 1) {
    $_SESSION['usuario_id'] = $dados["aluno_id"];
    $_SESSION['usuario_nome'] = $dados["aluno_name"];
    $_SESSION['usuario_email'] = $dados["aluno_email"];
    $_SESSION['usuario_nivel'] = $dados["aluno_nivel"];
    $_SESSION['usuario_fluencia'] = $dados["aluno_fluencia"];
    header('location: perfis/perfil_aluno.php');
    exit();
} else {
    header('location: ../login_aluno.php');
    exit();
}
