<?php

namespace sethink\phpLib;

class SplString
{

    /**
     * @字符串转hex
     * @param $str
     * @return string
     */
    public static function str2hex($str)
    {
        $str          = mb_convert_encoding($str, 'GBK', 'UTF-8');
        $change_after = '';
        for ($i = 0; $i < strlen($str); $i++) {
            $temp_str     = dechex(ord($str[$i]));
            $change_after .= $temp_str[0] . $temp_str[1];
        }
        return strtoupper($change_after);
    }


    /**
     * @hex转字符串
     * @param $hex
     * @return string
     */
    public static function hex2str($hex)
    {
        $hex_arr = str_split(strtolower($hex), 2);
        $str     = '';
        for ($i = 0; $i < count($hex_arr); $i++) {
            $str .= chr(hexdec($hex_arr[$i][0] . $hex_arr[$i][1]));
        }
        return mb_convert_encoding($str, 'UTF-8', 'GBK');
    }

    /**
     * @获取文件后缀
     * @param $path
     * @return bool|string
     */
    public static function getFileExt($path)
    {
        return substr(strrchr($path, '.'), 1);
    }

    /**
     * @阿拉伯转中文
     * @param $number
     * @return string
     */
    public static function num2chr($number)
    {
        $string = '';

        if (strlen($number) > 0) {
            $string .= self::num2chrRender(substr($number, -4));
        }
        $number = substr($number, 0, -4);

        if ($number && strlen($number) > 0) {
            $string = self::num2chrRender(substr($number, -4)) . '万' . $string;
        }
        $number = substr($number, 0, -4);

        if ($number && strlen($number) > 0) {
            $string = self::num2chrRender(substr($number, -4)) . '亿' . $string;
        }

        return $string;
    }

    /**
     * @param $number
     * @return string
     */
    private static function num2chrRender($number)
    {
        $string = '';

        if (strlen($number) == 4) {
            if (substr($number, 0, 1) == 0 && mb_substr($string, -1, 1, 'utf-8') == '零') {
            } else {
                $string .= self::num2chrRender2(substr($number, 0, 1)) == '零' ? '零' : self::num2chrRender2(substr($number, 0, 1)) . '千';
            }
            $number = substr($number, 1, strlen($number));
        }

        if (strlen($number) == 3) {
            if (substr($number, 0, 1) == 0 && mb_substr($string, -1, 1, 'utf-8') == '零') {
            } else {
                $string .= self::num2chrRender2(substr($number, 0, 1)) == '零' ? '零' : self::num2chrRender2(substr($number, 0, 1)) . '百';
            }
            $number = substr($number, 1, strlen($number));
        }

        if (strlen($number) == 2) {
            if (substr($number, 0, 1) == 0 && mb_substr($string, -1, 1, 'utf-8') == '零') {
            } else {
                $string .= self::num2chrRender2(substr($number, 0, 1)) == '零' ? '零' : self::num2chrRender2(substr($number, 0, 1)) . '十';
            }
            $number = substr($number, 1, strlen($number));
        }

        if (strlen($number) == 1) {
            if (substr($number, 0, 1) == 0 && mb_substr($string, -1, 1, 'utf-8') == '零') {
            } else {

                $string .= self::num2chrRender2(substr($number, 0, 1)) == '零' ? '' : self::num2chrRender2(substr($number, 0, 1));
            }
        }

        if (mb_strrpos($string, '零') && mb_strrpos($string, '零') + 1 == mb_strlen($string)) {

            $string = mb_substr($string, 0, mb_strlen($string) - 1);
        }
        return $string;
    }

    /**
     * @param $key
     * @return mixed
     */
    private static function num2chrRender2($key)
    {
        $array = [
            '零',
            '一',
            '二',
            '三',
            '四',
            '五',
            '六',
            '七',
            '八',
            '九'
        ];

        return $array[$key];
    }


    /**
     * @中文转阿拉伯
     * @param $string
     * @return float|int|mixed
     */
    public static function chr2num($string)
    {
        $number = 0;

        $array_tmp = explode("亿", $string);
        if (count($array_tmp) == 2) {
            $number    += self::chr2numRender($array_tmp[0]) * 100000000;
            $array_tmp = $array_tmp[1];
        } else {
            $array_tmp = $array_tmp[0];
        }

        $array_tmp = explode("万", $array_tmp);
        if (count($array_tmp) == 2) {
            $number    += self::chr2numRender($array_tmp[0]) * 10000;
            $array_tmp = $array_tmp[1];
        } else {
            $array_tmp = $array_tmp[0];
        }

        if (strlen($array_tmp) > 0) {
            $number += self::chr2numRender($array_tmp);
        }

        return $number;
    }

    /**
     * @param $string
     * @return float|int|mixed
     */
    private static function chr2numRender($string)
    {
        $number = 0;

        $array_tmp = explode("千", $string);

        if (count($array_tmp) == 2) {
            $number    += self::chr2numRender2($array_tmp[0]) * 1000;
            $array_tmp = $array_tmp[1];
        } else {
            $array_tmp = $array_tmp[0];
        }

        $array_tmp = explode("百", $array_tmp);
        if (count($array_tmp) == 2) {
            $number    += self::chr2numRender2($array_tmp[0]) * 100;
            $array_tmp = $array_tmp[1];
        } else {
            $array_tmp = $array_tmp[0];
        }

        $array_tmp = explode("十", $array_tmp);
        if (count($array_tmp) == 2) {
            $number    += self::chr2numRender2($array_tmp[0]) * 10;
            $array_tmp = $array_tmp[1];
        } else {
            $array_tmp = $array_tmp[0];
        }

        if (strlen($array_tmp) > 0) {
            $number += self::chr2numRender2($array_tmp);
        }

        return $number;
    }

    /**
     * @param $key
     * @return mixed
     */
    private static function chr2numRender2($key)
    {
        $array = [
            '一' => 1,
            '二' => 2,
            '三' => 3,
            '四' => 4,
            '五' => 5,
            '六' => 6,
            '七' => 7,
            '八' => 8,
            '九' => 9
        ];

        $key = ltrim($key, '零');
        return $array[$key];
    }


    /**
     * @获取中文字符串中的中文数字
     * @param $string
     * @return string
     */
    public static function getChrNum($string)
    {
        $chrNum    = "零";
        $array_tmp = [];
        $bins      = ['零', '一', '二', '三', '四', '五', '六', '七', '八', '九', '十', '百', '千', '万', '亿'];

        $length = mb_strlen($string);

        for ($i = 0; $i < $length; $i++) {
            $value      = mb_substr($string, $i, 1);
            $value_next = mb_substr($string, $i + 1, 1);
            if (in_array($value, $bins)) {
                $array_tmp[$i] = $value;
                if (!in_array($value_next, $bins)) {
                    break;
                }
            }
        }

        if (count($array_tmp) > 0) {
            $chrNum = implode("", $array_tmp);
        }

        return $chrNum;
    }


}