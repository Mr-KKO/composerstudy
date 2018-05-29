<?php
namespace Kko;

class Bootstrap
{
    private static $controller = '';
    private static $action = '';

	public static function run(){
		self::parseUrl();
	}

	public static function parseUrl(){
	    $path_info = isset($_SERVER['PATH_INFO']) ? trim($_SERVER['PATH_INFO'],'/') : 'Index/index';


        @list($controller,$method) = explode('/',$path_info);
        $controller = ucfirst(strtolower($controller));
        $class = '\app\Controller\\'.$controller.'Controller';

        $action = "index";
        if ($method){
            $action = $method;
        }

        self::$controller = $controller;
        self::$action = $action;

        (new $class)->$action();
    }

    public static function getAction(){
        return self::$action;
    }

    public static function getController(){
	    return self::$controller;
    }
}

