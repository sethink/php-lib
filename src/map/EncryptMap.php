<?php
namespace sethink\functionLib\map;

class EncryptMap{
    /**
     * @加密
     *
     * @param $txt @加密字符
     * @param string $key @key
     * @return string
     */
    public function passport_encrypt($txt, $key = '5cb1bec5931b5476b3162a697fb50ddf')
    {
        srand((double)microtime() * 1000000);
        $encrypt_key = md5(rand(0, 32000));
        $ctr         = 0;
        $tmp         = '';
        for ($i = 0; $i < strlen($txt); $i++) {
            $ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr;
            $tmp .= $encrypt_key[$ctr] . ($txt[$i] ^ $encrypt_key[$ctr++]);
        }
        return base64_encode($this->passport_key($tmp, $key));
    }


    /**
     * @解密
     *
     * @param $txt @解密字符
     * @param string $key @key
     * @return string
     */
    public function passport_decrypt($txt, $key = '5cb1bec5931b5476b3162a697fb50ddf')
    {
        $txt = $this->passport_key(base64_decode($txt), $key);
        $tmp = '';
        for ($i = 0; $i < strlen($txt); $i++) {
            $md5 = $txt[$i];
            $tmp .= $txt[++$i] ^ $md5;
        }

        return $tmp;
    }


    /**
     * @生成密钥
     *
     * @param $txt
     * @param $encrypt_key
     * @return string
     */
    protected function passport_key($txt, $encrypt_key)
    {
        $encrypt_key = md5($encrypt_key);
        $ctr         = 0;
        $tmp         = '';
        for ($i = 0; $i < strlen($txt); $i++) {
            $ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr;
            $tmp .= $txt[$i] ^ $encrypt_key[$ctr++];
        }
        return $tmp;
    }
}