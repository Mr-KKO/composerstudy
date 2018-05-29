<?php
namespace Kko;

class Bootstrap
{
	public static function run(){
		self::parseUrl();
	}

	public static function parseUrl(){
	    if (isset($_GET['s'])){

        }else{
	        $class = "\app\Controller\IndexController";
	        $action = "show";
        }

        (new $class)->$action();
    }
}

