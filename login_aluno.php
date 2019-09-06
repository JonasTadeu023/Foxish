<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foxish - Início</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="https://fonts.googleapis.com/css?family=Lexend+Giga&display=swap" rel="stylesheet"> 
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
        <li class="active"><a class="" style="font-family: 'Lexend Giga', sans-serif;font-size:18px;color: rgba(251, 176, 45, 1);" href="Sobre">Sobre</a></li>
        <li><a class="" style="font-family: 'Lexend Giga', sans-serif;font-size:18px;" href="login_aluno.php">Alunos</a></li>
        <li><a class="" style="font-family: 'Lexend Giga', sans-serif;font-size:18px;" href="login_professor">Professores</a></li>
      </ul>
    </div>
  </nav>
</div>

<div class="conteiner">
  <div class="container">
    <div class="row">
        <div class="col s12 m7">
            <h5>Login</h5>
            <form action="">
            <div class="conteiner">
            <div class="row">
                  <div class="input-field col s6">
                    <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                  </div>
                </div>
                <button class="waves-effect waves-light btn" type="submit">Enviar <i class="material-icons right">send</i></button>
            </form>
        </div>
      </div>
    </div>
  </div>
    <footer class="page-footer blue-grey darken-2">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text" style="font-size:16px;">Footer Content</h5>
            <p class="grey-text text-lighten-4" style="font-size:14px;">You can use rows and columns here to organize your footer content.</p>
          </div>
        </div>
      </div>
      <div class="footer-copyright blue-grey darken-4" >
        <div class="container" style="color:rgba(251, 176, 45, 1);">
            © 2019 Copyright Black Softweres
            <a class="right" style="color: rgba(251, 176, 45, 1);" href="#">Futuros projetos!</a>
        </div>
  </div>
    </footer>
</div>
</body>
</html>