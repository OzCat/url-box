url-shorter
===========

url-shorter func base on PHP

## How To Use/Demo

###Baidu dwz.cn

```
include_once 'func/baidu_dwz.func.php';
$url  = "http://url.com";
$surl = bd_dwz('1',$url);
echo $surl;
```
###is.gd

```
include_once 'func/isgd.func.php';
$url   = "http://url.com";
$surl  = isgdsrt($url);
echo $surl;
```

###bit.ly

please edit the token in file func/bitly.func.php before using.
```
include_once 'func/bitly.func.php';
$url   = "http://url.com";
$surl  = bitlysrt($url);
echo $surl;
```
