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
<html lang="en">
    <style>
        body {
			text-align: center;
		}
        input {
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
        }
    </style>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>

    <a href="index.php">Tabel Daftar Mahasiswa</a>
    <br></br>

    <form method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="no">no :</label>
                <input type="text" name="no" id="no" >
            </li>
            <li>
                <label for="nim">nim :</label>
                <input type="text" name="nim" id="nim" >
            </li>
            <li>
                <label for="nama">nama :</label>
                <input type="text" name="nama" id="nama" >
            </li>
            <li>
                <label for="alamat">alamat :</label>
                <input type="text" name="alamat" id="alamat" >
            </li>
            <li>
                <label for="email">email :</label>
                <input type="text" name="email" id="email" >
            </li>
            <li>
                <label for="foto">foto :</label>
                <input type="file" name="foto" id="foto" >
            </li>
            <li>
                <button type="submit" name="tombol">Tambah data</button>
            </li>
        </ul>
    </form>

</html>