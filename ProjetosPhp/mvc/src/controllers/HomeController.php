<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $this->render('home');
    }

    public function fotos(){
        $this->render('fotos');        
    }

    public function foto($parametros){
        echo "Única foto...";
        print_r($parametros);

    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}