<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
        <a class="logo-conteiner" ><img src="imagens/foxish-original-pure_color.png" style="width: 50px; margin-left: 80px; margin-top:3  px;"></a>
        <a href="#" class="brand-logo .foda" style="margin-left: 10px;font-family: 'Lexend Giga', sans-serif;color: rgba(251, 176, 45, 1);">Foxish</a>      
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class=""><a class="" style="font-family: 'Lexend Giga', sans-serif;font-size:18px;" href="index.php">Sobre</a></li>
        <li><a class="active" style="font-family: 'Lexend Giga', sans-serif;font-size:18px ;color: rgba(251, 176, 45, 1);" href="login_aluno.php">Alunos</a></li>
        <li><a class="" style="font-family: 'Lexend Giga', sans-serif;font-size:18px;" href="login_professor">Professores</a></li>
      </ul>
    </div>
  </nav>
</div>
<div class="conteiner">
  <div class=" container">
  <!--conteudo-->  



  <div class="container center">
    <h5>Login para Alunos</h5>
    <div class="row">
    <h6>Para continuar, preencha os campos abaixo.</h6>
        <form action="includes_login_alunos.php" method="POST" enctype="multipart/form-data">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate" name="email" required="required">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate" name="senha" required="required">
                        <label for="password">Senha</label>
                    </div>
                </div>
                <div class="row">
                  <button class="btn waves-effect waves-light center-align" type="submit" name="action">Entrar
                    <i class="material-icons right">send</i>
                  </button>
                </div>
                <a href="cadastro_aluno.php" class='right'>Ainda não tem uma conta? Cadastre-se agora!</a>
        </form>
    </div>

  <!--footer-->


  <br><br><br><br><br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br><br><br><br>
  </div>
  <footer class="page-footer blue-grey darken-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text" style="font-size:16px;">Desenvolvido por: </h5>
                <p class="grey-text text-lighten-4" style="font-size:14px;">Jonas Saldanha, Pedro Dariva, Leon Tassinari e Joao Danilo Zucolotto.</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright blue-grey darken-4" >
            <div class="container" style="color:rgba(251, 176, 45, 1);">
            © 2019 Copyright Black Softwares
            <a class="right" style="color: rgba(251, 176, 45, 1);" href="#">Futuros projetos!</a>
            </div>
          </div>
        </footer>
</div>
</body>
</html>