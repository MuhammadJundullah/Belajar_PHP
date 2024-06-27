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
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Halaman Daftar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
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
                <h1 class="mb-5 text-secondary">Daftar sebagai Admin</h1>
				<div class="col-4 align-self-center">
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
                    <button type="submit" class="btn btn-primary" name="register">Daftar</button>
                    </form>
				</div>
			</div>
		</div>
	</section>
	<!-- Akhir Register Form -->
</body>
</html>

