<?php
    $mahasiswa = [
        ["Sayid", 0203001023, "Teknik Informatika", "sayid15@gmail.com"],
        ["Muhammad", 0203001024, "Teknik Informatika", "muhammad15@gmail.com"],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs ):?>
    <ul>
      <li>Nama : <?php echo $mhs[0];?></li>
      <li>NIM : <?php echo $mhs[1];?></li>
      <li>Jurusan : <?php echo $mhs[2];?></li>
      <li>Email : <?php echo $mhs[3];?></li>
    </ul>
    <?php endforeach?>
    </body>
</html>