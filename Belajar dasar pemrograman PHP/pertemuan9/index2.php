<?php

	// koneksi ke database
	$conn = mysqli_connect("localhost", "root", "", "phpdasar");

	// ambil/query table mahasiswa
	$table = mysqli_query($conn, "SELECT * FROM mahasiswa");
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
	<style type="text/css">
		img {
			width : 100px;
		}
		body {
			text-align: center;
		}
		th {
			background-color: skyblue;
		}
		table {
			margin-left: 200px;
		}
	</style>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

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
<?php while ($row = mysqli_fetch_assoc($table) ) : ?>
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
<?php endwhile; ?>

</table>

</body>
</html>