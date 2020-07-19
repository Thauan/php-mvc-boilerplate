<?php

namespace Application\View;

class View
{
    // public $path = '/media/thauan/Mint14/Workspace/mvc/resources/views';

    public static function make($nameFile)
    {
        $path = __DIR__.'resources/views';

        $pathName = explode("public", $_SERVER['DOCUMENT_ROOT']);

        if (!file_exists($pathName[0].'resources/views/'.$nameFile.'.'.'phtml')) {
            echo 'View não encontrada';
        }

        include $pathName[0].'resources/views/'.$nameFile.'.'.'phtml';
    }
}
