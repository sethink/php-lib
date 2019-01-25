<?php

namespace sethink\functionLib;

use sethink\functionLib\map\SplFileMap;

/**
 * Class SplFileMap
 * @package sethink\functionLib\map\SplFileMap
 * @method SplFileMap remote_file_exists(string $url) static 检测远程文件是否存在
 * @method SplFileMap getExt(string $path) static 检测远程文件是否存
 */
class SplFile
{

    public static function __callStatic($method, $args)
    {
        $class = '\\sethink\\functionLib\\map\\SplFileMap';
        return call_user_func_array([new $class, $method], $args);
    }

}