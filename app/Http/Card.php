<?php

namespace App\Http;

class Card
{

    public static function resolveService($name)
    {
        return app()[$name];
    }

    public static function __callStatic($method, $params)
    {
        self::resolveService('postcard')->$method(...$params);
    }
}