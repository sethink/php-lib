<?php
include_once "./src/SplArray.php";
include_once "./src/map/SplArrayMap.php";
include_once "./src/Encrypt.php";
include_once "./src/map/EncryptMap.php";
include_once "./src/SplString.php";
include_once "./src/map/SplStringMap.php";
include_once "./src/Common.php";
include_once "./src/map/CommonMap.php";
include_once "./src/Validate.php";
include_once "./src/map/ValidateMap.php";

use sethink\functionLib\SplArray;
use sethink\functionLib\Encrypt;
use sethink\functionLib\SplString;
use sethink\functionLib\Common;
use sethink\functionLib\Validate;

class Demo
{
    public function index(){
        var_dump(Validate::boolean('1'));
    }
}

$obj = new Demo();
$obj->index();