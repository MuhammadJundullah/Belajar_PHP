<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';
// require_once 'Service/User.php';

// function autoload($class) {
//     return require_once 'Produk/'. $class .'.php';
// }
// autoload('InfoProduk');
// autoload('Produk');
// autoload('Komik');
// autoload('Game');
// autoload('CetakInfoProduk');

spl_autoload_register(
    function($class) {
        require_once 'Produk/'. $class .'.php';
});

spl_autoload_register(
    function($class) {
        require_once 'Service/'. $class .'.php';
});

?>