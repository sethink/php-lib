<?php
include_once "./src/SplArray.php";
include_once "./src/Encrypt.php";
include_once "./src/SplString.php";
include_once "./src/Common.php";
include_once "./src/Validate.php";
include_once "./src/SplTime.php";

class Demo
{
    public function index(){
        $rs = \sethink\phpLib\SplString::lang_s2t('测试abc');
        var_dump($rs);
    }
}

$obj = new Demo();
$obj->index();