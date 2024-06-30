<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

interface InfoProduk {
    public function getInfoProduk();
}

abstract class Produk {
    protected $judul, $penulis, $penerbit, $harga, $diskon = 0;

    public function __construct($judul = "-", $penulis = "-", $penerbit = "-", $harga = "-") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getLabel() {
        return  "$this->penulis, $this->penerbit";
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100 );
    }
    
    abstract public function getInfo();

}

class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct($judul = "-", $penulis = "-", $penerbit = "-", $harga = "-", $jmlHalaman = "-"){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk(){
        $str = "Komik : ". $this->getInfo() ." | Jumlah {$this->jmlHalaman} halaman.";
        return $str;
    }
}

class Game extends Produk implements InfoProduk {
    public $waktuMain;

    public function __construct($judul = "-", $penulis = "-", $penerbit = "-", $harga = "-", $waktuMain = "-") {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} | (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk(){
        $str = "Game : ". $this->getInfo() ." | Waktu main ~ {$this->waktuMain} jam.";
        return $str;
    }
}

class CetakInfoProduk{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk) {
        $this->daftarProduk[] = $produk; 
    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        foreach( $this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk;
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

?>
