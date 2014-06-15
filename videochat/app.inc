<?php

ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);


//require_once(__DIR__ . "/class/AppConfig-test.php");
require_once(__DIR__ . "/class/AppConfig.php");
class MyClassLoader
{
	public static function autoload($className){
		$fullname = __DIR__ . "/class/{$className}.php";
		if(file_exists($fullname)){
			require_once($fullname);
			return;
		}
	}
}

date_default_timezone_set('Asia/Shanghai');
spl_autoload_register('MyClassLoader::autoload');

$logConf = AppConfig::get('log');
Logger::open($logConf['path']);
Logger::setLevel($logConf['level']);
?>