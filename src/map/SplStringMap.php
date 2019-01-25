<?php

namespace sethink\functionLib\map;

class SplStringMap
{
    /**
     * @字符串转hex
     *
     * @param $str
     * @return string
     */
    public function str2hex($str)
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
     *
     * @param $hex
     * @return string
     */
    public function hex2str($hex)
    {
        $hex_arr = str_split(strtolower($hex), 2);
        $str     = '';
        for ($i = 0; $i < count($hex_arr); $i++) {
            $str .= chr(hexdec($hex_arr[$i][0] . $hex_arr[$i][1]));
        }
        return mb_convert_encoding($str, 'UTF-8', 'GBK');
    }

}

