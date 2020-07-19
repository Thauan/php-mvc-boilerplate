<?php

namespace app\Controllers;

use app\Controllers\Controller;
use Application\View\View;

class PainelController extends Controller
{
    public function painel()
    {

        $nome = 'Thauan';
        return View::make('home.hello', ['nome' => $nome]);
    }

    public function home()
    {
        echo 'index Controller';
    }
}
