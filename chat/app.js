const chatButton = document.querySelector('.chatbox__button');
const chatContent = document.querySelector('.chatbox__support');
const icons = {
    isClicked: '<img style="vertical-align:middle; width:50px;" src="chat/images/icons/aacLogo.png" />',
    isNotClicked: '<img style="vertical-align:middle; width:50px;" src="chat/images/icons/aacLogo.png" />'
}
const chatbox = new InteractiveChatbox(chatButton, chatContent, icons);
chatbox.display();
chatbox.toggleIcon(false, chatButton);