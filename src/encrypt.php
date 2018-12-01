<?php

namespace sethink\functionLib;

use sethink\functionLib\map\EncryptMap;

/**
 * Class Encrypt
 * @package sethink\functionLib\map\EncryptMap
 * @method EncryptMap passport_encrypt(string $txt, string $key = '') static
 * @method EncryptMap passport_decrypt(string $txt, string $key = '') static
 */
class Encrypt
{
    public static function __callStatic($method, $args)
    {

        $class = '\\sethink\\functionLib\\map\\EncryptMap';
        return call_user_func_array([new $class, $method], $args);
    }
}