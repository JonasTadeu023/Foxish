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
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        .chat-body {
            flex: 1 0 auto;

        }

        .new-message {
            background-color: lightgrey;
            background-size: cover;
            position: sticky;
            bottom: 0px;
            padding: 10px;
        }

        .message-input-div {
            background-color: white;
            border-radius: 10px;
            margin-top: 2.3%;
        }

        .chat-field-amigo {
            display: inline-block;
            position: relative;
            padding: 5px;
            margin-left: 10px;
            border: 2px solid #2196f3;
            border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .chat-field-user {
            display: inline-block;
            position: relative;
            padding: 5px;
            margin-right: 10px;
            border: 2px solid #e0e0e0;
            background-color: #e0e0e0;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .seta-amigo {
            width: 0;
            height: 0;
            border-width: 10px 0px 10px 10px;
            border-style: solid;
            border-color: #2196f3 transparent transparent transparent;
            position: absolute;
            top: -2px;
            left: 0;
            transform: translate(-100%, 0);
        }

        .seta-user {
            width: 0;
            height: 0;
            border-width: 10px 10px 10px 0px;
            border-style: solid;
            border-color: #e0e0e0 transparent transparent transparent;
            position: absolute;
            top: -2px;
            right: -20px;
            transform: translate(-100%, 0);
        }
    </style>
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