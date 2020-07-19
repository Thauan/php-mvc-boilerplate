<?php

namespace app\Controllers;
use app\Controllers\Controller;
use Application\View\View;

class PainelController extends Controller {
    public function painel() {

        return View::make('hello');
    }

    public function home() {
        echo 'index Controller';
    }
}