<?php
session_start();
include 'dbh.php';
if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('location: ../login_aluno.php');
    exit();
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT prof_id, prof_email, pro from prof where prof_email = '{$email}' and prof_senha = md5('{$senha}')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_num_rows($result);
$dados = mysqli_fetch_assoc($result);

if ($row == 1) {
    $_SESSION['usuario'] = $dados["prof_name"] ;
    header('location: perfis/perfil_professor.php');
    exit();
} else {
    header('location: ../login_professor.php');
    exit();
}
