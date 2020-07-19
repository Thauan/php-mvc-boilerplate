<?php

namespace Application\Route;

use Application\Route\ParseRoute;
use Application\Route\IsMethod;
use Application\Route\Uri;

class Route
{
    protected static $route = null;

    public static function controller($route, $controller)
    {
        if ($route == substr(self::getURL(), 0, strlen($route)) && self::$route == null) {
            self::$route = $route;

            $method = ParseRoute::parse(self::getURL());
            $parameters = $method['params'];
            $action = $method['action'];

            IsMethod::run($controller, $action, $parameters);
        }
    }

    public static function getURL()
    {
        $uri = Uri::getURI();
        return $uri;
    }
}
