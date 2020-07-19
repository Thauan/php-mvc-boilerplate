<?php

namespace Application\Route;

class Uri
{
    public static function getURI()
    {
        return $_SERVER['REQUEST_URI'];
    }
}
