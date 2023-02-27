<?php

namespace app\Controllers;

use app\Controllers\Controller;
use app\Models\User;
use Application\View\View;
use Database\DB;

class PainelController extends Controller
{
    public function painel()
    {

        $instance = new User();
        $users = $instance->getAll();
        $nome = 'Thauan2';

        dd($users);
        // $attributes['user_id'] = 1;
        // $attributes['email'] = 'thaubr28@gmail.com';
        // $attributes['name'] = 'Thauan';
        // $attributes['password'] = '12345678';

        // $users = $instance->save($attributes);

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
