<?php

namespace Application\Route;

use app\Controllers\Controller;

class IsMethod
{
    public static function run($controller, $action, $parameters)
    {
        if (method_exists($controller, $action)) {
            $args = (array) $parameters;
            call_user_func_array([$controller, $action], $args);
        } else {
            $controller = new Controller;
            $controller->missingMethod();
        }
    }
}
