<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Video Calling Website UI Design</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/class.css">
    </head>
    <body>
        <div class="header">
            <nav>
                <a href="./index.html"><img src="img/Untitled-1.png" class="logo"></a>
                <ul>
                    <li><img src="img/live.png" class="active" ></li>
                    <li><img src="img/video.png"></li>
                    <a href="chat.html" type="returnoff">
                        <li><img src="img/message.png"></li>
                    </a>
                    <a href="texteditor.html">
                    <li><img src="img/notification.png"></li>
                </a>
                    <li><img src="img/users.png"></li>
                    <li><img src="img/setting.png"></li>
                </ul>
            </nav>
            <div class="container">
                <div class="top-icons">
                    <img src="img/search.png">
                    <img src="img/menu.png">
                </div>
                <div class="row">
                    <div class="col-1">
                        <img src="img/1649752358687.gif" class="host-img">
                        <div class="contarols">
                            <img src="img/chat.png">
                            <img src="img/disconnect.png">
                            <img src="img/call.png" class="call-icon">
                            <img src="img/mic.png">
                            <img src="img/cast.png">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="containers">
                            <section class="msger ">
                                <header class="msger-header">
                                  <div class="msger-header-title">
                                    <i class="fas fa-comment-alt"></i> chat
                                  </div>
                                  <div class="msger-header-options">
                                    <span><i class="fas fa-cog"></i></span>
                                  </div>
                                </header>
                              
                                <main class="msger-chat">
                                  <div class="msg left-msg">
                                    <div
                                     class="msg-img"
                                     style="background-image: url(./img/young-man-avatar-character-vector-illustration-design_24877-18517.avif)"
                                    ></div>
                              
                                    <div class="msg-bubble">
                                      <div class="msg-info">
                                        <div class="msg-info-name">BOT</div>
                                        <div class="msg-info-time">12:45</div>
                                      </div>
                              
                                      <div class="msg-text">
                                        Hi, welcome to SimpleChat! Go ahead and send me a message. 😄
                                      </div>
                                    </div>
                                  </div>
                              
                                  <div class="msg right-msg">
                                    <div
                                     class="msg-img"
                                     style="background-image: url(./img/young-man-avatar-character-icon-free-vector.jpg)"
                                    ></div>
                              
                                    <div class="msg-bubble">
                                      <div class="msg-info">
                                        <div class="msg-info-name">user</div>
                                        <div class="msg-info-time">12:46</div>
                                      </div>
                                    </div>
                                  </div>
                                </main>
                              
                                <form class="msger-inputarea">
                                  <input type="text" class="msger-input" placeholder="Enter your message...">
                                  <button type="submit" class="msger-send-btn">Send</button>
                                </form>
                              </section>
                              <script>
                                        const msgerForm = get(".msger-inputarea");
                                        const msgerInput = get(".msger-input");
                                        const msgerChat = get(".msger-chat");
                        
                                        const BOT_MSGS = [
                                        "Hi, how are you?",
                                        "Ohh... I can't understand what you trying to say. Sorry!",
                                        "I like to play games... But I don't know how to play!",
                                        "Sorry if my answers are not relevant. :))",
                                        "I feel sleepy! :("
                                        ];
                        
                                        // Icons made by Freepik from www.flaticon.com
                                        const BOT_IMG = "https://image.flaticon.com/icons/svg/327/327779.svg";
                                        const PERSON_IMG = "https://image.flaticon.com/icons/svg/145/145867.svg";
                                        const BOT_NAME = "support";
                                        const PERSON_NAME = "user";
                        
                                        msgerForm.addEventListener("submit", event => {
                                        event.preventDefault();
                        
                                        const msgText = msgerInput.value;
                                        if (!msgText) return;
                        
                                        appendMessage(PERSON_NAME, PERSON_IMG, "right", msgText);
                                        msgerInput.value = "";
                        
                                        botResponse();
                                        });
                        
                                        function appendMessage(name, img, side, text) {
                                        //   Simple solution for small apps
                                        const msgHTML = `
                                            <div class="msg ${side}-msg">
                                            <div class="msg-img" style="background-image: url(${img})"></div>
                        
                                            <div class="msg-bubble">
                                                <div class="msg-info">
                                                <div class="msg-info-name">${name}</div>
                                                <div class="msg-info-time">${formatDate(new Date())}</div>
                                                </div>
                        
                                                <div class="msg-text">${text}</div>
                                            </div>
                                            </div>
                                        `;
                        
                                        msgerChat.insertAdjacentHTML("beforeend", msgHTML);
                                        msgerChat.scrollTop += 500;
                                        }
                        
                                        function botResponse() {
                                        const r = random(0, BOT_MSGS.length - 1);
                                        const msgText = BOT_MSGS[r];
                                        const delay = msgText.split(" ").length * 100;
                        
                                        setTimeout(() => {
                                            appendMessage(BOT_NAME, BOT_IMG, "left", msgText);
                                        }, delay);
                                        }
                        
                                        // Utils
                                        function get(selector, root = document) {
                                        return root.querySelector(selector);
                                        }
                        
                                        function formatDate(date) {
                                        const h = "0" + date.getHours();
                                        const m = "0" + date.getMinutes();
                        
                                        return `${h.slice(-2)}:${m.slice(-2)}`;
                                        }
                        
                                        function random(min, max) {
                                        return Math.floor(Math.random() * (max - min) + min);
                                        }
                        
                              </script>
                        </div>
                        <div class="invite">
                            <p>Invite More People</p>
                            <div>
                                <img src="img/user-1.png">
                                <img src="img/user-2.png">
                                <img src="img/user-3.png">
                                <img src="img/user-4.png">
                                <img src="img/user-5.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>