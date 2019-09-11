<?php
    session_start();
    include "../funcoes.php";
    include "../dbh.php";

    $turma = mysqli_real_escape_string($conn, trim($_POST['nome']));
    $id1 = $_POST['id1'];
    $id2 = $_POST['id2'];
    $id3 = $_POST['id3'];
    $prof = $_SESSION["usuario_id"];

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if ($row['total'] == 1) {
        $_SESSION['Usuario ja existe'] = true;
        header('location: ../cadastro_prof.php');
        exit();
    }
    
    $result = "INSERT INTO prof (turma_nome, aluno_1, aluno_2, aluno_3, prof_id) VALUES ('$turma', '$id1', '$id2', '$id3', '$prof')";
    $result_perfil = mysqli_query($conn, $result);
    
   
    $conn->close();
    header('location: perfil_professor.php');
    exit();
?>