<?php 

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

?>