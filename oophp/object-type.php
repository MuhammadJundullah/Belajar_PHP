<?php

class produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "-", $penulis = "-", $penerbit = "-", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getlable() {
        return  "$this->penulis, $this->penerbit";
    }

}

class CetakInfoProduct {
    public function cetak( $produk ) {
        $str = "{$produk->judul} | {$produk->getlabel()} (Rp {$produk->harga})";
        return $str;
    }
}

$produk1 = new produk("naruto", "masashi kashimoto", "shounen jump", 30000);
$produk2 = new produk("uncharted", "neil druckmann", "sony computer", 250000);


$infoproduk1 = new CetakInfoProduct();
echo $infoproduk1->cetak($produk1);