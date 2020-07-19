<?php

namespace Application\Route;

class ParseRoute
{
    public static function parse($route)
    {
            $params = explode('/', $route);

            unset($params[0]);

            $method = (isset($params[1]) && $params[1] !== '') ? $params[1] : 'index';
            unset($params[1]);

            return $method;
        }
}
