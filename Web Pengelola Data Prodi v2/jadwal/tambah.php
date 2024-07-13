<?php 

session_start();

if (!isset($_SESSION['login'])) {
	header("Location: ../login.php");
	exit;
}

require '../function.php';

$table = query("SELECT * FROM Dosen");
$tablee = query("SELECT * FROM MataKuliah");
$tableee = query("SELECT * FROM Kelas");

if( isset($_POST["tombol"])) {
    if( tambahJadwal($_POST) > 0) {
        echo 
        "<script> alert ('Data berhasil ditambahkan!'); document.location.href = 'jadwal.php'; </script>";
    } else {
        echo 
        "<script> alert ('Data gagal ditambahkan!'); document.location.href = 'jadwal.php'; </script>";
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
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent shadow-sm fixed-top">
      <div class="container">
	  <img style="width: 50px; margin-right: 20px" src="../img/unimal.png" alt="logo unimal">
        <a class="navbar-brand" href="tambah.php">Tambah Data Jadwal Perkuliahan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
				<a class="nav-link" href="jadwal.php"><< Kembali</a>
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
				<Form method="post">
					<div class="mb-3">
						<label for="Select" class="form-label">Nama Kelas</label>
						<select id="Select" class="form-select" name=kode_kelas>
						<?php foreach ($tableee as $row) : ?>
							<option><?= $row["nama_kelas"] ?></option>
						<?php endforeach ?>
						</select>
					</div>
					<div class="mb-3">
						<label for="Select" class="form-label">Nama Dosen</label>
						<select id="Select" class="form-select" name=kode_dosen>
						<?php foreach ($table as $row) : ?>
							<option><?= $row["nama_dosen"] ?></option>
						<?php endforeach ?>
						
						</select>
					</div>
					<div class="mb-3">
						<label for="Select" class="form-label">Nama Mata kuliah :</label>
						<select id="Select" class="form-select" name=kode_matakuliah>
						<?php foreach ($tablee as $row) : ?>
							<option><?= $row["nama_matakuliah"] ?></option>
						<?php endforeach ?>

						</select>
					</div>
					<div class="mb-3">
						<label for="Select" class="form-label">Hari :</label>
						<select id="Select" class="form-select" name=hari>
							<option>Senin</option>
							<option>Selasa</option>
							<option>Rabu</option>
							<option>Kamis</option>
							<option>Jumat</option>
							<option>Sabtu</option>
						</select>
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label">Jam Mulai :</label>
						<input type="text" class="form-control" name="jam_mulai" id="nama" placeholder="00:00">
					</div>	
					<div class="mb-3">
						<label for="nama" class="form-label">Jam Selesai :</label>
						<input type="text" class="form-control" name="jam_selesai" id="nama" placeholder="00:00">
					</div>	
					<button type="submit" class="btn btn-success" name="tombol">Tambah</button>
				</Form>
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
