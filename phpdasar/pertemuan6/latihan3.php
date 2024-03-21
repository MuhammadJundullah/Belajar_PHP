<?php
// $mahasiswa = [
//     ["Sayid","220170045","Teknik Informatika"],
//     ["Ahmad","220170046","Teknik Industri"],
//     ["Jundullah","220170047","Teknik Mesin"],
// ];

// array associative
// definisinya sama seperti array numerik, tapi indexnya adalah string yg bisa dibuat.

$mahasiswa = [
    [
        "nama" => "Sayid",
        "nrp" => "1020030123",
        "jurusan" => "Teknik Informatika",
        "email" => "sayidmuhammad15@gmail.com",
        "gambar" => "mahel.jpeg"
    ],
    [
        "nama" => "Mahel",
        "nrp" => "12891838941",
        "jurusan" => "Teknik Industri",
        "email" => "Ahmassaed@gmail.com",
        "gambar" => "sayid.PNG"
    ]
];
// echo $mahasiswa[1]["nama"];

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
    <?php foreach($mahasiswa as $mhs):?>
    <ul>
        <li>
            <img height= 200px, src="img/<?php echo $mhs["gambar"]; ?>" >
        </li>
        <li><?php echo $mhs["nama"];?></li>
        <li><?php echo $mhs["nrp"];?></li>
        <li><?php echo $mhs["jurusan"];?></li>
        <li><?php echo $mhs["email"];?></li>
    </ul>
    <?php endforeach?>
</body>
</html>


