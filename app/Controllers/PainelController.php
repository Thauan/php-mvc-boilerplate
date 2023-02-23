<?php

namespace app\Controllers;

use app\Controllers\Controller;
use Application\View\View;
use Database\DB;

class PainelController extends Controller
{
    public function painel()
    {

        $db = new DB();
        $users = $db->select("SELECT * FROM users");
        $nome = 'Thauan2';

        return View::make('painel.index', ['nome' => $nome, 'users' => $users]);
    }

    public function home()
    {
        $db = new DB();
        $users = $db->select("SELECT * FROM users");
        $nome = 'Thauan2';

        return View::make('home.index', ['nome' => $nome, 'users' => $users]);
    }
}
