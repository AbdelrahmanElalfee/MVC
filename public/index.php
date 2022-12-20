<?php

define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__DIR__));
define("APP", ROOT . DS . 'app');
define("CONFIG", APP . DS . 'config');
define("CONTROLLERS", APP . DS . 'controllers');
define("CORE", APP . DS . 'core');
define("MODELS", APP . DS . 'models');
define("VIEWS", APP . DS . 'views' . DS);

// config
define("SERVER", '');
define("USERNAME", '');
define("PASSWORD", '');
define("DB_NAME", '');
define("DOMAIN_NAME", 'http://localhost:8888/developing/mvc/public/');

require_once("../vendor/autoload.php");

$app = new MVC\core\app();
