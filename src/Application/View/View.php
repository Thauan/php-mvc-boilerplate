<?php

namespace Application\View;

use ETI\BLADE\Blade;

class View
{
    protected $path;

    public function __construct()
    {
    }

    public static function make($view, array $params = [])
    {
        $path = explode("public", $_SERVER['DOCUMENT_ROOT']);
        $views = $path[0] . "resources/views/";
        $cache = $path[0] . "storage/cache";

        $blade = new Blade($views, $cache);

        echo $blade->view()->make($view, $params)->render();
    }
}
