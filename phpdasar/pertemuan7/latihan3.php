<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<?php if(isset($_POST["nama"])) : ?>
    <h1>Halo, Selamat Datang <?php echo $_POST["nama"]; ?></h1>
<?php endif; ?>

<form method="post">
    Masukkan nama :
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim!</button>
</form>
<br>
<a href="latihan3.php">refresh</a>
</body>
</html>