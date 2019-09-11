<?php
session_start();
include "../funcoes.php";
$turmas_aluno = pegarTurmasAluno($_SESSION["usuario_id"]);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/materialize.min.css">
    <script src="../../js/materialize.min.js"></script>
    <title>Perfil - <?= pegarNomeAluno($_SESSION["usuario_id"]) ?></title>
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
            position: relative;
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
                <span class="card-title">Turmas</span>
                <?php for ($i = 1; $i <= count($turmas_aluno); $i++) : ?>
                    <div class="card-panel btn col s12" onclick="carregarChat('<?= pegarNomeAluno($_SESSION['usuario_id'])?>', '<?= $i ?>')"><?= pegarNomeTurma($i) ?></div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="cont col s4 iframe-container">
            <div class="card-panel white" style="height: 30%;">
                <h1>Olá <?= pegarNomeAluno($_SESSION["usuario_id"]) ?></h1>
            </div>
            <iframe src="" class="card-panel white" id="chat"></iframe>
        </div>
        <div class="cont col s5">
            <div class="card red">
                <span class="card-title">Testes Disponíveis</span>
            </div>
        </div>
    </div>
</body>
<script>
    var chat = document.getElementById('chat');
    function carregarChat(usuario, turmaid){
        chat.src = `http://localhost/projeto-feira/chat/?usuario=${usuario}&turmaid=${turmaid}`; 
    }
</script>

</html>