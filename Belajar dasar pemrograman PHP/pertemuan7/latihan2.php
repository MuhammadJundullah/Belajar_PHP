<?php
if( !isset($_GET["nama"]) || 
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"]) ) {
    header("Location: latihan1.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <style>
        img {
            height : 200px;
        }
    </style>
</head>
<body>

<ul>
    <li><img src="img/<?php echo $_GET["gambar"]?>" alt=""></li>
    <li><?php echo $_GET["nama"]?></li>
    <li><?php echo $_GET["nrp"]?></li>
    <li><?php echo $_GET["email"]?></li>
    <li><?php echo $_GET["jurusan"]?></li>
</ul>

<a href="latihan1.php">kembali ke daftar mahasiswa</a>
    
</body>
</html>