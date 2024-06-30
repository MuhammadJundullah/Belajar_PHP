<?php 

class contohStatic {
    public static $angka = 1;

    public static function halo() {
        return "Halo " . self::$angka++ . " kali";
    }
}

echo contohStatic::$angka;
echo "<br>";
echo contohStatic::halo();
echo "<br>";
echo contohStatic::halo();
?>