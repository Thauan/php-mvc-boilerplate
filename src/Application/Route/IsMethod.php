<?php

namespace Application\Route;

class IsMethod
{
    public static function callMethod($controller, $method)
    {
        // if (file_exists($controller . 'php')) {
            if (method_exists($controller, $method)) {
                var_dump($_SERVER['REQUEST_URI']);
                $controller->$method();
            } else {
                var_dump($_SERVER['REQUEST_URI']);
                echo 'Paggina 404';
            }
        // }
        // $controller->missingMethod();
    }
}
