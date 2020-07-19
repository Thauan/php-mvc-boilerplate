<?php

namespace app\Controllers;
use app\Controllers\Controller;

class PainelController extends Controller {

    public function __construct($router)
    {
        $this->router = $router;
    }

    public function painel(): void {
       echo 'Painel Controller method index';
    }

    public function home(): void
    {
        echo 'Painel index';
    }
}