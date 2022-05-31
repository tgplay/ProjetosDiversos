<?php
class controller{

    public function loadView($viewName){
        require 'views/'.$viewName.'.php';
    }

}