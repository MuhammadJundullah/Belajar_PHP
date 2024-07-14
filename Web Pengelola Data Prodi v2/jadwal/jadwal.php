<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if (!isset($_SESSION['login'])) {
	header("Location: ../login.php");
	exit;
}

require '../function.php';
$table = query("SELECT 
    Jadwal.id, 
    Kelas.kode_kelas, 
    Dosen.kode_dosen, 
    MataKuliah.kode_matakuliah, 
    Jadwal.hari, 
    Jadwal.jam_mulai, 
    Jadwal.jam_selesai 
FROM 
    Jadwal 
JOIN 
    Kelas ON Jadwal.nama_kelas = Kelas.nama_kelas 
JOIN 
    Dosen ON Jadwal.nama_dosen = Dosen.nama_dosen 
JOIN 
    MataKuliah ON Jadwal.nama_matakuliah = MataKuliah.nama_matakuliah
ORDER BY 
    Jadwal.id ASC");

if( isset($_POST["cari"])) {
    $table = cariJadwal($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Jadwal Perkuliahan</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

<!-- icons -->
<link rel="icon" type="icon/x-icon" href="https://icons8.com/icon/83326/home" />

<!-- My CSS -->
<link rel="stylesheet" href="../style.css"/>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
      <div class="container">
	  <img style="width: 50px; margin-right: 20px" src="../img/unimal.png" alt="unimal">
        <a class="navbar-brand" href="jadwal.php">Daftar Jadwal Perkuliahan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item ms-3">
				<a class="nav-link text-success fw-bold" href="jadwal.php">Jadwal</a>
            </li>
            <li class="nav-item ms-3">
				<a class="nav-link" href="../dosen/dosen.php">Dosen</a>
            </li>
            <li class="nav-item ms-3">
				<a class="nav-link" href="../matakuliah/matakuliah.php">Mata Kuliah</a>
            </li>
            <li class="nav-item ms-3">
				<a class="nav-link" href="../kelas/kelas.php">Kelas</a>
            </li>
            <li class="nav-item ms-3">
				<a class="nav-link" href="../index.php">Mahasiswa</a>
            </li>
            <li class="nav-item">
				<a class="nav-link ms-5" href="../logout.php"><b>Log Out <?= ucfirst($_SESSION["userlogin"]);?></b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

	<!-- Data Mahasiswa -->
	<section class="data_mhs">
		<div class="container">

	<!-- Keterangan -->
	<?php if (isset($_POST["cari"])) : ?>
	<div class="row text-start mb-4">
		<i class="text-secondary">Setelah mencari data untuk mengembalikan seperti semula klik <a href="jadwal.php">url</a> lalu tekan enter.</i>
	</div>
    <?php endif; ?>
	<!-- Keterangan -->

	<div class="row">
		<div class="col-3">

			<!-- Search -->
			<form action="" method="post">
				<div class="input-group mb-3">
					<input type="text" class="form-control" name="keyword" placeholder="Cari Data" autocomplete="off" autofocus>
					<button class="btn btn-success" type="submit" name="cari">Cari</button>
				</div>
			</form>
			<!-- Alkir Search -->

		</div>
	<div class="col text-end">
		<button class="btn btn-success" type="submit">
			<a class="nav-link" href="tambah.php">Tambahkan Data -></a>
		</button>
	</div>
	</div>
		 
		<table class="table table-striped table-hover table-bordered border-light" style="margin-left: 3px;">
			<tr> 
				<th>No</th>
				<th>Kode Kelas</th>
				<th>Kode Dosen</th>
				<th>Kode Mata Kuliah</th>
				<th>Hari</th>
				<th>Jam Mulai</th>
				<th>Jam Selesai</th>
				<th>Aksi</th>
			</tr>

			<?php $i = 1;?>
			<?php foreach ($table as $row) : ?>
				<tr class="align-middle">
					<td><?php echo $i?></td>
					<td><?php echo $row["kode_kelas"]?></td>
					<td><?php echo $row["kode_dosen"]?></td>
					<td><?php echo $row["kode_matakuliah"]?></td>
					<td><?php echo $row["hari"]?></td>
					<td><?php echo $row["jam_mulai"]?></td>
					<td><?php echo $row["jam_selesai"]?></td>
					<td>
						<button type="button" class="btn btn-danger"><a style="text-decoration: none;" href="hapus.php?id=<?php echo $row["id"]?>" class="text-light">Hapus</a></button>
						<button type="button" class="btn btn-success" style="margin-left: 5px;"><a style="text-decoration: none;" href="ubah.php?id=<?php echo $row["id"]?>&kelas=<?php echo $row["kode_kelas"]?>&dosen=<?php echo $row["kode_dosen"]?>&matakuliah=<?php echo $row["kode_matakuliah"]?>&hari=<?php echo $row["hari"]?>&mulai=<?php echo $row["jam_mulai"]?>&selesai=<?php echo $row["jam_selesai"]?>" class="text-light">Ubah</a></button>
					</td>
				</tr>	
			<?php $i ++;?>
			<?php endforeach; ?>
		</table>
		</div>
	</section>
	<!-- Akhir Data Mahasiswa -->

	<!-- Footer -->
	<p style="margin-bottom: -1px; padding-top: 9rem" class="text-dark small text-center">© 2024 Sayid Muhammad Jundullah. All rights reserved.</p>
	<!-- Footer -->

</body>
</html>