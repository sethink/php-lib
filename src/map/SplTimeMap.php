<?php

namespace sethink\functionLib\map;

class SplTimeMap
{
    /**
     * 获取毫秒或者微秒时间戳，默认为毫秒，如果$bool=true则为微秒
     *
     * @param bool $bool
     * @return string
     */
    public function microtime($bool = false)
    {
        list($msec, $sec) = explode(" ", microtime());
        if($bool){
            $msec = number_format($msec,6)*1000000;
        }else{
            $msec = number_format($msec,3)*1000;
        }
        return $sec.$msec;
    }

}

