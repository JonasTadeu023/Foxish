<?php 
session_start();
include "../funcoes.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/materialize.min.css">
    <script src="../../js/materialize.min.js"></script>
    <title>Perfil - <?= pegarNomeProf($_SESSION["usuario_id"])?></title>
    <style>
        html,
        body {
            height: 100%;
        }

        .iframe-container {
            overflow: hidden;
            // Calculated from the aspect ration of the content (in case of 16:9 it is 9/16= 0.5625)
            padding-top: 56.25%;
            position: relative;
        }

        .iframe-container iframe {
            border: 0;
            height: 60%;
            left: 0;
            position:relative;
            top: 0;
            width: 100%;
        }

        .body {
            height: 100%;
        }

        .cont {
            height: 100%
        }
    </style>
</head>

<body class="grey">
    <div class="body row">
        <div class="cont col s3">
            <div class="card row">
                <span class="card-title col s12">Turmas</span>
                <a href="cadastrar_turmas.php" class="btn col s12">Cadastrar turmas</a>
            </div>
        </div>
        <div class="cont col s4 iframe-container">
            <div class="card-panel white" style="height: 30%;"><h2>Olá <?=pegarNomeProf($_SESSION["usuario_id"])?></h2></div>
            <iframe src="http://localhost/projeto-feira/chat/" class="card-panel white"></iframe>
        </div>
        <div class="cont col s5">
            <div class="card red">
                <span class="card-title">Testes Disponíveis</span>
            </div>
        </div>
    </div>
</body>
