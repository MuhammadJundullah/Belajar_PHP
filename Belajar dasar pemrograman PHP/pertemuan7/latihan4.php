<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<?php if( !isset($_POST["nama"]) ) { 
        header("Location: latihan3.php");
        exit;
 } ?>

<a href="latihan3.php">kembali ke form</a>
</body>
</html>



