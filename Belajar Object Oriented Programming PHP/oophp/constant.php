<?php 

// define('NAMA', "Sayid Muhammad Jundullah");
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// const NAMA = "Sayid J";
// echo NAMA;

class Coba {
    public function anjay() {
        echo __CLASS__;
    }
}

$coba = new Coba();
$coba->anjay();

function anjay() {
    echo __FUNCTION__;
}

echo "<br>";

echo anjay();

?>