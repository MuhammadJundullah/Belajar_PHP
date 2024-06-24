<?php 
require 'function.php';

if( isset($_POST["tombol"])) {
    if( tambah($_POST, $_FILES) > 0) {
        echo 
        "<script>
        alert ('Data berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo 
        "<script>
        alert ('Data gagal ditambahkan!');
        document.location.href = 'index.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Data</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
<link href="style.css" rel="stylesheet"/>	

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Tambah Data Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
				<a class="nav-link" href="index.php"><< Kembali</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

	<!-- Tambah Data Mahasiswa -->
	<section class="data_mhs">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-4 align-self-center">
					<form method="post" enctype="multipart/form-data">
					<div class="mb-3">
						<label for="no" class="form-label">Nomor :</label>
						<input type="text" class="form-control" name="no" id="no">
					</div>
					<div class="mb-3">
						<label for="nim" class="form-label">NIM :</label>
						<input type="text" class="form-control" name="nim" id="nim">
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label">Nama :</label>
						<input type="text" class="form-control" name="nama" id="nama">
					</div>
					<div class="mb-3">
						<label for="alamat" class="form-label">Alamat :</label>
						<input type="text" class="form-control" name="alamat" id="alamat">
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email :</label>
						<input type="text" class="form-control" name="email" id="email">
					</div>
					<div class="mb-3">
						<label for="foto" class="form-label">Upload Foto Mahasiswa :</label>
						<input type="file" class="form-control" name="foto" id="foto">
					</div>
					<button type="submit" class="btn btn-primary" name="tombol">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Akhir Data Mahasiswa -->
</body>
</html>
