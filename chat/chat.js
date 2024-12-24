const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chatbox-mensagens"),
numMensagens = document.querySelector(".numMensagensDiv");

form.onsubmit = (e)=>{
    e.preventDefault(); 
}

sendBtn.onclick =() => {
    // Ajax
    numMensagens.value= "";   
let xhr = new XMLHttpRequest();  //creating XML object
xhr.open("POST", "chat/enviarMensagem.php", true);

xhr.onload = () =>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            inputField.value= "";  //quando inserido na base de dados apaga do input
        }
    }
}

// temos que enviar os dados do form de ajax para php
let formData =new FormData(form); //criar um novo form data objeto
xhr.send(formData); //enviando para php

}

setInterval(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "chat/chamarChat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            chatBox.innerHTML = data;
          }
      }
    }

    
    // temos que enviar os dados do form de ajax para php
    let formData =new FormData(form); //criar um novo form data objeto
    xhr.send(formData); //enviando para php
   
  }, 500);

  setInterval(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "chat/numMensagens.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            numMensagens.innerHTML = data;
          }
      }
    }

    
    // temos que enviar os dados do form de ajax para php
    let formData =new FormData(form); //criar um novo form data objeto
    xhr.send(formData); //enviando para php
   
  }, 500);

 
  