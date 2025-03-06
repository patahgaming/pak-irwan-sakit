<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Interface</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .chat-container {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 25%;
            background-color: #e9e9e9;
            padding: 20px;
        }
        .chat-content {
            width: 75%;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .chat-header {
            padding: 20px;
            border-bottom: 1px solid #e9e9e9;
            display: flex;
            align-items: center;
        }
        .chat-header img {
            border-radius: 50%;
            margin-right: 10px;
        }
        .chat-messages {
            padding: 20px;
            flex-grow: 1;
            overflow-y: auto;
        }
        .message {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }
        .message img {
            border-radius: 50%;
            margin-right: 10px;
        }
        .message-content {
            background-color: #f1f1f1;
            padding: 10px 15px;
            border-radius: 10px;
        }
        .message-time {
            font-size: 0.8rem;
            color: #999;
            margin-left: auto;
            
        }
        .chat-footer {
            padding: 20px;
            border-top: 1px solid #e9e9e9;
            display: flex;
            align-items: center;
        }
        .chat-footer input {
            flex-grow: 1;
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 10px 15px;
            margin-right: 10px;
        }
        .chat-footer button {
            background: none;
            border: none;
            color: #007bff;
            font-size: 1.5rem;
        }
        .sidebar .card {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 15px;
            background-color: #fff;
            border-radius: 10px;
            border: none;
        }
        .sidebar .card img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin-right: 10px;
            align-self: flex-start; 
        }
        .sidebar .card .card-body {
            flex-grow: 1;
            padding: 0;
        }
        .sidebar .card .card-body h5 {
            font-size: 1rem;
            margin: 0;
        }
        .sidebar .card .card-body p {
            font-size: 0.9rem;
            color: #999;
            margin: 0;
        }
        .sidebar .card .card-body .btn {
            background: none;
            border: none;
            font-size: 1.2rem;
        }
        .btn-message {
            background-color: #007bff !important;
            color: white;
            font-size: 0.9rem;
            padding: 8px;
            border-radius: 8px;
            width: 100%;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: space-between; /* Memisahkan elemen kiri dan kanan */
            gap: 10px;
        }
        .btn-message .left-content {
            display: flex;
            align-items: center;
            gap: 8px; /* Jarak antara ikon dan teks */
        }
        .btn-message .badge {
            margin-left: auto; /* Geser badge ke kanan */
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <div class="sidebar">
        <a href="javascript:history.back()" class="btn btn-link">
            <i class="fas fa-arrow-left"></i>
        </a>
            <div class="card mt-3">
                <img alt="Profile picture of Dr. Andrew Milton" height="50" 
                     src="https://storage.googleapis.com/a1aa/image/6MskefSVrVJVlZfPsLemvCYSTyL_FfBCAj_olXN7Vv8.jpg" width="50"/>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Dr. Andrew Milton</h5>
                            <p>Cardiologist</p>
                        </div>
                        <button class="btn">
                            <i class="fas fa-phone"></i>
                        </button>
                    </div>
                    <button class="btn btn-message mt-2">
                        <i class="fas fa-comment"></i> Kirim Pesan 
                        <span class="badge bg-light text-dark">2</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="chat-content">
            <div class="chat-header">
                <img alt="Profile picture of Dr. Ironi" height="50" 
                     src="https://storage.googleapis.com/a1aa/image/ViXIZeAE2AWWO8EUxgpnOnF3FaPwV_m0M02C70I26kc.jpg" width="50"/>
                <h5>Dr Ironi</h5>
            </div>
            <div class="chat-messages">
                <div class="text-center text-muted mb-3">14 Oct 2024</div>
                <div class="message">
                    <img alt="Profile picture of Dr. Ironi Samosir" height="40" 
                         src="https://storage.googleapis.com/a1aa/image/5aS2T6K9ch8F7zg0EnyAXtY1buVbkSBq7kfFZYYmTEg.jpg" width="40"/>
                    <div>
                        <div class="message-content">Halo Kak, Apa Keluhannya?</div>
                        <div class="message-time">8:20PM</div>
                    </div>
                </div>
                <div class="message justify-content-end">
                    <div>
                        <div class="message-content">Jika lambung bocor apakah bisa di tambal menggunakan koyo?</div>
                        <div class="message-time">8:25PM</div>
                    </div>
                    <img alt="Profile picture of Rusdimus Kalimus" height="40" 
                         src="https://storage.googleapis.com/a1aa/image/-7rQ7Wq87_heS2vwZqiKalgy8SuULWJ4gqNyuntEBUg.jpg" width="40"/>
                </div>
            </div>
            <div class="chat-footer">
                <input placeholder="Masukkan Pesan" type="text"/>
                <button><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const chatMessages = document.querySelector(".chat-messages");
        const messageInput = document.querySelector(".chat-footer input");
        const sendButton = document.querySelector(".chat-footer button");

        function sendMessage() {
            const messageText = messageInput.value.trim();
            if (messageText === "") return;

            const currentTime = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

            const messageHTML = `
                <div class="message justify-content-end">
                    <div>
                        <div class="message-content">${messageText}</div>
                        <div class="message-time">${currentTime}</div>
                    </div>
                    <img alt="Your Profile" height="40" 
                         src="https://via.placeholder.com/40" width="40"/>
                </div>
            `;

            chatMessages.innerHTML += messageHTML;
            chatMessages.scrollTop = chatMessages.scrollHeight;
            messageInput.value = "";
        }

        sendButton.addEventListener("click", sendMessage);
        messageInput.addEventListener("keypress", function (event) {
            if (event.key === "Enter") {
                event.preventDefault();
                sendMessage();
            }
        });
    });
</script>

</body>
</html>
