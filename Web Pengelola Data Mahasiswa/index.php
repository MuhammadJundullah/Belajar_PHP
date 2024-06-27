<?php

session_start();

if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

require 'function.php';
$table = query("SELECT * FROM mahasiswa");

if( isset($_POST["cari"])) {
    $table = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Data Mahasiswa Unimal</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

<!-- icons -->
<link rel="icon" type="icon/x-icon" href="https://icons8.com/icon/83326/home" />

<!-- My CSS -->
<link rel="stylesheet" href="style.css" />

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Daftar Data Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
				<a class="nav-link" href="tambah.php">Tambahkan Data >></a>
            </li>
            <li class="nav-item">
				<a class="nav-link ms-5" href="logout.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

	<!-- Data Mahasiswa -->
	<section class="data_mhs">
		<div class="container">

		<!-- Search -->
		<form action="" method="post">
			<div class="col-3">
				<div class="input-group mb-3">
					<input type="text" class="form-control" name="keyword" placeholder="Cari Data" autocomplete="off" autofocus>
					<button class="btn btn-primary" type="submit" name="cari">Cari</button>
				</div>
			</div>
		</form>
		<!-- Alkir Search -->
		 
		<table class="table table-striped-columns">
			<tr> 
				<th>No</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Email</th>
				<th>Foto</th>
				<th>Aksi</th>
			</tr>

			<?php $i = 1;?>
			<?php foreach ($table as $row) : ?>
				<tr class="align-middle">
					<td><?php echo $i?></td>
					<td><?php echo $row["nim"]?></td>
					<td><?php echo $row["nama"]?></td>
					<td><?php echo $row["alamat"]?></td>
					<td><?php echo $row["email"]?></td>
					<td><img src="img/<?php echo $row["photo"]?>" class="rounded"></td> 
					<td>
						<button type="button" class="btn btn-secondary"><a style="text-decoration:none;" href="hapus.php?no=<?php echo $row["no"]?>" class="text-light">Hapus</a></button>
						<button type="button" class="btn btn-primary"><a style="text-decoration:none;" href="ubah.php?no=<?php echo $row["no"]?>&nim=<?php echo $row["nim"]?>&nama=<?php echo $row["nama"]?>&alamat=<?php echo $row["alamat"]?>&email=<?php echo $row["email"]?>&foto=<?php echo $row["photo"]?>" class="text-light">Ubah</a></button>
					</td>
				</tr>
			<?php $i ++;?>
			<?php endforeach; ?>
		</table>
		</div>
	</section>
	<!-- Akhir Data Mahasiswa -->
	 
	<!-- Social Media -->
	<a class="sosmed" href="https://github.com/MuhammadJundullah/Belajar_PHP/tree/main/Web%20Pengelola%20Data%20Mahasiswa" target="_blank">
    <img src="img/github.svg" alt="github" class="github-icon">
    <span class="github-text">Source Code</span>
	</a>
	<!-- Akhir Social Media -->

	<!-- Footer -->
	<p style="margin-bottom: -1px; padding-top: 1rem" class="text-secondary small text-center">© 2024 Ahmad. All right reserved</p>
	<!-- Footer -->

</body>
</html>