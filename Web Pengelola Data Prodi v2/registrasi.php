<?php 

session_start();

if (isset($_SESSION['login'])) {
	header("Location: index.php");
	exit;
}

require 'function.php';

if ( isset($_POST['register']) ) {
    if ( registrasi($_POST) > 0 ) {
        echo "<script> alert ('Registrasi Berhasil !'); document.location.href = 'index.php'; </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pengelolaan Data Mahasiswa</title>

    <!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
<link href="style.css" rel="stylesheet"/>	
<style>
        body {
            position: relative;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('img/bgunimal.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            opacity: 0.09;
            z-index: -1; 
        }

    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
      <div class="container">
      <img style="width: 50px; margin-right: 20px" src="img/unimal.png" alt="unimal">
        <a class="navbar-brand" href="registrasi.php">Website Pengelola Data Prodi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="login.php"><b>Login</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

	<!-- Register Form -->
	<section class="mt-5 pt-5">
		<div class="container">
			<div class="row justify-content-center">
            <div class="mt-5 card blur" style="width: 55rem; height: 35rem;">
            <h1 id="typing-text" class="mb-5 mt-5 text-dark"></h1>
				<div class="col-5 align-self-center">
                <form actions="" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username :</label>
                        <input type="username" class="form-control" id="username" name="username" autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password :</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password2" class="form-label">Konfirmasi Password :</label>
                        <input type="password" class="form-control" id="password2" name="password2">
                    </div>
                    <button type="submit" class="btn btn-success" name="register">Daftar</button>
                    </form>
				</div>
                </div>
			</div>
		</div>
	</section>
	<!-- Akhir Register Form -->

    <!-- Footer -->
    <p style="margin-bottom: -1px; padding-top: 5rem" class="text-dark small text-center">© 2024 Sayid Muhammad Jundullah. All rights reserved.</p>
    <!-- Footer -->

        <!-- JavaScript -->
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                card.classList.add('animate__animated', 'animate__fadeIn');
            });

            const text = "Daftar Sebagai Pengelola Data";
            const typingTextElement = document.getElementById("typing-text");
            let index = 0;

            function type() {
                if (index < text.length) {
                    typingTextElement.textContent += text.charAt(index);
                    index++;
                    setTimeout(type, 100);
                } else {
                    typingTextElement.innerHTML += '<span class="blink-caret"></span>';
                }
            }

            type();
        });
        </script>

</body>
</html>

