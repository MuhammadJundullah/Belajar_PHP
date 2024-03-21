<?php
// superglobals
// variabel global milik PHP
// merupakan array associative

$mahasiswa = [
    [
        "nama" => "Sayid Muhammad Jundullah",
        "nrp" => "1020030123",
        "jurusan" => "Teknik Informatika",
        "email" => "sayidmuhammad15@gmail.com",
        "gambar" => "sayid.PNG"
    ],
    [
        "nama" => "Mohammad Radenis Stevano Mahelbe",
        "nrp" => "12891838941",
        "jurusan" => "Teknik Industri",
        "email" => "Ahmassaed@gmail.com",
        "gambar" => "mahel.jpeg"
    ]
    
];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        img {
            height: 200px;
        }
    </style>
</head>
<body>
    <h1>Data Mahasiswa</h1>
        <?php foreach( $mahasiswa as $mhs ):?>        
            <ul>
                <li>
                    <a href="latihan2.php?nama=<?php echo $mhs["nama"];?>&gambar=<?php echo $mhs["gambar"];?>&nrp=<?php echo $mhs["nrp"];?>&email=<?php echo $mhs["email"];?>&jurusan=<?php echo $mhs["jurusan"];?>"><?php echo $mhs["nama"];?></a>
                </li>
            </ul>
        <?php endforeach;?>
</body>
</html>