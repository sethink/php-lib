<?php

namespace sethink\functionLib;

use sethink\functionLib\map\SplStringMap;

/**
 * Class SplString
 * @package sethink\functionLib\map\SplStringMap
 * @method SplStringMap str2ascii(string $str) static
 * @method SplStringMap ascii2str(string $ascii) static
 * @method SplStringMap getExt(string $path) static
 */
class SplString
{

    public static function __callStatic($method, $args)
    {
        $class = '\\sethink\\functionLib\\map\\SplStringMap';
        return call_user_func_array([new $class, $method], $args);
    }

}