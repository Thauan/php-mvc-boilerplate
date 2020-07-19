<?php

const Environment = 'dev';

if (Environment === 'dev') {
    // error_reporting(E_ALL);
    error_reporting(E_ERROR | E_PARSE);
    ini_set("display_errors", 1);
}