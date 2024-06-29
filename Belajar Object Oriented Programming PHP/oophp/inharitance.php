<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain;

    public function __construct($judul = "-", $penulis = "-", $penerbit = "-", $harga = "-", $jmlHalaman="-", $waktuMain="-") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }
    
    public function getlable() {
        return  "$this->penulis, $this->penerbit";
    }

    public function GetInfoProduk() {
        $str = "{$this->judul} | {$this->getlable()} | Rp. {$this->harga}";
        return $str;
    }

}

class komik extends produk {
    public function GetInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getlable()} | Rp. {$this->harga} - {$this->jmlHalaman} halaman.";
        return $str;
    }
}

class game extends produk {
    public function GetInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getlable()} | Rp. {$this->harga} ~ {$this->waktuMain} jam.";
        return $str;
    }
}

$produk1 = new komik("Naruto", "Masashi Kashimoto", "Shunen Jump", 30000, "100");
$produk2 = new game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, "0", "50");

echo $produk1->GetInfoProduk();
echo "<br>";
echo $produk2->GetInfoProduk();