<?php
session_start();
include 'dbh.php';
if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('location: ../login_aluno.php');
    exit();
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT aluno_id, aluno_email from aluno where aluno_email = '{$email}' and aluno_senha = md5('{$senha}')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['usuario'] = $email;
    header('location: perfis/perfil_aluno.php');
    exit();
} else {
    header('location: ../login_aluno.php');
    exit();
}
