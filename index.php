<?php

include 'vendor/autoload.php';

use app\framework\Route;
use app\Application;

$config = require 'config/web.php';

$route = new Route();
$route::add('test');
$app = new Application($config);

echo 'Routes: <br>';

var_dump($route);
echo '<br>';
echo 'Application name: ' . $app->appName;
echo 'Config values: <br>';
var_dump($app::$config);