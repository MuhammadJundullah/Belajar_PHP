<?php
require 'function.php';
$table = query("SELECT * FROM mahasiswa");
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
	<h1>Daftar Mahasiswa Kelas A4</h1>

<table border cellpadding="20" cellspacing="0">
	<tr> 
		<th>no</th>
		<th>nim</th>
		<th>nama</th>
		<th>alamat</th>
		<th>email</th>
		<th>photo</th>
		<th>Aksi</th>

	</tr>

<?php $i = 1;?>
<?php foreach ($table as $row) : ?>
	<tr>
		<td><?php echo $i?></td>
		<td><?php echo $row["nim"]?></td>
		<td><?php echo $row["nama"]?></td>
		<td><?php echo $row["alamat"]?></td>
		<td><?php echo $row["email"]?></td>
		<td><img src="img/<?php echo $row["photo"]?>" width="10px"></td> 
		<td>
			<a href="hapus.php?no=<?php echo $row["no"]?>">Hapus</a>|
			<a href="ubah.php?no=<?php echo $row["no"]?>">Ubah</a>
		</td>
		
    </tr>
<?php $i ++;?>
<?php endforeach; ?>
    <tr>
        <p><a href="tambah.php">tambahkan data</a></p>

    </tr>
</table>
</body>
</html>
