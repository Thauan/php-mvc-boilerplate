<?php

namespace app\Controllers;

use app\Controllers\Controller;
use Application\View\View;

class PainelController extends Controller
{
    public function painel()
    {

        $nome = 'Thauan';
        return View::make('painel.index', ['nome' => $nome]);
    }

    public function home()
    {
        $nome = 'Thauan';
        return View::make('home.index', ['nome' => $nome]);
    }
}
