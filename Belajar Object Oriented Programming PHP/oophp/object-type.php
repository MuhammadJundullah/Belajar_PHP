<?php

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

}

class CetakInfoProduct {
    public function cetak( produk $produk ) {
        $str = "{$produk->judul} | {$produk->getlable()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new produk("naruto", "masashi kashimoto", "shounen jump", 30000);
$produk2 = new produk("uncharted", "neil druckmann", "sony computer", 250000);

echo "Komik :". $produk1->getlable();
echo "<br>";
echo "Game :". $produk2->getlable();

$infoproduk1 = new CetakInfoProduct();
echo "<br>";
echo $infoproduk1->cetak($produk1); 