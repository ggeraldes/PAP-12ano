

<!DOCTYPE html>
<html class="html" lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="chat/assets/css/chat.css">
    <link rel="stylesheet" href="chat/style.css">
    <link rel="stylesheet" href="chat/assets/css/typing.css">
    <?php $idEnviou = $_SESSION['idUtilizador'];
    $numMensagens= 0;
    ?>
    <title>Chatbox</title>
</head>
<body >
    <div class="body">

    <div class="container">
    
        <div class="chatbox">
       
            <div class="chatbox__support">
            
                <div class="chatbox__header">
                    
                    <div class="chatbox__content--header">
                        <h4 class="chatbox__heading--header">Chat suporte</h4>
                       
                    </div>
                </div>
                <div class="chatbox__messages">
                
                    <div class="chatbox-mensagens" >
                        <div class="messages__item messages__item--visitor" >
                            Olá, como posso ajudar?
                        </div>
                       
                      
                    </div>
                </div>
                <div class="chatbox__footer"> 
                <form action="#" class="typing-area" method="POST">
                <input classs="idEnviou" style="display:none;" value="<?php echo $idEnviou; ?>">
                <input type="text" name="mensagem" class="input-field" placeholder="Digita aqui..." autocomplete="off">
                <button><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg></button>
                </form>
                </div>
            </div>
           
            <div class="chatbox__button">
                <button></button>
                
                <div class="numMensagensDiv">
                </div>
            </div>
          
        </div>
        
    </div>
</div>
    <script src="chat/assets/js/Chat.js"></script>
    <script src="chat/app.js"></script>
    <script src="chat/chat.js"></script>
</body>
</html>
