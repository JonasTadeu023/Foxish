<?php
session_start();
include "../funcoes.php";
$turmas_aluno = pegarTurmasAluno($_SESSION["usuario_id"]);
$usuario = $_SESSION["usuario_id"];
$sql = mysqli_query($conn, "SELECT * FROM aluno WHERE aluno_id = '$usuario'");
  while ($linha = mysqli_fetch_array($sql)) {
    $foto = $linha['aluno_foto'];
    $prof = $linha['aluno_name'];
  }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lexend+Giga&display=swap" rel="stylesheet">
    <script src="../../js/materialize.min.js"></script>
    <title>Perfil - <?=pegarNomeAluno($_SESSION["usuario_id"])?></title>
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
            height: 80%;
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

<body class="dark-grey">
<div class="navbar-fixed">
  <nav class="blue-grey darken-4" style="opacity:0.925;">
    <div class="nav-wrapper blue-grey darken-4" style="opacity:0.90;">
        <a class="logo-conteiner" ><img src="../../imagens/foxish-original-pure_color.png" style="width: 50px; margin-left: 80px; margin-top:3  px;"></a>
        <a href="principal.html" class="brand-logo .foda" style="margin-left: 10px;font-family: 'Lexend Giga', sans-serif;color: rgba(251, 176, 45, 1);">Foxish</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a class="" style="font-family: 'Lexend Giga', sans-serif;font-size:18px;color: rgba(251, 176, 45, 1);" href="#">Meu Perfil</a></li>
        <li><a class="" style="font-family: 'Lexend Giga', sans-serif;font-size:18px;" href="../../quiz.php">Teste Nivelador</a></li>
        <li><a class="" style="font-family: 'Lexend Giga', sans-serif;font-size:18px;" href="../logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>
</div>

    <div class="body row">
        <div class="col s4">
            <div class=" card-panel white">
                <h5>Meu Perfil:</h5>
                <img class="responsive-img " src=" <?php echo "../usersaluno/$prof/$foto";?>">
                <h6>ID:   <?=$_SESSION['usuario_id']?></h6>
                <h6>USERNAME:   <?=$_SESSION['usuario_nome']?></h6>
                <h6>EMAIL:   <?=$_SESSION['usuario_email']?></h6>
                <h6>NIVEL:   <?=$_SESSION['usuario_nivel']?>  <?=$_SESSION['usuario_fluencia']?></h6>
            </div>
            <div class="card-panel">
                <h5>Minhas Turmas:</h5>
                <?php for ($i = 1; $i <= count($turmas_aluno); $i++): ?>
                    <div class="card-panel btn col s12" onclick="carregarChat('<?=pegarNomeAluno($_SESSION['usuario_id'])?>', '<?=$i?>')"><?=pegarNomeTurma($i)?></div>
                <?php endfor;?>
            </div>
        </div>

        <div class="cont col s4 offset-s4 iframe-container">
            <iframe src="" id ='chat'  class="card-panel white"></iframe>
        </div>
    </div>
    <script>
    var chat = document.getElementById('chat');
    function carregarChat(usuario, turmaid){
        chat.src = `http://localhost/projeto-feira/chat/?usuario=${usuario}&turmaid=${turmaid}`;
    }
</script>
</body>
</html>