<?php

session_start();

if (!isset($_SESSION['login'])) {
	header("Location: ../login.php");
	exit;
}

require '../function.php';
$table = query("SELECT * FROM Kelas");

if( isset($_POST["cari"])) {
    $table = carikelas($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Kelas</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

<!-- icons -->
<link rel="icon" type="icon/x-icon" href="https://icons8.com/icon/83326/home" />

<!-- My CSS -->
<link rel="stylesheet" href="../style.css" />

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Daftar Kelas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
		  	<li class="nav-item ms-3">
				<a class="nav-link" href="../jadwal/jadwal.php">Jadwal</a>
            </li>
            <li class="nav-item ms-3">
				<a class="nav-link" href="../dosen/dosen.php">Dosen</a>
            </li>
            <li class="nav-item ms-3">
				<a class="nav-link" href="../matakuliah/matakuliah.php">Mata Kuliah</a>
            </li>
            <li class="nav-item ms-3">
				<a class="nav-link text-primary fw-bold" href="kelas.php">Kelas</a>
            </li>
            <li class="nav-item ms-3">
				<a class="nav-link" href="../index.php">Mahasiswa</a>
            </li>
            <li class="nav-item">
				<a class="nav-link ms-5" href="../logout.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

	<!-- Data Mahasiswa -->
	<section class="data_mhs">
		<div class="container">

	<div class="row">
		<div class="col-3">

			<!-- Search -->
			<form action="" method="post">
				<div class="input-group mb-3">
					<input type="text" class="form-control" name="keyword" placeholder="Cari Data" autocomplete="off" autofocus>
					<button class="btn btn-primary" type="submit" name="cari">Cari</button>
				</div>
			</form>
			<!-- Alkir Search -->

		</div>
	<div class="col text-end">
		<button class="btn btn-primary" type="submit" name="cari">
			<a class="nav-link" href="tambah.php">Tambahkan Data >></a>
		</button>
	</div>
	</div>
		 
		<table class="table table-striped-columns" style="margin-left: 3px;">
			<tr> 
				<th>No</th>
				<th>Kode Kelas</th>
				<th>Nama Kelas</th>
				<th>Aksi</th>
			</tr>

			<?php $i = 1;?>
			<?php foreach ($table as $row) : ?>
				<tr class="align-middle">
					<td><?php echo $i?></td>
					<td><?php echo $row["kode_kelas"]?></td>
					<td><?php echo $row["nama_kelas"]?></td>
					<td>
						<button type="button" class="btn btn-secondary"><a style="text-decoration: none;" href="hapus.php?id=<?php echo $row["id"]?>" class="text-light">Hapus</a></button>
						<button type="button" class="btn btn-primary" style="margin-left: 5px;"><a style="text-decoration: none;" href="ubah.php?id=<?php echo $row["id"]?>&kode=<?php echo $row["kode_kelas"]?>&nama=<?php echo $row["nama_kelas"]?>" class="text-light">Ubah</a></button>
					</td>
				</tr>
			<?php $i ++;?>
			<?php endforeach; ?>
		</table>
		</div>
	</section>
	<!-- Akhir Data Mahasiswa -->

	<!-- Footer -->
	<p style="margin-bottom: -1px; padding-top: 9rem" class="text-secondary small text-center">© 2024 Sayid Muhammad Jundullah. All rights reserved.</p>
	<!-- Footer -->

</body>
</html>