const sendChatBtn = document.querySelector(".chat-input span");
const chatInput = document.querySelector(".chat-input textarea");
const chatbox = document.querySelector(".chatbox");
const chatbotToggle = document.querySelector(".chatbot-toggle");
const close = document.querySelector(".close");

let userMessage;
const API_KEY = "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";

const generateResponse = (incomingChatLi) => {
    const API_URL = "https://api.openai.com/v1/chat/completions";
    const messageElement = incomingChatLi.querySelector("p");
    const requestOptions = {
        method: "POST",
        headers: {
            "Content-type": "application/json",
            "Authorization": `Bearer ${API_KEY}`
        },
        body: JSON.stringify({
            model: "gpt-3.5-turbo",
            messages: [{role: "user", content: userMessage}]
        })
    }
    fetch(API_URL, requestOptions).then(res => res.json()).then(data => {
        // console.log(data);
        messageElement.textContent = data.choices[0].message.content;
    }).catch((error => {
        messageElement.classList.add("error");
        messageElement.textContent = "Oops! Something went wrong. Please try again.";
        // console.log(error);
    })).finally(()=> chatbox.scrollTo(0, chatbox.scrollHeight));
}

const creatChatLi = (message, className) => {
    const chatLi = document.createElement("li");
    chatLi.classList.add("chat", className);
    let chatContent = className === "outgoing" ? `<p>${message}</p>`: `<span class="material-symbols-outlined">smart_toy</span> <p>${message}</p>`;
    chatLi.innerHTML = chatContent;
    return chatLi;
}

const handleChat = () => {
    userMessage = chatInput.value.trim();
    if(!userMessage) return;
    chatbox.appendChild(creatChatLi(userMessage, "outgoing"));
    chatbox.scrollTo(0, chatbox.scrollHeight);
    chatInput.value= "";
    chatInput.style.height = `${chatInput.scrollHeight}px`;

    setTimeout(() =>{
        const incomingChatLi = creatChatLi("Thinking...", "incoming");
        chatbox.appendChild(incomingChatLi);
        chatbox.scrollTo(0, chatbox.scrollHeight);
        generateResponse(incomingChatLi);
    }, 600);
}
sendChatBtn.addEventListener("click", handleChat);

chatbotToggle.addEventListener("click", ()=> document.body.classList.toggle("show-chatbox"));
close.addEventListener("click", ()=> document.body.classList.remove("show-chatbox"));
chatInput.addEventListener("input", () => {
    chatInput.style.height = `${chatInput.scrollHeight}px`;
    chatInput.style.height = `${chatInput.scrollHeight}px`;
})
chatInput.addEventListener("keydown", (e) => {
    if(e.key === "Enter" && !e.shiftkey && window.innerWidth > 800){
        e.preventDefault();
        handleChat();
    }
})