// public/js/chat.js
document.getElementById('send-btn').addEventListener('click', function() {
    const userInput = document.getElementById('user-input').value;
    if (userInput.trim() !== '') {
        displayMessage('user', userInput);
        getBotResponse(userInput);
        document.getElementById('user-input').value = '';
    }
});

function displayMessage(sender, message) {
    const chatBox = document.getElementById('chat-box');
    const messageDiv = document.createElement('div');
    messageDiv.className = 'message ' + sender;
    messageDiv.textContent = message;
    chatBox.appendChild(messageDiv);
    chatBox.scrollTop = chatBox.scrollHeight;
}

function getBotResponse(userMessage) {
    // Dummy response generation. You can enhance this to call a backend service.
    const responses = {
        'hi': 'Hello!',
        'how are you': 'I am good, thank you!',
        'bye': 'Goodbye!',
        'default': 'Sorry, I do not understand.'
    };
    const response = responses[userMessage.toLowerCase()] || responses['default'];
    displayMessage('bot', response);
}
