<?php
namespace src\controllers;

use \core\Controller;

class ErrorController extends Controller {

    public function index() {
        echo "Deu erro";
        //$this->render('404');
    }

}