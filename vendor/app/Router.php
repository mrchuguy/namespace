<?php
namespace app;
use controllers\Main as contrMain;
class Router {
    static public function init(){	
	$routes = explode('/', $_SERVER['REQUEST_URI']);
	$controller_name = strtolower($routes[1]);
	$controller_name = ucfirst($controller_name);
	$action_name = strtolower($routes[2]);
	
	
	$controller_path = "vendor/controllers/" . $controller_name . '.php';
	if (!file_exists($controller_path)) {
	    self::ErrorPage404();
	}
	$controller = new contrMain();
	if (method_exists($controller, $action_name)) {
	    $controller->$action_name();
	} else {
	    self::ErrorPage404();
	}
    }

    static public function ErrorPage404() {
	header($_SERVER['SERVER_PROTOCOL'] . ' 404 not found');
	exit();
    }
    }

