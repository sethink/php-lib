<?php
include_once "./src/SplArray.php";
include_once "./src/map/SplArrayMap.php";
include_once "./src/Encrypt.php";
include_once "./src/map/EncryptMap.php";
include_once "./src/SplString.php";
include_once "./src/map/SplStringMap.php";
include_once "./src/Common.php";
include_once "./src/map/CommonMap.php";

use sethink\functionLib\SplArray;
use sethink\functionLib\Encrypt;
use sethink\functionLib\SplString;
use sethink\functionLib\Common;

class Demo
{
    public function index(){
        $array = [
            '1','2','3','4','5','2','4','6'
        ];

        $array = SplArray::multiple($array);
        var_dump($array);
    }
}

$obj = new Demo();
$obj->index();