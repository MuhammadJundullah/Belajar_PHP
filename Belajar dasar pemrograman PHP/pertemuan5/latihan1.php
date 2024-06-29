<?php
    // array
    // variabel yang dapat menyimpan banyak nilai 
    // elemen pada array boleh memiliki tipe data yang berbeda
    // pasangan antara key dan value
    // keynya adalah index, dimulai dari 0

    // membuat array
    // cara lama
    $hari = array("Senin", "Selasa","Rabu");
    // cara baru 
    $bulan = ["Januari","Februari","Maret"];
    $arr1 = [123, "tulisan", false];

    // menampilkan array
    // var_dump() / print_r()
    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);

    // menampilkan satu elemen pada array
    // echo "<br>"; 
    // echo $arr1[0];
    // echo "<br>";
    // echo $bulan[1];

    // menambahkan elemen pada array
    var_dump($hari);
    $hari[] = "Kamis";
    $hari[] = "Jum'at";
    echo "<br>";
    var_dump($hari);

?>