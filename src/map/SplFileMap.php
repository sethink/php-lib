<?php

namespace sethink\functionLib\map;

class SplFileMap
{
    /**
     * @检测远程文件是否存在
     *
     * @param $url
     * @return bool
     */
    public function remote_file_exists($url)
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

    /**
     * @获取文件后缀
     *
     * @param $path
     * @return bool|string
     */
    public function getExt($path)
    {
        return substr(strrchr($path, '.'), 1);
    }


}

