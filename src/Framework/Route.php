<?php

namespace App\Framework;

class Route
{
    public static $_routes;

    public function __construct(array $routes = null)
    {
        if ($routes !== null) {
            self::$_routes = $routes;
        }
    }

    public static function add($route)
    {
        self::$_routes[] = $route;
    }

}