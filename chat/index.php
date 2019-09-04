<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/materialize.min.css">
    <script src="assets\js\materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>chat</title>
    <style>
        .new-message {
            background-color: lightgrey;
            position: fixed;
            bottom: 0px;
        }

        .message-input-div {
            background-color: white;
            border-radius: 10px;
            font-size: 30px;
        }
        #mensagem {
            width: 95%;
            font-size: 20px;
            margin-left: 5px;
        }
    </style>
</head>

<body class="row">
    <div class="chat-body col s12"></div>
    <!-- Input de mensagem -->
    <div class="row col s12 new-message valign-wrapper">
        <div class="row col s9 m11">
            <div class="input-field message-input-div">
                <input type="text" id="mensagem">
            </div>
        </div>
        <div class="col s3 m1">
            <button class="btn-floating btn-large">
                <i class="material-icons">send</i>
            </button>
        </div>
    </div>
</body>

</html>