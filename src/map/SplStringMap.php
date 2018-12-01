<?php
namespace sethink\functionLib\map;

class SplStringMap{
    /**
     * @字符串转ascii
     *
     * @param $str
     * @return string
     */
    public function str2ascii($str)
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
     * @param $ascii
     * @return string
     */
    public function ascii2str($ascii){
        $asc_arr= str_split(strtolower($ascii),2);
        $str='';
        for($i=0;$i<count($asc_arr);$i++){
            $str.=chr(hexdec($asc_arr[$i][0].$asc_arr[$i][1]));
        }
        return mb_convert_encoding($str,'UTF-8','GBK');
    }

}

