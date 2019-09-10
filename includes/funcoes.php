<?php
include "../dbh.php";

function pegarNomeAluno($id){
    global $conn;
    $sql = "SELECT aluno_name FROM aluno WHERE aluno_id = '$id'";
    $result = mysqli_query($conn, $sql);
    $arr = mysqli_fetch_assoc($result);

    return $arr['aluno_name'];
}

function pegarNomeProf($id){
    global $conn;
    $sql = "SELECT prof_name FROM prof WHERE prof_id = '$id'";
    $result = mysqli_query($conn, $sql);
    $arr = mysqli_fetch_assoc($result);
   
    return $arr["prof_name"];
}

function pegarTurmasAluno($id){
    global $conn;
    $sql = "SELECT turma_id FROM turmas WHERE aluno_1 = '$id' OR aluno_2 = '$id' OR aluno_3 = '$id'";
    $result = mysqli_query($conn, $sql);
    $turmas_aluno = array();
    while($arr = mysqli_fetch_assoc($result)){
        array_push($turmas_aluno, $arr["turma_id"]);
    };

    return $turmas_aluno;
}

function pegarNomeTurma($id){
    global $conn;
    $sql = "SELECT turma_nome FROM turmas WHERE turma_id = '$id'";
    $result = mysqli_query($conn, $sql);
    $arr = mysqli_fetch_assoc($result);
   
    return $arr["turma_nome"];
}