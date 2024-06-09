<?php
$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');
$result = mysqli_query($conn, "SELECT * FROM user");
?>

<!DOCTYPE html>
<head>
    <title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
</head>
<body>

    <h3>Data user</h3>

    <table border="1" cellspacing=0 cellpadding=5>

    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
    </tr>
    <?php $i = 1?>
    <?php while ($row = mysqli_fetch_row($result)) :?>
    <tr>
        <td><?= $i?></td>
        <td><?= $row[1]?></td>
        <td><?= $row[2]?></td>
        <td><?= $row[3]?></td>
    </tr>
    <?php $i++ ?>
    <?php endwhile ?>


</body>
</html>
