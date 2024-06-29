<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "-", $penulis = "-", $penerbit = "-", $harga = "-") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getlable() {
        return  "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getlable()} | Rp. {$this->harga}";
        return $str;
    }

}

class komik extends produk {
    public $jmlHalaman;

    public function __construct($judul = "-", $penulis = "-", $penerbit = "-", $harga = "-", $jmlHalaman = "-"){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;

    }

    public function getInfoProduk(){
        $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} halaman.";
        return $str;
    }
}

class game extends produk {

    public $waktuMain;

    public function __construct($judul = "-", $penulis = "-", $penerbit = "-", $harga = "-", $waktuMain = "-") {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk(){
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} jam.";
        return $str;
    }
}

class kartu extends produk {
    
    public $jmlKartu;

    public function __construct($judul = "-", $penulis = "-", $penerbit = "-", $harga = "-", $jmlKartu = "-") {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlKartu = $jmlKartu;
    }

    public function getInfoProduk() {
        $str = "Kartu : ". parent::getInfoProduk() ." | {$this->jmlKartu} lembar kartu.";
        return $str;
    }
}

$produk1 = new komik("Naruto", "Masashi Kashimoto", "Shunen Jump", 30000, "100");
$produk2 = new game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, "50");
$produk3 = new kartu("Uno", "Andre Mukinze", "Japan Card", 18000, "50");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();