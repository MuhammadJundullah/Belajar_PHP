<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Menghitung volume Bola</title>
</head>
<body>

    <h3>2. Hitunglah luas lingkaran dengan jari-jari sebesar 20cm!</h3>
    <h3>Jawab :</h3>
    
    <?php 

        // assignment variabel jari jari dan phi nya
        $r = 20;
       
        // membuat percabangan jika phi habis dibagi 7 maka menggunakan 22/7 jika tidak maka menggunakan 3,14
        if ($r % 7 == 0) {
            $phi = 22/7;
        } else {
            $phi = 3.14;
        }

        // membuat function untuk menghitung luas lingkaran
       function HitungLuasLingkaran($phi, $r) {
        $luas = $phi * $r * $r;
            return($luas);
       }

    // memanggil function untuk menampilkan hasil     
       $luas = hitungLuasLingkaran($phi, $r);

    // mengubah variabel $hasil jadi desimal   
       $hasil = number_format($luas);

    // menampilkan output
       echo "Lingkaran yang memiliki jari jari $r cm memiliki luas $hasil cm2"
    ?>

</body>
</html>