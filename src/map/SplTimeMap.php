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
        list($usec, $sec) = explode(" ", microtime());
        if($bool){
            $usec = number_format($usec,6)*1000000;
        }else{
            $usec = number_format($usec,3)*1000;
        }
        return $sec.$usec;
    }

}

