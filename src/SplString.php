<?php

namespace sethink\functionLib;

use sethink\functionLib\map\SplStringMap;

/**
 * Class SplString
 * @package sethink\functionLib\map\SplStringMap
 * @method SplStringMap str2hex(string $str) static 字符串转hex
 * @method SplStringMap hex2str(string $hex) static hex转字符串
 */
class SplString
{

    public static function __callStatic($method, $args)
    {
        $class = '\\sethink\\functionLib\\map\\SplStringMap';
        return call_user_func_array([new $class, $method], $args);
    }

}