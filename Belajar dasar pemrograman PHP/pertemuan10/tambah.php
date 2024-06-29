<?php 
    require 'functions.php'; // Pastikan file functions.php sudah disertakan dengan benar


    // cek apakah data berhasil atau gagal di tambahkan
    if ( isset($_POST["submit"]) ) { 
        if( tambah($_POST) > 0) {
            echo "
            	<script>
            		alert('Data berhasil ditambahkan');
            		document.location.href = 'index.php';
            	</script>
            ";
        } else {
            echo "<script>
            		alert('Data gagal ditambahkan');
            		document.location.href = 'index.php';
            	</script>
            ";
        }
    }   
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="NRP">NRP : </label>
                <input type="text" name="nrp" id="NRP" required>
            </li>
            <li>
                <label for="Nama">Nama : </label>
                <input type="text" name="nama" id="Nama" required>
            </li>
            <li>
                <label for="Email">Email : </label>
                <input type="text" name="email" id="Email" required>
            </li>
            <li>
                <label for="Jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="Jurusan">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>
