<?php
    session_start();
    include('../dbh.php');
?>

<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foxish - Entrar</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="https://fonts.googleapis.com/css?family=Lexend+Giga&display=swap" rel="stylesheet">
    <script src="js/materialize.js"></script>

   <style>
    a{color: rgba(251, 176, 45, 1);}
    a:hover{color: rgba(251, 176, 45, 1);}
    p{font-size: 22px;}
  </style>
    
    </head>
    <body>
        <div class="navbar-fixed">
  <nav class="blue-grey darken-4" style="opacity:0.925;">
    <div class="nav-wrapper blue-grey darken-4" style="opacity:0.90;">

        <a class="logo-conteiner" ><img src="foxish-original-pure_color.png" style="width: 50px; margin-left: 80px; margin-top:3  px;"></a>
        <a href="#" class="brand-logo .foda" style="margin-left: 10px;font-family: 'Lexend Giga', sans-serif;color: rgba(251, 176, 45, 1);">Foxish</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        </ul>

    </div>
  </nav>
</div>
        <div class="container center">       
        <h5>Alunos possiveis de serem cadastrados na turma</h5>
        <div class="container center">
        <table>
        </div>
            <br>
            <tr>
                <td>Nome do aluno</td>
                <td>Código do aluno</td>
            </tr>
            <?php
                 $sql = mysqli_query($conn, "SELECT * FROM aluno");
                 $result = mysqli_num_rows($sql);
                 while ($linha = mysqli_fetch_array($sql)) {
                
            ?>  
            <tr>
                <td><?php echo $linha['aluno_name']?></td>
                <td><?php echo $linha['aluno_id']?></td>
            </tr>
            <?php } ?>
        </table>
        </div>
        <br><br>
        <div class="container center">
        <form action="cadastrar.php" method="POST"> 
            
            <div class="input-field col s12">
            <label>Nome da turma</label>
            <input type="text" name="nome" required="required">
            </div>
            
            <br>
            
            <div class="input-field col s12">
            <label>Adicionar aluno com o código:</label> 
            <input type="number" name="id1" >
            </div>

            <br>
            
            <div class="input-field col s12">
            <label>Adicionar aluno com o código:</label> 
            <input type="number" name="id2" >
            </div>
            
            <br>
            
            <div class="input-field col s12">
            <label>Adicionar aluno com o código:</label> 
            <input type="number" name="id3" >
            </div>
            <br>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar sua turma<i class="material-icons right">send</i></button>
        </form>
    </body>
</html>