<?php
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    $query = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   while ($row = mysqli_fetch_row($query)) :
?>
<table border=1 cellpadding=5>
    <tr>
        <td><?=$row[0]?></td>
        <td><?=$row[1]?></td>
        <td><?=$row[2]?></td>
        <td><?=$row[3]?></td>
        <td><?=$row[4]?></td>
        <td><?=$row[5]?></td>
    </tr>
</table>
<?php endwhile ?>

    
</body>
</html>