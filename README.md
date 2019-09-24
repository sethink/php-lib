# php-lib
常用函数库

# Common
```
## Common::httpType()
判断是http还是https

## Common::getClientIp()
获取客户端ip地址
```

# Encrypt
```
## Encrypt::passport_encrypt($txt,$key)
加密字符串。$txt要加密字符，$key加密key

## Encrypt::passport_decrypt($txt,$key)
解密字符串。$txt待解密字符，$key解密key
```

# SplArray
```
## SplArray::deleteValue($delArray,$array)
删除指定值。只能处理一维数组

## SplArray::getColumnValue($column,$array)
获取指定列的值（多维数组）。

## SplArray::unique($array)
数组去重

## SplArray::multiple($array)
获取重复值
```


# SplFile
```
## SplFile::remote_file_exists($url)
检测远程文件是否存在

## SplFile::getExt($path)
获取文件后缀


# SplString
## SplString::str2hex($str)
字符串转hex

## SplString::hex2str($hex)
hex转字符串
```


# SplTime
```
## SplTime::microtime($bool)
获取毫秒或者微秒时间戳，默认为毫秒
如果$bool=true则为微秒
```


# Validate
```
## Validate::required($string)
必填

## Validate::date($string)
验证有效时间

## Validate::alpha($string)
只允许字母

## Validate::alphaNum($string)
只允许字母和数字

## Validate::alphaDash($string)
只允许字母、数字和下划线 破折号

## Validate::chs($string)
只允许汉字

## Validate::chsAlpha($string)
只允许汉字、字母

## Validate::chsAlphaNum($string)
只允许汉字、字母和数字

## Validate::chsDash($string)
只允许汉字、字母、数字和下划线及破折号

## Validate::activeUrl($string)
是否为有效的网址（不带http和https）

## Validate::ip($string)
是否为ip地址

## Validate::url($string)
是否为一个URL地址

## Validate::float($string)
是否为float

## Validate::number($string)
是否为数字

## Validate::integer($string)
是否为整型

## Validate::email($string)
是否为邮箱地址

## Validate::boolean($string)
是否为布尔值

## Validate::isArray($string)
是否为数组

## Validate::IDCard($string)
是否为身份证号码
```