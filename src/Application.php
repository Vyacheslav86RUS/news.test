<?php

namespace App;

use App\Framework\Route;

class Application
{
    public $appName = 'News';
    public static $config;

    public function __construct($config)
    {
        self::$config = $config;
    }
}