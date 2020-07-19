<?php

namespace Application\Route;

class Uri
{
    public static function getUri()
    {
        return $_SERVER['REQUEST_URI'];
    }
}
