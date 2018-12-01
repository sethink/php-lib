<?php

namespace sethink\functionLib;

use sethink\functionLib\map\CommonMap;

/**
 * Class Common
 * @package sethink\functionLib\map\CommonMap
 * @method CommonMap httpType() static
 * @method CommonMap getClientIp() static
 */
class Common
{
    public static function __callStatic($method, $args)
    {
        $class = '\\sethink\\functionLib\\map\\CommonMap';
        return call_user_func_array([new $class, $method], $args);
    }
}