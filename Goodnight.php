<?php
// Variabel untuk pesan dan nama
$nama = "Iska Sayang";
$pesan_pembuka = "Semoga mimpi indah selalu menyertaimu ❤️";
$pesan_spesial = "Untukmu, yang terindah di malam ini. Semoga selalu bahagia! 💕";
$pesan_penutup = "Terima kasih sudah menjadi bagian terindah dalam hidupku.";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Malam, Sayang</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #ff6f61, #de7e7e);
            color: #fff;
            animation: fadeIn 1s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .container {
            text-align: center;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            background-color: rgba(255, 255, 255, 0.1);
            transition: transform 0.3s;
        }

        .container:hover {
            transform: scale(1.02);
        }

        h1 {
            font-size: 3.5rem;
            margin: 0;
            animation: slideIn 0.5s forwards;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        p {
            font-size: 1.5rem;
            margin-top: 1rem;
            animation: fadeIn 0.5s forwards;
        }

        .heart {
            font-size: 6rem;
            margin-top: 20px;
            animation: beat 1s infinite;
        }

        button {
            margin-top: 30px;
            padding: 10px 25px;
            font-size: 1.2rem;
            color: #ff6f61;
            background-color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        button:hover {
            background-color: #ff9a9e;
            transform: translateY(-3px);
        }

        .message {
            display: none;
            opacity: 0;
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
            transform: translateY(20px);
            margin-top: 20px;
        }

        .message.show {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes beat {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Malam, <?php echo $nama; ?></h1>
        <p><?php echo $pesan_pembuka; ?></p>
        <div class="heart">💖</div>
        <button onclick="showMessage()">Lihat Pesan Spesial</button>
        <div class="message" id="message">
            <p><?php echo $pesan_spesial; ?></p>
        </div>
        <p><?php echo $pesan_penutup; ?></p>
    </div>

    <script>
        function showMessage() {
            var message = document.getElementById('message');
            message.classList.toggle('show');
        }
    </script>
</body>
</html>
