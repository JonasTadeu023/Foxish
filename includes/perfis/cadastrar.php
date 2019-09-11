<?php
    session_start();
    include "../funcoes.php";
    include "../dbh.php";

    $turma = mysqli_real_escape_string($conn, trim($_POST['nome']));
    $id1 = mysqli_real_escape_string($conn, trim($_POST['id1']));
    $id2 = mysqli_real_escape_string($conn, trim($_POST['id2']));
    $id3 = mysqli_real_escape_string($conn, trim($_POST['id3']));
    $prof = $_SESSION["usuario_id"];

    $sql = "INSERT INTO turmas (turma_nome, aluno_1, aluno_2, aluno_3, prof_id) VALUES ('$turma', '$id1', '$id2', '$id3', '$prof')";
    if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $conn->close();
    header('location: perfil_professor.php');
    exit();
?>