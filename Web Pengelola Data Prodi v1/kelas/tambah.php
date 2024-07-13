<?php 

session_start();

if (!isset($_SESSION['login'])) {
	header("Location: ../login.php");
	exit;
}

require '../function.php';

if( isset($_POST["tombol"])) {
    if( tambahKelas($_POST) > 0) {
        echo 
        "<script> alert ('Data berhasil ditambahkan!'); document.location.href = 'kelas.php'; </script>";
    } else {
        echo 
        "<script> alert ('Data gagal ditambahkan!'); document.location.href = 'kelas.php'; </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Data kelas</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
<link href="../style.css" rel="stylesheet"/>	

</head>

<body class="bg-success-subtle">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
      <div class="container">
	  <img style="width: 50px; margin-right: 20px" src="../img/unimal.png" alt="logo unimal">
        <a class="navbar-brand" href="#">Tambah Data Kelas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
				<a class="nav-link" href="kelas.php"><< Kembali</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

	<!-- Tambah Data Mahasiswa -->
	<section class="data_mhs">
		<div class="container mt-5 pt-5">
			<div class="row justify-content-center">
				<div class="col-4 align-self-center">
				<form method="post">
					<div class="mb-3">
						<label for="kode" class="form-label text-dark">Kode Kelas :</label>
						<input type="text" class="form-control" name="kode" id="kode"autofocus >
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label text-dark">Nama Kelas :</label>
						<input type="text" class="form-control" name="nama" id="nama">
					</div>	
					<button type="submit" class="btn btn-success" name="tombol">Tambah</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Akhir Data Mahasiswa -->

	<!-- Footer -->
	<p style="margin-bottom: -1px; padding-top: 21rem" class="text-secondary small text-center">© 2024 Sayid Muhammad Jundullah. All rights reserved.</p>
	<!-- Footer -->

</body>
</html>
