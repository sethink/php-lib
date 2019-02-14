<?php

namespace sethink\functionLib;

use sethink\functionLib\map\SplTimeMap;

/**
 * Class SplTime
 * @package sethink\functionLib\map\SplTimeMap
 * @method SplTimeMap microtime(bool $bool=true) static 获取毫秒或者微秒时间戳，默认为毫秒，如果$bool=true则为微秒
 */
class SplTime
{

    public static function __callStatic($method, $args)
    {
        $class = '\\sethink\\functionLib\\map\\SplTimeMap';
        return call_user_func_array([new $class, $method], $args);
    }

}