<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/materialize.min.css">
    <script src="../js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>chat</title>
    <link href="../chat/chat.css" rel="stylesheet">
</head>

<body>
    <!-- Corpo do chat-->
    <div class="chat-body container">
        <div class="row left-align">
            <div class="col s10 m8 l6 left">
                <div class="row valign-wrapper">
                    <div class="col s1"></div>
                    <div class="chat-field-amigo blue">
                        <span class=" white-text flow-text">
                            This is a square image. Add the "circle" class to it to make it appear circular.
                        </span>
                        <div class="seta-amigo"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row right-align">
            <div class="col s10 m8 l6 right">
                <div class="row valign-wrapper">
                    <div class="chat-field-user">
                        <span class="black-text flow-text">
                            This is a square image. Add the "circle" class to it to make it appear circular.
                        </span>
                        <div class="seta-user"></div>
                    </div>
                    <div class="col s1"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Input de mensagem -->
    <footer class="page-footer new-message col s12">
        <div class="row valign-wrapper">
            <div class="row col s9 m11 message-input-div ">
                <input type="text" class="flow-text">
            </div>
            <div class="col s3 m1">
                <button class="btn-floating btn-large" onclick="console.log('massa')">
                    <i class="material-icons">send</i>
                </button>
            </div>
        </div>
    </footer>
</body>

</html>
