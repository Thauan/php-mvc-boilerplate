<?php

foreach (glob(__DIR__ . '/../config/*.php') as $file) {
    include_once $file;
}


require_once __DIR__ . '/../vendor/autoload.php';

session_start();
 
try {
  
    include_once __DIR__ . '/../app/routes.php';
    require_once __DIR__ . '/../bootstrap/autoload.php';

} catch(\Exception $e){
     
    echo $e->getMessage();
}