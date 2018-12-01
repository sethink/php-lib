<?php
include_once "./src/ascii.php";
include_once "./src/encrypt.php";

class Demo
{
    public function index(){
        $str1 = passport_encrypt('fen');
        $str2 = passport_decrypt($str1);
        var_dump($str1);
        var_dump($str2);

    }
}

$obj = new Demo();
$obj->index();