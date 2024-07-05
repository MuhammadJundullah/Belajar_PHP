<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseURL();

        // Memeriksa apakah URL ada dan tidak null
        if ($url !== null && file_exists("../app/controllers/". $url[0] .".php")) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        // Memuat file controller
        require_once '../app/controllers/'. $this->controller .".php";
        $this->controller = new $this->controller;

        // Memeriksa apakah method yang dimaksud ada dalam controller
        if ($url !== null && isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Mengambil parameter yang ada
        if ($url !== null && !empty($url)) {
            $this->params = array_values($url);
        }

        // Menjalankan controller, method, serta mengirimkan parameter jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    // Method untuk memparse URL
    public function parseURL() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        return null;
    }
}
