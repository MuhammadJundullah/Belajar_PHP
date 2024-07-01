<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Controller {
    public function view($view, $data = []) {
        require_once '../app/views/'. $view .'.php';
    }
}