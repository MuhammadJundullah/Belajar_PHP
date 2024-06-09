<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Menghitung volume Bola</title>
</head>
<body>

    <h3>1. Hitunglah volume Bola dengan jari-jari sebesar 15cm !</h3>
    <h3>Jawab :</h3>
    
    <?php 

        // assignment variabel jari jari dan phi nya
        $r = 15;

        // membuat percabangan jika phi habis dibagi 7 maka menggunakan 22/7 jika tidak maka menggunakan 3,14
        if ($r % 7 == 0 ) {
            $phi = 22/7; 
        } else {
            $phi = 3.14;
        }  

        // membuat function untuk menghitung volume bola
       function hitungVolumeBola($phi, $r) {
        $volume = 4/3 * $phi * $r * $r * $r;
            return($volume);
       }

    // memanggil function untuk menampilkan hasil     
       $volume = hitungVolumeBola($phi, $r);

    // mengubah variabel $hasil jadi desimal agar sesuai.   
       $hasil = number_format($volume);

    // menampilkan output
       echo "Bola yang memiliki jari jari $r cm memiliki volume $hasil cm3"
    ?>

</body>
</html>