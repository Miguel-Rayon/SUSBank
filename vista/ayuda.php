<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Bot</title>
    <link rel="stylesheet" href="../configuracion/css/estilos_ayuda.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

</head>

<body>
    <!-- CHAT BAR BLOCK -->
    <div id="chat-circle" class="btn btn-raised">
        <div id="chat-overlay"></div>
        <i class="material-icons">message</i>
    </div>

        <div class="content">
            <div class="chat-box-header">
                
                <div class="chat-title">
                    <span class="chat-box-toggle"><i class="material-icons">close</i></span>
                    <h1>SUS</h1>
                </div>
                <div class="avatar">
                    <img src="../img/me.png" />
                </div>
              </div>
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                   
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>
                           
                        <div id="chat-bar-bottom">
    
                            <p></p>
                            <br>
                        </div>
                    </div>
                </div>
                      
            </div>
             <!-- User input box -->
             <div class="chat-bar-input-block">
                <div id="userInput">
                    <input maxlength="1000" id="textInput" class="input-box" type="text" name="msg"
                        placeholder="Escribe un mensaje…">
                    <p></p>
                </div>

                <div class="chat-bar-icons">
                    <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                        onclick="sendButton()"></i>
                </div>
            </div>

           
        </div>

    </div>

</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../configuracion/js/chat.js"></script>
<script src="../configuracion/js/chat_responses.js"></script>

</html>