<?php

namespace sethink\functionLib;

use sethink\functionLib\map\SplStringMap;

/**
 * Class SplString
 * @package sethink\functionLib\map\SplStringMap
 * @method SplStringMap str2ascii(string $str) static 字符串转ascii
 * @method SplStringMap ascii2str(string $ascii) static ascii转字符串
 * @method SplStringMap getExt(string $path) static 获取后缀
 */
class SplString
{

    public static function __callStatic($method, $args)
    {
        $class = '\\sethink\\functionLib\\map\\SplStringMap';
        return call_user_func_array([new $class, $method], $args);
    }

}