<?php

namespace sethink\functionLib;

use sethink\functionLib\map\SplArrayMap;

/**
 * Class SplArray
 * @package sethink\functionLib\map\SplArrayMap
 * @method SplArrayMap deleteValue(array $delArray, array $array) static    删除指定值
 * @method SplArrayMap getColumnValue(string $column, array $array) static  获取指定列的值(多维数组)
 * @method SplArrayMap unique(array $array) static
 * @method SplArrayMap multiple(array $array) static
 */
class SplArray
{

    public static function __callStatic($method, $args)
    {
        $class = '\\sethink\\functionLib\\map\\SplArrayMap';
        return call_user_func_array([new $class, $method], $args);
    }

}