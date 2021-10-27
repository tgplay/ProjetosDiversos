<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class HomeController extends Controller {

    public function index() {
        //puxar a lista com a Model
        $usuarios = Usuario::select()->execute();                     

        //carregar a view
        $this->render('home', [
            'usuarios' => $usuarios
        ]);            
    }    
}