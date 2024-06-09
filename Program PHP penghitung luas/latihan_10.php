<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Menghitung volume Bola</title>
</head>
<body>

    <h3>3. Hitunglah volume balok dengan panjang, lebar dan tinggi secara berurut adalah 5m, 3m, 7m !</h3>
    <h3>Jawab :</h3>
    
    <?php 

        // assignment variabel panjang, lebar dan tinggi
        $panjang = 5;
        $lebar = 3;
        $tinggi = 7;

        // membuat function untuk menghitung volume balok
       function volBalok($panjang, $lebar, $tinggi) {
        $v = $panjang * $lebar * $tinggi;
            return($v);
       }

    // memanggil function untuk menampilkan hasil     
       $v = volBalok($panjang, $lebar, $tinggi);

    // menampilkan output
       echo "Balok yang memiliki panjang $panjang m, lebar $lebar m, dan tinggi $tinggi m, memiliki volume $v m3"
    ?>

</body>
</html>