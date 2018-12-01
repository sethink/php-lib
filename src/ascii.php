<?php
/**
 * 默认为utf-8编码
 */


/**
 * @字符串转ascii
 *
 * @param $str
 * @return string
 */
function str2ascii($str)
{
    $str = mb_convert_encoding($str,'GBK','UTF-8');
    $change_after = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $temp_str     = dechex(ord($str[$i]));
        $change_after .= $temp_str[0] . $temp_str[1];
    }
    return strtoupper($change_after);
}


/**
 * @ascii转字符串
 *
 * @param $sacii
 * @return string
 */
function ascii2str($sacii){
    $asc_arr= str_split(strtolower($sacii),2);
    $str='';
    for($i=0;$i<count($asc_arr);$i++){
        $str.=chr(hexdec($asc_arr[$i][0].$asc_arr[$i][1]));
    }
    return mb_convert_encoding($str,'UTF-8','GBK');
}