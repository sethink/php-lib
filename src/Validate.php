<?php

namespace sethink\functionLib;

use sethink\functionLib\map\ValidateMap;

/**
 * Class Validate
 * @package sethink\functionLib\map\ValidateMap
 * @method ValidateMap required(string $string) static 必填
 * @method ValidateMap date(string $string) static 有效时间
 * @method ValidateMap alpha(string $string) static 只允许字母
 * @method ValidateMap alphaNum(string $string) static 只允许字母和数字
 * @method ValidateMap alphaDash(string $string) static 只允许字母、数字和下划线 破折号
 * @method ValidateMap chs(string $string) static 只允许汉字
 * @method ValidateMap chsAlpha(string $string) static 只允许汉字、字母
 * @method ValidateMap chsAlphaNum(string $string) static 只允许汉字、字母和数字
 * @method ValidateMap chsDash(string $string) static 只允许汉字、字母、数字和下划线_及破折号-
 * @method ValidateMap activeUrl(string $string) static 是否为有效的网址(不带http)
 * @method ValidateMap ip(string $string) static 是否为IP地址
 * @method ValidateMap url(string $string) static 是否为一个URL地址
 * @method ValidateMap float(string $string) static 是否为float
 * @method ValidateMap number(string $string) static 是否为数字
 * @method ValidateMap integer(string $string) static 是否为整型
 * @method ValidateMap email(string $string) static 是否为邮箱地址
 * @method ValidateMap boolean(string $string) static 是否为布尔值
 * @method ValidateMap isArray(string $string) static 是否为数组
 * @method ValidateMap IDCard(string $string) static 验证身份证
 */
class Validate
{

    public static function __callStatic($method, $args)
    {
        $class = '\\sethink\\functionLib\\map\\ValidateMap';
        return call_user_func_array([new $class, $method], $args);
    }

}