<?php

class produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

    public function __construct($judul = "-", $penulis = "-", $penerbit = "-", $harga = "-", $jmlHalaman="-", $waktuMain="-", $tipe = "-") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }
    
    public function getlable() {
        return  "$this->penulis, $this->penerbit";
    }

    public function GetInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getlable()} | Rp. {$this->harga}";
        if ( $this->tipe == "komik") {
            $str .= " | {$this->jmlHalaman} halaman.";
        } else if ( $this->tipe == "game") {
            $str .= " | {$this->waktuMain} jam.";
        }
        return $str;
    }

}

class CetakInfoProduct {
    public function cetak( produk $produk ) {
        $str = "{$produk->judul} | {$produk->getlable()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new produk("naruto", "masashi kashimoto", "shounen jump", 30000, "100", 0, "komik");
$produk2 = new produk("uncharted", "neil druckmann", "sony computer", 250000, 0, "50", "game");

echo $produk1->GetInfoLengkap();