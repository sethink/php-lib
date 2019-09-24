<?php

namespace sethink\phpLib;

class SplFile
{

    /**
     * @检测远程文件是否存在
     * @param $url
     * @return bool
     */
    public static function remote_file_exists($url)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_NOBODY, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
        $result = curl_exec($curl);

        $found = false;
        if ($result !== false) {
            $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            if ($statusCode == 200) {
                $found = true;
            }
        }

        curl_close($curl);
        return $found;
    }

}