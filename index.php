<?php
use app\Router;
spl_autoload_register(function($class){
    $path = 'vendor'.DIRECTORY_SEPARATOR.$class.'.php';
    if(file_exists($path)){
	include_once $path;
	return true;
    }
    return FALSE;
});

Router::init();