<?php
	require 'functions.php';
	$mahasiswa = query("SELECT * FROM mahasiswa");	
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
	<style type="text/css">
		body {
			background-color: lightgreen;
		}
		img {
			width : 100px;
		}
		body {
			text-align: center;
		}
		th {
			background-color: green;
		}
		table {
			background-color: silver;
			margin-left: 200px;
		}
	</style>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<a href="tambah.php">Tambah Mahasiswa</a>
	<br><br>

<table border cellpadding="20" cellspacing="0">
	<tr> 
		<th>No</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>
<?php $i = 1; ?>
<?php foreach ( $mahasiswa as $row ) : ?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><a href="">Ubah</a> | <a href="">Hapus</a></td>
		<td><img src="img/<?php echo $row["gambar"] ?>"></td> 
		<td><?php echo $row["nrp"]?></td>
		<td><?php echo $row["nama"]?></td>
		<td><?php echo $row["email"]?></td>
		<td><?php echo $row["jurusan"]?></td>
	</tr>
	<?php $i++; ?>
<?php endforeach; ?>

</table>

</body>
</html>