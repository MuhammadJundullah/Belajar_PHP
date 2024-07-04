<?php 

session_start();

if (!isset($_SESSION['login'])) {
	header("Location: ../login.php");
	exit;
}

require '../function.php';

$id = $_GET["id"];
$kode = $_GET["kode"];
$nama = $_GET["nama"];
$sks = $_GET["sks"];

if( isset($_POST["tombol"])) {
    if( ubahMatakuliah($id, $_POST) > 0) {
        echo 
        "<script>
        alert ('Data berhasil diubah!');
        document.location.href = 'matakuliah.php';
        </script>";
    } else {
        echo 
        "<script>
        alert ('Data gagal diubah!');
        document.location.href = 'matakuliah.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ubah Data Mahasiswa</title>

    <!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
<link href="../style.css" rel="stylesheet"/>	
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="ubah.php">Ubah Data Mata Kuliah</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="matakuliah.php"><< Kembali</a>
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
					<form method="post">
					<div class="mb-3">
						<label for="kode" class="form-label">Kode Mata Kuliah :</label>
						<input type="text" class="form-control" name="kode" id="kode" value="<?php echo $kode;?>" autofocus>
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label">Nama Mata Kuliah:</label>
						<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama; ?>">
					</div>
					<div class="mb-3">
						<label for="sks" class="form-label">SKS :</label>
						<input type="text" class="form-control" name="sks" id="sks" value="<?php echo $sks; ?>">
					</div>
					<button type="submit" class="btn btn-primary" name="tombol">Ubah</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Akhir Data Mahasiswa -->

  <!-- Footer -->
  <p style="margin-bottom: -1px; padding-top: 2rem" class="text-secondary small text-center">© 2024 Sayid Muhammad Jundullah. All rights reserved.</p>
  <!-- Footer -->

</body>
</html>

