<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function view($page = 'home'){

        echo "Essa pagina ".$page;


    }
	
}