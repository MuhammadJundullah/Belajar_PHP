<?php 
session_start();

require 'function.php';

if (isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {
    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if ($key === hash("sha256", $row["username"])) {
        $_SESSION["login"] = true;
    }
}

if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST['masuk'])) {
    $username = $_POST['username'];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            if (isset($_POST["remember"])) {
                setcookie("id", $row["id"], time() + 3600);
                setcookie("key", hash("sha256", $row["username"]), time() + 3600);
            }

            $_SESSION['login'] = true;
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Pengelolaan Data Perkuliahan</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="style.css" rel="stylesheet"/>    
    <style>
        body {
            background-image: url('img/bgunimal.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
    
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: inherit;
            background-size: inherit;
            background-repeat: inherit;
            background-attachment: inherit;
            background-position: inherit;
            filter: grayscale(30%);
            z-index: -1;
        }
    </style>
</head>

<body class="bg-light">
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
      <div class="container">
      <img style="width: 50px; margin-right: 20px" src="img/unimal.png" alt="logo unimal">
        <a class="navbar-brand" href="login.php">Website Pengelola Data Prodi Teknik Informatika</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="registrasi.php">Daftar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Login Form -->
    <section class="mt-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="mt-5 shadow-lg card blur" style="width: 55rem; height: 30rem;">
                    <h1 id="typing-text" class="mb-5 mt-5 text-dark"></h1>
                    <div class="col-4 align-self-center">
                        <?php if (isset($error)) : ?>
                            <p style="color: red; font-style: italic;">Username atau Password tidak sesuai!</p>    
                        <?php endif; ?>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username :</label>
                                <input type="username" class="form-control" id="username" name="username" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password :</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mb-3 form-check d-flex align-items-center">
                                <input type="checkbox" class="form-check-input me-2" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Ingat Saya</label>
                            </div>
                            <button type="submit" class="btn btn-success" name="masuk">Masuk</button>
                        </form>
                    </div>
                    <a class="mt-5 pt-2 text-start" href="https://github.com/MuhammadJundullah/Belajar_PHP/tree/main/Web%20Pengelola%20Data%20Prodi" target="_blank">Source Code</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Login Form -->

    <!-- Footer -->
    <p style="margin-bottom: -1px; padding-top: 10rem" class="text-dark small text-center">© 2024 Sayid Muhammad Jundullah. All rights reserved.</p>
    <!-- Footer -->

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.classList.add('animate__animated', 'animate__fadeIn');
        });
    });
    </script>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                card.classList.add('animate__animated', 'animate__fadeIn');
            });

            const text = "Masuk Sebagai Pengelola Data";
            const typingTextElement = document.getElementById("typing-text");
            let index = 0;

            function type() {
                if (index < text.length) {
                    typingTextElement.textContent += text.charAt(index);
                    index++;
                    setTimeout(type, 100); // Kecepatan mengetik (100ms)
                } else {
                    typingTextElement.innerHTML += '<span class="blink-caret"></span>';
                }
            }

            type();
        });
    </script>
    <!-- Akhir JavaScript -->
</body>
</html>
